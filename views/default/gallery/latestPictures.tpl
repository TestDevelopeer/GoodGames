<div class="nk-gap-2"></div>
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-12">
            <!-- START: Latest Pictures -->
            <h2 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Все изображения</span> <a href="/user/profile/{$rsUser['id_user']}/">{if isset($rsUser)}{$rsUser['user_name']}{/if}</a></span></h2>
            <div class="nk-gap"></div>
            <div class="nk-popup-gallery">
                <div class="row vertical-gap">
                    {foreach $rsGallery as $gallery}
                    <div class="col-lg-4 col-md-6" id="photo_{$gallery['id_photo']}">
                        <div class="apphub_Card modalContentLink interactable" style="float: left; width: 302.979px; height: 351px; opacity: 1;">
                            <div class="apphub_CardContentClickable">
                                <div class="apphub_CardContentTypeContainer">
                                    <div class="apphub_CardContentType">{$gallery['name_pic']}: Иллюстрация</div>
                                </div>
                                <div class="apphub_CardContentPreviewImageBorder">
                                    <div class="apphub_CardContentMain" style="height: 256px;">
                                        <div class="nk-gallery-item-box">
                                            <a href="{$gallery['path_photo']}{$gallery['name_photo']}" class="nk-gallery-item" data-size="973x667">
                                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                                <img src="{$gallery['path_photo']}{$gallery['name_photo']}" alt="{$gallery['name_photo']}">
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="apphub_CardMetaData">
                            {if isset($arUser)}
                            <div class="apphub_CardRatingButtons">
                                <a href="javascript:void(0)" onclick="PublishedFileVote({$gallery['id_photo']}, 'like');" class="btn_grey_grey btn_small_thin ico_hover {if $rsReview[$gallery['id_photo']]['gall_vote_review'] == 'like'}btn_active{/if}" id="vote_up_{$gallery['id_photo']}"><span><i class="ico16 thumb_up"></i></span></a>
                                <a href="javascript:void(0)" onclick="PublishedFileVote({$gallery['id_photo']}, 'dislike');" class="btn_grey_grey btn_small_thin ico_hover {if $rsReview[$gallery['id_photo']]['gall_vote_review'] == 'dislike'}btn_active{/if}" id="vote_down_{$gallery['id_photo']}"><span><i class="ico16 thumb_down"></i></span></a>
                            </div>
                            {/if}
                            <div class="apphub_CardRating rateUp withRateButtons">
                                <span><i class="ico16 thumb_up"></i>{$cntLikes[$gallery['id_photo']]}</span>  <span><i class="ico16 thumb_down"></i>{$cntDislikes[$gallery['id_photo']]}</span>        
                            </div>
                            {if isset($arUser) && $arUser['id_user'] == $gallery['user_id_photo']}
                            <div style="float: right; padding-right: 5px;">
                                <a class="actionlink" data-tooltip-text="Удалить" href="javascript: deletefromgallery({$gallery['id_photo']});">
                                    <img src="https://steamcommunity-a.akamaihd.net/public/images/skin_1/notification_icon_trash_bright.png?v=1">
                                </a>
                            </div>
                            {/if}
                            <div style="clear: left"></div>
                            {if isset($rsUser)}
                            <div class="apphub_CardContentTitle ellipsis"><a href="/user/profile/{$rsUser['id_user']}/">{$rsUser['user_name']}</a>&nbsp;</div>
                            {else}
                            <div class="apphub_CardContentTitle ellipsis"><a href="/user/profile/{$Users[$gallery['id_photo']]['id_user']}/">{$Users[$gallery['id_photo']]['user_name']}</a>&nbsp;</div>
                            {/if}
                            <div style="clear: right"></div>
                        </div>
                            <div class="apphub_CardContentAuthorBlock tall">
                            <div class="apphub_CardContentAppName">{$gallery['name_pic']}</div>
                        </div>
                        </div>
                    </div>
                    {/foreach}
                </div>
            </div>
            <!-- END: Latest Pictures -->
</div>
</div>
</div>
<div class="nk-gap-2"></div>