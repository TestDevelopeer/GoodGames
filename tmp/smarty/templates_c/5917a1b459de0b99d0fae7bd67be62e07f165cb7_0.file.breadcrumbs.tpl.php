<?php
/* Smarty version 3.1.30, created on 2019-10-15 23:18:36
  from "D:\GitHub\GoodGames\views\default\store\breadcrumbs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5da6299c384749_66103279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5917a1b459de0b99d0fae7bd67be62e07f165cb7' => 
    array (
      0 => 'D:\\GitHub\\GoodGames\\views\\default\\store\\breadcrumbs.tpl',
      1 => 1550189369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da6299c384749_66103279 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs custom-game-bread" id="catalog-breadcumb">
        
        
        <li class="custom-li-bread"><a href="/">Главная</a></li>
        
        
        <li style="font-size: 1em;"><span class="fa fa-angle-right"></span></li>
        <?php if (!isset($_smarty_tpl->tpl_vars['Title']->value)) {?>
        <li><span id="breadcumb-text"><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</span></li>
        <?php } else { ?>
        <li class="custom-li-bread"><a href="/catalog/"><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</a></li>
        <li style="font-size: 1em;"><span class="fa fa-angle-right"></span></li>
        <li><span><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
</span></li>
        <?php }?>
    </ul>
</div>

<!-- END: Breadcrumbs --><?php }
}
