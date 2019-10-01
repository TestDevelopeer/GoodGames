<?php
/* Smarty version 3.1.30, created on 2019-06-23 21:05:52
  from "D:\GitHub\gg.com\views\default\index\gamePlatforms.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0fbf808d4bf7_02786586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4644e239f11373a1f2162df61ff930133981a39b' => 
    array (
      0 => 'D:\\GitHub\\gg.com\\views\\default\\index\\gamePlatforms.tpl',
      1 => 1551700231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fbf808d4bf7_02786586 (Smarty_Internal_Template $_smarty_tpl) {
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
