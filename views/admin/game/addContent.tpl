<input type="text" readonly="" hidden="" id="page" value="game-page">
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="/admin/">Главная</a>
          <a class="breadcrumb-item" href="javascript:;">Игры</a>
          <span class="breadcrumb-item active">Добавить доп. контент</span>
        </nav>
      </div><!-- br-pageheader -->
      

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          
          <form action="/function/addnewcontent/" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-3">
              <input class="form-control form-control-dark" name="game-name" placeholder="Название" type="text">
            </div><!-- col -->
            <div class="col-lg-3 mg-t-20 mg-lg-t-0" =>
              <select class="form-control select2" name="games" data-placeholder="Choose Browser" id="select2-game">
                {foreach $rsAllGames as $game}
                <option value="{$game['id_game']}">{$game['name_game']}</option>
                {/foreach}
                
              </select>
            </div><!-- col-3 -->
          </div><!-- row -->
           
          <div class="row mg-t-20">
           <div class="col-lg-3 mg-t-15 mg-lg-t-0">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="mainPicture" id="customFile1">
                <label class="custom-file-label custom-file-label-primary" for="customFile2">Заглавное изображение</label>
              </div>
           </div>
           <div class="col-lg-3 mg-t-15 mg-lg-t-0">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="mainPicturev2" id="customFilev2">
                <label class="custom-file-label custom-file-label-primary" for="customFilev2">Заглавное изображение v2</label>
              </div>
           </div>
           <div class="col-lg-3 mg-t-15 mg-lg-t-0">
              <input type="file" name="file-1[]" id="file-1" class="inputfile" data-multiple-caption="{ count } файлов выбрано" multiple>
              <label for="file-1" class="tx-white bg-info" style="width: 100%;">
                <i class="icon ion-ios-upload-outline tx-24"></i>
                <span>Изображения игры</span>
              </label>
            
           </div>
           <div class="col-lg-3 mg-t-15 mg-lg-t-0">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="sliderPicture" id="customFile2">
                <label class="custom-file-label custom-file-label-primary" for="customFile2">Изображение для слайдера</label>
              </div>
           </div>
           <div class="row mg-t-20 col-lg-12">
              
                <button type="submit" class="btn btn-danger btn-block mg-b-10">Добавить</button>
              
           </div> 
         </div>
           </form>
         </div>
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->