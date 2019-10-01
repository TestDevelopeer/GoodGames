<?php
/* Smarty version 3.1.30, created on 2019-02-19 14:46:41
  from "D:\OSPanel\domains\gg.com\views\default\game\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c6beca1b5c8b0_76177886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b67724015dd6aaeecbf0a8e2c14f8d717726800c' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\game\\footer.tpl',
      1 => 1550576720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6beca1b5c8b0_76177886 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <form action="" class="nk-form nk-form-ajax" method="POST" id="support-form">
                            <div class="row vertical-gap sm-gap">
                                <div class="col-md-6">
                                    <input type="email" class="form-control required" name="email" placeholder="Email *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control required" name="name" placeholder="Имя *">
                                </div>
                            </div>
                            <div class="nk-gap"></div>
                            <input type="text" class="form-control required" name="subject" placeholder="Тема *">
                            <div class="nk-gap"></div>
                            <textarea class="form-control required" name="message" rows="5" placeholder="Сообщение *"></textarea>
                            <div class="nk-gap-1"></div>
                            <button onclick="sendsupportmessage();" type="submit" class="nk-btn nk-btn-rounded nk-btn-color-white">
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
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsTwoLastArt']->value, 'art');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
?>
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="nk-post-image">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
">
                                    </a>
                                    <div class="nk-post-title"><a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="text-art"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</a></div>
                                    <div class="nk-post-date">
                                        <span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['art']->value['date_art'];?>

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
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->

        
    </div>
        <img class="nk-page-background-top" src="https://steamcdn-a.akamaihd.net/steam/apps/361420/page_bg_generated_v6b.jpg?t=1549606232" alt="" style="width: calc(100% - 0px);">
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
                            <input type="email" value="" name="reg-email" class="required form-control" placeholder="Email">

                            <div class="nk-gap"></div>
                            <input type="text" value="" name="reg-login" class="required form-control" placeholder="Логин">
                        </div>
                        <div class="col-md-6">
                            <div class="nk-gap"></div>
                            <input type="text" value="" name="reg-name" class="required form-control" placeholder="Имя">

                            <div class="nk-gap"></div>
                            <input type="password" value="" name="reg-pwd" class="required form-control" placeholder="Пароль" autocomplete="false">
                        </div>
                    </div>
                        <div class="nk-gap"></div>
                        <div id="reg-error" class="nk-info-box text-danger hide" style="padding: 0; border: none;">   
                            <i class="ion-close-round"></i>
                            <em></em>
                        </div>
                    
                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <input onclick="reg();" type="button" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" value="Создать">
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

    

    
<!-- START: Scripts -->
<!-- jQuery -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/js/jquery-1.10.1.min.js"><?php echo '</script'; ?>
>
    
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
assets/js/YouTubePopUp.jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    jQuery(function(){
        jQuery("a.bla-1").YouTubePopUp();
        jQuery("a.bla-2").YouTubePopUp( { autoplay: 0 } ); // Disable autoplay
    });
<?php echo '</script'; ?>
>
    
</body>
</html>
<?php }
}
