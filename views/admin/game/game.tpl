
          <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel br-profile-page">

      <div class="card widget-4 bd-0 rounded-0">
        <div class="card-header ht-75">
          <div class="hidden-xs-down">
            <a href="javascript:;" class="mg-r-10"><span class="tx-medium">{$rsGame['cnt_view']}</span> Просмотров</a>
            <a href="javascript:;"><span class="tx-medium">{$rsGame['cnt_sale']}</span> Продаж</a>
          </div>
          <div class="tx-24 hidden-xs-down">
            <a href="javascript: deletegame({$rsGame['id_game']});"><i class="fas fa-trash-alt"></i></a>
          </div>
        </div><!-- card-header -->
        <div class="card-body">

          <h4 class="tx-normal tx-roboto tx-white"><a href="/game/{$rsGame['id_game']}/">{$rsGame['name_game']}</a></h4>
          Likes: {$rsLikes} | Dislikes: {$rsDislikes}
          <p class="wd-md-500 mg-md-l-auto mg-md-r-auto mg-b-25">ID: {$rsGame['id_game']}</p>
        </div><!-- card-body -->
      </div><!-- card -->

      <div class="ht-70 bg-black-1 pd-x-20 d-flex align-items-center justify-content-center bd-b bd-white-1">
        <ul class="nav nav-outline active-primary align-items-center flex-row" role="tablist">
          <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#posts" role="tab">Основная</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#cats" role="tab">Категории</a></li>
          {if $rsGame['parent_game'] == 0}<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#lang" role="tab">Языки</a></li>{/if}
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#photos" role="tab">Фото и видео</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#desc" role="tab">Описания</a></li>
          {if $rsGame['parent_game'] == 0}<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#system-req" role="tab">Системные требования</a></li>{/if}
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#links" role="tab">Ссылки</a></li>
          <li class="nav-item hidden-xs-down"><a class="nav-link" data-toggle="tab" href="#keys" role="tab">Ключи</a></li>
          {if $rsGame['parent_game'] == 0}<li class="nav-item hidden-xs-down"><a class="nav-link" data-toggle="tab" href="#dlc" role="tab">Доп. контент</a></li>{/if}
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
                    <input id="selected-name" class="form-control form-control-dark" name="game-name" placeholder="Название игры" value="{$rsGame['name_game']}" type="text">

                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-name" onclick="savename({$rsGame['id_game']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

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
                    <input id="selected-price" class="form-control form-control-dark" name="game-price" placeholder="Цена" value="{$rsGame['price_game']}" type="text">
                    <label for="game-discount">Скидка</label>
                    <input id="selected-discount" class="form-control form-control-dark" name="game-discount" placeholder="Скидка" value="{$rsGame['discount_game']}" type="text">
                   <div class="media-footer">
                      <div>
                        <button id="button-price" onclick="saveprice({$rsGame['id_game']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

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
                    <input id="selected-date" class="form-control form-control-dark" name="game-date" placeholder="Дата выхода" value="{$rsGame['Date']}" type="text">

                  </div><!-- media-body -->
                   <div class="media-footer">
                      <div>
                        <button id="button-date" onclick="savedate({$rsGame['id_game']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

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

                {if $rsGame['parent_game'] == 0}<div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Категории</h6>
                      </div>
                    </div><!-- d-flex -->
                    <select id="selected-cat" class="form-control select2 custom-select-cat" name="categories[]" data-placeholder="Choose Browser" multiple>
                      {foreach $rsAllCats as $allCats name = allCats}
                        {if $allCats['id_category'] != $CatNames[$allCats['id_category']]['id_category']}
                          <option value="{$allCats['id_category']}">{$allCats['name_category']}</option>
                        {else}
                          <option selected value="{$CatNames[$allCats['id_category']]['id_category']}">{$CatNames[$allCats['id_category']]['name_category']}</option>
                        {/if}
                      {/foreach}
                    </select>

                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-cats" onclick="savecategories({$rsGame['id_game']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

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
                    <input id="selected-tags" type="text" value="{section name=tags start=0 loop=$rsGameTags['tag_cnt'] step=1}{$rsGameTags['tag'][tags]},{/section}" name="game-tags" data-role="tagsinput">

                  </div><!-- media-body -->
                  <div class="media-footer">
                      <div>
                        <button id="button-tags" onclick="savetags({$rsGame['id_game']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

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
                      {foreach $rsAllPlatforms as $allPlats name = allPlats}
                        {if $allPlats['id_platform'] != $PlatNames[$allPlats['id_platform']]['id_platform']}
                          <option value="{$allPlats['id_platform']}">{$allPlats['name_platform']}</option>
                        {else}
                          <option selected value="{$PlatNames[$allPlats['id_platform']]['id_platform']}">{$PlatNames[$allPlats['id_platform']]['name_platform']}</option>
                        {/if}
                      {/foreach}
                    </select>

                  </div><!-- media-body -->
                   <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-platforms" onclick="saveplatforms({$rsGame['id_game']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

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
                      {foreach $rsAllUsersCats as $alluserCats name = alluserCats}
                        {if $alluserCats['id_user_cat'] != $UserCatNames[$alluserCats['id_user_cat']]['id_user_cat']}
                          <option value="{$alluserCats['id_user_cat']}">{$alluserCats['name_user_cat']}</option>
                        {else}
                          <option selected value="{$UserCatNames[$alluserCats['id_user_cat']]['id_user_cat']}">{$UserCatNames[$alluserCats['id_user_cat']]['name_user_cat']}</option>
                        {/if}
                      {/foreach}
                    </select>

                  </div><!-- media-body -->
                   <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-userscat" onclick="saveuserscat({$rsGame['id_game']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->{/if}
                <div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Игра</h6>
                      </div>
                    </div><!-- d-flex -->
                    <select class="form-control select2" name="games" data-placeholder="Choose Browser" id="select2-game">
                      {foreach $rsAllGames as $game}
                        {if $rsGame['parent_game'] == $game['id_game']}
                          <option selected value="{$game['id_game']}">{$game['name_game']}</option>
                        {else}
                          <option value="{$game['id_game']}">{$game['name_game']}</option>
                        {/if}
                      {/foreach}
                    </select>

                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-parent" onclick="saveparentgame({$rsGame['id_game']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

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
              {foreach $rsAllLangs as $AllLang name = AllLang}
                {if $AllLang['id_lang'] != $rsInterfNames[$AllLang['id_lang']]['id_lang']}
                  <option value="{$AllLang['id_lang']}">{$AllLang['name_lang']}</option>
                {else}
                  <option selected value="{$rsInterfNames[$AllLang['id_lang']]['id_lang']}">{$rsInterfNames[$AllLang['id_lang']]['name_lang']}</option>
                {/if}
              {/foreach}
            </select>

          </div><!-- media-body -->
          <div class="media-footer col-lg-4">
              <div>
                <button id="button-interf" onclick="savegamelang({$rsGame['id_game']}, 'interf');" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

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
              {foreach $rsAllLangs as $AllLang name = AllLang}
                {if $AllLang['id_lang'] != $rsSoundNames[$AllLang['id_lang']]['id_lang']}
                  <option value="{$AllLang['id_lang']}">{$AllLang['name_lang']}</option>
                {else}
                  <option selected value="{$rsSoundNames[$AllLang['id_lang']]['id_lang']}">{$rsSoundNames[$AllLang['id_lang']]['name_lang']}</option>
                {/if}
              {/foreach}
            </select>

          </div><!-- media-body -->
          <div class="media-footer">
              <div>
                <button id="button-sound" onclick="savegamelang({$rsGame['id_game']}, 'sound');" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

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
                {foreach $rsAllLangs as $AllLang name = AllLang}
                  {if $AllLang['id_lang'] != $rsSubtitNames[$AllLang['id_lang']]['id_lang']}
                    <option value="{$AllLang['id_lang']}">{$AllLang['name_lang']}</option>
                  {else}
                    <option selected value="{$rsSubtitNames[$AllLang['id_lang']]['id_lang']}">{$rsSubtitNames[$AllLang['id_lang']]['name_lang']}</option>
                  {/if}
                {/foreach}
            </select>

          </div><!-- media-body -->
           <div class="media-footer col-lg-4">
              <div>
                <button id="button-subtit" onclick="savegamelang({$rsGame['id_game']}, 'subtit');" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

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
                    <input id="selected-video" class="form-control form-control-dark" name="game-video" placeholder="Видео трейлер" value='{$rsGameTrailer["id_on_youtube"]}' type="text">
                    <div>
                    {$rsGameTrailer["url_video"]}
                  </div>
                  </div>
                  
                  <div class="col-lg-4 col-6 col-sm-4 col-md-3"><button id="button-video" onclick="savevideo({$rsGame['id_game']}, '{$rsGame['name_game']}');" class="btn btn-outline-primary btn-block"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button></div>
                  <div class="mg-t-20">
                  <!--{$rsGame['video_game']}-->
                  </div>
                </div><!-- row -->



              </div><!-- card -->
              <div class="card pd-20 pd-xs-30 bd-gray-400 mg-t-30">
                <h6 class="tx-white tx-uppercase tx-14 mg-b-30">Все изображения</h6>

                <div class="row row-xs">
                  {foreach $namePhoto as $picture name = pic}
                  {if $picture != 'main.jpg' && $picture != 'slider.jpg'}
                  <div class="col-lg-6" id="{$smarty.foreach.pic.iteration}">
              <div class="wd-sm-300">
                <figure class="overlay">
                  <img src="{$teplateImgPath}games/{$rsGame['id_game']}/{$picture}" class="img-fluid" alt="">
                  <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                    <div class="img-option img-option-sm">
                      <a href="javascript: deleteimg({$rsGame['id_game']}, '{$picture}', {$smarty.foreach.pic.iteration});" class="img-option-link"><div><i class="fas fa-trash-alt"></i></div></a>
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
              <form action="/function/uploadpictures/" method="POST" enctype="multipart/form-data">
                <input id="game-id" type="text" name="game-id" value="{$rsGame['id_game']}" readonly="" hidden="">
              <div class="card pd-20 pd-xs-30 bd-gray-400 mg-t-30">
                <h6 class="tx-white tx-uppercase tx-14 mg-b-30">Настройки</h6>
                <div class="row row-xs mg-b-15">
                  <div class="col"><img src="{$teplateImgPath}games/{$rsGame['id_game']}/main.jpg" class="img-fluid" alt=""></div>

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
                  <div class="col"><img src="{$teplateImgPath}games/{$rsGame['id_game']}/mainv2.jpg" class="img-fluid" alt=""></div>

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
                  <div class="col"><img src="{$teplateImgPath}games/{$rsGame['id_game']}/slider.jpg" class="img-fluid" alt=""></div>

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
                {if $rsGame['parent_game'] == 0}<div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Главное описание</h6>
                      </div>
                    </div><!-- d-flex -->
                    <textarea id="selected-main-desc" rows="3" class="form-control form-control-dark" name="game-main-desc" placeholder="Главное описание игры">{$rsGame['description_game']}</textarea>

                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-main" onclick="savemaindesc({$rsGame['id_game']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->{/if}
                <div class="media pd-20 pd-xs-30">

                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Второстепенное описание</h6>
                      </div>
                    </div><!-- d-flex -->
                    <div id="summernote">{$rsGame['desc_game']}</div>

                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-second" onclick="saveseconddesc({$rsGame['id_game']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->

                {if $rsGame['parent_game'] == 0}<div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Разработчик</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input id="selected-developer" class="form-control form-control-dark" placeholder="Разработчик" value="{$rsGame['Developer']}" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-developer" onclick="savedeveloper({$rsGame['id_game']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
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
                    <input id="selected-publisher" class="form-control form-control-dark" placeholder="Издатель" value="{$rsGame['Publisher']}" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-publisher" onclick="savepublisher({$rsGame['id_game']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
                      </div>
                    </div><!-- d-flex -->
                </div><!-- media -->{/if}

                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Возрастной рейтинг</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input id="selected-pegi" class="form-control form-control-dark" placeholder="Возрастной рейтинг" value="{$rsGame['pegi_rating']}" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-pegi" onclick="savepegi({$rsGame['id_game']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>
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
                  <input type="text" name="id-game" readonly="" hidden="" value="{$rsGame['id_game']}">
                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Операционная система</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input class="form-control form-control-dark" name="game-os" placeholder="Операционная система" value="{$rsMinRequire['OS']}" type="text">
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
                    <input class="form-control form-control-dark" name="game-cpu" placeholder="Процессор" value="{$rsMinRequire['Processor']}" type="text">
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
                    <input class="form-control form-control-dark" name="game-ozu" placeholder="Оперативная память" value="{$rsMinRequire['OZU']}" type="text">
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
                    <input class="form-control form-control-dark" name="game-gpu" placeholder="Видеокарта" value="{$rsMinRequire['GPU']}" type="text">
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
                    <input class="form-control form-control-dark" name="game-directx" placeholder="DirectX" value="{$rsMinRequire['DirectX']}" type="text">
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
                    <input class="form-control form-control-dark" name="game-memory" placeholder="Свободная памятьа" value="{$rsMinRequire['Memory']}" type="text">
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
                  <input type="text" name="id-game" readonly="" hidden="" value="{$rsGame['id_game']}">
                <div class="media pd-20 pd-xs-30">
                  <div class="media-body col-lg-8 mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Операционная система</h6>
                      </div>
                    </div><!-- d-flex -->
                    <input class="form-control form-control-dark" name="game-os" placeholder="Операционная система" value="{$rsRecRequire['OS']}" type="text">
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
                    <input class="form-control form-control-dark" name="game-cpu" placeholder="Процессор" value="{$rsRecRequire['Processor']}" type="text">
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
                    <input class="form-control form-control-dark" name="game-ozu" placeholder="Оперативная память" value="{$rsRecRequire['OZU']}" type="text">
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
                    <input class="form-control form-control-dark" name="game-gpu" placeholder="Видеокарта" value="{$rsRecRequire['GPU']}" type="text">
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
                    <input class="form-control form-control-dark" name="game-directx" placeholder="DirectX" value="{$rsRecRequire['DirectX']}" type="text">
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
                    <input class="form-control form-control-dark" name="game-memory" placeholder="Свободная памятьа" value="{$rsRecRequire['Memory']}" type="text">
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
                    <input id="selected-keys" class="form-control form-control-dark" name="game-keys" placeholder="Количество ключей" value="{$keysCnt}" type="text">
                  </div><!-- media-body -->
                  <div class="media-footer col-lg-4">
                      <div>
                        <button id="button-keys" onclick="savecntkeys({$rsGame['id_game']});" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

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
                    {foreach $keys as $key name = key}
                      <input class="form-control form-control-dark" name="key_{$smarty.foreach.key.iteration}" placeholder="Ключ" value="{$key['key_number']}" type="text">
                    {/foreach}
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
                    {foreach $gameContent as $dlc name = dlc}
                      <a class="form-control form-control-dark" href="/editgame/{$dlc['id_game']}/">{$dlc['name_game']}</a><br>
                    {/foreach}
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
{if $rsGame['parent_game'] == 0}<div class="media pd-20 pd-xs-30">

  <div class="media-body col-lg-8 mg-l-20">
    <div class="d-flex justify-content-between mg-b-10">
      <div>
        <h6 class="mg-b-2 tx-white tx-14">Сайт игры</h6>
      </div>
    </div><!-- d-flex -->
    <input class="form-control form-control-dark" name="game-link-site" placeholder="Сайт" value='{$rsLinks['site_game']}' type="text">
  </div><!-- media-body -->
  <div class="media-footer col-lg-4">
      <div>
        <button id="button-site" onclick="savelinks({$rsGame['id_game']}, 'site');" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

      </div>
    </div><!-- d-flex -->
</div><!-- media -->{/if}
<div class="media pd-20 pd-xs-30">

  <div class="media-body col-lg-8 mg-l-20">
    <div class="d-flex justify-content-between mg-b-10">
      <div>
        <h6 class="mg-b-2 tx-white tx-14">Покупка в стим</h6>
      </div>
    </div><!-- d-flex -->
    <input class="form-control form-control-dark" name="game-link-link" placeholder="Steam" value='{$rsLinks['link_game']}' type="text">
  </div><!-- media-body -->
  <div class="media-footer col-lg-4">
      <div>
        <button id="button-link" onclick="savelinks({$rsGame['id_game']}, 'link');" class="btn btn-outline-primary btn-block mg-t-30"><i class="fa fa-envelope mg-r-10"></i> Сохранить</button>

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
