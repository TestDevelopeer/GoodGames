    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs custom-game-bread">
        
        
        <li class="custom-li-bread"><a href="/">Главная</a></li>
        
        {if $rsArticle['art_game_id'] == 0}
        <li style="font-size: 1em;"><span class="fa fa-angle-right"></span></li>
        
        <li class="custom-li-bread"><a href="/news/">Новости</a></li>
        
        
        <li style="font-size: 1em;"><span class="fa fa-angle-right"></span></li>
        
        <li class="last-bread-child-phone"><span>{$rsArticle['name_art']}</span></li>
        {else}
        <li style="font-size: 1em;"><span class="fa fa-angle-right"></span></li>
        <li class="custom-li-bread"><a href="#">Обновления</a></li>

        <li style="font-size: 1em;"><span class="fa fa-angle-right"></span></li>
        <li class="last-bread-child-phone"><span>{$rsUpdateGame['name_game']}</span></li>
        {/if}
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-8">
            <!-- START: Post -->
            <div class="nk-blog-post nk-blog-post-single">
                <!-- START: Post Text -->
                <div class="nk-post-text mt-0">
                    {if $rsArticle['art_game_id'] == 0}
                    <div class="nk-post-img">
                        <img src="{$teplateImgPath}articles/{$rsArticle['id_art']}/main.jpg" alt="Grab your sword and fight the Horde">
                    </div>
                    {/if}
                    <div class="nk-gap-1"></div>
                    <h1 class="nk-post-title h4 last-bread-child-phone">{$rsArticle['name_art']}</h1>
                    <div class="nk-post-by">
                        <img src="{$teplateWebPath}assets/images/avatar-2.jpg" alt="Witch Murder" class="rounded-circle" width="35"><a href="javascript:;">{$rsArticle['author_art']}</a> {$rsArticle['date_art']}
                    </div>
                    <div class="nk-gap"></div>
                    <div class="main-text-art">
                    	{$rsArticle['text_art']}
                    </div>
                    <div class="nk-gap"></div>
                    <div class="nk-post-share">
                        <span class="h5 hidden-phone">Поделиться статьей:</span>

                        <ul class="nk-social-links-2">
                            <li><span class="nk-social-facebook" title="Share page on Facebook" data-share="facebook"><span class="fab fa-facebook"></span></span></li>
                            <li><span class="nk-social-google-plus" title="Share page on Google+" data-share="google-plus"><span class="fab fa-google-plus"></span></span></li>
                            <li><span class="nk-social-twitter" title="Share page on Twitter" data-share="twitter"><span class="fab fa-twitter"></span></span></li>
                            <li><span class="nk-social-pinterest" title="Share page on Pinterest" data-share="pinterest"><span class="fab fa-pinterest-p"></span></span></li>

                            <!-- Additional Share Buttons
                                <li><span class="nk-social-linkedin" title="Share page on LinkedIn" data-share="linkedin"><span class="fab fa-linkedin"></span></span></li>
                                <li><span class="nk-social-vk" title="Share page on VK" data-share="vk"><span class="fab fa-vk"></span></span></li>
                            -->
                        </ul>
                    </div>
                </div>
                <!-- END: Post Text -->

                <!-- START: Similar Articles -->
                <div class="nk-gap-2"></div>
                <h3 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Другие</span> новости</span></h3>
                <div class="nk-gap"></div>
                <div class="row">
                    {foreach $rsTwoRandArt as $art}
                    <div class="col-md-6">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="/article/{$art['id_art']}/" class="nk-post-img">
                                <img src="{$teplateImgPath}articles/{$art['id_art']}/main.jpg" alt="{$art['name_art']}">
                                <span class="nk-post-comments-count">{$art['views_art']}</span> 
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a class="text-art" href="/article/{$art['id_art']}/">{$art['name_art']}</a></h2>
                        </div>
                        <!-- END: Post -->
                    </div>
                    {/foreach}
                </div>
                <!-- END: Similar Articles -->

                <!-- START: Comments -->
                <div id="comments"></div>
                <h3 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">{$cntComments}</span> Комментариев</span></h3>
                <div class="nk-gap"></div>
                <div class="nk-comments">
                    <!-- START: Comment -->
                    {foreach $rsComments as $comment}
                    <div class="nk-comment">
                        <div class="nk-comment-meta">
                            <img src="{$teplateImgPath}users/default/default.png" alt="Witch Murder" class="rounded-circle" width="35"><a href="javascript:;">{$comment['name_user']}</a> {$comment['date_comment']}
                        </div>
                        <div class="nk-comment-text">
                            <p>{$comment['text_comment']}</p>
                        </div>
                    </div>
                    {/foreach}
                    <!-- END: Comment -->
                </div>
                <!-- END: Comments -->

                {if isset($arUser)}
                <!-- START: Reply -->
                <div class="nk-gap-2"></div>
                <h3 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Оставить</span> комментарий</span></h3>
                
                <div class="nk-reply">
                    <form action="/article/addcomment/" method="POST" class="nk-form">
                        <input type="text" readonly="" hidden="" name="art_id" value="{$rsArticle['id_art']}">
                        <div class="nk-gap-1"></div>
                        <textarea class="form-control required" name="message" rows="5" placeholder="Комменатрий *" required=""></textarea>
                        <div class="nk-gap-1"></div>
                        <div class="nk-form-response-success"></div>
                        <div class="nk-form-response-error"></div>
                        <button class="nk-btn nk-btn-rounded nk-btn-color-main-1">Отправить</button>
                    </form>
                </div>
                <!-- END: Reply -->
                {else}
                <div class="nk-info-box text-info">
                            <div class="nk-info-box-icon">
                                <i class="ion-information"></i>
                            </div>
                            <h3>Войдите!</h3>
                            <em>Чтобы прокомментировать данную статью, вам необходимо авторизоваться.</em>
                            <div class="nk-gap-1"></div>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-info" data-toggle="modal" data-target="#modalLogin">
                                <span>Войти</span>
                                <span class="icon"><i class="ion-help-circled"></i></span>
                            </a>
                        </div>
                {/if}
            </div>
            <!-- END: Post -->
        </div>
</div>
</div>