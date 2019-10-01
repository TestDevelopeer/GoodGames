<div class="nk-gap-3"></div>
<div class="container-fluid">
    <div class="row">

        <div class="col-lg-12">
    <!-- START: Categories -->
    <div class="row vertical-gap hidden-phone">
        {foreach $rsGamePlatforms as $platform}
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="{$teplateImgPath}/platforms/{$platform['name_platform']}/{$platform['name_platform']}.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="javascript:;">{$platform['name_platform']}</a></h3>
                </div>
            </div>
        </div>
        {/foreach}
    </div>
    <!-- END: Categories -->