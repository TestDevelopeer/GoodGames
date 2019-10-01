<?php
/* Smarty version 3.1.30, created on 2019-06-23 21:34:38
  from "D:\GitHub\gg.com\views\admin\mail\mailScripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0fc63e9f2905_25510331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ca70a01a748f4f8759e7fa2915dc96c6adde065' => 
    array (
      0 => 'D:\\GitHub\\gg.com\\views\\admin\\mail\\mailScripts.tpl',
      1 => 1548580414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fc63e9f2905_25510331 (Smarty_Internal_Template $_smarty_tpl) {
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
