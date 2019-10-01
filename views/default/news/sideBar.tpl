        <div class="col-lg-4">
            <!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
            -->
            <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
<div class="nk-widget hidden-phone">
    <div class="nk-widget-content">
        <div class="nk-form nk-form-style-1">
            <div class="input-group">
                <input type="text" class="form-control" id="search-article" placeholder="Поиск...">
                <button class="nk-btn nk-btn-color-main-1" id="search-btn" data-input="search-article"><span class="ion-search"></span></button>
            </div>
        </div>
    </div>
</div>

<div class="nk-widget nk-widget-highlighted hidden-phone">

    <div class="contenthub_popular_tags">
        <h2>Категории новостей</h2>
        <a class="btnv6_blue_hoverfade btn_small_tall" href="/news/" name="category">
                <span>Все</span>
        </a>
        {foreach $rsArtCat as $cat}
            <a class="btnv6_blue_hoverfade btn_small_tall" href="/news/category/?name={$cat['id_art_cat']}" name="category">
                    <span>{$cat['name_art_cat']}</span>
            </a> 
        {/foreach}
        <div style="clear: both; margin-bottom: 20px;"></div>
    </div>
</div>

<div class="nk-widget nk-widget-highlighted hidden-phone">
    <div class="contenthub_popular_tags">   
    <h2>Мы в соц. сетях</h2>
    
        <ul class="nk-social-links-3 nk-social-links-cols-4">
            <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
            <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
            <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
            <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
            <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
            <li><a class="nk-social-twitter" href="https://twitter.com/nkdevv" target="_blank"><span class="fab fa-twitter"></span></a></li>
            <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>
            <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
        </ul>
        <div style="clear: both; margin-bottom: 40px;"></div>
    </div>
</div>

<div class="nk-widget nk-widget-highlighted nk-custom-widget">
    <div class="contenthub_dailydeal_container">
    <h2><span><span class="text-main-1">Популярные</span> новости</span></h2>
    <div class="nk-widget-content custom-catalog-art-content">
        
            {foreach $rsThreePopularLastArt as $art}
            <div class="nk-widget-post">
                <a href="/article/{$art['id_art']}/" class="nk-post-image custom-a-img-catalog">
                    <img src="{$teplateImgPath}articles/{$art['id_art']}/main.jpg" alt="">
                </a>
                <h3 class="nk-post-title"><a href="/article/{$art['id_art']}/" class="text-art">{$art['name_art']}</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> {$art['date_art']}</div>
            </div>
            {/foreach}
        <div style="clear: both; margin-bottom: 40px;"></div>
    </div>
</div>
</div>
<div class="nk-widget nk-widget-highlighted nk-custom-widget">
    <div class="contenthub_dailydeal_container">
    <h2><span><span class="text-main-1">Последние</span> обновления</span></h2>
    <div class="nk-widget-content custom-catalog-art-content">
        
            {foreach $rsThreeLastUpd as $art}
            <div class="nk-widget-post">
                <a href="/article/{$art['id_art']}/" class="nk-post-image custom-a-img-catalog">
                    <img src="{$teplateImgPath}games/{$art['art_game_id']}/mainv2.jpg" alt="{$art['name_art']}">
                </a>
                <h3 class="nk-post-title"><a href="/article/{$art['id_art']}/" class="text-art">{$art['name_art']}</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> {$art['date_art']}</div>
            </div>
            {/foreach}
        <div style="clear: both; margin-bottom: 20px;"></div>
    </div>
</div>
</div>

            </aside>
            <!-- END: Sidebar -->
        </div>    
    </div>
</div>

<div class="nk-gap-2"></div>