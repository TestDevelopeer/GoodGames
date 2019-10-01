<?php
/* Smarty version 3.1.30, created on 2019-02-21 11:01:57
  from "D:\OSPanel\domains\gg.com\views\default\user\wishlist\wishlist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c6e5af5ca6775_41752506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e8d748231342748589ef4e0361618170602221c' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\user\\wishlist\\wishlist.tpl',
      1 => 1550736116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6e5af5ca6775_41752506 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        <div class="wishlist_header">
                <?php if ($_smarty_tpl->tpl_vars['rsUser']->value['user_have_photo'] == 1) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
/main.jpg">
                <?php } else { ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.jpg">
                <?php }?>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsGames']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
                <div class="wishlist_row" id="wish_game_<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
" style="top: 0px;">
            <a class="capsule" href="/game/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
/">
                <img data-img-src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
/mainv2.jpg" src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
/mainv2.jpg">
                <div class="screenshots">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['namePhoto']->value[$_smarty_tpl->tpl_vars['game']->value['id_game']], 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['img']->value != 'main.jpg' && $_smarty_tpl->tpl_vars['img']->value != 'mainv2.jpg') {?>
                    <div data-background-img-src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" style="background-image: url(&quot;<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
&quot;);"></div>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
                <a href="/game/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
/" class="title">
                    <?php echo $_smarty_tpl->tpl_vars['game']->value['name_game'];?>

                </a>
                <div class="mid_container">
                    <div class="stats">
                        <div class="label">Все обзоры:</div>
                        <div class="value game_review_summary positive" data-tooltip-text="99% из 102,045 обзоров положительные.">Крайне положительные</div>
                        <div class="label">Дата выхода:</div>
                        <div class="value release_date"><?php echo $_smarty_tpl->tpl_vars['game']->value['Date'];?>
</div>
                    </div>
                    <div class="purchase_container">
                        <div class="purchase_area">
                            <div class="discount_block discount_block_large" data-price-final="37300">
                                <?php if ($_smarty_tpl->tpl_vars['game']->value['discount_game'] != 0) {?>
                                <div class="discount_pct">-<?php echo $_smarty_tpl->tpl_vars['game']->value['discount_game'];?>
%</div>
                                <div class="discount_prices">
                                    <div class="discount_original_price"><?php echo $_smarty_tpl->tpl_vars['game']->value['price_game'];?>
 pуб.</div>
                                    <div class="discount_final_price"><?php echo $_smarty_tpl->tpl_vars['game']->value['discount_price_game'];?>
 pуб.</div>
                                </div>
                                <?php } else { ?>
                                <div class="discount_prices">
                                    <div class="discount_final_price"><?php echo $_smarty_tpl->tpl_vars['game']->value['price_game'];?>
 pуб.</div>
                                </div>
                                <?php }?>
                            </div>
                            <div class="btn_addtocart <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value != 0) {?>hide<?php }?> addtocart" id="addtocart_<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
">
                                <a class="btnv6_green_white_innerfade btn_medium noicon" href="javascript: addtocart(<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
);">
                                    <span>В корзину</span>
                                </a>
                                <a class="btnv6_green_white_innerfade btn_medium icon" href="javascript: addtocart(<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
);">
                                    <span>
                                        <img class="ico_cart" src="https://steamstore-a.akamaihd.net/public/images/v6/ico/wishlist/ico_cart.png">
                                    </span>
                                </a>    
                            </div>
                            <div class="btn_addtocart <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value == 0) {?>hide<?php }?> removefromcart" id="removefromcart_<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
">
                                <a class="btnv6_green_white_innerfade btn_medium" href="javascript:removefromcart(<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
);">
                                    <span>Удалить</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower_container">
                <div class="platform_icons">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Platforms']->value[$_smarty_tpl->tpl_vars['game']->value['id_game']], 'plat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['plat']->value) {
?>
                        <span class="platform_img <?php echo $_smarty_tpl->tpl_vars['plat']->value['name_platform'];?>
"></span>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
                    <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
                    <div class="lower_columns">               
                        <div class="addedon add_to_wishlist_area_success">
                            <div class="delete">
                                <a href="javascript: deletewishlist(<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
, <?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
);">
                                    <span>
                                        Убрать
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <!-- END: Table -->
            </div>
        

        
    </div>
</div>
    <div class="nk-gap-2"></div><?php }
}
