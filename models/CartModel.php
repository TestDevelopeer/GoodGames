<?php

function getGameForCartById($id){
	$sql = "SELECT `id_game`, `name_game`, `price_game`, `discount_game`, `discount_price_game` FROM `games` WHERE `id_game` = '{$id}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function addorder($userEmail, $userName, $userId, $gamesId, $cntCart, $gamesName, $gamesPrice, $payment, $date, $time){
	$sql = "INSERT INTO `orders`
			(`id_order`, `order_user_email`, `order_user_name`, `order_user_id`, `order_games_id`, `order_games_cnt`, `order_games_name`, `order_price`, `order_status`, `order_payment`, `order_date`, `order_time`)
			VALUES 
			(NULL, '{$userEmail}', '{$userName}', '{$userId}', '{$gamesId}', '{$cntCart}', '{$gamesName}', '{$gamesPrice}', '0', '{$payment}', '{$date}', '{$time}')";
			
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function getorderbyuser($user){
	$sql = "SELECT * FROM `orders` WHERE `order_user_id` = '{$user}' ORDER BY `order_status` ASC, `id_order` DESC";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function updateorder($id){
	$sql = "UPDATE `orders` SET `order_status` = '1' WHERE `orders`.`id_order` = {$id}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function getOrderById($id){
	$sql = "SELECT * FROM `orders` WHERE `id_order` = '{$id}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function getNoPayOrders($user){
	$sql = "SELECT * FROM `orders` WHERE `order_user_id` = '{$user}' AND `order_status` = '0' AND `order_time_for_pay` = '1'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function removeorder($id){
	$sql = "DELETE FROM `orders` WHERE `orders`.`id_order` = {$id}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function getlastnotpay($user){
	$sql = "SELECT * FROM `orders` WHERE `order_user_id` = '{$user}' AND `order_status` = '0' AND `order_time_for_pay` = '1' ORDER BY `id_order` DESC LIMIT 1";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function getlastpay($user){
	$sql = "SELECT * FROM `orders` WHERE `order_user_id` = '{$user}' AND `order_status` = '1' ORDER BY `id_order` DESC";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function unsetOrder($id){
	$sql = "UPDATE `orders` SET `order_time_for_pay` = '0' WHERE `orders`.`id_order` = {$id}";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function getLastORders($date){
	foreach ($date as $day => $value) {
		$sql = "SELECT * FROM `orders`
			WHERE `order_date` = '{$value}'";
		$rs = mysqli_query($GLOBALS["db"],$sql);
		$count[$day] = count(createSmartyRsArray($rs));
	}
	
	return $count;
}