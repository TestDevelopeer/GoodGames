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
                {foreach $rsAllCategories as $category}
                <option id="select_{$category['id_category']}" value="{$category['id_category']}">{$category['name_category']}</option>
                {/foreach}
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
          {foreach $rsAllGames as $game}
          <div class="col-md-6 mg-t-20">
            <div class="card pd-0">
              <div class="row no-gutters">
                <div class="col-md-12 col-lg-4 pd-20-force">
                  <img style="width: 500px;" src="{$teplateImgPath}games/{$game['id_game']}/mainv2.jpg" class="img-fluid wd-md-100p wd-lg-auto" alt="{$game['name_game']}">
                </div><!-- col-4 -->
                <div class="col-md-6 col-lg-5 pd-20-force">
                  <h5 class="tx-normal mg-y-5"><a href="/admin/?controller=editgame&id={$game['id_game']}" class="tx-white">{$game['name_game']}</a></h5>
                </div><!-- col-5 -->
                <div class="col-md-6 col-lg-3 pd-20-force d-flex align-items-start flex-column">
                  <a style="margin-top: 0;" href="/admin/?controller=editgame&id={$game['id_game']}" class="mg-t-20 btn btn-danger btn-block tx-size-xs">Перейти</a>
                </div><!-- col-3-->

              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-6 -->
          {/foreach}

        </div>
        <div class="row row-sm mg-t-20" id="search-show">
        </div>
      </div><!-- br-pagebody -->
