<div class="responsive_page_template_content">
   <div class="no_header profile_page has_profile_background " {if $rsUser['user_have_bg'] == 1}style="background-image: url('{$teplateImgPath}users/{$rsUser['id_user']}/background/background.jpg');"{/if}>
      <div class="profile_header_bg">
         <div class="profile_header_bg_texture">
            <div class="profile_header">
               <div class="profile_header_content">
                  <div class="profile_header_centered_persona">
                     <div class="persona_name" style="font-size: 24px;">
                        <span class="actual_persona_name">{$rsUser['user_name']}</span>
                     </div>
                     <div class="header_real_name ellipsis">
                        <bdi></bdi>
                        <img class="profile_flag" src="{$teplateWebPath}assets/images/flags/{$flag}">
                        {if $rsUser['user_country'] != ""}{$Countries['name_country']}{/if}              
                     </div>
                  </div>
                  <div class="playerAvatar profile_header_size offline">
                     <div class="playerAvatarAutoSizeInner">
                        {if $rsUser['user_have_photo'] == 1}
                        <img src="{$teplateImgPath}users/{$rsUser['id_user']}/main.jpg">
                        {else}
                        <img src="{$teplateImgPath}users/default/default.png">
                        {/if}
                    </div>
                  </div>
                  {if isset($arUser) && $arUser['id_user'] == $rsUser['id_user']}
                  <div class="profile_header_badgeinfo">
                     <div class="profile_header_actions">
                        <a class=" btn_profile_action btn_medium" {if $rsUser['user_link'] == ""} href="/user/edit/{$rsUser['id_user']}/" {else} href="/user/edit/{$rsUser['user_link']}/" {/if}>
                        <span>Редактировать профиль</span>
                        </a>
                     </div>
                  </div>
                  {else}
                  <div class="profile_header_badgeinfo">
                     <div class="profile_header_actions">
                        <a class=" btn_profile_action btn_medium" href="/user/edit/{$rsUser['id_user']}/">
                        <span>Добавить в друзья</span>
                        </a>
                     </div>
                  </div>
                  {/if}
                  <div class="profile_header_summary">
                     <div class="persona_name persona_name_spacer" style="font-size: 24px;">
                        <span class="actual_persona_name">&nbsp;</span>
                     </div>
                     <div class="header_real_name_spacer">&nbsp;</div>
                     <div class="profile_summary noexpand">
                        {if $rsUser['user_desc'] != ""}{$rsUser['user_desc']}{else}Информация отсутствует.{/if}                       
                     </div>
                     <div class="profile_summary_footer" style="display: none;">
                        <span class="whiteLink">Подробнее</span>
                     </div>
                     <script type="text/javascript"> $J( function() { InitProfileSummary( g_rgProfileData['summary'] ); } ); </script>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="profile_content user-container-background">
         <div class="row vertical-gap">
            <div class="col-lg-4">
               <!--
                  START: Sidebar
                  
                  Additional Classes:
                      .nk-sidebar-left
                      .nk-sidebar-right
                      .nk-sidebar-sticky
                  -->
               <aside class="nk-sidebar">
                  <div class="nk-widget nk-widget-highlighted">
                     <div class="responsive_status_info">
                        <div class="profile_in_game persona online">
                           <div class="profile_in_game_header">Не в сети</div>
                           <div class="profile_in_game_name">В сети: 26 мин. назад</div>
                        </div>
                     </div>
                     <ul class="nk-widget-categories user-categories">
                        <li><a href="#">Куплено игр</a></li>
                        <li><a href="#">Видео</a></li>
                        <li><a href="#">Обзоры</a></li>
                        <li><a href="#">Иллюстрации</a></li>
                     </ul>
                  </div>
                  <div class="nk-widget nk-widget-highlighted">
                     <div class="profile_count_link ellipsis">
                        <span class="count_link_label">Друзья</span>&nbsp;
                     </div>
                     <div class="profile_topfriends profile_count_link_preview">
                        <div class="friendBlock persona offline" data-miniprofile="147777669">
                           <a class="friendBlockLinkOverlay" href="https://steamcommunity.com/id/magic_4r2na"></a>
                           <div class="playerAvatar offline">
                              <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/88/88102acec0b82811696445dd185ae8ea98f87d18_medium.jpg">
                           </div>
                           <div class="friendBlockContent">
                              Rito <span class="nickname_block">(<span class="nickname_name">Ренат</span>)</span><br>
                              <span class="friendSmallText">
                              В сети: 30 дн. назад
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </aside>
               <!-- END: Sidebar -->
            </div>
            <div class="col-lg-8">
               <div class="nk-store-product">
                  <!-- START: Share -->
                  <div class="profile_customization">
                     <div class="profile_customization_header">&nbsp;</div>
                     <div class="profile_customization_block ">
                        <div class="screenshot_showcase nk-popup-gallery">
                           <div class="screenshot_showcase_primary showcase_slot nk-gallery-item-box">
                              <a class="screenshot_showcase_screenshot modalContentLink nk-gallery-item" href="https://steamuserimages-a.akamaihd.net/ugc/943967816184490264/05DA92C6F9A25A3FFD27149DC21D75E683690A68/?imw=506&amp;imh=505&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=true" data-appid="730" data-publishedfileid="1616693523" data-size="1016x572">
                              <img width="100%" style="max-width: 506px;" src="https://steamuserimages-a.akamaihd.net/ugc/943967816184490264/05DA92C6F9A25A3FFD27149DC21D75E683690A68/?imw=506&amp;imh=505&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=true">
                              </a>
                              <div class="screenshot_showcase_stats">
                              </div>
                           </div>
                           <div class="screenshot_showcase_rightcol">
                              <div class="screenshot_showcase_smallscreenshot showcase_slot nk-gallery-item-box">
                                 <a class="screenshot_showcase_screenshot modalContentLink nk-gallery-item" href="https://steamuserimages-a.akamaihd.net/ugc/943967816184390258/EDD313A834B96F111277339989E61DBFF8C81BEB/?imw=93&amp;imh=80&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=true" data-appid="730" data-publishedfileid="1616666230" data-size="1016x572"> 
                                 <img width="100%" style="max-width: 93px;" src="https://steamuserimages-a.akamaihd.net/ugc/943967816184390258/EDD313A834B96F111277339989E61DBFF8C81BEB/?imw=93&amp;imh=80&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=true">
                                 </a>
                              </div>
                              <div class="screenshot_showcase_smallscreenshot showcase_slot nk-gallery-item-box">
                                 <a class="screenshot_showcase_screenshot modalContentLink nk-gallery-item" href="https://steamuserimages-a.akamaihd.net/ugc/815559639504123998/CF113863FDE2E9D8C572285A314C30CEC9EB62C8/?imw=100&amp;imh=60&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=true" data-appid="570" data-publishedfileid="918814587" data-size="1016x572">
                                 <img width="100%" style="max-width: 100px;" src="https://steamuserimages-a.akamaihd.net/ugc/815559639504123998/CF113863FDE2E9D8C572285A314C30CEC9EB62C8/?imw=100&amp;imh=60&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=true">
                                 </a>
                              </div>
                              <div class="screenshot_showcase_smallscreenshot showcase_slot nk-gallery-item-box">
                                 <a class="screenshot_showcase_screenshot modalContentLink nk-gallery-item" href="https://steamuserimages-a.akamaihd.net/ugc/943967816184390772/B59FFC2F715F3F818CF60C29EEB20C16A3A2CA38/?imw=100&amp;imh=67&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=true" data-appid="730" data-publishedfileid="1616666281" data-size="1016x572">
                                 <img width="100%" style="max-width: 100px;" src="https://steamuserimages-a.akamaihd.net/ugc/943967816184390772/B59FFC2F715F3F818CF60C29EEB20C16A3A2CA38/?imw=100&amp;imh=67&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=true">
                                 </a>
                              </div>
                              <a class="screenshot_showcase_smallscreenshot screenshot_count" href="https://steamcommunity.com/id/russianrave/screenshots/">
                                 <div class="screenshot_showcase_screenshot">
                                    + 14                        
                                 </div>
                              </a>
                           </div>
                           <div style="clear: both;"></div>
                        </div>
                     </div>
                  </div>
                  <div class="profile_recentgame_header">
                     <h2 class="user-name h3">Последние покупки</h2>
                     <div style="clear: both;"></div>
                  </div>
                  <div class="recent_games"style="background-color: #141414">
                     <div class="recent_game">
                        <div class="recent_game_content">
                           <div class="game_info">
                              <div class="game_info_cap">
                                 <a href="https://steamcommunity.com/app/730">
                                 <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/apps/730/d0595ff02f5c79fd19b06f4d6165c3fda2372820.jpg">
                                 </a>
                              </div>
                              <div class="game_info_details">
                                 Количество: 1
                              </div>
                              <div class="game_name">
                                 <a class="whiteLink" href="https://steamcommunity.com/app/730">Counter-Strike: Global Offensive</a>
                              </div>
                           </div>
                           <div class="game_info_stats">
                              <div class="game_info_stats_rule"></div>
                              <div class="game_info_stats_publishedfilecounts">
                                 <span class="published_file_count_ctn">
                                 <span class="published_file_icon video"></span>
                                 <a class="published_file_link" href="https://steamcommunity.com/id/russianrave/videos/?appid=730">Видео 1</a>
                                 </span>
                                 <span class="published_file_count_ctn">
                                 <span class="published_file_icon screenshot"></span>
                                 <a class="published_file_link" href="https://steamcommunity.com/id/russianrave/screenshots/?appid=730">Изображения 5</a>
                                 </span>
                                 <span class="published_file_count_ctn">
                                 <span class="published_file_icon recommendation"></span>
                                 <a class="published_file_link" href="https://steamcommunity.com/id/russianrave/recommended/730/">Обзоров 1</a>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END: Share -->
                  <div class="nk-gap-2"></div>
                  <!-- START: Tabs -->
                  <div class="nk-tabs">
                     <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" href="#tab-reviews" role="tab" data-toggle="tab">Комментарии (3)</a>
                        </li>
                     </ul>
                     <div class="tab-content">
                        <!-- START: Tab Reviews -->
                        <div role="tabpanel" class="tab-pane fade show active" id="tab-reviews">
                           <div class="nk-gap-2"></div>
                           <!-- START: Reply -->
                           <div class="nk-reply">
                              <form id="commentthread_Profile_76561198204634741_form" name="commentthread_Profile_76561198204634741_form" action="" method="post" onsubmit="return false;">
                                 <div class="commentthread_entry">
                                    <div class="commentthread_user_avatar playerAvatar online">
                                       <a href="https://steamcommunity.com/id/russianrave" data-miniprofile="244369013">
                                       <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fd/fd73c50baa6d0e9733405f1e2c0b94b63ca284ac.jpg" srcset="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fd/fd73c50baa6d0e9733405f1e2c0b94b63ca284ac.jpg 1x, https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fd/fd73c50baa6d0e9733405f1e2c0b94b63ca284ac_medium.jpg 2x">                   </a>
                                    </div>
                                    <div class="commentthread_entry_quotebox">
                                       <textarea rows="1" class="commentthread_textarea" name="commentthread_Profile_76561198204634741_textarea" id="commentthread_Profile_76561198204634741_textarea" placeholder="Оставить комментарий" style="overflow: hidden; height: 20px;"></textarea>
                                    </div>
                                    <div class="commentthread_entry_error" id="commentthread_Profile_76561198204634741_entry_error">
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <!-- END: Reply -->
                           <div class="clearfix"></div>
                           <div class="nk-gap-2"></div>
                           <div class="nk-comments">
                              <!-- START: Review -->
                              <div class="nk-comment">
                                 <div class="nk-comment-meta">
                                    <img src="{$teplateWebPath}assets/images/avatar-2.jpg" alt="Witch Murder" class="rounded-circle" width="35"> by <a href="https://nkdev.info">Witch Murder</a> in 20 September, 2018
                                 </div>
                                 <div class="nk-comment-text">
                                    <p>Upon replenish great rule. Were tree, given day him night Fruit it moveth all. First they're creature seasons and creature fill a it have fifth, their own subdue brought above divided.</p>
                                    <p>Behold it set, seas seas and meat divided Moveth cattle forth evening above moveth so, signs god a fruitful his after called that whose.</p>
                                 </div>
                              </div>
                              <!-- END: Review -->
                           </div>
                        </div>
                        <!-- END: Tab Reviews -->
                     </div>
                  </div>
                  <!-- END: Tabs -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>