        <div class="col-lg-4">
            <!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
            -->
            <aside class="nk-sidebar">
<div class="nk-widget nk-widget-highlighted nk-custom-widget">
     <div class="block responsive_apppage_details_left game_details underlined_links">
            <a class="bla-2 custom-trailer" href="https://www.youtube.com/watch?v={$rsTrailer['id_on_youtube']}">
                <img src="//img.youtube.com/vi/{$rsTrailer['id_on_youtube']}/mqdefault.jpg" width="320" height="180">
                <img class="custom-play-btn" src="{$teplateWebPath}assets/images/play-button-png-play-button-png-image-1250.png" alt="Play">
            </a>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted nk-custom-widget">
<div>
    <div class="block responsive_apppage_details_left game_details underlined_links">
        <div class="block_content">
            <div class="block_content_inner">
                <div class="details_block">
                    <b>Название:</b> {$rsGame['name_game']}<br>
                    <b>Жанр:</b>
                    {foreach $categories as $cat name = cat}
                    <a href="/catalog/search/cat/?searchname={$cat['id_cat']}">&nbsp;{$cat['cat_name']}</a>{if !$smarty.foreach.cat.last},{/if}
                    {/foreach}
                    <div class="dev_row">
                    <b>Разработчик:</b>
                    {if $rsParentGame == null}
                    <a href="/catalog/search/developer/?searchname={$rsGame['Developer']}">&nbsp;{$rsGame['Developer']}</a>
                    {else}
                    <a href="/catalog/search/developer/?searchname={$rsParentGame['Developer']}">&nbsp;{$rsParentGame['Developer']}</a>
                    {/if}
                    </div>
                    <div class="dev_row">
                    <b>Издатель:</b>
                    {if $rsParentGame == null}
                    <a href="/catalog/search/developer/?searchname={$rsGame['Developer']}">&nbsp;{$rsGame['Publisher']}</a>
                    {else}
                    <a href="/catalog/search/developer/?searchname={$rsParentGame['Developer']}">&nbsp;{$rsParentGame['Publisher']}</a>
                    {/if}
                    </div>
                    <b>Дата выхода:</b> {$rsGame['Date']}<br>
                </div>
            <div class="details_block">
            <br>
            {if $rsParentGame == null}
            <a class="linkbar" href="{$rsSteamBuyLink['site_game']}" target="_blank" rel="noreferrer noopener">
            Посетить сайт <img src="https://steamstore-a.akamaihd.net/public/images/v5/ico_external_link.gif" border="0" align="bottom">
            </a>
            {else}
            <a class="linkbar" href="{$rsSteamBuyLink['site']['site_game']}" target="_blank" rel="noreferrer noopener">
            Посетить сайт <img src="https://steamstore-a.akamaihd.net/public/images/v5/ico_external_link.gif" border="0" align="bottom">
            </a>
            {/if}
            <a class="linkbar" href="#" target="_blank" rel="noreferrer">
            Прочитать соответствующие новости       </a>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted nk-custom-widget">
<div>
    <div class="block responsive_apppage_details_left" id="category_block">
        {foreach $categoriesUser as $userCat}
        <div class="game_area_details_specs">
            <div class="custom-icon">
                <a href="#">
                    <img class="category_icon" src="{$teplateWebPath}assets/images/userIcons/{$userCat['icon']}">
                </a>
            </div>
            <a class="name" href="#">{$userCat['cat_name']}</a>
        </div>
        {/foreach}
        {if $rsParentGame != null}
            <div class="game_area_details_specs">
                <div class="custom-icon">
                    <a href="#">
                        <img class="category_icon" src="{$teplateWebPath}assets/images/userIcons/ico_dlc.png">
                    </a>
                </div>
                <a class="name" href="#">Дополнительный контент</a>
            </div>
        {/if}
            <div class="DRM_notice">
                <div>Требуется принятие условий стороннего <a href="https://store.steampowered.com/privacy_agreement/" onclick="ShowEULA( this ); return false;">соглашения политики конфиденциальности Steam</a></div>
            </div>
        </div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted nk-custom-widget">
<div>
    <div class="block responsive_apppage_details_right">
        <div class="block_title">
            Языки:
        </div>
<table class="game_language_options" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <th style="width: 94px;"></th>
            <th class="checkcol">Интерфейс</th>
            <th class="checkcol">&nbsp;Озвучка</th>
            <th class="checkcol">Субтитры</th>
        </tr>
        {foreach $allLangs as $languages}
        <tr style="" class="">
            <td style="width: 94px; text-align: left" class="ellipsis">
                {$languages['name_lang']}
            </td>
            <td class="checkcol">
                {foreach $lang['interf'] as $check}
                {if $check == $languages['id_lang']}
                <span>✔</span>
                {else}
                {/if}
                {/foreach}
            </td>
            <td class="checkcol">
                {foreach $lang['sound'] as $check}
                {if $check == $languages['id_lang']}
                <span>✔</span>
                {else}
                {/if}
                {/foreach}
            </td>
            <td class="checkcol">
                {foreach $lang['subtit'] as $check}
                {if $check == $languages['id_lang']}
                <span>✔</span>
                {else}
                {/if}
                {/foreach}
            </td>
        </tr>
        {/foreach}
    </tbody>
</table>
</div>
</div>
</div>

            </aside>
            <!-- END: Sidebar -->
        </div>
    </div>

</div>

<div class="nk-gap-4"></div>
