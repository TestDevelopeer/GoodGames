<?php
/* Smarty version 3.1.30, created on 2019-02-12 11:08:24
  from "D:\OSPanel\domains\games\views\default\store\someProducts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c627ef8d1fd03_52186824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66d6824edfb0065bbacc77fb3397be27194a6353' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\store\\someProducts.tpl',
      1 => 1549958903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c627ef8d1fd03_52186824 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- START: Some Products -->
    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-md-6 col-lg-4 some-big-games">
            <div class="nk-gallery-item-box">
                <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsRandomPC']->value['id_game'];?>
/" class="nk-gallery-item">
                    <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsRandomPC']->value['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['rsRandomPC']->value['name_game'];?>
">
                </a>
                <div class="nk-gallery-item-label">
                    <h4 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['rsRandomPC']->value['name_game'];?>
</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 order-lg-3 some-big-games">
            <div class="nk-gallery-item-box">
                <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsRandomXBOX']->value['id_game'];?>
/" class="nk-gallery-item">
                    <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsRandomXBOX']->value['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['rsRandomXBOX']->value['name_game'];?>
">
                </a>
                <div class="nk-gallery-item-label">
                    <h4 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['rsRandomXBOX']->value['name_game'];?>
</h4>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="row vertical-gap some-small-games">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsRandomPS4']->value, 'ps4');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ps4']->value) {
?>
                <div class="col-md-6">
                    <div class="nk-gallery-item-box">
                        <a href="/game/<?php echo $_smarty_tpl->tpl_vars['ps4']->value['id_game'];?>
/" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['ps4']->value['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['ps4']->value['name_game'];?>
">
                        </a>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
    </div>
    <!-- END: Some Products --><?php }
}
