<?php
/* Smarty version 3.1.30, created on 2019-03-11 23:21:08
  from "D:\OSPanel\domains\gg.com\views\default\user\search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c86c3343f9b86_07254703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3052df73798390be9fdb95d38ad4ac701681bde5' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\user\\search.tpl',
      1 => 1552333974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c86c3343f9b86_07254703 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="responsive_page_template_content">

			<div class="page_content">
	<!-- top content, dont delete search_filter div below -->
	<div id="search_filter">
	<div class="grouppage_content_area blue_background">
					<div class="search_breadcrumbs">
				<a href="/user/friends/<?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
/">&lt; Назад</a>
			</div>
				<div class="maincontents">
			<div class="community_search_container">
				<h2>Найти друзей</h2>
									<div class="search_title_user_subheader">Поиск по имени пользователя.</div>
								<br>
								<form action="/user/searchusers/" method="POST">
									<input name="user_name" id="user_name" class="community_search_text_box" value="<?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
" autocomplete="off">
								</form>
				
									
							</div>
		</div>
	</div>

	<!-- /top content -->
	<!-- main body -->

	<div class="community_search_results_container">
		<div class="maincontent">
			<div id="search_results" style="opacity: 1;">	<div id="community_searchresults_pagination" class="community_searchresults_container">
		<span class="community_searchresults_title"><?php if ($_smarty_tpl->tpl_vars['rsUsers']->value != null) {?>Пользователи<?php } else { ?>Пользователей не найдено<?php }?></span>
				
	<div style="clear: both"></div>
	</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsUsers']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
<div class="search_row">
	<div class="mediumHolder_default" style="float:left;">
		<div class="avatarMedium">
			<a href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
/">
				<?php if ($_smarty_tpl->tpl_vars['user']->value['user_have_photo'] == 1) {?>
					<img style="max-width: 64px" src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
">
				<?php } else { ?>
					<img style="max-width: 64px" src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.png" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
">
				<?php }?>
			</a>
		</div>
	</div>
	<div class="searchPersonaInfo">
		<a class="searchPersonaName" href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
/"><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</a>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['user']->value['id_user'] != $_smarty_tpl->tpl_vars['arUser']->value['id_user']) {?>
	<div class="search_result_friend">
		<?php if ($_smarty_tpl->tpl_vars['checkFriend']->value[$_smarty_tpl->tpl_vars['user']->value['id_user']] && $_smarty_tpl->tpl_vars['checkFriend']->value[$_smarty_tpl->tpl_vars['user']->value['id_user']]['list_status'] == 1) {?>
		<img style="vertical-align: middle" src="https://steamcommunity-a.akamaihd.net/public/shared/images/friendindicator_small.png">Вы друзья
		<?php } elseif ($_smarty_tpl->tpl_vars['checkFriend']->value[$_smarty_tpl->tpl_vars['user']->value['id_user']] && $_smarty_tpl->tpl_vars['checkFriend']->value[$_smarty_tpl->tpl_vars['user']->value['id_user']]['list_status'] == 0) {?>
		<img style="vertical-align: middle" src="https://steamcommunity-a.akamaihd.net/public/shared/images/friendindicator_small.png">Заявка отправлена
		<?php }?>
		<?php if (!$_smarty_tpl->tpl_vars['checkFriend']->value[$_smarty_tpl->tpl_vars['user']->value['id_user']]) {?>
		<a href="javascript: addtofriend(<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
);" class="btnv6_blue_hoverfade btn_small btn_uppercase">
			<span>Добавить в друзья</span>
		</a>
		<?php }?>
	</div>
	<?php }?>
	<div style="clear:both"></div>

</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<div style="clear: both"></div>
</div>
		</div>
	</div>
		</div>	<!-- responsive_page_legacy_content -->

			<div id="footer_spacer"></div>
	<div id="footer_responsive_optin_spacer"></div>
	
	</div>	<!-- responsive_page_content -->

</div><?php }
}
