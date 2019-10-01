<?php
/* Smarty version 3.1.30, created on 2019-02-17 08:16:26
  from "D:\OSPanel\domains\games\views\admin\game\allGames.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c68ee2af04760_92495822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90c1210e3a5678e023637ac4ad09103fc5c14445' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\admin\\game\\allGames.tpl',
      1 => 1550380585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c68ee2af04760_92495822 (Smarty_Internal_Template $_smarty_tpl) {
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
          <div class="col-xl-6 mg-t-20">
            <div class="card pd-0">
              <div class="row no-gutters">
                <div class="col-md-12 col-lg-4 pd-20-force">
                  <img style="width: 500px;" src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
/main.jpg" class="img-fluid wd-md-100p wd-lg-auto" alt="<?php echo $_smarty_tpl->tpl_vars['game']->value['name_game'];?>
">
                </div><!-- col-4 -->
                <div class="col-md-6 col-lg-5 pd-20-force">
                  <div>
                    <span class="tx-warning d-inline-block">
                      <?php
$__section_rating_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_rating']) ? $_smarty_tpl->tpl_vars['__smarty_section_rating'] : false;
$__section_rating_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['game']->value['rating_game']/$_smarty_tpl->tpl_vars['game']->value['cnt_vote_rating']) ? count($_loop) : max(0, (int) $_loop));
$__section_rating_0_start = min(0, $__section_rating_0_loop);
$__section_rating_0_total = min(($__section_rating_0_loop - $__section_rating_0_start), $__section_rating_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_rating'] = new Smarty_Variable(array());
if ($__section_rating_0_total != 0) {
for ($__section_rating_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rating']->value['index'] = $__section_rating_0_start; $__section_rating_0_iteration <= $__section_rating_0_total; $__section_rating_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rating']->value['index']++){
?>
                      <i class="icon ion-star"></i>
                      <?php
}
}
if ($__section_rating_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_rating'] = $__section_rating_0_saved;
}
?>
                    </span>
                    <span class="tx-12"> &nbsp; <span class="tx-rubik"><?php echo $_smarty_tpl->tpl_vars['game']->value['cnt_vote_rating'];?>
 </span> проголосовавших</span>
                  </div>
                  <h5 class="tx-normal mg-y-5"><a href="/admin/?controller=editgame&id=<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
" class="tx-white"><?php echo $_smarty_tpl->tpl_vars['game']->value['name_game'];?>
</a></h5>
                  <span class="tx-13"><?php echo $_smarty_tpl->tpl_vars['game']->value['cnt_sale'];?>
 продаж, <?php echo $_smarty_tpl->tpl_vars['game']->value['cnt_view'];?>
 просмотров</span>


                  <p class="tx-13 mg-t-20">
                    <?php
$__section_cats_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_cats']) ? $_smarty_tpl->tpl_vars['__smarty_section_cats'] : false;
$__section_cats_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['rsAllGames']->value[$_smarty_tpl->tpl_vars['i']->value]['tag_name']) ? count($_loop) : max(0, (int) $_loop));
$__section_cats_1_start = min(0, $__section_cats_1_loop);
$__section_cats_1_total = min(($__section_cats_1_loop - $__section_cats_1_start), $__section_cats_1_loop);
$_smarty_tpl->tpl_vars['__smarty_section_cats'] = new Smarty_Variable(array());
if ($__section_cats_1_total != 0) {
for ($__section_cats_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cats']->value['index'] = $__section_cats_1_start; $__section_cats_1_iteration <= $__section_cats_1_total; $__section_cats_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cats']->value['index']++){
?>
                    <a href="javascript: searchtag('<?php echo $_smarty_tpl->tpl_vars['rsAllGames']->value[$_smarty_tpl->tpl_vars['i']->value]['tag_name'][$_smarty_tpl->tpl_vars['j']->value];?>
');"><?php echo $_smarty_tpl->tpl_vars['rsAllGames']->value[$_smarty_tpl->tpl_vars['i']->value]['tag_name'][$_smarty_tpl->tpl_vars['j']->value];?>
</a>
                    <?php $_smarty_tpl->_assignInScope('j', $_smarty_tpl->tpl_vars['j']->value+1);
?>
                    <?php
}
}
if ($__section_cats_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_cats'] = $__section_cats_1_saved;
}
?>
                    <?php $_smarty_tpl->_assignInScope('j', 0);
?>
                  </p>

                </div><!-- col-5 -->
                <div class="col-md-6 col-lg-3 pd-20-force d-flex align-items-start flex-column">
                  <?php if ($_smarty_tpl->tpl_vars['game']->value['discount_game'] > 0) {?>
                  <span class="tx-warning tx-12"><span class="tx-lato"><?php echo $_smarty_tpl->tpl_vars['game']->value['discount_game'];?>
%</span> скидка</span>
                  <h5 class="tx-normal mg-b-0"><del>РУБ <span class="tx-medium tx-lato"><?php echo $_smarty_tpl->tpl_vars['game']->value['price_game'];?>
</span></del></h5>
                  <h5 class="tx-normal mg-b-0">РУБ <span class="tx-danger tx-medium tx-lato"><?php echo $_smarty_tpl->tpl_vars['game']->value['discount_price_game'];?>
</span></h5>
                  <?php } else { ?>
                  <h5 class="tx-normal mg-b-0">РУБ <span class="tx-danger tx-medium tx-lato"><?php echo $_smarty_tpl->tpl_vars['game']->value['price_game'];?>
</span></h5>
                  <?php }?>
                  <ul class="list-unstyled tx-12 mg-b-20 mg-lg-b-auto">

                      <?php if ($_smarty_tpl->tpl_vars['game']->value['cnt_keys'] > 0) {?>
                      <li><i class="fas fa-key tx-success mg-r-5"></i> Ключей: <?php echo $_smarty_tpl->tpl_vars['game']->value['cnt_keys'];?>
</li>
                      <?php } else { ?>
                      <li><i class="fas fa-key tx-danger mg-r-5"></i> Нет ключей</li>
                      <?php }?>

                    <?php
$__section_cats_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_cats']) ? $_smarty_tpl->tpl_vars['__smarty_section_cats'] : false;
$__section_cats_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['categoriesid']->value[$_smarty_tpl->tpl_vars['i']->value]['cat_name']) ? count($_loop) : max(0, (int) $_loop));
$__section_cats_2_start = min(0, $__section_cats_2_loop);
$__section_cats_2_total = min(($__section_cats_2_loop - $__section_cats_2_start), $__section_cats_2_loop);
$_smarty_tpl->tpl_vars['__smarty_section_cats'] = new Smarty_Variable(array());
if ($__section_cats_2_total != 0) {
for ($__section_cats_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cats']->value['index'] = $__section_cats_2_start; $__section_cats_2_iteration <= $__section_cats_2_total; $__section_cats_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cats']->value['index']++){
?>
                      <li>
                        <i class="far fa-bookmark tx-success mg-r-5"></i><?php echo $_smarty_tpl->tpl_vars['categoriesid']->value[$_smarty_tpl->tpl_vars['i']->value]['cat_name'][$_smarty_tpl->tpl_vars['j']->value];?>

                      </li>
                    <?php $_smarty_tpl->_assignInScope('j', $_smarty_tpl->tpl_vars['j']->value+1);
?>
                    <?php
}
}
if ($__section_cats_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_cats'] = $__section_cats_2_saved;
}
?>
                    <?php $_smarty_tpl->_assignInScope('j', 0);
?>
                    <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
                  </ul>

                  <a href="/admin/?controller=editgame&id=<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
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
