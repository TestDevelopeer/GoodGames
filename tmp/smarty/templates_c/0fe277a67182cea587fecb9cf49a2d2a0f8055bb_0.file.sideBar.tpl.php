<?php
/* Smarty version 3.1.30, created on 2019-03-31 05:07:25
  from "D:\OSPanel\domains\gg.com\views\default\index\sideBar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ca020dd79af21_11189466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fe277a67182cea587fecb9cf49a2d2a0f8055bb' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\index\\sideBar.tpl',
      1 => 1553998042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca020dd79af21_11189466 (Smarty_Internal_Template $_smarty_tpl) {
?>

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
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsBestSelling']->value, 'BestSell');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BestSell']->value) {
?>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 tools" data-tooltip-content="#tooltip_bestsell_<?php echo $_smarty_tpl->tpl_vars['BestSell']->value['id_game'];?>
">
                    <div class="nk-product-cat">
                        <a class="nk-product-image <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['BestSell']->value['id_game']])) {?>img-game-in-cat in-cat-<?php echo $_smarty_tpl->tpl_vars['BestSell']->value['id_game'];
}?>" href="/game/<?php echo $_smarty_tpl->tpl_vars['BestSell']->value['id_game'];?>
/">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['BestSell']->value['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['BestSell']->value['name_game'];?>
">
                            <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['BestSell']->value['id_game']])) {?>
                                <div class="game-in-cat flag-<?php echo $_smarty_tpl->tpl_vars['BestSell']->value['id_game'];?>
">В КОРЗИНЕ&nbsp;&nbsp;</div>
                            <?php }?>
                        </a>
                        <a href="/game/<?php echo $_smarty_tpl->tpl_vars['BestSell']->value['id_game'];?>
/" class="nk-product-cont custom-prod-cont">
                        <div >
                            
                            <div class="nk-gap"></div>
                            <h3 class="nk-product-title h6 custom-prod-cont-h"><?php echo $_smarty_tpl->tpl_vars['BestSell']->value['name_game'];?>
</h3>
                            <div class="nk-gap"></div>
                            <div class="tab_item_content">
                                <div class="tab_item_details">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['platform']->value[$_smarty_tpl->tpl_vars['BestSell']->value['id_game']], 'plat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['plat']->value) {
?>
                                    <span class="platform_img <?php echo $_smarty_tpl->tpl_vars['plat']->value;?>
"></span>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    <span class="platform_img steam"></span>
                                    <div class="tab_item_top_tags"><span class="top_tag"><?php echo $_smarty_tpl->tpl_vars['BestSell']->value['tags'];?>
</span></div>
                                </div>
                            </div>
                            
                            <?php if ($_smarty_tpl->tpl_vars['BestSell']->value['discount_game'] == 0) {?>
                            <div class="discount_block tab_item_discount" data-price-final="25400">
                                <div class="discount_prices">
                                    <div class="discount_final_price"><?php echo $_smarty_tpl->tpl_vars['BestSell']->value['price_game'];?>
 pуб.</div>
                                </div>
                            </div>
                            <?php } else { ?>
                            <div class="discount_block tab_item_discount" data-price-final="25400"><div class="discount_pct">-<?php echo $_smarty_tpl->tpl_vars['BestSell']->value['discount_game'];?>
%</div><div class="discount_prices"><div class="discount_original_price"><?php echo $_smarty_tpl->tpl_vars['BestSell']->value['price_game'];?>
 pуб.</div><div class="discount_final_price"><?php echo $_smarty_tpl->tpl_vars['BestSell']->value['discount_price_game'];?>
 pуб.</div></div></div>
                            <?php }?>
                            <div class="nk-gap-2"></div>
                            
                        </div>
                        </a>
                        <div class="tooltip_templates">
                            <div id="tooltip_bestsell_<?php echo $_smarty_tpl->tpl_vars['BestSell']->value['id_game'];?>
">
                                <div id="hover_app_939960" style="display: block;">
                                    <div class="hover_top_area" style="display: none;">
                                    </div>
                                    <h4><?php echo $_smarty_tpl->tpl_vars['BestSell']->value['name_game'];?>
</h4>
                                    <div class="hover_release"> Дата выпуска: <?php echo $_smarty_tpl->tpl_vars['BestSell']->value['Date'];?>
 </div>
                                    <div class="hover_screenshots">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['BestSell']->value['id_game'];?>
/mainv2.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['BestSell']->value['name_game'];?>
">
                                    </div>
                                    <div class="hover_body">
                                        <div class="hover_review_summary">
                                            <div class="title"><?php echo $_smarty_tpl->tpl_vars['BestSell']->value['description_game'];?>
</div>
                                        </div>
                                        <div style="clear: left;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsLastGames']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
                            <div class="col-xl-4 col-lg-4 col-md-6 tools" data-tooltip-content="#tooltip_last_<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
">
                                <div class="nk-product-cat">
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
                                    <a href="/game/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
/" class="nk-product-cont custom-prod-cont">
                                    <div >
                                        
                                        <div class="nk-gap"></div>
                                        <h3 class="nk-product-title h6 custom-prod-cont-h"><?php echo $_smarty_tpl->tpl_vars['game']->value['name_game'];?>
</h3>
                                        <div class="nk-gap"></div>
                                        <div class="tab_item_content">
                                            <div class="tab_item_details">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['platform']->value[$_smarty_tpl->tpl_vars['game']->value['id_game']], 'plat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['plat']->value) {
?>
                                                <span class="platform_img <?php echo $_smarty_tpl->tpl_vars['plat']->value;?>
"></span>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                <span class="platform_img steam"></span>
                                                <div class="tab_item_top_tags"><span class="top_tag"><?php echo $_smarty_tpl->tpl_vars['BestSell']->value['tags'];?>
</span></div>
                                            </div>
                                        </div>
                                        
                                        <?php if ($_smarty_tpl->tpl_vars['game']->value['discount_game'] == 0) {?>
                                        <div class="discount_block tab_item_discount" data-price-final="25400">
                                            <div class="discount_prices">
                                                <div class="discount_final_price"><?php echo $_smarty_tpl->tpl_vars['game']->value['price_game'];?>
 pуб.</div>
                                            </div>
                                        </div>
                                        <?php } else { ?>
                                        <div class="discount_block tab_item_discount" data-price-final="25400"><div class="discount_pct">-<?php echo $_smarty_tpl->tpl_vars['game']->value['discount_game'];?>
%</div><div class="discount_prices"><div class="discount_original_price"><?php echo $_smarty_tpl->tpl_vars['game']->value['price_game'];?>
 pуб.</div><div class="discount_final_price"><?php echo $_smarty_tpl->tpl_vars['game']->value['discount_price_game'];?>
 pуб.</div></div></div>
                                        <?php }?>
                                        <div class="nk-gap-2"></div>
                                        
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tooltip_templates">
                            <div id="tooltip_last_<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
">
                                <div id="hover_app_939960" style="display: block;">
                                    <div class="hover_top_area" style="display: none;">
                                    </div>
                                    <h4><?php echo $_smarty_tpl->tpl_vars['game']->value['name_game'];?>
</h4>
                                    <div class="hover_release"> Дата выпуска: <?php echo $_smarty_tpl->tpl_vars['game']->value['Date'];?>
 </div>
                                    <div class="hover_screenshots">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
/mainv2.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['game']->value['name_game'];?>
">
                                    </div>
                                    <div class="hover_body">
                                        <div class="hover_review_summary">
                                            <div class="title"><?php echo $_smarty_tpl->tpl_vars['game']->value['description_game'];?>
</div>
                                        </div>
                                        <div style="clear: left;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/newgame/<?php echo $_smarty_tpl->tpl_vars['comingSoon']->value[0]['id_com_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['comingSoon']->value[0]['name_com_game'];?>
">
                <div id="coming-prev" class="nk-flickity-arrow nk-flickity-arrow-prev"><span class="ion-ios-arrow-back"></span></div>
                <div id="coming-next" class="nk-flickity-arrow nk-flickity-arrow-next"><span class="ion-ios-arrow-forward"></span></div>
            </a>
            <div class="nk-gap-1"></div>
            <div class="nk-popup-gallery">
                <div class="row vertical-gap">
                    <?php
$__section_game_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_game']) ? $_smarty_tpl->tpl_vars['__smarty_section_game'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_game'] = new Smarty_Variable(array());
if (true) {
for ($__section_game_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_game']->value['index'] = 1; $__section_game_0_iteration <= 4; $__section_game_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_game']->value['index']++){
?>
                    <div class="col-lg-3">
                        <div class="nk-gallery-item-box">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/newgame/<?php echo $_smarty_tpl->tpl_vars['comingSoon']->value[0]['id_com_game'];?>
/th<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_game']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_game']->value['index'] : null);?>
.jpg" class="nk-gallery-item" data-size="1016x572">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/newgame/<?php echo $_smarty_tpl->tpl_vars['comingSoon']->value[0]['id_com_game'];?>
/th<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_game']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_game']->value['index'] : null);?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['comingSoon']->value[0]['name_com_game'];?>
">
                            </a>
                            
                        </div>
                    </div>
                    <?php
}
}
if ($__section_game_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_game'] = $__section_game_0_saved;
}
?>
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
                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/newgame/<?php echo $_smarty_tpl->tpl_vars['comingSoon']->value[1]['id_com_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['comingSoon']->value[1]['name_com_game'];?>
">
                <div id="comingv2-prev" class="nk-flickity-arrow nk-flickity-arrow-prev"><span class="ion-ios-arrow-back"></span></div>
                <div id="comingv2-next" class="nk-flickity-arrow nk-flickity-arrow-next"><span class="ion-ios-arrow-forward"></span></div>
            </a>
            
            <div class="nk-gap-1"></div>
            <div class="nk-popup-gallery">
                <div class="row vertical-gap">
                    <?php
$__section_game_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_game']) ? $_smarty_tpl->tpl_vars['__smarty_section_game'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_game'] = new Smarty_Variable(array());
if (true) {
for ($__section_game_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_game']->value['index'] = 1; $__section_game_1_iteration <= 4; $__section_game_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_game']->value['index']++){
?>
                    <div class="col-lg-3">
                        <div class="nk-gallery-item-box">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/newgame/<?php echo $_smarty_tpl->tpl_vars['comingSoon']->value[1]['id_com_game'];?>
/th<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_game']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_game']->value['index'] : null);?>
.jpg" class="nk-gallery-item" data-size="1016x572">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/newgame/<?php echo $_smarty_tpl->tpl_vars['comingSoon']->value[1]['id_com_game'];?>
/th<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_game']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_game']->value['index'] : null);?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['comingSoon']->value[1]['name_com_game'];?>
">
                            </a>
                            
                        </div>
                    </div>
                    <?php
}
}
if ($__section_game_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_game'] = $__section_game_1_saved;
}
?>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsThreePopularLastArt']->value, 'art');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
?>
            <div class="nk-widget-post">
                <a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="nk-post-image">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/main.jpg" alt="">
                </a>
                <h3 class="nk-post-title"><a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="text-art"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['art']->value['date_art'];?>
</div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Самые</span> популярные</span></h4>
    <div class="nk-widget-content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsMostPopularGame']->value, 'popular');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['popular']->value) {
?>
            <div class="nk-widget-post">
                <a href="/game/<?php echo $_smarty_tpl->tpl_vars['popular']->value['id_game'];?>
/" class="nk-post-image <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['popular']->value['id_game']])) {?>img-game-in-cat in-cat-<?php echo $_smarty_tpl->tpl_vars['popular']->value['id_game'];
}?>">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['popular']->value['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['popular']->value['name_game'];?>
">
                    <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['popular']->value['id_game']])) {?>
                        <div class="game-in-cat flag-<?php echo $_smarty_tpl->tpl_vars['popular']->value['id_game'];?>
">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    <?php }?>
                </a>
                <h3 class="nk-post-title"><a href="/game/<?php echo $_smarty_tpl->tpl_vars['popular']->value['id_game'];?>
/"><?php echo $_smarty_tpl->tpl_vars['popular']->value['name_game'];?>
</a></h3>
                <div class="nk-product-rating" data-rating="<?php echo $_smarty_tpl->tpl_vars['popular']->value['rating_game']/$_smarty_tpl->tpl_vars['popular']->value['cnt_vote_rating'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['popular']->value['cnt_vote_rating'] != 0) {?>
                    <?php
$__section_rating_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_rating']) ? $_smarty_tpl->tpl_vars['__smarty_section_rating'] : false;
$__section_rating_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['popular']->value['rating_game']/$_smarty_tpl->tpl_vars['popular']->value['cnt_vote_rating']) ? count($_loop) : max(0, (int) $_loop));
$__section_rating_2_start = min(0, $__section_rating_2_loop);
$__section_rating_2_total = min(($__section_rating_2_loop - $__section_rating_2_start), $__section_rating_2_loop);
$_smarty_tpl->tpl_vars['__smarty_section_rating'] = new Smarty_Variable(array());
if ($__section_rating_2_total != 0) {
for ($__section_rating_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rating']->value['index'] = $__section_rating_2_start; $__section_rating_2_iteration <= $__section_rating_2_total; $__section_rating_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rating']->value['index']++){
?>
                    <i class="fa fa-star"></i>
                    <?php
}
}
if ($__section_rating_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_rating'] = $__section_rating_2_saved;
}
?>
                    <?php } else { ?>
                     <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                    <?php }?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['popular']->value['discount_game'] == 0) {?>
                <div class="nk-product-price"><?php echo $_smarty_tpl->tpl_vars['popular']->value['price_game'];?>
р.</div>
                <?php } else { ?>
                <div class="nk-product-price"><s style="color: red;"><?php echo $_smarty_tpl->tpl_vars['popular']->value['price_game'];?>
р.</s> <?php echo $_smarty_tpl->tpl_vars['popular']->value['discount_price_game'];?>
р. <span class="tx-warning tx-12"><span class="tx-lato"><?php echo $_smarty_tpl->tpl_vars['popular']->value['discount_game'];?>
%</span></span></div>
                <?php }?>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>

            </aside>
          
        </div>-->
</div>
</div><?php }
}
