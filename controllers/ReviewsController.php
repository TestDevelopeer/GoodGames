<?php
include_once '../models/CategoryModel.php';
include_once '../models/GameModel.php';
include_once '../models/UserModel.php';
include_once '../models/ArticleModel.php';
include_once '../models/ReviewsModel.php';
if(!isset($_SESSION['user'])){
  require_once('/capchaUser/capcha.php');
}

function userAction($smarty){
	
	$userId = isset($_GET['id']) ? $_GET['id'] : null;
	if($userId != null){
	$rsUser = getUserById($userId);
    if(!$rsUser){
      header('Location: /notfound/');
    } else {
      if($rsUser['user_link'] != ""){
        header('Location: /reviews/user/'.$rsUser['user_link'].'/');
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

  $rsTwoLastArt = getTwoLastArt();
  $rsReviews = getReviewsByUser($rsUser['id_user']);

  $rsHistory = getlastpay($rsUser['id_user']);
  foreach ($rsHistory as $history) {
    $cnt = $cnt + $history['order_games_cnt'];
  }

  $cntReviews = count(getReviewsByUser($rsUser['id_user']));
  	
	$smarty->assign('pageTitle', 'Отзывы '.$rsUser['user_name']);
	$smarty->assign('rsUser', $rsUser);
	$smarty->assign('rsTwoLastArt', $rsTwoLastArt);
	$smarty->assign('rsReviews', $rsReviews);
  $smarty->assign('cnt', $cnt);
  $smarty->assign('cntReviews', $cntReviews);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'reviews/review');
	loadTemplate($smarty, 'index/footer');
}