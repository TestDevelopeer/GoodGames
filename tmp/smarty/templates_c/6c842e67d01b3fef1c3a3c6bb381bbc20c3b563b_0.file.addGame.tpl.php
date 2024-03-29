<?php
/* Smarty version 3.1.30, created on 2019-06-23 21:20:34
  from "D:\GitHub\gg.com\views\admin\game\addGame.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0fc2f2017778_86127578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c842e67d01b3fef1c3a3c6bb381bbc20c3b563b' => 
    array (
      0 => 'D:\\GitHub\\gg.com\\views\\admin\\game\\addGame.tpl',
      1 => 1550381323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fc2f2017778_86127578 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="text" readonly="" hidden="" id="page" value="game-page">
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="/admin/">Главная</a>
          <a class="breadcrumb-item" href="javascript:;">Игры</a>
          <span class="breadcrumb-item active">Добавить игру</span>
        </nav>
      </div><!-- br-pageheader -->
      

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          
          <form action="/function/addnewgame/" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-3">
              <input class="form-control form-control-dark" name="game-name" placeholder="Название игры" type="text">
            </div><!-- col -->
            <div class="col-lg-3 mg-t-20 mg-lg-t-0" =>
              <select class="form-control select2" name="categories[]" data-placeholder="Choose Browser" multiple id="select2-category">
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
            </div><!-- col-3 -->
            <div class="col-lg-3 mg-t-15 mg-lg-t-0">
              <input type="text" value="" name="game-tags" data-role="tagsinput" placeholder="Тэги">
            </div><!-- col-3 -->
            <div class="col-lg-3 mg-t-15 mg-lg-t-0">
              <select class="form-control select2" name="platforms[]" data-placeholder="Choose Browser" multiple id="select2-platform">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAllPlatforms']->value, 'platform');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['platform']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['platform']->value['id_platform'];?>
"><?php echo $_smarty_tpl->tpl_vars['platform']->value['name_platform'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </select>
            </div><!-- col-3 -->
          </div><!-- row -->
           
          <div class="row mg-t-20">
           <div class="col-lg-3 mg-t-15 mg-lg-t-0">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="mainPicture" id="customFile1">
                <label class="custom-file-label custom-file-label-primary" for="customFile2">Заглавное изображение игры</label>
              </div>
           </div>
           <div class="col-lg-3 mg-t-15 mg-lg-t-0">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="mainPicturev2" id="customFilev2">
                <label class="custom-file-label custom-file-label-primary" for="customFilev2">Заглавное изображение v2</label>
              </div>
           </div>
           <div class="col-lg-3 mg-t-15 mg-lg-t-0">
              <input type="file" name="file-1[]" id="file-1" class="inputfile" data-multiple-caption="{ count } файлов выбрано" multiple>
              <label for="file-1" class="tx-white bg-info" style="width: 100%;">
                <i class="icon ion-ios-upload-outline tx-24"></i>
                <span>Изображения игры</span>
              </label>
            
           </div>
           <div class="col-lg-3 mg-t-15 mg-lg-t-0">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="sliderPicture" id="customFile2">
                <label class="custom-file-label custom-file-label-primary" for="customFile2">Изображение для слайдера</label>
              </div>
           </div>
           <div class="row mg-t-20 col-lg-12">
              
                <button type="submit" class="btn btn-danger btn-block mg-b-10">Добавить</button>
              
           </div> 
         </div>
           </form>
         </div>
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody --><?php }
}
