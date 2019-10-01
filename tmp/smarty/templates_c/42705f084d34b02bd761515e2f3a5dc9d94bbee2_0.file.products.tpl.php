<?php
/* Smarty version 3.1.30, created on 2019-02-12 11:17:51
  from "D:\OSPanel\domains\games\views\default\catalog\products.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c62812fc17db2_11366125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42705f084d34b02bd761515e2f3a5dc9d94bbee2' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\catalog\\products.tpl',
      1 => 1549959470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62812fc17db2_11366125 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-8">
            <!-- START: Products -->
            <div class="row vertical-gap" id="search-game-box">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsGames']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
        <div class="col-md-6">
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['platformPopGames']->value[$_smarty_tpl->tpl_vars['game']->value['id_game']], 'plat');
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
                            <div class="discount_block tab_item_discount" data-price-final="25400"><div class="discount_prices"><div class="discount_final_price"><?php echo $_smarty_tpl->tpl_vars['game']->value['price_game'];?>
 руб.</div></div></div>
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
            <!-- END: Products -->
            <!-- START: Pagination -->
            <div class="nk-gap-3"></div>
            <div class="nk-pagination nk-pagination-center">
                <a href="#" class="nk-pagination-prev">
                    <span class="ion-ios-arrow-back"></span>
                </a>
                <nav>
                    <a class="nk-pagination-current" href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <span>...</span>
                    <a href="#">14</a>
                </nav>
                <a href="#" class="nk-pagination-next">
                    <span class="ion-ios-arrow-forward"></span>
                </a>
            </div>
            <!-- END: Pagination -->
        </div><?php }
}
