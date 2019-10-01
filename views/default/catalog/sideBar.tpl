            <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-4 col-12">
            <!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
            -->
            <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                <div class="nk-widget">
    <div class="nk-widget-content">
        <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
            <div class="input-group">
                <input id="search-input" type="text" class="form-control" placeholder="Поиск...">
                <button class="nk-btn nk-btn-color-main-1"><span class="ion-search"></span></button>
            </div>
        </form>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">

    <div class="contenthub_popular_tags">
        <h2>Категории игр</h2>
            <a class="btnv6_blue_hoverfade btn_small_tall" href="javascript: searchwthcat('all', 'Все');">
                <span>Все игры</span>
            </a>
            {foreach $rsCategories as $category}
            <a class="btnv6_blue_hoverfade btn_small_tall" href="javascript: searchwthcat({$category['id_category']}, '{$category['name_category']}');">
                <span>{$category['name_category']}</span>
            </a>
            {/foreach}
            <div style="clear: both; margin-bottom: 20px;"></div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted nk-custom-widget">
    <div class="contenthub_popular_tags">
    <h2>Цена</h2>
    <div class="nk-widget-content custom-price-widget">
        <div class="nk-input-slider">
            <input
                id="slider-price"
                type="text"
                name="price-filter"
                data-slider-min="0"
                data-slider-max="5000"
                data-slider-step="1"
                data-slider-value="[200, 1200]"
                data-slider-tooltip="hide"
            >
            <div class="nk-gap"></div>
            <div>
                <div class="text-white mt-4 float-left">
                    
                    <strong class="text-main-1"><span class="nk-input-slider-value-0"></span> р.</strong>
                    -
                    <strong class="text-main-1"><span class="nk-input-slider-value-1"></span> р.</strong>
                </div>
                <a href="javascript: searchwthprice();" class="nk-btn nk-btn-rounded nk-btn-color-white float-right">Принять</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted hidden-phone">
    <div class="contenthub_dailydeal_container">
        <h2>Предложение дня</h2>                           
    <div class="dailydeal_ctn">
    <div class="dailydeal_cap">
        <a href="https://store.steampowered.com/app/743450/Monster_Prom/?snr=1_1452_4__43">
            <img src="https://steamcdn-a.akamaihd.net/steam/apps/743450/header_alt_assets_4.jpg?t=1550172723">
        </a>
    </div>
    <div class="discount_block daily_deal_discount discount_block_large" data-price-final="13900"><div class="discount_pct">-30%</div><div class="discount_prices"><div class="discount_original_price">199₴</div><div class="discount_final_price">139₴</div></div></div>                <div class="dailydeal_desc">
    </div>
    </div>
    <div style="clear: both; margin-bottom: 20px;"></div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted nk-custom-widget hidden-phone">
    <div class="contenthub_dailydeal_container">
    <h2><span><span class="text-main-1">Последние</span> новости</span></h2>
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
        
    </div>
</div>
</div>
<div class="nk-widget nk-widget-highlighted">
<div id="specials_container">
                                <h2>Предложения для вас</h2>
                                <div class="contenthub_specials_ctn">
                                    <div class="contenthub_specials_grid">
                                        {foreach $rsRecomended as $game}
                                        <div class="contenthub_specials_grid_cell">
                                            <a class="store_capsule app_impression_tracked" href="/game/{$game['id_game']}/">
                                                <div class="capsule header">
                                                    <img src="{$teplateImgPath}games/{$game['id_game']}/mainv2.jpg" alt="{$game['name_game']}">
                                                </div>
                                                <div>
                                                    <div class="discount_block  discount_block_inline">
                                                        <div class="discount_pct">-{$game['discount_game']}%</div>
                                                        <div class="discount_prices">
                                                            <div class="discount_original_price">{$game['price_game']} руб.</div>
                                                            <div class="discount_final_price">{$game['discount_price_game']} руб.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        {/foreach}
                                        <div style="clear: both"></div>
                                    </div>
                                    <div style="clear: both"></div>

                                </div>
                            </div>
</div>

            </aside>
            <!-- END: Sidebar -->
        </div>
    