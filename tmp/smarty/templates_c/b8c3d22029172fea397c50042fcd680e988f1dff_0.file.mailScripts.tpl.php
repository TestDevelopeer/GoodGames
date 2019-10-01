<?php
/* Smarty version 3.1.30, created on 2019-01-27 12:13:36
  from "D:\OSPanel\domains\games\views\admin\mail\mailScripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c4d7640726a16_77856838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8c3d22029172fea397c50042fcd680e988f1dff' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\admin\\mail\\mailScripts.tpl',
      1 => 1548580414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4d7640726a16_77856838 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php echo '<script'; ?>
>
      $(function(){
        'use strict';

        // depcrecated
        //$('.br-mailbox-list').perfectScrollbar();

        new PerfectScrollbar('.br-mailbox-list', {
          suppressScrollX: true
        });

        $('#showMailBoxLeft').on('click', function(e){
          e.preventDefault();
          if($('body').hasClass('show-mb-left')) {
            $('body').removeClass('show-mb-left');
            $(this).find('.fa').removeClass('fa-arrow-left').addClass('fa-arrow-right');
          } else {
            $('body').addClass('show-mb-left');
            $(this).find('.fa').removeClass('fa-arrow-right').addClass('fa-arrow-left');
          }
        });
      });
    <?php echo '</script'; ?>
><?php }
}
