<?php
/* Smarty version 3.1.30, created on 2019-02-10 00:17:30
  from "D:\OSPanel\domains\games\views\default\user\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c5f436a727dc2_72063740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4440ff4c55d628d9ff65ae147c415e8ed4ccd99d' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\user\\edit.tpl',
      1 => 1549747048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5f436a727dc2_72063740 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="responsive_page_content">
    <div class="responsive_page_template_content">

        <div class="pagecontent ">
            <div class="profile_small_header_bg">
                <div class="profile_small_header_texture">

                    <div class="profile_small_header_text">
                        <span class="profile_small_header_name"><a class="whiteLink" href="/user/profile/<?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_link'] != '') {
echo $_smarty_tpl->tpl_vars['arUser']->value['user_link'];
} else {
echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];
}?>/"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_name'];?>
</a></span>
                        <span class="profile_small_header_arrow">&raquo;</span>
                        <a class="whiteLink" href="/user/edit/<?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_link'] != '') {
echo $_smarty_tpl->tpl_vars['arUser']->value['user_link'];
} else {
echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];
}?>/"><span class="profile_small_header_location">Редактировать профиль</span></a>

                    </div>
                    <a href="/user/profile/<?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_link'] != '') {
echo $_smarty_tpl->tpl_vars['arUser']->value['user_link'];
} else {
echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];
}?>/">
                        <div class="profile_small_header_avatar">
                            <div class="playerAvatar medium offline">
                                <img src="<?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_have_photo'] == 1) {
echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
/main.jpg<?php } else {
echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.jpg<?php }?>">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grouppage_content_area groupadmin_content">
                <div class="maincontent">

                    <div class="leftcol hasContentBoxes">

                        <div class="nonresponsive_hidden edit_subpage_selector">
                            <span class="subpage_selector_label">РЕДАКТИРОВАТЬ:</span>
                            <a class="btn_darkblue_white_innerfade inner_bevel btn_small" href="https://steamcommunity.com/id/russianrave/edit">
                                <span>Мой профиль</span>
                            </a>
                        </div>

                        <form class="smallForm" id="editForm" name="editForm" method="POST" action="https://steamcommunity.com/id/russianrave/edit">
                            <input type="hidden" name="sessionID" value="52955af6a8c8556b12970600" />
                            <input type="hidden" name="type" value="profileSave">

                            <input type="hidden" name="weblink_1_title" value="">
                            <input type="hidden" name="weblink_1_url" value="">
                            <input type="hidden" name="weblink_2_title" value="">
                            <input type="hidden" name="weblink_2_url" value="">
                            <input type="hidden" name="weblink_3_title" value="">
                            <input type="hidden" name="weblink_3_url" value="">

                            <div class="group_content group_summary">
                            	<div class="formRow">
                                    <div class="formRowTitle">
                                        Email<span class="formRowHint">(*)</span>
                                    </div>
                                    <div class="formRowFields">
                                        <div class="gray_bevel for_text_input">
                                            <input class="dynInput" type="Email" name="userEmail" id="userEmail" size="30" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_email'];?>
">
                                        </div>
                                    </div>
                                </div>
                                <div class="formRow">
                                    <div class="formRowTitle">
                                        Имя профиля<span class="formRowHint">(*)</span>
                                    </div>
                                    <div class="formRowFields">
                                        <div class="gray_bevel for_text_input">
                                            <input class="dynInput" type="text" name="userLogin" id="userLogin" size="30" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_name'];?>
">
                                        </div>
                                    </div>
                                </div>

                                <div class="formRow">
                                    <div class="formRowTitle">
                                        Страна
                                    </div>
                                    <div class="formRowFields">
                                        <select name="country" id="country" class="gray_bevel dynInput">
                                        	<?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_country'] == '') {?>
                                            <option value="">(Не показывать)</option>
                                        	<?php } else { ?>
                                        	<option value=""><?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_country'];?>
</option>
                                        	<?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="formRow" id="stateContainer">
                                    <div class="formRowTitle">Город</div>
                                    <div class="formRowFields">
                                        <select name="state" id="state" class="gray_bevel dynInput">
                                            <?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_city'] == '') {?>
                                            <option value="">(Не показывать)</option>
                                        	<?php } else { ?>
                                        	<option value=""><?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_city'];?>
</option>
                                        	<?php }?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="group_content group_summary">
                                <div class="formRow">
                                    <div class="formRowTitle">
                                        Личная ссылка
                                    </div>

                                    <div class="formRowFields noPadding">
                                        http://games/user/profile/
                                        <div class="gray_bevel for_text_input">
                                            <input class="dynInput" type="text" name="customURL" id="customURL" value="<?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_link'] != '') {
echo $_smarty_tpl->tpl_vars['arUser']->value['user_link'];
} else {
echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];
}?>">
                                        </div>
                                        /
                                    </div>
                                </div>
                            </div>

                            <div class="group_content group_summary">
                                <div class="formRow">
                                    <div class="formRowTitle noPadding">Аватар</div>
                                    <div class="formRowDesc">&nbsp;</div>
                                    <div class="formRowFields">
                                        <div class="avatar_previews">
                                            <div id="avatarBlockFull" class="avatar_edit_block full">
                                                <img src="<?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_have_photo'] == 1) {
echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
/main.jpg<?php } else {
echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.jpg<?php }?>" id="avatar_full_img" width="184" height="184" border="0">
                                                <div class="avatarSizeDesc">184px</div>
                                            </div>
                                            <div id="avatarBlockMedium" class="avatar_edit_block medium">
                                                <img src="<?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_have_photo'] == 1) {
echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
/main.jpg<?php } else {
echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.jpg<?php }?>" id="avatar_medium_img" width="64" height="64" border="0">
                                                <div class="avatarSizeDesc">64px</div>
                                            </div>
                                            <div id="avatarBlockIcon" class="avatar_edit_block icon">
                                                <img src="<?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_have_photo'] == 1) {
echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
/main.jpg<?php } else {
echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.jpg<?php }?>" id="avatar_icon_img" width="32" height="32" border="0">
                                                <div class="avatarSizeDesc">32px</div>
                                            </div>
                                        </div>

                                        <div class="avatar_upload_ctn" id="avatar_upload_ctn">
                                            <div class="gray_bevel">
                                                <div class="upload_controls">
                                                    <div class="avatar_upload_input_ctn">
                                                        <input type="file" id="avatar_upload_input" name="avatar" size="16">
                                                    </div>

                                                </div>
                                                <div class="avatar_upload_throbber">
                                                    <img src="https://steamcommunity-a.akamaihd.net/public/images/login/throbber.gif">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="formRow">
                                    <div class="formRowFields">
                                    </div>
                                </div>
                            </div>

                            <div class="group_content group_summary">
                                <div class="formRow">
                                    <div class="formRowTitle">
                                        О себе <span class="formRowHint" data-tooltip-text="Расскажите миру, какой вы замечательный… или что вы очень любите печеньки.">(*)</span>
                                    </div>
                                    <div class="formRowFields">
                                        <div class="gray_bevel fullwidth">
                                            <textarea class="dynInput" rows="8" name="summary" id="summary"><?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_desc'] == '') {?>Информация отсутствует.<?php } else {
echo $_smarty_tpl->tpl_vars['arUser']->value['user_desc'];
}?></textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="group_content group_summary">
                                <div class="formRow">
                                    <div class="formRowTitle noPadding">Фон профиля</div>
                                    <div class="formRowDesc">&nbsp;</div>
                                    <div class="formRowFields">
                                        <div class="avatar_previews">
                                        	<?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_have_bg'] == 1) {?>
                                            <div id="avatarBlockFull" class="avatar_edit_block full">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
/background/background.jpg" id="avatar_full_img" width="140" height="87" border="0">
                                                <div class="avatarSizeDesc">140px</div>
                                            </div>
                                            <?php }?>
                                        </div>

                                        <div class="avatar_upload_ctn" id="avatar_upload_ctn">
                                            <div class="gray_bevel">
                                                <div class="upload_controls">
                                                    <div class="avatar_upload_input_ctn">
                                                        <input type="file" id="avatar_upload_input" name="avatar" size="16">
                                                    </div>

                                                </div>
                                                <div class="avatar_upload_throbber">
                                                    <img src="https://steamcommunity-a.akamaihd.net/public/images/login/throbber.gif">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="formRow">
                                    <div class="formRowFields">
                                    </div>
                                </div>
                            </div>

                            <div class="group_content_bodytext">
                                <div class="forum_manage_actions">
                                    <a href="https://steamcommunity.com/id/russianrave" class="btn_grey_white_innerfade btn_medium">
                                        <span>Отмена</span>
                                    </a>
                                    <button type="submit" class="btn_green_white_innerfade btn_medium">
                                        <span>Сохранить изменения</span>
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="rightcol responsive_hidden">
                        <div class="rightbox_header"></div>
                        <div class="rightbox">
                            <div class="rightbox_content_header">РЕДАКТИРОВАТЬ</div>
                            <div class="content">
                                <div class="rightbox_list_option selected">
                                    <div class="rightbox_list_selection_background"></div>
                                    <div class="rightbox_list_option_content">
                                        <a href="/user/edit/<?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_link'] != '') {
echo $_smarty_tpl->tpl_vars['arUser']->value['user_link'];
} else {
echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];
}?>/">
										Мой профиль									</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rightbox_footer"></div>
                    </div>

                    <div style="clear: both;"></div>
                </div>
            </div>

        </div>

    </div>
    <!-- responsive_page_legacy_content -->
</div><?php }
}
