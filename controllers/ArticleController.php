<?php
include_once "../models/UserModel.php";
include_once "../models/GameModel.php";
include_once "../models/CategoryModel.php";
include_once "../models/VideoModel.php";
include_once "../models/ArticleModel.php";
if(!isset($_SESSION['user'])){
	require_once('/capchaUser/capcha.php');
}
function indexAction($smarty){
	
	$id = isset($_GET['id']) ? $_GET['id'] : null;
	if($id == null) exit();
	$rsArticle = getArtById($id);
	$rsLastVideo = getRandomVideo();
	$rsMostPopularGame = getMostPopularGame();
	$rsThreePopularLastArt = getThreePopularArt();
	$rsTwoLastArt = getTwoLastArt();
	$rsTwoRandArt = getTwoRandArt();
	$rsComments = getArtComments($id);
	$cntComments = count($rsComments);
	$tableName = 'articles';
	$setName = 'views_art';
	$idName = 'id_art';
	$GameView = addView($tableName, $setName, $idName, $id);
	$rsUpdateGame = getProductById($rsArticle['art_game_id']);

	$smarty->assign('rsLastVideo', $rsLastVideo);
	$smarty->assign('rsMostPopularGame', $rsMostPopularGame);
	$smarty->assign('rsThreePopularLastArt', $rsThreePopularLastArt);
	$smarty->assign('rsTwoLastArt', $rsTwoLastArt);
	$smarty->assign('pageTitle', 'Новости');
	$smarty->assign('rsArticle', $rsArticle);
	$smarty->assign('rsTwoRandArt', $rsTwoRandArt);
	$smarty->assign('rsComments', $rsComments);
	$smarty->assign('cntComments', $cntComments);
	$smarty->assign('rsUpdateGame', $rsUpdateGame);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'article/article');
	loadTemplate($smarty, 'index/footer');
}

function addcommentAction(){
	if(isset($_SESSION['user'])){
		$user = $_SESSION['user']['id_user'];
		$name = $_SESSION['user']['user_name'];
		$art = $_POST['art_id'];
		$text = htmlspecialchars($_POST['message']);
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
		$rs = addArtComm($art, $user, $name, $text, $date);
		
		header('Location: /article/'.$art.'/');
		
	}
}