<?php
/* Smarty version 3.1.30, created on 2019-10-15 23:15:31
  from "D:\GitHub\GoodGames\views\default\chat\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5da628e34ce3b0_85596123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e07f40bf6adedf5d619a00314b11defb2fd9b2a3' => 
    array (
      0 => 'D:\\GitHub\\GoodGames\\views\\default\\chat\\footer.tpl',
      1 => 1551759048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da628e34ce3b0_85596123 (Smarty_Internal_Template $_smarty_tpl) {
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
