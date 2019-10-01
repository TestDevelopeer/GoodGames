    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        <div class="wishlist_header">
                {if $rsUser['user_have_photo'] == 1}
                    <img src="{$teplateImgPath}users/{$rsUser['id_user']}/main.jpg">
                {else}
                    <img src="{$teplateImgPath}users/default/default.jpg">
                {/if}
                <h2>Список желаемого hit or miss?</h2>
            </div>
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

        

        
    <div class="container">
        <div class="row vertical-gap">


        <div class="nk-gap-2"></div>
        

            <div class="col-lg-12">
                <!-- START: Table -->
                <div class="nk-gap"></div>
            {foreach $rsGames as $game}
                <div class="wishlist_row" id="wish_game_{$game['id_game']}" style="top: 0px;">
            <a class="capsule" href="/game/{$game['id_game']}/">
                <img data-img-src="{$teplateImgPath}games/{$game['id_game']}/mainv2.jpg" src="{$teplateImgPath}games/{$game['id_game']}/mainv2.jpg">
                <div class="screenshots">
                    {foreach $namePhoto[$game['id_game']] as $img}
                    {if $img != 'main.jpg' && $img != 'mainv2.jpg'}
                    <div data-background-img-src="{$teplateImgPath}games/{$game['id_game']}/{$img}" style="background-image: url(&quot;{$teplateImgPath}games/{$game['id_game']}/{$img}&quot;);"></div>
                    {/if}
                    {/foreach}
                </div>
                <div class="tags">
                    <div class="tag" data-tag-index="0">Экшен</div>
                    <div class="tag" data-tag-index="1">Приключение</div>
                    <div class="tag" data-tag-index="2">Головоломка</div>
                    <div class="tag" data-tag-index="3">Кооператив</div>
                    <div class="tag" data-tag-index="4">Юмор</div>
                </div>    
            </a>
            <div class="content">
                <a href="/game/{$game['id_game']}/" class="title">
                    {$game['name_game']}
                </a>
                <div class="mid_container">
                    <div class="stats">
                        <div class="label">Все обзоры:</div>
                        <div class="value game_review_summary positive" data-tooltip-text="99% из 102,045 обзоров положительные.">Крайне положительные</div>
                        <div class="label">Дата выхода:</div>
                        <div class="value release_date">{$game['Date']}</div>
                    </div>
                    <div class="purchase_container">
                        <div class="purchase_area">
                            <div class="discount_block discount_block_large" data-price-final="37300">
                                {if $game['discount_game'] != 0}
                                <div class="discount_pct">-{$game['discount_game']}%</div>
                                <div class="discount_prices">
                                    <div class="discount_original_price">{$game['price_game']} pуб.</div>
                                    <div class="discount_final_price">{$game['discount_price_game']} pуб.</div>
                                </div>
                                {else}
                                <div class="discount_prices">
                                    <div class="discount_final_price">{$game['price_game']} pуб.</div>
                                </div>
                                {/if}
                            </div>
                            <div class="btn_addtocart {if $itemInCart != 0}hide{/if} addtocart" id="addtocart_{$game['id_game']}">
                                <a class="btnv6_green_white_innerfade btn_medium noicon" href="javascript: addtocart({$game['id_game']});">
                                    <span>В корзину</span>
                                </a>
                                <a class="btnv6_green_white_innerfade btn_medium icon" href="javascript: addtocart({$game['id_game']});">
                                    <span>
                                        <img class="ico_cart" src="https://steamstore-a.akamaihd.net/public/images/v6/ico/wishlist/ico_cart.png">
                                    </span>
                                </a>    
                            </div>
                            <div class="btn_addtocart {if $itemInCart == 0}hide{/if} removefromcart" id="removefromcart_{$game['id_game']}">
                                <a class="btnv6_green_white_innerfade btn_medium" href="javascript:removefromcart({$game['id_game']});">
                                    <span>Удалить</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower_container">
                <div class="platform_icons">
                    {foreach $Platforms[$game['id_game']] as $plat}
                        <span class="platform_img {$plat['name_platform']}"></span>
                    {/foreach}
                </div>
                    {if isset($arUser)}
                    <div class="lower_columns">               
                        <div class="addedon add_to_wishlist_area_success">
                            <div class="delete">
                                <a href="javascript: deletewishlist({$game['id_game']}, {$arUser['id_user']});">
                                    <span>
                                        Убрать
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    {/if}
                </div>
            </div>
        </div>
        {/foreach}
                <!-- END: Table -->
            </div>
        

        
    </div>
</div>
    <div class="nk-gap-2"></div>