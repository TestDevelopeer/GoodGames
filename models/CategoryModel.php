<?php

function getGamePlatforms(){
	$sql = "SELECT * FROM `game_platforms`";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getAllCategories(){
	$sql = "SELECT * FROM `game_categories`";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getAltCat(){
	$sql = "SELECT * FROM `categories_alt`";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getRecCat(){
	$sql = "SELECT * FROM `categories_recommended`";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getCategoryById($id){
	$sql = "SELECT `id_category`, `name_category`
			FROM `game_categories`
			WHERE `id_category` = {$id}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	if($rs){
    	return mysqli_fetch_assoc($rs);
	} else {
		$rs = 0;
		return $rs;
	}
}

function getCategoryNewsById($id){
	$sql = "SELECT *
			FROM `articles_category`
			WHERE `id_art_cat` = {$id}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	if($rs){
    	return mysqli_fetch_assoc($rs);
	} else {
		$rs = 0;
		return $rs;
	}
}

function getPlatformById($id){
	$sql = "SELECT *
			FROM `game_platforms`
			WHERE `id_platform` = {$id}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    if($rs){
    	return mysqli_fetch_assoc($rs);
	} else {
		$rs = 0;
		return $rs;
	}
}

function addNewCat($catName){
	$sql = "INSERT INTO `game_categories`
			(`id_category`, `name_category`, `category_view`)
			VALUES (NULL, '{$catName}', '0')";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function addNewsCat($catName){
	$sql = "INSERT INTO `articles_category`
			(`id_art_cat`, `name_art_cat`)
			VALUES (NULL, '{$catName}')";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeCategoryById($id, $name){
	$sql = "UPDATE `game_categories`
			SET `name_category` = '{$name}'
			WHERE `game_categories`.`id_category` = {$id}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeNewsCategoryById($id, $name){
	$sql = "UPDATE `articles_category`
			SET `name_art_cat` = '{$name}'
			WHERE `id_art_cat` = {$id}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function deleteCatById($id){
	$sql = "DELETE FROM `game_categories`
			WHERE `game_categories`.`id_category` = {$id}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function deleteNewsCatById($id){
	$sql = "DELETE FROM `articles_category`
			WHERE `id_art_cat` = {$id}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function getArtCat(){
	$sql = "SELECT * FROM `articles_category`";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getArtCatId($id){
	$sql = "SELECT * FROM `articles_category` WHERE `id_art_cat` = {$id}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	if($rs){
    	return mysqli_fetch_assoc($rs);
	} else {
		$rs = 0;
		return $rs;
	}
}

function getcatNews(){
	$sql = "SELECT * FROM `articles_category`";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getAllUserCat(){
	$sql = "SELECT * FROM `game_users_cat`";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getUserCatById($rsUserCat){
	$sql = "SELECT * FROM `game_users_cat` WHERE `id_user_cat` = '{$rsUserCat}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return mysqli_fetch_assoc($rs);
}