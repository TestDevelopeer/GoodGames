<?php
include_once '../models/CategoryModel.php';
include_once '../models/GameModel.php';
include_once '../models/PictureModel.php';
include_once '../models/VideoModel.php';
include_once '../models/ArticleModel.php';
include_once '../models/CartModel.php';
if(!isset($_SESSION['user'])){
    require_once('/capchaUser/capcha.php');
}

function indexAction($smarty){
    
    if($_SESSION['cart'] != null){
        $cntCart = count($_SESSION['cart']);
        $Cart = array_reverse($_SESSION['cart']);
        for ($i = 0; $i < $cntCart; $i++) {
            $key = 0;
            $dir = opendir("images/games/".$Cart[$i]['id_game'].'/'); 
            while ($file = readdir ($dir)) 
            { 
                if(($file != "..") && ($file != ".") && ($file != "main.jpg") && $key != 3) {
                $namePhoto[$i]['id_game'] = $Cart[$i]['id_game'];
                $namePhoto[$i][$key] = $file; 
                $key++;
            }
            } 
            closedir($dir);
        }
        $smarty->assign('namePhoto', $namePhoto);
    }
    
	$rsTwoLastArt = getTwoLastArt();

    $smarty->assign('pageTitle', 'Корзина');
	$smarty->assign('rsTwoLastArt', $rsTwoLastArt);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'cart/cart');
	loadTemplate($smarty, 'index/footer');
}

function addtocartAction(){
    $itemId = $_POST['id'] ? intval($_POST['id']) : null;
    if(!$itemId) {
    	header('Location: /notfound/');
    } else {
    $gameInfo = getGameForCartById($itemId);
    $resData = array();
    
    //если знач не найдено,то добавим
    if(isset($_SESSION['cart']) && !isset($_SESSION['cart'][$itemId])) {
        $_SESSION['cart'][$itemId] = $gameInfo;
        	$cartCnt = count($_SESSION['cart']);
        	$i = 1;
        	foreach (array_reverse($_SESSION['cart']) as $cart) {
        	if($i < 4){
	        echo "\n			
						<div class='nk-widget-post' id='cart-dropdown_{$cart['id_game']}'>
                            <a href='/game/{$cart['id_game']}/' class='nk-post-image'>
                                <img src='/www/images/games/{$cart['id_game']}/main.jpg' alt='In all revolutions of'>
                            </a>
                            <h3 class='nk-post-title'>
                                <a href='javascript: removefromcart({$cart['id_game']});' class='nk-cart-remove-item'><span class='ion-android-close'></span></a>
                                <a href='/game/{$cart['id_game']}/'>{$cart['name_game']}</a>
                            </h3>";
                            if ($cart['discount_game'] == 0){
                            	echo "<div class='nk-product-price cart-price'>{$cart['price_game']}р.</div>";
                        	} else {
                            echo "<div class='nk-product-price cart-price'><s style='color: red;'>{$cart['price_game']}р.</s> <span class='tx-warning tx-12'><span class='tx-lato'>{$cart['discount_game']}%</span></span></div>
                            <div class='nk-product-price cart-price-discount'>{$cart['discount_price_game']}р.</div>";
                            }
                        echo "</div>";
                        $i++;
                }
	    }
	    				echo "<div class='nk-gap-2'></div>
                        <div class='text-center'>
                            <a href='javascript: clearcart();' style='margin-right: 5px;' class='nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white'>Очистить</a>
                            <a href='/cart/' class='nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white'>";
	                            if ($cartCnt > 3){
	                            	echo "Еще ".($cartCnt - 3);
	                        	} else {
	                            	echo "Корзина";
	                        	}
                            echo "</a>
                        </div>";

    }
}
}

function removefromcartAction(){
	$itemId = $_POST['id'] ? intval($_POST['id']) : null;
    if(!$itemId) {
    	header('Location: /notfound/');
    } else {
    $resData = array();
    if(isset($_SESSION['cart'][$itemId])) {
        unset($_SESSION['cart'][$itemId]);
        
        $cartCnt = count($_SESSION['cart']);
        	$i = 1;
        	foreach (array_reverse($_SESSION['cart']) as $cart) {
        	if($i < 4){
	        echo "\n			
						<div class='nk-widget-post' id='cart-dropdown_{$cart['id_game']}'>
                            <a href='/game/{$cart['id_game']}/' class='nk-post-image'>
                                <img src='/www/images/games/{$cart['id_game']}/main.jpg' alt='In all revolutions of'>
                            </a>
                            <h3 class='nk-post-title'>
                                <a href='javascript: removefromcart({$cart['id_game']});' class='nk-cart-remove-item'><span class='ion-android-close'></span></a>
                                <a href='/game/{$cart['id_game']}/'>{$cart['name_game']}</a>
                            </h3>";
                            if ($cart['discount_game'] == 0){
                            	echo "<div class='nk-product-price cart-price'>{$cart['price_game']}р.</div>";
                        	} else {
                            echo "<div class='nk-product-price cart-price'><s style='color: red;'>{$cart['price_game']}р.</s> <span class='tx-warning tx-12'><span class='tx-lato'>{$cart['discount_game']}%</span></span></div>
                            <div class='nk-product-price cart-price-discount'>{$cart['discount_price_game']}р.</div>";
                            }
                        echo "</div>";
                        $i++;
                }
	    }
	    				echo "<div class='nk-gap-2'></div>
                        <div class='text-center'>
                            <a href='javascript: clearcart();' style='margin-right: 5px;' class='nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white'>Очистить</a>
                            <a href='/cart/' class='nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white'>";
	                            if ($cartCnt > 3){
	                            	echo "Еще ".($cartCnt - 3);
	                        	} else {
	                            	echo "Корзина";
	                        	}
                            echo "</a>
                        </div>";
    }
   }	
}

function clearcartAction(){
	unset($_SESSION['cart']);
	$_SESSION['cart'] = array();
	$res['success'] = 1;

	echo json_encode($res);
}

function addorderAction(){
    if(isset($_SESSION['cart']) && isset($_SESSION['user'])){
        $payment = $_POST['payment'];
        $userEmail = $_SESSION['user']['user_email'];
        $userName = $_SESSION['user']['user_name'];
        $userId = $_SESSION['user']['id_user'];

        $cntCart = count($_SESSION['cart']);
        foreach ($_SESSION['cart'] as $cart) {
           $gamesId = $gamesId.','.$cart['id_game'];
           $gamesName = $gamesName.', '.$cart['name_game'];
           if($cart['discount_game'] == 0){
                $gamesPrice = $gamesPrice + $cart['price_game'];
           } else {
                $gamesPrice = $gamesPrice + $cart['discount_price_game'];
           }
        }
        $gamesId = substr($gamesId, 1);
        $gamesName = substr($gamesName, 1);

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
        $date = date('d '.$arr[$month].' Y');
        $time = date('H:i');

        $rs = addorder($userEmail, $userName, $userId, $gamesId, $cntCart, $gamesName, $gamesPrice, $payment, $date, $time);

        if($rs){
            unset($_SESSION['cart']);
            $_SESSION['cart'] = array();
            $res['success'] = 1;
        } else {
            $res['success'] = 0;
        }
    }
    echo json_encode($res);
}


function updateorderAction(){
    $id = $_POST['id'];
    if($id == null) header('Location: /notfound/');

    $checkOrderTime = getOrderById($id);
    if($checkOrderTime['order_time_for_pay'] == 1){
        $orderCurTime = $checkOrderTime['order_time'];
        $futTime = strtotime($orderCurTime);
        $futTime = $futTime+(60*7);
        $checktime = $futTime - strtotime(date('H:i'));
        if($checktime <= 0){
            $rs = unsetOrder($checkOrderTime['id_order']);
            $res['success'] = 0;
        } else {
            $rs = updateorder($id);
        }
    }

    

    if($rs){
            $rsOrder = getOrderById($id);

            $rsGames = explode(',', $rsOrder['order_games_id']);
            $index = count($rsGames);
            for ($i = 0; $i < $index; $i++) { 
                $rsGameName = getGameForOrder($rsGames[$i]);
                $addSale = addSaleForGame($rsGames[$i]);
                $addBuyedGame = addBuyedGame($_SESSION['user']['id_user'], $rsGameName['id_game'], $rsGameName['name_game']);
                $rsKeys[$i]['game'] = $rsGameName['name_game'];
                $key = getKeyByGame($rsGames[$i]);
                $rsKeys[$i]['key'] = $key['key_number'];
            }
            $pre = $index." товаров на сумму ".$rsOrder['order_price']."\n\n";
            $last = 'Спасибо за покупку!';
            $msg = $pre;
            foreach ($rsKeys as $key) {
                $msg = $msg.$key['game']." | ".$key['key']."\n\n";
            }
            $msg = $msg.$last;

            $name =  "Сообщество Good Games";// пишeм дaнныe в пeрeмeнныe и экрaнируeм спeцсимвoлы
            $email = htmlspecialchars($_SESSION["user"]['user_email']);
            $subject = 'Заказ №'.$id;
            $message = $msg;

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

            $res['success'] = 1;
    } else {
        $res['success'] = 0;
    }

    echo json_encode($res);
}

function removeorderAction(){
    $id = $_POST['id'];
    if($id == null) header('Location: /notfound/');

    $rs = removeorder($id);

    if($rs){
        $res['success'] = 1;
    } else {
        $res['success'] = 0;
    }

    echo json_encode($res);
}