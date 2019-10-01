<?php
/* Smarty version 3.1.30, created on 2019-01-31 17:59:56
  from "D:\OSPanel\domains\games\views\admin\article\allArticles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c530d6c6e29b5_05382262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e2094c586f84f0115496636d7ce36314763531d' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\admin\\article\\allArticles.tpl',
      1 => 1548946699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c530d6c6e29b5_05382262 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <input type="text" readonly="" hidden="" id="page" value="art-page"> 
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
articles/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/main.jpg" alt="Image">
            
            <div class="card-body pd-25 rounded-bottom">
              <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="/admin/?controller=editarticle&id=<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
" class="tx-white hover-info text-art"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</a></h5>
              <div class="tx-14 mg-b-25 text-art"><?php echo $_smarty_tpl->tpl_vars['art']->value['prewiew_text'];?>
</div>
              <p class="tx-13 mg-b-0">
                <a href="javascript:;" class="tx-info mg-l-5">23 Comments</a>
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
