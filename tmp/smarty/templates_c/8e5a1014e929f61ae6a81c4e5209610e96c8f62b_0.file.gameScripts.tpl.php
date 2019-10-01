<?php
/* Smarty version 3.1.30, created on 2019-02-20 14:49:00
  from "D:\OSPanel\domains\gg.com\views\admin\game\gameScripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c6d3eac0df444_03664823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e5a1014e929f61ae6a81c4e5209610e96c8f62b' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\admin\\game\\gameScripts.tpl',
      1 => 1548444247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6d3eac0df444_03664823 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php echo '<script'; ?>
>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1199px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1199px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1200px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    <?php echo '</script'; ?>
><?php }
}
