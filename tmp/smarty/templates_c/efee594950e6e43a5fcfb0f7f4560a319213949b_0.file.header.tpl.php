<?php
/* Smarty version 3.1.30, created on 2019-02-19 13:50:23
  from "D:\OSPanel\domains\games\views\default\index\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c6bdf6fc22f39_89359658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efee594950e6e43a5fcfb0f7f4560a319213949b' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\index\\header.tpl',
      1 => 1550573422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6bdf6fc22f39_89359658 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Preloader -->
    <div class="preloader"></div>
<header class="nk-header nk-header-opaque">

    
    
<!-- START: Top Contacts -->
<div class="nk-contacts-top">
    <div class="container">
        <div class="nk-contacts-left">
            <ul class="nk-social-links">
                <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                <li><a class="nk-social-twitter" href="https://twitter.com/nkdevv" target="_blank"><span class="fab fa-twitter"></span></a></li>
                <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>

                <!-- Additional Social Buttons
                    <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                    <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                    <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                    <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                    <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                    <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                    <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                    <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                    <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                    <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                    <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                    <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                    <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                    <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                    <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                    <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                    <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                    <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                    <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                    <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
                    <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                -->
            </ul>
        </div>
        <div class="nk-contacts-right">
            <ul class="nk-contacts-icons">
                
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalSearch">
                        <span class="fa fa-search"></span>
                    </a>
                </li>
                
                
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalLogin">
                        <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
                        <span class="fa fa-user"></span>
                        <?php } else { ?>
                        <span class="fa fa-sign-in"></span>
                        <?php }?>
                    </a>
                </li>
                <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
                <li>
                    <a href="/order/">
                        <span class="nk-order-toggle">
                            <span class="far fa-credit-card"></span>
                            <span class="nk-badge" id="order-items"><?php echo $_smarty_tpl->tpl_vars['cntNoPayOrder']->value;?>
</span>
                        </span>
                    </a>
                </li>  
                <?php }?>
                <li>
                    <span class="nk-cart-toggle">
                        <span class="fa fa-shopping-cart"></span>
                        <span class="nk-badge" id="cart-items"><?php if ($_smarty_tpl->tpl_vars['cartCnt']->value != 0) {
echo $_smarty_tpl->tpl_vars['cartCnt']->value;
} else { ?>0<?php }?></span>
                    </span>
                    
                    <div class="<?php if ($_smarty_tpl->tpl_vars['cartCnt']->value != 0) {?>nk-cart-dropdown<?php } else { ?>cart-non-active<?php }?>" id="cart-dropdown-block">
                        
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCart']->value, 'cart', false, NULL, 'cart', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_cart']->value['iteration']++;
?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_cart']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cart']->value['iteration'] : null) < 4) {?>
                        <div class="nk-widget-post" id="cart-dropdown_<?php echo $_smarty_tpl->tpl_vars['cart']->value['id_game'];?>
">
                            <a href="/game/<?php echo $_smarty_tpl->tpl_vars['cart']->value['id_game'];?>
/" class="nk-post-image">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['cart']->value['id_game'];?>
/main.jpg" alt="In all revolutions of">
                            </a>
                            <h3 class="nk-post-title">
                                <a href="javascript: removefromcart(<?php echo $_smarty_tpl->tpl_vars['cart']->value['id_game'];?>
);" class="nk-cart-remove-item"><span class="ion-android-close"></span></a>
                                <a href="/game/<?php echo $_smarty_tpl->tpl_vars['cart']->value['id_game'];?>
/"><?php echo $_smarty_tpl->tpl_vars['cart']->value['name_game'];?>
</a>
                            </h3>
                            <?php if ($_smarty_tpl->tpl_vars['cart']->value['discount_game'] == 0) {?>
                            <div class="nk-product-price cart-price"><?php echo $_smarty_tpl->tpl_vars['cart']->value['price_game'];?>
р.</div>
                            <?php } else { ?>
                            <div class="nk-product-price cart-price"><s style="color: red;"><?php echo $_smarty_tpl->tpl_vars['cart']->value['price_game'];?>
р.</s> <span class="tx-warning tx-12"><span class="tx-lato"><?php echo $_smarty_tpl->tpl_vars['cart']->value['discount_game'];?>
%</span></span></div>
                            <div class="nk-product-price cart-price-discount"><?php echo $_smarty_tpl->tpl_vars['cart']->value['discount_price_game'];?>
р.</div>
                            <?php }?>
                        </div>
                        <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        
                        <?php if ($_smarty_tpl->tpl_vars['cartCnt']->value != 0) {?>
                        <div class="nk-gap-2"></div>
                        <div class="text-center">
                            <a href="javascript: clearcart();" style="margin-right: 5px;" class="nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white">Очистить</a>
                            <a href="/cart/" class="nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white"><?php if ($_smarty_tpl->tpl_vars['cartCnt']->value > 3) {?>Еще <?php echo $_smarty_tpl->tpl_vars['cartCnt']->value-3;
} else { ?>Корзина<?php }?></a>
                        </div>
                        <?php }?>
                    </div>
                </li>   
                         
            </ul>
        </div>
    </div>
</div>
<!-- END: Top Contacts -->

    

    <!--
        START: Navbar

        Additional Classes:
            .nk-navbar-sticky
            .nk-navbar-transparent
            .nk-navbar-autohide
    -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">
                
                
                    <div class="nk-nav-logo br-logo"><a href="/admin/"><span>[</span>good <i>games</i><span>]</span></a></div>
                
                
                <ul class="nk-nav nk-nav-right d-none d-lg-table-cell custom-header" data-nav-mobile="#nk-nav-mobile">
                    
        <li>
            <a href="elements.html">
                Форум
                
            </a>
        </li>
        <li>
            <a href="/news/">
                Новости
                
            </a>
        </li>
        <li>
            <a href="/gallery/">
                Галлерея
                
            </a>
        </li>
        <li>
            <a href="/stream/">
                Трансляция
                
            </a>
        </li>
        <li class=" nk-drop-item">
            <a href="javascript:;">
                Магазин
                
            </a>
            <ul class="dropdown">
                        
        <li>
            <a href="/store/">
                Магазин
                
            </a>
        </li>
        <li>
            <a href="/catalog/">
                Каталог
                
            </a>
        </li>
        <li>
            <a href="/cart/" class="cart-a">
                Корзина
                
            </a>
        </li>
        <li>
            <a href="/order/">
                Заказы
                
            </a>
        </li>
                    </ul>
        </li>
                </ul>
                <ul class="nk-nav nk-nav-right nk-nav-icons">
                    
                        <li class="single-icon d-lg-none">
                            <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>

<!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.html" class="nk-nav-logo">
                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/logo.png" alt="" width="120">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->

    
   <?php }
}
