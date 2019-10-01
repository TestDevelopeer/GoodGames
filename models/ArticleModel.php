<?php

function addNewArticle($category, $gameId, $artName, $artUser, $artPrewiew, $artText, $artDate){
	
    $sql = "INSERT INTO `articles`
    		(`id_art`, `art_game_id`, `name_art`, `cat_art`, `author_art`, `prewiew_text`, `text_art`, `views_art`, `date_art`)
    		VALUES
    		(NULL, '{$gameId}', '{$artName}', '{$category}', '{$artUser}', '{$artPrewiew}', '{$artText}', '0', '{$artDate}')";

    $rs = mysqli_query($GLOBALS["db"], $sql);

    return $rs;
}

function getAddedArticle(){
    $sql = "SELECT `id_art`
            FROM `articles`
            ORDER BY `articles`.`id_art` DESC LIMIT 1";
    
    $rs = mysqli_query($GLOBALS["db"],$sql);

    return mysqli_fetch_assoc($rs);
}

function getArtById($id){
	$sql = "SELECT * FROM `articles` WHERE `id_art` = {$id}";
	$rs = mysqli_query($GLOBALS["db"],$sql);

    return mysqli_fetch_assoc($rs);
}

function changeArtCat($artId, $name){
	$sql = "UPDATE `articles` SET `cat_art` = '{$name}' WHERE `id_art` = {$artId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeUpdateCat($artId, $gameId){
	$sql = "UPDATE `articles` SET `art_game_id` = '{$gameId}' WHERE `id_art` = {$artId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeArtName($artId, $name){
	$sql = "UPDATE `articles` SET `name_art` = '{$name}' WHERE `id_art` = {$artId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeArtAuthor($artId, $name){
	$sql = "UPDATE `articles` SET `author_art` = '{$name}' WHERE `id_art` = {$artId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeArtDate($artId, $name){
	$sql = "UPDATE `articles` SET `date_art` = '{$name}' WHERE `id_art` = {$artId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeArtText($artId, $name){
	$sql = "UPDATE `articles` SET `text_art` = '{$name}' WHERE `id_art` = {$artId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeArtPre($artId, $name){
	$sql = "UPDATE `articles` SET `prewiew_text` = '{$name}' WHERE `id_art` = {$artId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function getAllArt(){
	$sql = "SELECT * FROM `articles` WHERE `art_game_id` = '0' ORDER BY `id_art` DESC";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getArticlesById($id){
	$sql = "SELECT * FROM `articles` WHERE `art_game_id` = '0' AND `cat_art` = '{$id}' ORDER BY `id_art` DESC";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getArtPagination(){
	$sql = "SELECT * FROM `articles` WHERE `art_game_id` = '0' ORDER BY `id_art` DESC LIMIT 0, 20";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getArtPaginationWthCat($id){
	$sql = "SELECT * FROM `articles` WHERE `cat_art` = '{$id}' ORDER BY `id_art` DESC LIMIT 0, 20";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getLastSixArt(){
	$sql = "SELECT `id_art`, `name_art`, `author_art`, `prewiew_text`, `views_art`, `date_art`
			FROM `articles` WHERE `art_game_id` = '0'
			ORDER BY `id_art`
			DESC LIMIT 6";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getFourPopularArt(){
	$sql = "SELECT `id_art`, `name_art`, `author_art`, `prewiew_text`, `views_art`, `date_art`
			FROM `articles` WHERE `art_game_id` = '0'
			ORDER BY `views_art`
			DESC LIMIT 4";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getThreePopularArt(){
	$sql = "SELECT `id_art`, `name_art`, `author_art`, `prewiew_text`, `views_art`, `date_art`
			FROM `articles` WHERE `art_game_id` = '0'
			ORDER BY `views_art`
			DESC LIMIT 3";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getLastUpd(){
	$sql = "SELECT `id_art`, `art_game_id`, `name_art`, `author_art`, `prewiew_text`, `views_art`, `date_art`
			FROM `articles` WHERE `art_game_id` != '0'
			ORDER BY `id_art`
			DESC LIMIT 3";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getTwoLastArt(){
	$sql = "SELECT `id_art`, `name_art`, `author_art`, `prewiew_text`, `views_art`, `date_art`
			FROM `articles` WHERE `art_game_id` = '0'
			ORDER BY `id_art`
			DESC LIMIT 6";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getTwoRandArt(){
	$sql = "SELECT `id_art`, `name_art`, `author_art`, `prewiew_text`, `views_art`, `date_art`
			FROM `articles` WHERE `art_game_id` = '0'
			ORDER BY RAND() LIMIT 2";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function addArtComm($art, $user, $name, $text, $date){
	$sql = "INSERT INTO `article_comments`
			(`id_comment`, `id_art`, `id_user`, `name_user`, `text_comment`, `date_comment`)
			VALUES 
			(NULL, '{$art}', '{$user}', '{$name}', '{$text}', '{$date}')";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function getArtComments($id){
	$sql = "SELECT * FROM `article_comments` WHERE `id_art` = {$id} ORDER BY `id_comment` DESC";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getArtByCat($id){
	$sql = "SELECT `id_art`, `name_art`, `cat_art`, `author_art`, `prewiew_text`, `views_art`, `date_art` FROM `articles` WHERE `cat_art` = '{$id}' ORDER BY `id_art` DESC LIMIT 3";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getGameUpdate($gameId){
	$sql = "SELECT * FROM `articles` WHERE `art_game_id` = '{$gameId}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);

    return mysqli_fetch_assoc($rs);
}

function getAllGameUpdates(){
	$sql = "SELECT * FROM `articles` WHERE `art_game_id` != '0'";
	$rs = mysqli_query($GLOBALS["db"],$sql);

    return createSmartyRsArray($rs);
}

function searchArt($searchText){
	if($searchText == 'all'){
		$res['pagination'] = getArtPagination();
		$res['all'] = getAllArt();
		return $res;
	} else {
		$sql = "SELECT * FROM `articles` search
			WHERE
			(`name_art` LIKE '%$searchText%' OR `prewiew_text` LIKE '%$searchText%')
			ORDER BY `id_art`
			DESC LIMIT 20";
			
		$rs = mysqli_query($GLOBALS["db"],$sql);
	    $res['pagination'] = createSmartyRsArray($rs);

	    $sql = "SELECT * FROM `articles` search
			WHERE
			(`name_art` LIKE '%$searchText%' OR `prewiew_text` LIKE '%$searchText%')
			ORDER BY `id_art`
			DESC";
			
		$rs = mysqli_query($GLOBALS["db"],$sql);
		$res['all'] = createSmartyRsArray($rs);

		return $res;
	}
}

function searchArtPagination($searchText, $pagination){
	if($searchText == 'all'){
		$sql = "SELECT * FROM `articles` WHERE `art_game_id` = '0' ORDER BY `id_art` DESC LIMIT {$pagination}, 20";
			
		$rs = mysqli_query($GLOBALS["db"],$sql);
	    $res['pagination'] = createSmartyRsArray($rs);

	    $sql = "SELECT * FROM `articles` WHERE `art_game_id` = '0' ORDER BY `id_art` DESC";
			
		$rs = mysqli_query($GLOBALS["db"],$sql);
		$res['all'] = createSmartyRsArray($rs);

		return $res;
	} else {
		$sql = "SELECT * FROM `articles` search
			WHERE
			(`name_art` LIKE '%$searchText%' OR `prewiew_text` LIKE '%$searchText%')
			ORDER BY `id_art`
			DESC LIMIT {$pagination}, 20";
			
		$rs = mysqli_query($GLOBALS["db"],$sql);
	    $res['pagination'] = createSmartyRsArray($rs);

	    $sql = "SELECT * FROM `articles` search
			WHERE
			(`name_art` LIKE '%$searchText%' OR `prewiew_text` LIKE '%$searchText%')
			ORDER BY `id_art`
			DESC";
			
		$rs = mysqli_query($GLOBALS["db"],$sql);
		$res['all'] = createSmartyRsArray($rs);

		return $res;
	}
}

function searchArtPaginationWthCat($pagination, $category){
		$sql = "SELECT * FROM `articles` WHERE `cat_art` = '{$category}' ORDER BY `id_art` DESC LIMIT {$pagination}, 20";
			
		$rs = mysqli_query($GLOBALS["db"],$sql);
	    $res['pagination'] = createSmartyRsArray($rs);

	    $sql = "SELECT * FROM `articles` WHERE `cat_art` = '{$category}' ORDER BY `id_art` DESC";
			
		$rs = mysqli_query($GLOBALS["db"],$sql);
		$res['all'] = createSmartyRsArray($rs);

		return $res;
}