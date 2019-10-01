<?php
/* Smarty version 3.1.30, created on 2019-03-27 14:11:26
  from "D:\OSPanel\domains\gg.com\views\default\user\page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c9b5a5ee069c9_24231423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '264c0d6805fb68c40d196d1c539ec265d45678f7' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\user\\page.tpl',
      1 => 1553685083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9b5a5ee069c9_24231423 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="responsive_page_content">
    <div class="responsive_page_template_content">
        <div class="no_header profile_page has_profile_background " <?php if ($_smarty_tpl->tpl_vars['rsUser']->value['user_have_bg'] == 1) {?>style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
/background/background.jpg');"<?php }?>)>

	<div class="profile_header_bg ">

	<div class="profile_header_bg_texture ">

		<div class="profile_header ">

			<div class="profile_header_content ">

								<div class="profile_header_centered_persona ">
					<div class="persona_name " style="font-size: 24px; ">
						<span class="actual_persona_name "><?php echo $_smarty_tpl->tpl_vars['rsUser']->value['user_name'];?>
</span>	
					</div>
                        <?php if ($_smarty_tpl->tpl_vars['Countries']->value) {?>
						<div class="header_real_name ellipsis ">
						<bdi></bdi>
						<img class="profile_flag " src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/flags/<?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
">
							<?php echo $_smarty_tpl->tpl_vars['Countries']->value['name_country'];?>

                        </div>
                        <?php }?>
						</div>

				<div class="playerAvatar profile_header_size <?php if ($_smarty_tpl->tpl_vars['rsOnlineUsers']->value[$_smarty_tpl->tpl_vars['rsUser']->value['id_user']]) {?>online<?php } else { ?>offline<?php }?>">
					<div class="playerAvatarAutoSizeInner ">
                        <img src="<?php if ($_smarty_tpl->tpl_vars['rsUser']->value['user_have_photo'] == 1) {
echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
/main.jpg<?php } else {
echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.png<?php }?> ">
                    </div>
				</div>
				<div class="profile_header_badgeinfo ">
					<div class="profile_header_badgeinfo_badge_area ">
						<a href="javascript:; ">
							<div class="persona_name persona_level ">Уровень 
                                <div class="friendPlayerLevel lvl_<?php if ($_smarty_tpl->tpl_vars['rsLevel']->value >= 5000) {?>4900<?php } else {
echo $_smarty_tpl->tpl_vars['rsLevel']->value;
}?> <?php if ($_smarty_tpl->tpl_vars['rsLevelPlus']->value) {?>lvl_plus_<?php echo $_smarty_tpl->tpl_vars['rsLevelPlus']->value;
}?>"><span class="friendPlayerLevelNum"><?php echo $_smarty_tpl->tpl_vars['rsUser']->value['user_level'];?>
</span></div></div>
						</a>
                    <?php if ($_smarty_tpl->tpl_vars['rsGetBadge']->value) {?>
				    <div class="profile_header_badge ">
						<div class="favorite_badge ">
						<div class="favorite_badge_icon">
                                <a class="whiteLink" href="javascript:;">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/profiles/badges/<?php echo $_smarty_tpl->tpl_vars['rsGetBadge']->value['cnt_games'];?>
_80.png" class="badge_icon small">
                                </a>
                            </div>
                            <div class="favorite_badge_description">
                                <div class="ellipsis"><?php echo $_smarty_tpl->tpl_vars['rsGetBadge']->value['name_badge'];?>
<br>За покупку <?php echo $_smarty_tpl->tpl_vars['cnt']->value;?>
 игр</div>
                            </div>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="profile_header_badge ">
                        <div class="favorite_badge ">
                        <div class="favorite_badge_icon">
                                <a class="whiteLink" href="javascript:;">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/profiles/badges/ico_leaderboards.png" class="badge_icon small">
                                </a>
                            </div>
                            <div class="favorite_badge_description">
                                <div class="ellipsis">Pillar of Community<br>За регистрацию</div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
</div>
<div class="profile_header_actions">
	<?php if (isset($_smarty_tpl->tpl_vars['arUser']->value) && $_smarty_tpl->tpl_vars['arUser']->value['id_user'] == $_smarty_tpl->tpl_vars['rsUser']->value['id_user']) {?>
    <a class="btn_profile_action btn_medium" href="/user/edit/<?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_link'] != '') {
echo $_smarty_tpl->tpl_vars['arUser']->value['user_link'];
} else {
echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];
}?>/">
        <span>Редактировать профиль</span>
    </a>
    <?php } elseif (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
    <?php if (!$_smarty_tpl->tpl_vars['checkFriend']->value) {?>
    <a class="btn_profile_action btn_medium" href="javascript: addtofriend(<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
);">
        <span>Добавить в друзья</span>
    </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['checkFriend']->value['list_status'] == 1) {?>
    <a class="btn_profile_action btn_medium" href="/chat/" onclick="OpenFriendChat(this, <?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
, <?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
); return false;">
        <span>Отправить сообщение</span>
    </a>
    <a class="btn_profile_action btn_medium" href="javascript: deletefromfriend(<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
);">
        <span>Удалить из друзей</span>
    </a>
    <?php } else { ?>
    <a class="btn_profile_action btn_medium" href="javascript: deletefromfriend(<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
);">
        <span>Отменить заявку</span>
    </a>
    <?php }?>
    <?php }?>
</div>
</div>

<div class="profile_header_summary">
    <div class="persona_name persona_name_spacer" style="font-size: 24px;">
        <span class="actual_persona_name">&nbsp;</span>
    </div>
    <div class="header_real_name_spacer">&nbsp;</div>
    <div class="profile_summary">
        <?php if ($_smarty_tpl->tpl_vars['rsUser']->value['user_desc'] == '') {?>Информация отсутствует.<?php } else {
echo $_smarty_tpl->tpl_vars['rsUser']->value['user_desc'];
}?></div>
</div>

</div>
</div>
</div>
</div>
<div class="profile_content has_profile_background">

    <div class="profile_background_holder_content">
        <div class="profile_background_overlay_content"></div>
        <div class="profile_background_image_content ">
        </div>
    </div>
    <div class="profile_content_inner">

        <div class="profile_rightcol">
            <div class="responsive_status_info">
                <div class="profile_in_game persona <?php if ($_smarty_tpl->tpl_vars['rsOnlineUsers']->value[$_smarty_tpl->tpl_vars['rsUser']->value['id_user']]) {?>online<?php } else { ?>offline<?php }?>">
                    <div class="profile_in_game_header"><?php if ($_smarty_tpl->tpl_vars['rsOnlineUsers']->value[$_smarty_tpl->tpl_vars['rsUser']->value['id_user']]) {?>В сети<?php } else { ?>Не в сети<?php }?></div>
                </div>
            </div>

            <div class="responsive_count_link_area">

                <div id="responsive_groupfriends_element_ctn">
                </div>

                <div class="profile_item_links">
                    <div class="profile_count_link ellipsis">
                        <a href="/user/history/<?php if ($_smarty_tpl->tpl_vars['rsUser']->value['user_link'] != '') {
echo $_smarty_tpl->tpl_vars['rsUser']->value['user_link'];
} else {
echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];
}?>/">
                            <span class="count_link_label">Куплено игр</span>&nbsp;
                            <span class="profile_count_link_total">
                             <?php echo $_smarty_tpl->tpl_vars['cnt']->value;?>

                            </span>
                        </a>
                    </div>
                    <div class="profile_count_link ellipsis">
                        <a href="/reviews/user/<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
/">
                            <span class="count_link_label">Обзоры</span>&nbsp;
                            <span class="profile_count_link_total">
							<?php echo $_smarty_tpl->tpl_vars['cntReviews']->value;?>
</span>
                        </a>
                    </div>
                    <div class="profile_count_link ellipsis">
                        <a href="https://steamcommunity.com/id/russianrave/myworkshopfiles/?section=guides">
                            <span class="count_link_label">Руководства</span>&nbsp;
                            <span class="profile_count_link_total">
							&nbsp; <!-- so the line spaces like the rest -->
							</span>
                        </a>
                    </div>
                    <div class="profile_count_link ellipsis">
                        <a href="/gallery/user/<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
/">
                            <span class="count_link_label">Иллюстрации</span>&nbsp;
                            <span class="profile_count_link_total">
							<?php echo $_smarty_tpl->tpl_vars['cntPic']->value;?>
</span>
                        </a>
                    </div>
                    <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value) && $_smarty_tpl->tpl_vars['rsUser']->value['id_user'] == $_smarty_tpl->tpl_vars['arUser']->value['id_user']) {?>
                    <div class="profile_count_link ellipsis">
                        <a href="#" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#galleryModal">
                            <span class="count_link_label">Загрузить иллюстрацию</span>&nbsp;
                            <span class="profile_count_link_total">
                            &nbsp; <!-- so the line spaces like the rest -->
                            </span>
                        </a>
                    </div>
                    <?php }?>
                    <div class="profile_count_link ellipsis">
                        <a href="/user/wishlist/<?php if ($_smarty_tpl->tpl_vars['rsUser']->value['user_link'] != '') {
echo $_smarty_tpl->tpl_vars['rsUser']->value['user_link'];
} else {
echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];
}?>/">
                            <span class="count_link_label">Список желаемого</span>&nbsp;
                            <span class="profile_count_link_total">
                            <?php echo $_smarty_tpl->tpl_vars['cntWishList']->value;?>
</span>
                        </a>
                    </div>
                    <div style="clear: left;"></div>
                </div>
            </div>

            <div class="profile_friend_links profile_count_link_preview_ctn responsive_groupfriends_element">
                <div class="profile_count_link ellipsis">
                    <a href="/user/friends/<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
/">
                        <span class="count_link_label">Друзья</span>&nbsp;
                        <span class="profile_count_link_total">
						<?php echo $_smarty_tpl->tpl_vars['cntFriends']->value;?>
</span>
                    </a>
                </div>

                <div class="profile_topfriends profile_count_link_preview">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsFriendsUsers']->value, 'friend', false, NULL, 'friend', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_friend']->value['iteration']++;
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_friend']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_friend']->value['iteration'] : null) < 9) {?>
                    <div class="friendBlock persona <?php if ($_smarty_tpl->tpl_vars['rsOnlineUsers']->value[$_smarty_tpl->tpl_vars['friend']->value['id_user']]) {?>online<?php } else { ?>offline<?php }?>">
                        <a class="friendBlockLinkOverlay" href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['friend']->value['id_user'];?>
/"></a>
                        <div class="friendPlayerLevel lvl_<?php if ($_smarty_tpl->tpl_vars['rsLevelFriend']->value[$_smarty_tpl->tpl_vars['friend']->value['id_user']][0]['cnt_level'] >= 5000) {?>4900<?php } else {
echo $_smarty_tpl->tpl_vars['rsLevelFriend']->value[$_smarty_tpl->tpl_vars['friend']->value['id_user']][0]['cnt_level'];
}?> <?php if ($_smarty_tpl->tpl_vars['rsLevelPlusFriend']->value[$_smarty_tpl->tpl_vars['friend']->value['id_user']]) {?>lvl_plus_<?php echo $_smarty_tpl->tpl_vars['rsLevelPlusFriend']->value[$_smarty_tpl->tpl_vars['friend']->value['id_user']][0]['cnt_lvl_plus'];
}?>">
                            <span class="friendPlayerLevelNum"><?php echo $_smarty_tpl->tpl_vars['friend']->value['user_level'];?>
</span>
                        </div>
                        <div class="playerAvatar <?php if ($_smarty_tpl->tpl_vars['rsOnlineUsers']->value[$_smarty_tpl->tpl_vars['friend']->value['id_user']]) {?>online<?php } else { ?>offline<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['friend']->value['user_have_photo'] == 1) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['friend']->value['id_user'];?>
/main.jpg">
                            <?php } else { ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.png">
                            <?php }?>
                        </div>
                        <div class="friendBlockContent">
                            <?php echo $_smarty_tpl->tpl_vars['friend']->value['user_name'];?>

                            <br>
                        </div>
                    </div>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>

        </div>

        <div class="profile_leftcol">
            <?php if ($_smarty_tpl->tpl_vars['rsGallery']->value) {?>
            <div class="profile_customization_area">
                <div class="profile_customization">
                    <div class="profile_customization_header">Витрина иллюстраций</div>

                    <div class="profile_customization_block">
                        <div class="screenshot_showcase">

                            <div class="screenshot_showcase_primary showcase_slot ">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsGallery']->value, 'gallery', false, NULL, 'gallery', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gallery']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_gallery']->value['iteration']++;
?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_gallery']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_gallery']->value['iteration'] : null) == 1) {?>
                                <a class="screenshot_showcase_screenshot modalContentLink " href="javascript:;">
                                    <img width="100%" style="max-width: 506px;" src="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['path_photo'];
echo $_smarty_tpl->tpl_vars['gallery']->value['name_photo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['name_photo'];?>
">
                                </a>
                                <div class="screenshot_showcase_stats">
                                </div>
                                <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </div>
                            <div class="screenshot_showcase_rightcol">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsGallery']->value, 'gallery', false, NULL, 'gallery', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gallery']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_gallery']->value['iteration']++;
?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_gallery']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_gallery']->value['iteration'] : null) > 1 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_gallery']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_gallery']->value['iteration'] : null) < 5) {?>
                                <div class="screenshot_showcase_smallscreenshot showcase_slot ">
                                    <a class="screenshot_showcase_screenshot modalContentLink " href="javascript:;">
                                        <img width="100%" style="max-width: 100px;" src="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['path_photo'];
echo $_smarty_tpl->tpl_vars['gallery']->value['name_photo'];?>
">
                                    </a>
                                </div>
                                <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                <?php if ($_smarty_tpl->tpl_vars['cntPic']->value > 4) {?>
                                <a class="screenshot_showcase_smallscreenshot screenshot_count" href="/gallery/user/<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
/">
                                    <div class="screenshot_showcase_screenshot">
                                        + <?php echo $_smarty_tpl->tpl_vars['cntPic']->value-4;?>
 </div>
                                </a>
                                <?php }?>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
            <!--<div class="profile_recentgame_header profile_leftcol_header">
                <h2>Последние покупки</h2>
                <div style="clear: both;"></div>
            </div>

            <div class="recent_games">
                <div class="recent_game">
                    <div class="recent_game_content">
                        <div class="game_info">
                            <div class="game_info_cap">
                                <a href="https://steamcommunity.com/app/730"><img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/apps/730/d0595ff02f5c79fd19b06f4d6165c3fda2372820.jpg"></a>
                            </div>
                            <div class="game_info_details">
                                Количество: 5
                            </div>
                            <div class="game_name"><a class="whiteLink" href="https://steamcommunity.com/app/730">Counter-Strike: Global Offensive</a></div>
                        </div>
                    </div>
                </div>
            </div>-->

            <div class="profile_comment_area">

                <div class="commentthread_area" id="commentthread_Profile_76561198204634741_area">
                    <div class="commentthread_header">
                        <div class="commentthread_paging has_view_all_link" id="commentthread_Profile_76561198204634741_pagecontrols">
                            <a class="commentthread_allcommentslink" href="javascript:;">Все комментарии (<span><?php echo $_smarty_tpl->tpl_vars['cntComments']->value;?>
</span>)
                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['cntComments']->value > 5) {?>
                            <a id="commentthread_Profile_76561198204634741_pagebtn_prev" href="javascript:void(0);" class="pagebtn">&lt;</a>
                            <span id="commentthread_Profile_76561198204634741_pagelinks" class="commentthread_pagelinks"></span>
                            <span id="commentthread_Profile_76561198204634741_pagedropdown" class="commentthread_pagedropdown"></span>
                            <a id="commentthread_Profile_76561198204634741_pagebtn_next" href="javascript:void(0);" class="pagebtn">&gt;</a>
                            <?php }?>
                        </div>
                        <div class="commentthread_count">
                            <span class="ellipsis commentthread_count_label">
									<span class="commentthread_header_label">Комментарии</span>
                            </span>

                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value) && $_smarty_tpl->tpl_vars['rsUser']->value['id_user'] != $_smarty_tpl->tpl_vars['arUser']->value['id_user']) {?>
                    <form id="commentthread_Profile_<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
_form" name="commentthread_Profile_<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
_form" action="" method="post" onsubmit="return false;">
                        <div class="commentthread_entry">
                            <div class="commentthread_user_avatar playerAvatar online">
                                <a href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
/">
                                    <?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_have_photo'] == 1) {?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
/main.jpg"> 
                                    <?php } else { ?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.png">
                                    <?php }?>
                                </a>
                            </div>
                            <div class="commentthread_entry_quotebox">
                                <textarea rows="1" class="commentthread_textarea" name="commentthread_Profile_<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
_textarea" id="commentthread_Profile_<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
_textarea" placeholder="Оставить комментарий"></textarea>
                            </div>
                            <div class="commentthread_entry_submitlink" id="commentthread_Profile_<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
_submit_container">
                                <span class="btn_green_white_innerfade btn_small" id="commentthread_Profile_<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
_submit">
						          <span onclick="sendUserComment(<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
);">Отправить</span>
                                </span>
                            </div>
                            <div class="commentthread_entry_error" id="commentthread_Profile_<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
_entry_error">
                            </div>
                        </div>
                    </form>
                    <?php }?>
                    <div class="commentthread_comment_container" id="commentthread_Profile_<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
_postcontainer">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsComments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
                        <div class="commentthread_comments">
                            <div class="commentthread_comment responsive_body_text" id="comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_com'];?>
">
                                <div class="commentthread_comment_avatar playerAvatar <?php if ($_smarty_tpl->tpl_vars['rsOnlineUsers']->value[$_smarty_tpl->tpl_vars['comment']->value['user_com']]) {?>online<?php } else { ?>offline<?php }?>">
                                    <a href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['comment']->value['user_com'];?>
/">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['comment']->value['user_com'];?>
/main.jpg">
                                    </a>
                                </div>
                                <div class="commentthread_comment_content">
                                    <div class="commentthread_comment_author">
                                        <a class="hoverunderline commentthread_author_link" href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['comment']->value['user_com'];?>
/">
                                            <bdi><?php echo $_smarty_tpl->tpl_vars['comment']->value['name_user_com'];?>
</bdi>
                                        </a>
                                        <span class="commentthread_comment_timestamp" title="<?php echo $_smarty_tpl->tpl_vars['comment']->value['date_com'];?>
">
					                       <?php echo $_smarty_tpl->tpl_vars['comment']->value['date_com'];?>
&nbsp;
				                        </span>
                                        <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value) && $_smarty_tpl->tpl_vars['arUser']->value['id_user'] == $_smarty_tpl->tpl_vars['rsUser']->value['id_user']) {?>
                                        <div class="commentthread_comment_actions">
                                            <a class="actionlink" data-tooltip-text="Удалить" href="javascript:CCommentThread.DeleteComment( 'Profile_76561198204634741', '1742230617610339195'  );"><img src="https://steamcommunity-a.akamaihd.net/public/images/skin_1/notification_icon_trash_bright.png?v=1"></a>
                                        </div>
                                        <?php }?>
                                    </div>
                                    <div class="commentthread_comment_text" id="comment_content_<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_com'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['comment']->value['text_com'];?>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['cntComments']->value > 5) {?>
                    <div class="commentthread_footer">
                        <div class="commentthread_paging" id="commentthread_Profile_76561198204634741_fpagecontrols">
                            <a id="commentthread_Profile_76561198204634741_fpagebtn_prev" href="javascript:void(0);" class="pagebtn">&lt;</a>
                            <span id="commentthread_Profile_76561198204634741_fpagelinks" class="commentthread_pagelinks"></span>
                            <span id="commentthread_Profile_76561198204634741_fpagedropdown" class="commentthread_pagedropdown"></span>
                            <a id="commentthread_Profile_76561198204634741_fpagebtn_next" href="javascript:void(0);" class="pagebtn">&gt;</a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>

        <div style="clear: both;"></div>
    </div>
</div>

</div>

</div>
<!-- responsive_page_legacy_content -->
</div>
</div><?php }
}
