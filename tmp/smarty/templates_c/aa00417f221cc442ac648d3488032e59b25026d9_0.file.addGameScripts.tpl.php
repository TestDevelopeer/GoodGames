<?php
/* Smarty version 3.1.30, created on 2019-10-15 23:22:19
  from "D:\GitHub\GoodGames\views\admin\game\addGameScripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5da62a7b1453e3_12982212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa00417f221cc442ac648d3488032e59b25026d9' => 
    array (
      0 => 'D:\\GitHub\\GoodGames\\views\\admin\\game\\addGameScripts.tpl',
      1 => 1548358015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da62a7b1453e3_12982212 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/bootstrap-tagsinput/bootstrap-tagsinput.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/highlightjs/highlight.pack.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
      $(function(){

        'use strict';

        $( '.inputfile' ).each( function()
        {
          var $input	 = $( this ),
            $label	 = $input.next( 'label' ),
            labelVal = $label.html();

          $input.on( 'change', function( e )
          {
            var fileName = '';

            if( this.files && this.files.length > 1 )
              fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{ count }', this.files.length );
            else if( e.target.value )
              fileName = e.target.value.split( '\\' ).pop();

            if( fileName )
              $label.find( 'span' ).html( fileName );
            else
              $label.html( labelVal );
          });

          // Firefox bug fix
          $input
          .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
          .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
        });

      });
    <?php echo '</script'; ?>
><?php }
}
