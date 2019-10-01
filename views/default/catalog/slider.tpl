 <div class="nk-main">
        
            <div class="nk-gap-2"></div>
        
                <div class="container">
    <!-- START: Image Slider -->
    <div class="nk-image-slider" data-autoplay="5000">
        
        {foreach $rsRandomGames as $randgames}
        <div class="nk-image-slider-item">
            <img src="{$teplateImgPath}games/{$randgames['id_game']}/slider.jpg" alt="" class="nk-image-slider-img" data-thumb="{$teplateImgPath}games/{$randgames['id_game']}/slider.jpg">
            
            <div class="nk-image-slider-content">
                
                    <h3 class="h4">{$randgames['name_game']}</h3>
                    <p class="text-white">{$randgames['description_game']}</p>
                    <a href="/game/{$randgames['id_game']}/" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Перейти</a>
                
            </div>
            
        </div>
        {/foreach}
    </div>
    <!-- END: Image Slider -->