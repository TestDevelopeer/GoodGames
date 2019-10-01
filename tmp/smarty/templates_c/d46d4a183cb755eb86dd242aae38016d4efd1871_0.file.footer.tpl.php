<?php
/* Smarty version 3.1.30, created on 2019-02-21 10:39:19
  from "D:\OSPanel\domains\gg.com\views\default\user\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c6e55a7b9a312_78809322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd46d4a183cb755eb86dd242aae38016d4efd1871' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\user\\footer.tpl',
      1 => 1550734758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6e55a7b9a312_78809322 (Smarty_Internal_Template $_smarty_tpl) {
?>

            <!-- START: Footer -->
<footer class="nk-footer">

   
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

<!-- END: Page Background -->

    

    
        <!-- START: Search Modal -->
<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0">Поиск</h4>

                <div class="nk-gap-1"></div>
                <form action="/catalog/search/game/" class="nk-form nk-form-style-1">
                    <input type="text" value="" name="searchname" class="form-control" placeholder="Поиск..." autofocus>
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
                <?php if (!isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
                <h4 class="mb-0"><span class="text-main-1">Авторизация</span></h4>

                <div class="nk-gap-1"></div>
                <form class="nk-form text-white" id="login-form" method="POST">
                    <div class="row vertical-gap">
                        <div class="col-md-12">
                            Используйте логин и пароль:

                            <div class="nk-gap"></div>
                            <input type="text" value="" name="login-login" class="required form-control" placeholder="Логин">

                            <div class="nk-gap"></div>
                            <input type="password" value="" name="login-pwd" class="required form-control" placeholder="Пароль" autocomplete="false">
                            <?php echo $_smarty_tpl->tpl_vars['capchaImg']->value;?>

                        </div>
                        
                    </div>
                        <div class="nk-gap"></div>
                        <div id="login-error" class="nk-info-box text-danger hide" style="padding: 0; border: none;">   
                            <i class="ion-close-round"></i>
                            <em id="login-error-msg"></em>
                        </div>
                    
                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <input onclick="login();" type="button" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" value="Войти">
                        </div>
                        <div class="col-md-6">
                            <div class="mnt-5">
                                <small><a href="#">Забыли пароль?</a></small>
                            </div>
                            <div class="mnt-5">
                                <small><a href="javascript: showreg();">Регистрация</a></small>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="nk-form text-white hide" id="reg-form" method="POST">
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <div class="nk-gap"></div>
                            <input id="reg-email" type="email" value="" name="reg-email" class="required form-control" placeholder="Email">

                            <div class="nk-gap"></div>
                            <input id="reg-login" type="text" value="" name="reg-login" class="required form-control" placeholder="Логин">
                        </div>
                        <div class="col-md-6">
                            <div class="nk-gap"></div>
                            <input id="reg-name" type="text" value="" name="reg-name" class="required form-control" placeholder="Имя">

                            <div class="nk-gap"></div>
                            <input type="password" id="pswd" value="" name="reg-pwd" class="required form-control" placeholder="Пароль" autocomplete="false">
                        </div>
                    </div>
                    <div id="pswd_info">
                        <ul>
                        <li id="letter">Минимум <strong>одна буква</strong></li>
                        <li id="capital">Минимум <strong>одна заглавная буква</strong></li>
                        <li id="number">Минимум <strong>одна цифра</strong></li>
                        <li id="length">Быть не менее <strong>8 символов</strong></li>
                        </ul>
                    </div>
                        <div class="nk-gap"></div>
                        <div id="reg-error" class="nk-info-box text-danger hide" style="padding: 0; border: none;">   
                            <i class="ion-close-round"></i>
                            <em id="reg-error-text"></em>
                        </div>
                    
                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <input id="reg-btn" type="button" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" value="Создать">
                        </div>
                        <div class="col-md-6">
                            <div class="mnt-5">
                                <small><a href="javascript: showlogin();">Уже есть аккаунт?</a></small>
                            </div>
                        </div>
                    </div>
                </form>
                <?php } else { ?>
                <div class="nk-gap-1"></div>
                <form action="/user/logout/" class="nk-form text-white" method="POST">
                    <div class="row vertical-gap">
                        <div class="col-md-12">
                            <h4 class="mb-0"><span class="text-main-1">Ваше имя: </span> <?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_name'];?>
</h4>
                            <div class="nk-gap"></div>
                            <h4 class="mb-0"><span class="text-main-1">Ваш email: </span> <?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_email'];?>
</h4>
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <a <?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_link'] == '') {?> href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
/" <?php } else { ?> href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_link'];?>
/" <?php }?> class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Профиль</a>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" value="Выход">
                        </div>
                    </div>
                </form>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<!-- END: Login Modal -->

    

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/css/wishlist.css">
<!-- START: Scripts -->
<!-- jQuery -->
<!-- START: Scripts -->

    
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/js/main.js"><?php echo '</script'; ?>
>
<!-- Object Fit Polyfill -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/object-fit-images/dist/ofi.min.js"><?php echo '</script'; ?>
>

<!-- GSAP <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"><?php echo '</script'; ?>
>-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/gsap/src/minified/TweenMax.min.js"><?php echo '</script'; ?>
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

<!-- Jarallax <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/jarallax/dist/jarallax-video.min.js"><?php echo '</script'; ?>
>-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/jarallax/dist/jarallax.min.js"><?php echo '</script'; ?>
>


<!-- imagesLoaded <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"><?php echo '</script'; ?>
>-->


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

<!-- Jquery Countdown + Moment <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"><?php echo '</script'; ?>
>-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/moment/min/moment.min.js"><?php echo '</script'; ?>
>


<!-- Hammer.js -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/hammerjs/hammer.min.js"><?php echo '</script'; ?>
>

<!-- NanoSroller <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"><?php echo '</script'; ?>
>-->


<!-- SoundManager2 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"><?php echo '</script'; ?>
>-->


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

<!-- nK Share <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/plugins/nk-share/nk-share.js"><?php echo '</script'; ?>
>-->


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

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/js/check_pass.js"><?php echo '</script'; ?>
>

    
</body>
</html>
<?php }
}
