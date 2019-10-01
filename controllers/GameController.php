<?php
include_once '../models/CategoryModel.php';
include_once '../models/GameModel.php';
include_once '../models/UserModel.php';
include_once '../models/ArticleModel.php';
include_once '../models/VideoModel.php';
if(!isset($_SESSION['user'])){
	require_once('/capchaUser/capcha.php');
}

function indexAction($smarty){
	
	$itemId = isset($_GET['id']) ? $_GET['id'] : null;
	if($itemId == null) exit();

	$rsGameRating = 0;
	$rsGame = getProductById($itemId);
	if($rsGame['parent_game'] != 0){
		$rsParentGame = getProductById($rsGame['parent_game']);
		$rsOtherDlc = getDlcByParent($rsGame['parent_game']);
		$rsGameUpdates = getGameUpdate($rsGame['parent_game']);
		$rsTrailer = getVideoByGame($rsGame['parent_game']);
	} else {
		$tableName = 'games';
		$setName = 'cnt_view';
		$idName = 'id_game';
		$GameView = addView($tableName, $setName, $idName, $itemId);
		$rsOtherDlc = getDlcByParent($itemId);
		$rsParentGame = null;
		$rsGameUpdates = getGameUpdate($itemId);
		$rsTrailer = getVideoByGame($itemId);
	}

	$key = 0;
    $dir = opendir("images/articles/".$rsGameUpdates['id_art'].'/');
        while ($file = readdir ($dir))
        {
            if(($file != "..") && ($file != ".")) {
            $artPhoto[$key] = $file;
            $key++;
        }
        }
    closedir($dir);

	$rsGamePlatforms = getGamePlatforms();
	$rsCategories = getAllCategories();

	$key = 0;
    $dir = opendir("images/games/".$itemId.'/');
        while ($file = readdir ($dir))
        {
            if(($file != "..") && ($file != ".")) {
            $namePhoto[$key] = $file;
            $key++;
        }
        }
    closedir($dir);

	$rsComments = getAllComments($itemId);
	$rsCntComments = count($rsComments);

	foreach ($rsComments as $com) {
		$user = getUserById($com['auth_user_id']);
		$order = getlastpay($com['auth_user_id']);
		foreach ($order as $ord) {
			$cntOrders[$com['auth_user_id']] += $ord['order_games_cnt'];
		}
		$cntUserCom[$com['auth_user_id']] = count(getCommentsByUser($com['auth_user_id']));
		$rsUserComInfo[$com['id_review']] = $user;
		$rev = getRevOfRev($com['id_review'], $com['auth_user_id']);
		$rsRevOfRev[$com['id_review']] = $rev;
		$cntLikesRev[$com['id_review']] = count(getLikeRev($com['id_review']));
		$cntUsefulRev[$com['id_review']] = count(getUsefulRev($com['id_review']));
	}

	if($rsGame['parent_game'] == 0){
		$rsGameTag = explode(',', $rsGame['tags']);
	} else {
		$rsGameTag = explode(',', $rsParentGame['tags']);
	}

	$rsWishList = null;
	if(isset($_SESSION['user'])){
		$userId = $_SESSION['user']['id_user'];
		$rsCheckUserReview = checkUserReview($userId, $itemId);
		$rsWishList = getWishListByUserGame($_SESSION['user']['id_user'], $itemId);
	}

	$rsMostPopularGame = getMostPopularGame();
	$rsThreePopularLastArt = getThreePopularArt();
	$rsTwoLastArt = getTwoLastArt();

	$rsRandomGames = getRandomGames();

	if($rsGame['parent_game'] == 0){
		$rsGameCat = explode(',', $rsGame['category_id']);
	} else {
		$rsGameCat = explode(',', $rsParentGame['category_id']);
	}

	if($rsGame['parent_game'] == 0){
		$rsMinReq = getMinReq($itemId);
		$rsRecommendedReq = getRecomReq($itemId);
	} else {
		$rsMinReq = getMinReq($rsParentGame['id_game']);
		$rsRecommendedReq = getRecomReq($rsParentGame['id_game']);
	}

	$indexCatId = count($rsGameCat);
	for ($i = 0; $i < $indexCatId; $i++) {
		$catNames = getCategoryById($rsGameCat[$i]);
		$categories[$i]['id_cat'] = $catNames['id_category'];
		$categories[$i]['cat_name'] = $catNames['name_category'];
	}

	$rsUserCat = getAllUserCat();
	if($rsGame['parent_game'] == 0){
		$userCat = explode(',', $rsGame['users_cat_id']);
	} else {
		$userCat = explode(',', $rsParentGame['users_cat_id']);
	}
	$indexCatId = count($userCat);
	for ($i = 0; $i < $indexCatId; $i++) {
		$catNames = getUserCatById($userCat[$i]);
		$categoriesUser[$i]['id_cat'] = $catNames['id_user_cat'];
		$categoriesUser[$i]['cat_name'] = $catNames['name_user_cat'];
		$categoriesUser[$i]['icon'] = $catNames['user_cat_icon'];
	}

	if($rsGame['parent_game'] == 0){
		$rsGamePlat = explode(',', $rsGame['platform_id']);
	} else {
		$rsGamePlat = explode(',', $rsParentGame['platform_id']);
	}

	$KeyValues = $rsGame['cnt_keys'];
	if($KeyValues <= 10){
		$KeyValues = 'мало';
	} else if($KeyValues > 10 && $KeyValues <= 20) {
		$KeyValues = 'средне';
	} else {
		$KeyValues = 'много';
	}

	if($rsGame['parent_game'] == 0){
		$rsGameLang = getGameLang($itemId);
	} else {
		$rsGameLang = getGameLang($rsParentGame['id_game']);
	}
	$allLangs = getAllLengs();
	$lang['interf'] = explode(',', $rsGameLang['lang_interf']);
	$lang['sound'] = explode(',', $rsGameLang['lang_sound']);
	$lang['subtit'] = explode(',', $rsGameLang['lang_subtit']);

	if($rsGame['parent_game'] == 0){
		$rsSteamBuyLink = getSteamBuyLink($itemId);
	} else {
		$rsSteamBuyLink['steam'] = getSteamBuyLink($itemId);
		$rsSteamBuyLink['site'] = getSteamBuyLink($rsParentGame['id_game']);
	}


    $smarty->assign('itemInCart', 0);
    if(isset($_SESSION['cart'][$itemId])) {
        $smarty->assign('itemInCart', 1);
    }
	$smarty->assign('rsGamePlatforms', $rsGamePlatforms);
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('pageTitle', $rsGame['name_game']);
	$smarty->assign('rsGame', $rsGame);
	$smarty->assign('rsParentGame', $rsParentGame);
	if(isset($namePhoto)){
    	$smarty->assign('namePhoto', $namePhoto);
    }
    $smarty->assign('rsComments', $rsComments);
    $smarty->assign('rsCntComments', $rsCntComments);
    $smarty->assign('rsCheckUserReview', $rsCheckUserReview);

    $smarty->assign('rsRandomGames', $rsRandomGames);
    $smarty->assign('rsOtherDlc', $rsOtherDlc);
	$smarty->assign('rsMostPopularGame', $rsMostPopularGame);
	$smarty->assign('rsThreePopularLastArt', $rsThreePopularLastArt);
	$smarty->assign('rsTwoLastArt', $rsTwoLastArt);

	$smarty->assign('categories', $categories);
	$smarty->assign('rsGameTag', $rsGameTag);
	$smarty->assign('rsGamePlat', $rsGamePlat);

	$smarty->assign('KeyValues', $KeyValues);
	$smarty->assign('rsUserComInfo', $rsUserComInfo);
	$smarty->assign('cntOrders', $cntOrders);
	$smarty->assign('cntUserCom', $cntUserCom);
	$smarty->assign('rsRevOfRev', $rsRevOfRev);
	$smarty->assign('cntLikesRev', $cntLikesRev);
	$smarty->assign('cntUsefulRev', $cntUsefulRev);
	$smarty->assign('rsRecommendedReq', $rsRecommendedReq);
	$smarty->assign('rsMinReq', $rsMinReq);
	$smarty->assign('lang', $lang);
	$smarty->assign('allLangs', $allLangs);
	$smarty->assign('categoriesUser', $categoriesUser);
	$smarty->assign('rsWishList', $rsWishList);
	$smarty->assign('rsSteamBuyLink', $rsSteamBuyLink);
	$smarty->assign('rsGameUpdates', $rsGameUpdates);
	$smarty->assign('artPhoto', $artPhoto);
	$smarty->assign('rsTrailer', $rsTrailer);


	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'game/product');
	loadTemplate($smarty, 'game/sideBar');
	loadTemplate($smarty, 'index/footer');

}

function deletewishlistAction(){
	$user = $_POST['user'];
	$game = $_POST['game'];

	$rs = deletewishlist($user, $game);

	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}

	echo json_encode($res);
}

function addwishlistAction(){
	$user = $_POST['user'];
	$game = $_POST['game'];

	$rs = addwishlist($user, $game);

	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}

	echo json_encode($res);
}

function getgamedescAction(){
	$id = $_POST['id'];

	$rs = getProductById($id);

	if($rs){
		$res['success'] = 1;
		$res['message'] = $rs['desc_game'];
	}

	echo json_encode($res);
}