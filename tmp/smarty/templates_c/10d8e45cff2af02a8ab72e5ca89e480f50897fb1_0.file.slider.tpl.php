<?php
/* Smarty version 3.1.30, created on 2019-02-11 18:29:20
  from "D:\OSPanel\domains\games\views\default\catalog\slider.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c6194d04424e2_95217978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10d8e45cff2af02a8ab72e5ca89e480f50897fb1' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\catalog\\slider.tpl',
      1 => 1549898950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6194d04424e2_95217978 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div class="nk-main">
        
            <div class="nk-gap-2"></div>
        
                <div class="container">
    <!-- START: Image Slider -->
    <div class="nk-image-slider" data-autoplay="5000">
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsRandomGames']->value, 'randgames');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['randgames']->value) {
?>
        <div class="nk-image-slider-item">
            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['randgames']->value['id_game'];?>
/slider.jpg" alt="" class="nk-image-slider-img" data-thumb="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['randgames']->value['id_game'];?>
/slider.jpg">
            
            <div class="nk-image-slider-content">
                
                    <h3 class="h4"><?php echo $_smarty_tpl->tpl_vars['randgames']->value['name_game'];?>
</h3>
                    <p class="text-white"><?php echo $_smarty_tpl->tpl_vars['randgames']->value['description_game'];?>
</p>
                    <a href="/game/<?php echo $_smarty_tpl->tpl_vars['randgames']->value['id_game'];?>
/" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Перейти</a>
                
            </div>
            
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <!-- END: Image Slider --><?php }
}
