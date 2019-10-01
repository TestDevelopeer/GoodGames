<?php

function getReviewsByUser($userId){
	$sql = "SELECT * FROM `reviews`
			WHERE `auth_user_id` = '{$userId}'
			ORDER BY `id_review` DESC";
	$rs = mysqli_query($GLOBALS['db'],$sql);
	return createSmartyRsArray($rs);
}