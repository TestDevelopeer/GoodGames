<?php
include_once '../models/CategoryModel.php';
include_once '../models/ArticleModel.php';
include_once '../models/GameModel.php';
include_once '../models/UserModel.php';
if(!isset($_SESSION['user'])){
	require_once('/capchaUser/capcha.php');
}

function indexAction($smarty){
	
	$smarty->assign('pageTitle', 'Игры в Good Games');

	$rsRandomPC = getRandomPlatformGame(1);
	$rsRandomPS4 = getRandomPSGame(2);
	$rsRandomXBOX = getRandomPlatformGame(3);
	$rsBestSelling = getBestSelling();
	$rsGamePlatforms = getGamePlatforms();
	$rsFeaturedGames = getFeaturedGames();
	$rsPopularGames = getPopularStoreGames();
	$rsTwoLastArt = getTwoLastArt();

	$rsCategories = getAllCategories();
	$rsCatAlt = getAltCat();
	$rsCatRec = getRecCat();

	foreach ($rsFeaturedGames as $game) {
		$rsPlatforms[] = explode(',', $game['platform_id']);
	}
	$index = count($rsPlatforms);
	for ($i = 0; $i < $index; $i++) { 
		$indexJ = count($rsPlatforms[$i]);
		for ($j = 0; $j < $indexJ; $j++) { 
			$name = getPlatformById($rsPlatforms[$i][$j]);
			$platformFeatured[$rsFeaturedGames[$i]['id_game']][] = $name['name_platform'];
		}
	}

	foreach ($rsPopularGames as $game) {
		$rsPlatforms[] = explode(',', $game['platform_id']);
	}
	$index = count($rsPlatforms);
	for ($i = 0; $i < $index; $i++) { 
		$indexJ = count($rsPlatforms[$i]);
		for ($j = 0; $j < $indexJ; $j++) { 
			$name = getPlatformById($rsPlatforms[$i][$j]);
			$platformPopGames[$rsPopularGames[$i]['id_game']][] = $name['name_platform'];
		}
	}
	$rsRandomGames = getRandomGames();
	$rsDiscountGames = getDiscountGames();

	$smarty->assign('rsDiscountGames', $rsDiscountGames);
	$smarty->assign('rsRandomGames', $rsRandomGames);
	$smarty->assign('rsTwoLastArt', $rsTwoLastArt);
	$smarty->assign('rsGamePlatforms', $rsGamePlatforms);
	$smarty->assign('rsRandomPC', $rsRandomPC);
	$smarty->assign('rsRandomPS4', $rsRandomPS4);
	$smarty->assign('rsRandomXBOX', $rsRandomXBOX);
	$smarty->assign('rsBestSelling', $rsBestSelling);
	$smarty->assign('rsFeaturedGames', $rsFeaturedGames);
	$smarty->assign('rsPopularGames', $rsPopularGames);
	$smarty->assign('platformFeatured', $platformFeatured);
	$smarty->assign('platformPopGames', $platformPopGames);
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsCatAlt', $rsCatAlt);
	$smarty->assign('rsCatRec', $rsCatRec);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'store/breadcrumbs');
	loadTemplate($smarty, 'index/imageSlider');
	loadTemplate($smarty, 'store/gamePlatforms');
	loadTemplate($smarty, 'store/someProducts');
	loadTemplate($smarty, 'store/bestSellers');
	loadTemplate($smarty, 'store/featuredGames');
	loadTemplate($smarty, 'store/mostPopular');
	loadTemplate($smarty, 'store/sideBar');
	loadTemplate($smarty, 'index/footer');
}