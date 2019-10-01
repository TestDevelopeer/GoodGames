<?php
/* Smarty version 3.1.30, created on 2019-06-23 21:47:25
  from "D:\GitHub\gg.com\views\default\chat\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0fc93d718488_53245789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d4f93ae58daa832f10b62128aae8b4cb70d6ddb' => 
    array (
      0 => 'D:\\GitHub\\gg.com\\views\\default\\chat\\footer.tpl',
      1 => 1551759048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fc93d718488_53245789 (Smarty_Internal_Template $_smarty_tpl) {
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
