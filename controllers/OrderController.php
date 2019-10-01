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
    
	$check = 0;
    if(isset($_SESSION['user']) && $_SESSION['user'] != ''){
        $checkOrder = getorderbyuser($_SESSION['user']['id_user']);
        if($checkOrder){
            $check = 1;

            $indexOrd = count($checkOrder);
            for ($i = 0; $i < $indexOrd; $i++) { 
            	$orderGames[$i] = explode(',', $checkOrder[$i]['order_games_id']);
            }
            
            $index = count($orderGames);
            for ($i = 0; $i < $index; $i++) { 
            	$indexOrdGames = count($orderGames[$i]);

            	for ($j = 0; $j < $indexOrdGames; $j++) { 
            		$rsGames[$checkOrder[$i]['id_order']][] = getGameForOrder($orderGames[$i][$j]);
            	}
               
            }
            $checkOrderTime = getNoPayOrders($_SESSION['user']['id_user']);
            $time = checkOrderTime($checkOrderTime);
            
            $smarty->assign('rsGames', $rsGames);
            $smarty->assign('checkOrder', $checkOrder);
        }
    }
    $rsLastNotPayOrder = getlastnotpay($_SESSION['user']['id_user']);
    $rsTwoLastArt = getTwoLastArt();

    $smarty->assign('check', $check);
    $smarty->assign('pageTitle', 'Заказы');
	$smarty->assign('rsTwoLastArt', $rsTwoLastArt);
    $smarty->assign('rsLastNotPayOrder', $rsLastNotPayOrder);
    $smarty->assign('time', $time);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'order/order');
	loadTemplate($smarty, 'index/footer');
}

function checkOrderTime($timeArray){
    foreach ($timeArray as $order) {
        $orderCurTime = $order['order_time'];
        $futTime = strtotime($orderCurTime);
        $futTime = $futTime+(60*7);
        $checktime = $futTime - strtotime(date('H:i'));
        if($checktime <= 0){
            $rs = unsetOrder($order['id_order']);
            $leftTime = 0;
        } else {
            $time = date('i', $checktime);
            $leftTime = substr($time, 1);
        }
        return $leftTime;
    }
}