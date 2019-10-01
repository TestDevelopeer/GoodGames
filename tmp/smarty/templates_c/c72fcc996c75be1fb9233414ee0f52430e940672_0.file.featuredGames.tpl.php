<?php
/* Smarty version 3.1.30, created on 2019-06-23 21:13:46
  from "D:\GitHub\gg.com\views\default\store\featuredGames.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0fc15a971695_77681228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c72fcc996c75be1fb9233414ee0f52430e940672' => 
    array (
      0 => 'D:\\GitHub\\gg.com\\views\\default\\store\\featuredGames.tpl',
      1 => 1550639416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fc15a971695_77681228 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- START: Featured Games -->
    <div class="nk-gap-3"></div>
    <h3 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Избранные</span> игры</span></h3>
    <div class="nk-gap"></div>
    <div class="row vertical-gap">
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsFeaturedGames']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
        <div class="col-12 col-md-6 col-lg-4 tools" data-tooltip-content="#tooltip_featured_<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['platformFeatured']->value[$_smarty_tpl->tpl_vars['game']->value['id_game']], 'plat');
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
                <div class="tooltip_templates">
                            <div id="tooltip_featured_<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
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

    </div>
    <!-- END: Featured Games --><?php }
}
