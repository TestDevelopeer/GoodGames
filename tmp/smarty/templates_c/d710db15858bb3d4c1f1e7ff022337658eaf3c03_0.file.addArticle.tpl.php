<?php
/* Smarty version 3.1.30, created on 2019-03-05 04:25:24
  from "D:\OSPanel\domains\gg.com\views\admin\article\addArticle.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c7dd004a0a318_14606439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd710db15858bb3d4c1f1e7ff022337658eaf3c03' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\admin\\article\\addArticle.tpl',
      1 => 1550567194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7dd004a0a318_14606439 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="text" readonly="" hidden="" id="page" value="art-page">
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="/admin/">Главная</a>
          <a class="breadcrumb-item" href="javascript:;">Статьи</a>
          <span class="breadcrumb-item active">Добавить статью</span>
        </nav>
      </div><!-- br-pageheader -->
      

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          
          <div id="new-art-box">
          <div class="row">
            <div class="col-lg-3">
              <select id="select-cat" class="form-control select2" data-placeholder="Выберите категорию">
                  <option label="Выберите категорию"></option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAllCats']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id_art_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name_art_cat'];?>
</option>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
            </div><!-- col -->
            <div class="col-lg-3">
              <input class="form-control form-control-dark" id="art-name" placeholder="Название статьи" type="text">
            </div><!-- col -->
            <div class="col-lg-3">
              <input class="form-control form-control-dark" id="art-author" placeholder="Автор" value="<?php echo $_smarty_tpl->tpl_vars['arAdmin']->value['name'];?>
" type="text">
            </div><!-- col -->
            <div class="col-lg-3">
            </div><!-- col -->
          </div><!-- row -->
          <div class="row mg-t-20">
            <div class="col-lg-3">
            </div><!-- col -->
            <div class="col-lg-6">
              <textarea rows="3" class="form-control form-control-dark" id="art-desc" placeholder="Превью статьи"></textarea>
            </div><!-- col -->
            <div class="col-lg-3">
            </div><!-- col -->
            <div class="col-lg-2">
            </div><!-- col -->
            <div class="col-lg-8 mg-t-20">
              <div id="summernote"></div>
            </div><!-- col -->
            <div class="col-lg-2">
            </div><!-- col -->
            
              <div class="col-lg-3">
            </div><!-- col -->
            <div class="col-lg-6 mg-t-20">
                <button onclick="addnewarticle();" type="submit" class="btn btn-danger btn-block mg-b-10">Добавить</button>
            </div><!-- col -->
              <div class="col-lg-3">
            </div><!-- col -->
           </div>
         </div>
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody --><?php }
}
