 <div class="nk-main">
        
            <div class="nk-gap-2"></div>
        
                <div class="container-fluid">
                    <div class="row">
                                <div class="col-lg-2 hidden-phone">
            <!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
            -->
            <aside class="nk-sidebar nk-sidebar-left custom-sidebar">               

<div class="nk-widget nk-widget-highlighted custom-categories-block">
    <div class="nk-widget-content">
        <ul class="nk-widget-categories custom-categories">
            <li><span><span class="text-main-1 custom-cat-text">РЕКОМЕНДУЕТСЯ</span></span></li>
            
            {foreach $rsCatRec as $category}
            <li><a href="#" class="gutter_item"><span class="icon {$category['class_rec_cat']}"></span>{$category['name_rec_cat']}</a></li>
            {/foreach}
        </ul>
    </div>
</div>

<div class="nk-widget nk-widget-highlighted custom-categories-block">
    <div class="nk-widget-content">
        <ul class="nk-widget-categories custom-categories">
            <li><span><span class="text-main-1 custom-cat-text">КАТЕГОРИИ</span></span></li>
            {foreach $rsCatAlt as $category}
            <li><a href="#" class="gutter_item"><span class="icon {$category['class_alt_cat']}"></span>{$category['name_alt_cat']}</a></li>
            {/foreach}
        </ul>
    </div>
</div>

<div class="nk-widget nk-widget-highlighted custom-categories-block">
    <div class="nk-widget-content">
        <ul class="nk-widget-categories custom-categories">
            <li><span><span class="text-main-1 custom-cat-text">ПОИСК ПО ЖАНРУ</span></span></li>
            <li><a href="javascript: searchwthcat('all', 'Все');">Все</a></li>
            {foreach $rsCategories as $category}
            <li><a href="/catalog/search/cat/?searchname={$category['id_category']}">{$category['name_category']}</a></li>
            {/foreach}
        </ul>
    </div>
</div>
            </aside>
            <!-- END: Sidebar -->
        </div>
                        <div class="col-lg-8">
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