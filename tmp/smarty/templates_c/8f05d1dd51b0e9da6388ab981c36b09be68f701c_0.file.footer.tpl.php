<?php
/* Smarty version 3.1.30, created on 2019-03-05 07:16:03
  from "D:\OSPanel\domains\gg.com\views\default\chat\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c7df803ba2f49_81301613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f05d1dd51b0e9da6388ab981c36b09be68f701c' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\chat\\footer.tpl',
      1 => 1551759048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7df803ba2f49_81301613 (Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo '<script'; ?>
 type="text/javascript">
				$(window).on('load',function(){
					setTimeout(function(){
				    	$(".chatHistoryScroll").scrollTop($(".chatHistoryScroll")[0].scrollHeight);
				    },100);
				});
			<?php echo '</script'; ?>
>
</body>
</html><?php }
}
