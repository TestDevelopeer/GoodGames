
    </div>

</div>
<div class="container">
    <div class="nk-tabs">
        <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item hidden-phone">
                            <a class="nav-link custom-nav-tabs" href="#tabs-1-1" role="tab" data-toggle="tab">Лидеры продаж</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link custom-nav-tabs active" href="#tabs-1-2" role="tab" data-toggle="tab">Популярные новинки</a>
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
                    
                    <div class="tab-content col-12">
                        <div role="tabpanel" class="tab-pane fade" id="tabs-1-1">
                            <div class="nk-gap"></div>
                                        <div class="row vertical-gap">
                
                {foreach $rsBestSelling as $BestSell}
                <div class="col-md-6 col-lg-4 tools" data-tooltip-content="#tooltip_bestsell_{$BestSell['id_game']}">
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
                    </div>
                </div>
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
                {/foreach}
            </div>
                            <div class="nk-gap"></div>
                            <div class="tab_see_more">
                                <a class="btnv6_white_transparent btn_small_tall custom-btn-tall" href="/catalog/">
                                    <span>Все игры</span>
                                </a>
                            </div>
                            <div class="nk-gap"></div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade show active" id="tabs-1-2">
                            <div class="nk-gap"></div>
                            <div class="row vertical-gap">
                            {foreach $rsPopularGames as $game}
                            <div class="col-md-6 col-lg-4 tools" data-tooltip-content="#tooltip_popular_{$game['id_game']}">
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
                                                <div class="tab_item_top_tags"><span class="top_tag">{$game['tags']}</span></div>
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
                            <div id="tooltip_popular_{$game['id_game']}">
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
                        </div>
                            <div class="nk-gap"></div>
                            <div class="tab_see_more col-12">
                                <a class="btnv6_white_transparent btn_small_tall custom-btn-tall" href="/catalog/">
                                    <span>Все игры</span>
                                </a>
                            </div>
                            <div class="nk-gap"></div>
                        </div>

                    </div>
                </div>
                <!-- END: Tabs -->
    </div>
</div>
</div>
</div>