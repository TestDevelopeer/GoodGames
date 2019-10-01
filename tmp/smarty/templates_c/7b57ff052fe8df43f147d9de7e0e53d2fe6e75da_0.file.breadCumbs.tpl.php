<?php
/* Smarty version 3.1.30, created on 2019-06-23 21:13:19
  from "D:\GitHub\gg.com\views\default\news\breadCumbs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0fc13fe2ba11_29733955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b57ff052fe8df43f147d9de7e0e53d2fe6e75da' => 
    array (
      0 => 'D:\\GitHub\\gg.com\\views\\default\\news\\breadCumbs.tpl',
      1 => 1552246285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fc13fe2ba11_29733955 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs custom-game-bread">
        
        
        <li class="custom-li-bread"><a href="/">Главная</a></li>
        
        
        <li style="font-size: 1em;"><span class="fa fa-angle-right"></span></li>
        <?php if ($_smarty_tpl->tpl_vars['actionName']->value != 'category') {?>
        <li><span>Новости</span></li>
        <?php } else { ?>
        <li class="custom-li-bread"><a href="/news/">Новости</a></li>
        <li style="font-size: 1em;"><span class="fa fa-angle-right"></span></li>
        <li><span><?php echo $_smarty_tpl->tpl_vars['rsCurCategory']->value['name_art_cat'];?>
</span></li>
        <?php }?>
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs --><?php }
}
