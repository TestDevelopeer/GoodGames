 <input type="text" readonly="" hidden="" id="page" value="art-updates"> 
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="/admin/">Главная</a>
          <a class="breadcrumb-item" href="javascript:;">Статьи</a>
          <span class="breadcrumb-item active">Все</span>
        </nav>
      </div><!-- br-pageheader -->

      <div class="br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350">
        <div class="card-deck card-deck-sm mg-x-0">
          {foreach $rsAllArt as $art}
          <div class="col-lg-3">
            <img class="img-fluid rounded-top" src="{$teplateImgPath}games/{$art['art_game_id']}/mainv2.jpg" alt="Image">
            <div class="card-body pd-25 rounded-bottom">
              <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="/admin/?controller=editarticle&id={$art['id_art']}" class="tx-white hover-info text-art">{$art['name_art']}</a></h5>
              <p class="tx-13 mg-b-0">
                <a href="/game/{$rsGames[$art['art_game_id']]['id_game']}/" class="tx-info mg-l-5">{$rsGames[$art['art_game_id']]['name_game']}</a>
              </p>
            </div><!-- card-body -->
          </div><!-- card -->
          {/foreach}
        </div><!-- card-deck-->
      </div><!-- br-pagebody -->