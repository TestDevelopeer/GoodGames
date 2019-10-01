<?php
/* Smarty version 3.1.30, created on 2019-01-26 16:24:00
  from "D:\OSPanel\domains\games\views\admin\index\scripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c4c5f70d7c9f7_80607560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c57eeabe78cc5db798e8d625631e75223d0dfb9b' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\admin\\index\\scripts.tpl',
      1 => 1548509038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4c5f70d7c9f7_80607560 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/jquery/jquery.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        $( document ).ready(function() {
            var id = $('#page').val();
            $('#'+id).addClass('active');
        });
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/jquery-ui/ui/widgets/datepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/perfect-scrollbar/perfect-scrollbar.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/moment/min/moment.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/peity/jquery.peity.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/rickshaw/vendor/d3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/rickshaw/vendor/d3.layout.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/rickshaw/rickshaw.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/jquery.flot/jquery.flot.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/jquery.flot/jquery.flot.resize.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/flot-spline/js/jquery.flot.spline.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/jquery-sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/echarts/echarts.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/select2/js/select2.full.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://maps.google.com/maps/api/js?key=AIzaSyAq8o5-8Y5pudbJMJtDFzb8aHiWJufa5fg"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/gmaps/gmaps.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
js/bracket.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
js/map.shiftworker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
js/ResizeSensor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
js/dashboard.dark.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
js/main.js"><?php echo '</script'; ?>
>

<?php }
}
