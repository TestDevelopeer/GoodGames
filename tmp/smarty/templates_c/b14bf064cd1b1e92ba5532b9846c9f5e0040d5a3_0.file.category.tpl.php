<?php
/* Smarty version 3.1.30, created on 2019-06-23 21:15:44
  from "D:\GitHub\gg.com\views\admin\category\category.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0fc1d0dd9bf0_94547234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b14bf064cd1b1e92ba5532b9846c9f5e0040d5a3' => 
    array (
      0 => 'D:\\GitHub\\gg.com\\views\\admin\\category\\category.tpl',
      1 => 1549551392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fc1d0dd9bf0_94547234 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="text" readonly="" hidden="" id="page" value="game-cat">
<div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="/admin/">Главная</a>
          <span class="breadcrumb-item active">Категории</span>
        </nav>
      </div><!-- br-pageheader -->
      

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="row no-gutters ht-200">
            <div class="col-lg-6 bg-black-1 d-flex align-items-center justify-content-center">
              <div class="wd-250">
                <select id="select-cat" class="form-control select2" data-placeholder="Выберите категорию">
                  <option value="0" selected="">Добавить к играм</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAllCats']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name_category'];?>
</option>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
                <div id="new-cat" class="input-group input-group-dark mg-t-20">
                  <input id="new-cat-name" type="text" class="form-control" placeholder="Добавить категорию">
                  <div class="input-group-append">
                    <button onclick="addnewcat();" class="btn btn-primary" type="button"><i class="fas fa-plus"></i></button>
                  </div>
                </div>
                <div id="change-cat" class="input-group input-group-dark mg-t-20 hide">
                  <input id="change-cat-id" type="text" class="form-control" placeholder="Изменить категорию" value="">
                  <div class="input-group-append">
                    <button onclick="changecat();" class="btn btn-danger" type="button"><i class="fas fa-edit"></i></button>
                  </div>
                </div>
                
              <div id="alert-box" class="alert alert-success mg-t-20 hide" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="d-flex align-items-center justify-content-start">
                  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                  <span><strong id="alert-text"></strong></span>
                </div><!-- d-flex -->
              </div><!-- alert -->
            
              </div><!-- wd-250 -->
            </div><!-- col-->

            <div class="col-lg-6 bg-black-1 d-flex align-items-center justify-content-center">
              <div class="wd-250">
                <select id="select-cat-news" class="form-control select2" data-placeholder="Выберите категорию">
                  <option value="0" selected="">Добавить к новостям</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCatNews']->value, 'category');
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
                <div id="new-cat-news" class="input-group input-group-dark mg-t-20">
                  <input id="news-cat-name" type="text" class="form-control" placeholder="Добавить категорию">
                  <div class="input-group-append">
                    <button onclick="addnewscat();" class="btn btn-primary" type="button"><i class="fas fa-plus"></i></button>
                  </div>
                </div>
                <div id="change-cat-news" class="input-group input-group-dark mg-t-20 hide">
                  <input id="change-news-id" type="text" class="form-control" placeholder="Изменить категорию" value="">
                  <div class="input-group-append">
                    <button onclick="changenewscat();" class="btn btn-danger" type="button"><i class="fas fa-edit"></i></button>
                  </div>
                </div>
                
              <div id="alert-box-news" class="alert alert-success mg-t-20 hide" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <div class="d-flex align-items-center justify-content-start">
                  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                  <span><strong id="alert-text-news"></strong></span>
                </div><!-- d-flex -->
              </div><!-- alert -->
            
              </div><!-- wd-250 -->
            </div><!-- col-->
            
          </div><!-- row -->
        </div>
      </div>
</div><?php }
}
