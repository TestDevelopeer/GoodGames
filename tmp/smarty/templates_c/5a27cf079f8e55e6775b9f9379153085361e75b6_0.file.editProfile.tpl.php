<?php
/* Smarty version 3.1.30, created on 2019-02-09 01:30:49
  from "D:\OSPanel\domains\games\views\default\user\editProfile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c5e0319a330f8_21308797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a27cf079f8e55e6775b9f9379153085361e75b6' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\user\\editProfile.tpl',
      1 => 1549665048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5e0319a330f8_21308797 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="responsive_page_template_content">
   <div class="pagecontent ">
      <div class="profile_small_header_texture">
         <div class="profile_small_header_text">
            <span class="profile_small_header_name">
            <a class="whiteLink" href="/user/profile/<?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_link'] != '') {
echo $_smarty_tpl->tpl_vars['arUser']->value['user_link'];
} else {
echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];
}?>/"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_name'];?>
</a>
            </span>
            <span class="profile_small_header_arrow">»</span>
            
            <span class="profile_small_header_location">Редактировать профиль</span>
            
         </div>
         <a href="https://steamcommunity.com/id/russianrave">
            <div class="profile_small_header_avatar">
               <div class="playerAvatar medium offline">
                  <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fd/fd73c50baa6d0e9733405f1e2c0b94b63ca284ac_medium.jpg">
               </div>
            </div>
         </a>
      </div>
      <div class="grouppage_content_area groupadmin_content">
         <div class="maincontent" style="padding: 10px; background-color: #171717;">
            <div class="leftcol hasContentBoxes">
               <form class="smallForm" style="width: 50%; margin: 0 auto;" id="editForm" name="editForm" method="POST" action="https://steamcommunity.com/id/russianrave/edit">
                  <div class="group_content group_summary">
                     <div class="formRow">
                        <div class="formRowTitle">
                           Имя профиля     
                           <span class="formRowHint">(*)</span>                       
                        </div>
                        <div class="formRowFields">
                           <div class="">
                              <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_login'];?>
" name="userLogin" class="required form-control" placeholder="Логин">
                           </div>
                        </div>
                     </div>
                     <div class="formRow">
                        <div class="formRowTitle">
                           Настоящее имя                                    
                           <span class="formRowHint">(*)</span>
                        </div>
                        <div class="formRowFields">
                           <div class="">
                              <input type="email" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_name'];?>
" name="email" class="required form-control" placeholder="Имя">
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
                               <option value="" selected="">(Не показывать)</option>
                               <?php } else { ?>
                               <option value="" selected=""><?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_country'];?>
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
                               <option value="" selected="">(Не показывать)</option>
                               <?php } else { ?>
                               <option value="" selected=""><?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_city'];?>
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
                           <span class="formRowHint">(*)</span>
                        </div>
                        <div class="formRowFields noPadding">
                           games/user/profile/
                           <div class="gray_bevel for_text_input">
                              <input class="dynInput" type="text" name="customURL" id="customURL" value="<?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_link'] != '') {
echo $_smarty_tpl->tpl_vars['arUser']->value['user_link'];
} else { ?>$arUser['id_user']<?php }?>">
                           </div>/
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
users/default/default.jpg<?php }?>" width="64" height="64" border="0">
                                 <div class="avatarSizeDesc">64px</div>
                              </div>
                              <div id="avatarBlockIcon" class="avatar_edit_block icon">
                                 <img src="<?php if ($_smarty_tpl->tpl_vars['arUser']->value['user_have_photo'] == 1) {
echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
/main.jpg<?php } else {
echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.jpg<?php }?>" width="32" height="32" border="0">
                                 <div class="avatarSizeDesc">32px</div>
                              </div>
                           </div>
                           <div class="avatar_upload_ctn" id="avatar_upload_ctn">
                              <div class="">
                                 <div class="upload_controls">
                                    <button id="avatar_upload_button" type="button" class="upload_btn btnv6_blue_hoverfade btn_small">
                                    <span>Загрузить</span>
                                    </button>
                                    <div class="avatar_upload_input_ctn">                                                    
                                       <input type="file" id="avatar_upload_input" name="avatar" size="16">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="group_content group_summary">
                     <div class="formRow">
                        <div class="formRowTitle">
                           О себе                                    
                        </div>
                        <div class="formRowFields">
                           <div class="fullwidth">
                              <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['user_desc'];?>
" name="userDesc" class="required form-control" placeholder="О себе">
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
/background/background.jpg" width="140" height="87" border="0">
                                 <div class="avatarSizeDesc">140px</div>
                              </div>
                           </div>
                           <?php }?>
                           <div class="avatar_upload_ctn" id="avatar_upload_ctn">
                              <div class="">
                                 <div class="upload_controls">
                                    <button id="avatar_upload_button" type="button" class="upload_btn btnv6_blue_hoverfade btn_small">
                                    <span>Загрузить</span>
                                    </button>
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
                  </div>
                  <div class="group_content group_summary">
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
         </div>
      </div>
   </div>
</div><?php }
}
