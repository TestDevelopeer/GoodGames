
            <!-- START: Footer -->
<footer class="nk-footer">
    {if $controllerName != 'User'}
    <div class="container">
        <div class="nk-gap-3"></div>
        <div class="row vertical-gap">
            
            <div class="col-md-6">
                
                <div class="nk-widget">
                    <h4 class="nk-widget-title custom-h2"><span class="text-main-1">Связаться</span> с нами</h4>
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
            
            <div class="col-md-6 {if $controllerName == 'News'} hidden-phone {/if}">
                <div class="nk-widget">
                    <h4 class="nk-widget-title custom-h2"><span class="text-main-1">Последние</span> публикации</h4>
                    <div class="nk-widget-content">
                        <div class="row vertical-gap sm-gap">
                            {foreach $rsTwoLastArt as $art}
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="/article/{$art['id_art']}/" class="nk-post-image">
                                        <img src="{$teplateImgPath}articles/{$art['id_art']}/main.jpg" alt="{$art['name_art']}">
                                    </a>
                                    <div class="nk-post-title"><a href="/article/{$art['id_art']}/" class="text-art">{$art['name_art']}</a></div>
                                    <div class="nk-post-date">
                                        <span class="fa fa-calendar"></span> {$art['date_art']}
                                    </div>
                                </div>
                            </div>
                            {/foreach}
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="nk-gap-3"></div>
    </div>
    {/if}
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

    

    
        <!-- START: Page Background <img class="nk-page-background-top" src="{$teplateWebPath}assets/images/bg-top-4.png" alt="">-->
        {if $controllerName == 'Index'}
            <img class="nk-page-background-fixed hidden-phone" src="{$teplateWebPath}assets/images/background.jpg" alt="">
        {/if}
    
    

<!-- END: Page Background <img class="nk-page-background-bottom" src="{$teplateWebPath}assets/images/bg-bottom.png" alt="">-->

    

    
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
{if isset($arUser)}
<div class="nk-modal modal fade" id="modal2FA" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>
                <h4 class="mb-0"><span class="text-main-1">Двухфакторная авторизация</span></h4>
                <div class="nk-gap-1"></div>
                {if $rsUser['2FA'] == 0}
                <form class="nk-form text-white" id="2fa-form" method="POST">
                    <div class="row vertical-gap">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            Используйте текстовый или QR код, чтоб сгенерировать ключи в Google Authenticator:

                            <div class="nk-gap"></div>
                            <input readonly="" style="color: red;" type="text" value="{$secret}" id="2fa-code" class="required form-control" placeholder="Код">

                            <div class="nk-gap"></div>
                            {$qrImg}
                            <div class="nk-gap"></div>
                            <input onclick="enable2fa();" type="button" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" value="Подключить">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                        <div class="nk-gap"></div>
                        <div id="login-error" class="nk-info-box text-danger hide" style="padding: 0; border: none;">   
                            <i class="ion-close-round"></i>
                            <em id="login-error-msg"></em>
                        </div>
                    
                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-12">
                            <div class="mnt-5">
                                <small>Запомните красный код, он понадобится для снятия 2FA защиты!</small>
                            </div>
                        </div>
                    </div>
                </form>
                {else}
                <form class="nk-form text-white" id="2fa-form" method="POST">
                    <div class="row vertical-gap">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            Используйте свой ключ, чтобы отключить защиту:

                            <div class="nk-gap"></div>
                            <input type="text" value="" id="2fa-code" class="required form-control" placeholder="Введите свой ключ">

                            <div class="nk-gap"></div>

                            <input onclick="disable2fa();" type="button" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" value="Отключить">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                        <div class="nk-gap"></div>
                        <div id="login-error" class="nk-info-box text-danger hide" style="padding: 0; border: none;">   
                            <i class="ion-close-round"></i>
                            <em id="login-error-msg"></em>
                        </div>
                    
                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-12">
                            <div class="mnt-5">
                                <small><a href="">Забыли ключ?</a></small>
                            </div>
                        </div>
                    </div>
                </form>
                {/if}
            </div>
        </div>
    </div>
</div> 
{/if}   


<div class="nk-modal modal fade" id="refreshPwd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>
                <h4 class="mb-0"><span class="text-main-1">Восстановление пароля</span></h4>
                <div class="nk-gap-1"></div>
                <form class="nk-form text-white" id="refreshPwd-form" method="POST">
                    <div class="row vertical-gap">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            Укажите почту, привязанную к вашему аккаунту:

                            <div class="nk-gap"></div>
                            <input type="email" value="" id="refresh-email" name="refresh-email" class="required form-control" placeholder="Email">

                            <div class="nk-gap"></div>
                            <div id="refresh-error" class="nk-info-box text-danger hide" style="padding: 0; border: none;">   
                                <i class="ion-close-round"></i>
                                <em id="refresh-error-msg"></em>
                            </div>
                            <div id="refresh-success" class="nk-info-box text-success hide" style="padding: 0; border: none;">   
                                <i class="ion-close-round"></i>
                                <em id="refresh-success-msg"></em>
                            </div>
                            <input onclick="refreshpwd();" type="button" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" value="Отправить">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 


<div class="nk-modal modal fade" id="refresh2FA" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>
                <h4 class="mb-0"><span class="text-main-1">Восстановление пароля</span></h4>
                <div class="nk-gap-1"></div>
                <form class="nk-form text-white" id="refresh2FA-form" method="POST">
                    <div class="row vertical-gap">
                        <div class="col-md-2"></div>
                        <div class="col-md-8" id="2fa-hide">
                            Укажите почту и красный код 2FA вашего аккаунта:
                            <div class="nk-gap"></div>
                            <input type="email" value="" id="2FA-email" name="2FA-email" class="required form-control" placeholder="Email">
                            <div class="nk-gap"></div>
                            <input type="text" value="" id="2FA-code" name="2FA-code" class="required form-control" placeholder="2FA код">
                            <div class="nk-gap"></div>
                            <div id="refresh2fa-error" class="nk-info-box text-danger hide" style="padding: 0; border: none;">   
                                <i class="ion-close-round"></i>
                                <em id="refresh2fa-error-msg"></em>
                            </div>
                            <input onclick="refresh2fa();" type="button" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" value="Отправить">
                        </div>
                        <div class="col-md-8 hide" id="refresh2fa-success">
                            <div class="nk-info-box text-success" style="padding: 0; border: none;">   
                                <i class="ion-close-round"></i>
                                <em id="refresh2fa-success-msg"></em>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    
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

                <div class="nk-gap-1" id="login-nk-gap"></div>
                <form class="nk-form text-white" id="login-form" method="POST">
                    <div class="row vertical-gap">
                        <div class="col-md-12">
                            Используйте логин и пароль:

                            <div class="nk-gap"></div>
                            <input type="text" value="" name="login-login" class="required form-control" placeholder="Логин">

                            <div class="nk-gap"></div>
                            <input type="password" value="" name="login-pwd" class="required form-control" placeholder="Пароль" autocomplete="false">
                            {$capchaImg}
                            <div class="nk-gap"></div>
                            <div class="checkboxContainer">
                                <div class="checkboxRow" title="Если вы выберете эту опцию, то будете автоматически входить в свой аккаунт в течение следующих 30 дней либо пока не нажмёте «Выход» в меню аккаунта.  Эта возможность предоставляется только пользователям, включившим защиту Steam Guard.">
                                    <input class="" type="checkbox" name="remember_login" value="is_remember" id="remember_login">
                                    <label for="remember_login">Запомнить на этом устройстве</label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                        
                        <div id="login-error" class="nk-info-box text-danger hide" style="padding: 0; border: none;">
                        <div class="nk-gap"></div>   
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
                                <small><a href="#" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#refreshPwd">Забыли пароль?</a></small>
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
                <form class="nk-form text-white hide" id="2fa-form" method="POST">
                    <div class="newmodal" style="z-index: 1000; max-width: 400px; left: 702px; top: 238px;"><div class="modal_top_bar"></div><div class="newmodal_header_border"><div class="newmodal_header"><div class="newmodal_close"></div><div class="title_text">Мобильная аутентификация GG Guard</div></div></div><div class="newmodal_content_border"><div class="newmodal_content" style="max-height: 813px;"><div><div class="login_modal loginTwoFactorCodeModal" style="">
        <div>
        <div class="twofactorauth_message_area">
            <div id="login_twofactorauth_icon" class="auth_icon auth_icon_phone">
            </div>
            <div class="twofactorauth_messages" id="login_twofactorauth_messages">
                <div class="twofactorauth_message" id="login_twofactorauth_message_entercode" style="">
                    <div class="auth_modal_h1">Здравствуйте, <span id="login_twofactorauth_message_entercode_accountname"></span>!</div>
                    <p>Этот аккаунт находится под защитой Google аутентификатора.</p>
                </div>
                <div class="twofactorauth_message" id="login_twofactorauth_message_incorrectcode" style="display: none;">
                    <div class="auth_modal_h1">Ой!</div>
                    <p>Извините, <br>но код неверен…</p>
                </div>
            </div>
        </div>
        <div id="login_twofactorauth_details_messages" class="twofactorauth_details_messages">
            <div class="twofactorauth_details" id="login_twofactorauth_details_entercode" style="">
                Введите код из приложения Google Authenticator:         </div>
            </div>
        </div>
        <div class="twofactorauthcode_entry_area">
            <div id="login_twofactor_authcode_entry">
                <div class="twofactorauthcode_entry_box">
                    <input class="twofactorauthcode_entry_input authcode_placeholder" id="twofactorcode_entry" type="text" placeholder="введите код здесь" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="modal_buttons" id="login_twofactorauth_buttonsets">
            <div class="auth_buttonset" id="login_twofactorauth_buttonset_entercode" style="">
                <a class="auth_button leftbtn" href="javascript: login2fa();">
                    <div class="auth_button_h3">Подтвердить</div>
                    <div class="auth_button_h5">код аутентификатора</div>
                </a>
                <a class="auth_button" href="#" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#refresh2FA">
                    <div class="auth_button_h3">Помогите,</div>
                    <div class="auth_button_h5">я забыл код аутентификатора</div>
                </a>
                <div style="clear: left;"></div>
            </div>
        </div>
        </div>
    </div></div></div></div></div>
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


<div class="nk-modal modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>
                <h4 class="mb-0"><span class="text-main-1">Загрузить изображения</span></h4>
                <div class="nk-gap-1"></div>
                <div class="avatar_upload_ctn" id="avatar_upload_ctn">
                    <div class="gray_bevel">
                        <form method="POST" action="/user/uploaduserpic/" enctype="multipart/form-data">
                            <div class="gray_bevel for_text_input">
                                <input class="dynInput" type="text" name="picName" id="picName" size="30" value="" placeholder="Название" required="">
                            </div>
                            <div class="nk-gap"></div>
                            <div class="upload_controls">
                                <div class="avatar_upload_input_ctn">
                                    <input type="file" name="pic" id="pic" size="16">
                                </div>
                                <button id="avatar_upload_button" type="submit" class="upload_btn btnv6_blue_hoverfade btn_small">
                                    <span>Загрузить</span>
                                </button>
                            </div>
                        </form>
                        <div class="avatar_upload_throbber">
                            <img src="https://steamcommunity-a.akamaihd.net/public/images/login/throbber.gif">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    

    
<!-- START: Scripts -->
{if $actionName == 'wishlist'}
    <link rel="stylesheet" type="text/css" href="{$teplateWebPath}assets/css/wishlist.css">
{/if}

    
<script src="{$teplateWebPath}assets/js/main.js"></script>
<script src="{$teplateWebPath}assets/js/mainCart.js"></script>
<script src="{$teplateWebPath}assets/js/mainLogin.js"></script>
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
<script src="{$teplateWebPath}assets/js/mainSearch.js"></script>

{if $controllerName == 'Game'}
    <script src="{$teplateWebPath}assets/js/gameController.js"></script>
    <script src="{$teplateWebPath}assets/js/YouTubePopUp.jquery.js"></script>
    <script type="text/javascript">
        jQuery(function(){
            jQuery("a.bla-1").YouTubePopUp();
            jQuery("a.bla-2").YouTubePopUp( { autoplay: 0 } ); // Disable autoplay
        });
    </script>
{/if}
{if $controllerName == 'Gallery'}
    <script src="{$teplateWebPath}assets/js/galleryController.js"></script>
{/if}
{if isset($arUser) && $controllerName == 'User' && $actionName == 'profile'}
    <script src="{$teplateWebPath}assets/js/chatController.js"></script>
{/if}
{if $controllerName == 'User'}
    <script src="{$teplateWebPath}assets/js/userController.js"></script>
{/if}
{if $controllerName == 'Index'}
    <script src="{$teplateWebPath}assets/js/indexController.js"></script>
{/if}
{if $controllerName == 'Order'}
    <script src="{$teplateWebPath}assets/js/orderController.js"></script>
{/if}
{if $controllerName == 'Cart'}
    <script src="{$teplateWebPath}assets/js/cartController.js"></script>
{/if}
{if $controllerName == 'User' && $actionName == 'searchusers'}
    <script type="text/javascript">
        $(document).ready(function(){
            var form = $('#user_name'), formVal = form.val();
            form.val('').focus().val(formVal);
        });
    </script>
{/if}
{if $controllerName == 'News'}
    <script src="{$teplateWebPath}assets/js/newsController.js"></script>
{/if}

</body>
</html>
