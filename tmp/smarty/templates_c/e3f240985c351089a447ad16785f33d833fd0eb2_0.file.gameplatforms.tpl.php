<?php
/* Smarty version 3.1.30, created on 2019-02-15 03:20:36
  from "D:\OSPanel\domains\games\views\default\store\gameplatforms.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c6605d49968b9_29092782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3f240985c351089a447ad16785f33d833fd0eb2' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\store\\gameplatforms.tpl',
      1 => 1550190035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6605d49968b9_29092782 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="nk-gap-3"></div>
<div class="container-fluid">
    <div class="row">

        <div class="col-lg-12">
    <!-- START: Categories -->
    <div class="row vertical-gap">
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
