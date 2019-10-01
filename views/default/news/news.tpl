<div class="container" {if $actionName == 'category'} id="top-articles" {/if}>
    <div class="row vertical-gap">

<div class="col-lg-4 visible-phone">
            <aside class="nk-sidebar nk-sidebar-left nk-sidebar-sticky">
                <div class="nk-widget">
    <div class="nk-widget-content">
        <div class="nk-form nk-form-style-1">
            <div class="input-group">
                <input type="text" class="form-control" id="search-phone" placeholder="Поиск...">
                <button class="nk-btn nk-btn-color-main-1" id="search-phone-btn" data-input="search-phone"><span class="ion-search"></span></button>
            </div>
        </div>
    </div>
</div>

<div class="nk-widget nk-widget-highlighted">

    <div class="contenthub_popular_tags">
        <h2>Категории новостей</h2>
        <a class="btnv6_blue_hoverfade btn_small_tall" href="/news/" name="category">
                <span>Все</span>
        </a>
        {foreach $rsArtCat as $cat}
            <a class="btnv6_blue_hoverfade btn_small_tall" href="/news/category/?name={$cat['id_art_cat']}" name="category">
                    <span>{$cat['name_art_cat']}</span>
            </a> 
        {/foreach}
        <div style="clear: both; margin-bottom: 20px;"></div>
    </div>
</div>

            </aside>
            <!-- END: Sidebar -->
        </div>    





        <div class="col-lg-8">
            {if $actionName != 'category'}
            <!-- START: Tabs  -->
            <div class="nk-tabs" id="clear-search">
                <!--
                    Additional Classes:
                        .nav-tabs-fill
                -->
                <ul class="nav nav-tabs nav-tabs-fill" role="tablist">
                    {foreach $rsArtCat as $cat}
                    {if $cat['id_art_cat'] != 5}
                    <li class="nav-item">
                        <a class="nav-link article-nav-link {if $cat['id_art_cat'] == 1}active show{/if}" href="#{$cat['id_art_cat']}" role="tab" data-toggle="tab">{$cat['name_art_cat']}</a>
                    </li>
                    {/if}
                    {/foreach}
                </ul>
                
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active show" id="1">
                        <div class="nk-gap"></div>
                        <!-- START: Action Tab -->
                        
                        {foreach $ForeachArt[0] as $art name = art}
                        
                        {if $smarty.foreach.art.first}
                        <div class="nk-blog-post nk-blog-post-border-bottom">
                            <a href="/article/{$art['id_art']}/" class="nk-post-img">
                                <img src="{$teplateImgPath}articles/{$art['id_art']}/main.jpg" alt="{$art['name_art']}">
                                
                                <span class="nk-post-categories">
                                    <span class="bg-main-1">{$art['cat_name']}</span>
                                </span>
                                
                            </a>
                            <div class="nk-gap-1"></div>
                            <h2 class="nk-post-title h4"><a href="/article/{$art['id_art']}/">{$art['name_art']}</a></h2>
                            <div class="nk-post-date mt-10 mb-10">
                                <span class="fa fa-calendar"></span> {$art['date_art']}
                                <span class="fa fa-comments"></span> <a href="#">{$art['views_art']} просмотров</a>
                            </div>
                            <div class="nk-post-text">
                                <p>{$art['prewiew_text']}</p>
                            </div>
                        </div>
                        {/if}
                        
                        {/foreach}

                        {foreach $ForeachArt[0] as $art name = art}
                        {if !$smarty.foreach.art.first}
                        <div class="nk-blog-post nk-blog-post-border-bottom" {if $smarty.foreach.art.last} id="top-articles" {/if}>
                            <div class="row vertical-gap">
                                <div class="col-lg-3 col-md-5">
                                    <a href="/article/{$art['id_art']}/" class="nk-post-img">
                                        <img src="{$teplateImgPath}articles/{$art['id_art']}/main.jpg" alt="{$art['name_art']}">
                                        
                                        <span class="nk-post-categories">
                                            <span class="bg-main-1">{$art['cat_name']}</span>
                                        </span>
                                        
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-7">
                                    <h2 class="nk-post-title h4"><a href="/article/{$art['id_art']}/">{$art['name_art']}</a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> {$art['date_art']}
                                        <span class="fa fa-comments"></span> <a href="#">{$art['views_art']} просмотров</a>
                                    </div>
                                    <div class="nk-post-text">
                                        <p>{$art['prewiew_text']}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {/if}
                        {/foreach}
                        <!-- END: Action Tab -->
                        <div class="nk-gap"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="2">
                        <div class="nk-gap"></div>
                        <!-- START: MMO Tab -->
                        
                        {foreach $ForeachArt[1] as $art name = art}
                        {if $smarty.foreach.art.first}
                        <div class="nk-blog-post nk-blog-post-border-bottom">
                            <a href="/article/{$art['id_art']}/" class="nk-post-img">
                                <img src="{$teplateImgPath}articles/{$art['id_art']}/main.jpg" alt="{$art['name_art']}">
                                
                                <span class="nk-post-categories">
                                    <span class="bg-main-4">{$art['cat_name']}</span>
                                </span>
                                
                            </a>
                            <div class="nk-gap-1"></div>
                            <h2 class="nk-post-title h4"><a href="/article/{$art['id_art']}/">{$art['name_art']}</a></h2>
                            <div class="nk-post-date mt-10 mb-10">
                                <span class="fa fa-calendar"></span> {$art['date_art']}
                                <span class="fa fa-comments"></span> <a href="#">{$art['views_art']} просмотров</a>
                            </div>
                            <div class="nk-post-text">
                                <p>{$art['prewiew_text']}</p>
                            </div>
                        </div>
                        {/if}
                        {/foreach}

                        {foreach $ForeachArt[1] as $art name = art}
                        {if !$smarty.foreach.art.first}
                        <div class="nk-blog-post nk-blog-post-border-bottom" {if $smarty.foreach.art.last} id="top-articles" {/if}>
                            <div class="row vertical-gap">
                                <div class="col-lg-3 col-md-5">
                                    <a href="/article/{$art['id_art']}/" class="nk-post-img">
                                        <img src="{$teplateImgPath}articles/{$art['id_art']}/main.jpg" alt="{$art['name_art']}">
                                        
                                        <span class="nk-post-categories">
                                            <span class="bg-main-4">{$art['cat_name']}</span>
                                        </span>
                                        
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-7">
                                    <h2 class="nk-post-title h4"><a href="/article/{$art['id_art']}/">{$art['name_art']}</a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> {$art['date_art']}
                                        <span class="fa fa-comments"></span> <a href="#">{$art['views_art']} просмотров</a>
                                    </div>
                                    <div class="nk-post-text">
                                        <p>{$art['prewiew_text']}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {/if}
                        {/foreach}


                        <!-- END: MMO Tab -->
                        <div class="nk-gap"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="3">
                        <div class="nk-gap"></div>
                        <!-- START: Strategy Tab -->
                        
                        {foreach $ForeachArt[2] as $art name = art}
                        {if $smarty.foreach.art.first}
                        <div class="nk-blog-post nk-blog-post-border-bottom">
                            <a href="/article/{$art['id_art']}/" class="nk-post-img">
                                <img src="{$teplateImgPath}articles/{$art['id_art']}/main.jpg" alt="{$art['name_art']}">
                                
                                <span class="nk-post-categories">
                                    <span class="bg-main-3">{$art['cat_name']}</span>
                                </span>
                                
                            </a>
                            <div class="nk-gap-1"></div>
                            <h2 class="nk-post-title h4"><a href="/article/{$art['id_art']}/">{$art['name_art']}</a></h2>
                            <div class="nk-post-date mt-10 mb-10">
                                <span class="fa fa-calendar"></span> {$art['date_art']}
                                <span class="fa fa-comments"></span> <a href="#">{$art['views_art']} просмотров</a>
                            </div>
                            <div class="nk-post-text">
                                <p>{$art['prewiew_text']}</p>
                            </div>
                        </div>
                        {/if}
                        {/foreach}


                        {foreach $ForeachArt[2] as $art name = art}
                        {if !$smarty.foreach.art.first}
                        <div class="nk-blog-post nk-blog-post-border-bottom" {if $smarty.foreach.art.last} id="top-articles" {/if}f>
                            <div class="row vertical-gap">
                                <div class="col-lg-3 col-md-5">
                                    <a href="/article/{$art['id_art']}/" class="nk-post-img">
                                        <img src="{$teplateImgPath}articles/{$art['id_art']}/main.jpg" alt="{$art['name_art']}">
                                        
                                        <span class="nk-post-categories">
                                            <span class="bg-main-3">{$art['cat_name']}</span>
                                        </span>
                                        
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-7">
                                    <h2 class="nk-post-title h4"><a href="/article/{$art['id_art']}/">{$art['name_art']}</a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> {$art['date_art']}
                                        <span class="fa fa-comments"></span> <a href="#">{$art['views_art']} просмотров</a>
                                    </div>
                                    <div class="nk-post-text">
                                        <p>{$art['prewiew_text']}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {/if}
                        {/foreach}



                        <!-- END: Strategy Tab -->
                        <div class="nk-gap"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="4">
                        <div class="nk-gap"></div>
                        <!-- START: Adventure Tab -->
                        

                        {foreach $ForeachArt[3] as $art name = art}
                        {if $smarty.foreach.art.first}
                        <div class="nk-blog-post nk-blog-post-border-bottom">
                            <a href="/article/{$art['id_art']}/" class="nk-post-img">
                                <img src="{$teplateImgPath}articles/{$art['id_art']}/main.jpg" alt="{$art['name_art']}">
                                
                                <span class="nk-post-categories">
                                    <span class="bg-main-2">{$art['cat_name']}</span>
                                </span>
                                
                            </a>
                            <div class="nk-gap-1"></div>
                            <h2 class="nk-post-title h4"><a href="/article/{$art['id_art']}/">{$art['name_art']}</a></h2>
                            <div class="nk-post-date mt-10 mb-10">
                                <span class="fa fa-calendar"></span> {$art['date_art']}
                                <span class="fa fa-comments"></span> <a href="#">{$art['views_art']} просмотров</a>
                            </div>
                            <div class="nk-post-text">
                                <p>{$art['prewiew_text']}</p>
                            </div>
                        </div>
                        {/if}
                        {/foreach}

                        {foreach $ForeachArt[3] as $art name = art}
                        {if !$smarty.foreach.art.first}
                        <div class="nk-blog-post nk-blog-post-border-bottom" {if $smarty.foreach.art.last} id="top-articles" {/if}>
                            <div class="row vertical-gap">
                                <div class="col-lg-3 col-md-5">
                                    <a href="/article/{$art['id_art']}/" class="nk-post-img">
                                        <img src="{$teplateImgPath}articles/{$art['id_art']}/main.jpg" alt="{$art['name_art']}">
                                        
                                        <span class="nk-post-categories">
                                            <span class="bg-main-2">{$art['cat_name']}</span>
                                        </span>
                                        
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-7">
                                    <h2 class="nk-post-title h4"><a href="/article/{$art['id_art']}/">{$art['name_art']}</a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> {$art['date_art']}
                                        <span class="fa fa-comments"></span> <a href="#">{$art['views_art']} просмотров</a>
                                    </div>
                                    <div class="nk-post-text">
                                        <p>{$art['prewiew_text']}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {/if}
                        {/foreach}



                        <!-- END: Adventure Tab -->
                        <div class="nk-gap"></div>
                    </div>

                </div>

            </div>
            <!-- END: Tabs -->
            {/if}
            <div class="nk-gap"></div>
            <!-- START: Posts Grid -->
            <div class="nk-blog-grid" id="show-search">
                <div class="row" id="news-article-box">
                    {foreach $rsArticles as $art}
                    <div class="col-md-6">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="/article/{$art['id_art']}/" class="nk-post-img">
                                {if $art['art_game_id'] == 0}
                                <img src="{$teplateImgPath}articles/{$art['id_art']}/main.jpg" alt="{$art['name_art']}">
                                {else}
                                <img src="{$teplateImgPath}games/{$art['art_game_id']}/mainv2.jpg" alt="{$art['name_art']}">
                                {/if}
                                <span class="nk-post-comments-count">{$art['views_art']}</span>
                                {if $actionName != 'category'}
                                <span class="nk-post-categories">
                                    
                                    <span class="bg-main-{$art['cat_art']}">{$categoriesid[$art['id_art']]['name_art_cat']}</span>
                                    
                                </span>
                                {else}
                                <span class="nk-post-categories">
                                    <span class="bg-main-{$rsCurCategory['id_art_cat']}">{$rsCurCategory['name_art_cat']}</span>
                                </span>
                                {/if}
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="/article/{$art['id_art']}/">{$art['name_art']}</a></h2>
                            <div class="nk-post-text">
                                <p>{$art['prewiew_art']}</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="/article/{$art['id_art']}/" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1 btn-article">Перейти</a>
                            <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> {$art['date_art']}</div>
                        </div>
                        <!-- END: Post -->
                    </div>
                    {/foreach}
                </div>
                {$pagination}
            </div>
            <!-- END: Posts Grid -->

        </div>