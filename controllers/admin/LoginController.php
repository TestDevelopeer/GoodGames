<?php

include_once "../models/UserModel.php";

    $smarty->setTemplateDir(TemplateAdminPrefix);
    $smarty->assign('teplateAdminPath', TemplateAdminWebPath);

    if(isset($_SESSION['admin']) && $_SESSION['admin'] != ""){
    	header("Location: /admin/");
    }

function IndexAction($smarty){
    if(!isset($_SESSION['admin'])){
        require_once('capcha.php');
    }
	$smarty->assign('pageTitle', 'Авторизация');
	loadTemplate($smarty, 'auth/login');
}

function authAction(){
	$login = isset($_POST['login']) ? $_POST['login'] : null;
    $login = trim($login);
    $login = htmlspecialchars($login);

    $pwd = isset($_POST['password']) ? $_POST['password'] : null;
    $pwd = trim($pwd);
    $pwd = htmlspecialchars($pwd);

    $capcha = isset($_POST['typed_security_code']) ? $_POST['typed_security_code'] : null;
    $capcha = trim($capcha);
    $capcha = htmlspecialchars($capcha);

    $capchaName = 'capcha';
    $mdCapcha = md5($capchaName);
    
    if(isset($_COOKIE[$mdCapcha])){
        $currentCapcha = mc_decrypt($_COOKIE[$mdCapcha], ENCRYPTION_KEY);
        if($capcha == $currentCapcha){
            $checkAdmin = checkAdmin($login, $pwd);
            
            if($checkAdmin){
            	$_SESSION['admin']['id'] = $checkAdmin[0]['id_admin'];
            	$_SESSION['admin']['login'] = $checkAdmin[0]['login_admin'];
            	$_SESSION['admin']['name'] = $checkAdmin[0]['name_admin'];
            	$res['success'] = 1;
            } else {
            	$res['success'] = 0;
                $res['message'] = 'Неверный логин или пароль.';
            }
        } else {
            $res['success'] = 0;
            $res['message'] = 'Неверный код с картинки.';
        }
    } else {
        $res['success'] = 0;
        $res['message'] = 'Код устарел, обновите страницу.';
    }
    echo json_encode($res);
}
