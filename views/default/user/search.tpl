<div class="responsive_page_template_content">

			<div class="page_content">
	<!-- top content, dont delete search_filter div below -->
	<div id="search_filter">
	<div class="grouppage_content_area blue_background">
					<div class="search_breadcrumbs">
				<a href="/user/friends/{$arUser['id_user']}/">&lt; Назад</a>
			</div>
				<div class="maincontents">
			<div class="community_search_container">
				<h2>Найти друзей</h2>
									<div class="search_title_user_subheader">Поиск по имени пользователя.</div>
								<br>
								<form action="/user/searchusers/" method="POST">
									<input name="user_name" id="user_name" class="community_search_text_box" value="{$userName}" autocomplete="off">
								</form>
				
									
							</div>
		</div>
	</div>

	<!-- /top content -->
	<!-- main body -->

	<div class="community_search_results_container">
		<div class="maincontent">
			<div id="search_results" style="opacity: 1;">	<div id="community_searchresults_pagination" class="community_searchresults_container">
		<span class="community_searchresults_title">{if $rsUsers != null}Пользователи{else}Пользователей не найдено{/if}</span>
				
	<div style="clear: both"></div>
	</div>
{foreach $rsUsers as $user}
<div class="search_row">
	<div class="mediumHolder_default" style="float:left;">
		<div class="avatarMedium">
			<a href="/user/profile/{$user['id_user']}/">
				{if $user['user_have_photo'] == 1}
					<img style="max-width: 64px" src="{$teplateImgPath}users/{$user['id_user']}/main.jpg" alt="{$user['user_name']}">
				{else}
					<img style="max-width: 64px" src="{$teplateImgPath}users/default/default.png" alt="{$user['user_name']}">
				{/if}
			</a>
		</div>
	</div>
	<div class="searchPersonaInfo">
		<a class="searchPersonaName" href="/user/profile/{$user['id_user']}/">{$user['user_name']}</a>
	</div>
	{if $user['id_user'] != $arUser['id_user']}
	<div class="search_result_friend">
		{if $checkFriend[$user['id_user']] && $checkFriend[$user['id_user']]['list_status'] == 1}
		<img style="vertical-align: middle" src="https://steamcommunity-a.akamaihd.net/public/shared/images/friendindicator_small.png">Вы друзья
		{else if $checkFriend[$user['id_user']] && $checkFriend[$user['id_user']]['list_status'] == 0}
		<img style="vertical-align: middle" src="https://steamcommunity-a.akamaihd.net/public/shared/images/friendindicator_small.png">Заявка отправлена
		{/if}
		{if !$checkFriend[$user['id_user']]}
		<a href="javascript: addtofriend({$user['id_user']});" class="btnv6_blue_hoverfade btn_small btn_uppercase">
			<span>Добавить в друзья</span>
		</a>
		{/if}
	</div>
	{/if}
	<div style="clear:both"></div>

</div>
{/foreach}
<div style="clear: both"></div>
</div>
		</div>
	</div>
		</div>	<!-- responsive_page_legacy_content -->

			<div id="footer_spacer"></div>
	<div id="footer_responsive_optin_spacer"></div>
	
	</div>	<!-- responsive_page_content -->

</div>