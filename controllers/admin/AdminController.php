<?php
header('X-XSS-Protection: 1');

include_once "../models/UserModel.php";
include_once "../models/GameModel.php";
include_once "../models/CategoryModel.php";
include_once "../models/VideoModel.php";
include_once "../models/ArticleModel.php";
include_once "../models/CartModel.php";

    $smarty->setTemplateDir(TemplateAdminPrefix);
    $smarty->assign('teplateAdminPath', TemplateAdminWebPath);
    
if(!isset($_SESSION['admin'])){
	header('Location: /login/');
} else {
	$arAdmin = $_SESSION['admin'];
	$smarty->assign('arAdmin', $arAdmin);
}

$online_users = getOnlineUsers();
if($online_users){
	$smarty->assign('online_users', $online_users);
}
$support = getSupportMessage();
$nonCheck = count(getNonCheckSupportMessage());
if($support){
	$smarty->assign('support', $support);
	$smarty->assign('nonCheck', $nonCheck);
}

function indexAction($smarty){
	$lastDays = 10;
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
	for ($i = 1; $i <= $lastDays; $i++) { 
		$month = date('m',time()-($i*(24*60*60)));
		$month = substr($month, 1);
		$month = $month - 1;
		$date[$i] = date('d '.$arr[$month].' Y',time()-($i*(24*60*60)));
		
	}
	$lastTodayOrders = getLastORders($date);
	
	$smarty->assign('pageTitle', 'Настройки');
	$smarty->assign('lastTodayOrders', $lastTodayOrders);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'dashboard/dashboard');
	loadTemplate($smarty, 'index/footer');
	loadTemplate($smarty, 'index/scripts');
	loadTemplate($smarty, 'dashboard/dashboardScripts');
	loadTemplate($smarty, 'index/endhtml');
}

function allgamesAction($smarty){
	$rsAllGames = getAllGames();
	$rsAllCategories = getAllCategories();
	$index = count($rsAllGames);
	for ($i = 0; $i < $index; $i++) { 
			$categoriesid[$i] = explode(',', $rsAllGames[$i]['category_id']);
			$rsAllGames[$i]['tag_name'] = explode(',', $rsAllGames[$i]['tags']);
		}	
	for ($i = 0; $i < $index; $i++) { 
			$indexCatId = count($categoriesid[$i]);
			for ($j = 0; $j < $indexCatId; $j++) { 
				$catNames = getCategoryById($categoriesid[$i][$j]);
				$categoriesid[$i]['cat_name'][$j] = $catNames['name_category'];
			}	
		}
	$i = 0;
	$j = 0;

	$smarty->assign('pageTitle', 'Все игры');
	$smarty->assign('rsAllGames', $rsAllGames);
	$smarty->assign('categoriesid', $categoriesid);
	$smarty->assign('rsAllCategories', $rsAllCategories);
	$smarty->assign('i', $i);
	$smarty->assign('j', $j);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'game/allGames');
	loadTemplate($smarty, 'index/footer');
	loadTemplate($smarty, 'index/scripts');
	loadTemplate($smarty, 'index/endhtml');
}

function addgameAction($smarty){
	
	$rsAllCats = getAllCategories();
	$rsAllPlatforms = getGamePlatforms();
	
	
	$smarty->assign('pageTitle', 'Добавить новую игру');
	$smarty->assign('rsAllCats', $rsAllCats);
	$smarty->assign('rsAllPlatforms', $rsAllPlatforms);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'game/addGame');
	loadTemplate($smarty, 'index/footer');
	loadTemplate($smarty, 'index/scripts');
	loadTemplate($smarty, 'game/addGameScripts');
	loadTemplate($smarty, 'index/endhtml');
}

function addcontentAction($smarty){
	$rsAllGames = getAllMainGames();
	
	$smarty->assign('pageTitle', 'Добавить новую игру');
	$smarty->assign('rsAllGames', $rsAllGames);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'game/addContent');
	loadTemplate($smarty, 'index/footer');
	loadTemplate($smarty, 'index/scripts');
	loadTemplate($smarty, 'game/addGameScripts');
	loadTemplate($smarty, 'index/endhtml');
}

function categoriesAction($smarty){
	$rsCatNews = getcatNews();
	$rsAllCats = getAllCategories();
	$rsAllPlatforms = getGamePlatforms();
	
	$smarty->assign('pageTitle', 'Категории');
	$smarty->assign('rsAllCats', $rsAllCats);
	$smarty->assign('rsAllPlatforms', $rsAllPlatforms);
	$smarty->assign('rsCatNews', $rsCatNews);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'category/category');
	loadTemplate($smarty, 'index/footer');
	loadTemplate($smarty, 'index/scripts');
	loadTemplate($smarty, 'index/endhtml');
}

function mailboxAction($smarty){
	$smarty->assign('pageTitle', 'Почта');

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'mail/mail');
	loadTemplate($smarty, 'index/footer');
	loadTemplate($smarty, 'index/scripts');
	loadTemplate($smarty, 'mail/mailScripts');
	loadTemplate($smarty, 'index/endhtml');
}

function addarticleAction($smarty){
	$rsAllCats = getArtCat();
	
	$smarty->assign('pageTitle', 'Добавить новую статью');
	$smarty->assign('rsAllCats', $rsAllCats);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'article/addArticle');
	loadTemplate($smarty, 'index/footer');
	loadTemplate($smarty, 'index/scripts');
	loadTemplate($smarty, 'game/addGameScripts');
	loadTemplate($smarty, 'article/addArticleScripts');
	loadTemplate($smarty, 'index/endhtml');
}

function allarticlesAction($smarty){
	$rsAllArt = getAllArt();
	$smarty->assign('pageTitle', 'Все статьи');
	$smarty->assign('rsAllArt', $rsAllArt);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'article/allArticles');
	loadTemplate($smarty, 'index/footer');
	loadTemplate($smarty, 'index/scripts');
	loadTemplate($smarty, 'index/endhtml');
}

function addupdateAction($smarty){
	$rsAllCats = getAllGames();

	$smarty->assign('pageTitle', 'Добавить новую статью');
	$smarty->assign('rsAllCats', $rsAllCats);


	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'update/addUpdate');
	loadTemplate($smarty, 'index/footer');
	loadTemplate($smarty, 'index/scripts');
	loadTemplate($smarty, 'game/addGameScripts');
	loadTemplate($smarty, 'article/addArticleScripts');
	loadTemplate($smarty, 'index/endhtml');
}

function allupdatesAction($smarty){
	$rsAllArt = getAllGameUpdates();

	foreach ($rsAllArt as $art) {
		$game = getProductById($art['art_game_id']);
		$rsGames[$art['art_game_id']]['id_game'] = $game['id_game'];
		$rsGames[$art['art_game_id']]['name_game'] = $game['name_game'];
	}
	
	$smarty->assign('pageTitle', 'Все статьи');
	$smarty->assign('rsAllArt', $rsAllArt);
	$smarty->assign('rsGames', $rsGames);


	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'update/allUpdates');
	loadTemplate($smarty, 'index/footer');
	loadTemplate($smarty, 'index/scripts');
	loadTemplate($smarty, 'index/endhtml');
}