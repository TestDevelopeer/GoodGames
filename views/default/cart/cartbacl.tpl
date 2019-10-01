    <div class="nk-store nk-store-cart" id="cart-block-purchase">
<div class="nk-accordion" id="accordion-1" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="accordion-1-3-heading">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#accordion-1-3" aria-expanded="false" aria-controls="accordion-1-3">
                                Collapsible 3 <span class="panel-heading-arrow fa fa-angle-down"></span>
                            </a>
                        </div>
                        <div id="accordion-1-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-1-3-heading">
                <div class="nk-accordion" id="accordion-1" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="accordion-1-1-heading">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#accordion-1-1" aria-expanded="true" aria-controls="accordion-1-1">
                                Показать игры <span class="panel-heading-arrow fa fa-angle-down"></span>
                            </a>
                        </div>
                        <div id="accordion-1-1" class="panel-collapse collapse table-responsive" id="table-games" role="tabpanel" aria-labelledby="accordion-1-1-heading">
                                        <!-- START: Products in Cart -->
            <table class="table nk-store-cart-products">
                <tbody>
                        {foreach $rsGames as $orderGame}
                        <tr>
                            <td class="nk-product-cart-thumb">
                                <a href="/game/{$orderGame['id_game']}/" class="nk-image-box-1 nk-post-image">
                                    <img src="{$teplateImgPath}games/{$orderGame['id_game']}/main.jpg" alt="{$orderGame['name_game']}" width="115">
                                </a>
                            </td>
                            <td class="nk-product-cart-title">
                                <h5 class="h6">Название:</h5>

                                <h2 class="nk-post-title h4">
                                    <a href="/game/{$orderGame['id_game']}/">{$orderGame['name_game']}</a>
                                </h2>
                                <div class="nk-popup-gallery">
                                <div class="row vertical-gap sm-gap" style="margin-top: 5px;">
                                {foreach $namePhoto as $photo}
                                {if $photo['id_game'] == $orderGame['id_game']}
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

                                <strong>{if $orderGame['discount_game'] == 0}{$orderGame['price_game']}p.{else}<s style="color: red;">{$orderGame['price_game']}p.</s>{/if}</strong>
                            </td>
                            <td class="nk-product-cart-quantity">
                                <h5 class="h6">Скидка:</h5>

                                <strong>{if $orderGame['discount_game'] == 0}<span class="tx-warning tx-12"><span class="tx-lato">0%</span></span>{else}<span class="tx-warning tx-12"><span class="tx-lato">{$orderGame['discount_game']}%</span></span>{/if}</strong>
                            </td>
                            <td class="nk-product-cart-total">
                                <h5 class="h6">Итого:</h5>

                                <strong>{if $orderGame['discount_game'] == 0}{$orderGame['price_game']}p.{else}{$orderGame['discount_price_game']}p.{/if}</strong>
                            </td>
                            <td class="nk-product-cart-remove"><a href="#"><span class="ion-android-close"></span></a></td>
                        </tr>
                                {if $orderGame['discount_game'] == 0}
                                {$price = $price + $orderGame['price_game']}
                                {else}
                                {$price = $price + $orderGame['discount_price_game']}
                                {/if}
                        {/foreach}
                </tbody>
            </table>
            <!-- END: Products in Cart -->
                        </div>
                    </div>
                </div>

        <div class="clearfix"></div>
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-md-6">

                <!-- START: Calculate Shipping -->
                <h3 class="nk-title h4">Данные для оплаты</h3>
                <form action="#" class="nk-form">
                    <label for="country-sel">Способ оплаты <span class="text-main-1">*</span>:</label>
                    <select name="country" class="form-control required" id="price-list">
                        {if $checkOrder['order_payment'] == 'PC'}
                        <option selected="" value="PC">ЯндексДеньги</option>
                        {else}
                        <option selected="" value="AC">Банковская карта</option>
                        {/if}
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
                                {$cnt}
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
        <div class="nk-gap-2" id="show-payment">
            <form method="POST" target="_blank" action="https://money.yandex.ru/quickpay/confirm.xml">
                <input type="hidden" name="receiver" value="410016538063744" readonly="">
                <input type="hidden" name="formcomment" value="Заказ №{$checkOrder['id_order']}">
                <input type="hidden" name="short-dest" value="Заказ №{$checkOrder['id_order']}">
                <input type="hidden" name="label" value="$order_id">
                <input type="hidden" name="quickpay-form" value="donate">
                <input type="hidden" name="targets" value="транзакция">
                <input type="hidden" name="sum" value="{$price}" data-type="number">
                <input type="hidden" name="comment" value="Заказ №{$checkOrder['id_order']}">
                <input type="hidden" name="need-fio" value="false">
                <input type="hidden" name="need-email" value="false">
                <input type="hidden" name="need-phone" value="true">
                <input type="hidden" name="need-address" value="false">
                <label>
                    <input type="hidden" name="paymentType" value="{$checkOrder['order_payment']}">
                </label>
                <input class="nk-btn nk-btn-rounded nk-btn-color-success float-right" type="submit" value="Оплатить">
            </form>
        </div>
        
        <div class="clearfix"></div>
                                </div>
                    </div>
                </div>
                <!-- END: Accordion 1 -->
    </div>