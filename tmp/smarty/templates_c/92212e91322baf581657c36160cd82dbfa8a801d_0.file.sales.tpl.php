<?php
/* Smarty version 3.1.30, created on 2019-02-19 13:52:22
  from "D:\OSPanel\domains\gg.com\views\default\index\sales.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c6bdfe6177920_40712494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92212e91322baf581657c36160cd82dbfa8a801d' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\index\\sales.tpl',
      1 => 1549907390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6bdfe6177920_40712494 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- START: Top 10 Best Sellers -->
    <h3 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Игры</span> со скидками</span></h3>
    <div class="nk-gap"></div>
    <div class="nk-carousel nk-carousel-x4" data-autoplay="5000" data-dots="false" data-cell-align="left" data-arrows="true">
        <div class="nk-carousel-inner">
            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsDiscountGames']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
            <div>
                <div class="pl-5 pr-5">
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
                        <h3 class="nk-product-title h6"><a href="/game/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
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
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>



    <!-- END: Top 10 Best Sellers --><?php }
}
