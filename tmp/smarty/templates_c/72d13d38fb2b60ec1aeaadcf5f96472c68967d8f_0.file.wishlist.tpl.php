<?php
/* Smarty version 3.1.30, created on 2019-02-21 09:33:16
  from "D:\OSPanel\domains\gg.com\views\default\user\wishlist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c6e462c65ba72_88807785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72d13d38fb2b60ec1aeaadcf5f96472c68967d8f' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\user\\wishlist.tpl',
      1 => 1550730793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6e462c65ba72_88807785 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        
        
        <li><a href="index.html">Главная</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span>Список желаемого</span></li>

        <li><span class="fa fa-angle-right"></span></li>
        
        <li><a href="/user/profile/<?php if ($_smarty_tpl->tpl_vars['rsUser']->value['user_link'] != '') {
echo $_smarty_tpl->tpl_vars['rsUser']->value['user_link'];
} else {
echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];
}?>/"><?php echo $_smarty_tpl->tpl_vars['rsUser']->value['user_name'];?>
</a></li>
        
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
                <div class="wishlist_row" data-app-id="620" style="top: 0px;">
            <div class="hover_handle" draggable="true">
                <div>
                    <div class="top">↑ ↑ ↑</div>
                    <img src="https://steamstore-a.akamaihd.net/public/images/v6/wishlist/handle.png">
                    <div class="order"><input class="order_input" type="text" value="0"></div>
                </div>
            </div>
            <a class="capsule" href="https://store.steampowered.com/app/620/?snr=1_wishlist_4__wishlist-capsule">
                <img data-img-src="https://steamcdn-a.akamaihd.net/steam/apps/620/header_292x136.jpg?t=1512411524" src="https://steamcdn-a.akamaihd.net/steam/apps/620/header_292x136.jpg?t=1512411524">
                <div class="screenshots">
                    <div data-background-img-src="https://steamcdn-a.akamaihd.net/steam/apps/620/ss_f3f6787d74739d3b2ec8a484b5c994b3d31ef325.600x338.jpg" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steam/apps/620/ss_f3f6787d74739d3b2ec8a484b5c994b3d31ef325.600x338.jpg&quot;);"></div><div data-background-img-src="https://steamcdn-a.akamaihd.net/steam/apps/620/ss_6a4f5afdaa98402de9cf0b59fed27bab3256a6f4.600x338.jpg" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steam/apps/620/ss_6a4f5afdaa98402de9cf0b59fed27bab3256a6f4.600x338.jpg&quot;);"></div><div data-background-img-src="https://steamcdn-a.akamaihd.net/steam/apps/620/ss_0cdd90fafc160b52d08b303d205f9fd4e83cf164.600x338.jpg" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steam/apps/620/ss_0cdd90fafc160b52d08b303d205f9fd4e83cf164.600x338.jpg&quot;);"></div><div data-background-img-src="https://steamcdn-a.akamaihd.net/steam/apps/620/ss_ec35a739b4b33270eb170d9e561c5b016cba50a6.600x338.jpg" style="background-image: url(&quot;https://steamcdn-a.akamaihd.net/steam/apps/620/ss_ec35a739b4b33270eb170d9e561c5b016cba50a6.600x338.jpg&quot;);"></div>
                </div>
            </a>
            <div class="content">
                <a href="https://store.steampowered.com/app/620/?snr=1_wishlist_4__wishlist-capsule" class="title">
                    Portal 2
                </a>
                <div class="mid_container">
                    <div class="stats">
                        <div class="label">Все обзоры:</div>
                        <div class="value game_review_summary positive" data-tooltip-text="99% из 102,045 обзоров положительные.">Крайне положительные</div>
                        <div class="label">Дата выхода:</div>
                        <div class="value release_date">19 апр. 2011</div>
                    </div>
                    <div class="purchase_container">
                        <div class="purchase_area"><div class="discount_block discount_block_large no_discount" data-price-final="25900"><div class="discount_prices"><div class="discount_final_price">259 pуб.</div></div></div><form name="add_to_cart_7877" action="https://store.steampowered.com/cart/" method="POST">
                    <input type="hidden" name="sessionid" value="d9fde785225c044eac12e1eb">
                    <input type="hidden" name="subid" value="7877">
                    <input type="hidden" name="action" value="add_to_cart">
                    <input type="hidden" name="snr" value="1_wishlist_4__wishlist-cart">
                    <a class="btnv6_green_white_innerfade btn_medium noicon" href="javascript:addToCart(7877);"><span>В корзину</span></a>
                    <a class="btnv6_green_white_innerfade btn_medium icon" href="javascript:addToCart(7877);"><span><img class="ico_cart" src="https://steamstore-a.akamaihd.net/public/images/v6/ico/wishlist/ico_cart.png"></span></a>
                </form></div>
                    </div>
                </div>
                <div class="lower_container">
                <div class="platform_icons"><span class="platform_img win"></span><span class="platform_img mac"></span><span class="platform_img linux"></span></div>
                    <div class="lower_columns">
                        <div class="tags"><div class="tag" data-tag-index="0">Экшен</div><div class="tag" data-tag-index="1">Приключение</div><div class="tag" data-tag-index="2">Головоломка</div><div class="tag" data-tag-index="3">Кооператив</div><div class="tag" data-tag-index="4">Юмор</div></div>                     
                        <div class="addedon">Добавлено 24.06.2016 (<div class="delete">убрать</div>)</div>
                    </div>
                    

                </div>
            </div>
        </div>
                <!-- END: Table -->
            </div>
        

        
    </div>

    <div class="nk-gap-2"></div><?php }
}
