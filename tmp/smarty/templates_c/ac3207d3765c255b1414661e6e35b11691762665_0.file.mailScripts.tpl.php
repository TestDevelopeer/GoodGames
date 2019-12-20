<?php
/* Smarty version 3.1.30, created on 2019-10-15 23:24:55
  from "D:\GitHub\GoodGames\views\admin\mail\mailScripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5da62b178c3053_22100284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac3207d3765c255b1414661e6e35b11691762665' => 
    array (
      0 => 'D:\\GitHub\\GoodGames\\views\\admin\\mail\\mailScripts.tpl',
      1 => 1548580414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da62b178c3053_22100284 (Smarty_Internal_Template $_smarty_tpl) {
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
