<?php
/* Smarty version 3.1.30, created on 2019-10-15 23:15:31
  from "D:\GitHub\GoodGames\views\default\chat\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5da628e3445813_77064369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7df445dae01fa1e404826b422fa943e0c176405' => 
    array (
      0 => 'D:\\GitHub\\GoodGames\\views\\default\\chat\\head.tpl',
      1 => 1551795722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da628e3445813_77064369 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
	<html class="responsive web_chat_frame fullheight">
		<head>
			<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
			<meta name="viewport" content="width=device-width,initial-scale=1">
			
			<link href="https://steamcommunity-a.akamaihd.net/public/shared/css/motiva_sans.css?v=FAK4O46_mOLB" rel="stylesheet" type="text/css">
			<link href="https://steamcommunity-a.akamaihd.net/public/shared/css/shared_global.css?v=o8AT57FjXBnx" rel="stylesheet" type="text/css">
			<link href="https://steamcommunity-a.akamaihd.net/public/css/webui/friends.css?v=1JigsKGP71Gj" rel="stylesheet" type="text/css">

			<link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/chat/chat.css" rel="stylesheet" type="text/css">
			<link href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/chat/customChat.css" rel="stylesheet" type="text/css">

			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/js/jquery-1.10.1.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/js/chatController.js"><?php echo '</script'; ?>
>
			<?php if (isset($_smarty_tpl->tpl_vars['chatRsUser']->value)) {?>
			<?php echo '<script'; ?>
 type="text/javascript">
				changeChat(<?php echo $_smarty_tpl->tpl_vars['chatRsUser']->value['id_user'];?>
, <?php echo $_smarty_tpl->tpl_vars['chatArUser']->value['id_user'];?>
);
			<?php echo '</script'; ?>
>
			<?php }?>
			<?php echo '<script'; ?>
 type="text/javascript">
				$(document).keypress(function(e) {
				    if(e.which == 13) {
				        $('#sendMsg').click();
				    }
				});
			<?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 type="text/javascript">
				updateCntMsg();
				updateOnlineFriends();
			<?php echo '</script'; ?>
>
			
		</head>
		<body class="fullheight"><?php }
}
