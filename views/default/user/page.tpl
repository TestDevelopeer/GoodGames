<div class="responsive_page_content">
    <div class="responsive_page_template_content">
        <div class="no_header profile_page has_profile_background " {if $rsUser['user_have_bg'] == 1}style="background-image: url('{$teplateImgPath}users/{$rsUser['id_user']}/background/background.jpg');"{/if})>

	<div class="profile_header_bg ">

	<div class="profile_header_bg_texture ">

		<div class="profile_header ">

			<div class="profile_header_content ">

								<div class="profile_header_centered_persona ">
					<div class="persona_name " style="font-size: 24px; ">
						<span class="actual_persona_name ">{$rsUser['user_name']}</span>	
					</div>
                        {if $Countries}
						<div class="header_real_name ellipsis ">
						<bdi></bdi>
						<img class="profile_flag " src="{$teplateWebPath}assets/images/flags/{$flag}">
							{$Countries['name_country']}
                        </div>
                        {/if}
						</div>

				<div class="playerAvatar profile_header_size {if $rsOnlineUsers[$rsUser['id_user']]}online{else}offline{/if}">
					<div class="playerAvatarAutoSizeInner ">
                        <img src="{if $rsUser['user_have_photo'] == 1}{$teplateImgPath}users/{$rsUser[ 'id_user']}/main.jpg{else}{$teplateImgPath}users/default/default.png{/if} ">
                    </div>
				</div>
				<div class="profile_header_badgeinfo ">
					<div class="profile_header_badgeinfo_badge_area ">
						<a href="javascript:; ">
							<div class="persona_name persona_level ">Уровень 
                                <div class="friendPlayerLevel lvl_{if $rsLevel >= 5000}4900{else}{$rsLevel}{/if} {if $rsLevelPlus}lvl_plus_{$rsLevelPlus}{/if}"><span class="friendPlayerLevelNum">{$rsUser['user_level']}</span></div></div>
						</a>
                    {if $rsGetBadge}
				    <div class="profile_header_badge ">
						<div class="favorite_badge ">
						<div class="favorite_badge_icon">
                                <a class="whiteLink" href="javascript:;">
                                    <img src="{$teplateWebPath}assets/images/profiles/badges/{$rsGetBadge['cnt_games']}_80.png" class="badge_icon small">
                                </a>
                            </div>
                            <div class="favorite_badge_description">
                                <div class="ellipsis">{$rsGetBadge['name_badge']}<br>За покупку {$cnt} игр</div>
                            </div>
                        </div>
                    </div>
                    {else}
                    <div class="profile_header_badge ">
                        <div class="favorite_badge ">
                        <div class="favorite_badge_icon">
                                <a class="whiteLink" href="javascript:;">
                                    <img src="{$teplateWebPath}assets/images/profiles/badges/ico_leaderboards.png" class="badge_icon small">
                                </a>
                            </div>
                            <div class="favorite_badge_description">
                                <div class="ellipsis">Pillar of Community<br>За регистрацию</div>
                            </div>
                        </div>
                    </div>
                    {/if}
</div>
<div class="profile_header_actions">
	{if isset($arUser) && $arUser['id_user'] == $rsUser['id_user']}
    <a class="btn_profile_action btn_medium" href="/user/edit/{if $arUser['user_link'] != ''}{$arUser['user_link']}{else}{$arUser['id_user']}{/if}/">
        <span>Редактировать профиль</span>
    </a>
    {else if isset($arUser)}
    {if !$checkFriend}
    <a class="btn_profile_action btn_medium" href="javascript: addtofriend({$rsUser['id_user']});">
        <span>Добавить в друзья</span>
    </a>
    {else if $checkFriend['list_status'] == 1}
    <a class="btn_profile_action btn_medium" href="/chat/" onclick="OpenFriendChat(this, {$arUser['id_user']}, {$rsUser['id_user']}); return false;">
        <span>Отправить сообщение</span>
    </a>
    <a class="btn_profile_action btn_medium" href="javascript: deletefromfriend({$rsUser['id_user']});">
        <span>Удалить из друзей</span>
    </a>
    {else}
    <a class="btn_profile_action btn_medium" href="javascript: deletefromfriend({$rsUser['id_user']});">
        <span>Отменить заявку</span>
    </a>
    {/if}
    {/if}
</div>
</div>

<div class="profile_header_summary">
    <div class="persona_name persona_name_spacer" style="font-size: 24px;">
        <span class="actual_persona_name">&nbsp;</span>
    </div>
    <div class="header_real_name_spacer">&nbsp;</div>
    <div class="profile_summary">
        {if $rsUser['user_desc'] == ""}Информация отсутствует.{else}{$rsUser['user_desc']}{/if}</div>
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
                <div class="profile_in_game persona {if $rsOnlineUsers[$rsUser['id_user']]}online{else}offline{/if}">
                    <div class="profile_in_game_header">{if $rsOnlineUsers[$rsUser['id_user']]}В сети{else}Не в сети{/if}</div>
                </div>
            </div>

            <div class="responsive_count_link_area">

                <div id="responsive_groupfriends_element_ctn">
                </div>

                <div class="profile_item_links">
                    <div class="profile_count_link ellipsis">
                        <a href="/user/history/{if $rsUser['user_link'] != ''}{$rsUser['user_link']}{else}{$rsUser['id_user']}{/if}/">
                            <span class="count_link_label">Куплено игр</span>&nbsp;
                            <span class="profile_count_link_total">
                             {$cnt}
                            </span>
                        </a>
                    </div>
                    <div class="profile_count_link ellipsis">
                        <a href="/reviews/user/{$rsUser['id_user']}/">
                            <span class="count_link_label">Обзоры</span>&nbsp;
                            <span class="profile_count_link_total">
							{$cntReviews}</span>
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
                        <a href="/gallery/user/{$rsUser['id_user']}/">
                            <span class="count_link_label">Иллюстрации</span>&nbsp;
                            <span class="profile_count_link_total">
							{$cntPic}</span>
                        </a>
                    </div>
                    {if isset($arUser) && $rsUser['id_user'] == $arUser['id_user']}
                    <div class="profile_count_link ellipsis">
                        <a href="#" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#galleryModal">
                            <span class="count_link_label">Загрузить иллюстрацию</span>&nbsp;
                            <span class="profile_count_link_total">
                            &nbsp; <!-- so the line spaces like the rest -->
                            </span>
                        </a>
                    </div>
                    {/if}
                    <div class="profile_count_link ellipsis">
                        <a href="/user/wishlist/{if $rsUser['user_link'] != ''}{$rsUser['user_link']}{else}{$rsUser['id_user']}{/if}/">
                            <span class="count_link_label">Список желаемого</span>&nbsp;
                            <span class="profile_count_link_total">
                            {$cntWishList}</span>
                        </a>
                    </div>
                    <div style="clear: left;"></div>
                </div>
            </div>

            <div class="profile_friend_links profile_count_link_preview_ctn responsive_groupfriends_element">
                <div class="profile_count_link ellipsis">
                    <a href="/user/friends/{$rsUser['id_user']}/">
                        <span class="count_link_label">Друзья</span>&nbsp;
                        <span class="profile_count_link_total">
						{$cntFriends}</span>
                    </a>
                </div>

                <div class="profile_topfriends profile_count_link_preview">
                    {foreach $rsFriendsUsers as $friend name = friend}
                    {if $smarty.foreach.friend.iteration < 9}
                    <div class="friendBlock persona {if $rsOnlineUsers[$friend['id_user']]}online{else}offline{/if}">
                        <a class="friendBlockLinkOverlay" href="/user/profile/{$friend['id_user']}/"></a>
                        <div class="friendPlayerLevel lvl_{if $rsLevelFriend[$friend['id_user']][0]['cnt_level'] >= 5000}4900{else}{$rsLevelFriend[$friend['id_user']][0]['cnt_level']}{/if} {if $rsLevelPlusFriend[$friend['id_user']]}lvl_plus_{$rsLevelPlusFriend[$friend['id_user']][0]['cnt_lvl_plus']}{/if}">
                            <span class="friendPlayerLevelNum">{$friend['user_level']}</span>
                        </div>
                        <div class="playerAvatar {if $rsOnlineUsers[$friend['id_user']]}online{else}offline{/if}">
                            {if $friend['user_have_photo'] == 1}
                            <img src="{$teplateImgPath}users/{$friend['id_user']}/main.jpg">
                            {else}
                            <img src="{$teplateImgPath}users/default/default.png">
                            {/if}
                        </div>
                        <div class="friendBlockContent">
                            {$friend['user_name']}
                            <br>
                        </div>
                    </div>
                    {/if}
                    {/foreach}
                </div>
            </div>

        </div>

        <div class="profile_leftcol">
            {if $rsGallery}
            <div class="profile_customization_area">
                <div class="profile_customization">
                    <div class="profile_customization_header">Витрина иллюстраций</div>

                    <div class="profile_customization_block">
                        <div class="screenshot_showcase">

                            <div class="screenshot_showcase_primary showcase_slot ">
                                {foreach $rsGallery as $gallery name = gallery}
                                {if $smarty.foreach.gallery.iteration == 1}
                                <a class="screenshot_showcase_screenshot modalContentLink " href="javascript:;">
                                    <img width="100%" style="max-width: 506px;" src="{$gallery['path_photo']}{$gallery['name_photo']}" alt="{$gallery['name_photo']}">
                                </a>
                                <div class="screenshot_showcase_stats">
                                </div>
                                {/if}
                                {/foreach}
                            </div>
                            <div class="screenshot_showcase_rightcol">
                                {foreach $rsGallery as $gallery name = gallery}
                                {if $smarty.foreach.gallery.iteration > 1 && $smarty.foreach.gallery.iteration < 5}
                                <div class="screenshot_showcase_smallscreenshot showcase_slot ">
                                    <a class="screenshot_showcase_screenshot modalContentLink " href="javascript:;">
                                        <img width="100%" style="max-width: 100px;" src="{$gallery['path_photo']}{$gallery['name_photo']}">
                                    </a>
                                </div>
                                {/if}
                                {/foreach}
                                {if $cntPic > 4}
                                <a class="screenshot_showcase_smallscreenshot screenshot_count" href="/gallery/user/{$rsUser['id_user']}/">
                                    <div class="screenshot_showcase_screenshot">
                                        + {$cntPic - 4} </div>
                                </a>
                                {/if}
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                </div>
            </div>
            {/if}
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
                            <a class="commentthread_allcommentslink" href="javascript:;">Все комментарии (<span>{$cntComments}</span>)
                            </a>
                            {if $cntComments > 5}
                            <a id="commentthread_Profile_76561198204634741_pagebtn_prev" href="javascript:void(0);" class="pagebtn">&lt;</a>
                            <span id="commentthread_Profile_76561198204634741_pagelinks" class="commentthread_pagelinks"></span>
                            <span id="commentthread_Profile_76561198204634741_pagedropdown" class="commentthread_pagedropdown"></span>
                            <a id="commentthread_Profile_76561198204634741_pagebtn_next" href="javascript:void(0);" class="pagebtn">&gt;</a>
                            {/if}
                        </div>
                        <div class="commentthread_count">
                            <span class="ellipsis commentthread_count_label">
									<span class="commentthread_header_label">Комментарии</span>
                            </span>

                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    {if isset($arUser) && $rsUser['id_user'] != $arUser['id_user']}
                    <form id="commentthread_Profile_{$rsUser['id_user']}_form" name="commentthread_Profile_{$rsUser['id_user']}_form" action="" method="post" onsubmit="return false;">
                        <div class="commentthread_entry">
                            <div class="commentthread_user_avatar playerAvatar online">
                                <a href="/user/profile/{$arUser['id_user']}/">
                                    {if $arUser['user_have_photo'] == 1}
                                    <img src="{$teplateImgPath}users/{$arUser['id_user']}/main.jpg"> 
                                    {else}
                                    <img src="{$teplateImgPath}users/default/default.png">
                                    {/if}
                                </a>
                            </div>
                            <div class="commentthread_entry_quotebox">
                                <textarea rows="1" class="commentthread_textarea" name="commentthread_Profile_{$rsUser['id_user']}_textarea" id="commentthread_Profile_{$rsUser['id_user']}_textarea" placeholder="Оставить комментарий"></textarea>
                            </div>
                            <div class="commentthread_entry_submitlink" id="commentthread_Profile_{$rsUser['id_user']}_submit_container">
                                <span class="btn_green_white_innerfade btn_small" id="commentthread_Profile_{$rsUser['id_user']}_submit">
						          <span onclick="sendUserComment({$rsUser['id_user']});">Отправить</span>
                                </span>
                            </div>
                            <div class="commentthread_entry_error" id="commentthread_Profile_{$rsUser['id_user']}_entry_error">
                            </div>
                        </div>
                    </form>
                    {/if}
                    <div class="commentthread_comment_container" id="commentthread_Profile_{$rsUser['id_user']}_postcontainer">

                        {foreach $rsComments as $comment}
                        <div class="commentthread_comments">
                            <div class="commentthread_comment responsive_body_text" id="comment_{$comment['id_com']}">
                                <div class="commentthread_comment_avatar playerAvatar {if $rsOnlineUsers[$comment['user_com']]}online{else}offline{/if}">
                                    <a href="/user/profile/{$comment['user_com']}/">
                                        <img src="{$teplateImgPath}users/{$comment['user_com']}/main.jpg">
                                    </a>
                                </div>
                                <div class="commentthread_comment_content">
                                    <div class="commentthread_comment_author">
                                        <a class="hoverunderline commentthread_author_link" href="/user/profile/{$comment['user_com']}/">
                                            <bdi>{$comment['name_user_com']}</bdi>
                                        </a>
                                        <span class="commentthread_comment_timestamp" title="{$comment['date_com']}">
					                       {$comment['date_com']}&nbsp;
				                        </span>
                                        {if isset($arUser) && $arUser['id_user'] == $rsUser['id_user']}
                                        <div class="commentthread_comment_actions">
                                            <a class="actionlink" data-tooltip-text="Удалить" href="javascript:CCommentThread.DeleteComment( 'Profile_76561198204634741', '1742230617610339195'  );"><img src="https://steamcommunity-a.akamaihd.net/public/images/skin_1/notification_icon_trash_bright.png?v=1"></a>
                                        </div>
                                        {/if}
                                    </div>
                                    <div class="commentthread_comment_text" id="comment_content_{$comment['id_com']}">
                                        {$comment['text_com']}
                                    </div>
                                </div>
                            </div>

                        </div>
                        {/foreach}


                    </div>
                    {if $cntComments > 5}
                    <div class="commentthread_footer">
                        <div class="commentthread_paging" id="commentthread_Profile_76561198204634741_fpagecontrols">
                            <a id="commentthread_Profile_76561198204634741_fpagebtn_prev" href="javascript:void(0);" class="pagebtn">&lt;</a>
                            <span id="commentthread_Profile_76561198204634741_fpagelinks" class="commentthread_pagelinks"></span>
                            <span id="commentthread_Profile_76561198204634741_fpagedropdown" class="commentthread_pagedropdown"></span>
                            <a id="commentthread_Profile_76561198204634741_fpagebtn_next" href="javascript:void(0);" class="pagebtn">&gt;</a>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    {/if}
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
</div>