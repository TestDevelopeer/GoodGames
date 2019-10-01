<div class="responsive_page_content">
    <div class="responsive_page_template_content">

        <div class="pagecontent ">
            <div class="profile_small_header_bg">
                <div class="profile_small_header_texture">

                    <div class="profile_small_header_text">
                        <span class="profile_small_header_name"><a class="whiteLink" href="/user/profile/{if $arUser['user_link'] != ''}{$arUser['user_link']}{else}{$arUser['id_user']}{/if}/">{$arUser['user_name']}</a></span>
                        <span class="profile_small_header_arrow">&raquo;</span>
                        <a class="whiteLink" href="/user/edit/{if $arUser['user_link'] != ''}{$arUser['user_link']}{else}{$arUser['id_user']}{/if}/"><span class="profile_small_header_location">Редактировать профиль</span></a>

                    </div>
                    <a href="/user/profile/{if $arUser['user_link'] != ''}{$arUser['user_link']}{else}{$arUser['id_user']}{/if}/">
                        <div class="profile_small_header_avatar">
                            <div class="playerAvatar medium online">
                                <img src="{if $arUser[ 'user_have_photo']==1 }{$teplateImgPath}users/{$arUser[ 'id_user']}/main.jpg{else}{$teplateImgPath}users/default/default.jpg{/if}">
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
                                            <input class="dynInput" type="Email" name="userEmail" id="userEmail" size="30" value="{$arUser['user_email']}">
                                        </div>
                                    </div>
                                </div>
                                <div class="formRow">
                                    <div class="formRowTitle">
                                        Имя профиля
                                    </div>
                                    <div class="formRowFields">
                                        <div class="gray_bevel for_text_input">
                                            <input class="dynInput" type="text" name="userLogin" id="userLogin" size="30" value="{$arUser['user_name']}">
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
                                            {foreach $rsCountries as $country}
                                                {if $country['code_country'] != $userCountry['code_country']}
                                                    <option value="{$country['code_country']}">{$country['name_country']}</option>
                                                {else}
                                                    <option selected="" value="{$country['code_country']}">{$country['name_country']}</option>
                                                {/if}
                                            {/foreach}
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
                                            <input class="dynInput" type="text" name="customURL" id="customURL" value="{if $arUser['user_link'] != ''}{$arUser['user_link']}{else}{$arUser['id_user']}{/if}">
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
                                        {if $arUser['user_have_photo'] == 1}
                                        <div class="avatar_previews">
                                            <div id="avatarBlockFull" class="avatar_edit_block full">
                                                <img src="{if $arUser[ 'user_have_photo']==1 }{$teplateImgPath}users/{$arUser[ 'id_user']}/main.jpg{else}{$teplateImgPath}users/default/default.jpg{/if}" id="avatar_full_img" width="184" height="184" border="0">
                                                <div class="avatarSizeDesc">184px</div>
                                            </div>
                                            <div id="avatarBlockMedium" class="avatar_edit_block medium">
                                                <img src="{if $arUser[ 'user_have_photo']==1 }{$teplateImgPath}users/{$arUser[ 'id_user']}/main.jpg{else}{$teplateImgPath}users/default/default.jpg{/if}" id="avatar_medium_img" width="64" height="64" border="0">
                                                <div class="avatarSizeDesc">64px</div>
                                            </div>
                                            <div id="avatarBlockIcon" class="avatar_edit_block icon">
                                                <img src="{if $arUser[ 'user_have_photo']==1 }{$teplateImgPath}users/{$arUser[ 'id_user']}/main.jpg{else}{$teplateImgPath}users/default/default.jpg{/if}" id="avatar_icon_img" width="32" height="32" border="0">
                                                <div class="avatarSizeDesc">32px</div>
                                            </div>
                                        </div>
                                        {/if}

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
                                            <textarea class="dynInput" rows="8" name="summary" id="summary">{if $arUser[ 'user_desc'] == ""}Информация отсутствует.{else}{$arUser['user_desc']}{/if}</textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="group_content group_summary">
                                <div class="formRow">
                                    <div class="formRowTitle noPadding">Фон профиля</div>
                                    <div class="formRowDesc">&nbsp;</div>
                                    <div class="formRowFields">
                                        {if $arUser['user_have_bg'] == 1}
                                        <div class="avatar_previews">
                                            <div id="avatarBlockFull" class="avatar_edit_block full">
                                                <img src="{$teplateImgPath}users/{$arUser['id_user']}/background/background.jpg" id="avatar_full_img" width="140" height="87" border="0">
                                                <div class="avatarSizeDesc">140px</div>
                                            </div>
                                        </div>
                                        {/if}
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
                                                        <button onclick="deleteuserbg({$arUser['id_user']});" id="bg_delete_button" type="button" class="upload_btn btn_bg btnv6_blue_hoverfade btn_small">
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
                                        {if $rsUser['2FA'] == 0}
                                        <a href="#" data-toggle="modal" data-target="#modal2FA" class="upload_btn btnv6_blue_hoverfade btn_small">
                                            <span>Включить</span>
                                        </a>
                                        {else}
                                        <a href="#" data-toggle="modal" data-target="#modal2FA" class="upload_btn btnv6_blue_hoverfade btn_small">
                                            <span>Выключить</span>
                                        </a>
                                        {/if}
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
</div>