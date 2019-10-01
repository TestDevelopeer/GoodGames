<?php
/* Smarty version 3.1.30, created on 2019-01-23 10:15:56
  from "C:\OpenServer\domains\games\views\default\catalog\sideBar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c4814ace09c04_82479900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cbbd7eca86cc7254804ed2e351f9666a68824b5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\games\\views\\default\\catalog\\sideBar.tpl',
      1 => 1548111462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4814ace09c04_82479900 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <div class="col-lg-4">
            <!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
            -->
            <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
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
    <h4 class="nk-widget-title"><span><span class="text-main-1">Категории</span></span></h4>
    <div class="nk-widget-content">
        <ul class="nk-widget-categories">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['category']->value['name_category'];?>
</a></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Цена</span></span></h4>
    <div class="nk-widget-content">
        <div class="nk-input-slider">
            <input
                type="text"
                name="price-filter"
                data-slider-min="0"
                data-slider-max="1800"
                data-slider-step="1"
                data-slider-value="[200, 1200]"
                data-slider-tooltip="hide"
            >
            <div class="nk-gap"></div>
            <div>
                <div class="text-white mt-4 float-left">
                    
                    <strong class="text-main-1"><span class="nk-input-slider-value-0"></span> р.</strong>
                    -
                    <strong class="text-main-1"><span class="nk-input-slider-value-1"></span> р.</strong>
                </div>
                <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white float-right">Принять</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Мы</span> в соц сетях</span></h4>
    <div class="nk-widget-content">
        <!--
            Social Links 3

            Additional Classes:
                .nk-social-links-cols-5
                .nk-social-links-cols-4
                .nk-social-links-cols-3
                .nk-social-links-cols-2
        -->
        <ul class="nk-social-links-3 nk-social-links-cols-4">
            <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
            <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
            <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
            <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
            <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
            <li><a class="nk-social-twitter" href="https://twitter.com/nkdevv" target="_blank"><span class="fab fa-twitter"></span></a></li>
            <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>
            <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>

            <!-- Additional Social Buttons
                <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
            -->
        </ul>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Топ 3</span> последних</span></h4>
    <div class="nk-widget-content">
        
            <div class="nk-widget-post">
                <a href="blog-article.html" class="nk-post-image">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/post-1-sm.jpg" alt="">
                </a>
                <h3 class="nk-post-title"><a href="blog-article.html">Smell magic in the air. Or maybe barbecue</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> Sep 18, 2018</div>
            </div>
        
            <div class="nk-widget-post">
                <a href="blog-article.html" class="nk-post-image">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/post-2-sm.jpg" alt="">
                </a>
                <h3 class="nk-post-title"><a href="blog-article.html">Grab your sword and fight the Horde</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> Sep 5, 2018</div>
            </div>
        
            <div class="nk-widget-post">
                <a href="blog-article.html" class="nk-post-image">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/post-3-sm.jpg" alt="">
                </a>
                <h3 class="nk-post-title"><a href="blog-article.html">We found a witch! May we burn her?</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> Aug 27, 2018</div>
            </div>
        
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Самые</span> популярные</span></h4>
    <div class="nk-widget-content">
        
            <div class="nk-widget-post">
                <a href="store-product.html" class="nk-post-image">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/product-1-xs.jpg" alt="So saying he unbuckled">
                </a>
                <h3 class="nk-post-title"><a href="store-product.html">So saying he unbuckled</a></h3>
                <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                <div class="nk-product-price">€ 23.00</div>
            </div>
        
            <div class="nk-widget-post">
                <a href="store-product.html" class="nk-post-image">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/product-2-xs.jpg" alt="However, I have reason">
                </a>
                <h3 class="nk-post-title"><a href="store-product.html">However, I have reason</a></h3>
                <div class="nk-product-rating" data-rating="2.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                <div class="nk-product-price">€ 32.00</div>
            </div>
        
            <div class="nk-widget-post">
                <a href="store-product.html" class="nk-post-image">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/product-3-xs.jpg" alt="It was some time before">
                </a>
                <h3 class="nk-post-title"><a href="store-product.html">It was some time before</a></h3>
                <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                <div class="nk-product-price">€ 14.00</div>
            </div>
        
    </div>
</div>

            </aside>
            <!-- END: Sidebar -->
        </div>
    </div>

</div>

<div class="nk-gap-4"></div><?php }
}
