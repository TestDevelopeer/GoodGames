    <!-- START: Some Products -->
    <div class="nk-gap-3"></div>
    <h3 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Новые</span> игры</span></h3>
    <div class="slide-container">
    <div class="row vertical-gap" id="items1">
        <div class="col-md-4 col-lg-4 col-6 last-big-games">
            <div class="nk-gallery-item-box {if isset($rsCheckGameCart[$rsLastGames[0]['id_game']])}img-game-in-cat in-cat-{$rsLastGames[0]['id_game']}{/if}">
                <a href="/game/{$rsLastGames[0]['id_game']}/" class="nk-gallery-item">
                    <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                    <img src="{$teplateImgPath}games/{$rsLastGames[0]['id_game']}/main.jpg" alt="{$rsLastGames[0]['name_game']}">
                    {if isset($rsCheckGameCart[$rsLastGames[0]['id_game']])}
                    <div class="game-in-cat flag-{$rsLastGames[0]['id_game']}">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    {/if}
                </a>
                
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-6 order-lg-3 last-big-games">
            <div class="nk-gallery-item-box {if isset($rsCheckGameCart[$rsLastGames[5]['id_game']])}img-game-in-cat in-cat-{$rsLastGames[5]['id_game']}{/if}">
                <a href="/game/{$rsLastGames[5]['id_game']}/" class="nk-gallery-item">
                    <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                    <img src="{$teplateImgPath}games/{$rsLastGames[5]['id_game']}/main.jpg" alt="{$rsLastGames[5]['name_game']}">
                    {if isset($rsCheckGameCart[$rsLastGames[5]['id_game']])}
                    <div class="game-in-cat flag-{$rsLastGames[5]['id_game']}">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    {/if}
                </a>
                
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-12">
            <div class="row vertical-gap last-small-games">
                
                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box {if isset($rsCheckGameCart[$rsLastGames[1]['id_game']])}img-game-in-cat in-cat-{$rsLastGames[1]['id_game']}{/if}">
                        <a href="/game/{$rsLastGames[1]['id_game']}" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="{$teplateImgPath}games/{$rsLastGames[1]['id_game']}/main.jpg" alt="{$rsLastGames[1]['name_game']}">
                            {if isset($rsCheckGameCart[$rsLastGames[1]['id_game']])}
                    <div class="game-in-cat flag-{$rsLastGames[1]['id_game']}">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    {/if}
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box {if isset($rsCheckGameCart[$rsLastGames[2]['id_game']])}img-game-in-cat in-cat-{$rsLastGames[2]['id_game']}{/if}">
                        <a href="/game/{$rsLastGames[2]['id_game']}/" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="{$teplateImgPath}games/{$rsLastGames[2]['id_game']}/main.jpg" alt="{$rsLastGames[2]['name_game']}">
                            {if isset($rsCheckGameCart[$rsLastGames[2]['id_game']])}
                    <div class="game-in-cat flag-{$rsLastGames[2]['id_game']}">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    {/if}
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box {if isset($rsCheckGameCart[$rsLastGames[3]['id_game']])}img-game-in-cat in-cat-{$rsLastGames[3]['id_game']}{/if}">
                        <a href="/game/{$rsLastGames[3]['id_game']}/" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="{$teplateImgPath}games/{$rsLastGames[3]['id_game']}/main.jpg" alt="{$rsLastGames[3]['name_game']}">
                            {if isset($rsCheckGameCart[$rsLastGames[3]['id_game']])}
                    <div class="game-in-cat flag-{$rsLastGames[3]['id_game']}">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    {/if}
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box {if isset($rsCheckGameCart[$rsLastGames[4]['id_game']])}img-game-in-cat in-cat-{$rsLastGames[4]['id_game']}{/if}">
                        <a href="/game/{$rsLastGames[4]['id_game']}/" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="{$teplateImgPath}games/{$rsLastGames[4]['id_game']}/main.jpg" alt="{$rsLastGames[4]['name_game']}">
                            {if isset($rsCheckGameCart[$rsLastGames[4]['id_game']])}
                    <div class="game-in-cat flag-{$rsLastGames[4]['id_game']}">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    {/if}
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
        <div class="row vertical-gap slide-item" id="items2">
        <div class="col-md-4 col-lg-4 col-6 last-big-games">
            <div class="nk-gallery-item-box {if isset($rsCheckGameCart[$rsLastGames[6]['id_game']])}img-game-in-cat in-cat-{$rsLastGames[6]['id_game']}{/if}">
                <a href="/game/{$rsLastGames[6]['id_game']}/" class="nk-gallery-item">
                    <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                    <img src="{$teplateImgPath}games/{$rsLastGames[6]['id_game']}/main.jpg" alt="{$rsLastGames[6]['name_game']}">
                    {if isset($rsCheckGameCart[$rsLastGames[6]['id_game']])}
                    <div class="game-in-cat flag-{$rsLastGames[6]['id_game']}">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    {/if}
                </a>
                
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-6 order-lg-3 last-big-games">
            <div class="nk-gallery-item-box {if isset($rsCheckGameCart[$rsLastGames[11]['id_game']])}img-game-in-cat in-cat-{$rsLastGames[11]['id_game']}{/if}">
                <a href="/game/{$rsLastGames[11]['id_game']}/" class="nk-gallery-item">
                    <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                    <img src="{$teplateImgPath}games/{$rsLastGames[11]['id_game']}/main.jpg" alt="{$rsLastGames[11]['name_game']}">
                    {if isset($rsCheckGameCart[$rsLastGames[11]['id_game']])}
                    <div class="game-in-cat flag-{$rsLastGames[11]['id_game']}">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    {/if}
                </a>
                
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-12">
            <div class="row vertical-gap last-small-games">
                
                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box {if isset($rsCheckGameCart[$rsLastGames[7]['id_game']])}img-game-in-cat in-cat-{$rsLastGames[7]['id_game']}{/if}">
                        <a href="/game/{$rsLastGames[7]['id_game']}/" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="{$teplateImgPath}games/{$rsLastGames[7]['id_game']}/main.jpg" alt="{$rsLastGames[7]['name_game']}">
                            {if isset($rsCheckGameCart[$rsLastGames[7]['id_game']])}
                    <div class="game-in-cat flag-{$rsLastGames[7]['id_game']}">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    {/if}
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box {if isset($rsCheckGameCart[$rsLastGames[8]['id_game']])}img-game-in-cat in-cat-{$rsLastGames[8]['id_game']}{/if}">
                        <a href="/game/{$rsLastGames[8]['id_game']}/" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="{$teplateImgPath}games/{$rsLastGames[8]['id_game']}/main.jpg" alt="{$rsLastGames[8]['name_game']}">
                            {if isset($rsCheckGameCart[$rsLastGames[8]['id_game']])}
                    <div class="game-in-cat flag-{$rsLastGames[8]['id_game']}">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    {/if}
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box {if isset($rsCheckGameCart[$rsLastGames[9]['id_game']])}img-game-in-cat in-cat-{$rsLastGames[9]['id_game']}{/if}">
                        <a href="/game/{$rsLastGames[9]['id_game']}/" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="{$teplateImgPath}games/{$rsLastGames[9]['id_game']}/main.jpg" alt="{$rsLastGames[9]['name_game']}">
                            {if isset($rsCheckGameCart[$rsLastGames[9]['id_game']])}
                    <div class="game-in-cat flag-{$rsLastGames[9]['id_game']}">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    {/if}
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box {if isset($rsCheckGameCart[$rsLastGames[10]['id_game']])}img-game-in-cat in-cat-{$rsLastGames[10]['id_game']}{/if}">
                        <a href="/game/{$rsLastGames[10]['id_game']}/" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="{$teplateImgPath}games/{$rsLastGames[10]['id_game']}/main.jpg" alt="{$rsLastGames[10]['name_game']}">
                            {if isset($rsCheckGameCart[$rsLastGames[10]['id_game']])}
                    <div class="game-in-cat flag-{$rsLastGames[10]['id_game']}">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    {/if}
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    </div>
    <!-- END: Some Products -->