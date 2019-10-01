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
                  {foreach $rsAllCats as $category}
                  <option value="{$category['id_category']}">{$category['name_category']}</option>
                  {/foreach}
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
                  {foreach $rsCatNews as $category}
                  <option value="{$category['id_art_cat']}">{$category['name_art_cat']}</option>
                  {/foreach}
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
</div>