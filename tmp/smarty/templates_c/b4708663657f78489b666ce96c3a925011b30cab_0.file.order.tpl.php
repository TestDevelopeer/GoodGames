<?php
/* Smarty version 3.1.30, created on 2019-06-23 21:14:37
  from "D:\GitHub\gg.com\views\default\order\order.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0fc18d2f9789_50129730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4708663657f78489b666ce96c3a925011b30cab' => 
    array (
      0 => 'D:\\GitHub\\gg.com\\views\\default\\order\\order.tpl',
      1 => 1549874184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fc18d2f9789_50129730 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
	    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['checkOrder']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
<div class="nk-accordion" id="accordion-<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="accordion-1-<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
-heading">
                            <a class="<?php if ($_smarty_tpl->tpl_vars['rsLastNotPayOrder']->value['id_order'] != $_smarty_tpl->tpl_vars['order']->value['id_order']) {?>collapsed<?php } else {
}?>" data-toggle="collapse" data-parent="#accordion-1" href="#accordion-1-<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
" aria-expanded="false" aria-controls="accordion-1-<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
" id="left-order-a">
                                Заказ №<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
 (<?php if ($_smarty_tpl->tpl_vars['order']->value['order_status'] == 0 && $_smarty_tpl->tpl_vars['order']->value['order_time_for_pay'] == 1) {?>
                                <span class="not-payment">Ожидает оплаты</span>
                                <span class="text-warning" style="">
                                У вас есть <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['time']->value == 1) {?> минута <?php } elseif ($_smarty_tpl->tpl_vars['time']->value == 2 || $_smarty_tpl->tpl_vars['time']->value == 3 || $_smarty_tpl->tpl_vars['time']->value == 4) {?> минуты <?php } else { ?> минут <?php }?> на оплату заказа </span><?php } elseif ($_smarty_tpl->tpl_vars['order']->value['order_status'] == 0 && $_smarty_tpl->tpl_vars['order']->value['order_time_for_pay'] == 0) {?>
                                <span class="text-warning" style="">
                                Действие данного заказа истекло
                                </span><?php } else { ?><span class="yes-payment">Оплачено</span>
                                <?php }?>)
                                <span class="panel-heading-arrow fa fa-angle-down"></span>
                            </a>
                        </div>
                        <div id="accordion-1-<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
" class="panel-collapse collapse <?php if ($_smarty_tpl->tpl_vars['rsLastNotPayOrder']->value['id_order'] == $_smarty_tpl->tpl_vars['order']->value['id_order']) {?>show<?php }?>" role="tabpanel" aria-labelledby="accordion-1-<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
-heading">
                <div class="nk-accordion" id="game-<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="game-1-<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
-heading">
                            <a class="collapsed game-collapse" data-toggle="collapse" data-parent="#game-<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
" href="#game-1-<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
" aria-expanded="true" aria-controls="game-1-<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
">
                                Показать игры <span class="panel-heading-arrow fa fa-angle-down"></span>
                            </a>
                        </div>
                        <div id="game-1-<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
" class="panel-collapse collapse table-responsive" id="table-games" role="tabpanel" aria-labelledby="game-1-<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
-heading">
                                        <!-- START: Products in Cart -->
            <table class="table nk-store-cart-products">
                <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsGames']->value[$_smarty_tpl->tpl_vars['order']->value['id_order']], 'orderGame');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['orderGame']->value) {
?>
                        <tr>
                            <td class="nk-product-cart-thumb">
                                <a href="/game/<?php echo $_smarty_tpl->tpl_vars['orderGame']->value['id_game'];?>
/" class="nk-image-box-1 nk-post-image">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['orderGame']->value['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['orderGame']->value['name_game'];?>
" width="115">
                                </a>
                            </td>
                            <td class="nk-product-cart-title">
                                <h5 class="h6">Название:</h5>

                                <h2 class="nk-post-title h4">
                                    <a href="/game/<?php echo $_smarty_tpl->tpl_vars['orderGame']->value['id_game'];?>
/"><?php echo $_smarty_tpl->tpl_vars['orderGame']->value['name_game'];?>
</a>
                                </h2>
                                </div>
                            </td>
                            <td class="nk-product-cart-price">
                                <h5 class="h6">Цена:</h5>

                                <strong><?php if ($_smarty_tpl->tpl_vars['orderGame']->value['discount_game'] == 0) {
echo $_smarty_tpl->tpl_vars['orderGame']->value['price_game'];?>
p.<?php } else { ?><s style="color: red;"><?php echo $_smarty_tpl->tpl_vars['orderGame']->value['price_game'];?>
p.</s><?php }?></strong>
                            </td>
                            <td class="nk-product-cart-quantity">
                                <h5 class="h6">Скидка:</h5>

                                <strong><?php if ($_smarty_tpl->tpl_vars['orderGame']->value['discount_game'] == 0) {?><span class="tx-warning tx-12"><span class="tx-lato">0%</span></span><?php } else { ?><span class="tx-warning tx-12"><span class="tx-lato"><?php echo $_smarty_tpl->tpl_vars['orderGame']->value['discount_game'];?>
%</span></span><?php }?></strong>
                            </td>
                            <td class="nk-product-cart-total">
                                <h5 class="h6">Итого:</h5>

                                <strong><?php if ($_smarty_tpl->tpl_vars['orderGame']->value['discount_game'] == 0) {
echo $_smarty_tpl->tpl_vars['orderGame']->value['price_game'];?>
p.<?php } else {
echo $_smarty_tpl->tpl_vars['orderGame']->value['discount_price_game'];?>
p.<?php }?></strong>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
            	<?php if ($_smarty_tpl->tpl_vars['order']->value['order_status'] == 0 && $_smarty_tpl->tpl_vars['order']->value['order_time_for_pay'] == 1) {?>   	
                <!-- START: Calculate Shipping -->
                <h3 class="nk-title h4" id="data-pay-order-h">Данные для оплаты</h3>
                <form action="#" class="nk-form" id="data-pay-order">
                    <label for="country-sel">Способ оплаты <span class="text-main-1">*</span>:</label>
                    <select name="country" class="form-control required" id="price-list">
                        <?php if ($_smarty_tpl->tpl_vars['order']->value['order_payment'] == 'PC') {?>
                        <option selected="" value="PC">ЯндексДеньги</option>
                        <?php } else { ?>
                        <option selected="" value="AC">Банковская карта</option>
                        <?php }?>
                    </select>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-sm-6">
                            <label for="state">Email <span class="text-main-1">*</span>:</label>
                            <input readonly="" type="Email" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_email'];?>
" class="form-control required" name="state" id="state">
                        </div>
                        <div class="col-sm-6">
                            <label for="zip">Имя профиля <span class="text-main-1">*</span>:</label>
                            <input readonly="" type="text" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_name'];?>
" class="form-control required" name="zip" id="zip">
                        </div>
                    </div>  
                </form>
                <!-- END: Calculate Shipping -->
                <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['order_status'] == 1 && $_smarty_tpl->tpl_vars['order']->value['order_time_for_pay'] == 1) {?>
                <div class="nk-info-box text-success">
                    <div class="nk-info-box-icon">
                        <i class="ion-android-notifications-none"></i>
                    </div>
                    
                    <h3>Оплачено!</h3>
                    <em>Спасибо за покупку, мы рады, что вы выбрали именно нас.</em>
                    <div class="nk-gap-1"></div>
                </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['order_time_for_pay'] == 0) {?>
                <div class="nk-info-box text-main-1">
                    <div class="nk-info-box-icon">
                        <i class="ion-android-notifications-none"></i>
                    </div>
                    
                    <h3>Отказано!</h3>
                    <em>Срок действия данной формы заказа истек.</em>
                    <div class="nk-gap-1"></div>
                    <a onclick="removeorder(<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
);" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">
                        Удалить заказ
                    </a>
                </div>
                <?php }?>
                <div class="nk-info-box text-main-1 hide" id="left-time-order">
                    <div class="nk-info-box-icon">
                        <i class="ion-android-notifications-none"></i>
                    </div>
                    
                    <h3>Отказано!</h3>
                    <em>Срок действия данной формы заказа истек.</em>
                    <div class="nk-gap-1"></div>
                    <a onclick="removeorder(<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
);" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">
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
                                <?php echo $_smarty_tpl->tpl_vars['order']->value['order_games_cnt'];?>
шт.
                            </td>
                        </tr>
                        
                        <tr class="nk-store-cart-totals-total">
                            <td>
                                Всего
                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['order']->value['order_price'];?>
p.
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- END: Cart Totals -->
                        <?php if ($_smarty_tpl->tpl_vars['order']->value['order_status'] == 0 && $_smarty_tpl->tpl_vars['order']->value['order_time_for_pay'] == 1) {?>
                        <div class="nk-gap-2" id="show-payment">
                            <form method="POST" target="_blank" action="https://money.yandex.ru/quickpay/confirm.xml" id="yad-form">
                                <input type="hidden" name="receiver" value="410016538063744" readonly="">
                                <input type="hidden" name="formcomment" value="Заказ №<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
">
                                <input type="hidden" name="short-dest" value="Заказ №<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
">
                                <input type="hidden" name="label" value="$order_id">
                                <input type="hidden" name="quickpay-form" value="donate">
                                <input type="hidden" name="targets" value="Заказ №<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
">
                                <input type="hidden" name="sum" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_price'];?>
" data-type="number">
                                <input type="hidden" name="comment" value="Игры: <?php echo $_smarty_tpl->tpl_vars['order']->value['order_games_name'];?>
">
                                <input type="hidden" name="need-fio" value="false">
                                <input type="hidden" name="need-email" value="false">
                                <input type="hidden" name="need-phone" value="false">
                                <input type="hidden" name="need-address" value="false">
                                <label>
                                    <input type="hidden" name="paymentType" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_payment'];?>
">
                                </label>
                                <input hidden="" id="get-pay-order" class="nk-btn nk-btn-rounded nk-btn-color-success float-right" type="submit">
                            </form>
                            <input onclick="removeorder(<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
);" class="nk-btn nk-btn-rounded nk-btn-color-main-1 float-left" type="button" value="Удалить заказ">
                            <input onclick="updateorder(<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
);" class="nk-btn nk-btn-rounded nk-btn-color-success float-right" type="button" value="Оплатить">
                        </div>
                        <?php }?>
            </div>
        </div>

        <div class="clearfix"></div>
                                </div>
                    </div>
                </div>
                <div class="nk-gap-1"></div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                <!-- END: Accordion 1 -->
    </div>
</div>

<div class="nk-gap-2"></div><?php }
}
