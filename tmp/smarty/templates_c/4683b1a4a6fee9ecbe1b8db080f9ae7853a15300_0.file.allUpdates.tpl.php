<?php
/* Smarty version 3.1.30, created on 2019-10-15 23:23:30
  from "D:\GitHub\GoodGames\views\admin\update\allUpdates.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5da62ac2ccadf3_79182675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4683b1a4a6fee9ecbe1b8db080f9ae7853a15300' => 
    array (
      0 => 'D:\\GitHub\\GoodGames\\views\\admin\\update\\allUpdates.tpl',
      1 => 1550571524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da62ac2ccadf3_79182675 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <input type="text" readonly="" hidden="" id="page" value="art-updates"> 
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="/admin/">Главная</a>
          <a class="breadcrumb-item" href="javascript:;">Статьи</a>
          <span class="breadcrumb-item active">Все</span>
        </nav>
      </div><!-- br-pageheader -->

      <div class="br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350">
        <div class="card-deck card-deck-sm mg-x-0">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAllArt']->value, 'art');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
?>
          <div class="col-lg-3">
            <img class="img-fluid rounded-top" src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['art']->value['art_game_id'];?>
/mainv2.jpg" alt="Image">
            <div class="card-body pd-25 rounded-bottom">
              <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="/admin/?controller=editarticle&id=<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
" class="tx-white hover-info text-art"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</a></h5>
              <p class="tx-13 mg-b-0">
                <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsGames']->value[$_smarty_tpl->tpl_vars['art']->value['art_game_id']]['id_game'];?>
/" class="tx-info mg-l-5"><?php echo $_smarty_tpl->tpl_vars['rsGames']->value[$_smarty_tpl->tpl_vars['art']->value['art_game_id']]['name_game'];?>
</a>
              </p>
            </div><!-- card-body -->
          </div><!-- card -->
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div><!-- card-deck-->
      </div><!-- br-pagebody --><?php }
}
