    <!-- START: Top 10 Best Sellers -->
    <div class="nk-gap-3"></div>
    <h3 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Скидки</span></span></h3>
    <div class="nk-gap"></div>
    <div class="nk-carousel nk-carousel-x4" data-autoplay="5000" data-dots="false" data-cell-align="left" data-arrows="true">
        <div class="nk-carousel-inner">
            
            {foreach $rsDiscountGames as $game}
            <div>
                <div class="pl-5 pr-5">
                <div class="nk-product-cat-3">
                    <a class="nk-product-image" href="/game/{$game['id_game']}/">
                        <img src="{$teplateImgPath}games/{$game['id_game']}/main.jpg" alt="{$game['name_game']}">
                    </a>
                    <div class="nk-product-cont">
                        <div class="nk-gap-1"></div>
                        <h3 class="nk-product-title h5"><a href="/game/{$game['id_game']}/" class="store-best-sell-name">{$game['name_game']}</a></h3>
                    </div>
                </div>
                <div style="text-align: center;">
                    <div class="discount_pct">-{$game['discount_game']}%</div>
                    <div class="discount_block  discount_block_inline">
                        <div class="discount_prices">
                            <div class="discount_original_price">{$game['price_game']} pуб.</div>
                            <div class="discount_final_price">{$game['discount_price_game']} pуб.</div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            {/foreach}
        </div>
    </div>
    <!-- END: Top 10 Best Sellers -->