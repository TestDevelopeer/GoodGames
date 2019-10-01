<?php

function addReview($user, $text, $rate, $gameId, $date, $time, $userId){
	$sql = "INSERT INTO `reviews`
			(`id_review`, `user_name_review`, `text_review`, `vote_review`, `game_id_review`, `review_date`, `review_time`, `auth_user_id`)
			VALUES (NULL, '{$user}', '{$text}', '{$rate}', '{$gameId}', '{$date}', '{$time}', '{$userId}')";

	$rs = mysqli_query($GLOBALS['db'],$sql);
	return $rs;
}

function getAllComments($gameId){
	$sql = "SELECT * FROM `reviews`
			WHERE `game_id_review` = {$gameId}
			ORDER BY `id_review` DESC";
	$rs = mysqli_query($GLOBALS['db'],$sql);
	return createSmartyRsArray($rs);
}

function getCommentsByUser($Id){
    $sql = "SELECT * FROM `reviews`
            WHERE `auth_user_id` = {$Id}
            ORDER BY `id_review` DESC";
    $rs = mysqli_query($GLOBALS['db'],$sql);
    return createSmartyRsArray($rs);
}

function loginUser($login, $pwd){
    $admin = "SELECT `user_pwd` FROM `users`
            WHERE `user_login` = '{$login}'
            LIMIT 1";
    $rsAdmin = mysqli_query($GLOBALS["db"],$admin);
    $rsPwd = mysqli_fetch_assoc($rsAdmin);

    $decrypt = mc_decrypt($rsPwd['user_pwd'], ENCRYPTION_KEY);
    
    if($decrypt == $pwd){
        $sql = "SELECT * FROM `users`
                WHERE `user_login` = '{$login}'
                LIMIT 1";
        
        $rs = mysqli_query($GLOBALS["db"],$sql);
    } else {
        $rs = false;
    }

    return createSmartyRsArray($rs);
}

function checkUserReview($userId, $itemId){
	$sql = "SELECT * FROM `reviews`
			WHERE `auth_user_id` = {$userId}
            AND `game_id_review` = {$itemId}
			LIMIT 1";
	$rs = mysqli_query($GLOBALS["db"],$sql);
	$rs = createSmartyRsArray($rs);
    if(isset($rs[0])) {
        $rs['success'] = 1;
    }   else {
        $rs['success'] = 0;
    }
    
    return $rs;
}

function checkAdmin($login, $pwd){
    $admin = "SELECT `pwd_admin` FROM `admin`
            WHERE `login_admin` = '{$login}'
            LIMIT 1";
    $rsAdmin = mysqli_query($GLOBALS["db"],$admin);
    $rsPwd = mysqli_fetch_assoc($rsAdmin);

    $decrypt = mc_decrypt($rsPwd['pwd_admin'], ENCRYPTION_KEY);
    
    if($decrypt == $pwd){
        $sql = "SELECT * FROM `admin`
                WHERE `login_admin` = '{$login}'
                LIMIT 1";
        
        $rs = mysqli_query($GLOBALS["db"],$sql);
    } else {
        $rs = false;
    }

    return createSmartyRsArray($rs);
}

function getSupportMessage(){
    $res = count(getNonCheckSupportMessage());
    if($res != 0){
        $sql = "SELECT * FROM `support`
                ORDER BY `support`.`support_checked` ASC LIMIT 20";
    } else {
        $sql = "SELECT * FROM `support`
                ORDER BY `support`.`id_support` DESC LIMIT 20";
    }
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getNonCheckSupportMessage(){
   $sql = "SELECT * FROM `support`
           WHERE `support_checked` = 0 ORDER BY `support`.`id_support` DESC";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs); 
}

function checkMessage($id){
    $sql = "UPDATE `support`
            SET `support_checked` = '1'
            WHERE `support`.`id_support` = {$id}";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function addOnlineUser($id, $userIp, $onlineTime){
    $sql = "SELECT * FROM `online_users`
            WHERE `user_id` = '{$id}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    $user = mysqli_fetch_assoc($rs);
    if($user){
        $sql = "UPDATE `online_users`
                SET `online_time` = '{$onlineTime}'
                WHERE `user_id` = '{$id}'";
        $rs = mysqli_query($GLOBALS["db"],$sql);
        return $rs;
    } else {
        $sql = "INSERT INTO `online_users`
            (`id_online`, `user_id`, `online_user_ip`, `online_time`)
            VALUES (NULL, '{$id}', '{$userIp}', '{$onlineTime}')";
        $rs = mysqli_query($GLOBALS["db"],$sql);
        return $rs;
    } 
}

function deleteOnlineUser($wine, $time, $ip){
    $sql = "DELETE FROM `online_users`
            WHERE (`online_time` + '{$wine}') < '{$time}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function deleteOnlineUserLogout($user){
    $sql = "DELETE FROM `online_users`
            WHERE `user_id` = '{$user}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function getOnlineUsers(){
    $sql = "SELECT * FROM `online_users`";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function addSupportMessage($userId, $email, $name, $subject, $text, $userPhoto, $date){
    $sql = "INSERT INTO `support`
            (`id_support`, `support_user_id`, `support_user_email`, `support_user_name`, `support_user_theme`, `support_user_text`, `support_checked`, `supp_user_photo`, `support_date`)
            VALUES (NULL, '{$userId}', '{$email}', '{$name}', '{$subject}', '{$text}', '0', '{$userPhoto}', '{$date}')";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function getUserById($userId){
    $sql = "SELECT * FROM `users` WHERE `id_user` = '{$userId}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return mysqli_fetch_assoc($rs);
}

function getUserByLink($userId){
    $sql = "SELECT * FROM `users` WHERE `user_link` = '{$userId}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return mysqli_fetch_assoc($rs);
}

function getBadge($cnt){
    $sql = "SELECT * FROM `badges` WHERE `cnt_games` BETWEEN 0 AND {$cnt} ORDER BY `cnt_games` DESC";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getLevel($cnt){
    $sql = "SELECT * FROM `levels` WHERE `cnt_level` BETWEEN 0 AND {$cnt} ORDER BY `cnt_level` DESC";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getLevelPlus($cnt){
   $sql = "SELECT * FROM `levels_plus` WHERE `cnt_lvl_plus` BETWEEN 0 AND {$cnt} ORDER BY `cnt_lvl_plus` DESC";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs); 
}

function addReviewOfReview($id, $review, $user){
    if($review == 1){
        $sql = "INSERT INTO
                `reviews_of_review`
                (`id_rev`, `id_rev_of_rev`, `rev_likes`, `rev_useful`, `rev_user`) 
                VALUES 
                (NULL, '{$id}', '{$review}', '0', '{$user}')";
        $rs = mysqli_query($GLOBALS["db"],$sql);
        return $rs;
    } else if ($review == 2){
        $sql = "INSERT INTO
                `reviews_of_review`
                (`id_rev`, `id_rev_of_rev`, `rev_likes`, `rev_useful`, `rev_user`) 
                VALUES 
                (NULL, '{$id}', '0', '{$review}', '{$user}')";
        $rs = mysqli_query($GLOBALS["db"],$sql);
        return $rs;
    }
}

function getRevOfRev($id, $user){
    $sql = "SELECT * FROM `reviews_of_review`
            WHERE `id_rev_of_rev` = '{$id}'
            AND `rev_user` = '{$user}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    $res = mysqli_fetch_assoc($rs);
    if($res){
        return $res;
    } else {
        $res = 0;
        return $res;
    }
}

function getLikeRev($id){
    $sql = "SELECT * FROM `reviews_of_review` WHERE `id_rev_of_rev` = '{$id}' AND `rev_likes` = '1'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs); 
}

function getUsefulRev($id){
    $sql = "SELECT * FROM `reviews_of_review` WHERE `id_rev_of_rev` = '{$id}' AND `rev_useful` = '2'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs); 
}

function registerNewUser($email, $pwdCrypt, $name, $login) {
    $sql = "INSERT INTO `users`(`id_user`, `user_email`, `user_login`, `user_name`, `user_country`, `user_city`, `user_desc`, `user_link`, `user_pwd`, `user_have_photo`, `user_have_bg`, `user_level`)
    VALUES (NULL, '{$email}', '{$login}', '{$name}', '', '', '', '', '{$pwdCrypt}', '0', '0', '1')";
    
    $rs = mysqli_query($GLOBALS["db"],$sql);
    
    if($rs) {
        $sql = "SELECT * FROM users
                WHERE (`user_email` = '{$email}' and `user_pwd` = '{$pwdCrypt}')
                LIMIT 1";
        
        $rs = mysqli_query($GLOBALS["db"],$sql);
        $rs = createSmartyRsArray($rs);
        
        if(isset($rs[0])) {
            $rs['success'] = 1;
        }   else {
            $rs['success'] = 0;
        }
    } else {
        $rs['success'] = 0;
    }
    
    return $rs;
}

function getWishList($userId){
    $sql = "SELECT * FROM `wish_list` WHERE `wish_user_id` = '{$userId}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs); 
}

function getAllCountries(){
    $sql = "SELECT * FROM `countries`";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs); 
}

function getCountries($userCode){
    $sql = "SELECT * FROM `countries` WHERE `code_country` = '{$userCode}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return mysqli_fetch_assoc($rs); 
}

function checkLink($link){
    $sql = "SELECT `id_user`
            FROM `users`
            WHERE `user_link` = '{$link}' ORDER BY `id_user` DESC LIMIT 1";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return mysqli_fetch_assoc($rs);
}

function checkEmail($email){
    $sql = "SELECT `id_user`
            FROM `users`
            WHERE `user_email` = '{$email}' ORDER BY `id_user` DESC LIMIT 1";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return mysqli_fetch_assoc($rs);
}

function changeUserInfo($id, $email, $name, $country, $link, $about){
    $sql = "UPDATE `users`
            SET `user_email` = '{$email}',
                `user_name` = '{$name}',
                `user_country` = '{$country}',
                `user_desc` = '{$about}',
                `user_link` = '{$link}'
            WHERE `id_user` = '{$id}'";
            
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function insertCode($id, $code){
    $sql = "UPDATE `users`
            SET
            `2FA` = '1',
            `2FA_secret` = '{$code}'
            WHERE `users`.`id_user` = '{$id}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function delete2fa($id){
    $sql = "UPDATE `users`
            SET
            `2FA` = '0',
            `2FA_secret` = ''
            WHERE `users`.`id_user` = '{$id}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function refreshauth($email, $code){
    $sql = "SELECT `id_user` FROM `users`
            WHERE `user_email` = '{$email}'
            AND `2FA_secret` = '{$code}'
            ORDER BY `id_user` DESC LIMIT 1";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    $check = mysqli_fetch_assoc($rs);
    
    if($check){
        $sql = "UPDATE `users`
            SET
            `2FA` = '0',
            `2FA_secret` = ''
            WHERE `users`.`user_email` = '{$email}'
            AND `users`.`2FA_secret` = '{$code}'";
        $rs = mysqli_query($GLOBALS["db"],$sql);
        $res['success'] = 1;
        return $res;
    } else {
        $res['success'] = 0;
        return $res;
    }
}

function deleteuserbg($id){
    $sql = "UPDATE `users`
            SET
            `user_have_bg` = '0'
            WHERE `users`.`id_user` = '{$id}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function changeUserPwds($id, $encryptedPwd){
    $sql = "UPDATE `users`
            SET
            `user_pwd` = '{$encryptedPwd}'
            WHERE `users`.`id_user` = '{$id}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function getUserByEmail($email){
    $sql = "SELECT * FROM `users`
            WHERE `user_email` = '{$email}'
            ORDER BY `id_user`
            DESC LIMIT 1";

    $rs = mysqli_query($GLOBALS["db"],$sql);
    return mysqli_fetch_assoc($rs);
}

function changepwd($email, $pwd){
    $sql = "UPDATE `users`
            SET
            `user_pwd` = '{$pwd}'
            WHERE `users`.`user_email` = '{$email}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function addUserComment($user, $senderUser, $senderName, $text, $date){
    $sql = "INSERT INTO `user_comments`
            (`id_com`, `user_id_com`, `user_com`, `name_user_com`, `text_com`, `date_com`)
            VALUES
            (NULL, '{$user}', '{$senderUser}', '{$senderName}', '{$text}', '{$date}')";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function getUserComments($user){
    $sql = "SELECT * FROM `user_comments` WHERE `user_id_com` = '{$user}' ORDER BY `id_com` DESC";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getFriendList($user){
    $sql = "SELECT * FROM `friend_list`
            WHERE (`parent_user` = '{$user}'
            OR `child_user` = '{$user}')
            AND `list_status` = '1'
            ORDER BY `id_list` DESC";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function addToFriend($parent, $user){
    $sql = "INSERT INTO `friend_list`
            (`id_list`, `parent_user`, `child_user`, `list_status`)
            VALUES
            (NULL, '{$parent}', '{$user}', '0')";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function deleteFromFriend($parent, $user){
    $sql = "DELETE FROM `friend_list`
            WHERE (`parent_user` = '{$parent}' OR `parent_user` = '{$user}')
            AND (`child_user` = '{$user}' OR `child_user` = '{$parent}')";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function checkFriend($rsUser, $arUser){
    $sql = "SELECT * FROM `friend_list`
            WHERE (`parent_user` = '{$rsUser}' OR `parent_user` = '{$arUser}')
            AND (`child_user` = '{$arUser}' OR `child_user` = '{$rsUser}')";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return mysqli_fetch_assoc($rs);
}

function getPendingFriends($arUser){
    $sql = "SELECT * FROM `friend_list`
            WHERE `parent_user` = '{$arUser}'
            AND `list_status` = '0'
            ORDER BY `id_list` DESC";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    $rsPending['send'] = createSmartyRsArray($rs);

    $sql = "SELECT * FROM `friend_list`
            WHERE `child_user` = '{$arUser}'
            AND `list_status` = '0'
            ORDER BY `id_list` DESC";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    $rsPending['accept'] = createSmartyRsArray($rs);

    return $rsPending;
}

function acceptFriend($user, $child){
    $sql = "UPDATE `friend_list`
            SET
            `list_status` = '1'
            WHERE `parent_user` = '{$user}'
            AND `child_user` = '{$child}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function IgnoreAllInvites($child){
    $sql = "DELETE FROM `friend_list`
            WHERE `child_user` = '{$child}'
            AND `list_status` = '0'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function getUsersBySearchName($userName){
    $sql = "SELECT * FROM `users` search
            WHERE (`user_name` LIKE '%$userName%')
            ORDER BY `id_user` DESC";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function getFriendsBySearchName($userName){
    $sql = "SELECT * FROM `users` search
            WHERE (`user_name` LIKE '%$userName%')
            ORDER BY `id_user` DESC";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function updatePhoto($photo, $user){
    $sql = "UPDATE `users`
            SET `{$photo}` = '1'
            WHERE `users`.`id_user` = '{$user}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}