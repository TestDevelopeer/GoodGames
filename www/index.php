<?php
include_once '../config/config.php';            //инициализация настроек
include_once '../config/db.php';  				//подкл к БД
include_once '../config/crypt.php';       			//крипта       
include_once '../library/mainFunctions.php';    //осн функции
include_once '../models/CartModel.php';
include_once '../models/UserModel.php';
include_once '../models/ChatModel.php';
session_start();
$cookieName = 'rememberMe';
$cookieNameMD5 = md5($cookieName);
if(isset($_COOKIE[$cookieNameMD5])){
	$get_cookie = unserialize($_COOKIE[$cookieNameMD5]);
	$_SESSION['user'] = $get_cookie;
}

if(isset($_SESSION['user'])){
	$updateUser = getUserById($_SESSION['user']['id_user']);
	$_SESSION['user'] = $updateUser;
	$rsNoPayOrders = getNoPayOrders($_SESSION['user']['id_user']);
	$cntNoPayOrder = count($rsNoPayOrders);
	$arUser = $_SESSION['user'];

	$checkNotification = getPendingFriends($_SESSION['user']['id_user']);
	$acceptNotif = $checkNotification['accept'];
	$cntAcceptNotif = count($acceptNotif);

	$userIp = $_SERVER['REMOTE_ADDR'];
	$onlineTime = time();
	$addOnline = addOnlineUser($_SESSION['user']['id_user'], $userIp, $onlineTime);

	if(!isset($_SESSION['chat'])) {
    	$_SESSION['chat']['arUser'] = getUserForChat($_SESSION['user']['id_user']);
	}

	$rsNoReadMsg = count(getNoReadMsgWithoutRooms($_SESSION['user']['id_user']));

	$smarty->assign('cntNoPayOrder', $cntNoPayOrder);
	$smarty->assign('arUser', $arUser);
	$smarty->assign('cntAcceptNotif', $cntAcceptNotif);
	$smarty->assign('rsNoReadMsg', $rsNoReadMsg);
}
	$wine = 180;
	$ip = $_SERVER['REMOTE_ADDR'];
	$time = time();
	$rsDeleteOfflineUsers = deleteOnlineUser($wine, $time, $ip);

	$OnlineUsers = getOnlineUsers();
	foreach ($OnlineUsers as $user) {
		$rsOnlineUsers[$user['user_id']] = $user;
	}
	
	$smarty->assign('rsOnlineUsers', $rsOnlineUsers);

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
} else {
	$rsCart = $_SESSION['cart'];
	$rsCheckGameCart = $_SESSION['cart'];
	$cartCnt = count($_SESSION['cart']);
	
	$smarty->assign('rsCart', array_reverse($rsCart));
	$smarty->assign('rsCheckGameCart', $rsCheckGameCart);
	$smarty->assign('cartCnt', $cartCnt);
}

// определяю с каким контроллером буду работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

if($controllerName == 'Admin' || $controllerName == 'Editgame'){
	$OnlineUsers = getOnlineUsers();
	foreach ($OnlineUsers as $users) {
		$rsOnlineUsers[$users['user_id']] = getUserById($users['user_id']);
	}
	$smarty->assign('rsOnlineUsers', $rsOnlineUsers);
}

$smarty->assign('controllerName', $controllerName);
//определяю какой функцией работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
$smarty->assign('actionName', $actionName);
loadPage($smarty, $controllerName, $actionName);