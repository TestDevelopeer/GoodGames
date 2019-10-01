<?php
/* Smarty version 3.1.30, created on 2019-06-23 21:13:46
  from "D:\GitHub\gg.com\views\default\store\gamePlatforms.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0fc15a779774_72519134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd4a8d253d82984bb7ce93fc5c15f80c8be690f7' => 
    array (
      0 => 'D:\\GitHub\\gg.com\\views\\default\\store\\gamePlatforms.tpl',
      1 => 1550637609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fc15a779774_72519134 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="nk-gap-3"></div>
<div class="container-fluid">
    <div class="row">

        <div class="col-lg-12">
    <!-- START: Categories -->
    <div class="row vertical-gap hidden-phone">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsGamePlatforms']->value, 'platform');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['platform']->value) {
?>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
/platforms/<?php echo $_smarty_tpl->tpl_vars['platform']->value['name_platform'];?>
/<?php echo $_smarty_tpl->tpl_vars['platform']->value['name_platform'];?>
.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['platform']->value['name_platform'];?>
</a></h3>
                </div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <!-- END: Categories --><?php }
}
