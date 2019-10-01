            <!-- START: Latest Pictures -->
            <div class="nk-gap"></div>
            <h2 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Последние</span> изображения</span></h2>
            <div class="nk-gap"></div>
            <div class="nk-popup-gallery">
                <div class="row vertical-gap">
                    {foreach $rsLastPictures as $picture}
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="nk-gallery-item-box">
                            <a href="{$picture['path_photo']}{$picture['name_photo']}" class="nk-gallery-item" data-size="1016x572">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="{$picture['path_photo']}{$picture['name_photo']}" alt="">
                            </a>
                            
                        </div>
                    </div>
                    {/foreach}
                </div>
            </div>
            <!-- END: Latest Pictures -->