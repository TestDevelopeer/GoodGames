<?php
/* Smarty version 3.1.30, created on 2019-06-23 21:05:52
  from "D:\GitHub\gg.com\views\default\index\imageSlider.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0fbf807cead5_94842431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac55808359ed1203af3dd9d16870b4a0ee97e2d8' => 
    array (
      0 => 'D:\\GitHub\\gg.com\\views\\default\\index\\imageSlider.tpl',
      1 => 1551701105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fbf807cead5_94842431 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div class="nk-main">
        
            <div class="nk-gap-2"></div>
        
                <div class="container-fluid">
                    <div class="row">
                                <div class="col-lg-2 hidden-phone">
            <!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
            -->
            <aside class="nk-sidebar nk-sidebar-left custom-sidebar">               

<div class="nk-widget nk-widget-highlighted custom-categories-block">
    <div class="nk-widget-content">
        <ul class="nk-widget-categories custom-categories">
            <li><span><span class="text-main-1 custom-cat-text">РЕКОМЕНДУЕТСЯ</span></span></li>
            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCatRec']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
            <li><a href="#" class="gutter_item"><span class="icon <?php echo $_smarty_tpl->tpl_vars['category']->value['class_rec_cat'];?>
"></span><?php echo $_smarty_tpl->tpl_vars['category']->value['name_rec_cat'];?>
</a></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>
</div>

<div class="nk-widget nk-widget-highlighted custom-categories-block">
    <div class="nk-widget-content">
        <ul class="nk-widget-categories custom-categories">
            <li><span><span class="text-main-1 custom-cat-text">КАТЕГОРИИ</span></span></li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCatAlt']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
            <li><a href="#" class="gutter_item"><span class="icon <?php echo $_smarty_tpl->tpl_vars['category']->value['class_alt_cat'];?>
"></span><?php echo $_smarty_tpl->tpl_vars['category']->value['name_alt_cat'];?>
</a></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>
</div>

<div class="nk-widget nk-widget-highlighted custom-categories-block">
    <div class="nk-widget-content">
        <ul class="nk-widget-categories custom-categories">
            <li><span><span class="text-main-1 custom-cat-text">ПОИСК ПО ЖАНРУ</span></span></li>
            <li><a href="javascript: searchwthcat('all', 'Все');">Все</a></li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
            <li><a href="/catalog/search/cat/?searchname=<?php echo $_smarty_tpl->tpl_vars['category']->value['id_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name_category'];?>
</a></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>
</div>
            </aside>
            <!-- END: Sidebar -->
        </div>
                        <div class="col-lg-8">
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
