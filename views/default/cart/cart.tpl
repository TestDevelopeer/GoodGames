    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs custom-game-bread">
        
        
        <li class="custom-li-bread"><a href="/">Главная</a></li>

        <li style="font-size: 1em;"> > </li>
        
        <li><span>Корзина</span></li>

    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->
 
<div class="container">
    {if $cartCnt != 0}
    <div class="nk-store nk-store-cart" id="cart-block-purchase">
        <div class="table-responsive" id="table-games">

            <!-- START: Products in Cart -->
            <table class="table nk-store-cart-products">
                <tbody>
                        {foreach $rsCart as $cart}
                        <tr>
                            <td class="nk-product-cart-thumb">
                                <a href="/game/{$cart['id_game']}/" class="nk-image-box-1 nk-post-image">
                                    <img src="{$teplateImgPath}games/{$cart['id_game']}/main.jpg" alt="{$cart['name_game']}" width="115">
                                </a>
                            </td>
                            <td class="nk-product-cart-title">
                                <h5 class="h6">Название:</h5>

                                <h2 class="nk-post-title h4">
                                    <a href="/game/{$cart['id_game']}/">{$cart['name_game']}</a>
                                </h2>
                                <div class="nk-popup-gallery">
                                <div class="row vertical-gap sm-gap" style="margin-top: 5px;">
                                {foreach $namePhoto as $photo}
                                {if $photo['id_game'] == $cart['id_game']}
                                {section name=photo_inc start=0 loop=3 step=1}
                                <div class="col-4 col-md-4">
                                    <div class="nk-gallery-item-box">
                                        <a href="{$teplateImgPath}games/{$photo['id_game']}/{$photo[photo_inc]}" class="nk-gallery-item" data-size="1200x550">
                                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                            <img src="{$teplateImgPath}games/{$photo['id_game']}/{$photo[photo_inc]}" alt="">
                                        </a>
                                    </div>
                                </div>
                                {/section}
                                {/if}
                                {/foreach}
                                </div>
                                </div>
                            </td>
                            <td class="nk-product-cart-price">
                                <h5 class="h6">Цена:</h5>

                                <strong>{if $cart['discount_game'] == 0}{$cart['price_game']}p.{else}<s style="color: red;">{$cart['price_game']}p.</s>{/if}</strong>
                            </td>
                            <td class="nk-product-cart-quantity">
                                <h5 class="h6">Скидка:</h5>

                                <strong>{if $cart['discount_game'] == 0}<span class="tx-warning tx-12"><span class="tx-lato">0%</span></span>{else}<span class="tx-warning tx-12"><span class="tx-lato">{$cart['discount_game']}%</span></span>{/if}</strong>
                            </td>
                            <td class="nk-product-cart-total">
                                <h5 class="h6">Итого:</h5>

                                <strong>{if $cart['discount_game'] == 0}{$cart['price_game']}p.{else}{$cart['discount_price_game']}p.{/if}</strong>
                            </td>
                            <td class="nk-product-cart-remove"><a href="#"><span class="ion-android-close"></span></a></td>
                        </tr>
                                {if $cart['discount_game'] == 0}
                                {$price = $price + $cart['price_game']}
                                {else}
                                {$price = $price + $cart['discount_price_game']}
                                {/if}
                        {/foreach}
                </tbody>
            </table>
            <!-- END: Products in Cart -->

        </div>
        <div class="nk-gap-2" id="table-games-buttons">
            <a class="nk-btn nk-btn-rounded nk-btn-color-main-1 float-left" href="javascript: clearcart();">Очистить корзину</a>
            <a class="nk-btn nk-btn-rounded nk-btn-color-white float-right" href="/">Продолжить покупки</a>
        </div>
        
        
        <div class="clearfix"></div>
        <div class="nk-gap-2"></div>
        {if isset($arUser)}
        <div class="row vertical-gap">
            
            <div class="col-md-6">

                <!-- START: Calculate Shipping -->
                <h3 class="nk-title h4">Данные для оплаты</h3>
                <form action="#" class="nk-form">
                    <label for="country-sel">Способ оплаты <span class="text-main-1">*</span>:</label>
                    <select name="country" class="form-control required" id="price-list">
                        <option value="PC">ЯндексДеньги</option>
                        <option value="AC">Банковская карта</option>
                    </select>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-sm-6">
                            <label for="state">Email <span class="text-main-1">*</span>:</label>
                            <input readonly="" type="Email" value="{$arUser['user_email']}" class="form-control required" name="state" id="state">
                        </div>
                        <div class="col-sm-6">
                            <label for="zip">Имя профиля <span class="text-main-1">*</span>:</label>
                            <input readonly="" type="text" value="{$arUser['user_name']}" class="form-control required" name="zip" id="zip">
                        </div>
                    </div>  
                </form>
                <!-- END: Calculate Shipping -->

            </div>
            <div class="col-md-6">
                <!-- START: Cart Totals -->
                <h3 class="nk-title h4">К оплате</h3>
                <table class="nk-table nk-table-sm">
                    <tbody>
                        <tr class="nk-store-cart-totals-subtotal">
                            <td>
                                Товаров
                            </td>
                            <td>
                                {$cartCnt}шт.
                            </td>
                        </tr>
                        
                        <tr class="nk-store-cart-totals-total">
                            <td>
                                Всего
                            </td>
                            <td>
                                {$price}p.
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- END: Cart Totals -->
            </div>

        </div>

        <div class="nk-gap-2" id="add-order-button"><a class="nk-btn nk-btn-rounded nk-btn-color-success float-right" href="javascript: addorder();">Оформить заказ</a></div>
        
        <div class="clearfix"></div>
        {else}
                <div class="nk-info-box text-warning cart-block">
                    <div class="nk-info-box-icon">
                        <i class="ion-android-notifications-none"></i>
                    </div>
                    
                    <h3>Войдите!</h3>
                    <em>Чтобы оформить заказ вам нужно авторизоваться или создать аккаунт.</em>
                    <div class="nk-gap-1"></div>
                    <a class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-warning" href="#" data-toggle="modal" data-target="#modalLogin">
                        Войти
                    </a>
                </div>
        {/if}

    </div>
    {else}
                <div class="nk-info-box text-warning cart-block">
                    <div class="nk-info-box-icon">
                        <i class="ion-android-notifications-none"></i>
                    </div>
                    
                    <h3>Пусто!</h3>
                    <em>Кажется ваша корзина пустая, рекомендуем перейти в магазин и добавить что-нибудь.</em>
                    <div class="nk-gap-1"></div>
                    <a href="/catalog/" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-warning">
                        Магазин
                    </a>
                </div>
    {/if}
                <div class="nk-info-box text-warning cart-block hide" id="cart-notify">
                    <div class="nk-info-box-icon">
                        <i class="ion-android-notifications-none"></i>
                    </div>
                    
                    <h3>Пусто!</h3>
                    <em>Кажется ваша корзина пустая, рекомендуем перейти в магазин и добавить что-нибудь.</em>
                    <div class="nk-gap-1"></div>
                    <a href="/catalog/" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-warning">
                        Магазин
                    </a>
                </div>
</div>

<div class="nk-gap-2"></div>