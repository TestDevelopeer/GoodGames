<?php
/* Smarty version 3.1.30, created on 2019-01-22 00:50:19
  from "D:\OSPanel\domains\games\views\default\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c463e9bc6ffa4_79365262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5e647f29bb2300a3eca5fc2a36de535ac468d5c' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\footer.tpl',
      1 => 1548107417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c463e9bc6ffa4_79365262 (Smarty_Internal_Template $_smarty_tpl) {
?>

            <!-- START: Footer -->
<footer class="nk-footer">

    <div class="container">
        <div class="nk-gap-3"></div>
        <div class="row vertical-gap">
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Связаться</span> с нами</h4>
                    <div class="nk-widget-content">
                        <form action="php/ajax-contact-form.php" class="nk-form nk-form-ajax">
                            <div class="row vertical-gap sm-gap">
                                <div class="col-md-6">
                                    <input type="email" class="form-control required" name="email" placeholder="Email *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control required" name="name" placeholder="Имя *">
                                </div>
                            </div>
                            <div class="nk-gap"></div>
                            <textarea class="form-control required" name="message" rows="5" placeholder="Сообщение *"></textarea>
                            <div class="nk-gap-1"></div>
                            <button class="nk-btn nk-btn-rounded nk-btn-color-white">
                                <span>Отправить</span>
                                <span class="icon"><i class="ion-paper-airplane"></i></span>
                            </button>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Последние</span> публикации</h4>
                    <div class="nk-widget-content">
                        <div class="row vertical-gap sm-gap">
                            
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="blog-article.html" class="nk-post-image">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/post-1-sm.jpg" alt="">
                                    </a>
                                    <div class="nk-post-title"><a href="blog-article.html">Smell magic in the air. Or maybe barbecue</a></div>
                                    <div class="nk-post-date">
                                        <span class="fa fa-calendar"></span> Sep 18, 2018
                                        <span class="fa fa-comments"></span> <a href="#">4</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="blog-article.html" class="nk-post-image">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/post-2-sm.jpg" alt="">
                                    </a>
                                    <div class="nk-post-title"><a href="blog-article.html">Grab your sword and fight the Horde</a></div>
                                    <div class="nk-post-date">
                                        <span class="fa fa-calendar"></span> Sep 5, 2018
                                        <span class="fa fa-comments"></span> <a href="#">7</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Twitter</span></h4>
                    <div class="nk-widget-content">
                        <div class="nk-twitter-list" data-twitter-count="1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-3"></div>
    </div>

    <div class="nk-copyright">
        <div class="container">
            <div class="nk-copyright-left">
                Copyright &copy; 2019 <a href="https://themeforest.net/user/_nk?ref=_nK" target="_blank">Vereschinsky Igor</a>
            </div>
            <div class="nk-copyright-right">
                <ul class="nk-social-links-2">
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
        </div>
    </div>
</footer>
<!-- END: Footer -->

        
    </div>

    

    
        <!-- START: Page Background -->

    <img class="nk-page-background-top" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/bg-top.png" alt="">
    <img class="nk-page-background-bottom" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/bg-bottom.png" alt="">

<!-- END: Page Background -->

    

    
        <!-- START: Search Modal -->
<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0">Search</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form nk-form-style-1">
                    <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->
    

    
        <!-- START: Login Modal -->
<div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form text-white">
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            Use email and password:

                            <div class="nk-gap"></div>
                            <input type="email" value="" name="email" class=" form-control" placeholder="Email">

                            <div class="nk-gap"></div>
                            <input type="password" value="" name="password" class="required form-control" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            Or social account:

                            <div class="nk-gap"></div>

                            <ul class="nk-social-links-2">
                                <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                                <li><a class="nk-social-twitter" href="#"><span class="fab fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign In</a>
                        </div>
                        <div class="col-md-6">
                            <div class="mnt-5">
                                <small><a href="#">Forgot your password?</a></small>
                            </div>
                            <div class="mnt-5">
                                <small><a href="#">Not a member? Sign up</a></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Login Modal -->

    

    
<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/object-fit-images/dist/ofi.min.js"><?php echo '</script'; ?>
>

<!-- GSAP -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/gsap/src/minified/TweenMax.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"><?php echo '</script'; ?>
>

<!-- Popper -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/popper.js/dist/umd/popper.min.js"><?php echo '</script'; ?>
>

<!-- Bootstrap -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Sticky Kit -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/sticky-kit/dist/sticky-kit.min.js"><?php echo '</script'; ?>
>

<!-- Jarallax -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/jarallax/dist/jarallax.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/jarallax/dist/jarallax-video.min.js"><?php echo '</script'; ?>
>

<!-- imagesLoaded -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"><?php echo '</script'; ?>
>

<!-- Flickity -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/flickity/dist/flickity.pkgd.min.js"><?php echo '</script'; ?>
>

<!-- Photoswipe -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/photoswipe/dist/photoswipe.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"><?php echo '</script'; ?>
>

<!-- Jquery Validation -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/jquery-validation/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>

<!-- Jquery Countdown + Moment -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/moment/min/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"><?php echo '</script'; ?>
>

<!-- Hammer.js -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/hammerjs/hammer.min.js"><?php echo '</script'; ?>
>

<!-- NanoSroller -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"><?php echo '</script'; ?>
>

<!-- SoundManager2 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"><?php echo '</script'; ?>
>

<!-- Seiyria Bootstrap Slider -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"><?php echo '</script'; ?>
>

<!-- Summernote -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/summernote/dist/summernote-bs4.min.js"><?php echo '</script'; ?>
>

<!-- nK Share -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/plugins/nk-share/nk-share.js"><?php echo '</script'; ?>
>

<!-- GoodGames -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/js/goodgames.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/js/goodgames-init.js"><?php echo '</script'; ?>
>
<!-- END: Scripts -->


    
</body>
</html>
<?php }
}
