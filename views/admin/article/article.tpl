<input type="text" readonly="" hidden="" id="page" value="art-page"> 
          <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel br-profile-page">

      <div class="card widget-4 bd-0 rounded-0">
        <div class="card-header ht-75">
          <div class="hidden-xs-down">
            <a href="javascript:;" class="mg-r-10"><span class="tx-medium">{$rsArticle['views_art']}</span> Просмотров</a>
          </div>
          <div class="tx-24 hidden-xs-down">
            <a href="javascript: deleteart({$rsArticle['id_art']});"><i class="fas fa-trash-alt"></i></a>
          </div>
        </div><!-- card-header -->
        <div class="card-body">
          
          <h4 class="tx-normal tx-roboto tx-white"><a href="/article/{$rsArticle['id_art']}/">{$rsArticle['name_art']}</a></h4>
          <p class="wd-md-500 mg-md-l-auto mg-md-r-auto mg-b-25">ID: {$rsArticle['id_art']}</p>
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
                    {if $rsArticle['art_game_id'] == '0'}
                    <select id="selected-cat" class="form-control select2" data-placeholder="Выберите категорию">
                      <option label="{$rsCategory['name_art_cat']}">{$rsCategory['name_art_cat']}</option>
                      {foreach $rsAllCats as $category}
                      <option value="{$category['id_art_cat']}">{$category['name_art_cat']}</option>
                      {/foreach}
                    </select>
                    {else}
                    <select class="form-control select2" name="categories[]" data-placeholder="Choose Browser" id="select2-category">
                      {foreach $rsAllGames as $game}
                        {if $rsArticle['art_game_id'] == $game['id_game']}
                          <option selected="" value="{$rsArticle['art_game_id']}">{$game['name_game']}</option>
                        {/if}
                        <option value="{$game['id_game']}">{$game['name_game']}</option>
                      {/foreach}
                      
                    </select>
                    {/if}
                    
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        {if $rsArticle['art_game_id'] == '0'}
                        <button id="button-cat" onclick="saveartcat({$rsArticle['id_art']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                        {else}
                        <button id="button-cat" onclick="saveupdatecat({$rsArticle['id_art']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                        {/if}
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
                    <input id="selected-name" class="form-control form-control-dark" name="art-name" placeholder="Название статьи" value="{$rsArticle['name_art']}" type="text">
                    
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-name" onclick="saveartname({$rsArticle['id_art']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                        
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
                    <input id="selected-author" class="form-control form-control-dark" name="art-author" placeholder="Автор статьи" value="{$rsArticle['author_art']}" type="text">
                    
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-author" onclick="saveartauthor({$rsArticle['id_art']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                        
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
                    <input id="selected-date" class="form-control form-control-dark" name="art-date" placeholder="Название статьи" value="{$rsArticle['date_art']}" type="text">
                    
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-date" onclick="saveartdate({$rsArticle['id_art']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                        
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
                  {foreach $namePhoto as $picture name = pic}
                  {if $picture != 'main.jpg' && $picture != 'slider.jpg'}
                  <div class="col-lg-6" id="{$smarty.foreach.pic.iteration}">
              <div class="wd-sm-300">
                <figure class="overlay">
                  <img src="{$teplateImgPath}articles/{$rsArticle['id_art']}/{$picture}" class="img-fluid" alt="">
                  <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                    <div class="img-option img-option-sm">
                      <a href="javascript: deleteartimg({$rsArticle['id_art']}, '{$picture}', {$smarty.foreach.pic.iteration});" class="img-option-link"><div><i class="fas fa-trash-alt"></i></div></a>
                    </div>
                  </figcaption>
                </figure>
              </div>
            </div>
                  {/if}
                  {/foreach}
                </div><!-- row -->

                

              </div><!-- card -->
            </div><!-- col-lg-8 -->
            
            <div class="col-lg-4 mg-t-30 mg-lg-t-0">
              <form action="/function/uploadartpictures/" method="POST" enctype="multipart/form-data">
                <input id="art-id" type="text" name="art-id" value="{$rsArticle['id_art']}" readonly="" hidden="">
              <div class="card pd-20 pd-xs-30 bd-gray-400 mg-t-30">
                <h6 class="tx-white tx-uppercase tx-14 mg-b-30">Настройки</h6>
                <div class="row row-xs mg-b-15">
                  <div class="col"><img src="{$teplateImgPath}articles/{$rsArticle['id_art']}/main.jpg" class="img-fluid" alt=""></div>
                  
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
                    <textarea rows="3" class="form-control form-control-dark" id="art-desc" placeholder="Превью статьи">{$rsArticle['prewiew_text']}</textarea>
                    
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-pre" onclick="saveartprewiew({$rsArticle['id_art']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                        
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
                    <div id="summernote">{$rsArticle['text_art']}</div>
                    
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-text" onclick="savearttext({$rsArticle['id_art']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                        
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