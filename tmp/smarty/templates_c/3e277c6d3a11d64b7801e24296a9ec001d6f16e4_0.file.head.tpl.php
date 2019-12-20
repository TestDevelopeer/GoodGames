<?php
/* Smarty version 3.1.30, created on 2019-10-15 23:11:01
  from "D:\GitHub\GoodGames\views\default\index\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5da627d5682074_49983132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e277c6d3a11d64b7801e24296a9ec001d6f16e4' => 
    array (
      0 => 'D:\\GitHub\\GoodGames\\views\\default\\index\\head.tpl',
      1 => 1552337733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da627d5682074_49983132 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>   
<html lang="en">
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

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/summernote/dist/summernote-bs4.css">

    <!-- GoodGames -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/goodgames.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/game_purchase.css">
    <!-- Custom Styles -->
    
    <?php if (!isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/login.css">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['controllerName']->value == 'Gallery') {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/gallery.css">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['controllerName']->value == 'Reviews') {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/reviews.css">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['actionName']->value == 'Friends') {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/reviews.css">
    <?php }?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/YouTubePopUp.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/tooltipster.bundle.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/custom.css">
    <!-- END: Styles --> 
<!-- jQuery -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/js/jquery-1.10.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/js/tooltipster.bundle.js"><?php echo '</script'; ?>
>

    
    <?php echo '<script'; ?>
>
        $(document).ready(function() {
            $('.tools').tooltipster({
                animation: 'fade',
                delay: 200,
                theme: 'tooltipster-punk',
                trigger: 'hover',
                maxWidth: 300,
                side: 'right'
            });
        });
    <?php echo '</script'; ?>
>


</head>

<body><?php }
}
