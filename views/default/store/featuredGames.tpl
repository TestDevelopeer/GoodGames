    <!-- START: Featured Games -->
    <div class="nk-gap-3"></div>
    <h3 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Избранные</span> игры</span></h3>
    <div class="nk-gap"></div>
    <div class="row vertical-gap">
        
        {foreach $rsFeaturedGames as $game}
        <div class="col-12 col-md-6 col-lg-4 tools" data-tooltip-content="#tooltip_featured_{$game['id_game']}">
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
                                    {foreach $platformFeatured[$game['id_game']] as $plat}
                                    <span class="platform_img {$plat}"></span>
                                    {/foreach}
                                    <span class="platform_img steam"></span>
                                    <div class="tab_item_top_tags"><span class="top_tag">{$game['tags']}</span></div>
                                </div>
                            </div>
                            
                            {if $game['discount_game'] == 0}
                            <div class="discount_block tab_item_discount" data-price-final="25400"><div class="discount_prices"><div class="discount_final_price">{$game['price_game']} руб.</div></div></div>
                            {else}
                            <div class="discount_block tab_item_discount" data-price-final="25400"><div class="discount_pct">-{$game['discount_game']}%</div><div class="discount_prices"><div class="discount_original_price">{$game['price_game']} pуб.</div><div class="discount_final_price">{$game['discount_price_game']} pуб.</div></div></div>
                            {/if}
                            <div class="nk-gap-2"></div>
                            
                        </div>
                        </a>
                    </div>
                </div>
                <div class="tooltip_templates">
                            <div id="tooltip_featured_{$game['id_game']}">
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
    <!-- END: Featured Games -->