<?php
/* Smarty version 3.1.30, created on 2019-06-23 21:32:57
  from "D:\GitHub\gg.com\views\admin\game\allGames.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0fc5d95e3720_81843292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2d411438b4aaf59c8d30c1628862039b474941b' => 
    array (
      0 => 'D:\\GitHub\\gg.com\\views\\admin\\game\\allGames.tpl',
      1 => 1552503701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fc5d95e3720_81843292 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="text" readonly="" hidden="" id="page" value="game-page">
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="/admin/">Главная</a>
          <a class="breadcrumb-item" href="javascript:;">Игры</a>
          <span class="breadcrumb-item active">Все игры</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <a class="mg-t-20" href="javascript: allgames();"><i class="icon icon fas fa-gamepad"></i></a>
        <div>
          <h4 id="what_games">Все игры</h4>
        </div>
        <div class="col-lg-2 mg-t-20 mg-lg-t-0">
              <select id="selectedcat" class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)">
                <option value="0">Выберите категорию</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAllCategories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                <option id="select_<?php echo $_smarty_tpl->tpl_vars['category']->value['id_category'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name_category'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </select>
            </div><!-- col-4 -->
            <div class="col-lg-2">
              <div style="width: 100%;" class="input-group hidden-xs-down wd-170 transition">
                <input id="searchbox" type="text" class="form-control" placeholder="Поиск">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </div>
      </div><!-- d-flex -->

      <div class="br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350">

<div class="row row-sm mg-t-20" id="search-clear">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAllGames']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
          <div class="col-md-6 mg-t-20">
            <div class="card pd-0">
              <div class="row no-gutters">
                <div class="col-md-12 col-lg-4 pd-20-force">
                  <img style="width: 500px;" src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
/mainv2.jpg" class="img-fluid wd-md-100p wd-lg-auto" alt="<?php echo $_smarty_tpl->tpl_vars['game']->value['name_game'];?>
">
                </div><!-- col-4 -->
                <div class="col-md-6 col-lg-5 pd-20-force">
                  <h5 class="tx-normal mg-y-5"><a href="/admin/?controller=editgame&id=<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
" class="tx-white"><?php echo $_smarty_tpl->tpl_vars['game']->value['name_game'];?>
</a></h5>
                </div><!-- col-5 -->
                <div class="col-md-6 col-lg-3 pd-20-force d-flex align-items-start flex-column">
                  <a style="margin-top: 0;" href="/admin/?controller=editgame&id=<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
" class="mg-t-20 btn btn-danger btn-block tx-size-xs">Перейти</a>
                </div><!-- col-3-->

              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-6 -->
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        </div>
        <div class="row row-sm mg-t-20" id="search-show">
        </div>
      </div><!-- br-pagebody -->
<?php }
}
