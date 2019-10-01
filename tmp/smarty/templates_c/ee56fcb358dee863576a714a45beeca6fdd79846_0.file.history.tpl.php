<?php
/* Smarty version 3.1.30, created on 2019-02-11 12:21:53
  from "D:\OSPanel\domains\games\views\default\user\history.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c613eb11f8455_90680356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee56fcb358dee863576a714a45beeca6fdd79846' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\user\\history.tpl',
      1 => 1549876912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c613eb11f8455_90680356 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        
        
        <li><a href="index.html">Главная</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span>История покупок</span></li>

        <li><span class="fa fa-angle-right"></span></li>
        
        <li><a href="/user/profile/<?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_link'] != '') {
echo $_smarty_tpl->tpl_vars['arUser']->value['user_link'];
} else {
echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];
}?>/"><?php echo $_smarty_tpl->tpl_vars['rsUser']->value['user_name'];?>
</a></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

        

        
    <div class="container">
        <div class="row vertical-gap">


        <div class="nk-gap-2"></div>
        

            <div class="col-lg-12">
                <!-- START: Table -->
                <div class="nk-gap"></div>
                <table class="nk-table custom-table">
                    
                    <tbody>
                        <thead class="custom-table">
                        <tr>
                            <th>Дата</th>
                            <th>Товары</th>
                            <th>Тип</th>
                            <th>Всего</th>
                        </tr>
                        </thead>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsHistory']->value, 'history');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['history']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['history']->value['order_date'];?>
 <?php echo $_smarty_tpl->tpl_vars['history']->value['order_time'];?>
</td>
                            <td>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parseGames']->value[$_smarty_tpl->tpl_vars['history']->value['id_order']], 'games');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['games']->value) {
?>
                                    <?php echo $_smarty_tpl->tpl_vars['games']->value;?>
<br>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['history']->value['order_games_cnt'];?>
 предм. (покупка/продажа)<br>
                                <?php if ($_smarty_tpl->tpl_vars['history']->value['order_payment'] == 'AC') {?> Банковская карта <?php } else { ?> ЯндексДеньги <?php }?>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['history']->value['order_price'];?>
p.</td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>
                </table>
                <!-- END: Table -->
            </div>
        

        
    </div>

    <div class="nk-gap-2"></div><?php }
}
