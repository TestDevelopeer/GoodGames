<?php
/* Smarty version 3.1.30, created on 2019-10-15 23:18:11
  from "D:\GitHub\GoodGames\views\default\gallery\latestPictures.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5da62983a0ea74_91997143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7d612d8eac118c2ded6866d728435e4fd5ac850' => 
    array (
      0 => 'D:\\GitHub\\GoodGames\\views\\default\\gallery\\latestPictures.tpl',
      1 => 1551609209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da62983a0ea74_91997143 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="nk-gap-2"></div>
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-12">
            <!-- START: Latest Pictures -->
            <h2 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Все изображения</span> <a href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
/"><?php if (isset($_smarty_tpl->tpl_vars['rsUser']->value)) {
echo $_smarty_tpl->tpl_vars['rsUser']->value['user_name'];
}?></a></span></h2>
            <div class="nk-gap"></div>
            <div class="nk-popup-gallery">
                <div class="row vertical-gap">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsGallery']->value, 'gallery');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gallery']->value) {
?>
                    <div class="col-lg-4 col-md-6" id="photo_<?php echo $_smarty_tpl->tpl_vars['gallery']->value['id_photo'];?>
">
                        <div class="apphub_Card modalContentLink interactable" style="float: left; width: 302.979px; height: 351px; opacity: 1;">
                            <div class="apphub_CardContentClickable">
                                <div class="apphub_CardContentTypeContainer">
                                    <div class="apphub_CardContentType"><?php echo $_smarty_tpl->tpl_vars['gallery']->value['name_pic'];?>
: Иллюстрация</div>
                                </div>
                                <div class="apphub_CardContentPreviewImageBorder">
                                    <div class="apphub_CardContentMain" style="height: 256px;">
                                        <div class="nk-gallery-item-box">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['path_photo'];
echo $_smarty_tpl->tpl_vars['gallery']->value['name_photo'];?>
" class="nk-gallery-item" data-size="973x667">
                                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['path_photo'];
echo $_smarty_tpl->tpl_vars['gallery']->value['name_photo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['name_photo'];?>
">
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="apphub_CardMetaData">
                            <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
                            <div class="apphub_CardRatingButtons">
                                <a href="javascript:void(0)" onclick="PublishedFileVote(<?php echo $_smarty_tpl->tpl_vars['gallery']->value['id_photo'];?>
, 'like');" class="btn_grey_grey btn_small_thin ico_hover <?php if ($_smarty_tpl->tpl_vars['rsReview']->value[$_smarty_tpl->tpl_vars['gallery']->value['id_photo']]['gall_vote_review'] == 'like') {?>btn_active<?php }?>" id="vote_up_<?php echo $_smarty_tpl->tpl_vars['gallery']->value['id_photo'];?>
"><span><i class="ico16 thumb_up"></i></span></a>
                                <a href="javascript:void(0)" onclick="PublishedFileVote(<?php echo $_smarty_tpl->tpl_vars['gallery']->value['id_photo'];?>
, 'dislike');" class="btn_grey_grey btn_small_thin ico_hover <?php if ($_smarty_tpl->tpl_vars['rsReview']->value[$_smarty_tpl->tpl_vars['gallery']->value['id_photo']]['gall_vote_review'] == 'dislike') {?>btn_active<?php }?>" id="vote_down_<?php echo $_smarty_tpl->tpl_vars['gallery']->value['id_photo'];?>
"><span><i class="ico16 thumb_down"></i></span></a>
                            </div>
                            <?php }?>
                            <div class="apphub_CardRating rateUp withRateButtons">
                                <span><i class="ico16 thumb_up"></i><?php echo $_smarty_tpl->tpl_vars['cntLikes']->value[$_smarty_tpl->tpl_vars['gallery']->value['id_photo']];?>
</span>  <span><i class="ico16 thumb_down"></i><?php echo $_smarty_tpl->tpl_vars['cntDislikes']->value[$_smarty_tpl->tpl_vars['gallery']->value['id_photo']];?>
</span>        
                            </div>
                            <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value) && $_smarty_tpl->tpl_vars['arUser']->value['id_user'] == $_smarty_tpl->tpl_vars['gallery']->value['user_id_photo']) {?>
                            <div style="float: right; padding-right: 5px;">
                                <a class="actionlink" data-tooltip-text="Удалить" href="javascript: deletefromgallery(<?php echo $_smarty_tpl->tpl_vars['gallery']->value['id_photo'];?>
);">
                                    <img src="https://steamcommunity-a.akamaihd.net/public/images/skin_1/notification_icon_trash_bright.png?v=1">
                                </a>
                            </div>
                            <?php }?>
                            <div style="clear: left"></div>
                            <?php if (isset($_smarty_tpl->tpl_vars['rsUser']->value)) {?>
                            <div class="apphub_CardContentTitle ellipsis"><a href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
/"><?php echo $_smarty_tpl->tpl_vars['rsUser']->value['user_name'];?>
</a>&nbsp;</div>
                            <?php } else { ?>
                            <div class="apphub_CardContentTitle ellipsis"><a href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['Users']->value[$_smarty_tpl->tpl_vars['gallery']->value['id_photo']]['id_user'];?>
/"><?php echo $_smarty_tpl->tpl_vars['Users']->value[$_smarty_tpl->tpl_vars['gallery']->value['id_photo']]['user_name'];?>
</a>&nbsp;</div>
                            <?php }?>
                            <div style="clear: right"></div>
                        </div>
                            <div class="apphub_CardContentAuthorBlock tall">
                            <div class="apphub_CardContentAppName"><?php echo $_smarty_tpl->tpl_vars['gallery']->value['name_pic'];?>
</div>
                        </div>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
            <!-- END: Latest Pictures -->
</div>
</div>
</div>
<div class="nk-gap-2"></div><?php }
}
