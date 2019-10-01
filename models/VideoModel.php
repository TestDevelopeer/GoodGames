<?php

function getRandomVideo(){
	$sql = "SELECT * FROM `videos` ORDER BY RAND() DESC LIMIT 1";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return mysqli_fetch_assoc($rs);
}

function addNewVideo($video, $id, $name){
	$sql = "INSERT INTO `videos`
			(`id_video`, `url_video`, `id_game_video`, `name_game_video`)
			VALUES (NULL, '{$video}', '{$id}', '{$name}')";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}

function getVideoByGame($id){
	$sql = "SELECT * FROM `videos` WHERE `id_game_video` = '{$id}'";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return mysqli_fetch_assoc($rs);
}

/*function changeVideo($id, $video, $name){
	$sql = "UPDATE `videos` SET `url_video` = '{$video}', `name_game_video` = '{$name}' WHERE `videos`.`id_video` = {$id}";
	
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return $rs;
}*/