<?php
/* Smarty version 3.1.30, created on 2019-02-11 19:50:33
  from "D:\OSPanel\domains\games\views\default\index\latestPictures.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c61a7d9e6aec3_00085974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e37c27c4cda167fd5755365340b973af4ae9cea' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\index\\latestPictures.tpl',
      1 => 1549903826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c61a7d9e6aec3_00085974 (Smarty_Internal_Template $_smarty_tpl) {
?>
            <!-- START: Latest Pictures -->
            <div class="nk-gap"></div>
            <h2 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Последние</span> изображения</span></h2>
            <div class="nk-gap"></div>
            <div class="nk-popup-gallery">
                <div class="row vertical-gap">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsLastPictures']->value, 'picture');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->value) {
?>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['picture']->value['path_photo'];?>
" class="nk-gallery-item" data-size="1016x572">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['picture']->value['path_photo'];?>
" alt="">
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
            <!-- END: Latest Pictures --><?php }
}
