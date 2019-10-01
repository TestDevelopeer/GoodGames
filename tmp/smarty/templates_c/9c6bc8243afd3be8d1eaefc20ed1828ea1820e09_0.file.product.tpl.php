<?php
/* Smarty version 3.1.30, created on 2019-06-23 21:32:05
  from "D:\GitHub\gg.com\views\default\game\product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0fc5a50f3ca1_23185511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c6bc8243afd3be8d1eaefc20ed1828ea1820e09' => 
    array (
      0 => 'D:\\GitHub\\gg.com\\views\\default\\game\\product.tpl',
      1 => 1552339145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fc5a50f3ca1_23185511 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="nk-main">

            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs custom-game-bread">


        <li class="custom-li-bread"><a href="/">Главная</a></li>


        <li style="font-size: 1em;"> > </li>

        <li class="custom-li-bread"><a href="/catalog/">Каталог</a></li>

        <li style="font-size: 1em;"> > </span></li>

        <li><span><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['name_game'];?>
</span></li>

    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

<div class="container">
                    <div class="row vertical-gap custom-roll-game-bg">

                    <div class="col-md-8">






                                        <!-- START: Image Slider -->
                                        <div class="nk-image-slider custom-game-slider" data-autoplay="5000">

                                            <?php if (isset($_smarty_tpl->tpl_vars['namePhoto']->value)) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['namePhoto']->value, 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['photo']->value != 'main.jpg' && $_smarty_tpl->tpl_vars['photo']->value != 'mainv2.jpg') {?>
                                            <div class="nk-image-slider-item">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="" class="nk-image-slider-img" data-thumb="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
">
                                            </div>
                                            <?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            <?php }?>
                                        </div>
                                        <!-- END: Image Slider -->
                        <!-- START: Add to Cart -->





                    </div>
                                        <div class="col-md-4">
                        <!-- START: Product Photos -->
                        <div class="nk-popup-gallery">
                            <div class="nk-gallery-item-box">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
/mainv2.jpg" alt="">
                            </div>
                            <div class="nk-product-description">
                            <div class="nk-gap-1"></div>
                            <?php if ($_smarty_tpl->tpl_vars['rsParentGame']->value == null) {?>
                            <p><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['description_game'];?>
</p>
                            <?php } else { ?>
                            <p>Для запуска требуется Steam-версия игры <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsParentGame']->value['id_game'];?>
/"><?php echo $_smarty_tpl->tpl_vars['rsParentGame']->value['name_game'];?>
</a>.</p>
                            <?php }?>
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
                                <div class="date"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['Date'];?>
</div>
                            </div>

                            <div class="dev_row">
                                <div class="subtitle column custom-subtitle">Разработчик:</div>
                                <div class="summary column custom-summary" id="developers_list">
                                    <?php if ($_smarty_tpl->tpl_vars['rsParentGame']->value == null) {?>
                                    <a href="/catalog/search/developer/?searchname=<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['Developer'];?>
"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['Developer'];?>

                                    </a>
                                    <?php } else { ?>
                                    <a href="/catalog/search/developer/?searchname=<?php echo $_smarty_tpl->tpl_vars['rsParentGame']->value['Developer'];?>
"><?php echo $_smarty_tpl->tpl_vars['rsParentGame']->value['Developer'];?>

                                    </a>
                                    <?php }?>
                                </div>
                            </div>

                            <div class="dev_row">
                                <div class="subtitle column custom-subtitle">Издатель:</div>
                                <div class="summary column custom-summary">
                                    <?php if ($_smarty_tpl->tpl_vars['rsParentGame']->value == null) {?>
                                    <a href="/catalog/search/developer/?searchname=<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['Developer'];?>
"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['Publisher'];?>
</a>
                                    <?php } else { ?>
                                    <a href="/catalog/search/developer/?searchname=<?php echo $_smarty_tpl->tpl_vars['rsParentGame']->value['Developer'];?>
"><?php echo $_smarty_tpl->tpl_vars['rsParentGame']->value['Publisher'];?>
</a>
                                    </a>
                                    <?php }?>
                                </div>
                            </div>

                            <div class="glance_ctn_responsive_right">
                                <div class="glance_tags_ctn popular_tags_ctn">
                                    <div class="glance_tags_label">Популярные метки для этого продукта:</div>
                                        <div class="glance_tags popular_tags">
                                        <?php if ($_smarty_tpl->tpl_vars['rsParentGame']->value == null) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsGameTag']->value, 'tag', false, NULL, 'tag', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
                                        <a href="/catalog/search/tag/?searchname=<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
" class="app_tag" style=""><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</a>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        <?php } else { ?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsGameTag']->value, 'tag', false, NULL, 'tag', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
                                        <a href="/catalog/search/tag/?searchname=<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
" class="app_tag" style=""><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</a>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-gap"></div>
                        <!-- END: Meta -->
                        </div>
                        <!-- END: Product Photos -->
                    </div>
                    <?php if (!isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
                    <div class="queue_overflow_ctn col-lg-12" style="padding-top: 0px;">
                        <div class="queue_ctn custom-queue_ctn">
                            <div class="queue_actions_ctn">
                            <p><a href="#" data-toggle="modal" data-target="#modalLogin">Войдите</a>, чтобы добавить этот продукт в список желаемого или пометить его как не интересующий вас</p>
                        </div>
                        </div>
                    </div>
                    <?php } else { ?>
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


                                    <?php if ($_smarty_tpl->tpl_vars['rsWishList']->value == null) {?>
                                    <div id="add_to_wishlist_area">
                                        <a class="btnv6_blue_hoverfade btn_medium" href="javascript: addwishlist(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
, <?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
);" data-tooltip-text="Получать уведомление по электронной почте, если продукт из списка желаемого выпущен или продаётся по скидке.">
                                            <span>Добавить в список желаемого</span>
                                        </a>
                                    </div>
                                    <div id="add_to_wishlist_area_success" class="hide">
                                        <a href="javascript: deletewishlist(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
, <?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
);" class="btnv6_blue_hoverfade btn_medium queue_btn_active" data-tooltip-text="Этот продукт уже есть в вашем списке желаемого. Нажмите, чтобы просмотреть ваш список желаемого.">
                                            <span><img src="https://steamstore-a.akamaihd.net/public/images/v6/ico/ico_selected.png" border="0">
                                            Убрать из списка желаемого</span>
                                        </a>
                                    </div>
                                    <?php } else { ?>
                                    <div id="add_to_wishlist_area" class="hide">
                                        <a class="btnv6_blue_hoverfade btn_medium" href="javascript: addwishlist(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
, <?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
);" data-tooltip-text="Получать уведомление по электронной почте, если продукт из списка желаемого выпущен или продаётся по скидке.">
                                            <span>Добавить в список желаемого</span>
                                        </a>
                                    </div>
                                    <div id="add_to_wishlist_area_success">
                                        <a href="javascript: deletewishlist(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
, <?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
);" class="btnv6_blue_hoverfade btn_medium queue_btn_active" data-tooltip-text="Этот продукт уже есть в вашем списке желаемого. Нажмите, чтобы просмотреть ваш список желаемого.">
                                            <span><img src="https://steamstore-a.akamaihd.net/public/images/v6/ico/ico_selected.png" border="0">
                                            Убрать из списка желаемого</span>
                                        </a>
                                    </div>
                                    <?php }?>
                                    <div id="add_to_wishlist_area_fail" style="display: none;">
                                        <b>Ой, извините!</b>
                                    </div>
                            <div style="clear: both;"></div>
                        </div>
                                                    <div class="queue_controls_description">Выберите один из вариантов выше.</div>
                                            </div>
                    </div>
                    <?php }?>
                </div>

    <div class="row custom-roll-game-bg">
        <div class="col-lg-8">
            <div class="nk-store-product">


                <!-- START: Share -->
                                        
                                        <div id="game_area_purchase">
                                            <?php if ($_smarty_tpl->tpl_vars['rsParentGame']->value != null) {?>
                                            <div class="game_area_dlc_bubble game_area_bubble">
                                                <div class="content">
                                                    <h1 class="custom-dlc-h1">Дополнительный контент</h1>
                                                    <p class="custom-dlc-p">Для запуска требуется Steam-версия игры <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsParentGame']->value['id_game'];?>
/"><?php echo $_smarty_tpl->tpl_vars['rsParentGame']->value['name_game'];?>
</a>.</p>
                                                </div>
                                            </div>
                                            <?php }?>
                        <div class="game_area_purchase_game_wrapper">
                                <div class="game_area_purchase_game">
                                <div class="game_area_purchase_platform">
                                    <span class="platform_img steam"></span>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsGamePlat']->value, 'plat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['plat']->value) {
?>
                                    <span class="platform_img <?php if ($_smarty_tpl->tpl_vars['plat']->value == '1') {?>PC<?php } elseif ($_smarty_tpl->tpl_vars['plat']->value == '2') {?>PS4<?php } elseif ($_smarty_tpl->tpl_vars['plat']->value == '3') {?>XBOX<?php }?>"></span>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </div>
                                <h1 class="custom-dlc-h1">Купить <?php echo $_smarty_tpl->tpl_vars['rsGame']->value['name_game'];?>
</h1>
                                <?php if ($_smarty_tpl->tpl_vars['rsParentGame']->value != null) {?>
                                    <p class="custom-dlc-p">Посетите страницу игры <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsParentGame']->value['id_game'];?>
/" target="_blank" rel="noreferrer"><?php echo $_smarty_tpl->tpl_vars['rsParentGame']->value['name_game'];?>
</a>, чтобы узнать подробнее</p>
                                <?php }?>
                                <div class="game_purchase_action">
                                <div class="game_purchase_action_bg">
                                <?php if ($_smarty_tpl->tpl_vars['rsGame']->value['discount_game'] == 0) {?>
                                <div class="game_purchase_price price">
                                <?php echo $_smarty_tpl->tpl_vars['rsGame']->value['price_game'];?>
 руб.</div>
                                <?php } else { ?>
                                <div class="discount_block game_purchase_discount"><div class="discount_pct">-<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['discount_game'];?>
%</div><div class="discount_prices"><div class="discount_original_price"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['price_game'];?>
 pуб.</div><div class="discount_final_price"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['discount_price_game'];?>
 pуб.</div></div></div>
                                <?php }?>
                                <div class="btn_addtocart <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value != 0) {?>hide<?php }?> addtocart" id="addtocart_<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
">
                                <a class="btnv6_green_white_innerfade btn_medium" href="javascript:addtocart(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);">
                                    <span>В корзину</span>
                                </a>
                                </div>
                                <div class="btn_addtocart <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value == 0) {?>hide<?php }?> removefromcart" id="removefromcart_<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
">
                                <a class="btnv6_green_white_innerfade btn_medium" href="javascript:removefromcart(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);">
                                    <span>Удалить</span>
                                </a>
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>

                <div class="nk-post-share">
                    <?php if ($_smarty_tpl->tpl_vars['rsParentGame']->value == null) {?>
                        <?php echo $_smarty_tpl->tpl_vars['rsSteamBuyLink']->value['link_game'];?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['rsSteamBuyLink']->value['steam']['link_game'];?>

                    <?php }?>
                </div>
                <!-- END: Share -->
                <div class="nk-gap-2"></div>
                <?php if ($_smarty_tpl->tpl_vars['rsParentGame']->value == 0) {?>
                <div class="nk-accordion" id="accordion-1" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                        <div class="panel-heading custom-panel-head" role="tab" id="accordion-1-1-heading">
                            <a class="collapsed custom-collapsed-dls" data-toggle="collapse" data-parent="#accordion-1" href="#accordion-1-1" aria-expanded="true" aria-controls="accordion-1-1">
                                КОНТЕНТ ДЛЯ ЭТОЙ ИГРЫ <span class="panel-heading-arrow fa fa-angle-down"></span>
                            </a>
                        </div>
                        <div id="accordion-1-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-1-1-heading">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsOtherDlc']->value, 'dlc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dlc']->value) {
?>
                            <a class="game_area_dlc_row odd ds_collapse_flag ds_collapse_flag_tiny app_impression_tracked" href="/game/<?php echo $_smarty_tpl->tpl_vars['dlc']->value['id_game'];?>
/">
                                <div class="game_area_dlc_price">
                                    <div class="discount_block discount_block_inline" data-price-final="21700">
                                        <?php if ($_smarty_tpl->tpl_vars['dlc']->value['discount_game'] != 0) {?>
                                        <div class="discount_pct">-<?php echo $_smarty_tpl->tpl_vars['dlc']->value['discount_game'];?>
%</div>
                                        <div class="discount_prices dlc-discount_prices">
                                            <div class="discount_original_price"><?php echo $_smarty_tpl->tpl_vars['dlc']->value['price_game'];?>
 pуб.</div>
                                            <div class="discount_final_price"><?php echo $_smarty_tpl->tpl_vars['dlc']->value['discount_price_game'];?>
 pуб.</div>
                                        </div>
                                        <?php } else { ?>
                                        <div class="discount_prices dlc-discount_prices">
                                            <div class="discount_final_price"><?php echo $_smarty_tpl->tpl_vars['dlc']->value['price_game'];?>
 pуб.</div>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="game_area_dlc_name">
                                    <?php echo $_smarty_tpl->tpl_vars['dlc']->value['name_game'];?>
                   
                                </div>
                                <input type="hidden" name="subid[]" value="16729">
                                <div class="ds_options"><div></div></div>
                            </a>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                    </div>
                </div>
                <?php }?>
                <div class="nk-gap-2"></div>
                <?php if ($_smarty_tpl->tpl_vars['rsGameUpdates']->value != null) {?>
                <h3 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Недавние</span> обновления</span></h3>
                                <div class="post wide">
                                <div class="custom-game-container">
                                    <h2><?php echo $_smarty_tpl->tpl_vars['rsGameUpdates']->value['date_art'];?>
</h2>
                                    <h1><a href="/article/<?php echo $_smarty_tpl->tpl_vars['rsGameUpdates']->value['id_art'];?>
/"><?php echo $_smarty_tpl->tpl_vars['rsGameUpdates']->value['name_art'];?>
</a></h1>
                                    <?php if ($_smarty_tpl->tpl_vars['artPhoto']->value != null) {?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['rsGameUpdates']->value['id_art'];?>
/main.jpg">
                                    <?php } else { ?>
                                    <div>
                                        <?php echo $_smarty_tpl->tpl_vars['rsGameUpdates']->value['text_art'];?>

                                    </div>
                                    <?php }?>
                                </div>
                                <div class="hr"></div>
                                <span class="comments"><a href="#">Все обновления</a></span>
                                <span class="more"><a href="/article/<?php echo $_smarty_tpl->tpl_vars['rsGameUpdates']->value['id_art'];?>
/">Подробнее</a></span>
                            </div>
                <?php }?>      
                            <!-- START: Related Products -->
            
           <?php if ($_smarty_tpl->tpl_vars['rsParentGame']->value == null) {?> 
                <h3 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Другие</span> игры</span></h3>
           <?php } else { ?>
                <h3 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">ВЕСЬ ДОП. КОНТЕНТ ДЛЯ ЭТОЙ ИГРЫ</span></span></h3>
           <?php }?>
            <div class="nk-gap-1"></div>

    <div class="nk-carousel nk-carousel-x4" data-autoplay="5000" data-dots="false" data-cell-align="left" data-arrows="true">
        <div class="nk-carousel-inner custom-carousel-inner">
            <?php if ($_smarty_tpl->tpl_vars['rsParentGame']->value != null) {?> <?php $_smarty_tpl->_assignInScope('rsRandomGames', $_smarty_tpl->tpl_vars['rsOtherDlc']->value);
?> <?php }?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsRandomGames']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
            <div>
                <div class="pl-2 pr-2">
                <div class="nk-product-cat-3">
                    <a class="nk-product-image <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['game']->value['id_game']])) {?>img-game-in-cat in-cat-<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];
}?>" href="/game/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
/">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['game']->value['name_game'];?>
">
                        <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['game']->value['id_game']])) {?>
                            <div class="game-in-cat flag-<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
">В КОРЗИНЕ&nbsp;&nbsp;</div>
                        <?php }?>
                    </a>
                    <div class="nk-product-cont">
                        <div class="nk-gap"></div>
                        <h3 class="nk-product-title h6" style="margin-bottom: 0"><a href="/game/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
/" class="store-best-sell-name"><?php echo $_smarty_tpl->tpl_vars['game']->value['name_game'];?>
</a></h3>
                            <!--<?php if ($_smarty_tpl->tpl_vars['game']->value['discount_game'] == 0) {?>
                            <div class="nk-product-price"><?php echo $_smarty_tpl->tpl_vars['game']->value['price_game'];?>
р.</div>
                            <?php } else { ?>
                            <div class="nk-product-price"><s style="color: red;"><?php echo $_smarty_tpl->tpl_vars['game']->value['price_game'];?>
р.</s> <?php echo $_smarty_tpl->tpl_vars['game']->value['discount_price_game'];?>
р. <span class="tx-warning tx-12"><span class="tx-lato"><?php echo $_smarty_tpl->tpl_vars['game']->value['discount_game'];?>
%</span></span></div>
                            <?php }?>-->
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['game']->value['discount_game'] != 0) {?>
                <div style="text-align: center;">
                    <div class="discount_pct">-<?php echo $_smarty_tpl->tpl_vars['game']->value['discount_game'];?>
%</div>
                    <div class="discount_block  discount_block_inline">
                        <div class="discount_prices">
                            <div class="discount_original_price"><?php echo $_smarty_tpl->tpl_vars['game']->value['price_game'];?>
 pуб.</div>
                            <div class="discount_final_price"><?php echo $_smarty_tpl->tpl_vars['game']->value['discount_price_game'];?>
 pуб.</div>
                        </div>
                    </div>
                </div>
                <?php } else { ?>
                <div style="text-align: center;">
                    <div class="discount_block  discount_block_inline">
                        <div class="discount_prices">
                            <div class="discount_final_price"><?php echo $_smarty_tpl->tpl_vars['game']->value['price_game'];?>
 pуб.</div>
                        </div>
                    </div>
                </div>
                <?php }?>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
            <!-- END: Related Products -->

                <div class="nk-gap-2"></div>
                <!-- START: Tabs -->
                <div class="nk-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item game-tabs">
                            <a onclick="getgamedesc(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);" class="nav-link custom-game-nav-link" href="#tab-description" role="tab" data-toggle="tab">Описание</a>
                        </li>
                        <li class="nav-item game-tabs">
                            <a class="nav-link custom-game-nav-link" href="#tab-reviews" role="tab" data-toggle="tab">Обзоры (<?php echo $_smarty_tpl->tpl_vars['rsCntComments']->value;?>
)</a>
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
                            <?php if ($_smarty_tpl->tpl_vars['rsGame']->value['pegi_rating'] == '18') {?>
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
                            <?php }?>
                            <div class="nk-product-info-row row vertical-gap">
                                <div class="col-md-5">
                                    <div class="nk-product-pegi">
                                        <div class="nk-gap"></div>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/pegi/<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['pegi_rating'];?>
.jpg" alt="">
                                        <div class="nk-product-pegi-cont">
                                            <strong class="text-white">Возрастной рейтинг:</strong>
                                            <div class="nk-gap"></div>
                                            Подходит для людей в возрасте от <?php echo $_smarty_tpl->tpl_vars['rsGame']->value['pegi_rating'];?>
 лет и старше.
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
                        <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
                        <?php if ($_smarty_tpl->tpl_vars['rsCheckUserReview']->value['success'] == 0) {?>
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
                                        <input type="text" hidden="" name="game_id" value="<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
">
                                        <input type="text" hidden="" id="cnt_vote" name="cnt_vote" value="">
                                    </div>
                                    <button onclick="addreview();" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 float-right">Отправить</button>
                                </div>
                            </div>
                        </div>
                            <!-- END: Reply -->
                        <?php } else { ?>
                        <div class="nk-info-box text-warning">
                            <div class="nk-info-box-icon">
                                <i class="ion-android-notifications-none"></i>
                            </div>
                            <div class="nk-info-box-close nk-info-box-close-btn">
                                <i class="ion-close-round"></i>
                            </div>
                            <em>Вы уже оставили свой обзор на данную игру.</em>
                            <div class="nk-gap-1"></div>
                            <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
/#ReviewContentsummary<?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-warning">
                                Перейти
                            </a>
                        </div>
                        <?php }?>
                        <?php } else { ?>
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
                        <?php }?>

<div class="clearfix"></div>
<div class="nk-gap-2"></div>
<div class="nk-comments">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsComments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
    <div class="review_box ">
        <div id="ReviewContentsummary<?php echo $_smarty_tpl->tpl_vars['comment']->value['auth_user_id'];?>
">
            <div class="leftcol">
                <div class="avatar">
                    <a href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['comment']->value['auth_user_id'];?>
/">
                        <div class="playerAvatar">
                            <img <?php if ($_smarty_tpl->tpl_vars['rsUserComInfo']->value[$_smarty_tpl->tpl_vars['comment']->value['id_review']]['user_have_photo'] == 1) {?>
                                    src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['comment']->value['auth_user_id'];?>
/main.jpg"
                                 <?php } else { ?>
                                    src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.png"
                                 <?php }?>
                                 width="32" height="32">
                        </div>
                    </a>
                </div>
                <div class="persona_name">
                    <a href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['comment']->value['auth_user_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['comment']->value['user_name_review'];?>
</a>
                </div>
                <div class="num_owned_games">
                    <a href="/user/history/<?php echo $_smarty_tpl->tpl_vars['comment']->value['auth_user_id'];?>
/">Товаров на аккаунте: <?php echo $_smarty_tpl->tpl_vars['cntOrders']->value[$_smarty_tpl->tpl_vars['comment']->value['auth_user_id']];?>
</a>
                </div>
                <div class="num_reviews">
                    <a href="/reviews/user/<?php echo $_smarty_tpl->tpl_vars['comment']->value['auth_user_id'];?>
/">Обзоров: <?php echo $_smarty_tpl->tpl_vars['cntUserCom']->value[$_smarty_tpl->tpl_vars['comment']->value['auth_user_id']];?>
</a>
                </div>
            </div>
            <div class="rightcol">
                <?php if ($_smarty_tpl->tpl_vars['comment']->value['vote_review'] == 'like') {?>
                <a href="javascript:;" class="vote_header">
                    <div class="thumb">
                        <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsUp_v6.png" width="40" height="40">
                    </div>
                    <div class="title ellipsis">Рекомендую</div>
                </a>
                <?php } else { ?>
                <a href="javascript:;" class="vote_header">
                    <div class="thumb">
                        <img src="https://steamstore-a.akamaihd.net/public/shared/images/userreviews/icon_thumbsDown_v6.png" width="40" height="40">
                    </div>
                    <div class="title ellipsis">Не рекомендую</div>
                </a>
                <?php }?>
                <div class="postedDate">Опубликовано: <?php echo $_smarty_tpl->tpl_vars['comment']->value['review_date'];?>
</div>
                <div class="content">
                    <?php echo $_smarty_tpl->tpl_vars['comment']->value['text_review'];?>

                    <div class="gradient"></div>
                </div>
                <div class="hr"></div>
                <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['rsRevOfRev']->value[$_smarty_tpl->tpl_vars['comment']->value['id_review']] == 0) {?>
                <div class="control_block" id="control_block_<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_review'];?>
">
                    <span class="text">Был ли этот обзор полезен?</span>
                    <a href="javascript:;" onclick="UserReviewVoteUp(<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_review'];?>
, 1, <?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
);" class="btnv6_grey_black btn_small_thin ico_hover "><span><i class="ico16 thumb_upv6"></i> Да</span></a>
                    <a href="javascript:;" onclick="UserReviewVoteUp(<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_review'];?>
, 2, <?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
);" class="btnv6_grey_black btn_small_thin ico_hover "><span><i class="ico16 funny"></i> Забавный</span></a>
                </div>
                <?php } else { ?>
                <div class="control_block">
                    <span class="text">Был ли этот обзор полезен? Вы ответили</span>
                    <?php if ($_smarty_tpl->tpl_vars['rsRevOfRev']->value[$_smarty_tpl->tpl_vars['comment']->value['id_review']]['rev_likes'] == 1) {?>
                    <a href="javascript:;" class="btnv6_grey_black btn_small_thin ico_hover "><span><i class="ico16 thumb_upv6"></i> Да</span></a>
                    <?php } else { ?>
                    <a href="javascript:;" class="btnv6_grey_black btn_small_thin ico_hover "><span><i class="ico16 funny"></i> Забавный</span></a>
                    <?php }?>
                </div>
                <?php }?>
                <?php }?>
                    <div class="vote_info">
                        Пользователей, посчитавших этот обзор полезным: <?php echo $_smarty_tpl->tpl_vars['cntLikesRev']->value[$_smarty_tpl->tpl_vars['comment']->value['id_review']];?>

                        <br>Пользователей, посчитавших этот обзор забавным: <?php echo $_smarty_tpl->tpl_vars['cntUsefulRev']->value[$_smarty_tpl->tpl_vars['comment']->value['id_review']];?>

                    </div>
            </div>
            <div style="clear: left;"></div>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


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
                                                <strong>ОС:</strong> <?php echo $_smarty_tpl->tpl_vars['rsMinReq']->value['OS'];?>
<br>
                                            </li>
                                            <li>
                                                <strong>Процессор:</strong> <?php echo $_smarty_tpl->tpl_vars['rsMinReq']->value['Processor'];?>
<br>
                                            </li>
                                            <li>
                                                <strong>Оперативная память:</strong> <?php echo $_smarty_tpl->tpl_vars['rsMinReq']->value['OZU'];?>
<br>
                                            </li>
                                            <li>
                                                <strong>Видеокарта:</strong> <?php echo $_smarty_tpl->tpl_vars['rsMinReq']->value['GPU'];?>
<br>
                                            </li>
                                            <li>
                                                <strong>DirectX:</strong> <?php echo $_smarty_tpl->tpl_vars['rsMinReq']->value['DirectX'];?>
<br>
                                            </li>
                                            <li>
                                                <strong>Сеть:</strong> Широкополосное подключение к интернету<br>
                                            </li>
                                            <li><strong>Место на диске:</strong> <?php echo $_smarty_tpl->tpl_vars['rsMinReq']->value['Memory'];?>
</li>
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
                                            <strong>ОС:</strong> <?php echo $_smarty_tpl->tpl_vars['rsRecommendedReq']->value['OS'];?>
<br>
                                        </li>
                                        <li>
                                            <strong>Процессор:</strong> <?php echo $_smarty_tpl->tpl_vars['rsRecommendedReq']->value['Processor'];?>
<br>
                                        </li>
                                        <li>
                                            <strong>Оперативная память:</strong> <?php echo $_smarty_tpl->tpl_vars['rsRecommendedReq']->value['OZU'];?>
<br>
                                        </li>
                                        <li>
                                            <strong>Видеокарта:</strong> <?php echo $_smarty_tpl->tpl_vars['rsRecommendedReq']->value['GPU'];?>
<br>
                                        </li>
                                        <li>
                                            <strong>DirectX:</strong> <?php echo $_smarty_tpl->tpl_vars['rsRecommendedReq']->value['DirectX'];?>
<br>
                                        </li>
                                        <li>
                                            <strong>Сеть:</strong> Широкополосное подключение к интернету<br>
                                        </li>
                                        <li><strong>Место на диске:</strong> <?php echo $_smarty_tpl->tpl_vars['rsRecommendedReq']->value['Memory'];?>
</li>
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
<?php }
}
