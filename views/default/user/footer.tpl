
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
                {if !isset($arUser)}
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
                            {$capchaImg}
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
                {else}
                <div class="nk-gap-1"></div>
                <form action="/user/logout/" class="nk-form text-white" method="POST">
                    <div class="row vertical-gap">
                        <div class="col-md-12">
                            <h4 class="mb-0"><span class="text-main-1">Ваше имя: </span> {$arUser['user_name']}</h4>
                            <div class="nk-gap"></div>
                            <h4 class="mb-0"><span class="text-main-1">Ваш email: </span> {$arUser['user_email']}</h4>
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <a {if $arUser['user_link'] == ""} href="/user/profile/{$arUser['id_user']}/" {else} href="/user/profile/{$arUser['user_link']}/" {/if} class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Профиль</a>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" value="Выход">
                        </div>
                    </div>
                </form>
                {/if}
            </div>
        </div>
    </div>
</div>
<!-- END: Login Modal -->

    

    <link rel="stylesheet" type="text/css" href="{$teplateWebPath}assets/css/wishlist.css">
<!-- START: Scripts -->
<!-- jQuery -->
<!-- START: Scripts -->

    
<script src="{$teplateWebPath}assets/js/main.js"></script>
<!-- Object Fit Polyfill -->
<script src="{$teplateWebPath}assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- GSAP <script src="{$teplateWebPath}assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>-->
<script src="{$teplateWebPath}assets/vendor/gsap/src/minified/TweenMax.min.js"></script>


<!-- Popper -->
<script src="{$teplateWebPath}assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="{$teplateWebPath}assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="{$teplateWebPath}assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax <script src="{$teplateWebPath}assets/vendor/jarallax/dist/jarallax-video.min.js"></script>-->
<script src="{$teplateWebPath}assets/vendor/jarallax/dist/jarallax.min.js"></script>


<!-- imagesLoaded <script src="{$teplateWebPath}assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>-->


<!-- Flickity -->
<script src="{$teplateWebPath}assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="{$teplateWebPath}assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="{$teplateWebPath}assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Jquery Validation -->
<script src="{$teplateWebPath}assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Jquery Countdown + Moment <script src="{$teplateWebPath}assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>-->
<script src="{$teplateWebPath}assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="{$teplateWebPath}assets/vendor/moment/min/moment.min.js"></script>


<!-- Hammer.js -->
<script src="{$teplateWebPath}assets/vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller <script src="{$teplateWebPath}assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>-->


<!-- SoundManager2 <script src="{$teplateWebPath}assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>-->


<!-- Seiyria Bootstrap Slider -->
<script src="{$teplateWebPath}assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- Summernote -->
<script src="{$teplateWebPath}assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

<!-- nK Share <script src="{$teplateWebPath}assets/plugins/nk-share/nk-share.js"></script>-->


<!-- GoodGames -->
<script src="{$teplateWebPath}assets/js/goodgames.min.js"></script>
<script src="{$teplateWebPath}assets/js/goodgames-init.js"></script>
<!-- END: Scripts -->

<script src="{$teplateWebPath}assets/js/check_pass.js"></script>

    
</body>
</html>
