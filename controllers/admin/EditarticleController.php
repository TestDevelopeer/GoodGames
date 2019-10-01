<?php
include_once "../models/UserModel.php";
include_once "../models/GameModel.php";
include_once "../models/CategoryModel.php";
include_once "../models/VideoModel.php";
include_once "../models/ArticleModel.php";

    $smarty->setTemplateDir(TemplateAdminPrefix);
    $smarty->assign('teplateAdminPath', TemplateAdminWebPath);

if(!isset($_SESSION['admin'])){
	header('Location: /login/');
}

function indexAction($smarty){

	$id = isset($_GET['id']) ? $_GET['id'] : null;
	$rsArticle = getArtById($id);
	$key = 0;
    $dir = opendir("images/articles/".$id.'/'); 
        while ($file = readdir ($dir)) 
        { 
            if(($file != "..") && ($file != ".")) {
            $namePhoto[$key] = $file; 
            $key++;
        }
        } 
    closedir($dir); 

	$smarty->assign('pageTitle', $rsArticle['name_art']);
	$smarty->assign('rsArticle', $rsArticle);
	if(isset($namePhoto)){
    	$smarty->assign('namePhoto', $namePhoto);
    }
    $rsCategory = getArtCatId($rsArticle['cat_art']);
    $rsAllCats = getArtCat();
    $rsAllGames = getAllGames();

	$smarty->assign('rsAllCats', $rsAllCats);
	$smarty->assign('rsCategory', $rsCategory);
	$smarty->assign('rsAllGames', $rsAllGames);
	
	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'article/article');
	loadTemplate($smarty, 'index/footer');
	loadTemplate($smarty, 'index/scripts');
	loadTemplate($smarty, 'article/addArticleScripts');
	loadTemplate($smarty, 'index/endhtml');
}