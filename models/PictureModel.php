<?php

function getLastPictures(){
	$sql = "SELECT * FROM `gallery`
			WHERE `name_photo` != 'main.jpg'
			ORDER BY `id_photo` DESC LIMIT 6";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	return createSmartyRsArray($rs);
}