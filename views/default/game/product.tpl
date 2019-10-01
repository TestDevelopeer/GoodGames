<div class="nk-main">

            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs custom-game-bread">


        <li class="custom-li-bread"><a href="/">Главная</a></li>


        <li style="font-size: 1em;"> > </li>

        <li class="custom-li-bread"><a href="/catalog/">Каталог</a></li>

        <li style="font-size: 1em;"> > </span></li>

        <li><span>{$rsGame['name_game']}</span></li>

    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

<div class="container">
                    <div class="row vertical-gap custom-roll-game-bg">

                    <div class="col-md-8">






                                        <!-- START: Image Slider -->
                                        <div class="nk-image-slider custom-game-slider" data-autoplay="5000">

                                            {if isset($namePhoto)}
                                            {foreach $namePhoto as $photo}
                                            {if $photo != 'main.jpg' && $photo != 'mainv2.jpg'}
                                            <div class="nk-image-slider-item">
                                                <img src="{$teplateImgPath}games/{$rsGame['id_game']}/{$photo}" alt="" class="nk-image-slider-img" data-thumb="{$teplateImgPath}games/{$rsGame['id_game']}/{$photo}">
                                            </div>
                                            {/if}
                                            {/foreach}
                                            {/if}
                                        </div>
                                        <!-- END: Image Slider -->
                        <!-- START: Add to Cart -->





                    </div>
                                        <div class="col-md-4">
                        <!-- START: Product Photos -->
                        <div class="nk-popup-gallery">
                            <div class="nk-gallery-item-box">
                                    <img src="{$teplateImgPath}games/{$rsGame['id_game']}/mainv2.jpg" alt="">
                            </div>
                            <div class="nk-product-description">
                            <div class="nk-gap-1"></div>
                            {if $rsParentGame == null}
                            <p>{$rsGame['description_game']}</p>
                            {else}
                            <p>Для запуска требуется Steam-версия игры <a href="/game/{$rsParentGame['id_game']}/">{$rsParentGame['name_game']}</a>.</p>
                            {/if}
                        </div>

                        <!-- START: Meta -->
                        <div class="nk-product-meta">
                            <div class="dev_row">
                                <div class="subtitle column custom-subtitle">Все обзоры:</div>
                                <div class="summary column custom-summary">
                                    <a href="#">В основном положительные</a>
                                    <span class="responsive_hidden">(1,092)</span>
                                </div>
                            </div>


                            <div class="release_date">
                                <div class="subtitle column custom-subtitle">Дата выхода:</div>
                                <div class="date">{$rsGame['Date']}</div>
                            </div>

                            <div class="dev_row">
                                <div class="subtitle column custom-subtitle">Разработчик:</div>
                                <div class="summary column custom-summary" id="developers_list">
                                    {if $rsParentGame == null}
                                    <a href="/catalog/search/developer/?searchname={$rsGame['Developer']}">{$rsGame['Developer']}
                                    </a>
                                    {else}
                                    <a href="/catalog/search/developer/?searchname={$rsParentGame['Developer']}">{$rsParentGame['Developer']}
                                    </a>
                                    {/if}
                                </div>
                            </div>

                            <div class="dev_row">
                                <div class="subtitle column custom-subtitle">Издатель:</div>
                                <div class="summary column custom-summary">
                                    {if $rsParentGame == null}
                                    <a href="/catalog/search/developer/?searchname={$rsGame['Developer']}">{$rsGame['Publisher']}</a>
                                    {else}
                                    <a href="/catalog/search/developer/?searchname={$rsParentGame['Developer']}">{$rsParentGame['Publisher']}</a>
                                    </a>
                                    {/if}
                                </div>
                            </div>

                            <div class="glance_ctn_responsive_right">
                                <div class="glance_tags_ctn popular_tags_ctn">
                                    <div class="glance_tags_label">Популярные метки для этого продукта:</div>
                                        <div class="glance_tags popular_tags">
                                        {if $rsParentGame == null}
                                        {foreach $rsGameTag as $tag name = tag}
                                        <a href="/catalog/search/tag/?searchname={$tag}" class="app_tag" style="">{$tag}</a>
                                        {/foreach}
                                        {else}
                                        {foreach $rsGameTag as $tag name = tag}
                                        <a href="/catalog/search/tag/?searchname={$tag}" class="app_tag" style="">{$tag}</a>
                                        {/foreach}
                                        {/if}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-gap"></div>
                        <!-- END: Meta -->
                        </div>
                        <!-- END: Product Photos -->
                    </div>
                    {if !isset($arUser)}
                    <div class="queue_overflow_ctn col-lg-12" style="padding-top: 0px;">
                        <div class="queue_ctn custom-queue_ctn">
                            <div class="queue_actions_ctn">
                            <p><a href="#" data-toggle="modal" data-target="#modalLogin">Войдите</a>, чтобы добавить этот продукт в список желаемого или пометить его как не интересующий вас</p>
                        </div>
                        </div>
                    </div>
                    {else}
                    <div class="queue_overflow_ctn col-lg-12" style="padding-top: 0px;">
                        <div class="queue_ctn in_queue custom-queue_ctn">
                        <div class="queue_actions_ctn">
                                <form id="next_in_queue_form" method="post" action="https://store.steampowered.com/app/552520" style="display: none;">
                                    <input type="hidden" name="sessionid" value="f9a33b6abcc64c3e232ecdf8">
                                    <input type="hidden" name="appid_to_clear_from_queue" value="899440">
                                    <input type="hidden" name="snr" value="1_5_9__1324">
                                </form>

                                                            <div class="queue_reason_description">
                                                                            Этот товар находится в вашем <a href="https://store.steampowered.com/explore/">списке рекомендаций</a>, потому что он популярен.                                                                    </div>


                                    {if $rsWishList == null}
                                    <div id="add_to_wishlist_area">
                                        <a class="btnv6_blue_hoverfade btn_medium" href="javascript: addwishlist({$rsGame['id_game']}, {$arUser['id_user']});" data-tooltip-text="Получать уведомление по электронной почте, если продукт из списка желаемого выпущен или продаётся по скидке.">
                                            <span>Добавить в список желаемого</span>
                                        </a>
                                    </div>
                                    <div id="add_to_wishlist_area_success" class="hide">
                                        <a href="javascript: deletewishlist({$rsGame['id_game']}, {$arUser['id_user']});" class="btnv6_blue_hoverfade btn_medium queue_btn_active" data-tooltip-text="Этот продукт уже есть в вашем списке желаемого. Нажмите, чтобы просмотреть ваш список желаемого.">
                                            <span><img src="https://steamstore-a.akamaihd.net/public/images/v6/ico/ico_selected.png" border="0">
                                            Убрать из списка желаемого</span>
                                        </a>
                                    </div>
                                    {else}
                                    <div id="add_to_wishlist_area" class="hide">
                                        <a class="btnv6_blue_hoverfade btn_medium" href="javascript: addwishlist({$rsGame['id_game']}, {$arUser['id_user']});" data-tooltip-text="Получать уведомление по электронной почте, если продукт из списка желаемого выпущен или продаётся по скидке.">
                                            <span>Добавить в список желаемого</span>
                                        </a>
                                    </div>
                                    <div id="add_to_wishlist_area_success">
                                        <a href="javascript: deletewishlist({$rsGame['id_game']}, {$arUser['id_user']});" class="btnv6_blue_hoverfade btn_medium queue_btn_active" data-tooltip-text="Этот продукт уже есть в вашем списке желаемого. Нажмите, чтобы просмотреть ваш список желаемого.">
                                            <span><img src="https://steamstore-a.akamaihd.net/public/images/v6/ico/ico_selected.png" border="0">
                                            Убрать из списка желаемого</span>
                                        </a>
                                    </div>
                                    {/if}
                                    <div id="add_to_wishlist_area_fail" style="display: none;">
                                        <b>Ой, извините!</b>
                                    </div>
                            <div style="clear: both;"></div>
                        </div>
                                                    <div class="queue_controls_description">Выберите один из вариантов выше.</div>
                                            </div>
                    </div>
                    {/if}
                </div>

    <div class="row custom-roll-game-bg">
        <div class="col-lg-8">
            <div class="nk-store-product">


                <!-- START: Share -->
                                        
                                        <div id="game_area_purchase">
                                            {if $rsParentGame != null}
                                            <div class="game_area_dlc_bubble game_area_bubble">
                                                <div class="content">
                                                    <h1 class="custom-dlc-h1">Дополнительный контент</h1>
                                                    <p class="custom-dlc-p">Для запуска требуется Steam-версия игры <a href="/game/{$rsParentGame['id_game']}/">{$rsParentGame['name_game']}</a>.</p>
                                                </div>
                                            </div>
                                            {/if}
                        <div class="game_area_purchase_game_wrapper">
                                <div class="game_area_purchase_game">
                                <div class="game_area_purchase_platform">
                                    <span class="platform_img steam"></span>
                                    {foreach $rsGamePlat as $plat}
                                    <span class="platform_img {if $plat == '1'}PC{else if $plat == '2'}PS4{else if $plat == '3'}XBOX{/if}"></span>
                                    {/foreach}
                                </div>
                                <h1 class="custom-dlc-h1">Купить {$rsGame['name_game']}</h1>
                                {if $rsParentGame != null}
                                    <p class="custom-dlc-p">Посетите страницу игры <a href="/game/{$rsParentGame['id_game']}/" target="_blank" rel="noreferrer">{$rsParentGame['name_game']}</a>, чтобы узнать подробнее</p>
                                {/if}
                                <div class="game_purchase_action">
                                <div class="game_purchase_action_bg">
                                {if $rsGame['discount_game'] == 0}
                                <div class="game_purchase_price price">
                                {$rsGame['price_game']} руб.</div>
                                {else}
                                <div class="discount_block game_purchase_discount"><div class="discount_pct">-{$rsGame['discount_game']}%</div><div class="discount_prices"><div class="discount_original_price">{$rsGame['price_game']} pуб.</div><div class="discount_final_price">{$rsGame['discount_price_game']} pуб.</div></div></div>
                                {/if}
                                <div class="btn_addtocart {if $itemInCart != 0}hide{/if} addtocart" id="addtocart_{$rsGame['id_game']}">
                                <a class="btnv6_green_white_innerfade btn_medium" href="javascript:addtocart({$rsGame['id_game']});">
                                    <span>В корзину</span>
                                </a>
                                </div>
                                <div class="btn_addtocart {if $itemInCart == 0}hide{/if} removefromcart" id="removefromcart_{$rsGame['id_game']}">
                                <a class="btnv6_green_white_innerfade btn_medium" href="javascript:removefromcart({$rsGame['id_game']});">
                                    <span>Удалить</span>
                                </a>
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>

                <div class="nk-post-share">
                    {if $rsParentGame == null}
                        {$rsSteamBuyLink['link_game']}
                    {else}
                        {$rsSteamBuyLink['steam']['link_game']}
                    {/if}
                </div>
                <!-- END: Share -->
                <div class="nk-gap-2"></div>
                {if $rsParentGame == 0}
                <div class="nk-accordion" id="accordion-1" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                        <div class="panel-heading custom-panel-head" role="tab" id="accordion-1-1-heading">
                            <a class="collapsed custom-collapsed-dls" data-toggle="collapse" data-parent="#accordion-1" href="#accordion-1-1" aria-expanded="true" aria-controls="accordion-1-1">
                                КОНТЕНТ ДЛЯ ЭТОЙ ИГРЫ <span class="panel-heading-arrow fa fa-angle-down"></span>
                            </a>
                        </div>
                        <div id="accordion-1-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-1-1-heading">
                            {foreach $rsOtherDlc as $dlc}
                            <a class="game_area_dlc_row odd ds_collapse_flag ds_collapse_flag_tiny app_impression_tracked" href="/game/{$dlc['id_game']}/">
                                <div class="game_area_dlc_price">
                                    <div class="discount_block discount_block_inline" data-price-final="21700">
                                        {if $dlc['discount_game'] != 0}
                                        <div class="discount_pct">-{$dlc['discount_game']}%</div>
                                        <div class="discount_prices dlc-discount_prices">
                                            <div class="discount_original_price">{$dlc['price_game']} pуб.</div>
                                            <div class="discount_final_price">{$dlc['discount_price_game']} pуб.</div>
                                        </div>
                                        {else}
                                        <div class="discount_prices dlc-discount_prices">
                                            <div class="discount_final_price">{$dlc['price_game']} pуб.</div>
                                        </div>
                                        {/if}
                                    </div>
                                </div>
                                <div class="game_area_dlc_name">
                                    {$dlc['name_game']}                   
                                </div>
                                <input type="hidden" name="subid[]" value="16729">
                                <div class="ds_options"><div></div></div>
                            </a>
                            {/foreach}
                        </div>
                    </div>
                </div>
                {/if}
                <div class="nk-gap-2"></div>
                {if $rsGameUpdates != null}
                <h3 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Недавние</span> обновления</span></h3>
                                <div class="post wide">
                                <div class="custom-game-container">
                                    <h2>{$rsGameUpdates['date_art']}</h2>
                                    <h1><a href="/article/{$rsGameUpdates['id_art']}/">{$rsGameUpdates['name_art']}</a></h1>
                                    {if $artPhoto != null}
                                    <img src="{$teplateImgPath}articles/{$rsGameUpdates['id_art']}/main.jpg">
                                    {else}
                                    <div>
                                        {$rsGameUpdates['text_art']}
                                    </div>
                                    {/if}
                                </div>
                                <div class="hr"></div>
                                <span class="comments"><a href="#">Все обновления</a></span>
                                <span class="more"><a href="/article/{$rsGameUpdates['id_art']}/">Подробнее</a></span>
                            </div>
                {/if}      
                            <!-- START: Related Products -->
            
           {if $rsParentGame == null} 
                <h3 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Другие</span> игры</span></h3>
           {else}
                <h3 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">ВЕСЬ ДОП. КОНТЕНТ ДЛЯ ЭТОЙ ИГРЫ</span></span></h3>
           {/if}
            <div class="nk-gap-1"></div>

    <div class="nk-carousel nk-carousel-x4" data-autoplay="5000" data-dots="false" data-cell-align="left" data-arrows="true">
        <div class="nk-carousel-inner custom-carousel-inner">
            {if $rsParentGame != null} {$rsRandomGames = $rsOtherDlc} {/if}

            {foreach $rsRandomGames as $game}
            <div>
                <div class="pl-2 pr-2">
                <div class="nk-product-cat-3">
                    <a class="nk-product-image {if isset($rsCheckGameCart[$game['id_game']])}img-game-in-cat in-cat-{$game['id_game']}{/if}" href="/game/{$game['id_game']}/">
                        <img src="{$teplateImgPath}games/{$game['id_game']}/main.jpg" alt="{$game['name_game']}">
                        {if isset($rsCheckGameCart[$game['id_game']])}
                            <div class="game-in-cat flag-{$game['id_game']}">В КОРЗИНЕ&nbsp;&nbsp;</div>
                        {/if}
                    </a>
                    <div class="nk-product-cont">
                        <div class="nk-gap"></div>
                        <h3 class="nk-product-title h6" style="margin-bottom: 0"><a href="/game/{$game['id_game']}/" class="store-best-sell-name">{$game['name_game']}</a></h3>
                            <!--{if $game['discount_game'] == 0}
                            <div class="nk-product-price">{$game['price_game']}р.</div>
                            {else}
                            <div class="nk-product-price"><s style="color: red;">{$game['price_game']}р.</s> {$game['discount_price_game']}р. <span class="tx-warning tx-12"><span class="tx-lato">{$game['discount_game']}%</span></span></div>
                            {/if}-->
                    </div>
                </div>
                {if $game['discount_game'] != 0}
                <div style="text-align: center;">
                    <div class="discount_pct">-{$game['discount_game']}%</div>
                    <div class="discount_block  discount_block_inline">
                        <div class="discount_prices">
                            <div class="discount_original_price">{$game['price_game']} pуб.</div>
                            <div class="discount_final_price">{$game['discount_price_game']} pуб.</div>
                        </div>
                    </div>
                </div>
                {else}
                <div style="text-align: center;">
                    <div class="discount_block  discount_block_inline">
                        <div class="discount_prices">
                            <div class="discount_final_price">{$game['price_game']} pуб.</div>
                        </div>
                    </div>
                </div>
                {/if}
                </div>
            </div>
            {/foreach}
        </div>
    </div>
            <!-- END: Related Products -->

                <div class="nk-gap-2"></div>
                <!-- START: Tabs -->
                <div class="nk-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item game-tabs">
                            <a onclick="getgamedesc({$rsGame['id_game']});" class="nav-link custom-game-nav-link" href="#tab-description" role="tab" data-toggle="tab">Описание</a>
                        </li>
                        <li class="nav-item game-tabs">
                            <a class="nav-link custom-game-nav-link" href="#tab-reviews" role="tab" data-toggle="tab">Обзоры ({$rsCntComments})</a>
                        </li>
                        <li class="nav-item game-tabs">
                            <a class="nav-link active custom-game-nav-link" href="#tab-qualit" role="tab" data-toggle="tab">Системные требования</a>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <!-- START: Tab Description -->
                        <div role="tabpanel" class="tab-pane custom-tab-pane fade" id="tab-description">
                            <div class="nk-gap"></div>
                            <div class="game_page_autocollapse_ctn collapsed">
                                <div class="game_page_autocollapse" style="max-height: 550px;">
                                    <h2>Об этой игре</h2>
                                    <div id="game_area_description" class="game_area_description">
                                        
                                        
                                    </div>
                                    <div class="game_page_autocollapse_fade">
                                        <div class="game_page_autocollapse_readmore">ЧИТАТЬ ДАЛЕЕ</div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-gap"></div>
                            {if $rsGame['pegi_rating'] == '18'}
                            <div class="game_page_autocollapse_ctn"><div class="game_page_autocollapse" style="max-height: none;">
                                    <div id="game_area_content_descriptors" class="game_area_description">
                                        <h2>Описание контента для взрослых</h2>
                                        <p>Разработчики описывают контент так:</p>
                                        <p><i>
                                        Это дополнение может содержать контент, не подходящий для всех возрастов или для просмотра на работе: Контент для взрослых              </i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {/if}
                            <div class="nk-product-info-row row vertical-gap">
                                <div class="col-md-5">
                                    <div class="nk-product-pegi">
                                        <div class="nk-gap"></div>
                                        <img src="{$teplateWebPath}assets/images/pegi/{$rsGame['pegi_rating']}.jpg" alt="">
                                        <div class="nk-product-pegi-cont">
                                            <strong class="text-white">Возрастной рейтинг:</strong>
                                            <div class="nk-gap"></div>
                                            Подходит для людей в возрасте от {$rsGame['pegi_rating']} лет и старше.
                                        </div>
                                        <div class="nk-gap"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- END: Tab Description -->

                        <!-- START: Tab Reviews -->
                        <div role="tabpanel" class="tab-pane fade" id="tab-reviews">
                            <div class="nk-info-box text-success hide" id="success-box">
                                <div class="nk-info-box-icon">
                                    <i class="ion-checkmark-round"></i>
                                </div>
                                <h3>Успешно!</h3>
                                <em>Спасибо за ваш обзор, он очень важен для нас.</em>
                            </div>
                        {if isset($arUser)}
                        {if $rsCheckUserReview['success'] == 0}
                        <div id="review-box">
                            <!-- START: Reply -->
                            <div class="nk-reply">
                                <div class="nk-form" id="review-form">

                                    <div class="nk-gap-1"></div>
                                    <textarea class="form-control required" name="message" rows="5" placeholder="Ваш отзыв *" aria-required="true"></textarea>
                                    <div class="nk-gap-1"></div>
                                    <div class="review_box nk-rating">
                                        <label for="review-rate-5">
                                            <a id="review-like" href="javascript:addreviewlike();" class="vote_header" data-tooltip-text="Смотреть полностью">
                                                <div class="thumb">
                                                    <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                                                </div>
                                                <div class="title ellipsis">Рекомендую</div>
                                            </a>
                                        </label>
                                        <label for="review-rate-4">
                                            <a id="review-dislike" href="javascript:addreviewdislike();" class="vote_header" data-tooltip-text="Смотреть полностью">
                                                <div class="thumb">
                                                    <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsDown_v6.png" width="40" height="40">
                                                </div>
                                                <div class="title ellipsis">Не рекомендую</div>
                                            </a>
                                        </label>
                                        <input type="text" hidden="" name="game_id" value="{$rsGame['id_game']}">
                                        <input type="text" hidden="" id="cnt_vote" name="cnt_vote" value="">
                                    </div>
                                    <button onclick="addreview();" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 float-right">Отправить</button>
                                </div>
                            </div>
                        </div>
                            <!-- END: Reply -->
                        {else}
                        <div class="nk-info-box text-warning">
                            <div class="nk-info-box-icon">
                                <i class="ion-android-notifications-none"></i>
                            </div>
                            <div class="nk-info-box-close nk-info-box-close-btn">
                                <i class="ion-close-round"></i>
                            </div>
                            <em>Вы уже оставили свой обзор на данную игру.</em>
                            <div class="nk-gap-1"></div>
                            <a href="/game/{$rsGame['id_game']}/#ReviewContentsummary{$arUser['id_user']}" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-warning">
                                Перейти
                            </a>
                        </div>
                        {/if}
                        {else}
                        <div class="nk-info-box text-info">
                            <div class="nk-info-box-icon">
                                <i class="ion-information"></i>
                            </div>
                            <h3>Войдите!</h3>
                            <em>Чтобы оставить свое мнение о данной игре, вам необходимо авторизоваться.</em>
                            <div class="nk-gap-1"></div>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-info" data-toggle="modal" data-target="#modalLogin">
                                <span>Войти</span>
                            </a>
                        </div>
                        {/if}

<div class="clearfix"></div>
<div class="nk-gap-2"></div>
<div class="nk-comments">

    {foreach $rsComments as $comment}
    <div class="review_box ">
        <div id="ReviewContentsummary{$comment['auth_user_id']}">
            <div class="leftcol">
                <div class="avatar">
                    <a href="/user/profile/{$comment['auth_user_id']}/">
                        <div class="playerAvatar">
                            <img {if $rsUserComInfo[$comment['id_review']]['user_have_photo'] == 1}
                                    src="{$teplateImgPath}users/{$comment['auth_user_id']}/main.jpg"
                                 {else}
                                    src="{$teplateImgPath}users/default/default.png"
                                 {/if}
                                 width="32" height="32">
                        </div>
                    </a>
                </div>
                <div class="persona_name">
                    <a href="/user/profile/{$comment['auth_user_id']}/">{$comment['user_name_review']}</a>
                </div>
                <div class="num_owned_games">
                    <a href="/user/history/{$comment['auth_user_id']}/">Товаров на аккаунте: {$cntOrders[$comment['auth_user_id']]}</a>
                </div>
                <div class="num_reviews">
                    <a href="/reviews/user/{$comment['auth_user_id']}/">Обзоров: {$cntUserCom[$comment['auth_user_id']]}</a>
                </div>
            </div>
            <div class="rightcol">
                {if $comment['vote_review'] == 'like'}
                <a href="javascript:;" class="vote_header">
                    <div class="thumb">
                        <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                    </div>
                    <div class="title ellipsis">Рекомендую</div>
                </a>
                {else}
                <a href="javascript:;" class="vote_header">
                    <div class="thumb">
                        <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsDown_v6.png" width="40" height="40">
                    </div>
                    <div class="title ellipsis">Не рекомендую</div>
                </a>
                {/if}
                <div class="postedDate">Опубликовано: {$comment['review_date']}</div>
                <div class="content">
                    {$comment['text_review']}
                    <div class="gradient"></div>
                </div>
                <div class="hr"></div>
                {if isset($arUser)}
                {if $rsRevOfRev[$comment['id_review']] == 0}
                <div class="control_block" id="control_block_{$comment['id_review']}">
                    <span class="text">Был ли этот обзор полезен?</span>
                    <a href="javascript:;" onclick="UserReviewVoteUp({$comment['id_review']}, 1, {$arUser['id_user']});" class="btnv6_grey_black btn_small_thin ico_hover "><span><i class="ico16 thumb_upv6"></i> Да</span></a>
                    <a href="javascript:;" onclick="UserReviewVoteUp({$comment['id_review']}, 2, {$arUser['id_user']});" class="btnv6_grey_black btn_small_thin ico_hover "><span><i class="ico16 funny"></i> Забавный</span></a>
                </div>
                {else}
                <div class="control_block">
                    <span class="text">Был ли этот обзор полезен? Вы ответили</span>
                    {if $rsRevOfRev[$comment['id_review']]['rev_likes'] == 1}
                    <a href="javascript:;" class="btnv6_grey_black btn_small_thin ico_hover "><span><i class="ico16 thumb_upv6"></i> Да</span></a>
                    {else}
                    <a href="javascript:;" class="btnv6_grey_black btn_small_thin ico_hover "><span><i class="ico16 funny"></i> Забавный</span></a>
                    {/if}
                </div>
                {/if}
                {/if}
                    <div class="vote_info">
                        Пользователей, посчитавших этот обзор полезным: {$cntLikesRev[$comment['id_review']]}
                        <br>Пользователей, посчитавших этот обзор забавным: {$cntUsefulRev[$comment['id_review']]}
                    </div>
            </div>
            <div style="clear: left;"></div>
        </div>
    </div>
    {/foreach}

</div>
</div>
                        <!-- END: Tab Reviews -->

                                                <!-- START: Tab Description -->
                        <div role="tabpanel" class="tab-pane fade show active" id="tab-qualit">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="nk-gap"></div>
                                    <ul class="custom-system-req">
                                    <strong>Минимальные:</strong><br>
                                        <ul class="bb_ul">
                                            <li>Требуются 64-разрядные процессор и операционная система<br></li>
                                            <li>
                                                <strong>ОС:</strong> {$rsMinReq['OS']}<br>
                                            </li>
                                            <li>
                                                <strong>Процессор:</strong> {$rsMinReq['Processor']}<br>
                                            </li>
                                            <li>
                                                <strong>Оперативная память:</strong> {$rsMinReq['OZU']}<br>
                                            </li>
                                            <li>
                                                <strong>Видеокарта:</strong> {$rsMinReq['GPU']}<br>
                                            </li>
                                            <li>
                                                <strong>DirectX:</strong> {$rsMinReq['DirectX']}<br>
                                            </li>
                                            <li>
                                                <strong>Сеть:</strong> Широкополосное подключение к интернету<br>
                                            </li>
                                            <li><strong>Место на диске:</strong> {$rsMinReq['Memory']}</li>
                                        </ul>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="nk-gap"></div>
                                    <ul class="custom-system-req">
                                    <strong>Рекомендованные:</strong><br>
                                    <ul class="bb_ul">
                                        <li>Требуются 64-разрядные процессор и операционная система<br></li>
                                        <li>
                                            <strong>ОС:</strong> {$rsRecommendedReq['OS']}<br>
                                        </li>
                                        <li>
                                            <strong>Процессор:</strong> {$rsRecommendedReq['Processor']}<br>
                                        </li>
                                        <li>
                                            <strong>Оперативная память:</strong> {$rsRecommendedReq['OZU']}<br>
                                        </li>
                                        <li>
                                            <strong>Видеокарта:</strong> {$rsRecommendedReq['GPU']}<br>
                                        </li>
                                        <li>
                                            <strong>DirectX:</strong> {$rsRecommendedReq['DirectX']}<br>
                                        </li>
                                        <li>
                                            <strong>Сеть:</strong> Широкополосное подключение к интернету<br>
                                        </li>
                                        <li><strong>Место на диске:</strong> {$rsRecommendedReq['Memory']}</li>
                                    </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END: Tab Description -->

                    </div>
                </div>
                <!-- END: Tabs -->
            </div>


        </div>
