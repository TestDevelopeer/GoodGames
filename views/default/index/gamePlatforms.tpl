    <!-- START: Categories -->
    <div class="nk-gap-2"></div>
    <div class="row vertical-gap hidden-phone">
        {foreach $rsGamePlatforms as $platform}
        <div class="col-lg-4 col-md-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="{$teplateImgPath}platforms/{$platform['name_platform']}/{$platform['name_platform']}.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="/catalog/search/platform/?searchname={$platform['id_platform']}">{$platform['name_platform']}</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="/catalog/search/platform/?searchname={$platform['id_platform']}">Перейти</a></h4>
                </div>
            </div>
        </div>
        {/foreach}
    </div>
    <!-- END: Categories -->