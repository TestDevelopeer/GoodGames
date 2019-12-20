<?php
/* Smarty version 3.1.30, created on 2019-10-15 23:23:21
  from "D:\GitHub\GoodGames\views\admin\article\article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5da62ab9dfd780_22562681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6624bfbdfcd93d98368d6e66a40112f397a47b5b' => 
    array (
      0 => 'D:\\GitHub\\GoodGames\\views\\admin\\article\\article.tpl',
      1 => 1550570888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da62ab9dfd780_22562681 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="text" readonly="" hidden="" id="page" value="art-page"> 
          <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel br-profile-page">

      <div class="card widget-4 bd-0 rounded-0">
        <div class="card-header ht-75">
          <div class="hidden-xs-down">
            <a href="javascript:;" class="mg-r-10"><span class="tx-medium"><?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['views_art'];?>
</span> Просмотров</a>
          </div>
          <div class="tx-24 hidden-xs-down">
            <a href="javascript: deleteart(<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['id_art'];?>
);"><i class="fas fa-trash-alt"></i></a>
          </div>
        </div><!-- card-header -->
        <div class="card-body">
          
          <h4 class="tx-normal tx-roboto tx-white"><a href="/article/<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['id_art'];?>
/"><?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['name_art'];?>
</a></h4>
          <p class="wd-md-500 mg-md-l-auto mg-md-r-auto mg-b-25">ID: <?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['id_art'];?>
</p>
        </div><!-- card-body -->
      </div><!-- card -->

      <div class="ht-70 bg-black-1 pd-x-20 d-flex align-items-center justify-content-center bd-b bd-white-1">
        <ul class="nav nav-outline active-primary align-items-center flex-row" role="tablist">
          <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#posts" role="tab">Основная</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#photos" role="tab">Фото и видео</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#desc" role="tab">Текст</a></li>
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
                        <h6 class="mg-b-2 tx-white tx-14">Категория</h6>
                      </div>
                    </div><!-- d-flex -->
                    <?php if ($_smarty_tpl->tpl_vars['rsArticle']->value['art_game_id'] == '0') {?>
                    <select id="selected-cat" class="form-control select2" data-placeholder="Выберите категорию">
                      <option label="<?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name_art_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name_art_cat'];?>
</option>
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
                    <?php } else { ?>
                    <select class="form-control select2" name="categories[]" data-placeholder="Choose Browser" id="select2-category">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsAllGames']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['rsArticle']->value['art_game_id'] == $_smarty_tpl->tpl_vars['game']->value['id_game']) {?>
                          <option selected="" value="<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['art_game_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value['name_game'];?>
</option>
                        <?php }?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value['name_game'];?>
</option>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                      
                    </select>
                    <?php }?>
                    
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <?php if ($_smarty_tpl->tpl_vars['rsArticle']->value['art_game_id'] == '0') {?>
                        <button id="button-cat" onclick="saveartcat(<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['id_art'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                        <?php } else { ?>
                        <button id="button-cat" onclick="saveupdatecat(<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['id_art'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                        <?php }?>
                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->
                <div class="media pd-20 pd-xs-30">
                  
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Название</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input id="selected-name" class="form-control form-control-dark" name="art-name" placeholder="Название статьи" value="<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['name_art'];?>
" type="text">
                    
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-name" onclick="saveartname(<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['id_art'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                        
                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->
                  <div class="media pd-20 pd-xs-30">
                  
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Автор</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input id="selected-author" class="form-control form-control-dark" name="art-author" placeholder="Автор статьи" value="<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['author_art'];?>
" type="text">
                    
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-author" onclick="saveartauthor(<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['id_art'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                        
                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->
                  <div class="media pd-20 pd-xs-30">
                  
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Дата</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input id="selected-date" class="form-control form-control-dark" name="art-date" placeholder="Название статьи" value="<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['date_art'];?>
" type="text">
                    
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-date" onclick="saveartdate(<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['id_art'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                        
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
articles/<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['id_art'];?>
/<?php echo $_smarty_tpl->tpl_vars['picture']->value;?>
" class="img-fluid" alt="">
                  <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                    <div class="img-option img-option-sm">
                      <a href="javascript: deleteartimg(<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['id_art'];?>
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
              <form action="/function/uploadartpictures/" method="POST" enctype="multipart/form-data">
                <input id="art-id" type="text" name="art-id" value="<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['id_art'];?>
" readonly="" hidden="">
              <div class="card pd-20 pd-xs-30 bd-gray-400 mg-t-30">
                <h6 class="tx-white tx-uppercase tx-14 mg-b-30">Настройки</h6>
                <div class="row row-xs mg-b-15">
                  <div class="col"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['id_art'];?>
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
                  <div class="col"><input type="file" name="file-1[]" id="file-1" class="inputfile" data-multiple-caption="{ count } файлов выбрано" multiple>
              <label for="file-1" class="tx-white bg-info">
                <i class="icon ion-ios-upload-outline tx-24"></i>
                <span>Изображения статьи</span>
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
                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Превью текст</h6>
                      </div>
                    </div><!-- d-flex -->
                    <textarea rows="3" class="form-control form-control-dark" id="art-desc" placeholder="Превью статьи"><?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['prewiew_text'];?>
</textarea>
                    
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-pre" onclick="saveartprewiew(<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['id_art'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                        
                      </div>
                    </div><!-- d-flex -->
                  </div>
                <div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Текст</h6>
                      </div>
                    </div><!-- d-flex -->
                    <div id="summernote"><?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['text_art'];?>
</div>
                    
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-text" onclick="savearttext(<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['id_art'];?>
);" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                        
                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->
              </div><!-- card -->

            </div><!-- col-lg-8 -->
          </div><!-- row -->
        </div><!-- tab-pane -->
      </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## --><?php }
}
