    <!-- START: Latest News -->
    <div class="nk-gap-1"></div>  
    <h2 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Последние</span> Новости</span></h2>

    <div class="nk-news-box">
        <div class="nk-news-box-list">
            <div class="nano">
                <div class="nano-content">
                    
                    {foreach $rsLastSixArt as $art name = art}
                    <div class="nk-news-box-item nk-news-box-item {if $smarty.foreach.art.first}nk-news-box-item-active{/if}">
                        <div class="nk-news-box-item-img">
                            <img src="{$teplateImgPath}articles/{$art['id_art']}/main.jpg" alt="{$art['name_art']}">
                        </div>
                        <img src="{$teplateImgPath}articles/{$art['id_art']}/main.jpg" alt="{$art['name_art']}" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title last-bread-child-phone">{$art['name_art']}</h3>
                        
                        <div class="nk-news-box-item-text">
                            <p>{$art['prewiew_text']}</p>
                        </div>
                        <a href="/article/{$art['id_art']}/" class="nk-news-box-item-url">Перейти</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> {$art['date_art']}</div>
                    </div>
                    {/foreach}
                </div>
            </div>
        </div>
        <div class="nk-news-box-each-info">
            <div class="nano">
                <div class="nano-content">
                    <!-- There will be inserted info about selected news-->
                    <div class="nk-news-box-item-image">
                        <img src="{$teplateImgPath}articles/{$rsLastSixArt[0]['id_art']}/main.jpg" alt="{$rsLastSixArt[0]['name_art']}">
                    </div>
                    <h3 class="nk-news-box-item-title">{$rsLastSixArt[0]['name_art']}</h3>
                    <div class="nk-news-box-item-text">
                        <p>{$rsLastSixArt[0]['prewiew_text']}</p>
                    </div>
                    <a href="/article/{$art['id_art']}/" class="nk-news-box-item-more">Перейти</a>
                    <div class="nk-news-box-item-date">
                        <span class="fa fa-calendar"></span> {$rsLastSixArt[0]['date_art']}
                    </div>
                </div>
            </div>
        </div>
    </div>