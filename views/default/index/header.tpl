<!-- Preloader -->
    <div class="preloader"></div>
<header class="nk-header nk-header-opaque">

    
    
<!-- START: Top Contacts -->
<div class="nk-contacts-top">
    <div class="container">
        <div class="nk-contacts-left">
            <ul class="nk-social-links hidden-phone">
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
                {if $rsNoReadMsg}
                <li>
                    <a style="color: #70ba24;" href="/chat/" onclick="OpenChat(this); return false;">
                        <span class="fas fa-envelope"></span>
                        <span class="nk-badge">{$rsNoReadMsg}</span>
                    </a>
                </li>
                {/if}
                {if $cntAcceptNotif}
                <li>
                    <a style="color: #70ba24;" href="/user/friends/{$arUser['id_user']}/">
                        <span class="fa fa-user"></span>
                        <span class="nk-badge">{$cntAcceptNotif}</span>
                    </a>
                </li>
                {/if}
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalLogin" class="user_avatar playerAvatar">
                        {if isset($arUser)}
                        {if $arUser['user_have_photo'] == 1}
                            <img class="user-photo img-user-header" src="{$teplateImgPath}users/{$arUser['id_user']}/main.jpg">
                        {else}
                            <img class="user-photo img-user-header" src="{$teplateImgPath}users/default/default.png">
                        {/if}
                        {else}
                        <span class="fa fa-sign-in"></span>
                        {/if}
                    </a>
                </li>
                {if isset($arUser)}
                <li class="hidden-phone">
                    <a href="/order/">
                        <span class="nk-order-toggle">
                            <span class="far fa-credit-card"></span>
                            <span class="nk-badge" id="order-items">{$cntNoPayOrder}</span>
                        </span>
                    </a>
                </li>  
                {/if}
                <li>
                    <span class="nk-cart-toggle">
                        <span class="fa fa-shopping-cart"></span>
                        <span class="nk-badge" id="cart-items">{if $cartCnt != 0}{$cartCnt}{else}0{/if}</span>
                    </span>
                    
                    <div class="{if $cartCnt != 0}nk-cart-dropdown{else}cart-non-active{/if}" id="cart-dropdown-block">
                        
                        {foreach $rsCart as $cart name = cart}

                        {if $smarty.foreach.cart.iteration < 4}
                        <div class="nk-widget-post" id="cart-dropdown_{$cart['id_game']}">
                            <a href="/game/{$cart['id_game']}/" class="nk-post-image">
                                <img src="{$teplateImgPath}games/{$cart['id_game']}/main.jpg" alt="In all revolutions of">
                            </a>
                            <h3 class="nk-post-title">
                                <a href="javascript: removefromcart({$cart['id_game']});" class="nk-cart-remove-item"><span class="ion-android-close"></span></a>
                                <a href="/game/{$cart['id_game']}/">{$cart['name_game']}</a>
                            </h3>
                            {if $cart['discount_game'] == 0}
                            <div class="nk-product-price cart-price">{$cart['price_game']}р.</div>
                            {else}
                            <div class="nk-product-price cart-price"><s style="color: red;">{$cart['price_game']}р.</s> <span class="tx-warning tx-12"><span class="tx-lato">{$cart['discount_game']}%</span></span></div>
                            <div class="nk-product-price cart-price-discount">{$cart['discount_price_game']}р.</div>
                            {/if}
                        </div>
                        {/if}
                        {/foreach}
                        
                        {if $cartCnt != 0}
                        <div class="nk-gap-2"></div>
                        <div class="text-center">
                            <a href="javascript: clearcart();" style="margin-right: 5px;" class="nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white">Очистить</a>
                            <a href="/cart/" class="nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white">{if $cartCnt > 3}Еще {$cartCnt - 3}{else}Корзина{/if}</a>
                        </div>
                        {/if}
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
                
                
                    <div class="nk-nav-logo br-logo"><a href="/"><span>[</span>good <i>games</i><span>]</span></a></div>
                
                
                <ul class="nk-nav nk-nav-right d-none d-lg-table-cell custom-header" data-nav-mobile="#nk-nav-mobile">
                    
        <li>
            {if isset($arUser)}
            <a href="/chat/">
                Чат
            </a>
            {/if}
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
        <!--<li>
            <a href="/stream/">
                Трансляция
                
            </a>
        </li>-->
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
                
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->

    
   