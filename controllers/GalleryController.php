<?php
include_once '../models/CategoryModel.php';
include_once '../models/GameModel.php';
include_once '../models/UserModel.php';
include_once '../models/ArticleModel.php';
include_once '../models/GalleryModel.php';
if(!isset($_SESSION['user'])){
	require_once('/capchaUser/capcha.php');
}

function indexAction($smarty){
	
	$smarty->assign('pageTitle', 'Галлерея');

	$rsTwoLastArt = getTwoLastArt();
	$rsGallery = getAllPic();

	foreach ($rsGallery as $gallery) {
		$user = getUserById($gallery['user_id_photo']);
		$Users[$gallery['id_photo']] = $user;
		$cntLikes[$gallery['id_photo']] = count(getLikesPic($gallery['id_photo']));
		$cntDislikes[$gallery['id_photo']] = count(getDislikesPic($gallery['id_photo']));
	}
	

	if(isset($_SESSION['user'])){
		foreach ($rsGallery as $gallery){
			$checkReview = getUserReview($_SESSION['user']['id_user'], $gallery['id_photo']);
			$rsReview[$gallery['id_photo']] = $checkReview;
		}
		$smarty->assign('rsReview', $rsReview);
	}

	$smarty->assign('rsTwoLastArt', $rsTwoLastArt);
	$smarty->assign('rsGallery', $rsGallery);
	$smarty->assign('Users', $Users);
	$smarty->assign('cntLikes', $cntLikes);
	$smarty->assign('cntDislikes', $cntDislikes);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'gallery/latestPictures');
	loadTemplate($smarty, 'index/footer');
}

function userAction($smarty){
	if(!isset($_SESSION['user'])){
    require_once('/capchaUser/capcha.php');
}
	$userId = isset($_GET['id']) ? $_GET['id'] : null;
	if($userId != null){
	$rsUser = getUserById($userId);
    $rsGallery = getGalleryById($userId);
    if(!$rsUser){
      header('Location: /notfound/');
    } else {
      if($rsUser['user_link'] != ""){
        header('Location: /gallery/user/'.$rsUser['user_link'].'/');
      }
    }
  } else {
    $userId = isset($_GET['name']) ? $_GET['name'] : null;
    if($userId != null){
      $rsUser = getUserByLink($userId);
      $rsGallery = getGalleryById($rsUser['id_user']);
      if(!$rsUser){
        header('Location: /notfound/');
      }
    } else {
      header('Location: /notfound/');
    }
  }

  	foreach ($rsGallery as $gallery) {
		$user = getUserById($gallery['user_id_photo']);
		$Users[$gallery['id_photo']] = $user;
		$cntLikes[$gallery['id_photo']] = count(getLikesPic($gallery['id_photo']));
		$cntDislikes[$gallery['id_photo']] = count(getDislikesPic($gallery['id_photo']));
	}
	

	if(isset($_SESSION['user'])){
		foreach ($rsGallery as $gallery){
			$checkReview = getUserReview($_SESSION['user']['id_user'], $gallery['id_photo']);
			$rsReview[$gallery['id_photo']] = $checkReview;
		}
		$smarty->assign('rsReview', $rsReview);
	}

  	$rsTwoLastArt = getTwoLastArt();

	$smarty->assign('pageTitle', 'Галлерея'.$rsUser['user_name']);
	$smarty->assign('rsUser', $rsUser);
	$smarty->assign('rsGallery', $rsGallery);
	$smarty->assign('rsTwoLastArt', $rsTwoLastArt);
	$smarty->assign('cntLikes', $cntLikes);
	$smarty->assign('cntDislikes', $cntDislikes);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'gallery/latestPictures');
	loadTemplate($smarty, 'index/footer');
}

function voteAction(){
	$review = $_POST['review'];
	$id = $_POST['picId'];
	$rs = voteup($id, $review, $_SESSION['user']['id_user']);
	if($rs){
		$res['success'] = 1;
	}

	echo json_encode($res);
}

function deletefromgalleryAction(){
	$itemId = $_POST['idPhoto'];
    if($itemId == null) exit();
    $Photo = getPhoto($itemId);
    $filename = $Photo['name_photo'];
    $dir = 'images/users/'.$Photo['user_id_photo'].'/gallery/'.$filename;
    $delete = unlink($dir);
    if($delete){
    	$rs = deletephoto($itemId);
    	if($rs){
    		$res['success'] = 1;
    	}
    } else {
    	$res['success'] = 0;
    }
    echo json_encode($res);
}