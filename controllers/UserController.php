<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
include_once '../models/CategoryModel.php';
include_once '../models/GameModel.php';
include_once '../models/UserModel.php';
include_once '../models/ArticleModel.php';
include_once '../models/GalleryModel.php';
include_once '../models/ReviewsModel.php';

function testAction(){
  $post = file_get_contents('php://input');
  $response = json_decode($post, true);
  d($response);
}

function profileAction($smarty){
  if(!isset($_SESSION['user'])){
    require_once('/capchaUser/capcha.php');
  }
  $userId = isset($_GET['id']) ? $_GET['id'] : null;
  if($userId != null){
    $rsUser = getUserById($userId);
    if(!$rsUser){
      header('Location: /notfound/');
    } else {
      if($rsUser['user_link'] != ""){
        header('Location: /user/profile/'.$rsUser['user_link'].'/');
      }
    }
  } else {
    $userId = isset($_GET['name']) ? $_GET['name'] : null;
    if($userId != null){
      $rsUser = getUserByLink($userId);
      if(!$rsUser){
        header('Location: /notfound/');
      }
    } else {
      header('Location: /notfound/');
    }
  }
  
  $rsUserOrders = getlastpay($rsUser['id_user']);
  foreach ($rsUserOrders as $order) {
    $GamesId[] = explode(',', $order['order_games_id']);
  }
  $index = count($GamesId);
  for ($i = 0; $i < $index; $i++) { 
    $indexJ = count($GamesId[$i]);
    for ($j = 0; $j < $indexJ; $j++) { 
      $GameInfo[] = getGameForUser($GamesId[$i][$j]);
    }
  }
  $rsHistory = getlastpay($rsUser['id_user']);
  foreach ($rsHistory as $history) {
    $cnt = $cnt + $history['order_games_cnt'];
  }

  $rsGetBadge = getBadge($cnt);

  $rsLevel = getLevel($rsUser['user_level']);
  $rsUserPlus = $rsUser['user_level'] - $rsLevel[0]['cnt_level'];
  $rsLevelPlus = getLevelPlus($rsUserPlus);

  $rsWishList = getWishList($rsUser['id_user']);
  $cntWishList = count($rsWishList);
  $rsGallery = getGalleryById($rsUser['id_user']);
  $cntPic = count(getGalleryById($rsUser['id_user']));

  $Countries = getCountries($rsUser['user_country']);

  $dir = "templates/default/assets/images/flags/";
	$needle = $Countries['name_country'];

	if (is_dir($dir)) {
		
	    if ($dh = opendir($dir)) {
	        while (($file = readdir($dh)) !== false) {
	            similar_text($file, $needle, $percent);
	            if($percent > 50)
	            	$flag = $file;
	                
	        }
	        closedir($dh);
	    }
	}

  $cntReviews = count(getReviewsByUser($rsUser['id_user']));

  $rsComments = getUserComments($rsUser['id_user']);
  $cntComments = count($rsComments);

  $rsFriends = getFriendList($rsUser['id_user']);

  if($rsFriends){
    foreach ($rsFriends as $friend) {
      if($friend['parent_user'] == $rsUser['id_user']){
        $user = getUserById($friend['child_user']);
      } else {
        $user = getUserById($friend['parent_user']);
      }

      $rsFriendsUsers[$friend['id_list']] = $user;
    }

    $cntFriends = count($rsFriendsUsers);

    foreach ($rsFriendsUsers as $user) {
      $rsLevelFriend[$user['id_user']] = getLevel($user['user_level']);
      $rsPlusFriend = $user['user_level'] - $rsLevelFriend[$user['id_user']][0]['cnt_level'];
      $rsLevelPlusFriend[$user['id_user']] = getLevelPlus($rsPlusFriend);
    }
  }

  if(isset($_SESSION['user'])){
    $checkFriend = checkFriend($rsUser['id_user'], $_SESSION['user']['id_user']);
  }

  $smarty->assign('rsHistory', $rsHistory);
  $smarty->assign('pageTitle', $rsUser['user_name']);
  $smarty->assign('rsUser', $rsUser);
  $smarty->assign('rsGetBadge', $rsGetBadge[0]);
  $smarty->assign('cnt', $cnt);
  $smarty->assign('rsLevel', $rsLevel[0]['cnt_level']);
  $smarty->assign('rsLevelPlus', $rsLevelPlus[0]['cnt_lvl_plus']);
  $smarty->assign('cntWishList', $cntWishList);
  $smarty->assign('flag', $flag);
  $smarty->assign('Countries', $Countries);
  $smarty->assign('cntPic', $cntPic);
  $smarty->assign('rsGallery', $rsGallery);
  $smarty->assign('cntReviews', $cntReviews);
  $smarty->assign('rsComments', $rsComments);
  $smarty->assign('cntComments', $cntComments);
  $smarty->assign('rsFriendsUsers', $rsFriendsUsers);
  $smarty->assign('cntFriends', $cntFriends);
  $smarty->assign('checkFriend', $checkFriend);

  $smarty->assign('rsLevelFriend', $rsLevelFriend);
  $smarty->assign('rsLevelPlusFriend', $rsLevelPlusFriend);
  
  loadTemplate($smarty, 'user/head');
  loadTemplate($smarty, 'index/header');
  loadTemplate($smarty, 'user/page');
  loadTemplate($smarty, 'index/footer');
}

function editAction($smarty){
	$userId = isset($_GET['id']) ? $_GET['id'] : null;
	if($userId != null){
	  if(isset($_SESSION['user']) && $_SESSION['user']['id_user'] == $userId){
	    $rsUser = getUserById($userId);
	    if(!$rsUser){
	      header('Location: /notfound/');
	    } else {
	    	if($rsUser['user_link'] != ""){
	      	header('Location: /user/edit/'.$rsUser['user_link'].'/');
	    	}
	    }
	  }
	} else {
	  $userId = isset($_GET['name']) ? $_GET['name'] : null;
	  if($userId != null){
	    if(isset($_SESSION['user']) && $_SESSION['user']['user_link'] == $userId){
	      $rsUser = getUserByLink($userId);
	      if(!$rsUser){
	        header('Location: /notfound/');
	      }
	    } else {
	      if($rsUser['user_link'] == ""){
		      header('Location: /user/edit/'.$_SESSION['user']['id_user'].'/');
		  }
	    }
	}
	}

	if($arUser['2FA'] == 0){
		require_once '2FA/GoogleAuthenticator.php';
		$ga = new PHPGangsta_GoogleAuthenticator();
		$secret = $ga->createSecret();

		$qrCodeUrl = $ga->getQRCodeGoogleUrl('Good Games 2FA', $secret);
		$qrImg = '<img src="'.$qrCodeUrl.'">';

		$smarty->assign('secret', $secret);
		$smarty->assign('qrImg', $qrImg);
	}

	$rsCountries = getAllCountries();

	foreach ($rsCountries as $country) {
		if($rsUser['user_country'] == $country['code_country']){
			$userCountry = $country;
		}
	}

    $smarty->assign('pageTitle', $rsUser['user_name']);
    $smarty->assign('rsUser', $rsUser);
    $smarty->assign('rsCountries', $rsCountries);
    $smarty->assign('userCountry', $userCountry);

    loadTemplate($smarty, 'user/head');
    loadTemplate($smarty, 'index/header');
    loadTemplate($smarty, 'user/edit');
    loadTemplate($smarty, 'index/footer');
}

function historyAction($smarty){
  if(!isset($_SESSION['user'])){
    require_once('/capchaUser/capcha.php');
  }
  $userId = isset($_GET['id']) ? $_GET['id'] : null;
  if($userId != null){
    $rsUser = getUserById($userId);
    if(!$rsUser){
      header('Location: /notfound/');
    } else {
      if($rsUser['user_link'] != ""){
        header('Location: /user/history/'.$rsUser['user_link'].'/');
      }
    }
  } else {
    $userId = isset($_GET['name']) ? $_GET['name'] : null;
    if($userId != null){
      $rsUser = getUserByLink($userId);
      if(!$rsUser){
        header('Location: /notfound/');
      }
    } else {
      header('Location: /notfound/');
    }
  }

  $rsHistory = getlastpay($rsUser['id_user']);
  foreach ($rsHistory as $history) {
    $parseGames[$history['id_order']] = explode(',', $history['order_games_name']);
  }

  $smarty->assign('pageTitle', 'История покупок');
  $smarty->assign('rsUser', $rsUser);
  $smarty->assign('rsHistory', $rsHistory);
  $smarty->assign('parseGames', $parseGames);

  loadTemplate($smarty, 'index/head');
  loadTemplate($smarty, 'index/header');
  loadTemplate($smarty, 'user/history');
  loadTemplate($smarty, 'index/footer');
}

function wishlistAction($smarty){
  if(!isset($_SESSION['user'])){
    require_once('/capchaUser/capcha.php');
  }
    $userId = isset($_GET['id']) ? $_GET['id'] : null;
  if($userId != null){
    $rsUser = getUserById($userId);
    if(!$rsUser){
      header('Location: /notfound/');
    } else {
      if($rsUser['user_link'] != ""){
        header('Location: /user/profile/'.$rsUser['user_link'].'/');
      }
    }
  } else {
    $userId = isset($_GET['name']) ? $_GET['name'] : null;
    if($userId != null){
      $rsUser = getUserByLink($userId);
      if(!$rsUser){
        header('Location: /notfound/');
      }
    } else {
      header('Location: /notfound/');
    }
  }

  $rsWishList = getWishList($rsUser['id_user']);
  
  if($rsWishList){
    foreach ($rsWishList as $list) {
      $game = getProductById($list['wish_game_id']);
      $rsGames[$list['wish_game_id']] = $game;
    }

    foreach ($rsGames as $game) {
      $key = 0;
      $dir = opendir("images/games/".$game['id_game'].'/');
          while ($file = readdir ($dir))
          {
              if(($file != "..") && ($file != ".")) {
              $namePhoto[$game['id_game']][$key] = $file;
              $key++;
          }
          }
      closedir($dir);

      $rsPlatforms = explode(',', $game['platform_id']);
      foreach ($rsPlatforms as $plat) {
        $platform = getPlatformById($plat);
        $Platforms[$game['id_game']][] = $platform;
      }
    }

    $smarty->assign('rsGames', $rsGames);
    $smarty->assign('Platforms', $Platforms);
    $smarty->assign('namePhoto', $namePhoto);
  }
  $smarty->assign('pageTitle', 'Список желаемого');
  $smarty->assign('rsUser', $rsUser);

  loadTemplate($smarty, 'index/head');
  loadTemplate($smarty, 'index/header');
  loadTemplate($smarty, 'user/wishlist/wishlist');
  loadTemplate($smarty, 'index/footer');
}

function friendsAction($smarty){
  if(!isset($_SESSION['user'])){
    require_once('/capchaUser/capcha.php');
  }
  $userId = isset($_GET['id']) ? $_GET['id'] : null;
  if($userId != null){
    $rsUser = getUserById($userId);
    if(!$rsUser){
      header('Location: /notfound/');
    } else {
      if($rsUser['user_link'] != ""){
        header('Location: /user/friends/'.$rsUser['user_link'].'/');
      }
    }
  } else {
    $userId = isset($_GET['name']) ? $_GET['name'] : null;
    if($userId != null){
      $rsUser = getUserByLink($userId);
      if(!$rsUser){
        header('Location: /notfound/');
      }
    } else {
      header('Location: /notfound/');
    }
  }

  if(!isset($_SESSION['user']) && $rsUser['id_user'] != $_SESSION['user']['id_user']){
    header('Location: /notfound/');
  }

  $rsFriends = getFriendList($rsUser['id_user']);

  if($rsFriends){
    foreach ($rsFriends as $friend) {
      if($friend['parent_user'] == $rsUser['id_user']){
        $user = getUserById($friend['child_user']);
      } else {
        $user = getUserById($friend['parent_user']);
      }

      $rsFriendsUsers[$friend['id_list']] = $user;
    }

    $cntFriends = count($rsFriendsUsers);
  }

  $rsPendingFriends = getPendingFriends($_SESSION['user']['id_user']);

  foreach ($rsPendingFriends['send'] as $send) {
    $user = getUserById($send['child_user']);
    $rsSendUsers[] = $user;
  }

  if($rsSendUsers){
    foreach ($rsSendUsers as $user) {
      $rsLevelSend[$user['id_user']] = getLevel($user['user_level']);
      $rsPlusSend = $user['user_level'] - $rsLevelSend[$user['id_user']][0]['cnt_level'];
      $rsLevelPlusSend[$user['id_user']] = getLevelPlus($rsPlusSend);
    }
  }
  
  foreach ($rsPendingFriends['accept'] as $accept) {
    $user = getUserById($accept['parent_user']);
    $rsAcceptUsers[] = $user;
  }

  if($rsAcceptUsers){
    foreach ($rsAcceptUsers as $user) {
      $rsLevelAccept[$user['id_user']] = getLevel($user['user_level']);
      $rsPlusAccept = $user['user_level'] - $rsLevelAccept[$user['id_user']][0]['cnt_level'];
      $rsLevelPlusAccept[$user['id_user']] = getLevelPlus($rsPlusAccept);
    }
  }

  $cntSend = count($rsPendingFriends['send']);
  $cntAccept = count($rsPendingFriends['accept']);
  $cntPending = $cntSend + $cntAccept;

  $smarty->assign('pageTitle', 'Друзья '.$rsUser['user_name']);

  $smarty->assign('rsUser', $rsUser);
  $smarty->assign('rsFriendsUsers', $rsFriendsUsers);
  $smarty->assign('cntFriends', $cntFriends);
  $smarty->assign('rsSendUsers', $rsSendUsers);
  $smarty->assign('rsAcceptUsers', $rsAcceptUsers);
  $smarty->assign('cntPending', $cntPending);
  $smarty->assign('rsLevelSend', $rsLevelSend);
  $smarty->assign('rsLevelPlusSend', $rsLevelPlusSend);
  $smarty->assign('rsLevelAccept', $rsLevelAccept);
  $smarty->assign('rsLevelPlusAccept', $rsLevelPlusAccept);
  


  loadTemplate($smarty, 'user/head');
  loadTemplate($smarty, 'index/header');
  loadTemplate($smarty, 'user/friends');
  loadTemplate($smarty, 'index/footer');
}

function searchusersAction($smarty){
  if(!isset($_SESSION['user'])){
    require_once('/capchaUser/capcha.php');
  }
    if($_POST['user_name'] != ''){
      $userName = $_POST['user_name'];
      $rsUsers = getUsersBySearchName($userName);
    } else {
      $rsUsers = null;
    }
    
    if(isset($_SESSION['user']) && $rsUsers != null){
      foreach ($rsUsers as $user) {
        $checkFriend[$user['id_user']] = checkFriend($user['id_user'], $_SESSION['user']['id_user']);
      }
    }
    
    $smarty->assign('rsUsers', $rsUsers);
    $smarty->assign('userName', $userName);
    $smarty->assign('checkFriend', $checkFriend);

    loadTemplate($smarty, 'user/head');
    loadTemplate($smarty, 'index/header');
    loadTemplate($smarty, 'user/search');
    loadTemplate($smarty, 'index/footer');
}

function addreviewAction(){
	$arr = [
      'янв.',
      'фев.',
      'март',
      'апр.',
      'май',
      'июнь',
      'июль',
      'авг.',
      'сент.',
      'окт.',
      'нояб.',
      'дек.'
    ];
    $month = date('n')-1;

    $Date = date('d '.$arr[$month].' Y');
	$Time = date('H:i');

	if(isset($_SESSION['user']) && $_SESSION['user'] != ""){
		$user = $_SESSION['user']['user_name'];
		$userId = $_SESSION['user']['id_user'];

    $text = $_POST['message'];
    $rate = $_POST['cnt_vote'];
    $gameId = $_POST['game_id'];
    
    $rs = addReview($user, $text, $rate, $gameId, $Date, $Time, $userId);
    //$update = addReviewGame($gameId, $rate);

    if($rs){
      $res['success'] = 1;
    } else {
      $res['success'] = 0;
    }
	} else {
		$res['success'] = 0;
	}

	echo json_encode($res);
}

function logAction(){
    $login = isset($_POST['login-login']) ? $_POST['login-login'] : null;
    $login = trim($login);
    $login = htmlspecialchars($login);

    $pwd = isset($_POST['login-pwd']) ? $_POST['login-pwd'] : null;
    $pwd = trim($pwd);
    $pwd = htmlspecialchars($pwd);

    $capcha = isset($_POST['typed_security_code']) ? $_POST['typed_security_code'] : null;
    $capcha = trim($capcha);
    $capcha = htmlspecialchars($capcha);

    $isRemember = $_POST['remember_login'];

    $capchaName = 'capchauser';
    $mdCapcha = md5($capchaName);
    
    if(isset($_COOKIE[$mdCapcha])){
        $currentCapcha = mc_decrypt($_COOKIE[$mdCapcha], ENCRYPTION_KEY);

        if($capcha == $currentCapcha){
            $userData = loginUser($login, $pwd);
            
            if($userData){
             	if($userData[0]['2FA'] == 1){
	              $_SESSION['user_container'] = $userData[0];
	              $userIp = $_SERVER['REMOTE_ADDR'];
	              $res['message'] = $userData[0]['user_name'];
          		} else {
          			$_SESSION['user'] = $userData[0];
          			$userIp = $_SERVER['REMOTE_ADDR'];
          			$res['message'] = 'null';
                if($isRemember != null && $_SESSION['user'] != ''){
                  $cookieName = 'rememberMe';
                  $cookieNameMD5 = md5($cookieName);
                  setcookie($cookieNameMD5, serialize($_SESSION['user']), time() + 2592000, '/' );
                }
          		}
              $res['success'] = 1;
            } else {
              $res['success'] = 0;
                $res['message'] = 'Неверный логин или пароль.';
            }
        } else {
            $res['success'] = 0;
            $res['message'] = 'Неверный код с картинки.';
        }
    } else {
        $res['success'] = 0;
        $res['message'] = 'Код устарел, обновите страницу.';
    }
    echo json_encode($res);
}

function loginAction(){
	$code = $_POST['code'];
  $isRemember = $_POST['remember_login'];
	if(isset($_SESSION['user_container'])){
		require_once '2FA/GoogleAuthenticator.php';
		$ga = new PHPGangsta_GoogleAuthenticator();
		$checkResult = $ga->verifyCode($_SESSION['user_container']['2FA_secret'], $code, 2);
		if ($checkResult) {
			$_SESSION['user'] = $_SESSION['user_container'];
			unset($_SESSION['user_container']);
      if($isRemember != null && $_SESSION['user'] != ''){
        $cookieName = 'rememberMe';
        $cookieNameMD5 = md5($cookieName);
        setcookie($cookieNameMD5, serialize($_SESSION['user']), time() + 2592000, '/' );
      }
			$res['success'] = 1;
		} else {
			$res['success'] = 0;
		}
	} else {
		$res['success'] = 0;
	}

	echo json_encode($res);
}

function logoutAction(){
	if(isset($_SESSION['user'])) {
        deleteOnlineUserLogout($_SESSION['user']['id_user']);
        unset($_SESSION['user']);
        unset($_SESSION['cart']);
        $cookieName = 'rememberMe';
        $cookieNameMD5 = md5($cookieName);
        setcookie($cookieNameMD5, '', time() - 3600, '/' );
        unset($_SESSION['chat']);
    }
    
    header("Location: /");
}

function userreviewAction(){
  $review = $_POST['review'];
  $id = $_POST['id'];
  $user = $_POST['user'];
  $rs = addReviewOfReview($id, $review, $user);
  if($rs){
    $res['success'] = 1;
  } else {
    $res['success'] = 0;
  }

  echo json_encode($res);
}

function registrationAction() {
    $email = isset($_POST['reg-email']) ? $_POST['reg-email'] : null;
    $pwd = isset($_POST['reg-pwd']) ? $_POST['reg-pwd'] : null;
    $name   = isset($_POST['reg-name']) ? $_POST['reg-name'] : null;
    $login = isset($_POST['reg-login']) ? $_POST['reg-login'] : null;
   
    $resData = null;
    
        $pwdCrypt = mc_encrypt($pwd, ENCRYPTION_KEY);
        
        $userData = registerNewUser($email, $pwdCrypt, $name, $login);
        if($userData['success']) {
          $resData['success'] = 1;
          $userData = $userData[0];
          $diruser = mkdir('images/users/'.$userData['id_user'].'/', 0777, true);
          $dirbg = mkdir('images/users/'.$userData['id_user'].'/background/', 0777, true);
          $_SESSION['user'] = $userData;
        }   else {
            $resData['success'] = 0;
        }
    
    echo  json_encode($resData);
}

function uploadphotoAction(){
  $ds = DIRECTORY_SEPARATOR;
	if (!empty($_FILES['avatar'])) { // Проверяем пришли ли файлы от клиента
		$upload_dir = 'images/users/'.$_SESSION['user']['id_user'];
        $name = 'main.jpg';
        if($_FILES['avatar']['type'] == 'image/jpeg'){
            $image = @imagecreatefromjpeg($_FILES["avatar"]["tmp_name"]);
            @imagejpeg($image, "$upload_dir/$name", 70);
        }
        else if($_FILES['avatar']['type'] == 'image/png'){
            $image = @imagecreatefrompng($_FILES["avatar"]["tmp_name"]);
            @imagepng($image, "$upload_dir/$name", 70);
        }
        //move_uploaded_file($tmp_name, "$upload_dir/$name".'.jpg');
        @imagedestroy($image);

        $photo = 'user_have_photo';
        $rs = updatePhoto($photo, $_SESSION['user']['id_user']);
	}

	if (!empty($_FILES['user_bg'])) { // Проверяем пришли ли файлы от клиента
		$upload_dir = 'images/users/'.$_SESSION['user']['id_user'].'/background';
        $name = 'background.jpg';
        if($_FILES['user_bg']['type'] == 'image/jpeg'){
            $image = @imagecreatefromjpeg($_FILES["user_bg"]["tmp_name"]);
            @imagejpeg($image, "$upload_dir/$name", 70);
        }
        else if($_FILES['user_bg']['type'] == 'image/png'){
            $image = @imagecreatefrompng($_FILES["user_bg"]["tmp_name"]);
            @imagepng($image, "$upload_dir/$name", 70);
        }
        //move_uploaded_file($tmp_name, "$upload_dir/$name".'.jpg');
        @imagedestroy($image);

        $photo = 'user_have_bg';
        $rs = updatePhoto($photo, $_SESSION['user']['id_user']);
	}

	header('Location: /user/edit/'.$_SESSION['user']['id_user'].'/');
}

function uploaduserpicAction(){
  if(isset($_SESSION['user'])){
  $dir = $_SESSION['user']['id_user'];
  $upload_dir = 'images/users/'.$dir.'/gallery/';
  $namePic = $_POST['picName'];
  if (!empty($_FILES['pic'])) { // Проверяем пришли ли файлы от клиента
        $time = time();
        $rand = rand();
        $name = $time + $rand;
        if($_FILES['pic']['type'] == 'image/jpeg'){
            $image = @imagecreatefromjpeg($_FILES["pic"]["tmp_name"]);
            @imagejpeg($image, "$upload_dir/$name".'.jpg', 70);
        }
        else if($_FILES['pic']['type'] == 'image/png'){
            $image = @imagecreatefrompng($_FILES["pic"]["tmp_name"]);
            @imagepng($image, "$upload_dir/$name".'.jpg', 70);
        }
        @imagedestroy($image);
        $rs = addUserPic($_SESSION['user']['id_user'], $name, $namePic);
  }
    header('Location: /user/profile/'.$_SESSION['user']['id_user'].'/');
  } else {
    header('Location: /');
  }
}

function saveprofileAction(){
	$res['success'] = 1;
	$id = $_SESSION['user']['id_user'];

	$email = $_POST['userEmail'];

	if($email != ''){
		if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$email)){
			$res['success'] = 0;
			$res['message'] = 'Введите корректный Email';
		} else {
			$checkEmail = checkEmail($email);
			if($checkEmail['id_user'] != $_SESSION['user']['id_user']){
				$res['success'] = 0;
				$res['message'] = 'Данный Email уже занят';
			} else {
				$email = trim($email);
    			$email = htmlspecialchars($email);
    			$email = mb_strtolower($email);
			}
		}
	} else {
		$res['success'] = 0;
		$res['message'] = 'Заполните поле Email';
	}

	$name = $_POST['userLogin'];

	if($name == '' || strlen($name) < 4){
		$res['success'] = 0;
		$res['message'] = 'Некоректное имя';
	} else {
		$name = trim($name);
    	$name = htmlspecialchars($name);
	}

	$country = $_POST['country'];

	$link = $_POST['customURL'];

	if(strlen($link) > 5) {
		if(preg_match("/^[-a-zA-Z0-9]+$/", $link)){
			$checkLink = checkLink($link);
			if($checkLink && $checkLink['id_user'] != $_SESSION['user']['id_user']){
				$res['success'] = 0;
				$res['message'] = 'Данная ссылка уже занята';
			} else {
				$link = trim($link);
	    		$link = htmlspecialchars($link);
	    		$link = mb_strtolower($link);
			}
		} else {
			$res['success'] = 0;
			$res['message'] = 'Можно использовать буквы и цифры латинского алфавита';
		}
	} else if($link != '' && strlen($link) < 5) {
		$res['success'] = 0;
		$res['message'] = 'Длина ссылка должна быть больше 5 символов';
	} else {
		$link = '';
	}

	$about = $_POST['summary'];

	if($about != ''){
		$about = trim($about);
    	$about = htmlspecialchars($about);
	}

	if($res['success'] == 1){
		$user = changeUserInfo($id, $email, $name, $country, $link, $about);
		if($user){
			$userData = getUserById($_SESSION['user']['id_user']);
			$_SESSION['user'] = $userData;
			$res['success'] = 1;
		} else {
			$res['success'] = 0;
			$res['message'] = 'Ошибка при изменении данных';
		}
	}

	echo json_encode($res);
}

function deleteuserbgAction(){
	$itemId = $_POST['id'];
    if($itemId == null) exit();
    $filename = 'background.jpg';
    $dir = 'images/users/'.$itemId.'/background/'.$filename;
    $delete = unlink($dir);
    if($delete){
    	$rs = deleteuserbg($_SESSION['user']['id_user']);
    	if($rs){
    		$_SESSION['user']['user_have_bg'] = 0;
    		$res['success'] = 1;
    	}
    	
    } else {
    	$res['success'] = 0;
    }
    echo json_encode($res);
}

function enableauthAction(){
	$code = $_POST['code'];

	$rs = insertCode($_SESSION['user']['id_user'], $code);
	if($rs){
		$_SESSION['user']['2FA'] = 1;
		$_SESSION['user']['2FA_secret'] = $code;
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}

	echo json_encode($res);
}

function disableauthAction(){
	$code = $_POST['code'];
	$user = getUserById($_SESSION['user']['id_user']);

	if($code == $user['2FA_secret']){
		$rs = delete2fa($_SESSION['user']['id_user']);
		if($rs){
			$_SESSION['user']['2FA'] = 0;
			$_SESSION['user']['2FA_secret'] = '';
			$res['success'] = 1;
		} else {
			$res['success'] = 0;
		}
	}

	echo json_encode($res);
}

function changepwdsAction(){
	$newpwd = $_POST['pswd'];
	$curpwd = $_POST['curpwd'];

	$user = getUserById($_SESSION['user']['id_user']);

	$decryptedPwd = mc_decrypt($user['user_pwd'], ENCRYPTION_KEY);


	if($curpwd == $decryptedPwd){
		$encryptedPwd = mc_encrypt($newpwd, ENCRYPTION_KEY);
		$rs = changeUserPwds($_SESSION['user']['id_user'], $encryptedPwd);
		if($rs){
			$res['success'] = 1;
		} else {
			$res['success'] = 0;
		}
	} else {
		$res['success'] = 0;
		$res['message'] = 'Неверный текущий пароль';
	}

	echo json_encode($res);
}

function generateAcceptCode($email){
    $regcode = rand();
    $enccode = mc_encrypt($regcode, ENCRYPTION_KEY);
    setcookie("checkcode", $enccode, time()+3600 * 24 * 7, '/');
    $_SESSION['email'] = $email;
    return $regcode;
}

function checkcodeAction($smarty){
  $code = isset($_GET['id']) ? $_GET['id'] : null;
  if(isset($_COOKIE['checkcode']) && isset($_SESSION['email'])){
    $deccode = mc_decrypt($_COOKIE['checkcode'], ENCRYPTION_KEY);
    if($deccode == $code){
      $smarty->assign('email', $_SESSION['email']);
      loadTemplate($smarty, 'index/head');
      loadTemplate($smarty, 'user/refreshpwd');
    } else {
      header('Location: /notfound/');
    }
  } else {
    header('Location: /notfound/');
  }
}

function refreshnewpwdAction(){
  $pwd = mc_encrypt($_POST['newpwd'], ENCRYPTION_KEY);
  $email = $_POST['email'];
  $rs = changepwd($email, $pwd);
  if($rs){
    unset($_SESSION['email']);
    setcookie("checkcode", '', time()+3600 * 24 * 7, '/');
    $res['success'] = 1;
  } else {
    $res['success'] = 0;
    $res['message'] = 'Ошибка №649';
  }

  echo json_encode($res);
}

function refreshauthAction(){
  $email = $_POST['2FA-email'];
  $code = $_POST['2FA-code'];
  if($email != '' && $code != ''){
    $rs = refreshauth($email, $code);

    if($rs['success'] == 1){
      $res['success'] = 1;
    } else {
      $res['success'] = 0;
      $res['message'] = 'Аккаунт не найден или код неверный';
    }
  } else {
      $res['success'] = 0;
      $res['message'] = 'Заполните все поля';
  }

  echo json_encode($res);
}

function refreshpwdAction(){
  if ($_POST) { // eсли пeрeдaн мaссив POST
    $email = htmlspecialchars($_POST["refresh-email"]);
    $user = getUserByEmail($email);

    if($user){
      $code = generateAcceptCode($email);
      $name =  "Тех. поддержка Good Games";// пишeм дaнныe в пeрeмeнныe и экрaнируeм спeцсимвoлы
      $subject = 'Восстановление пароля';
      $message = 'gg.com/user/checkcode/'.$code.'/';
      $json = array(); // пoдгoтoвим мaссив oтвeтa
      if (!$name or !$email or !$subject or !$message) { // eсли хoть oднo пoлe oкaзaлoсь пустым
          $json['success'] = 0;
          $json['message'] = 'Вы зaпoлнили нe всe пoля!'; // пишeм oшибку в мaссив
          echo json_encode($json); // вывoдим мaссив oтвeтa
          
      }
      function mime_header_encode($str, $data_charset, $send_charset) { // функция прeoбрaзoвaния зaгoлoвкoв в вeрную кoдирoвку
          if($data_charset != $send_charset)
          $str=iconv($data_charset,$send_charset.'//IGNORE',$str);
          return ('=?'.$send_charset.'?B?'.base64_encode($str).'?=');
      }
      /* супeр клaсс для oтпрaвки письмa в нужнoй кoдирoвкe */
      class TEmail {
      public $from_email;
      public $from_name;
      public $to_email;
      public $to_name;
      public $subject;
      public $data_charset='UTF-8';
      public $send_charset='windows-1251';
      public $body='';
      public $type='text/plain';

      function send(){
          $dc=$this->data_charset;
          $sc=$this->send_charset;
          $enc_to=mime_header_encode($this->to_name,$dc,$sc).' <'.$this->to_email.'>';
          $enc_subject=mime_header_encode($this->subject,$dc,$sc);
          $enc_from=mime_header_encode($this->from_name,$dc,$sc).' <'.$this->from_email.'>';
          $enc_body=$dc==$sc?$this->body:iconv($dc,$sc.'//IGNORE',$this->body);
          $headers='';
          $headers.="Mime-Version: 1.0\r\n";
          $headers.="Content-type: ".$this->type."; charset=".$sc."\r\n";
          $headers.="From: ".$enc_from."\r\n";
          return mail($enc_to,$enc_subject,$enc_body,$headers);
      }

      }

      $emailgo= new TEmail; // инициaлизируeм супeр клaсс oтпрaвки
      $emailgo->from_email= 'goodgames7967@gmail.com'; // oт кoгo
      $emailgo->from_name= $name;
      $emailgo->to_email= $email; // кoму
      $emailgo->to_name= $name;
      $emailgo->subject= $subject; // тeмa
      $emailgo->body= $message; // сooбщeниe
      $emailgo->send(); // oтпрaвляeм

      $json['success'] = 1; // oшибoк нe былo

      echo json_encode($json); // вывoдим мaссив oтвeтa
    } else {
      $json['success'] = 0;
      $json['message'] = 'Пользователь не найден';
      echo json_encode($json); // вывoдим мaссив oтвeтa
    }

} else { // eсли мaссив POST нe был пeрeдaн
    $json['success'] = 0;
    $json['message'] = 'Ошибка №710';
    echo json_encode($json); // вывoдим мaссив oтвeтa
}
}

function usercommentAction(){
  $user = $_POST['user'];
  $text = $_POST['text'];
  $senderUser = $_SESSION['user']['id_user'];
  $senderName = $_SESSION['user']['user_name'];

  $arr = [
        'янв.',
        'фев.',
        'март',
        'апр.',
        'май',
        'июнь',
        'июль',
        'авг.',
        'сент.',
        'окт.',
        'нояб.',
        'дек.'
      ];
  $month = date('n')-1;
  $date = date('d '.$arr[$month].' Y H:i');

  $rs = addUserComment($user, $senderUser, $senderName, $text, $date);

  if($rs){
    $res['success'] = 1;
  } else {
    $res['success'] = 0;
  }

  echo json_encode($res);
}

function addtofriendAction(){
  $user = $_POST['user'];
  $parent = $_SESSION['user']['id_user'];
  $rs = addToFriend($parent, $user);
  if($rs){
    $res['success'] = 1;
  } else {
    $res['success'] = 0;
  }

  echo json_encode($res);
}

function deletefromfriendAction(){
  $user = $_POST['user'];
  $parent = $_SESSION['user']['id_user'];
  $rs = deleteFromFriend($parent, $user);
  if($rs){
    $res['success'] = 1;
  } else {
    $res['success'] = 0;
  }

  echo json_encode($res);
}

function acceptfriendAction(){
  $parent = $_POST['user'];
  $child = $_SESSION['user']['id_user'];
  $rs = acceptFriend($parent, $child);
  if($rs){
    $res['success'] = 1;
  } else {
    $res['success'] = 0;
  }

  echo json_encode($res);
}

function ignoreallinvitesAction(){
  $child = $_SESSION['user']['id_user'];
  $rs = IgnoreAllInvites($child);
  if($rs){
    $res['success'] = 1;
  } else {
    $res['success'] = 0;
  }

  echo json_encode($res);
}

function ifhaveuserAction(){
  if(isset($_SESSION['user']) && $_SESSION['user'] != ''){
    $user = $_SESSION['user']['id_user'];
  } else {
    $user = 0;
  }

  echo json_encode($user);
}

function sendMessage($user, $name, $message){
    $content = array(
      "en" => $message
      );
    
  $headings = array(
      "en" => $name
  );

    $fields = array(
      'app_id' => "b59402bd-ffe5-47d4-8688-3c8cfac9dd98",
      'filters' => array(array("field" => "tag", "key" => "id", "relation" => "=", "value" => $user)),
      'contents' => $content,
      'headings' => $headings,
      'android_sound' => 'message.wav',
      'android_group' => '7967'
    );
    
    $fields = json_encode($fields);
      print("\nJSON sent:\n");
      print($fields);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                           'Authorization: Basic Njk3Njg1ZmUtMTlhYy00NmIxLTg5ZmEtZWQ3ZTk3OTRkODE4'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);
  }

function sendnotifAction(){
  $user = $_POST['user'];
  $name = $_POST['name'];
  $message = $_POST['message'];
  
  $response = sendMessage($user, $name, $message);
  $return["allresponses"] = $response;
  $return = json_encode( $return);
  
  print("\n\nJSON received:\n");
  print($return);
  print("\n");
}
