<?php
/* Smarty version 3.1.30, created on 2019-01-31 15:52:02
  from "D:\OSPanel\domains\games\views\admin\article\addArticleScripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c52ef72b40248_43198263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ed7ab0b8bd2d1552c93ba28d9f90cdf0b970e2e' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\admin\\article\\addArticleScripts.tpl',
      1 => 1548939121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c52ef72b40248_43198263 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/summernote/summernote-bs4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/peity/jquery.peity.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/highlightjs/highlight.pack.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/medium-editor/js/medium-editor.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
          height: 500,
          tooltip: false
        })
      });
    <?php echo '</script'; ?>
><?php }
}
