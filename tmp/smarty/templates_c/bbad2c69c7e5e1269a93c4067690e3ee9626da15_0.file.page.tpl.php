<?php
/* Smarty version 3.1.30, created on 2019-02-11 13:11:24
  from "D:\OSPanel\domains\games\views\default\user\page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c614a4c714ac3_06964329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbad2c69c7e5e1269a93c4067690e3ee9626da15' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\user\\page.tpl',
      1 => 1549879883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c614a4c714ac3_06964329 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="responsive_page_content">
    <div class="responsive_page_template_content">
        <div class="no_header profile_page has_profile_background " <?php if ($_smarty_tpl->tpl_vars['rsUser']->value['user_have_bg'] == 1) {?>style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
/background/background.jpg');" <?php }?>); ">

	<div class="profile_header_bg ">

	<div class="profile_header_bg_texture ">

		<div class="profile_header ">

			<div class="profile_header_content ">

								<div class="profile_header_centered_persona ">
					<div class="persona_name " style="font-size: 24px; ">
						<span class="actual_persona_name "><?php echo $_smarty_tpl->tpl_vars['rsUser']->value['user_name'];?>
</span>	
					</div>

						<div class="header_real_name ellipsis ">
						<bdi></bdi>
						<img class="profile_flag " src="https://steamcommunity-a.akamaihd.net/public/images/countryflags/ru.gif ">
							<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['user_country'];?>
 <?php if ($_smarty_tpl->tpl_vars['rsUser']->value['user_city'] != " ") {?>, <?php echo $_smarty_tpl->tpl_vars['rsUser']->value['user_city'];
}?></div>
						</div>

				<div class="playerAvatar profile_header_size online ">
					<div class="playerAvatarAutoSizeInner "><img src="<?php if ($_smarty_tpl->tpl_vars['rsUser']->value['user_have_photo'] == 1) {
echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
/main.jpg<?php } else {
echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.jpg<?php }?> "></div>
				</div>
				<div class="profile_header_badgeinfo ">
					<div class="profile_header_badgeinfo_badge_area ">
						<a href="javascript:; ">
							<div class="persona_name persona_level ">Уровень <div class="friendPlayerLevel lvl_<?php if ($_smarty_tpl->tpl_vars['rsLevel']->value >= 5000) {?>4900<?php } else {
echo $_smarty_tpl->tpl_vars['rsLevel']->value;
}?> lvl_plus_<?php echo $_smarty_tpl->tpl_vars['rsLevelPlus']->value;?>
"><span class="friendPlayerLevelNum"><?php echo $_smarty_tpl->tpl_vars['rsUser']->value['user_level'];?>
</span></div></div>
						</a>
				    <div class="profile_header_badge ">
						<div class="favorite_badge ">
						<div class="favorite_badge_icon " data-tooltip-html="100% awesomeness<br>
            Значок Endorlight 5-го уровня">
            <a class="whiteLink" href="javascript:;">
                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/profiles/badges/<?php echo $_smarty_tpl->tpl_vars['rsGetBadge']->value['cnt_games'];?>
_80.png" class="badge_icon small">
            </a>
        </div>
        <div class="favorite_badge_description">
            <div class="name ellipsis"><a class="whiteLink" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['rsGetBadge']->value['name_badge'];?>
</a><br>За покупку <?php echo $_smarty_tpl->tpl_vars['cnt']->value;?>
 игр</div>
        </div>
    </div>
</div>
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
    <?php } else { ?>
    <a class="btn_profile_action btn_medium" href="https://steamcommunity.com/id/russianrave/edit">
        <span>Добавить в друзья</span>
    </a>
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
                <div class="profile_in_game persona online">
                    <div class="profile_in_game_header">В сети</div>
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
                        <a href="https://steamcommunity.com/id/russianrave/recommended/">
                            <span class="count_link_label">Обзоры</span>&nbsp;
                            <span class="profile_count_link_total">
							3</span>
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
                        <a href="https://steamcommunity.com/id/russianrave/images/">
                            <span class="count_link_label">Иллюстрации</span>&nbsp;
                            <span class="profile_count_link_total">
							32</span>
                        </a>
                    </div>
                    <div class="profile_count_link ellipsis">
                        <a href="https://steamcommunity.com/id/russianrave/images/">
                            <span class="count_link_label">Список желаемого</span>&nbsp;
                            <span class="profile_count_link_total">
                            32</span>
                        </a>
                    </div>
                    <div style="clear: left;"></div>
                </div>
            </div>

            <div class="profile_friend_links profile_count_link_preview_ctn responsive_groupfriends_element">
                <div class="profile_count_link ellipsis">
                    <a href="https://steamcommunity.com/id/russianrave/friends/">
                        <span class="count_link_label">Друзья</span>&nbsp;
                        <span class="profile_count_link_total">
						16</span>
                    </a>
                </div>

                <div class="profile_topfriends profile_count_link_preview">

                    <div class="friendBlock persona offline" data-miniprofile="196055242">
                        <a class="friendBlockLinkOverlay" href="https://steamcommunity.com/id/comingforyouhowGD"></a>
                        <div class="friendPlayerLevel lvl_30">
                            <span class="friendPlayerLevelNum">38</span>
                        </div>
                        <div class="playerAvatar offline">
                            <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/d2/d239830a9058f4cc5d93904c221b4c93ba9ece8a_medium.jpg">
                        </div>
                        <div class="friendBlockContent">
                            bud'gotov <span class="nickname_block">(<span class="nickname_name">Артур</span>)</span>
                            <br>
                            <span class="friendSmallText">
		В сети: 2 ч., 51 мин. назад
				</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="profile_leftcol">

            <div class="profile_customization_area">
                <div class="profile_customization">
                    <div class="profile_customization_header">Витрина иллюстраций</div>

                    <div class="profile_customization_block">
                        <div class="screenshot_showcase">
                            <div class="screenshot_showcase_primary showcase_slot ">
                                <a class="screenshot_showcase_screenshot modalContentLink " href="https://steamcommunity.com/sharedfiles/filedetails/?id=1616693523" data-appid="730" data-publishedfileid="1616693523">
                                    <img width="100%" style="max-width: 506px;" src="https://steamuserimages-a.akamaihd.net/ugc/943967816184490264/05DA92C6F9A25A3FFD27149DC21D75E683690A68/?imw=506&imh=505&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true">
                                </a>
                                <div class="screenshot_showcase_itemname">
                                    Counter-Strike: Global Offensive </div>
                                <div class="screenshot_showcase_stats">
                                </div>
                            </div>
                            <div class="screenshot_showcase_rightcol">
                                <div class="screenshot_showcase_smallscreenshot showcase_slot ">
                                    <a class="screenshot_showcase_screenshot modalContentLink " href="https://steamcommunity.com/sharedfiles/filedetails/?id=1616666230" data-appid="730" data-publishedfileid="1616666230">
                                        <img width="100%" style="max-width: 93px;" src="https://steamuserimages-a.akamaihd.net/ugc/943967816184390258/EDD313A834B96F111277339989E61DBFF8C81BEB/?imw=93&imh=80&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true">
                                    </a>
                                </div>
                                <div class="screenshot_showcase_smallscreenshot showcase_slot ">
                                    <a class="screenshot_showcase_screenshot modalContentLink " href="https://steamcommunity.com/sharedfiles/filedetails/?id=918814587" data-appid="570" data-publishedfileid="918814587">
                                        <img width="100%" style="max-width: 100px;" src="https://steamuserimages-a.akamaihd.net/ugc/815559639504123998/CF113863FDE2E9D8C572285A314C30CEC9EB62C8/?imw=100&imh=60&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true">
                                    </a>
                                </div>
                                <div class="screenshot_showcase_smallscreenshot showcase_slot ">
                                    <a class="screenshot_showcase_screenshot modalContentLink " href="https://steamcommunity.com/sharedfiles/filedetails/?id=1616666281" data-appid="730" data-publishedfileid="1616666281">
                                        <img width="100%" style="max-width: 100px;" src="https://steamuserimages-a.akamaihd.net/ugc/943967816184390772/B59FFC2F715F3F818CF60C29EEB20C16A3A2CA38/?imw=100&imh=67&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true">
                                    </a>
                                </div>
                                <a class="screenshot_showcase_smallscreenshot screenshot_count" href="https://steamcommunity.com/id/russianrave/screenshots/">
                                    <div class="screenshot_showcase_screenshot">
                                        + 14 </div>
                                </a>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                </div>
            </div>

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
                            <a class="commentthread_allcommentslink" href="https://steamcommunity.com/id/russianrave/allcomments">Все комментарии (<span id="commentthread_Profile_76561198204634741_totalcount">17</span>)</a>
                            <a id="commentthread_Profile_76561198204634741_pagebtn_prev" href="javascript:void(0);" class="pagebtn">&lt;</a>
                            <span id="commentthread_Profile_76561198204634741_pagelinks" class="commentthread_pagelinks"></span>
                            <span id="commentthread_Profile_76561198204634741_pagedropdown" class="commentthread_pagedropdown"></span>
                            <a id="commentthread_Profile_76561198204634741_pagebtn_next" href="javascript:void(0);" class="pagebtn">&gt;</a>
                        </div>
                        <div class="commentthread_count">
                            <span class="ellipsis commentthread_count_label">
									<span class="commentthread_header_label">Комментарии</span>
                            </span>

                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <form id="commentthread_Profile_76561198204634741_form" name="commentthread_Profile_76561198204634741_form" action="" method="post" onsubmit="return false;">
                        <div class="commentthread_entry">
                            <div class="commentthread_user_avatar playerAvatar online">
                                <a href="https://steamcommunity.com/id/russianrave" data-miniprofile="244369013">
                                    <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fd/fd73c50baa6d0e9733405f1e2c0b94b63ca284ac.jpg" srcset="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fd/fd73c50baa6d0e9733405f1e2c0b94b63ca284ac.jpg 1x, https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fd/fd73c50baa6d0e9733405f1e2c0b94b63ca284ac_medium.jpg 2x"> </a>
                            </div>
                            <div class="commentthread_entry_quotebox">
                                <textarea rows="1" class="commentthread_textarea" name="commentthread_Profile_76561198204634741_textarea" id="commentthread_Profile_76561198204634741_textarea" placeholder="Оставить комментарий"></textarea>
                            </div>
                            <div class="commentthread_entry_submitlink" id="commentthread_Profile_76561198204634741_submit_container">
                                <span class="btn_green_white_innerfade btn_small" id="commentthread_Profile_76561198204634741_submit">
						<span>Отправить</span>
                                </span>
                            </div>
                            <div class="commentthread_entry_error" id="commentthread_Profile_76561198204634741_entry_error">
                            </div>
                        </div>
                    </form>
                    <div class="commentthread_comment_container" id="commentthread_Profile_76561198204634741_postcontainer">
                        <div class="commentthread_comments" id="commentthread_Profile_76561198204634741_posts">

                            <div class="commentthread_comment responsive_body_text   " id="comment_1742230617610339195" style="">
                                <div class="commentthread_comment_avatar playerAvatar in-game">
                                    <a href="https://steamcommunity.com/id/bennyhill228" data-miniprofile="63674135">
                                        <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/e6/e6d0a88f12b23dcea4a07b70b36d3a6fec737975.jpg" srcset="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/e6/e6d0a88f12b23dcea4a07b70b36d3a6fec737975.jpg 1x, https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/e6/e6d0a88f12b23dcea4a07b70b36d3a6fec737975_medium.jpg 2x"> </a>
                                </div>
                                <div class="commentthread_comment_content">
                                    <div class="commentthread_comment_author">
                                        <a class="hoverunderline commentthread_author_link" href="https://steamcommunity.com/id/bennyhill228" data-miniprofile="63674135">
                                            <bdi>₦1ċᶉόρš So unlucky</bdi>
                                        </a>

                                        <span class="commentthread_comment_timestamp" title="5 января 2019 в 2:19:51 MSK" data-timestamp="1546643991">
					5 янв в 2:19&nbsp;
				</span>

                                        <div class="commentthread_comment_actions">
                                            <a class="actionlink" data-tooltip-text="Удалить" href="javascript:CCommentThread.DeleteComment( 'Profile_76561198204634741', '1742230617610339195'  );"><img src="https://steamcommunity-a.akamaihd.net/public/images/skin_1/notification_icon_trash_bright.png?v=1"></a>
                                        </div>
                                    </div>
                                    <div class="commentthread_comment_text" id="comment_content_1742230617610339195">
                                        +rep </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="commentthread_footer">
                        <div class="commentthread_paging" id="commentthread_Profile_76561198204634741_fpagecontrols">
                            <a id="commentthread_Profile_76561198204634741_fpagebtn_prev" href="javascript:void(0);" class="pagebtn">&lt;</a>
                            <span id="commentthread_Profile_76561198204634741_fpagelinks" class="commentthread_pagelinks"></span>
                            <span id="commentthread_Profile_76561198204634741_fpagedropdown" class="commentthread_pagedropdown"></span>
                            <a id="commentthread_Profile_76561198204634741_fpagebtn_next" href="javascript:void(0);" class="pagebtn">&gt;</a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div style="clear: both;"></div>
    </div>
</div>

</div>

<div id="reportAbuseModal" style="display: none;">
    <div id="reportAbuseModalClose">
        <a href="javascript:hideModal('reportAbuseModal')"><img src="https://steamcommunity-a.akamaihd.net/public/images/skin_1/modalClose2.gif" width="11" height="11" border="0" /></a>
    </div>
    <h1>Пожаловаться</h1>
    <div class="reportAbuseModalRule"></div>
    <div id="reportAbuseModalContents">
        <form method="post" onSubmit="return checkAbuseSub( this );" action="https://steamcommunity.com/actions/ReportAbuse/" id="abuseForm">
            <input type="hidden" name="abuseID" value="76561198204634741">
            <input type="hidden" name="sessionid" value="52955af6a8c8556b12970600">
            <input type="hidden" name="ingameAppID" value="" />
            <div class="abuseOptions">
                <div class="abuseOption">
                    <input class="abuseRadio" type="radio" name="abuseType" id="AbuseRadio_Harassment" value="Harassment">
                    <label for="AbuseRadio_Harassment">Нападки</label>
                </div>
                <div class="abuseOption">
                    <input class="abuseRadio" type="radio" name="abuseType" id="AbuseRadio_Spoofing" value="Spoofing">
                    <label for="AbuseRadio_Spoofing">Выдает себя за другого пользователя</label>
                </div>
                <div class="abuseOption">
                    <input class="abuseRadio" type="radio" name="abuseType" id="AbuseRadio_Offensive_Profile" value="Offensive Profile">
                    <label for="AbuseRadio_Offensive_Profile">Оскорбительное содержимое профиля или аватара</label>
                </div>
                <div class="abuseOption">
                    <input class="abuseRadio" type="radio" name="abuseType" id="AbuseRadio_Offensive_UGC" value="Offensive UGC">
                    <label for="AbuseRadio_Offensive_UGC">Оскорбительные скриншоты или иллюстрации</label>
                </div>
                <div class="abuseOption">
                    <input class="abuseRadio" type="radio" name="abuseType" id="AbuseRadio_Spamming" value="Spamming">
                    <label for="AbuseRadio_Spamming">Спам приглашениями</label>
                </div>
                <div class="abuseOption">
                    <input class="abuseRadio" type="radio" name="abuseType" id="AbuseRadio_Advertisement" value="Advertisement">
                    <label for="AbuseRadio_Advertisement">Спам рекламой или ссылками</label>
                </div>
                <div class="abuseOption">
                    <input class="abuseRadio" type="radio" name="abuseType" id="AbuseRadio_Suspected_Hijacker" value="Suspected Hijacker">
                    <label for="AbuseRadio_Suspected_Hijacker">Подозревается в краже или фишинге</label>
                </div>
                <div class="abuseOption">
                    <input class="abuseRadio" type="radio" name="abuseType" id="AbuseRadio_Trade_Scam" value="Trade Scam">
                    <label for="AbuseRadio_Trade_Scam">Попытка обмана при обмене</label>
                </div>
                <div class="abuseOption">
                    <input class="abuseRadio" type="radio" name="abuseType" id="AbuseRadio_Cheating" value="Cheating">
                    <label for="AbuseRadio_Cheating">Подозревается в нечестной игре</label>
                </div>
                <div style="clear: left;"></div>
            </div>
            <div class="abuseDescriptionCtn gray_bevel fullwidth">
                <textarea name="abuseDescription" id="abuseDescriptionArea" rows="3" cols="26" placeholder="Пожалуйста, опишите нарушение (обязательно)"></textarea>
            </div>
            <div class="reportAbuseButtons">
                <button type="submit" class="btn_green_white_innerfade btn_medium">
                    <span>Пожаловаться</span>
                </button>
            </div>
        </form>

    </div>

</div>

</div>
<!-- responsive_page_legacy_content -->
</div>
</div><?php }
}
