<?php
include_once '../models/CategoryModel.php';
include_once '../models/GameModel.php';
include_once '../models/PictureModel.php';
include_once '../models/VideoModel.php';
include_once '../models/ArticleModel.php';
if(!isset($_SESSION['user'])){
	require_once('/capchaUser/capcha.php');
}

function indexAction($smarty){
	$checkVideo = 0;
	$vid = md5('video');
	if(!isset($_COOKIE['video'])){
		setcookie("video", $vid, time()+86400, '/');
		$smarty->assign('viewVideo', $checkVideo);
	} else {
		$checkVideo = 1;
		$smarty->assign('viewVideo', $checkVideo);
	}
	
	$rsGamePlatforms = getGamePlatforms();
	$rsRandomGames = getRandomGames();
	$rsLastPictures = getLastPictures();
	$rsBestSelling = getBestSelling();
	$rsAllGames = getAllGames();
	$rsDiscountGames = getDiscountGames();
	$rsLastVideo = getRandomVideo();
	$rsMostPopularGame = getMostPopularGame();
	$rsLastGames = getLastGames();

	$rsLastSixArt = getLastSixArt();
	$rsFourPopularArt =  getFourPopularArt();
	$rsThreePopularLastArt = getThreePopularArt();
	$rsTwoLastArt = getTwoLastArt();
	$rsCategories = getAllCategories();
	$rsCatAlt = getAltCat();
	$rsCatRec = getRecCat();

	foreach ($rsAllGames as $game) {
		$rsPlatforms[] = explode(',', $game['platform_id']);
	}
	$index = count($rsPlatforms);
	for ($i = 0; $i < $index; $i++) { 
		$indexJ = count($rsPlatforms[$i]);
		for ($j = 0; $j < $indexJ; $j++) { 
			$name = getPlatformById($rsPlatforms[$i][$j]);
			$platform[$rsAllGames[$i]['id_game']][] = $name['name_platform'];
		}
	}
	
	$comingSoon = getComingGames();

	$smarty->assign('pageTitle', 'Good Games | Comunity and game store');

	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsGamePlatforms', $rsGamePlatforms);
	$smarty->assign('rsRandomGames', $rsRandomGames);
	$smarty->assign('rsLastPictures', $rsLastPictures);
	$smarty->assign('rsBestSelling', $rsBestSelling);
	$smarty->assign('rsLastVideo', $rsLastVideo);
	$smarty->assign('rsMostPopularGame', $rsMostPopularGame);
	$smarty->assign('rsLastGames', $rsLastGames);
	
	$smarty->assign('rsLastSixArt', $rsLastSixArt);
	$smarty->assign('rsFourPopularArt', $rsFourPopularArt);
	$smarty->assign('rsThreePopularLastArt', $rsThreePopularLastArt);
	$smarty->assign('rsTwoLastArt', $rsTwoLastArt);
	$smarty->assign('rsDiscountGames', $rsDiscountGames);
	$smarty->assign('rsCatAlt', $rsCatAlt);
	$smarty->assign('rsCatRec', $rsCatRec);
	$smarty->assign('platform', $platform);
	$smarty->assign('comingSoon', $comingSoon);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'index/addvertising');
	loadTemplate($smarty, 'index/imageSlider');
	loadTemplate($smarty, 'index/gamePlatforms');
	loadTemplate($smarty, 'index/latestNews');
	loadTemplate($smarty, 'index/lastGames');
	loadTemplate($smarty, 'index/comingSoon');
	loadTemplate($smarty, 'index/sales');
	loadTemplate($smarty, 'index/latestPosts');
	loadTemplate($smarty, 'index/latestPictures');
	loadTemplate($smarty, 'index/bestSelling');
	loadTemplate($smarty, 'index/sideBar');
	loadTemplate($smarty, 'index/footer');
}