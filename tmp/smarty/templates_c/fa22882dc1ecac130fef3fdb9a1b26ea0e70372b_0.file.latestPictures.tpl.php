<?php
/* Smarty version 3.1.30, created on 2019-10-15 23:11:01
  from "D:\GitHub\GoodGames\views\default\index\latestPictures.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5da627d5b06584_79968469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa22882dc1ecac130fef3fdb9a1b26ea0e70372b' => 
    array (
      0 => 'D:\\GitHub\\GoodGames\\views\\default\\index\\latestPictures.tpl',
      1 => 1552337413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da627d5b06584_79968469 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="nk-gallery-item-box">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['picture']->value['path_photo'];
echo $_smarty_tpl->tpl_vars['picture']->value['name_photo'];?>
" class="nk-gallery-item" data-size="1016x572">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['picture']->value['path_photo'];
echo $_smarty_tpl->tpl_vars['picture']->value['name_photo'];?>
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