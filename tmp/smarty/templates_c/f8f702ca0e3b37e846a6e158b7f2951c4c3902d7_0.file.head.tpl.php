<?php
/* Smarty version 3.1.30, created on 2019-03-04 15:18:26
  from "D:\OSPanel\domains\gg.com\views\default\user\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c7d1792e94079_14087931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8f702ca0e3b37e846a6e158b7f2951c4c3902d7' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\user\\head.tpl',
      1 => 1551701881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7d1792e94079_14087931 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>   
<html lang="en" class=" responsive touch">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--<title>GoodGames | Сообщество и магазин игр</title>-->

    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

    <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->
        <!-- FontAwesome -->
    <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/fontawesome-free/js/all.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/fontawesome-free/js/v4-shims.js"><?php echo '</script'; ?>
>
    <!-- IonIcons -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/ionicons/css/ionicons.min.css">

    <!-- Flickity -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/flickity/dist/flickity.min.css">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/photoswipe/dist/default-skin/default-skin.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/fontawesome-free/js/all.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/fontawesome-free/js/v4-shims.js"><?php echo '</script'; ?>
>

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/summernote/dist/summernote-bs4.css">

    <!-- GoodGames -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/goodgames.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/custom.css">

<link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/users/motiva_sans.css" rel="stylesheet" type="text/css" >
<link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/users/buttons.css" rel="stylesheet" type="text/css" >
<link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/users/shared_global.css" rel="stylesheet" type="text/css" >
<link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/users/globalv2.css" rel="stylesheet" type="text/css" >
<link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/users/modalContent.css" rel="stylesheet" type="text/css" >
<link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/users/profilev2.css" rel="stylesheet" type="text/css" >
<link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/users/stickers.css" rel="stylesheet" type="text/css" >
<link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/users/shared_responsive.css" rel="stylesheet" type="text/css" >
<link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/users/header.css" rel="stylesheet" type="text/css" >

<link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/users/groupv2.css" rel="stylesheet" type="text/css" >
<link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/users/groupadmin.css" rel="stylesheet" type="text/css" >
<link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/users/profile_editv2.css" rel="stylesheet" type="text/css" >

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/js/jquery-1.10.1.min.js"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['actionName']->value == 'friends') {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/users/friendsv2.css">
<?php }
if ($_smarty_tpl->tpl_vars['actionName']->value == 'searchusers') {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/users/search.css">
<?php }?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/customProfile.css">
    
</head>

<body><?php }
}
