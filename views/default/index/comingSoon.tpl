<div class="nk-gap-3"></div>
<h3 class="nk-decorated-h-2 custom-h2 hidden-phone"><span><span class="text-main-1">Скоро</span> в продаже</span></h3>
    <!-- START: Posts FullWidth -->
    <div class="nk-blog-fullwidth hidden-phone">
        {foreach $comingSoon as $game name = game}
        {if $smarty.foreach.game.iteration == 1}
        <!-- START: Post -->
        <div class="nk-blog-post">
            <a href="{$game['url_com_game']}" class="nk-post-img">
                <img src="{$teplateWebPath}assets/images/newgame/{$game['id_com_game']}/main.jpg" alt="Smell magic in the air. Or maybe barbecue">
                
            </a>
            <div class="nk-gap-1"></div>
            <div class="nk-popup-gallery">
                <div class="row vertical-gap">
                    {section name='game' start=1 loop=5 step=1}
                    <div class="col-lg-3">
                        <div class="nk-gallery-item-box">
                            <a href="{$teplateWebPath}assets/images/newgame/{$game['id_com_game']}/th{$smarty.section.game.index}.jpg" class="nk-gallery-item" data-size="1016x572">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="{$teplateWebPath}assets/images/newgame/{$game['id_com_game']}/th{$smarty.section.game.index}.jpg" alt="">
                            </a>
                            
                        </div>
                    </div>
                    {/section}
                </div>
            </div>
            <div class="nk-gap-1"></div>
            <div class="row vertical-gap">
                <div class="col-md-8 col-lg-9">
                    <h2 class="nk-post-title h4"><a href="{$game['url_com_game']}">{$game['name_com_game']}</a></h2>
                    <div class="nk-gap"></div>
                    <div class="nk-post-text">
                        <p>{$game['desc_com_game']}</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="nk-post-by">
                        
                        <br> {$game['date_com_game']}
                        <br> {$game['platforms_com_game']}
                        <br> <a href="{$game['url_com_game']}" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Оформить предзаказ</a>
                    </div>
                    <div class="nk-gap"></div>
                    
                    <div class="nk-gap-3"></div>
                </div>
            
            </div>
        </div>
        <!-- END: Post -->
        {/if}
        {/foreach}
</div>