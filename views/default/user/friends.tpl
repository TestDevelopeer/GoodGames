<div class="responsive_page_template_content">

<div class="pagecontent no_header friends">
	<div class="friends_header_bg">
		<div class="friends_header_container">
			<div class="friends_header_ctn">
				<div class="friends_header_avatar">
					<a href="/user/profile/{$rsUser['id_user']}/">
						{if $rsUser['user_have_photo'] == 1}
							<img src="{$teplateImgPath}users/{$rsUser['id_user']}/main.jpg">
						{else}
							<img src="{$teplateImgPath}users/default/default.png">
						{/if}
					</a>
				</div>
                <div class="friends_header_name_ctn">
	                <div class="friends_header_name" style="display:inline-flex"><a href="/user/profile/{$rsUser['id_user']}/">{$rsUser['user_name']}</a></div>
                </div>


			</div>
		</div>
	</div>

	<div class="friends_container">
		<div class="friends_nav">
							<h4>Друзья</h4>
				<a id="friends" class="icon_item icon_all_friends active" href="javascript: showFriends();">
					<span class="title">{if $rsUser['id_user'] == $arUser['id_user']}Ваши друзья{else}Друзья {$rsUser['user_name']}{/if}</span>
					<span id="menu_friends_ct" class="count">{$cntFriends}</span>
					<svg xmlns="http://www.w3.org/2000/svg" class="SVGIcon_Button SVGIcon_DownArrowContextMenu" data-name="Layer 1" viewBox="0 0 128 128" x="0px" y="0px"><polygon points="50 59.49 13.21 22.89 4.74 31.39 50 76.41 95.26 31.39 86.79 22.89 50 59.49"></polygon></svg>
				</a>
									
					<a id="pending" class="icon_item icon_pending_friends" href="javascript: showPendingFriends();">
						<span class="title">Приглашения</span>
						<span id="menu_friends_pending_ct" class="em_count">{$cntPending}</span>
						<svg xmlns="http://www.w3.org/2000/svg" class="SVGIcon_Button SVGIcon_DownArrowContextMenu" data-name="Layer 1" viewBox="0 0 128 128" x="0px" y="0px"><polygon points="50 59.49 13.21 22.89 4.74 31.39 50 76.41 95.26 31.39 86.79 22.89 50 59.49"></polygon></svg>
					</a>
					</div>

<div class="friends_content" id="subpage_container">
	<div id="friends_list" class="friends_list_ctn pagecontent no_header">
		<div class="profile_friends title_bar">
			<div class="profile_friends title">
				{if $rsUser['id_user'] == $arUser['id_user']}Ваши друзья{else}Друзья{/if} / <span class="friends_limit">{$cntFriends}</span>
			</div>
		</div>
		<div class="searchBarContainer">
			<form action="/user/searchusers/" method="POST">
				<input name="user_name" class="friends_search_text_box search_your_friends" value="" autocomplete="off" autofocus="" placeholder="Поиск друзей по имени">
			</form>

		</div>
		<div class="profile_friends search_results" id="search_results">
			{if !$rsFriendsUsers}
				<div id="search_results_empty" class="search_results_none">Извините, здесь никого нет.</div>
			{/if}
			
	        <div id="state_offline" data-group="online" class="state_block"></div>  
	        
	        <div id="state_online" data-group="online" class="state_block">В сети</div>
	            {foreach $rsFriendsUsers as $send}
	            {if $rsOnlineUsers[$send['id_user']]}
	            <div class="selectable friend_block_v2 persona online " id="fr_{$send['id_user']}">
					<a class="selectable_overlay" href="/user/profile/{$send['id_user']}/"></a>
					<div class="player_avatar friend_block_link_overlay online">
						{if $send['user_have_photo'] == 1}
							<img src="{$teplateImgPath}users/{$send['id_user']}/main.jpg">
						{else}
							<img src="{$teplateImgPath}users/default/default.png">
						{/if}
					</div>
					<div class="friend_block_content">{$send['user_name']}<br>
						<span class="friend_small_text"></span>
						<!--<span class="friend_last_online_text">
							В сети: 15 ч., 59 мин. назад					
						</span>-->
					</div>
					{if isset($arUser) && $rsUser['id_user'] == $arUser['id_user']}
					<div class="commentthread_comment_actions delete_friend">
						<a class="actionlink" data-tooltip-text="Удалить" href="javascript: deletefromfriend({$send['id_user']});">
							<img src="https://steamcommunity-a.akamaihd.net/public/images/skin_1/notification_icon_trash_bright.png?v=1">
						</a>
					</div>
					{/if}
	        	</div>
	        	{/if}
	        	{/foreach}
	       	
	       	<div id="state_offline" data-group="offline" class="state_block">Не в сети</div>
	       	{foreach $rsFriendsUsers as $send}
	        {if !$rsOnlineUsers[$send['id_user']]}
	        <div class="selectable friend_block_v2 persona offline " id="fr_{$send['id_user']}">
				<a class="selectable_overlay" href="/user/profile/{$send['id_user']}/"></a>
				<div class="player_avatar friend_block_link_overlay offline">
					{if $send['user_have_photo'] == 1}
						<img src="{$teplateImgPath}users/{$send['id_user']}/main.jpg">
					{else}
						<img src="{$teplateImgPath}users/default/default.png">
					{/if}
				</div>
				<div class="friend_block_content">{$send['user_name']}<br>
					<span class="friend_small_text"></span>
					<!--<span class="friend_last_online_text">
						В сети: 15 ч., 59 мин. назад					
					</span>-->
				</div>
				{if isset($arUser) && $rsUser['id_user'] == $arUser['id_user']}
				<div class="commentthread_comment_actions delete_friend">
					<a class="actionlink" data-tooltip-text="Удалить" href="javascript: deletefromfriend({$send['id_user']});">
						<img src="https://steamcommunity-a.akamaihd.net/public/images/skin_1/notification_icon_trash_bright.png?v=1">
					</a>
				</div>
				{/if}
	        </div>
	        {/if}
	        {/foreach}
	    </div>
	</div>
	<div id="friends_pending" class="friends_list_ctn pagecontent no_header hide">
	<div class="profile_friends title_bar">
		<span class="profile_friends title">Полученные заявки</span>
        <button id="manage_friends_control" class="profile_friends manage_link btnv6_blue_hoverfade btn_small btn_uppercase {if !$rsAcceptUsers}btn_disabled{/if}" onclick="IgnoreAllInvites()">
            <span>Игнорировать все</span>
        </button>
	</div>
	<div class="profile_friends search_results" id="search_results">
		{if !$rsAcceptUsers}
		<div id="search_results_empty" class="search_results_none">Извините, здесь никого нет.</div>
		{else}
		{foreach $rsAcceptUsers as $accept}
			<div id="invite_{$accept['id_user']}" class="selectable invite_row">
		<a class="selectable_overlay invite_row_overlay"></a>
		<div class="invite_row_content ">
			<div class="invite_row_left">

				<div class="invite_block_icon">
					<div class="friendPlayerLevel lvl_{if $rsLevelAccept[$accept['id_user']][0]['cnt_level'] >= 5000}4900{else}{$rsLevelAccept[$accept['id_user']][0]['cnt_level']}{/if} {if $rsLevelPlusAccept[$accept['id_user']]}lvl_plus_{$rsLevelPlusAccept[$accept['id_user']][0]['cnt_lvl_plus']}{/if}">
						<span class="friendPlayerLevelNum">{$accept['user_level']}</span>
					</div>				
				</div>

				<div class="invite_block_icon">
					<div class="playerAvatar online">
						<a href="/user/profile/{$accept['id_user']}/">
							{if $accept['user_have_photo'] == 1}
								<img src="{$teplateImgPath}users/{$accept['id_user']}/main.jpg" alt="{$accept['user_name']}">
							{else}
								<img src="{$teplateImgPath}users/default/default.png" alt="{$accept['user_name']}">
							{/if}
						</a>
					</div>
				</div>
				<div class="invite_block_name">
					<a class="linkTitle event_title" href="/user/profile/{$accept['id_user']}/">{$accept['user_name']}</a>
				</div>
			</div>
		</div>

		<div class="actions">
				<a class="linkStandard btnv6_white_transparent" href="javascript: acceptfriend({$accept['id_user']});" title="Принять">
					<span class="invite_action_txt">Принять</span>
				</a>
				<a class="linkStandard btnv6_white_transparent" href="javascript: deletefromfriend({$accept['id_user']});">
					<span class="invite_action_txt">Игнорировать</span>
				</a>
		</div>
	</div>
	{/foreach}
	{/if}
			</div>
	<div class="profile_friends title_bar pending_sent_invites">
		<div class="profile_friends title">
			Отправленные заявки		
		</div>
	</div>
	<div class="profile_friends search_results_sentinvites" id="search_results_sentinvites">
		{if !$rsSendUsers}
		<div id="search_results_sentinvites_empty" class="search_results_none">Извините, здесь ничего нет.</div>
		{else}
		{foreach $rsSendUsers as $send}
		<div id="invite_{$send['id_user']}" class="selectable invite_row">
		<a class="selectable_overlay invite_row_overlay"></a>
		<div class="invite_row_content ">
			<div class="invite_row_left">
				<div class="invite_block_icon">
					<div class="friendPlayerLevel lvl_{if $rsLevelSend[$send['id_user']][0]['cnt_level'] >= 5000}4900{else}{$rsLevelSend[$send['id_user']][0]['cnt_level']}{/if} {if $rsLevelPlusSend[$send['id_user']]}lvl_plus_{$rsLevelPlusSend[$send['id_user']][0]['cnt_lvl_plus']}{/if}">
						<span class="friendPlayerLevelNum">{$send['user_level']}</span>
					</div>				
				</div>

				<div class="invite_block_icon">
					<div class="playerAvatar online">
						<a href="/user/profile/{$send['id_user']}/">
							{if $send['user_have_photo'] == 1}
								<img src="{$teplateImgPath}users/{$send['id_user']}/main.jpg" alt="{$send['user_name']}">
							{else}
								<img src="{$teplateImgPath}users/default/default.png" alt="{$send['user_name']}">
							{/if}
						</a>
					</div>
				</div>

				<div class="invite_block_name">
					<a class="linkTitle event_title" href="/user/profile/{$send['id_user']}/">{$send['user_name']}</a>
				</div>
			</div>
		</div>

		<div class="actions">
			<a class="linkStandard btnv6_white_transparent" href="javascript:void(0)" onclick="deletefromfriend({$send['id_user']});">
				<span class="invite_action_txt">Отменить приглашение</span>
			</a>
		</div>
	</div>
	{/foreach}
	{/if}
			</div>
</div>
</div>

	</div>
</div>

</div>