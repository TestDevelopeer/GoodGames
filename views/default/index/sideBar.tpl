
    </div>

</div>
<div class="container">
    
    <div class="nk-tabs">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item item-games">
                <a class="nav-link custom-nav-tabs active" href="#tabs-1-1" role="tab" data-toggle="tab">Лидеры продаж</a>
            </li>
            <li class="nav-item item-games">
                <a class="nav-link custom-nav-tabs" href="#tabs-1-2" role="tab" data-toggle="tab">Популярные новинки</a>
            </li>
            <li class="nav-item item-games">
                <a class="nav-link custom-nav-tabs" href="#tabs-1-3" role="tab" data-toggle="tab">Будущие проекты</a>
            </li>
        </ul>
    </div>
    
</div>
<div class="custom-best-sell-back">
    <div class="container">
                        <!-- START: Tabs  -->
                <div class="nk-tabs">
                    <!--
                        Additional Classes:
                            .nav-tabs-fill
                    -->
                    
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="tabs-1-1">
                            <div class="nk-gap"></div>
                                        <div class="row vertical-gap">
                
                {foreach $rsBestSelling as $BestSell}
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 tools" data-tooltip-content="#tooltip_bestsell_{$BestSell['id_game']}">
                    <div class="nk-product-cat">
                        <a class="nk-product-image {if isset($rsCheckGameCart[$BestSell['id_game']])}img-game-in-cat in-cat-{$BestSell['id_game']}{/if}" href="/game/{$BestSell['id_game']}/">
                            <img src="{$teplateImgPath}games/{$BestSell['id_game']}/main.jpg" alt="{$BestSell['name_game']}">
                            {if isset($rsCheckGameCart[$BestSell['id_game']])}
                                <div class="game-in-cat flag-{$BestSell['id_game']}">В КОРЗИНЕ&nbsp;&nbsp;</div>
                            {/if}
                        </a>
                        <a href="/game/{$BestSell['id_game']}/" class="nk-product-cont custom-prod-cont">
                        <div >
                            
                            <div class="nk-gap"></div>
                            <h3 class="nk-product-title h6 custom-prod-cont-h">{$BestSell['name_game']}</h3>
                            <div class="nk-gap"></div>
                            <div class="tab_item_content">
                                <div class="tab_item_details">
                                    {foreach $platform[$BestSell['id_game']] as $plat}
                                    <span class="platform_img {$plat}"></span>
                                    {/foreach}
                                    <span class="platform_img steam"></span>
                                    <div class="tab_item_top_tags"><span class="top_tag">{$BestSell['tags']}</span></div>
                                </div>
                            </div>
                            
                            {if $BestSell['discount_game'] == 0}
                            <div class="discount_block tab_item_discount" data-price-final="25400">
                                <div class="discount_prices">
                                    <div class="discount_final_price">{$BestSell['price_game']} pуб.</div>
                                </div>
                            </div>
                            {else}
                            <div class="discount_block tab_item_discount" data-price-final="25400"><div class="discount_pct">-{$BestSell['discount_game']}%</div><div class="discount_prices"><div class="discount_original_price">{$BestSell['price_game']} pуб.</div><div class="discount_final_price">{$BestSell['discount_price_game']} pуб.</div></div></div>
                            {/if}
                            <div class="nk-gap-2"></div>
                            
                        </div>
                        </a>
                        <div class="tooltip_templates">
                            <div id="tooltip_bestsell_{$BestSell['id_game']}">
                                <div id="hover_app_939960" style="display: block;">
                                    <div class="hover_top_area" style="display: none;">
                                    </div>
                                    <h4>{$BestSell['name_game']}</h4>
                                    <div class="hover_release"> Дата выпуска: {$BestSell['Date']} </div>
                                    <div class="hover_screenshots">
                                        <img src="{$teplateImgPath}games/{$BestSell['id_game']}/mainv2.jpg" alt="{$BestSell['name_game']}">
                                    </div>
                                    <div class="hover_body">
                                        <div class="hover_review_summary">
                                            <div class="title">{$BestSell['description_game']}</div>
                                        </div>
                                        <div style="clear: left;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {/foreach}
                <div class="col-md-12">
                    <div class="tab_see_more">
                                <a class="btnv6_white_transparent btn_small_tall custom-btn-tall" href="/catalog/">
                                    <span>Все игры</span>
                                </a>
                            </div>
                </div>
            </div>
                            <div class="nk-gap"></div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tabs-1-2">
                            <div class="nk-gap"></div>
                            <div class="row vertical-gap">
                            {foreach $rsLastGames as $game}
                            <div class="col-xl-4 col-lg-4 col-md-6 tools" data-tooltip-content="#tooltip_last_{$game['id_game']}">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image {if isset($rsCheckGameCart[$game['id_game']])}img-game-in-cat in-cat-{$game['id_game']}{/if}" href="/game/{$game['id_game']}/">
                                        <img src="{$teplateImgPath}games/{$game['id_game']}/main.jpg" alt="{$game['name_game']}">
                                        {if isset($rsCheckGameCart[$game['id_game']])}
                                            <div class="game-in-cat flag-{$game['id_game']}">В КОРЗИНЕ&nbsp;&nbsp;</div>
                                        {/if}
                                    </a>
                                    <a href="/game/{$game['id_game']}/" class="nk-product-cont custom-prod-cont">
                                    <div >
                                        
                                        <div class="nk-gap"></div>
                                        <h3 class="nk-product-title h6 custom-prod-cont-h">{$game['name_game']}</h3>
                                        <div class="nk-gap"></div>
                                        <div class="tab_item_content">
                                            <div class="tab_item_details">
                                                {foreach $platform[$game['id_game']] as $plat}
                                                <span class="platform_img {$plat}"></span>
                                                {/foreach}
                                                <span class="platform_img steam"></span>
                                                <div class="tab_item_top_tags"><span class="top_tag">{$BestSell['tags']}</span></div>
                                            </div>
                                        </div>
                                        
                                        {if $game['discount_game'] == 0}
                                        <div class="discount_block tab_item_discount" data-price-final="25400">
                                            <div class="discount_prices">
                                                <div class="discount_final_price">{$game['price_game']} pуб.</div>
                                            </div>
                                        </div>
                                        {else}
                                        <div class="discount_block tab_item_discount" data-price-final="25400"><div class="discount_pct">-{$game['discount_game']}%</div><div class="discount_prices"><div class="discount_original_price">{$game['price_game']} pуб.</div><div class="discount_final_price">{$game['discount_price_game']} pуб.</div></div></div>
                                        {/if}
                                        <div class="nk-gap-2"></div>
                                        
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tooltip_templates">
                            <div id="tooltip_last_{$game['id_game']}">
                                <div id="hover_app_939960" style="display: block;">
                                    <div class="hover_top_area" style="display: none;">
                                    </div>
                                    <h4>{$game['name_game']}</h4>
                                    <div class="hover_release"> Дата выпуска: {$game['Date']} </div>
                                    <div class="hover_screenshots">
                                        <img src="{$teplateImgPath}games/{$game['id_game']}/mainv2.jpg" alt="{$game['name_game']}">
                                    </div>
                                    <div class="hover_body">
                                        <div class="hover_review_summary">
                                            <div class="title">{$game['description_game']}</div>
                                        </div>
                                        <div style="clear: left;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            {/foreach}
                            <div class="col-md-12">
                    <div class="tab_see_more">
                                <a class="btnv6_white_transparent btn_small_tall custom-btn-tall" href="/catalog/">
                                    <span>Все игры</span>
                                </a>
                            </div>
                </div>
                        </div>
                            <div class="nk-gap"></div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tabs-1-3">
                            <div class="nk-gap"></div>


                    <!--FULL WIDTH ------------------------------------------------>
                                <div class="nk-blog-fullwidth custom-full-width">
        
        <!-- START: Post -->
        <div class="nk-blog-post">
            <a href="javascript:;" class="nk-post-img custom-coming-post-a">
                <img src="{$teplateWebPath}assets/images/newgame/{$comingSoon[0]['id_com_game']}/main.jpg" alt="{$comingSoon[0]['name_com_game']}">
                <div id="coming-prev" class="nk-flickity-arrow nk-flickity-arrow-prev"><span class="ion-ios-arrow-back"></span></div>
                <div id="coming-next" class="nk-flickity-arrow nk-flickity-arrow-next"><span class="ion-ios-arrow-forward"></span></div>
            </a>
            <div class="nk-gap-1"></div>
            <div class="nk-popup-gallery">
                <div class="row vertical-gap">
                    {section name='game' start=1 loop=5 step=1}
                    <div class="col-lg-3">
                        <div class="nk-gallery-item-box">
                            <a href="{$teplateWebPath}assets/images/newgame/{$comingSoon[0]['id_com_game']}/th{$smarty.section.game.index}.jpg" class="nk-gallery-item" data-size="1016x572">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="{$teplateWebPath}assets/images/newgame/{$comingSoon[0]['id_com_game']}/th{$smarty.section.game.index}.jpg" alt="{$comingSoon[0]['name_com_game']}">
                            </a>
                            
                        </div>
                    </div>
                    {/section}
                </div>
            </div>
            <div class="nk-gap-1"></div>
            
        </div>
        <!-- END: Post -->

</div>
<!--FULL WIDTH ------------------------------------------------>
                    <!--FULL WIDTH ------------------------------------------------>
<div class="nk-blog-fullwidth custom-full-width-v2 hide">
        
        <!-- START: Post -->
        <div class="nk-blog-post">
            <a href="javascript:;" class="nk-post-img custom-coming-post-a">
                <img src="{$teplateWebPath}assets/images/newgame/{$comingSoon[1]['id_com_game']}/main.jpg" alt="{$comingSoon[1]['name_com_game']}">
                <div id="comingv2-prev" class="nk-flickity-arrow nk-flickity-arrow-prev"><span class="ion-ios-arrow-back"></span></div>
                <div id="comingv2-next" class="nk-flickity-arrow nk-flickity-arrow-next"><span class="ion-ios-arrow-forward"></span></div>
            </a>
            
            <div class="nk-gap-1"></div>
            <div class="nk-popup-gallery">
                <div class="row vertical-gap">
                    {section name='game' start=1 loop=5 step=1}
                    <div class="col-lg-3">
                        <div class="nk-gallery-item-box">
                            <a href="{$teplateWebPath}assets/images/newgame/{$comingSoon[1]['id_com_game']}/th{$smarty.section.game.index}.jpg" class="nk-gallery-item" data-size="1016x572">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="{$teplateWebPath}assets/images/newgame/{$comingSoon[1]['id_com_game']}/th{$smarty.section.game.index}.jpg" alt="{$comingSoon[1]['name_com_game']}">
                            </a>
                            
                        </div>
                    </div>
                    {/section}
                </div>
            </div>
            <div class="nk-gap-1"></div>
            
        </div>
        <!-- END: Post -->

</div>
<!--FULL WIDTH ------------------------------------------------>


                            <div class="nk-gap"></div>
                        </div>
                    </div>
                </div>
                <!-- END: Tabs -->
    </div>
</div>
       <!-- <div class="col-lg-2">

            <aside class="nk-sidebar nk-sidebar-right">
                <div class="nk-widget">
    <div class="nk-widget-content">
        <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Поиск...">
                <button class="nk-btn nk-btn-color-main-1"><span class="ion-search"></span></button>
            </div>
        </form>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Мы</span> в соц сетях</span></h4>
    <div class="nk-widget-content">

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
    </div>
</div>

<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Топ 3</span> последних</span></h4>
    <div class="nk-widget-content">
            {foreach $rsThreePopularLastArt as $art}
            <div class="nk-widget-post">
                <a href="/article/{$art['id_art']}/" class="nk-post-image">
                    <img src="{$teplateImgPath}articles/{$art['id_art']}/main.jpg" alt="">
                </a>
                <h3 class="nk-post-title"><a href="/article/{$art['id_art']}/" class="text-art">{$art['name_art']}</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> {$art['date_art']}</div>
            </div>
            {/foreach}
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Самые</span> популярные</span></h4>
    <div class="nk-widget-content">
            {foreach $rsMostPopularGame as $popular}
            <div class="nk-widget-post">
                <a href="/game/{$popular['id_game']}/" class="nk-post-image {if isset($rsCheckGameCart[$popular['id_game']])}img-game-in-cat in-cat-{$popular['id_game']}{/if}">
                    <img src="{$teplateImgPath}games/{$popular['id_game']}/main.jpg" alt="{$popular['name_game']}">
                    {if isset($rsCheckGameCart[$popular['id_game']])}
                        <div class="game-in-cat flag-{$popular['id_game']}">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    {/if}
                </a>
                <h3 class="nk-post-title"><a href="/game/{$popular['id_game']}/">{$popular['name_game']}</a></h3>
                <div class="nk-product-rating" data-rating="{$popular['rating_game']/$popular['cnt_vote_rating']}">
                    {if $popular['cnt_vote_rating'] != 0}
                    {section name=rating start=0 loop=$popular['rating_game']/$popular['cnt_vote_rating'] step=1}
                    <i class="fa fa-star"></i>
                    {/section}
                    {else}
                     <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                    {/if}
                </div>
                {if $popular['discount_game'] == 0}
                <div class="nk-product-price">{$popular['price_game']}р.</div>
                {else}
                <div class="nk-product-price"><s style="color: red;">{$popular['price_game']}р.</s> {$popular['discount_price_game']}р. <span class="tx-warning tx-12"><span class="tx-lato">{$popular['discount_game']}%</span></span></div>
                {/if}
            </div>
            {/foreach}
    </div>
</div>

            </aside>
          
        </div>-->
</div>
</div>