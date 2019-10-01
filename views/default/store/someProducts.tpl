    <!-- START: Some Products -->
    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-md-6 col-lg-4 col-6 some-big-games">
            <div class="nk-gallery-item-box">
                <a href="/game/{$rsRandomPC['id_game']}/" class="nk-gallery-item">
                    <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                    <img src="{$teplateImgPath}games/{$rsRandomPC['id_game']}/main.jpg" alt="{$rsRandomPC['name_game']}">
                </a>
                <div class="nk-gallery-item-label">
                    <h4 class="mb-0">{$rsRandomPC['name_game']}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 col-6 order-lg-3 some-big-games">
            <div class="nk-gallery-item-box">
                <a href="/game/{$rsRandomXBOX['id_game']}/" class="nk-gallery-item">
                    <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                    <img src="{$teplateImgPath}games/{$rsRandomXBOX['id_game']}/main.jpg" alt="{$rsRandomXBOX['name_game']}">
                </a>
                <div class="nk-gallery-item-label">
                    <h4 class="mb-0">{$rsRandomXBOX['name_game']}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 col-12">
            <div class="row vertical-gap some-small-games">
                {foreach $rsRandomPS4 as $ps4}
                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box">
                        <a href="/game/{$ps4['id_game']}/" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="{$teplateImgPath}games/{$ps4['id_game']}/main.jpg" alt="{$ps4['name_game']}">
                        </a>
                    </div>
                </div>
                {/foreach}
            </div>
        </div>
    </div>
    <!-- END: Some Products -->