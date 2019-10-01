<?php
/* Smarty version 3.1.30, created on 2019-03-04 14:50:33
  from "D:\OSPanel\domains\gg.com\views\default\index\gamePlatforms.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c7d110965ba69_90222247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaa02019eace35a1e2e225c02df3333b7e482030' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\index\\gamePlatforms.tpl',
      1 => 1551700231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7d110965ba69_90222247 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- START: Categories -->
    <div class="nk-gap-2"></div>
    <div class="row vertical-gap hidden-phone">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsGamePlatforms']->value, 'platform');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['platform']->value) {
?>
        <div class="col-lg-4 col-md-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
platforms/<?php echo $_smarty_tpl->tpl_vars['platform']->value['name_platform'];?>
/<?php echo $_smarty_tpl->tpl_vars['platform']->value['name_platform'];?>
.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="/catalog/search/platform/?searchname=<?php echo $_smarty_tpl->tpl_vars['platform']->value['id_platform'];?>
"><?php echo $_smarty_tpl->tpl_vars['platform']->value['name_platform'];?>
</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="/catalog/search/platform/?searchname=<?php echo $_smarty_tpl->tpl_vars['platform']->value['id_platform'];?>
">Перейти</a></h4>
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
