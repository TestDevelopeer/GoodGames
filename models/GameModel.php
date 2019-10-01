<?php

function getProductById($itemId){
	$sql = "SELECT * FROM `games`
			WHERE `id_game` = {$itemId}
			ORDER BY `id_game`
			DESC LIMIT 1";

	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function addReviewGame($gameId, $rate){
	$sql = "UPDATE `games`
			SET `rating_game` = `rating_game` + '{$rate}',
				`cnt_vote_rating` = `cnt_vote_rating` + 1
			WHERE `games`.`id_game` = {$gameId}";
	$rs = mysqli_query($GLOBALS['db'],$sql);
	return $rs;
}

function getRandomGames(){
	$sql = "SELECT * FROM `games` WHERE `parent_game` = '0' ORDER BY RAND() LIMIT 6";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getRandomRecomGames(){
	$sql = "SELECT * FROM `games`
			WHERE `parent_game` = '0'
			AND `discount_game` != '0'
			ORDER BY RAND() LIMIT 4";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getRandomGame(){
	$sql = "SELECT * FROM `games` WHERE `discount_game` != '0' AND `parent_game` = '0' ORDER BY RAND() LIMIT 1";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return mysqli_fetch_assoc($rs);
}

function getBestSelling(){
	$sql = "SELECT * FROM `games` WHERE `parent_game` = '0'
			ORDER BY `cnt_sale`
			DESC LIMIT 15";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getMostPopularGame(){
	$sql = "SELECT * FROM `games` WHERE `discount_game` != '0' AND `parent_game` = '0'
			ORDER BY `cnt_view` DESC LIMIT 4";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getAllGames(){
	$sql = "SELECT * FROM `games` WHERE `parent_game` = '0' ORDER BY `id_game` DESC";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getAllMainGames(){
	$sql = "SELECT * FROM `games` WHERE `parent_game` = '0' ORDER BY `id_game` DESC";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getLastGame(){
	$sql = "SELECT `id_game` FROM `games`
			ORDER BY `id_game`
			DESC LIMIT 1";

	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function addnewgame($name, $tags, $categoriesid, $platformsid){

	$sql = "INSERT INTO `games`
			(`id_game`,
			`parent_game`,
			`category_id`,
			`tags`,
			`platform_id`,
			`Developer`,
			`Publisher`,
			`Date`,
			`game_date`,
			`name_game`,
			`price_game`,
			`discount_game`,
			`discount_price_game`,
			`description_game`,
			`desc_game`,
			`cnt_view`,
			`cnt_sale`,
			`pegi_rating`)
			VALUES
			(NULL,
			'0',
			'{$categoriesid}',
			'{$tags}',
			'{$platformsid}',
			'',
			'',
			'',
			'',
			'{$name}',
			'',
			'',
			'',
			'',
			'',
			'0',
			'0',
			'')";
	
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function addnewcontent($name, $game){

	$sql = "INSERT INTO `games`
			(`id_game`,
			`parent_game`,
			`category_id`,
			`tags`,
			`platform_id`,
			`Developer`,
			`Publisher`,
			`Date`,
			`game_date`,
			`name_game`,
			`price_game`,
			`discount_game`,
			`discount_price_game`,
			`description_game`,
			`desc_game`,
			`cnt_view`,
			`cnt_sale`,
			`video_game`,
			`pegi_rating`)
			VALUES
			(NULL,
			'{$game}',
			'',
			'',
			'',
			'',
			'',
			'',
			'',
			'{$name}',
			'',
			'',
			'',
			'',
			'',
			'0',
			'0',
			'',
			'')";

	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function addGameLang($id){
	$sql = "INSERT INTO `game_languages`
			(`id_game_lang`, `lang_game_id`, `lang_interf`, `lang_sound`, `lang_subtit`)
			VALUES
			(NULL, '{$id}', '', '', '')";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function addGameMinReq($id){
	$sql = "INSERT INTO `min_require` (`id_req`, `req_game`, `OS`, `Processor`, `OZU`, `GPU`, `DirectX`, `Memory`)
			VALUES
			(NULL, '{$id}', '', '', '', '', '', '')";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}
function addGameRecReq($id){
	$sql = "INSERT INTO `recommended_require` (`id_require`, `require_game`, `OS`, `Processor`, `OZU`, `GPU`, `DirectX`, `Memory`)
			VALUES
			(NULL, '{$id}', '', '', '', '', '', '')";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function addGameLink($id){
	$sql = "INSERT INTO `steam_buy_links` (`id_steam_link`, `link_game_id`, `link_game`, `site_game`)
			VALUES
			(NULL, '{$id}', '', '')";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeCategories($gameId, $categoryNames){
	$sql = "UPDATE `games`
			SET `category_id` = '{$categoryNames}'
			WHERE `games`.`id_game` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeParent($gameId, $parent){
	$sql = "UPDATE `games`
			SET `parent_game` = '{$parent}'
			WHERE `games`.`id_game` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeUserCategories($gameId, $categoryNames){
	$sql = "UPDATE `games`
			SET `users_cat_id` = '{$categoryNames}'
			WHERE `games`.`id_game` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeTags($gameId, $tags){
	$sql = "UPDATE `games`
			SET `tags` = '{$tags}'
			WHERE `games`.`id_game` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changePlatfroms($gameId, $platformNames){
	$sql = "UPDATE `games`
			SET `platform_id` = '{$platformNames}'
			WHERE `games`.`id_game` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeName($gameId, $name){
	$sql = "UPDATE `games`
			SET `name_game` = '{$name}'
			WHERE `games`.`id_game` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changePrice($gameId, $price, $discount, $discountPrice){
	$sql = "UPDATE `games`
			SET `price_game` = '{$price}',
				`discount_game` = '{$discount}',
				`discount_price_game` = '{$discountPrice}'
			WHERE `games`.`id_game` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeDate($gameId, $date, $game_date){
	$sql = "UPDATE `games`
			SET `Date` = '{$date}',
				`game_date` = '{$game_date}'
			WHERE `games`.`id_game` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeVideo($gameId, $video, $name){
	$sql = "SELECT * FROM `videos` WHERE `id_game_video` = '{$gameId}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	$res = createSmartyRsArray($rs);
	
	if(isset($res[0])){
		$sql = "UPDATE `videos`
				SET `url_video` = '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/{$video}\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>',
					`id_on_youtube` = '{$video}'
				WHERE `videos`.`id_game_video` = '{$gameId}'";
		$rs = mysqli_query($GLOBALS["db"],$sql);
	} else {
		$sql = "INSERT INTO `videos`
				(`id_video`, `url_video`, `id_on_youtube`, `id_game_video`, `name_game_video`)
				VALUES
				(NULL, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/{$video}\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '{$video}', '{$gameId}', '{$name}')";
		$rs = mysqli_query($GLOBALS["db"],$sql);
	}
	
	return $rs;
}

function changeMainDesc($gameId, $text){
	$sql = "UPDATE `games`
			SET `description_game` = '{$text}'
			WHERE `games`.`id_game` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeSecondDesc($gameId, $text){
	$sql = "UPDATE `games`
			SET `desc_game` = '{$text}'
			WHERE `games`.`id_game` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeDeveloper($gameId, $developer){
	$sql = "UPDATE `games`
			SET `Developer` = '{$developer}'
			WHERE `games`.`id_game` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changePublisher($gameId, $publisher){
	$sql = "UPDATE `games`
			SET `Publisher` = '{$publisher}'
			WHERE `games`.`id_game` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changePegi($gameId, $pegi){
	$sql = "UPDATE `games`
			SET `pegi_rating` = '{$pegi}'
			WHERE `games`.`id_game` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeSystemRequired($gameId, $OS, $Processor, $OZU, $GPU, $DirectX, $Memory){
	$sql = "UPDATE `recommended_require`
			SET `OS` = '{$OS}',
				`Processor` = '{$Processor}',
				`OZU` = '{$OZU}',
				`GPU` = '{$GPU}',
				`DirectX` = '{$DirectX}',
				`Memory` = '{$Memory}'
			WHERE `recommended_require`.`require_game` = '{$gameId}'";

	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function changeSystemMinRequired($gameId, $OS, $Processor, $OZU, $GPU, $DirectX, $Memory){
	$sql = "UPDATE `min_require`
			SET `OS` = '{$OS}',
				`Processor` = '{$Processor}',
				`OZU` = '{$OZU}',
				`GPU` = '{$GPU}',
				`DirectX` = '{$DirectX}',
				`Memory` = '{$Memory}'
			WHERE `min_require`.`req_game` = '{$gameId}'";

	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function deleteGame($id){
	$sql = "DELETE FROM `games` WHERE `games`.`id_game` = {$id}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function getKeysByGameId($id){
	$sql = "SELECT * FROM `game_keys` WHERE `key_game` = {$id}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function addGameKey($gameId, $key){
	$sql = "INSERT INTO `game_keys`
			(`id_key`, `key_game`, `key_number`)
			VALUES (NULL, '{$gameId}', '{$key}')";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function deleteKeysByGame($gameId){
	$sql = "DELETE FROM `game_keys` WHERE `game_keys`.`key_game` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function getRandomPlatformGame($id){
	$referal = trim(strip_tags(stripcslashes(htmlspecialchars($id))));
	$sql = "SELECT * from `games` search WHERE (`platform_id` LIKE '%$referal%') ORDER BY RAND() LIMIT 1";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function getRandomPSGame($id){
	$referal = trim(strip_tags(stripcslashes(htmlspecialchars($id))));
	$sql = "SELECT * from `games` search WHERE (`platform_id` LIKE '%$referal%') ORDER BY RAND() LIMIT 4";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getDiscountGames(){
	$sql = "SELECT * FROM `games` WHERE `discount_game` != 0 AND `parent_game` = '0' ORDER BY `id_game` DESC LIMIT 15";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getFeaturedGames(){
	$sql = "SELECT * FROM `games` WHERE `parent_game` = '0' ORDER BY RAND() LIMIT 9";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getPopularStoreGames(){
	$sql = "SELECT * FROM `games` WHERE `parent_game` = '0' ORDER BY `cnt_view` DESC LIMIT 6";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getGames(){
	$sql = "SELECT * FROM `games` WHERE `parent_game` = '0' ORDER BY `id_game` DESC LIMIT 12";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getMoreGames($desc, $cat){
	if($cat == 'all'){
		$sql = "SELECT * FROM `games`
				WHERE `parent_game` = '0'
				ORDER BY `id_game`
				DESC LIMIT {$desc}";
	} else {
		$sql = "SELECT * FROM `games` search
				WHERE (`parent_game` = '0' AND `category_id` LIKE '%$cat%')
				ORDER BY `id_game`
				DESC LIMIT {$desc}";
	}
	
	
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getGamesByCatId($id, $cat){
	$sql = "SELECT * from `games` search WHERE (`{$cat}` LIKE '%$id%')";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getLastGames(){
	$sql = "SELECT * FROM `games` WHERE `parent_game` = '0' ORDER BY `id_game` DESC LIMIT 12";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getGameForOrder($id){
	$sql = "SELECT `id_game`, `name_game`, `price_game`, `discount_game`, `discount_price_game`
			FROM `games` WHERE `id_game` = '{$id}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function getKeyByGame($id){
	$sql = "SELECT `id_key`, `key_number`
			FROM `game_keys`
			WHERE `key_game` = {$id}
			ORDER BY `id_key`
			DESC LIMIT 1";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	$key = mysqli_fetch_assoc($rs);

	$sql = "DELETE FROM `game_keys` WHERE `game_keys`.`id_key` = {$key['id_key']}";

	$rs = mysqli_query($GLOBALS["db"],$sql);

	return $key;
}

function addSaleForGame($id){
	$sql = "UPDATE `games` SET `cnt_sale` = `cnt_sale` + 1 WHERE `games`.`id_game` = {$id};";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function addBuyedGame($user, $gameId, $gameName){
	$sql = "SELECT * FROM `buyed_games`
			WHERE `buy_user_id` = {$user}
			AND `buy_game_id` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	$check = mysqli_fetch_assoc($rs);
	if(!$check){
		$sql = "INSERT INTO `buyed_games`
				(`id_buy`, `buy_user_id`, `buy_game_id`, `buy_game_name`, `buy_game_cnt`)
				VALUES
				(NULL, '{$user}', '{$gameId}', '{$gameName}', '1')";
		$rs = mysqli_query($GLOBALS["db"],$sql);
	} else {
		$sql = "UPDATE `buyed_games`
		SET `buy_game_cnt` = `buy_game_cnt` + 1
		WHERE `buyed_games`.`id_buy` = {$check['id_buy']}";
		$rs = mysqli_query($GLOBALS["db"],$sql);
	}

	return $rs;
}

function getGameForUser($id){
	$sql = "SELECT `id_game`, `name_game`
			FROM `games` WHERE `id_game` = '{$id}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function getComingGames(){
	$sql = "SELECT * FROM `coming_soon` ORDER BY `id_com_game` DESC";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getRecomReq($itemId){
	$sql = "SELECT * FROM `recommended_require` WHERE `require_game` = '{$itemId}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function getMinReq($itemId){
	$sql = "SELECT * FROM `min_require` WHERE `req_game` = '{$itemId}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function getGameLang($itemId){
	$sql = "SELECT * FROM `game_languages` WHERE `lang_game_id` = '{$itemId}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function getAllLengs(){
	$sql = "SELECT * FROM `languages`";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getLangById($id){
	$sql = "SELECT * FROM `languages` WHERE `id_lang` = '{$id}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function getWishListByUserGame($user, $game){
	$sql = "SELECT * FROM `wish_list` WHERE `wish_user_id` = '{$user}' AND `wish_game_id` = '{$game}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function deletewishlist($user, $game){
	$sql = "DELETE FROM `wish_list` WHERE `wish_user_id` = '{$user}' AND `wish_game_id` = '{$game}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function addwishlist($user, $game){
	$sql = "INSERT INTO `wish_list`
			(`id_wish`, `wish_user_id`, `wish_game_id`)
			VALUES
			(NULL, '{$user}', '{$game}')";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function getSteamBuyLink($itemId){
	$sql = "SELECT * FROM `steam_buy_links` WHERE `link_game_id` = '{$itemId}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function changeLang($gameId, $categoryNames, $type){
	$sql = "UPDATE `game_languages`
			SET `lang_{$type}` = '{$categoryNames}'
			WHERE `game_languages`.`lang_game_id` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function getRecRequire($id){
	$sql = "SELECT * FROM `recommended_require` WHERE `require_game` = '{$id}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function getMinRequire($id){
	$sql = "SELECT * FROM `min_require` WHERE `req_game` = '{$id}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function getGameLinks($id){
	$sql = "SELECT * FROM `steam_buy_links` WHERE `link_game_id` = '{$id}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function changeLinks($gameId, $link, $type){
	$sql = "UPDATE `steam_buy_links`
			SET `{$type}_game` = '{$link}'
			WHERE `steam_buy_links`.`link_game_id` = {$gameId}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function getGameLikes($id, $type){
	$sql = "SELECT * FROM `reviews`
			WHERE `game_id_review` = '{$id}'
			AND `vote_review` = '{$type}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getDlcByParent($itemId){
	$sql = "SELECT * FROM `games`
			WHERE `parent_game` = {$itemId}
			ORDER BY `id_game` DESC";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function addView($tableName, $setName, $idName, $id){
	$sql = "UPDATE `{$tableName}`
			SET `{$setName}` = `{$setName}` + 1
			WHERE `{$tableName}`.`{$idName}` = '{$id}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}