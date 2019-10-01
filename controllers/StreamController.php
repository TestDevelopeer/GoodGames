<?php
include_once '../models/CategoryModel.php';
if(!isset($_SESSION['user'])){
	require_once('/capchaUser/capcha.php');
}

function indexAction($smarty){
	
	$smarty->assign('pageTitle', 'Трансляция');

	$rsGamePlatforms = getGamePlatforms();

	$smarty->assign('rsGamePlatforms', $rsGamePlatforms);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'store/breadcrumbs');
	loadTemplate($smarty, 'stream/broadcast');
	loadTemplate($smarty, 'stream/otherBroadcast');
	loadTemplate($smarty, 'stream/sideBar');
	loadTemplate($smarty, 'index/footer');
}