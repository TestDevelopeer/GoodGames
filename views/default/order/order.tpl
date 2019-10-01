<div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        
        
        <li><a href="/">Главная</a></li>

        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span>Корзина</span></li>

    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->
 
<div class="container">
	    <div class="nk-store nk-store-cart" id="cart-block-purchase">
	    	{foreach $checkOrder as $order}
<div class="nk-accordion" id="accordion-{$order['id_order']}" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="accordion-1-{$order['id_order']}-heading">
                            <a class="{if $rsLastNotPayOrder['id_order'] != $order['id_order']}collapsed{else}{/if}" data-toggle="collapse" data-parent="#accordion-1" href="#accordion-1-{$order['id_order']}" aria-expanded="false" aria-controls="accordion-1-{$order['id_order']}" id="left-order-a">
                                Заказ №{$order['id_order']} ({if $order['order_status'] == 0 && $order['order_time_for_pay'] == 1}
                                <span class="not-payment">Ожидает оплаты</span>
                                <span class="text-warning" style="">
                                У вас есть {$time} {if $time == 1} минута {else if $time == 2 || $time == 3 || $time == 4} минуты {else} минут {/if} на оплату заказа </span>{else if $order['order_status'] == 0 && $order['order_time_for_pay'] == 0}
                                <span class="text-warning" style="">
                                Действие данного заказа истекло
                                </span>{else}<span class="yes-payment">Оплачено</span>
                                {/if})
                                <span class="panel-heading-arrow fa fa-angle-down"></span>
                            </a>
                        </div>
                        <div id="accordion-1-{$order['id_order']}" class="panel-collapse collapse {if $rsLastNotPayOrder['id_order'] == $order['id_order']}show{/if}" role="tabpanel" aria-labelledby="accordion-1-{$order['id_order']}-heading">
                <div class="nk-accordion" id="game-{$order['id_order']}" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="game-1-{$order['id_order']}-heading">
                            <a class="collapsed game-collapse" data-toggle="collapse" data-parent="#game-{$order['id_order']}" href="#game-1-{$order['id_order']}" aria-expanded="true" aria-controls="game-1-{$order['id_order']}">
                                Показать игры <span class="panel-heading-arrow fa fa-angle-down"></span>
                            </a>
                        </div>
                        <div id="game-1-{$order['id_order']}" class="panel-collapse collapse table-responsive" id="table-games" role="tabpanel" aria-labelledby="game-1-{$order['id_order']}-heading">
                                        <!-- START: Products in Cart -->
            <table class="table nk-store-cart-products">
                <tbody>
                        {foreach $rsGames[$order['id_order']] as $orderGame}
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
                        </tr>
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
            	{if $order['order_status'] == 0 && $order['order_time_for_pay'] == 1}   	
                <!-- START: Calculate Shipping -->
                <h3 class="nk-title h4" id="data-pay-order-h">Данные для оплаты</h3>
                <form action="#" class="nk-form" id="data-pay-order">
                    <label for="country-sel">Способ оплаты <span class="text-main-1">*</span>:</label>
                    <select name="country" class="form-control required" id="price-list">
                        {if $order['order_payment'] == 'PC'}
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
                {else if $order['order_status'] == 1 && $order['order_time_for_pay'] == 1}
                <div class="nk-info-box text-success">
                    <div class="nk-info-box-icon">
                        <i class="ion-android-notifications-none"></i>
                    </div>
                    
                    <h3>Оплачено!</h3>
                    <em>Спасибо за покупку, мы рады, что вы выбрали именно нас.</em>
                    <div class="nk-gap-1"></div>
                </div>
                {else if $order['order_time_for_pay'] == 0}
                <div class="nk-info-box text-main-1">
                    <div class="nk-info-box-icon">
                        <i class="ion-android-notifications-none"></i>
                    </div>
                    
                    <h3>Отказано!</h3>
                    <em>Срок действия данной формы заказа истек.</em>
                    <div class="nk-gap-1"></div>
                    <a onclick="removeorder({$order['id_order']});" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">
                        Удалить заказ
                    </a>
                </div>
                {/if}
                <div class="nk-info-box text-main-1 hide" id="left-time-order">
                    <div class="nk-info-box-icon">
                        <i class="ion-android-notifications-none"></i>
                    </div>
                    
                    <h3>Отказано!</h3>
                    <em>Срок действия данной формы заказа истек.</em>
                    <div class="nk-gap-1"></div>
                    <a onclick="removeorder({$order['id_order']});" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">
                        Удалить заказ
                    </a>
                </div>
                <div class="nk-info-box text-success hide" id="success-buy-order">
                    <div class="nk-info-box-icon">
                        <i class="ion-android-notifications-none"></i>
                    </div>
                    
                    <h3>Оплачено!</h3>
                    <em>Спасибо за покупку, мы рады, что вы выбрали именно нас.</em>
                    <div class="nk-gap-1"></div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- START: Cart Totals -->
                <table class="nk-table nk-table-sm">
                    <tbody>
                        <tr class="nk-store-cart-totals-subtotal">
                            <td>
                                Товаров
                            </td>
                            <td>
                                {$order['order_games_cnt']}шт.
                            </td>
                        </tr>
                        
                        <tr class="nk-store-cart-totals-total">
                            <td>
                                Всего
                            </td>
                            <td>
                                {$order['order_price']}p.
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- END: Cart Totals -->
                        {if $order['order_status'] == 0 && $order['order_time_for_pay'] == 1}
                        <div class="nk-gap-2" id="show-payment">
                            <form method="POST" target="_blank" action="https://money.yandex.ru/quickpay/confirm.xml" id="yad-form">
                                <input type="hidden" name="receiver" value="410016538063744" readonly="">
                                <input type="hidden" name="formcomment" value="Заказ №{$order['id_order']}">
                                <input type="hidden" name="short-dest" value="Заказ №{$order['id_order']}">
                                <input type="hidden" name="label" value="$order_id">
                                <input type="hidden" name="quickpay-form" value="donate">
                                <input type="hidden" name="targets" value="Заказ №{$order['id_order']}">
                                <input type="hidden" name="sum" value="{$order['order_price']}" data-type="number">
                                <input type="hidden" name="comment" value="Игры: {$order['order_games_name']}">
                                <input type="hidden" name="need-fio" value="false">
                                <input type="hidden" name="need-email" value="false">
                                <input type="hidden" name="need-phone" value="false">
                                <input type="hidden" name="need-address" value="false">
                                <label>
                                    <input type="hidden" name="paymentType" value="{$order['order_payment']}">
                                </label>
                                <input hidden="" id="get-pay-order" class="nk-btn nk-btn-rounded nk-btn-color-success float-right" type="submit">
                            </form>
                            <input onclick="removeorder({$order['id_order']});" class="nk-btn nk-btn-rounded nk-btn-color-main-1 float-left" type="button" value="Удалить заказ">
                            <input onclick="updateorder({$order['id_order']});" class="nk-btn nk-btn-rounded nk-btn-color-success float-right" type="button" value="Оплатить">
                        </div>
                        {/if}
            </div>
        </div>

        <div class="clearfix"></div>
                                </div>
                    </div>
                </div>
                <div class="nk-gap-1"></div>
                {/foreach}

                <!-- END: Accordion 1 -->
    </div>
</div>

<div class="nk-gap-2"></div>