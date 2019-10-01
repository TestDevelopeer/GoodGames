
        <div class="col-lg-8">
            <!-- START: Products -->
            <div class="row vertical-gap" id="search-game-box" data-cnt_games="12" data-cat="all">
                {foreach $rsGames as $game name = game}
        <div class="col-md-6 col-12">
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
                                    {foreach $platformPopGames[$game['id_game']] as $plat}
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
                {/foreach}
            </div>
            <!-- END: Products -->
            <!-- START: Pagination -->
            <div class="nk-gap-3"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab_see_more">
                        <a id="show_more_games" class="btnv6_white_transparent btn_small_tall custom-btn-tall" href="javascript:;">
                            <span>Еще игры</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Pagination -->
        </div>
        </div>

</div>

<div class="nk-gap-4"></div>