<?php
/* Smarty version 3.1.30, created on 2019-06-23 21:14:33
  from "D:\GitHub\gg.com\views\default\cart\cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0fc189d7f4f1_09668235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8343f4e10333a0d6eb8b11ba6649ffb37a555865' => 
    array (
      0 => 'D:\\GitHub\\gg.com\\views\\default\\cart\\cart.tpl',
      1 => 1552339426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fc189d7f4f1_09668235 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
    <?php if ($_smarty_tpl->tpl_vars['cartCnt']->value != 0) {?>
    <div class="nk-store nk-store-cart" id="cart-block-purchase">
        <div class="table-responsive" id="table-games">

            <!-- START: Products in Cart -->
            <table class="table nk-store-cart-products">
                <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCart']->value, 'cart');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cart']->value) {
?>
                        <tr>
                            <td class="nk-product-cart-thumb">
                                <a href="/game/<?php echo $_smarty_tpl->tpl_vars['cart']->value['id_game'];?>
/" class="nk-image-box-1 nk-post-image">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['cart']->value['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['cart']->value['name_game'];?>
" width="115">
                                </a>
                            </td>
                            <td class="nk-product-cart-title">
                                <h5 class="h6">Название:</h5>

                                <h2 class="nk-post-title h4">
                                    <a href="/game/<?php echo $_smarty_tpl->tpl_vars['cart']->value['id_game'];?>
/"><?php echo $_smarty_tpl->tpl_vars['cart']->value['name_game'];?>
</a>
                                </h2>
                                <div class="nk-popup-gallery">
                                <div class="row vertical-gap sm-gap" style="margin-top: 5px;">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['namePhoto']->value, 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['photo']->value['id_game'] == $_smarty_tpl->tpl_vars['cart']->value['id_game']) {?>
                                <?php
$__section_photo_inc_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_photo_inc']) ? $_smarty_tpl->tpl_vars['__smarty_section_photo_inc'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_photo_inc'] = new Smarty_Variable(array());
if (true) {
for ($__section_photo_inc_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_photo_inc']->value['index'] = 0; $__section_photo_inc_0_iteration <= 3; $__section_photo_inc_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_photo_inc']->value['index']++){
?>
                                <div class="col-4 col-md-4">
                                    <div class="nk-gallery-item-box">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['photo']->value['id_game'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_photo_inc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_photo_inc']->value['index'] : null)];?>
" class="nk-gallery-item" data-size="1200x550">
                                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['photo']->value['id_game'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_photo_inc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_photo_inc']->value['index'] : null)];?>
" alt="">
                                        </a>
                                    </div>
                                </div>
                                <?php
}
}
if ($__section_photo_inc_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_photo_inc'] = $__section_photo_inc_0_saved;
}
?>
                                <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </div>
                                </div>
                            </td>
                            <td class="nk-product-cart-price">
                                <h5 class="h6">Цена:</h5>

                                <strong><?php if ($_smarty_tpl->tpl_vars['cart']->value['discount_game'] == 0) {
echo $_smarty_tpl->tpl_vars['cart']->value['price_game'];?>
p.<?php } else { ?><s style="color: red;"><?php echo $_smarty_tpl->tpl_vars['cart']->value['price_game'];?>
p.</s><?php }?></strong>
                            </td>
                            <td class="nk-product-cart-quantity">
                                <h5 class="h6">Скидка:</h5>

                                <strong><?php if ($_smarty_tpl->tpl_vars['cart']->value['discount_game'] == 0) {?><span class="tx-warning tx-12"><span class="tx-lato">0%</span></span><?php } else { ?><span class="tx-warning tx-12"><span class="tx-lato"><?php echo $_smarty_tpl->tpl_vars['cart']->value['discount_game'];?>
%</span></span><?php }?></strong>
                            </td>
                            <td class="nk-product-cart-total">
                                <h5 class="h6">Итого:</h5>

                                <strong><?php if ($_smarty_tpl->tpl_vars['cart']->value['discount_game'] == 0) {
echo $_smarty_tpl->tpl_vars['cart']->value['price_game'];?>
p.<?php } else {
echo $_smarty_tpl->tpl_vars['cart']->value['discount_price_game'];?>
p.<?php }?></strong>
                            </td>
                            <td class="nk-product-cart-remove"><a href="#"><span class="ion-android-close"></span></a></td>
                        </tr>
                                <?php if ($_smarty_tpl->tpl_vars['cart']->value['discount_game'] == 0) {?>
                                <?php $_smarty_tpl->_assignInScope('price', $_smarty_tpl->tpl_vars['price']->value+$_smarty_tpl->tpl_vars['cart']->value['price_game']);
?>
                                <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('price', $_smarty_tpl->tpl_vars['price']->value+$_smarty_tpl->tpl_vars['cart']->value['discount_price_game']);
?>
                                <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
        <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
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
                                <?php echo $_smarty_tpl->tpl_vars['cartCnt']->value;?>
шт.
                            </td>
                        </tr>
                        
                        <tr class="nk-store-cart-totals-total">
                            <td>
                                Всего
                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['price']->value;?>
p.
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- END: Cart Totals -->
            </div>

        </div>

        <div class="nk-gap-2" id="add-order-button"><a class="nk-btn nk-btn-rounded nk-btn-color-success float-right" href="javascript: addorder();">Оформить заказ</a></div>
        
        <div class="clearfix"></div>
        <?php } else { ?>
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
        <?php }?>

    </div>
    <?php } else { ?>
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
    <?php }?>
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

<div class="nk-gap-2"></div><?php }
}
