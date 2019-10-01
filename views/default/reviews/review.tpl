<div class="nk-gap-2"></div>
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-12">
            <!-- START: Latest Pictures -->
            <h2 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Отзывы</span> <a href="/user/profile/{$rsUser['id_user']}/">{if isset($rsUser)}{$rsUser['user_name']}{/if}</a></span></h2>
            <div class="nk-gap-3"></div>
            
                <div class="row vertical-gap">
                    <div class="col-md-7">
                    <div id="leftContents">
                        {foreach $rsReviews as $review}
                        <div class="review_box">    
                            <div style="clear: left;"></div>
                            <div class="review_box_content">
                                <div class="leftcol" style="opacity: 1;">
                                    <a href="/game/{$review['game_id_review']}/">
                                        <img src="{$teplateImgPath}games/{$review['game_id_review']}/mainv2.jpg">
                                    </a>
                                </div>
                                <div class="rightcol">
                                    <div class="vote_header">
                                        <div class="thumb">
                                            <a href="javascript:;">
                                                {if $review['vote_review'] == 'like'}
                                                <img src="{$teplateWebPath}assets/images/thumbs/icon_thumbsUp.png" width="44" height="44">
                                                {else}
                                                <img src="{$teplateWebPath}assets/images/thumbs/icon_thumbsDown.png" width="44" height="44">
                                                {/if}
                                            </a>
                                        </div>
                                        <div class="title">
                                            {if $review['vote_review'] == 'like'}
                                            <a href="javascript:;">Рекомендую</a>
                                            {else}
                                            <a href="javascript:;">Не рекомендую</a>
                                            {/if}
                                        </div>
                                    </div>
                                    <div class="content">{$review['text_review']}</div>
                                    <div class="posted">
                                        Опубликовано {$review['review_date']} в {$review['review_time']}.                                                                    
                                    </div>
                                    <div class="hr"></div>
                                </div>
                                <div style="clear: left;"></div>
                            </div>
                        </div>
                        {/foreach}
                    </div>   
                    </div>  
                    <div class="col-md-4">
                        <div id="rightContents">
                <div class="box">
                    <div>
                        <div class="review_stat">
                            <div class="giantNumber ellipsis">{$cntReviews}</div>
                            <div class="giantNumberSubhead ellipsis">Количество<br>обзоров</div>
                        </div>
                        <div class="review_stat">
                            <div class="giantNumber ellipsis">{$cnt}</div>
                            <div class="giantNumberSubhead ellipsis">Количество<br>продуктов</div>
                        </div>
                    </div>
                    <div style="clear: left;"></div>
                </div>
                <!-- in responsive mode these boxes float side-by-side -->
                <div style="clear: left;"></div>
            </div>
                    </div>             
                </div>
</div>
</div>
</div>
<div class="nk-gap-2"></div>