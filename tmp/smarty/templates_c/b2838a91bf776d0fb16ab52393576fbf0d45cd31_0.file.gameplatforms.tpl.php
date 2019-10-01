<?php
/* Smarty version 3.1.30, created on 2019-02-20 07:41:04
  from "D:\OSPanel\domains\gg.com\views\default\store\gameplatforms.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c6cda6076c6b4_55650975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2838a91bf776d0fb16ab52393576fbf0d45cd31' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\store\\gameplatforms.tpl',
      1 => 1550637609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6cda6076c6b4_55650975 (Smarty_Internal_Template $_smarty_tpl) {
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
