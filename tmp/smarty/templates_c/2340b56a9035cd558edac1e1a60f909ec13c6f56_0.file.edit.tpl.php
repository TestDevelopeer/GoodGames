<?php
/* Smarty version 3.1.30, created on 2019-03-04 15:36:27
  from "D:\OSPanel\domains\gg.com\views\default\user\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c7d1bcb45def8_67175434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2340b56a9035cd558edac1e1a60f909ec13c6f56' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\user\\edit.tpl',
      1 => 1551702982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7d1bcb45def8_67175434 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <div class="playerAvatar medium online">
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
                            <span class="subpage_selector_label hidden-phone">РЕДАКТИРОВАТЬ:</span>
                            <a class="btn_darkblue_white_innerfade inner_bevel btn_small" href="javascript: showmainsettings();">
                                <span>Мой профиль</span>
                            </a>
                            <a class="btn_darkblue_white_innerfade inner_bevel btn_small" href="javascript: showprivatesettings();">
                                <span>Настройки аккаунта</span>
                            </a>
                        </div>

                        <div class="smallForm" id="user_profile_info">
                            <div class="group_content group_summary">
                                <div class="formRow hide" id="errorText" style="background-image: none; background-color: rgba(0, 0, 0, 0);">
                                <div class="formRowFields">
                                    <span id="error-msg"></span><br>                             
                                </div>
                                </div>
                            	<div class="formRow">
                                    <div class="formRowTitle">
                                        Email
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
                                        Имя профиля
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
                                            <option value="0">(Не показывать)</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCountries']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
                                                <?php if ($_smarty_tpl->tpl_vars['country']->value['code_country'] != $_smarty_tpl->tpl_vars['userCountry']->value['code_country']) {?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['code_country'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['name_country'];?>
</option>
                                                <?php } else { ?>
                                                    <option selected="" value="<?php echo $_smarty_tpl->tpl_vars['country']->value['code_country'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['name_country'];?>
</option>
                                                <?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
                                        <?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_have_photo'] == 1) {?>
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
                                        <?php }?>

                                        <div class="avatar_upload_ctn" id="avatar_upload_ctn">
                                            <div class="gray_bevel">
                                                <form method="POST" action="/user/uploadphoto/" enctype="multipart/form-data">
                                                    <div class="upload_controls">
                                                        <div class="avatar_upload_input_ctn">
                                                            <input type="file" id="avatar_upload_input" name="avatar" size="16">
                                                        </div>
                                                        <button id="avatar_upload_button" type="submit" class="upload_btn btnv6_blue_hoverfade btn_small">
                                                            <span>Загрузить</span>
                                                        </button>

                                                    </div>
                                                </form>
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
                                        О себе
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
                                        <?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_have_bg'] == 1) {?>
                                        <div class="avatar_previews">
                                            <div id="avatarBlockFull" class="avatar_edit_block full">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
/background/background.jpg" id="avatar_full_img" width="140" height="87" border="0">
                                                <div class="avatarSizeDesc">140px</div>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <div class="avatar_upload_ctn upload_user_bg" id="avatar_upload_ctn">
                                            <div class="gray_bevel">
                                                <form method="POST" action="/user/uploadphoto/" enctype="multipart/form-data">
                                                    <div class="upload_controls">
                                                        <div class="avatar_upload_input_ctn">
                                                            <input type="file" id="bg_upload_input" name="user_bg" size="16">
                                                        </div>
                                                        <button id="bg_upload_button" type="submit" class="upload_btn btnv6_blue_hoverfade btn_small">
                                                            <span>Загрузить</span>
                                                        </button>
                                                        <button onclick="deleteuserbg(<?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
);" id="bg_delete_button" type="button" class="upload_btn btn_bg btnv6_blue_hoverfade btn_small">
                                                            <span>Удалить</span>
                                                        </button>
                                                    </div>
                                                </form>
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
                                    <button onclick="saveuserinfo();" type="button" class="btn_green_white_innerfade btn_medium">
                                        <span>Сохранить изменения</span>
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="smallForm hide" id="prvt_profile_info">
                            <div class="group_content group_summary">
                                <div class="formRow hide" id="errorTextPwd" style="background-image: none; background-color: rgba(0, 0, 0, 0); color: #ff0000;">
                                <div class="formRowFields">
                                    <span id="error-msgPwd"></span><br>                             
                                </div>
                                </div>
                                <div class="formRow">
                                    <div class="formRowTitle">
                                        2FA
                                    </div>
                                    <div class="formRowFields">
                                        <?php if ($_smarty_tpl->tpl_vars['rsUser']->value['2FA'] == 0) {?>
                                        <a href="#" data-toggle="modal" data-target="#modal2FA" class="upload_btn btnv6_blue_hoverfade btn_small">
                                            <span>Включить</span>
                                        </a>
                                        <?php } else { ?>
                                        <a href="#" data-toggle="modal" data-target="#modal2FA" class="upload_btn btnv6_blue_hoverfade btn_small">
                                            <span>Выключить</span>
                                        </a>
                                        <?php }?>
                                    </div>
                                </div>
                                <form method="POST" id="user_pwd">
                                <div class="formRow">
                                    <div class="formRowTitle">
                                        Новый пароль
                                    </div>
                                    <div class="formRowFields">
                                        <div class="gray_bevel for_text_input">
                                            <input class="dynInput" type="password" name="pswd" id="pswd" value="" autocomplete="false">
                                        </div>
                                    </div>
                                    <div id="pswd_info">
                                        <ul>
                                        <li id="letter">Минимум <strong>одна буква</strong></li>
                                        <li id="capital">Минимум <strong>одна заглавная буква</strong></li>
                                        <li id="number">Минимум <strong>одна цифра</strong></li>
                                        <li id="length">Быть не менее <strong>8 символов</strong></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="formRow">
                                    <div class="formRowTitle">
                                        Текущий пароль
                                    </div>
                                    <div class="formRowFields noPadding">
                                        <div class="gray_bevel for_text_input">
                                            <input class="dynInput" type="password" name="curPwd" id="curPwd" value="" autocomplete="false">
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>

                            <div class="group_content_bodytext">
                                <div class="forum_manage_actions">
                                    <a href="https://steamcommunity.com/id/russianrave" class="btn_grey_white_innerfade btn_medium">
                                        <span>Отмена</span>
                                    </a>
                                    <button id="changepswds" type="button" class="btn_green_white_innerfade btn_medium">
                                        <span>Сохранить изменения</span>
                                    </button>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="rightcol responsive_hidden">
                        <div class="rightbox_header"></div>
                        <div class="rightbox">
                            <div class="rightbox_content_header">РЕДАКТИРОВАТЬ</div>
                            <div class="content">
                                <div class="rightbox_list_option selected" id="main_set_btn">
                                    <div class="rightbox_list_selection_background"></div>
                                    <div class="rightbox_list_option_content">
                                        <a href="javascript: showmainsettings();">
										  Мой профиль									
                                        </a>
                                    </div>
                                </div>
                                <div class="rightbox_list_option" id="prvt_set_btn">
                                    <div class="rightbox_list_selection_background"></div>
                                    <div class="rightbox_list_option_content">
                                        <a href="javascript: showprivatesettings();">
                                          Настройки аккаунта                                   
                                        </a>
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
