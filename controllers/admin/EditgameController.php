<?php
include_once "../models/UserModel.php";
include_once "../models/GameModel.php";
include_once "../models/CategoryModel.php";
include_once "../models/VideoModel.php";

    $smarty->setTemplateDir(TemplateAdminPrefix);
    $smarty->assign('teplateAdminPath', TemplateAdminWebPath);

if(!isset($_SESSION['admin'])){
	header('Location: /login/');
}

function indexAction($smarty){
	$id = isset($_GET['id']) ? $_GET['id'] : null;
	$rsGame = getProductById($id);
    $rsAllGames = getAllMainGames();
    $gameContent = getDlcByParent($id);
	$GameTags = $rsGame['tags'];
	$rsGameTags['tag'] = explode(',', $GameTags);
	$rsGameTags['tag_cnt'] = count($rsGameTags['tag']);
    
	$rsAllPlatforms = getGamePlatforms();
	$rsGamePlatforms = explode(',', $rsGame['platform_id']);
	foreach ($rsGamePlatforms as $rsGamePlat) {
		$PlatNames[$rsGamePlat] = getPlatformById($rsGamePlat);
	}

	$rsAllCats = getAllCategories();
	$rsGameCategories = explode(',', $rsGame['category_id']);
	foreach ($rsGameCategories as $rsGameCats) {
		$CatNames[$rsGameCats] = getCategoryById($rsGameCats);
	}
	$rsAllUsersCats = getAllUserCat();
	$rsUserCategories = explode(',', $rsGame['users_cat_id']);
	foreach ($rsUserCategories as $rsUserCats) {
		$UserCatNames[$rsUserCats] = getUserCatById($rsUserCats);
	}

	$key = 0;
    $dir = opendir("images/games/".$id.'/');
        while ($file = readdir ($dir))
        {
            if(($file != "..") && ($file != ".")) {
            $namePhoto[$key] = $file;
            $key++;
        }
        }
    closedir($dir);

	$keys = getKeysByGameId($id);
    $keysCnt = count($keys);


    $rsAllLangs = getAllLengs();
    $rsGameLang = getGameLang($id);
    $rsInterf = explode(',', $rsGameLang['lang_interf']);
    $rsSound = explode(',', $rsGameLang['lang_sound']);
    $rsSubtit = explode(',', $rsGameLang['lang_subtit']);
    foreach ($rsInterf as $interf) {
        $rsInterfNames[$interf] = getLangById($interf);
    }
    foreach ($rsSound as $sound) {
        $rsSoundNames[$sound] = getLangById($sound);
    }
    foreach ($rsSubtit as $subtit) {
        $rsSubtitNames[$subtit] = getLangById($subtit);
    }

    $rsMinRequire = getMinRequire($id);
    $rsRecRequire = getRecRequire($id);

    $rsLinks = getGameLinks($id);

    $rsLikes = count(getGameLikes($id, 'like'));

    $rsDislikes = count(getGameLikes($id, 'dislike'));
    $rsGameTrailer = getVideoByGame($id);

	$smarty->assign('pageTitle', $rsGame['name_game']);
	$smarty->assign('rsGame', $rsGame);

	if(isset($namePhoto)){
    	$smarty->assign('namePhoto', $namePhoto);
    }
    $smarty->assign('rsGameTags', $rsGameTags);
    $smarty->assign('keys', $keys);
    $smarty->assign('keysCnt', $keysCnt);

    $smarty->assign('rsAllPlatforms', $rsAllPlatforms);
    $smarty->assign('PlatNames', $PlatNames);

    $smarty->assign('rsAllCats', $rsAllCats);
    $smarty->assign('CatNames', $CatNames);

    $smarty->assign('rsAllUsersCats', $rsAllUsersCats);
    $smarty->assign('UserCatNames', $UserCatNames);

    $smarty->assign('rsInterfNames', $rsInterfNames);
    $smarty->assign('rsSoundNames', $rsSoundNames);
    $smarty->assign('rsSubtitNames', $rsSubtitNames);
    $smarty->assign('rsAllLangs', $rsAllLangs);

    $smarty->assign('rsMinRequire', $rsMinRequire);
    $smarty->assign('rsRecRequire', $rsRecRequire);

    $smarty->assign('rsLinks', $rsLinks);

    $smarty->assign('rsLikes', $rsLikes);
    $smarty->assign('rsDislikes', $rsDislikes);

    $smarty->assign('rsGameTrailer', $rsGameTrailer);
    $smarty->assign('gameContent', $gameContent);
    $smarty->assign('rsAllGames', $rsAllGames);


	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'game/game');
	loadTemplate($smarty, 'index/footer');
	loadTemplate($smarty, 'index/scripts');
	loadTemplate($smarty, 'game/addGameScripts');
    loadTemplate($smarty, 'article/addArticleScripts');
	loadTemplate($smarty, 'game/gameScripts');
	loadTemplate($smarty, 'index/endhtml');
}
