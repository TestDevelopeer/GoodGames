<?php
/* Smarty version 3.1.30, created on 2019-10-15 23:15:19
  from "D:\GitHub\GoodGames\views\default\user\friends.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5da628d7b7e7e3_56726991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75e89a1bbda3132258ce75ccab374ece4b629938' => 
    array (
      0 => 'D:\\GitHub\\GoodGames\\views\\default\\user\\friends.tpl',
      1 => 1551435655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da628d7b7e7e3_56726991 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="responsive_page_template_content">

<div class="pagecontent no_header friends">
	<div class="friends_header_bg">
		<div class="friends_header_container">
			<div class="friends_header_ctn">
				<div class="friends_header_avatar">
					<a href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
/">
						<?php if ($_smarty_tpl->tpl_vars['rsUser']->value['user_have_photo'] == 1) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
/main.jpg">
						<?php } else { ?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.png">
						<?php }?>
					</a>
				</div>
                <div class="friends_header_name_ctn">
	                <div class="friends_header_name" style="display:inline-flex"><a href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
/"><?php echo $_smarty_tpl->tpl_vars['rsUser']->value['user_name'];?>
</a></div>
                </div>


			</div>
		</div>
	</div>

	<div class="friends_container">
		<div class="friends_nav">
							<h4>Друзья</h4>
				<a id="friends" class="icon_item icon_all_friends active" href="javascript: showFriends();">
					<span class="title"><?php if ($_smarty_tpl->tpl_vars['rsUser']->value['id_user'] == $_smarty_tpl->tpl_vars['arUser']->value['id_user']) {?>Ваши друзья<?php } else { ?>Друзья <?php echo $_smarty_tpl->tpl_vars['rsUser']->value['user_name'];
}?></span>
					<span id="menu_friends_ct" class="count"><?php echo $_smarty_tpl->tpl_vars['cntFriends']->value;?>
</span>
					<svg xmlns="http://www.w3.org/2000/svg" class="SVGIcon_Button SVGIcon_DownArrowContextMenu" data-name="Layer 1" viewBox="0 0 128 128" x="0px" y="0px"><polygon points="50 59.49 13.21 22.89 4.74 31.39 50 76.41 95.26 31.39 86.79 22.89 50 59.49"></polygon></svg>
				</a>
									
					<a id="pending" class="icon_item icon_pending_friends" href="javascript: showPendingFriends();">
						<span class="title">Приглашения</span>
						<span id="menu_friends_pending_ct" class="em_count"><?php echo $_smarty_tpl->tpl_vars['cntPending']->value;?>
</span>
						<svg xmlns="http://www.w3.org/2000/svg" class="SVGIcon_Button SVGIcon_DownArrowContextMenu" data-name="Layer 1" viewBox="0 0 128 128" x="0px" y="0px"><polygon points="50 59.49 13.21 22.89 4.74 31.39 50 76.41 95.26 31.39 86.79 22.89 50 59.49"></polygon></svg>
					</a>
					</div>

<div class="friends_content" id="subpage_container">
	<div id="friends_list" class="friends_list_ctn pagecontent no_header">
		<div class="profile_friends title_bar">
			<div class="profile_friends title">
				<?php if ($_smarty_tpl->tpl_vars['rsUser']->value['id_user'] == $_smarty_tpl->tpl_vars['arUser']->value['id_user']) {?>Ваши друзья<?php } else { ?>Друзья<?php }?> / <span class="friends_limit"><?php echo $_smarty_tpl->tpl_vars['cntFriends']->value;?>
</span>
			</div>
		</div>
		<div class="searchBarContainer">
			<form action="/user/searchusers/" method="POST">
				<input name="user_name" class="friends_search_text_box search_your_friends" value="" autocomplete="off" autofocus="" placeholder="Поиск друзей по имени">
			</form>

		</div>
		<div class="profile_friends search_results" id="search_results">
			<?php if (!$_smarty_tpl->tpl_vars['rsFriendsUsers']->value) {?>
				<div id="search_results_empty" class="search_results_none">Извините, здесь никого нет.</div>
			<?php }?>
			
	        <div id="state_offline" data-group="online" class="state_block"></div>  
	        
	        <div id="state_online" data-group="online" class="state_block">В сети</div>
	            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsFriendsUsers']->value, 'send');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['send']->value) {
?>
	            <?php if ($_smarty_tpl->tpl_vars['rsOnlineUsers']->value[$_smarty_tpl->tpl_vars['send']->value['id_user']]) {?>
	            <div class="selectable friend_block_v2 persona online " id="fr_<?php echo $_smarty_tpl->tpl_vars['send']->value['id_user'];?>
">
					<a class="selectable_overlay" href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['send']->value['id_user'];?>
/"></a>
					<div class="player_avatar friend_block_link_overlay online">
						<?php if ($_smarty_tpl->tpl_vars['send']->value['user_have_photo'] == 1) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['send']->value['id_user'];?>
/main.jpg">
						<?php } else { ?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.png">
						<?php }?>
					</div>
					<div class="friend_block_content"><?php echo $_smarty_tpl->tpl_vars['send']->value['user_name'];?>
<br>
						<span class="friend_small_text"></span>
						<!--<span class="friend_last_online_text">
							В сети: 15 ч., 59 мин. назад					
						</span>-->
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['arUser']->value) && $_smarty_tpl->tpl_vars['rsUser']->value['id_user'] == $_smarty_tpl->tpl_vars['arUser']->value['id_user']) {?>
					<div class="commentthread_comment_actions delete_friend">
						<a class="actionlink" data-tooltip-text="Удалить" href="javascript: deletefromfriend(<?php echo $_smarty_tpl->tpl_vars['send']->value['id_user'];?>
);">
							<img src="https://steamcommunity-a.akamaihd.net/public/images/skin_1/notification_icon_trash_bright.png?v=1">
						</a>
					</div>
					<?php }?>
	        	</div>
	        	<?php }?>
	        	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	       	
	       	<div id="state_offline" data-group="offline" class="state_block">Не в сети</div>
	       	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsFriendsUsers']->value, 'send');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['send']->value) {
?>
	        <?php if (!$_smarty_tpl->tpl_vars['rsOnlineUsers']->value[$_smarty_tpl->tpl_vars['send']->value['id_user']]) {?>
	        <div class="selectable friend_block_v2 persona offline " id="fr_<?php echo $_smarty_tpl->tpl_vars['send']->value['id_user'];?>
">
				<a class="selectable_overlay" href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['send']->value['id_user'];?>
/"></a>
				<div class="player_avatar friend_block_link_overlay offline">
					<?php if ($_smarty_tpl->tpl_vars['send']->value['user_have_photo'] == 1) {?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['send']->value['id_user'];?>
/main.jpg">
					<?php } else { ?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.png">
					<?php }?>
				</div>
				<div class="friend_block_content"><?php echo $_smarty_tpl->tpl_vars['send']->value['user_name'];?>
<br>
					<span class="friend_small_text"></span>
					<!--<span class="friend_last_online_text">
						В сети: 15 ч., 59 мин. назад					
					</span>-->
				</div>
				<?php if (isset($_smarty_tpl->tpl_vars['arUser']->value) && $_smarty_tpl->tpl_vars['rsUser']->value['id_user'] == $_smarty_tpl->tpl_vars['arUser']->value['id_user']) {?>
				<div class="commentthread_comment_actions delete_friend">
					<a class="actionlink" data-tooltip-text="Удалить" href="javascript: deletefromfriend(<?php echo $_smarty_tpl->tpl_vars['send']->value['id_user'];?>
);">
						<img src="https://steamcommunity-a.akamaihd.net/public/images/skin_1/notification_icon_trash_bright.png?v=1">
					</a>
				</div>
				<?php }?>
	        </div>
	        <?php }?>
	        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    </div>
	</div>
	<div id="friends_pending" class="friends_list_ctn pagecontent no_header hide">
	<div class="profile_friends title_bar">
		<span class="profile_friends title">Полученные заявки</span>
        <button id="manage_friends_control" class="profile_friends manage_link btnv6_blue_hoverfade btn_small btn_uppercase <?php if (!$_smarty_tpl->tpl_vars['rsAcceptUsers']->value) {?>btn_disabled<?php }?>" onclick="IgnoreAllInvites()">
            <span>Игнорировать все</span>
        </button>
	</div>
	<div class="profile_friends search_results" id="search_results">
		<?php if (!$_smarty_tpl->tpl_vars['rsAcceptUsers']->value) {?>
		<div id="search_results_empty" class="search_results_none">Извините, здесь никого нет.</div>
		<?php } else { ?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAcceptUsers']->value, 'accept');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['accept']->value) {
?>
			<div id="invite_<?php echo $_smarty_tpl->tpl_vars['accept']->value['id_user'];?>
" class="selectable invite_row">
		<a class="selectable_overlay invite_row_overlay"></a>
		<div class="invite_row_content ">
			<div class="invite_row_left">

				<div class="invite_block_icon">
					<div class="friendPlayerLevel lvl_<?php if ($_smarty_tpl->tpl_vars['rsLevelAccept']->value[$_smarty_tpl->tpl_vars['accept']->value['id_user']][0]['cnt_level'] >= 5000) {?>4900<?php } else {
echo $_smarty_tpl->tpl_vars['rsLevelAccept']->value[$_smarty_tpl->tpl_vars['accept']->value['id_user']][0]['cnt_level'];
}?> <?php if ($_smarty_tpl->tpl_vars['rsLevelPlusAccept']->value[$_smarty_tpl->tpl_vars['accept']->value['id_user']]) {?>lvl_plus_<?php echo $_smarty_tpl->tpl_vars['rsLevelPlusAccept']->value[$_smarty_tpl->tpl_vars['accept']->value['id_user']][0]['cnt_lvl_plus'];
}?>">
						<span class="friendPlayerLevelNum"><?php echo $_smarty_tpl->tpl_vars['accept']->value['user_level'];?>
</span>
					</div>				
				</div>

				<div class="invite_block_icon">
					<div class="playerAvatar online">
						<a href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['accept']->value['id_user'];?>
/">
							<?php if ($_smarty_tpl->tpl_vars['accept']->value['user_have_photo'] == 1) {?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['accept']->value['id_user'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['accept']->value['user_name'];?>
">
							<?php } else { ?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.png" alt="<?php echo $_smarty_tpl->tpl_vars['accept']->value['user_name'];?>
">
							<?php }?>
						</a>
					</div>
				</div>
				<div class="invite_block_name">
					<a class="linkTitle event_title" href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['accept']->value['id_user'];?>
/"><?php echo $_smarty_tpl->tpl_vars['accept']->value['user_name'];?>
</a>
				</div>
			</div>
		</div>

		<div class="actions">
				<a class="linkStandard btnv6_white_transparent" href="javascript: acceptfriend(<?php echo $_smarty_tpl->tpl_vars['accept']->value['id_user'];?>
);" title="Принять">
					<span class="invite_action_txt">Принять</span>
				</a>
				<a class="linkStandard btnv6_white_transparent" href="javascript: deletefromfriend(<?php echo $_smarty_tpl->tpl_vars['accept']->value['id_user'];?>
);">
					<span class="invite_action_txt">Игнорировать</span>
				</a>
		</div>
	</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<?php }?>
			</div>
	<div class="profile_friends title_bar pending_sent_invites">
		<div class="profile_friends title">
			Отправленные заявки		
		</div>
	</div>
	<div class="profile_friends search_results_sentinvites" id="search_results_sentinvites">
		<?php if (!$_smarty_tpl->tpl_vars['rsSendUsers']->value) {?>
		<div id="search_results_sentinvites_empty" class="search_results_none">Извините, здесь ничего нет.</div>
		<?php } else { ?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsSendUsers']->value, 'send');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['send']->value) {
?>
		<div id="invite_<?php echo $_smarty_tpl->tpl_vars['send']->value['id_user'];?>
" class="selectable invite_row">
		<a class="selectable_overlay invite_row_overlay"></a>
		<div class="invite_row_content ">
			<div class="invite_row_left">
				<div class="invite_block_icon">
					<div class="friendPlayerLevel lvl_<?php if ($_smarty_tpl->tpl_vars['rsLevelSend']->value[$_smarty_tpl->tpl_vars['send']->value['id_user']][0]['cnt_level'] >= 5000) {?>4900<?php } else {
echo $_smarty_tpl->tpl_vars['rsLevelSend']->value[$_smarty_tpl->tpl_vars['send']->value['id_user']][0]['cnt_level'];
}?> <?php if ($_smarty_tpl->tpl_vars['rsLevelPlusSend']->value[$_smarty_tpl->tpl_vars['send']->value['id_user']]) {?>lvl_plus_<?php echo $_smarty_tpl->tpl_vars['rsLevelPlusSend']->value[$_smarty_tpl->tpl_vars['send']->value['id_user']][0]['cnt_lvl_plus'];
}?>">
						<span class="friendPlayerLevelNum"><?php echo $_smarty_tpl->tpl_vars['send']->value['user_level'];?>
</span>
					</div>				
				</div>

				<div class="invite_block_icon">
					<div class="playerAvatar online">
						<a href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['send']->value['id_user'];?>
/">
							<?php if ($_smarty_tpl->tpl_vars['send']->value['user_have_photo'] == 1) {?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['send']->value['id_user'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['send']->value['user_name'];?>
">
							<?php } else { ?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.png" alt="<?php echo $_smarty_tpl->tpl_vars['send']->value['user_name'];?>
">
							<?php }?>
						</a>
					</div>
				</div>

				<div class="invite_block_name">
					<a class="linkTitle event_title" href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['send']->value['id_user'];?>
/"><?php echo $_smarty_tpl->tpl_vars['send']->value['user_name'];?>
</a>
				</div>
			</div>
		</div>

		<div class="actions">
			<a class="linkStandard btnv6_white_transparent" href="javascript:void(0)" onclick="deletefromfriend(<?php echo $_smarty_tpl->tpl_vars['send']->value['id_user'];?>
);">
				<span class="invite_action_txt">Отменить приглашение</span>
			</a>
		</div>
	</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<?php }?>
			</div>
</div>
</div>

	</div>
</div>

</div><?php }
}
