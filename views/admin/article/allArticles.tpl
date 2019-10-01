 <input type="text" readonly="" hidden="" id="page" value="art-page"> 
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
            
              <img class="img-fluid rounded-top" src="{$teplateImgPath}articles/{$art['id_art']}/main.jpg" alt="Image">
            
            <div class="card-body pd-25 rounded-bottom">
              <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="/admin/?controller=editarticle&id={$art['id_art']}" class="tx-white hover-info text-art">{$art['name_art']}</a></h5>
              <div class="tx-14 mg-b-25 text-art">{$art['prewiew_text']}</div>
              <p class="tx-13 mg-b-0">
                <a href="javascript:;" class="tx-info mg-l-5">23 Comments</a>
              </p>
            </div><!-- card-body -->
          </div><!-- card -->
          {/foreach}
        </div><!-- card-deck-->
      </div><!-- br-pagebody -->