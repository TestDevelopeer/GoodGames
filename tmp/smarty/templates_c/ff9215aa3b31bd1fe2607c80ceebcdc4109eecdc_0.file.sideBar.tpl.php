<?php
/* Smarty version 3.1.30, created on 2019-02-15 05:23:20
  from "D:\OSPanel\domains\games\views\default\store\sideBar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c6622981e6736_59534701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff9215aa3b31bd1fe2607c80ceebcdc4109eecdc' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\store\\sideBar.tpl',
      1 => 1550197387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6622981e6736_59534701 (Smarty_Internal_Template $_smarty_tpl) {
?>

    </div>

</div>
<div class="container">
    <div class="nk-tabs">
        <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link custom-nav-tabs active" href="#tabs-1-1" role="tab" data-toggle="tab">Лидеры продаж</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-nav-tabs" href="#tabs-1-2" role="tab" data-toggle="tab">Популярные новинки</a>
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
                <div class="col-md-4">
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
                            <div class="nk-product-price"><?php echo $_smarty_tpl->tpl_vars['BestSell']->value['price_game'];?>
 руб.</div>
                            <?php } else { ?>
                            <div class="discount_block tab_item_discount" data-price-final="25400"><div class="discount_pct">-<?php echo $_smarty_tpl->tpl_vars['BestSell']->value['discount_game'];?>
%</div><div class="discount_prices"><div class="discount_original_price"><?php echo $_smarty_tpl->tpl_vars['BestSell']->value['price_game'];?>
 pуб.</div><div class="discount_final_price"><?php echo $_smarty_tpl->tpl_vars['BestSell']->value['discount_price_game'];?>
 pуб.</div></div></div>
                            <?php }?>
                            <div class="nk-gap-2"></div>
                            
                        </div>
                        </a>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
                            <div class="nk-gap"></div>
                            <div class="tab_see_more">
                                <a class="btnv6_white_transparent btn_small_tall custom-btn-tall" href="/catalog/">
                                    <span>Все игры</span>
                                </a>
                            </div>
                            <div class="nk-gap"></div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tabs-1-2">
                            <div class="nk-gap"></div>
                            <div class="row vertical-gap">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsPopularGames']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
                            <div class="col-md-4">
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
                                                <div class="tab_item_top_tags"><span class="top_tag"><?php echo $_smarty_tpl->tpl_vars['game']->value['tags'];?>
</span></div>
                                            </div>
                                        </div>
                                        
                                        <?php if ($_smarty_tpl->tpl_vars['game']->value['discount_game'] == 0) {?>
                                        <div class="nk-product-price"><?php echo $_smarty_tpl->tpl_vars['game']->value['price_game'];?>
 руб.</div>
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
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                            <div class="nk-gap"></div>
                            <div class="tab_see_more">
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
</div><?php }
}
