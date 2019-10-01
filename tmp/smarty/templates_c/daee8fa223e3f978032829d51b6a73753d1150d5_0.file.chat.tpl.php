<?php
/* Smarty version 3.1.30, created on 2019-06-23 21:47:25
  from "D:\GitHub\gg.com\views\default\chat\chat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0fc93d6eb9b8_39031540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daee8fa223e3f978032829d51b6a73753d1150d5' => 
    array (
      0 => 'D:\\GitHub\\gg.com\\views\\default\\chat\\chat.tpl',
      1 => 1551837316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fc93d6eb9b8_39031540 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="friendslist-container" class="fullheight">
   <div class="chat_main fullheight singlewindow">
      <div class="main_SteamPageHeader_3EaXO">
         <div class="nk-nav-logo br-logo">
            <a href="/"><span>[</span>good <i>games</i><span>]</span></a>
         </div>
         <a class="main_SteamPageHeaderTopLink_17wXz" href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['chatArUser']->value['id_user'];?>
/"><?php echo $_smarty_tpl->tpl_vars['chatArUser']->value['user_name'];?>
</a>
      </div>
      <div class="chat_main_flex displayRow">
         <div class="DropTarget friendsListContainer fullheight " style="width: 300px;">
            <div class="friendlist">
               <div class="friendListHeaderContainer titleBarContainer">
                  <div class="friendListCollapse no-drag" onclick="hideFriendList();"><div class="friendListButton friendCollapseButton no-drag "><svg transform="" version="1.1" id="arrowBase" xmlns="http://www.w3.org/2000/svg" class="SVGIcon_Button SVGIcon_DoubleArrow" x="0px" y="0px" width="256px" height="256px" viewBox="0 0 256 256"><polyline class="Arrow1" fill="none" stroke="#ffffff" stroke-width="23" stroke-linecap="round" stroke-miterlimit="10" points="135.65,21.667 30.081,127.235 137.18,234.333 "></polyline><polyline class="Arrow2" fill="none" stroke="#ffffff" stroke-width="23" stroke-linecap="round" stroke-miterlimit="10" points="224.389,21.667 118.821,127.235 225.92,234.333 "></polyline></svg></div></div>
                  <div class="currentUserContainer online">
                     <svg class="statusHeaderGlow" width="100%" height="132" xmlns="http://www.w3.org/2000/svg"><defs><radialGradient id="exampleGradient" cx="50%" cy="50%" r="50%" fx="35%" fy="30%"><stop offset="10%" stop-color="gold"></stop><stop offset="95%" stop-color="green"></stop></radialGradient></defs><ellipse cx="5%" cy="28%" rx="65%" ry="60%" fill="url(#exampleGradient)"></ellipse></svg>
                     <div class="AvatarAndUser">
                     	<?php if ($_smarty_tpl->tpl_vars['chatArUser']->value['user_have_photo'] == 1) {?>
                        	<img class="currentUserAvatar" src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['chatArUser']->value['id_user'];?>
/main.jpg">
                        <?php } else { ?>
                        	<img class="currentUserAvatar" src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.png">
                        <?php }?>
                        <div class="labelHolder online personanameandstatus_twoLine_2wZNn">
                           <div class="personanameandstatus_statusAndName_9U-hi">
                              <div class="personanameandstatus_playerName_1uxaf"><?php echo $_smarty_tpl->tpl_vars['chatArUser']->value['user_name'];?>
</div>
                           </div>
                           <div class="personanameandstatus_richPresenceContainer_21cNf">
                              <div class="personanameandstatus_gameName_qvibF personanameandstatus_richPresenceLabel_3Q6g1 no-drag">В сети</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div></div>
                  <div class="socialTabSearchContainer">
                     <div class="socialTabContainer">
                        <div class="friendTab socialListTab activeTab ">
                           <div class="tabLabel" style="width: 58px;">Друзья</div>
                           <div class="friendsTabButtonsContainer"><div class="TabSearchButton">
                              <div class="tabSearchTransitionGroup ">
                                 <div class="tabSearchTransition tab-search-anim-enter-done hide" id="searchFriends"><form class="socialInputContainer SearchActive" name="friendSearchForm"><div class="inputContainer no-drag"><input id="friendSearchInputID" class="friendSearchInput" type="text" name="friendSearch" placeholder="Поиск по друзьям" autocomplete="off" value=""><div class="friendSearchClear"><svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" class="SVGIcon_Button SVGIcon_X_Line" x="0px" y="0px" width="256px" height="256px" viewBox="0 0 256 256"><line fill="none" stroke="#ffffff" stroke-width="45" stroke-miterlimit="10" x1="212" y1="212" x2="44" y2="44"></line><line fill="none" stroke="#ffffff" stroke-width="45" stroke-miterlimit="10" x1="44" y1="212" x2="212" y2="44"></line></svg></div></div></form></div>
                              </div>
                           <div class="searchIconButton" title="Поиск по друзьям"><svg xmlns="http://www.w3.org/2000/svg" class="SVGIcon_Button SVGIcon_MagnifyingGlass" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"><g transform="translate(0,-952.36218)"><path class="ColorSelector" d="m 40.99855,964.36216 c -15.9798,0 -28.9986,13.01864 -28.9986,28.99862 0,15.97992 13.0188,28.99862 28.9986,28.99862 6.9189,0 13.2881,-2.4349 18.2803,-6.4997 l 23.5927,23.6239 c 1.1714,1.1714 3.0784,1.1715 4.2498,0 1.1716,-1.1715 1.1716,-3.0783 0,-4.2498 l -23.6239,-23.5926 c 4.0649,-4.9923 6.4997,-11.3615 6.4997,-18.28042 0,-15.97998 -13.0187,-28.99862 -28.9986,-28.99862 z m 0,5.99972 c 12.7374,0 22.9989,10.26145 22.9989,22.9989 0,12.73732 -10.2615,22.99892 -22.9989,22.99892 -12.7374,0 -22.9989,-10.2616 -22.9989,-22.99892 0,-12.73745 10.2615,-22.9989 22.9989,-22.9989 z" fill="#ffffff" fill-opacity="1" stroke="none" visibility="visible" display="inline" overflow="visible"></path></g></svg></div></div><a href="https://steamcommunity.com/friends/add" target="_blank" rel="noopener noreferrer"><div class="friendListButton addFriendButton no-drag" title="Добавить друга">
                              <a href="/user/searchusers/" target="_blank"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="SVGIcon_Button SVGIcon_AddFriend" x="0px" y="0px" width="256px" height="256px" viewBox="0 0 256 256"><g class="friendHead" transform="matrix(1.34048,0,0,1.34048,-10.0942,-5.50445)"><circle cx="86.296" cy="47.419" r="33.526"></circle></g><path class="friendBody" d="M100.353,170.882c0-23.589,10.397-44.736,26.842-59.152c-3.352-0.423-6.773-0.649-10.257-0.649H94.231  c-39.775,0-56.481,28.271-56.481,63.099v41.88c0,0-0.3,16.369,35.917,21.813c36.217,5.444,73.651,5,73.651,5 C119.666,230.681,100.353,203.044,100.353,170.882z"></path><path class="plusCircle" d="M179.01,103.892c-36.998,0-66.99,29.992-66.99,66.99s29.994,66.989,66.99,66.989c36.997,0,66.99-29.991,66.99-66.989 S216.008,103.892,179.01,103.892z M217.893,175.882h-33.647v33.882c0,2.762-2.239,5-5,5s-5-2.238-5-5v-33.882h-33.647 c-2.762,0-5-2.238-5-5c0-2.763,2.238-5,5-5h33.647V132.47c0-2.762,2.239-5,5-5s5,2.238,5,5v33.412h33.647c2.762,0,5,2.237,5,5 C222.893,173.643,220.654,175.882,217.893,175.882z"></path></svg></a>
                           </div></a></div>
                        </div>
                     </div>
                  </div>
                  <div class="disconnectBlocker"></div>
               </div>
               <div class="FriendsListContent">
                  <div class="friendlistListContainer" id="friends_container" tabindex="0">
                     <div class="listContentContainer">
                        <div class="DropTarget friendGroup onlineFriends ">
                           <div class="groupHeaderContainer">
                              <div class="groupName">
                                <div class="ExpandPlusMinus"></div>
                                 Друзья в сети<span class="groupCount online_cnt" data-online='0'>                                	
                             	</span>
                              </div>
                           </div>
                           <div class="groupList" id="list-online-friends">

                           </div>
                        </div>
                        <div class="DropTarget friendGroup offlineFriends ">
                           <div class="groupHeaderContainer">
                              <div class="groupName Collapsed" id="showOfflineFriends">
                                <div class="ExpandPlusMinus"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="SVGIcon_Button SVGIcon_PlusCircle" x="0px" y="0px" width="256px" height="256px" viewBox="0 0 256 256"><circle fill="none" stroke-width="10" stroke-miterlimit="10" cx="128" cy="128" r="95.333"></circle><line class="horizontalLine" fill="none" stroke-width="10" stroke-linecap="round" stroke-miterlimit="10" x1="73.333" y1="128" x2="183.333" y2="128"></line><line class="verticalLine" fill="none" stroke-width="10" stroke-linecap="round" stroke-miterlimit="10" x1="128.333" y1="73.335" x2="128.333" y2="183.333"></line></svg></div>
                                 Не в сети<span class="groupCount offline_cnt" id="offline_cnt" data-offline='0'></span>
                              </div>
                           </div>
                           <div class="groupList hide" id="offlineFriends">

                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="friendlistListContainer hide" id="search_friends_container" tabindex="0">
                     <div class="listContentContainer">
                        <div class="DropTarget friendGroup noTransitions onlineFriends ">
                           <div class="groupHeaderContainer"></div>
                           <div class="groupList" id="search_friends_list"></div>
                        </div>
                        <div class="disconnectBlocker"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="singleWindowDivider"></div>
         <div class="DropTarget multiChatDialog" tabindex="0">
            <div class="ChatTabs titleBarContainer OneTab">
               <div class="chatTabOpenFriendsList hide" onclick="showFriendList();"><svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" class="SVGIcon_Button SVGIcon_Group" x="0px" y="0px" width="256px" height="256px" viewBox="0 0 256 256"><g transform="translate(0,-952.36218)"><path d="M58.6,970.4c-15.4,0-28.1,12.7-28.1,28.1c0,15.4,12.7,28.1,28.1,28.1s28.1-12.7,28.1-28.1 C86.7,983,74,970.4,58.6,970.4z M202.1,970.4c-15.4,0-28.1,12.7-28.1,28.1c0,15.4,12.7,28.1,28.1,28.1s28.1-12.7,28.1-28.1 C230.2,983,217.6,970.4,202.1,970.4z M130.4,986c-15.4,0-28.1,12.7-28.1,28.1c0,15.4,12.7,28.1,28.1,28.1s28.1-12.7,28.1-28.1 C158.5,998.6,145.8,986,130.4,986z M242.8,1110.6c0-0.1,0-17.9,0-18l-0.1-16.1c0-22.4-18.2-40.6-40.6-40.6 c-17.8,0-30,7.7-36.3,18.8c-2,3.5-3.4,7.3-4.5,11.1c-7.5-8.7-18.6-14.3-31-14.3s-23.5,5.6-31,14.3c-1.1-3.9-2.5-7.6-4.5-11.1 c-6.3-11.1-18.4-18.8-36.3-18.8c-22.4,0-40.6,18.2-40.6,40.6v46.8c0,3.4,2.8,6.2,6.2,6.2h12.5v31.2c0,3.4,2.8,6.2,6.2,6.2h31.2 c3.4,0,6.2-2.8,6.2-6.2v-31.2h9.4v9.4c0,3.4,2.8,6.2,6.2,6.2h12.5v31.2c0,3.4,2.8,6.2,6.2,6.2H146c3.4,0,6.2-2.8,6.2-6.2v-31.2 h12.5c3.4,0,6.2-2.8,6.2-6.2v-9.4h9.4v31.2c0,3.4,2.8,6.2,6.2,6.2h31.2c3.4,0,6.2-2.8,6.2-6.2v-31.2h12.5c3.4,0,6.3-2.7,6.3-6.2   V1110.6z"></path></g></svg>Cписок друзей</div>
               <div class="chatTabSetContainer">
                  <div class="HorizontalMiniSlider" style="height: 43.5px;">
                     <div class="HorizontalMiniSliderArrow Left">
                        <svg transform="" version="1.1" id="arrowBase" xmlns="http://www.w3.org/2000/svg" class="SVGIcon_Button SVGIcon_DoubleArrow" x="0px" y="0px" width="256px" height="256px" viewBox="0 0 256 256">
                           <polyline class="Arrow1" fill="none" stroke="#ffffff" stroke-width="23" stroke-linecap="round" stroke-miterlimit="10" points="135.65,21.667 30.081,127.235 137.18,234.333 "></polyline>
                           <polyline class="Arrow2" fill="none" stroke="#ffffff" stroke-width="23" stroke-linecap="round" stroke-miterlimit="10" points="224.389,21.667 118.821,127.235 225.92,234.333 "></polyline>
                        </svg>
                     </div>
                     <div class="HorizontalMiniSliderArrow Right">
                        <svg transform="" version="1.1" id="arrowBase" xmlns="http://www.w3.org/2000/svg" class="SVGIcon_Button SVGIcon_DoubleArrow" x="0px" y="0px" width="256px" height="256px" viewBox="0 0 256 256">
                           <polyline class="Arrow1" fill="none" stroke="#ffffff" stroke-width="23" stroke-linecap="round" stroke-miterlimit="10" points="135.65,21.667 30.081,127.235 137.18,234.333 "></polyline>
                           <polyline class="Arrow2" fill="none" stroke="#ffffff" stroke-width="23" stroke-linecap="round" stroke-miterlimit="10" points="224.389,21.667 118.821,127.235 225.92,234.333 "></polyline>
                        </svg>
                     </div>
                     <div class="HorizontalMiniSliderScroll chatTabList">
                        <div class="chatTabTransitionGroup" id="chat_section">
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="dropTargetBox"></div>
            </div>
            <div class="chatDialogs">
               <div data-activechat="true" class="DropTarget chatWindow MultiUserChat">
                  <div class="chatHeader"></div>
                  <div></div>
                  <div class="ChatRoomGroupDialog_contents">
                     <div class="ChatRoomGroup_MainAndChatEntry displayColumn">
                        <div class="ChatRoomGroup_Main_ContentAndMembers displayRow">
                           <div class="ChatRoomGroup_Main_Content Vertical ">
                              <div class="chatBody">
                                 <div class="chatStack displayRow GroupChatVisible">
                                    <div class="DropTarget chatHistoryAndMembers">
                                       <div></div>
                                       <div class="displayColumn fullWidth">
                                          <div class="displayRow minHeightZero">
                                             <div class="ChatRoomGroupDialog_history">
                                                <div class="ChatHistoryContainer">
                                                   <div class="friendsListInsetShadowCtn">
                                                      <div class="friendListInsetShadowTop"></div>
                                                   </div>
                                                   <div class="LoadingOlderMessages Hidden"><span>Загрузка предыдущих сообщений...</span></div>
                                                   <div class="chatHistoryScroll" id="scrool_down" tabindex="0">
                                                      <div class="chatHistory" id="chatHistory">
                                                      </div>
                                                   </div>
                                                   <div class="FriendChatTypingNotification">CS:GO fuck набирает сообщение...</div>
                                                   <div class="friendsListInsetShadowCtn">
                                                      <div class="friendListInsetShadowBottom"></div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="dropTargetBox"></div>
                                          </div>
                                          <div class="chatEntry">

                                             <div class="chatFileUploadProgressContainer hide"><div class="chatFileUploadProgressName"></div><div class="chatFileUploadProgressBarContainer DialogProgressBar_ProgressBarContainer"><div class="DialogProgressBar_Value" ></div></div></div>

                                             <form class="chatentry_chatEntryControls_2O_X7 compactableHeight">
                                                <textarea class="chatentry_chatTextarea_3e__5" id="textMsg" maxlength="255"></textarea>
                                                <button class="chatSubmitButton" onclick="sendchatmsg();" id="sendMsg" type="button" title="Отправить">
                                                   <svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" class="SVGIcon_Button SVGIcon_Submit" version="1.1" x="0px" y="0px" viewBox="0 0 100 100">
                                                      <g transform="translate(0,-952.36218)">
                                                         <path d="m 92.115057,974.14842 a 2.0001999,2.0001999 0 0 0 -1.96764,2.02965 l 0.0376,31.19553 -77.475501,0 16.161909,-15.73013 a 2.0002746,2.0002746 0 1 0 -2.790355,-2.8667 L 6.3913393,1007.9405 a 2.0001999,2.0001999 0 0 0 -0.0011,2.8646 l 19.6896957,19.2036 a 2.0002671,2.0002671 0 1 0 2.792551,-2.8646 l -16.170767,-15.771 79.153048,0 a 2.0001999,2.0001999 0 0 0 1.72959,-0.5437 2.0001999,2.0001999 0 0 0 0.0598,-0.058 2.0001999,2.0001999 0 0 0 0.54259,-1.7218 l -0.0388,-32.87638 a 2.0001999,2.0001999 0 0 0 -2.03297,-2.02522 z" fill="#FFFFFF" fill-opacity="1" fill-rule="evenodd" stroke="none" visibility="visible" display="inline" overflow="visible"></path>
                                                      </g>
                                                   </svg>
                                                </button>
                                             </form>
                                             <div class="chatentry_chatEntryActionsContainer_WZNUD compactableHeight"><div class="chatentry_chatEntryActionsGroup_15mWd"><button class="chatSubmitButton EmbedButton" id="EmbedButton" type="button" title="Отправить вложение"><svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" class="SVGIcon_Button SVGIcon_Paperclip" x="0px" y="0px" width="256px" height="256px" viewBox="0 0 256 256"><path fill="none" stroke-width="10" stroke-linecap="round" stroke-miterlimit="10" d="M167.768,62.647 l-0.012,123.052c0,24.729-19.334,44.856-43.096,44.866c-23.765-0.006-43.099-20.134-43.096-44.872L81.557,48.851 c0-15.345,14.483-27.827,29.83-27.83c15.342,0.003,27.827,12.488,27.833,27.833l-0.002,139.245 c0.003,6.376-8.546,12.925-14.925,12.925c0,0-13.929-0.166-13.929-12.928l0.003-124.839"></path></svg></button>
                                                <form action="/chat/sendphoto/" method="post" id="my_form" enctype="multipart/form-data">
                                                   <input type="file" name="img" id="sendImg" hidden="">
                                                   <input type="submit" id="submit" value="Отправить" hidden="" readonly="">
                                                </form>
                                             </div></div>
                                             <div class="disconnectBlocker compactableHeight"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="singleWindowFocusBar"></div>
      </div>
   </div>
</div>
<?php }
}
