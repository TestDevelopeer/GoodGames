<?php

function isChatRoom($arUser, $rsUser){
	$sql = "SELECT * FROM `chat_rooms`
			WHERE (`arUser_room` = '{$arUser}' AND `rsUser_room` = '{$rsUser}')
			OR (`arUser_room` = '{$rsUser}' AND `rsUser_room` = '{$arUser}')";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	$Room = mysqli_fetch_assoc($rs);
	if(!$Room){
		$sql = "INSERT INTO `chat_rooms`
				(`id_room`, `arUser_room`, `rsUser_room`)
				VALUES
				(NULL, '{$arUser}', '{$rsUser}')";
		$rs = mysqli_query($GLOBALS["db"],$sql);

		$sql = "SELECT * FROM `chat_rooms`
				WHERE `arUser_room` = '{$arUser}' AND `rsUser_room` = '{$rsUser}'";
		$rs = mysqli_query($GLOBALS["db"],$sql);
		return mysqli_fetch_assoc($rs);
	} else {
		return $Room;
	}

}

function getMessagesByRoom($room){
	$arUser = $_SESSION['chat']['arUser']['id_user'];
	$sql = "UPDATE `chat_messages`
			SET `status_message` = '1'
			WHERE `id_chat_room` = '{$room}'
			AND `to_user` = '{$arUser}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);

	$sql = "SELECT `id_message` FROM `chat_messages`
			WHERE `id_chat_room` = '{$room}'
			ORDER BY `id_message` DESC";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	$msg = createSmartyRsArray($rs);

	foreach ($msg as $key => $value) {
		if($key > 9) {
			$sql = "DELETE FROM `chat_messages`
					WHERE `id_message` = '{$msg[$key]['id_message']}'";
			$rs = mysqli_query($GLOBALS["db"],$sql);
		}
	}

	$sql = "SELECT * FROM `chat_messages`
			WHERE `id_chat_room` = '{$room}'
			ORDER BY `id_message` DESC LIMIT 10";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getUserForChat($user){
	$sql = "SELECT `id_user`, `user_name`, `user_have_photo`
			FROM `users`
			WHERE `id_user` = '{$user}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function sendChatMsg($room, $arUser, $rsUser, $text, $base64img, $time, $dateSort){
	$sql = "INSERT INTO `chat_messages`(`id_message`, `id_chat_room`, `from_user`, `to_user`, `text_message`, `image_message`, `time_message`, `date_message`)
			VALUES
			(NULL, '{$room}', '{$arUser}', '{$rsUser}', '{$text}', '{$base64img}', '{$time}', '{$dateSort}')";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function getRoomsByUser($arUser){
	$sql = "SELECT * FROM `chat_rooms`
			WHERE `arUser_room` = '{$arUser}'
			OR `rsUser_room` = '{$arUser}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getNoReadMsg($room, $arUser){
	$sql = "SELECT * FROM `chat_messages`
			WHERE `id_chat_room` = '{$room}'
			AND `to_user` = '{$arUser}'
			AND `status_message` = '0'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getNoReadMsgWithoutRooms($arUser){
	$sql = "SELECT * FROM `chat_messages`
			WHERE `to_user` = '{$arUser}'
			AND `status_message` = '0'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}

function getTimeMsg($room, $arUser){
	$sql = "SELECT `time_message` FROM `chat_messages`
			WHERE `id_chat_room` = '{$room}'
			AND `to_user` = '{$arUser}'
			AND `status_message` = '0'
			ORDER BY `id_message` DESC LIMIT 1";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function addStatusImg($idImg, $status, $user){
	if($status == 'from_user'){
		$sql = "UPDATE `chat_messages`
			SET `is_img_hide_first_user` = '{$user}'
			WHERE `id_message` = '{$idImg}'";
		$rs = mysqli_query($GLOBALS["db"],$sql);
		return $rs;	
	} else if($status == 'to_user'){
		$sql = "UPDATE `chat_messages`
			SET `is_img_hide_second_user` = '{$user}'
			WHERE `id_message` = '{$idImg}'";
		$rs = mysqli_query($GLOBALS["db"],$sql);
		return $rs;	
	}

	
}

function getMsgById($id){
	$sql = "SELECT * FROM `chat_messages`
			WHERE `id_message` = '{$id}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}

function lastMsg($room){
	$sql = "SELECT `id_message`, `from_user`, `to_user` FROM `chat_messages`
			WHERE `id_chat_room` = '{$room}'
			ORDER BY `id_message` DESC LIMIT 1";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return mysqli_fetch_assoc($rs);
}