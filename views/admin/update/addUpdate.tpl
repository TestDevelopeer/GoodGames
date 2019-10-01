<input type="text" readonly="" hidden="" id="page" value="art-updates">
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="/admin/">Главная</a>
          <a class="breadcrumb-item" href="javascript:;">Статьи</a>
          <span class="breadcrumb-item active">Добавить статью</span>
        </nav>
      </div><!-- br-pageheader -->
      

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          
          <div id="new-art-box">
          <div class="row">
            <div class="col-lg-3">
              <select class="form-control select2" name="categories[]" data-placeholder="Choose Browser" id="select2-category">
                {foreach $rsAllCats as $category}
                <option value="{$category['id_game']}">{$category['name_game']}</option>
                {/foreach}
                
              </select>
            </div><!-- col -->
            <div class="col-lg-3">
              <input class="form-control form-control-dark" id="art-name" placeholder="Название статьи" type="text">
            </div><!-- col -->
            <div class="col-lg-3">
              <input class="form-control form-control-dark" id="art-author" placeholder="Автор" value="{$arAdmin['name']}" type="text">
            </div><!-- col -->
            <div class="col-lg-3">
            </div><!-- col -->
          </div><!-- row -->
          <div class="row mg-t-20">
            <div class="col-lg-3">
            </div><!-- col -->
            <div class="col-lg-6">
              <textarea rows="3" class="form-control form-control-dark" id="art-desc" placeholder="Превью статьи"></textarea>
            </div><!-- col -->
            <div class="col-lg-3">
            </div><!-- col -->
            <div class="col-lg-2">
            </div><!-- col -->
            <div class="col-lg-8 mg-t-20">
              <div id="summernote"></div>
            </div><!-- col -->
            <div class="col-lg-2">
            </div><!-- col -->
            
              <div class="col-lg-3">
            </div><!-- col -->
            <div class="col-lg-6 mg-t-20">
                <button onclick="addnewupdate();" type="submit" class="btn btn-danger btn-block mg-b-10">Добавить</button>
            </div><!-- col -->
              <div class="col-lg-3">
            </div><!-- col -->
           </div>
         </div>
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->