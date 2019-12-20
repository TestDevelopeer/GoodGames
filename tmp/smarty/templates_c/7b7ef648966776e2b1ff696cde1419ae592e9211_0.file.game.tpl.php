<?php
/* Smarty version 3.1.30, created on 2019-10-15 23:22:30
  from "D:\GitHub\GoodGames\views\admin\game\game.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5da62a862b3016_40307844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b7ef648966776e2b1ff696cde1419ae592e9211' => 
    array (
      0 => 'D:\\GitHub\\GoodGames\\views\\admin\\game\\game.tpl',
      1 => 1552506336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da62a862b3016_40307844 (Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel br-profile-page">

      <div class="card widget-4 bd-0 rounded-0">
        <div class="card-header ht-75">
          <div class="hidden-xs-down">
            <a href="javascript:;" class="mg-r-10"><span class="tx-medium"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['cnt_view'];?>
</span> Просмотров</a>
            <a href="javascript:;"><span class="tx-medium"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['cnt_sale'];?>
</span> Продаж</a>
          </div>
          <div class="tx-24 hidden-xs-down">
            <a href="javascript: deletegame(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);"><i class="fas fa-trash-alt"></i></a>
          </div>
        </div><!-- card-header -->
        <div class="card-body">

          <h4 class="tx-normal tx-roboto tx-white"><a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
/"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['name_game'];?>
</a></h4>
          Likes: <?php echo $_smarty_tpl->tpl_vars['rsLikes']->value;?>
 | Dislikes: <?php echo $_smarty_tpl->tpl_vars['rsDislikes']->value;?>

          <p class="wd-md-500 mg-md-l-auto mg-md-r-auto mg-b-25">ID: <?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
</p>
        </div><!-- card-body -->
      </div><!-- card -->

      <div class="ht-70 bg-black-1 pd-x-20 d-flex align-items-center justify-content-center bd-b bd-white-1">
        <ul class="nav nav-outline active-primary align-items-center flex-row" role="tablist">
          <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#posts" role="tab">Основная</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#cats" role="tab">Категории</a></li>
          <?php if ($_smarty_tpl->tpl_vars['rsGame']->value['parent_game'] == 0) {?><li class="nav-item"><a class="nav-link" data-toggle="tab" href="#lang" role="tab">Языки</a></li><?php }?>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#photos" role="tab">Фото и видео</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#desc" role="tab">Описания</a></li>
          <?php if ($_smarty_tpl->tpl_vars['rsGame']->value['parent_game'] == 0) {?><li class="nav-item"><a class="nav-link" data-toggle="tab" href="#system-req" role="tab">Системные требования</a></li><?php }?>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#links" role="tab">Ссылки</a></li>
          <li class="nav-item hidden-xs-down"><a class="nav-link" data-toggle="tab" href="#keys" role="tab">Ключи</a></li>
          <?php if ($_smarty_tpl->tpl_vars['rsGame']->value['parent_game'] == 0) {?><li class="nav-item hidden-xs-down"><a class="nav-link" data-toggle="tab" href="#dlc" role="tab">Доп. контент</a></li><?php }?>
        </ul>
      </div>

      <div class="tab-content br-profile-body">
        <div class="tab-pane fade active show" id="posts">
          <div class="row">
            <div class="col-lg-12">
              <div class="media-list bg-br-primary rounded bd bd-white-1">
                <div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Название</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input id="selected-name" class="form-control form-control-dark" name="game-name" placeholder="Название игры" value="<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['name_game'];?>
" type="text">

                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-name" onclick="savename(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->

                <div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Цена</h6>

                      </div>

                    </div><!-- d-flex -->
                    <label for="game-price">Цена</label>
                    <input id="selected-price" class="form-control form-control-dark" name="game-price" placeholder="Цена" value="<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['price_game'];?>
" type="text">
                    <label for="game-discount">Скидка</label>
                    <input id="selected-discount" class="form-control form-control-dark" name="game-discount" placeholder="Скидка" value="<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['discount_game'];?>
" type="text">
                   <div class="media-footer">
                      <div>
                        <button id="button-price" onclick="saveprice(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

                      </div>
                    </div><!-- d-flex -->
                  </div><!-- media-body -->

                </div><!-- media -->
                <div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Дата выхода</h6>

                      </div>

                    </div><!-- d-flex -->
                    <input id="selected-date" class="form-control form-control-dark" name="game-date" placeholder="Дата выхода" value="<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['Date'];?>
" type="text">

                  </div><!-- media-body -->
                   <div class="media-footer">
                      <div>
                        <button id="button-date" onclick="savedate(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->
              </div><!-- card -->

            </div><!-- col-lg-8 -->
          </div><!-- row -->
        </div><!-- tab-pane -->
                <div class="tab-pane fade" id="cats">
          <div class="row">
            <div class="col-lg-12">
              <div class="media-list bg-br-primary rounded bd bd-white-1">

                <?php if ($_smarty_tpl->tpl_vars['rsGame']->value['parent_game'] == 0) {?><div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Категории</h6>
                      </div>
                    </div><!-- d-flex -->
                    <select id="selected-cat" class="form-control select2 custom-select-cat" name="categories[]" data-placeholder="Choose Browser" multiple>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAllCats']->value, 'allCats', false, NULL, 'allCats', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['allCats']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['allCats']->value['id_category'] != $_smarty_tpl->tpl_vars['CatNames']->value[$_smarty_tpl->tpl_vars['allCats']->value['id_category']]['id_category']) {?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['allCats']->value['id_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['allCats']->value['name_category'];?>
</option>
                        <?php } else { ?>
                          <option selected value="<?php echo $_smarty_tpl->tpl_vars['CatNames']->value[$_smarty_tpl->tpl_vars['allCats']->value['id_category']]['id_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['CatNames']->value[$_smarty_tpl->tpl_vars['allCats']->value['id_category']]['name_category'];?>
</option>
                        <?php }?>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>

                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-cats" onclick="savecategories(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->
                <div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Тэги</h6>

                      </div>

                    </div><!-- d-flex -->
                    <input id="selected-tags" type="text" value="<?php
$__section_tags_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_tags']) ? $_smarty_tpl->tpl_vars['__smarty_section_tags'] : false;
$__section_tags_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['rsGameTags']->value['tag_cnt']) ? count($_loop) : max(0, (int) $_loop));
$__section_tags_0_start = min(0, $__section_tags_0_loop);
$__section_tags_0_total = min(($__section_tags_0_loop - $__section_tags_0_start), $__section_tags_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_tags'] = new Smarty_Variable(array());
if ($__section_tags_0_total != 0) {
for ($__section_tags_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_tags']->value['index'] = $__section_tags_0_start; $__section_tags_0_iteration <= $__section_tags_0_total; $__section_tags_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_tags']->value['index']++){
echo $_smarty_tpl->tpl_vars['rsGameTags']->value['tag'][(isset($_smarty_tpl->tpl_vars['__smarty_section_tags']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tags']->value['index'] : null)];?>
,<?php
}
}
if ($__section_tags_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_tags'] = $__section_tags_0_saved;
}
?>" name="game-tags" data-role="tagsinput">

                  </div><!-- media-body -->
                  <div class="media-footer">
                      <div>
                        <button id="button-tags" onclick="savetags(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->
                <div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Платформы</h6>

                      </div>

                    </div><!-- d-flex -->
                    <select id="selected-platforms" class="form-control select2 custom-select-cat" name="platforms[]" data-placeholder="Choose Browser" multiple>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAllPlatforms']->value, 'allPlats', false, NULL, 'allPlats', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['allPlats']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['allPlats']->value['id_platform'] != $_smarty_tpl->tpl_vars['PlatNames']->value[$_smarty_tpl->tpl_vars['allPlats']->value['id_platform']]['id_platform']) {?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['allPlats']->value['id_platform'];?>
"><?php echo $_smarty_tpl->tpl_vars['allPlats']->value['name_platform'];?>
</option>
                        <?php } else { ?>
                          <option selected value="<?php echo $_smarty_tpl->tpl_vars['PlatNames']->value[$_smarty_tpl->tpl_vars['allPlats']->value['id_platform']]['id_platform'];?>
"><?php echo $_smarty_tpl->tpl_vars['PlatNames']->value[$_smarty_tpl->tpl_vars['allPlats']->value['id_platform']]['name_platform'];?>
</option>
                        <?php }?>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>

                  </div><!-- media-body -->
                   <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-platforms" onclick="saveplatforms(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->

                                <div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Пользовательские категории</h6>

                      </div>

                    </div><!-- d-flex -->
                    <select id="selected-userscat" class="form-control select2 custom-select-cat" name="userscategories[]" data-placeholder="Choose Browser" multiple>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAllUsersCats']->value, 'alluserCats', false, NULL, 'alluserCats', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['alluserCats']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['alluserCats']->value['id_user_cat'] != $_smarty_tpl->tpl_vars['UserCatNames']->value[$_smarty_tpl->tpl_vars['alluserCats']->value['id_user_cat']]['id_user_cat']) {?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['alluserCats']->value['id_user_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['alluserCats']->value['name_user_cat'];?>
</option>
                        <?php } else { ?>
                          <option selected value="<?php echo $_smarty_tpl->tpl_vars['UserCatNames']->value[$_smarty_tpl->tpl_vars['alluserCats']->value['id_user_cat']]['id_user_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['UserCatNames']->value[$_smarty_tpl->tpl_vars['alluserCats']->value['id_user_cat']]['name_user_cat'];?>
</option>
                        <?php }?>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>

                  </div><!-- media-body -->
                   <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-userscat" onclick="saveuserscat(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media --><?php }?>
                <div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Игра</h6>
                      </div>
                    </div><!-- d-flex -->
                    <select class="form-control select2" name="games" data-placeholder="Choose Browser" id="select2-game">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAllGames']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['rsGame']->value['parent_game'] == $_smarty_tpl->tpl_vars['game']->value['id_game']) {?>
                          <option selected value="<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value['name_game'];?>
</option>
                        <?php } else { ?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value['name_game'];?>
</option>
                        <?php }?>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>

                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-parent" onclick="saveparentgame(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->
                

              </div><!-- card -->

            </div><!-- col-lg-8 -->
          </div><!-- row -->
        </div><!-- tab-pane -->
        <div class="tab-pane fade" id="lang">
  <div class="row">
    <div class="col-lg-12">
      <div class="media-list bg-br-primary rounded bd bd-white-1">

        <div class="media pd-20 pd-xs-30">

          <div class="media-body col-lg-8 mg-l-20">
            <div class="d-flex justify-content-between mg-b-10">
              <div>
                <h6 class="mg-b-2 tx-white tx-14">Интерфейс</h6>
              </div>
            </div><!-- d-flex -->
            <select id="selected-interf" class="form-control select2 custom-select-cat" name="interf[]" data-placeholder="Choose Browser" multiple>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAllLangs']->value, 'AllLang', false, NULL, 'AllLang', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['AllLang']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['AllLang']->value['id_lang'] != $_smarty_tpl->tpl_vars['rsInterfNames']->value[$_smarty_tpl->tpl_vars['AllLang']->value['id_lang']]['id_lang']) {?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['AllLang']->value['id_lang'];?>
"><?php echo $_smarty_tpl->tpl_vars['AllLang']->value['name_lang'];?>
</option>
                <?php } else { ?>
                  <option selected value="<?php echo $_smarty_tpl->tpl_vars['rsInterfNames']->value[$_smarty_tpl->tpl_vars['AllLang']->value['id_lang']]['id_lang'];?>
"><?php echo $_smarty_tpl->tpl_vars['rsInterfNames']->value[$_smarty_tpl->tpl_vars['AllLang']->value['id_lang']]['name_lang'];?>
</option>
                <?php }?>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>

          </div><!-- media-body -->
          <div class="media-footer col-lg-4">
              <div>
                <button id="button-interf" onclick="savegamelang(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
, 'interf');" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

              </div>
            </div><!-- d-flex -->
        </div><!-- media -->
        <div class="media pd-20 pd-xs-30">

          <div class="media-body col-lg-8 mg-l-20">
            <div class="d-flex justify-content-between mg-b-10">
              <div>
                <h6 class="mg-b-2 tx-white tx-14">Озвучка</h6>

              </div>

            </div><!-- d-flex -->
            <select id="selected-sound" class="form-control select2 custom-select-cat" name="sound[]" data-placeholder="Choose Browser" multiple>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAllLangs']->value, 'AllLang', false, NULL, 'AllLang', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['AllLang']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['AllLang']->value['id_lang'] != $_smarty_tpl->tpl_vars['rsSoundNames']->value[$_smarty_tpl->tpl_vars['AllLang']->value['id_lang']]['id_lang']) {?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['AllLang']->value['id_lang'];?>
"><?php echo $_smarty_tpl->tpl_vars['AllLang']->value['name_lang'];?>
</option>
                <?php } else { ?>
                  <option selected value="<?php echo $_smarty_tpl->tpl_vars['rsSoundNames']->value[$_smarty_tpl->tpl_vars['AllLang']->value['id_lang']]['id_lang'];?>
"><?php echo $_smarty_tpl->tpl_vars['rsSoundNames']->value[$_smarty_tpl->tpl_vars['AllLang']->value['id_lang']]['name_lang'];?>
</option>
                <?php }?>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>

          </div><!-- media-body -->
          <div class="media-footer">
              <div>
                <button id="button-sound" onclick="savegamelang(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
, 'sound');" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

              </div>
            </div><!-- d-flex -->
        </div><!-- media -->

                        <div class="media pd-20 pd-xs-30">

          <div class="media-body col-lg-8 mg-l-20">
            <div class="d-flex justify-content-between mg-b-10">
              <div>
                <h6 class="mg-b-2 tx-white tx-14">Субтитры</h6>

              </div>

            </div><!-- d-flex -->
            <select id="selected-subtit" class="form-control select2 custom-select-cat" name="subtit[]" data-placeholder="Choose Browser" multiple>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAllLangs']->value, 'AllLang', false, NULL, 'AllLang', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['AllLang']->value) {
?>
                  <?php if ($_smarty_tpl->tpl_vars['AllLang']->value['id_lang'] != $_smarty_tpl->tpl_vars['rsSubtitNames']->value[$_smarty_tpl->tpl_vars['AllLang']->value['id_lang']]['id_lang']) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['AllLang']->value['id_lang'];?>
"><?php echo $_smarty_tpl->tpl_vars['AllLang']->value['name_lang'];?>
</option>
                  <?php } else { ?>
                    <option selected value="<?php echo $_smarty_tpl->tpl_vars['rsSubtitNames']->value[$_smarty_tpl->tpl_vars['AllLang']->value['id_lang']]['id_lang'];?>
"><?php echo $_smarty_tpl->tpl_vars['rsSubtitNames']->value[$_smarty_tpl->tpl_vars['AllLang']->value['id_lang']]['name_lang'];?>
</option>
                  <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>

          </div><!-- media-body -->
           <div class="media-footer col-lg-4">
              <div>
                <button id="button-subtit" onclick="savegamelang(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
, 'subtit');" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

              </div>
            </div><!-- d-flex -->
        </div><!-- media -->

      </div><!-- card -->

    </div><!-- col-lg-8 -->
  </div><!-- row -->
</div><!-- tab-pane -->
        <div class="tab-pane fade" id="photos">
          <div class="row">
            <div class="col-lg-8">
              <div class="card pd-20 pd-xs-30 bd-gray-400 mg-t-30">
                <h6 class="tx-white tx-uppercase tx-14 mg-b-30">Трейлер</h6>

                <div class="row row-xs">

                  <div class="col-lg-8 col-6 col-sm-4 col-md-3">
                    <input id="selected-video" class="form-control form-control-dark" name="game-video" placeholder="Видео трейлер" value='<?php echo $_smarty_tpl->tpl_vars['rsGameTrailer']->value["id_on_youtube"];?>
' type="text">
                    <div>
                    <?php echo $_smarty_tpl->tpl_vars['rsGameTrailer']->value["url_video"];?>

                  </div>
                  </div>
                  
                  <div class="col-lg-4 col-6 col-sm-4 col-md-3"><button id="button-video" onclick="savevideo(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
, '<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['name_game'];?>
');" class="btn btn-outline-primary btn-block"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button></div>
                  <div class="mg-t-20">
                  <!--<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['video_game'];?>
-->
                  </div>
                </div><!-- row -->



              </div><!-- card -->
              <div class="card pd-20 pd-xs-30 bd-gray-400 mg-t-30">
                <h6 class="tx-white tx-uppercase tx-14 mg-b-30">Все изображения</h6>

                <div class="row row-xs">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['namePhoto']->value, 'picture', false, NULL, 'pic', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_pic']->value['iteration']++;
?>
                  <?php if ($_smarty_tpl->tpl_vars['picture']->value != 'main.jpg' && $_smarty_tpl->tpl_vars['picture']->value != 'slider.jpg') {?>
                  <div class="col-lg-6" id="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_pic']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_pic']->value['iteration'] : null);?>
">
              <div class="wd-sm-300">
                <figure class="overlay">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
/<?php echo $_smarty_tpl->tpl_vars['picture']->value;?>
" class="img-fluid" alt="">
                  <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                    <div class="img-option img-option-sm">
                      <a href="javascript: deleteimg(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
, '<?php echo $_smarty_tpl->tpl_vars['picture']->value;?>
', <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_pic']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_pic']->value['iteration'] : null);?>
);" class="img-option-link"><div><i class="fas fa-trash-alt"></i></div></a>
                    </div>
                  </figcaption>
                </figure>
              </div>
            </div>
                  <?php }?>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div><!-- row -->



              </div><!-- card -->
            </div><!-- col-lg-8 -->

            <div class="col-lg-4 mg-t-30 mg-lg-t-0">
              <form action="/function/uploadpictures/" method="POST" enctype="multipart/form-data">
                <input id="game-id" type="text" name="game-id" value="<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
" readonly="" hidden="">
              <div class="card pd-20 pd-xs-30 bd-gray-400 mg-t-30">
                <h6 class="tx-white tx-uppercase tx-14 mg-b-30">Настройки</h6>
                <div class="row row-xs mg-b-15">
                  <div class="col"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
/main.jpg" class="img-fluid" alt=""></div>

                  <div class="col">
                    <div class="custom-file">
                <input type="file" class="custom-file-input" name="mainPicture" id="customFile1">
                <label class="custom-file-label custom-file-label-primary" for="customFile2"></label>
              </div>

                  </div>
                </div><!-- row -->

                <div class="d-flex alig-items-center justify-content-between">
                  <h6 class="tx-white tx-14 mg-b-0">Главное изображение</h6>

                </div><!-- d-flex -->

                <hr>

                <div class="row row-xs mg-b-15">
                  <div class="col"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
/mainv2.jpg" class="img-fluid" alt=""></div>

                  <div class="col">
                    <div class="custom-file">
                <input type="file" class="custom-file-input" name="mainv2Picture" id="customFilev2">
                <label class="custom-file-label custom-file-label-primary" for="customFilev2"></label>
              </div>

                  </div>
                </div><!-- row -->

                <div class="d-flex alig-items-center justify-content-between">
                  <h6 class="tx-white tx-14 mg-b-0">Главное изображение v2</h6>

                </div><!-- d-flex -->

                <hr>

                <div class="row row-xs mg-b-15">
                  <div class="col"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
/slider.jpg" class="img-fluid" alt=""></div>

                  <div class="col">
                    <div class="custom-file">
                <input type="file" class="custom-file-input" name="sliderPicture" id="customFile2">
                <label class="custom-file-label custom-file-label-primary" for="customFile2"></label>
              </div>

                  </div>
                </div><!-- row -->


                <div class="d-flex alig-items-center justify-content-between">
                  <h6 class="tx-white tx-14 mg-b-0">Изображение слайдера</h6>

                </div><!-- d-flex -->

                <hr>

                <div class="row row-xs mg-b-15">
                  <div class="col"><input type="file" name="file-1[]" id="file-1" class="inputfile" data-multiple-caption="{ count } файлов выбрано" multiple>
              <label for="file-1" class="tx-white bg-info">
                <i class="icon ion-ios-upload-outline tx-24"></i>
                <span>Изображения игры</span>
              </label>
            </div>

                </div><!-- row -->
                <div class="d-flex alig-items-center justify-content-between">
                  <h6 class="tx-white tx-14 mg-b-0">Остальные изображения</h6>

                </div><!-- d-flex -->
                <button type="submit" class="btn btn-outline-primary btn-block mg-t-20"><i class="fa fa-envelope mg-r-10"></i> Загрузить</button>

              </div><!-- card -->
              </form>
            </div><!-- col-lg-4 -->

          </div><!-- row -->
        </div><!-- tab-pane -->
                <div class="tab-pane fade" id="desc">
          <div class="row">
            <div class="col-lg-12">
              <div class="media-list bg-br-primary rounded bd bd-white-1">
                <?php if ($_smarty_tpl->tpl_vars['rsGame']->value['parent_game'] == 0) {?><div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Главное описание</h6>
                      </div>
                    </div><!-- d-flex -->
                    <textarea id="selected-main-desc" rows="3" class="form-control form-control-dark" name="game-main-desc" placeholder="Главное описание игры"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['description_game'];?>
</textarea>

                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-main" onclick="savemaindesc(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media --><?php }?>
                <div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Второстепенное описание</h6>
                      </div>
                    </div><!-- d-flex -->
                    <div id="summernote"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['desc_game'];?>
</div>

                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-second" onclick="saveseconddesc(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->

                <?php if ($_smarty_tpl->tpl_vars['rsGame']->value['parent_game'] == 0) {?><div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Разработчик</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input id="selected-developer" class="form-control form-control-dark" placeholder="Разработчик" value="<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['Developer'];?>
" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-developer" onclick="savedeveloper(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->

                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Издатель</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input id="selected-publisher" class="form-control form-control-dark" placeholder="Издатель" value="<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['Publisher'];?>
" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-publisher" onclick="savepublisher(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                      </div>
                    </div><!-- d-flex -->
                </div><!-- media --><?php }?>

                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Возрастной рейтинг</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input id="selected-pegi" class="form-control form-control-dark" placeholder="Возрастной рейтинг" value="<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['pegi_rating'];?>
" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-pegi" onclick="savepegi(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->
              </div><!-- card -->

            </div><!-- col-lg-8 -->
          </div><!-- row -->
        </div><!-- tab-pane -->
                        <div class="tab-pane fade" id="system-req">

          <div class="row">

            <div class="col-lg-6" id="system-minrequired">
                <h6 class="mg-b-2 tx-white tx-14">Минимальные</h6>
              <div class="media-list bg-br-primary rounded bd bd-white-1">
                  <input type="text" name="id-game" readonly="" hidden="" value="<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
">
                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Операционная система</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input class="form-control form-control-dark" name="game-os" placeholder="Операционная система" value="<?php echo $_smarty_tpl->tpl_vars['rsMinRequire']->value['OS'];?>
" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->

                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Процессор</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input class="form-control form-control-dark" name="game-cpu" placeholder="Процессор" value="<?php echo $_smarty_tpl->tpl_vars['rsMinRequire']->value['Processor'];?>
" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->

                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Оперативная память</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input class="form-control form-control-dark" name="game-ozu" placeholder="Оперативная память" value="<?php echo $_smarty_tpl->tpl_vars['rsMinRequire']->value['OZU'];?>
" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->

                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Видеокарта</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input class="form-control form-control-dark" name="game-gpu" placeholder="Видеокарта" value="<?php echo $_smarty_tpl->tpl_vars['rsMinRequire']->value['GPU'];?>
" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->

                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">DirectX</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input class="form-control form-control-dark" name="game-directx" placeholder="DirectX" value="<?php echo $_smarty_tpl->tpl_vars['rsMinRequire']->value['DirectX'];?>
" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->

                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Свободная память</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input class="form-control form-control-dark" name="game-memory" placeholder="Свободная памятьа" value="<?php echo $_smarty_tpl->tpl_vars['rsMinRequire']->value['Memory'];?>
" type="text">
                  </div><!-- media-body -->

                </div><!-- media -->
                <div class="media pd-20 pd-xs-30">
                  <div class="media-footer col-lg-12">
                      <div class="col-lg-6">
                        <button id="button-minrequired" onclick="saveminrequired();" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->
              </div><!-- card -->

            </div><!-- col-lg-8 -->
            <div class="col-lg-6" id="system-required">
                <h6 class="mg-b-2 tx-white tx-14">Рекомендуемые</h6>
              <div class="media-list bg-br-primary rounded bd bd-white-1">
                  <input type="text" name="id-game" readonly="" hidden="" value="<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
">
                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Операционная система</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input class="form-control form-control-dark" name="game-os" placeholder="Операционная система" value="<?php echo $_smarty_tpl->tpl_vars['rsRecRequire']->value['OS'];?>
" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->

                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Процессор</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input class="form-control form-control-dark" name="game-cpu" placeholder="Процессор" value="<?php echo $_smarty_tpl->tpl_vars['rsRecRequire']->value['Processor'];?>
" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->

                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Оперативная память</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input class="form-control form-control-dark" name="game-ozu" placeholder="Оперативная память" value="<?php echo $_smarty_tpl->tpl_vars['rsRecRequire']->value['OZU'];?>
" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->

                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Видеокарта</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input class="form-control form-control-dark" name="game-gpu" placeholder="Видеокарта" value="<?php echo $_smarty_tpl->tpl_vars['rsRecRequire']->value['GPU'];?>
" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->

                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">DirectX</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input class="form-control form-control-dark" name="game-directx" placeholder="DirectX" value="<?php echo $_smarty_tpl->tpl_vars['rsRecRequire']->value['DirectX'];?>
" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->

                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Свободная память</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input class="form-control form-control-dark" name="game-memory" placeholder="Свободная памятьа" value="<?php echo $_smarty_tpl->tpl_vars['rsRecRequire']->value['Memory'];?>
" type="text">
                  </div><!-- media-body -->

                </div><!-- media -->
                <div class="media pd-20 pd-xs-30">
                  <div class="media-footer col-lg-12">
                      <div class="col-lg-6">
                        <button id="button-required" onclick="saverecrequired();" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->
              </div><!-- card -->

            </div><!-- col-lg-8 -->
          </div><!-- row -->
        </div><!-- tab-pane -->

                        <div class="tab-pane fade" id="keys">
          <div class="row">
            <div class="col-lg-12">
              <div class="media-list bg-br-primary rounded bd bd-white-1">
                <div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Количество ключей</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input id="selected-keys" class="form-control form-control-dark" name="game-keys" placeholder="Количество ключей" value="<?php echo $_smarty_tpl->tpl_vars['keysCnt']->value;?>
" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-keys" onclick="savecntkeys(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->
                <div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Ключи</h6>
                      </div>
                    </div><!-- d-flex -->
                    <div id="keys-numbs">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['keys']->value, 'key', false, NULL, 'key', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_key']->value['iteration']++;
?>
                      <input class="form-control form-control-dark" name="key_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_key']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_key']->value['iteration'] : null);?>
" placeholder="Ключ" value="<?php echo $_smarty_tpl->tpl_vars['key']->value['key_number'];?>
" type="text">
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </div>
                  </div><!-- media-body -->

                </div><!-- media -->

              </div><!-- card -->

            </div><!-- col-lg-8 -->
          </div><!-- row -->
        </div><!-- tab-pane -->

                                <div class="tab-pane fade" id="dlc">
          <div class="row">
            <div class="col-lg-12">
              <div class="media-list bg-br-primary rounded bd bd-white-1">

                <div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Дополнения</h6>
                      </div>
                    </div><!-- d-flex -->
                    <div id="keys-numbs">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gameContent']->value, 'dlc', false, NULL, 'dlc', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dlc']->value) {
?>
                      <a class="form-control form-control-dark" href="/editgame/<?php echo $_smarty_tpl->tpl_vars['dlc']->value['id_game'];?>
/"><?php echo $_smarty_tpl->tpl_vars['dlc']->value['name_game'];?>
</a><br>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </div>
                  </div><!-- media-body -->

                </div><!-- media -->

              </div><!-- card -->

            </div><!-- col-lg-8 -->
          </div><!-- row -->
        </div><!-- tab-pane -->

        <div class="tab-pane fade" id="links">
<div class="row">
<div class="col-lg-12">
<div class="media-list bg-br-primary rounded bd bd-white-1">
<?php if ($_smarty_tpl->tpl_vars['rsGame']->value['parent_game'] == 0) {?><div class="media pd-20 pd-xs-30">

  <div class="media-body col-lg-8 mg-l-20">
    <div class="d-flex justify-content-between mg-b-10">
      <div>
        <h6 class="mg-b-2 tx-white tx-14">Сайт игры</h6>
      </div>
    </div><!-- d-flex -->
    <input class="form-control form-control-dark" name="game-link-site" placeholder="Сайт" value='<?php echo $_smarty_tpl->tpl_vars['rsLinks']->value['site_game'];?>
' type="text">
  </div><!-- media-body -->
  <div class="media-footer col-lg-4">
      <div>
        <button id="button-site" onclick="savelinks(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
, 'site');" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

      </div>
    </div><!-- d-flex -->
</div><!-- media --><?php }?>
<div class="media pd-20 pd-xs-30">

  <div class="media-body col-lg-8 mg-l-20">
    <div class="d-flex justify-content-between mg-b-10">
      <div>
        <h6 class="mg-b-2 tx-white tx-14">Покупка в стим</h6>
      </div>
    </div><!-- d-flex -->
    <input class="form-control form-control-dark" name="game-link-link" placeholder="Steam" value='<?php echo $_smarty_tpl->tpl_vars['rsLinks']->value['link_game'];?>
' type="text">
  </div><!-- media-body -->
  <div class="media-footer col-lg-4">
      <div>
        <button id="button-link" onclick="savelinks(<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
, 'link');" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

      </div>
    </div><!-- d-flex -->
</div><!-- media -->

</div><!-- card -->

</div><!-- col-lg-8 -->
</div><!-- row -->
</div><!-- tab-pane -->

      </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
<?php }
}
