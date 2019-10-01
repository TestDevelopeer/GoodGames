<?php

function getGalleryById($id){
	$sql = "SELECT * FROM `gallery`
			WHERE `user_id_photo` = '{$id}'
			ORDER BY `id_photo` DESC";
	$rs = mysqli_query($GLOBALS['db'],$sql);
	return createSmartyRsArray($rs);
}

function getAllPic(){
	$sql = "SELECT * FROM `gallery`
			ORDER BY `id_photo` DESC";
	$rs = mysqli_query($GLOBALS['db'],$sql);
	return createSmartyRsArray($rs);
}

function addUserPic($id, $name, $namePic){
	$pic = $name.'.jpg';
	$path = '/www/images/users/'.$id.'/gallery/';
	$sql = "INSERT INTO `gallery`
			(`id_photo`, `path_photo`, `name_photo`, `name_pic`, `user_id_photo`)
			VALUES
			(NULL, '{$path}', '{$pic}', '{$namePic}', '{$id}')";
	$rs = mysqli_query($GLOBALS['db'],$sql);
	return $rs;
}

function getUserReview($id, $idPic){
	$sql = "SELECT * FROM `gallery_review`
			WHERE `gall_user_id` = '{$id}'
			AND `gall_pic_id` = '{$idPic}'";
	$rs = mysqli_query($GLOBALS['db'],$sql);
	return mysqli_fetch_assoc($rs);
}

function voteup($id, $review, $userId){
	$sql = "SELECT * FROM `gallery_review`
			WHERE `gall_user_id` = '{$userId}'
			AND `gall_pic_id` = '{$id}'";
	$rs = mysqli_query($GLOBALS['db'],$sql);
	$check = mysqli_fetch_assoc($rs);

	if(!$check){
		$sql = "INSERT INTO `gallery_review`
			(`id_gall_review`, `gall_vote_review`, `gall_user_id`, `gall_pic_id`)
			VALUES
			(NULL, '{$review}', '{$userId}', '{$id}')";
		$rs = mysqli_query($GLOBALS['db'],$sql);
		return $rs;
	} else {
		$sql = "UPDATE `gallery_review`
				SET `gall_vote_review` = '{$review}'
				WHERE `gall_user_id` = '{$userId}'
				AND `gall_pic_id` = '{$id}'";
		$rs = mysqli_query($GLOBALS['db'],$sql);
		return $rs;
	}
}

function getLikesPic($id){
	$sql = "SELECT * FROM `gallery_review`
			WHERE `gall_vote_review` = 'like'
			AND `gall_pic_id` = '{$id}'";
	$rs = mysqli_query($GLOBALS['db'],$sql);
	return createSmartyRsArray($rs);
}

function getDislikesPic($id){
	$sql = "SELECT * FROM `gallery_review`
			WHERE `gall_vote_review` = 'dislike'
			AND `gall_pic_id` = '{$id}'";
	$rs = mysqli_query($GLOBALS['db'],$sql);
	return createSmartyRsArray($rs);
}

function getPhoto($id){
	$sql = "SELECT * FROM `gallery`
			WHERE `id_photo` = '{$id}'";
	$rs = mysqli_query($GLOBALS['db'],$sql);
	return mysqli_fetch_assoc($rs);
}

function deletephoto($itemId){
	$sql = "DELETE FROM `gallery`
			WHERE `id_photo` = '{$itemId}'";
	$rs = mysqli_query($GLOBALS['db'],$sql);
	return $rs;
}