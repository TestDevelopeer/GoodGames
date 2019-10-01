<?php
header('Access-Control-Allow-Origin: *');
include_once '../models/UserModel.php';
include_once '../models/ChatModel.php';

define(ADRES, 'http://192.168.1.101');

function indexAction($smarty){
	$chatArUser = $_SESSION['chat']['arUser'];
	$chatRsUser = $_SESSION['chat']['rsUser'];
	
	$rsFriends = getFriendList($chatArUser['id_user']);
	
	if($rsFriends){
	    foreach ($rsFriends as $friend) {
	      if($friend['parent_user'] == $chatArUser['id_user']){
	        $user = getUserById($friend['child_user']);
	      } else {
	        $user = getUserById($friend['parent_user']);
	      }

	      $rsFriendsUsers[$friend['id_list']] = $user;
	    }
  	}

  	if($rsFriendsUsers){
    foreach ($rsFriendsUsers as $user) {
      $rsLevelAccept[$user['id_user']] = getLevel($user['user_level']);
      $rsPlusAccept = $user['user_level'] - $rsLevelAccept[$user['id_user']][0]['cnt_level'];
      $rsLevelPlusAccept[$user['id_user']] = getLevelPlus($rsPlusAccept);

      $rsHistory[$user['id_user']] = getlastpay($user['id_user']);
      if($rsHistory){
      	foreach ($rsHistory[$user['id_user']] as $history) {
	      	$cntUser[$user['id_user']]['cnt_games'] = $cntUser[$user['id_user']]['cnt_games'] + $history['order_games_cnt'];
	      	$cntUser[$user['id_user']]['id_user'] = $user['id_user'];
      	}
      }
    }
  }

  if($cntUser){
  	foreach ($cntUser as $user) {
	  	$badge = getBadge($user['cnt_games']);
	  	$rsGetBadge[$user['id_user']] = $badge[0];
  	}
  }

  	$cntOnlineFriends = 0;
  	$cntOfflineFriends = 0;

	$smarty->assign('chatArUser', $chatArUser);
	$smarty->assign('chatRsUser', $chatRsUser);
	$smarty->assign('rsFriendsUsers', $rsFriendsUsers);
	$smarty->assign('cntOnlineFriends', $cntOnlineFriends);
	$smarty->assign('cntOfflineFriends', $cntOfflineFriends);
	$smarty->assign('rsLevelAccept', $rsLevelAccept);
	$smarty->assign('rsLevelPlusAccept', $rsLevelPlusAccept);
	$smarty->assign('rsGetBadge', $rsGetBadge);
	$smarty->assign('cntUserGames', $cntUser);

	if($chatRsUser['user_name']){
		$smarty->assign('pageTitle', $chatRsUser['user_name']);
	} else {
		$smarty->assign('pageTitle', 'Чат');
	}

	$smarty->assign('ipAdres', ADRES);

	loadTemplate($smarty, 'chat/head');
	loadTemplate($smarty, 'chat/header');
	loadTemplate($smarty, 'chat/chat');
	loadTemplate($smarty, 'chat/footer');
}

function initusersAction(){
	$_SESSION['chat']['arUser'] = getUserForChat($_POST['arUser']);
	$_SESSION['chat']['rsUser'] = getUserForChat($_POST['rsUser']);

	$res['success'] = 1;

	echo json_encode($res);
}

function changechatAction(){
	$arUser = $_POST['arUser'];
	$rsUser = $_POST['referal'];

	$ChatRoom = isChatRoom($arUser, $rsUser);
	$_SESSION['chat']['arUser'] = getUserForChat($arUser);
	$_SESSION['chat']['rsUser'] = getUserForChat($rsUser);
	$_SESSION['chat']['chatRoom'] = $ChatRoom;

	$OnlineUsers = getOnlineUsers();
	foreach ($OnlineUsers as $user) {
		$rsOnlineUsers[$user['user_id']] = $user;
	}

	$mysqli = $GLOBALS["db"];
	$mysqli -> query("SET NAMES 'utf8'") or die ("Ошибка соединения с базой!");
	if(!empty($_POST["referal"])){ //Принимаем данные
	    $referal = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["referal"]))));
	    $db_referal = $mysqli -> query("SELECT * from `users` search WHERE (`id_user` = '{$referal}')")
	    or die('Ошибка №'.__LINE__.'<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');
	    $row = $db_referal -> fetch_array();
	        echo "\n
							<div class='chatTab no-drag active' draggable='true'>
                              <div class='chatTabHighlight'></div>
                              <div class='ChatTabContent'>";
                              if($rsOnlineUsers[$row['id_user']]){
                                echo "<div class='friend online'>";
                              } else {
                              	echo "<div class='friend offline'>";
                              }
                                   echo "<div class='steamavatar_avatarHolder_1G7LI avatarHolder no-drag Medium'>
                                       <div class='steamavatar_avatarStatus_1Pwr6 avatarStatus'></div>";
                                       if($row['user_have_photo'] == 1){
                                       	echo "<img class='steamavatar_avatar_f2laR avatar' src='".ADRES."/www/images/users/{$row['id_user']}/main.jpg' draggable='false'>";
                                   		} else {
                                   			echo "<img class='steamavatar_avatar_f2laR avatar' src='".ADRES."/www/images/users/default/default.png' draggable='false'>";
                                   		}

                                    echo "</div>
                                    <div class='labelHolder online personanameandstatus_noContextMenu_35VFv personanameandstatus_twoLine_2wZNn'>
                                       <div class='personanameandstatus_statusAndName_9U-hi'>
                                          <div class='personanameandstatus_playerName_1uxaf'>{$row['user_name']}</div>
                                       </div>
                                       <div class='personanameandstatus_richPresenceContainer_21cNf'>
                                          	<div class='personanameandstatus_gameName_qvibF personanameandstatus_richPresenceLabel_3Q6g1 no-drag'>";
                                          	if($rsOnlineUsers[$row['id_user']]){
                                          		echo "В сети";
                                          	} else {
                                          		echo "Не в сети";
                                          	}
                                          	echo "</div>
                                          </div>
                                    </div>
                                 </div>
                              </div>
                              <div class='TabRightContainer'>
                                 <div title='Закрыть вкладку' class='chatTabClose closeButton' onclick='closechat()'>
                                    <svg version='1.1' id='Layer_2' xmlns='http://www.w3.org/2000/svg' class='SVGIcon_Button SVGIcon_X_Line' x='0px' y='0px' width='256px' height='256px' viewBox='0 0 256 256'>
                                       <line fill='none' stroke='#ffffff' stroke-width='45' stroke-miterlimit='10' x1='212' y1='212' x2='44' y2='44'></line>
                                       <line fill='none' stroke='#ffffff' stroke-width='45' stroke-miterlimit='10' x1='44' y1='212' x2='212' y2='44'></line>
                                    </svg>
                                 </div>
                              </div>
                           </div>";
	}

}
function multi_unique($array) {
    foreach ($array as $k=>$na)
        $new[$k] = serialize($na);
    $uniq = array_unique($new);
    foreach($uniq as $k=>$ser)
        $new1[$k] = unserialize($ser);
    return ($new1);
}

function showchatmessagesAction($smarty){
	if(isset($_SESSION['chat']['chatRoom'])){
	$html['success'] = 1;
	$room = $_SESSION['chat']['chatRoom']['id_room'];

	$idLastMsg = $_POST['last_msg'];
	$getLastMessage = lastMsg($room);

	if($idLastMsg != null){
		if($getLastMessage['id_message'] == $idLastMsg){
			$html['isLastMsg'] = true;
		} else {
			$html['isLastMsg'] = false;
		}
	} else {
		$html['isLastMsg'] = false;	
	}
	if($html['isLastMsg'] == false){
	$rsMessages = getMessagesByRoom($room);
	if($rsMessages){
		
	foreach ($rsMessages as $msg) {
		$rsChat[$msg['id_message']]['user'] = getUserForChat($msg['from_user']);
		$rsChat[$msg['id_message']]['id'] = $msg['id_message'];
		$rsChat[$msg['id_message']]['message'] = $msg['text_message'];
		$rsChat[$msg['id_message']]['image'] = $msg['image_message'];
		$rsChat[$msg['id_message']]['status1'] = $msg['is_img_hide_first_user'];
		$rsChat[$msg['id_message']]['status2'] = $msg['is_img_hide_second_user'];
		$time = explode(' ',$msg['time_message']);
		$time = substr($time[1], 0, 5);
		$rsChat[$msg['id_message']]['time'] = $time;
		$rsChat[$msg['id_message']]['date'] = $msg['date_message'];
		$rsChat[$msg['id_message']]['status'] = $msg['status_message'];

		
		$Times[$msg['id_message']]['time'] = $msg['date_message'];
	}

	$OnlineUsers = getOnlineUsers();
	foreach ($OnlineUsers as $user) {
		$rsOnlineUsers[$user['user_id']] = $user;
	}
	$countMsg = count($rsChat);
	$i = 0;
	
	
	$chatTimes = multi_unique($Times);

	foreach (array_reverse($chatTimes) as $date) {
		$html['msg'] .= "<div class='msg timeDivision'>
	        										<div class='preHorizDivider'></div>{$date['time']}<div class='horizDivider'></div></div>";
	   foreach (array_reverse($rsChat) as $chat) {
	        				
	        if($date['time'] === $chat['date']){
	        	$i++;
	        		if($i == $countMsg){
	    						$html['msg'] .= "<div class='ChatMessageBlock SingletonMsg' id='last_msg' data-last='{$chat['id']}'>";
	    					} else {
	    						$html['msg'] .= "<div class='ChatMessageBlock SingletonMsg'>";
	    					}
							
						$html['msg'] .= "\n
								<input type='text' readonly='' hidden='' name='room_id' value='{$room}'>
                                <div class='ChatSpeaker ChatRoomSpeaker SpeakerLineBreak isCurrentUser' data-copystyle='speaker allow-embedded-newlines'>";
                                if($rsOnlineUsers[$chat['user']['id_user']]){
                                   $html['msg'] .= "<div class='speaker online '>";
                                } else {
                                	$html['msg'] .= "<div class='speaker offline '>";
                                }
                                   $html['msg'] .= "<div class='speakerHoverArea '>";
                                    if($chat['user']['user_have_photo'] == 1){
                                    	$html['msg'] .= "<img class='avatar speakerAvatar' src='".ADRES."/www/images/users/{$chat['user']['id_user']}/main.jpg'>";
                                	} else {
                                		$html['msg'] .= "<img class='avatar speakerAvatar' src='".ADRES."/www/images/users/default/default.png'>";
                                	}
                                    $html['msg'] .= "<div class='speakerStatus'></div>";
                                if($rsOnlineUsers[$chat['user']['id_user']]){
                                    $html['msg'] .= "<div class='speakerName messages_SpeakerName_Online_2nKVN'>{$chat['user']['user_name']}</div>";
                                } else {
                                	$html['msg'] .= "<div class='speakerName messages_SpeakerName_Offline_2nKVN'>{$chat['user']['user_name']}</div>";
                                }
                                $html['msg'] .= "</div>
                                    <div class='speakerTimeStamp'>{$chat['time']}</div>
                                     </div>
                                 </div>
                                <div class='msg isCurrentUser'>
                                <div class='msgText '>";
                                if($chat['message'] != ''){
                                	$html['msg'] .= "<span>{$chat['message']}</span>";
                                }
                                if($chat['image'] != ''){
                                	$html['msg'] .= " <div class='BBCodeResizableComponent chatImageContainer"; if($chat['status1'] == $_SESSION['chat']['arUser']['id_user'] || $chat['status2'] == $_SESSION['chat']['arUser']['id_user']){ $html['msg'] .= " Minimized"; } 
                                	$html['msg'] .= "' id='img-msg_{$chat['id']}' data-copystyle='block'><div class='BBCodeCollapsed' onclick='showImg({$chat['id']})'>Изображение скрыто</div><img class='chatImageFull BBCodeResizableElement'"; if($chat['status1'] != $_SESSION['chat']['arUser']['id_user'] || $chat['status2'] != $_SESSION['chat']['arUser']['id_user']){ $html['msg'] .= " src='{$chat['image']}'"; } 
                                	$html['msg'] .= "srcset='' style='display: block;'><div class='BBCodeCollapseControl' onclick='hideImg({$chat['id']})' title='Скрыть изображение в чате'><svg fill='#FFFFFF' xmlns='http://www.w3.org/2000/svg' class='SVGIcon_Button SVGIcon_X' version='1.1' x='0px' y='0px' viewBox='-165 95 100 100'><g><polygon points='-74.9,117.2 -102.2,145 -74.9,172.8 -89.1,186.8 -116.2,159.3 -143.2,186.8 -157.5,172.8 -130.2,145 -157.5,117.2 -143.2,103.2 -116.2,130.7 -89.1,103.2'></polygon></g></svg></div></div>";
                                }
                                	if($chat['user']['id_user'] == $_SESSION['chat']['arUser']['id_user']){
	                                	if($chat['status'] == 0){
	                                		$html['msg'] .= "<span class='speakerTimeStamp'>Непрочитано</span>";
	                                	} else {
	                                		$html['msg'] .= "<span class='speakerTimeStamp'>Прочитано</span>";
	                                	}
                                	}
                                $html['msg'] .= "</div>
                                </div>
                                </div>";
	        }

	    }
	}

	 } else {
	 	$html['msg'] = '';
	 }
	}

	$isFriend = checkFriend($_SESSION['chat']['rsUser']['id_user'], $_SESSION['chat']['arUser']['id_user']);
	if(!$isFriend || $isFriend['list_status'] == 0){
		$html['isFriend'] = "<div class='msg ChatMessageErrorSending isCurrentUser'><div class='ChatMessageErrorSendingAlert'>Вы не можете отправлять сообщения пользователям, которых нет в списке ваших друзей.</div></div>";
	} else {
		$html['isFriend'] = '';
	}

	$smarty->assign('isMsg', $_SESSION['chat']['chatRoom']);
	} else {
		$html['success'] = 0;
	}

	$res = json_encode($html);	
	echo $res;
}

function closechatAction(){
	$_SESSION['chat'] = '';
	$_SESSION['chat']['arUser'] = getUserForChat($_SESSION['user']['id_user']);
	$res['success'] = 1;
	echo json_encode($res);
}

function sendchatmsgAction(){
	$text = $_POST['text'];
	$base64img = '';
	$arr = [
	      'января',
	      'февраля',
	      'марта',
	      'апреля',
	      'мая',
	      'июня',
	      'июля',
	      'августа',
	      'сентября',
	      'октября',
	      'ноября',
	      'декабря'
	    ];
	$month = date('n')-1;
	$dateSort = date('d '.$arr[$month].' Y'.' г.');
	$dateSort = substr($dateSort, 1);

	$time = date('Y-m-d H:i:s');
	$room = $_SESSION['chat']['chatRoom']['id_room'];
	$arUser = $_SESSION['chat']['arUser']['id_user'];
	$arUserName = $_SESSION['chat']['arUser']['user_name'];
	$rsUser = $_SESSION['chat']['rsUser']['id_user'];
	$rs = sendChatMsg($room, $arUser, $rsUser, $text, $base64img, $time, $dateSort);
	if($rs){
		$res['success'] = 1;
		$res['rsUser'] = $rsUser;
		$res['arName'] = $arUserName;
		$res['message'] = $text;
	} else {
		$res['success'] = 0;
	}

	echo json_encode($res);
}

function sendphotoAction(){
	if(!empty($_FILES['img'])){
		$path = $_FILES['img']['tmp_name'];
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64img = 'data:image/' . $type . ';base64,' . base64_encode($data);
		$text = '';
		$arr = [
		      'января',
		      'февраля',
		      'марта',
		      'апреля',
		      'мая',
		      'июня',
		      'июля',
		      'августа',
		      'сентября',
		      'октября',
		      'ноября',
		      'декабря'
		    ];
		$month = date('n')-1;
		$dateSort = date('d '.$arr[$month].' Y'.' г.');
		$dateSort = substr($dateSort, 1);
		$time = date('Y-m-d H:i:s');
		$room = $_SESSION['chat']['chatRoom']['id_room'];
		$arUser = $_SESSION['chat']['arUser']['id_user'];
		$arUserName = $_SESSION['chat']['arUser']['user_name'];
		$rsUser = $_SESSION['chat']['rsUser']['id_user'];
		$rs = sendChatMsg($room, $arUser, $rsUser, $text, $base64img, $time, $dateSort);
		$message = 'Изображение';
		  $response = sendMessage($rsUser, $arUserName, $message);
		  $return["allresponses"] = $response;
		  $return = json_encode( $return);
		  
		  print("\n\nJSON received:\n");
		  print($return);
		  print("\n");
	}
}

function sendMessage($user, $name, $message){
    $content = array(
      "en" => $message
      );
    
  $headings = array(
      "en" => $name
  );

    $fields = array(
      'app_id' => "b59402bd-ffe5-47d4-8688-3c8cfac9dd98",
      'filters' => array(array("field" => "tag", "key" => "id", "relation" => "=", "value" => $user)),
      'contents' => $content,
      'headings' => $headings
    );
    
    $fields = json_encode($fields);
      print("\nJSON sent:\n");
      print($fields);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                           'Authorization: Basic Njk3Njg1ZmUtMTlhYy00NmIxLTg5ZmEtZWQ3ZTk3OTRkODE4'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);
  }

function checknoreadmsgAction(){
	$date = date('Y-m-d H:i:s');
	$dateString = strtotime($date);
	$wine = $dateString - 2.2;
	
	$arUser = $_SESSION['chat']['arUser']['id_user'];
	$rsRooms = getRoomsByUser($arUser);
	
	foreach ($rsRooms as $room){
		if($room['arUser_room'] != $arUser){
			$msges[$room['arUser_room']]['id_user'] = $room['arUser_room'];
			$msges[$room['rsUser_room']]['aRid_user'] = $room['rsUser_room'];
			$msges[$room['arUser_room']]['cnt_msg'] = count(getNoReadMsg($room['id_room'], $arUser));

			$time = getTimeMsg($room['id_room'], $arUser);
			$timeString = strtotime($time['time_message']);
			if($wine < $timeString){
				$msges[$room['arUser_room']]['status'] = 1;
			} else {
				$msges[$room['arUser_room']]['status'] = 0;
			}
		} else {
			$msges[$room['rsUser_room']]['id_user'] = $room['rsUser_room'];
			$msges[$room['rsUser_room']]['aRid_user'] = $room['arUser_room'];
			$msges[$room['rsUser_room']]['cnt_msg'] = count(getNoReadMsg($room['id_room'], $arUser));

			$time = getTimeMsg($room['id_room'], $arUser);
			$timeString = strtotime($time['time_message']);
			if($wine < $timeString){
				$msges[$room['rsUser_room']]['status'] = 1;
			} else {
				$msges[$room['rsUser_room']]['status'] = 0;
			}
		}
	}
		
		
	$res['success'] = 1;
	$res['message'] = $msges;
		
	
	echo json_encode($res);
}

function changetitleAction(){
	$user = $_POST['user'];
	$rs = getUserById($user);

	if($rs){
		$res['success'] = 1;
		$res['message'] = $rs['user_name'];
	} else {
		$res['success'] = 0;
	}

	echo json_encode($res);
}

function searchfriendsAction(){
	if($_POST){
		$userName = $_POST['userName'];

		$chatArUser = $_SESSION['chat']['arUser'];
		$rsFriends = getFriendList($chatArUser['id_user']);
	
		if($rsFriends){
		    foreach ($rsFriends as $friend) {
		      if($friend['parent_user'] == $chatArUser['id_user']){
		        $user = getUserById($friend['child_user']);
		      } else {
		        $user = getUserById($friend['parent_user']);
		      }
		      $rsFriendsUsers[$friend['id_list']] = $user;
		    }
	  	}

	  	foreach ($rsFriendsUsers as $friend) {
	  		if (stripos($friend['user_name'], $userName) !== false) {
			    $rsFrUsers[] = $friend;
			}
	  	}
	  	$OnlineUsers = getOnlineUsers();
		foreach ($OnlineUsers as $user) {
			$rsOnlineUsers[$user['user_id']] = $user;
		}
		if($rsFrUsers){
		foreach ($rsFrUsers as $user) {
			echo "<div class='friendCategoryContainer' onclick='showSetupMenu({$user['id_user']});'>

                <div class='friend"; if ($rsOnlineUsers[$user['id_user']]) {echo " online ";} else {echo " offline ";} echo "friendStatusHover isFriendMenu_{$user['id_user']}' draggable='true'>
                    <div class='steamavatar_avatarHolder_1G7LI avatarHolder no-drag Medium'>
                        <div class='steamavatar_avatarStatus_1Pwr6 avatarStatus'></div>";
                        if($user['user_have_photo'] == 1){
                        	echo "<img class='steamavatar_avatar_f2laR avatar' src='".ADRES."/www/images/users/{$user['id_user']}/main.jpg' draggable='false'>";
                        }
                        else {
                        	echo "<img class='steamavatar_avatar_f2laR avatar' src='".ADRES."/www/images/users/default/default.png' draggable='false'>";
                        }
                        
                    echo "</div>
                    <div class='labelHolder"; if ($rsOnlineUsers[$user['id_user']]) {echo " online ";} else {echo " offline ";} echo "personanameandstatus_twoLine_2wZNn'>
                       	<div class='personanameandstatus_statusAndName_9U-hi'>
                          	<div class='personanameandstatus_playerName_1uxaf'>{$user['user_name']}</div>
                          	<div class='ContextMenuButton'><svg xmlns='http://www.w3.org/2000/svg' class='SVGIcon_Button SVGIcon_DownArrowContextMenu' data-name='Layer 1' viewBox='0 0 128 128' x='0px' y='0px'><polygon points='50 59.49 13.21 22.89 4.74 31.39 50 76.41 95.26 31.39 86.79 22.89 50 59.49'></polygon></svg></div>
                    	</div>
                    	<div class='personanameandstatus_richPresenceContainer_21cNf'>
                    	   <div class='personanameandstatus_gameName_qvibF personanameandstatus_richPresenceLabel_3Q6g1 no-drag'>В сети</div>
                    	</div>
                            </div>
                            <div id='no_read_{$user['id_user']}' class='hide'>
	                            <div class='unreadFriend'>
	                            	<div class='FriendMessageCount' id='cnt_read_{$user['id_user']}'>1</div>
	                            </div>
                            </div>
                            </div>
                            <div class='contextMenu ContextMenuFocusContainer setup_menu_{$user['id_user']}' tabindex='0' style='visibility: visible; left: 114px;'><div class='contextMenuContents friendsContextMenu'><div class='contextMenuItem' onclick='changeChat({$user['id_user']}, {$chatArUser['id_user']});'>Отправить сообщение</div><div class='contextMenuItem'><a href='/user/profile/{$user['id_user']}/' target='_blank'>Открыть профиль</a></div><div class='contextMenuItem'><a href='#' onclick='deletefromfriend({$user['id_user']});'>Удалить из друзей</a></div></div></div>
                </div>";
	    }
	} else {
		echo "<div class='friendSearchNoResultsContainer'>
				<div>нет результатов по запросу «{$userName}»</div>
				<div class='searchSteamSuggestion'>Не нашли того, кого искали?</div>
				<form action='/user/searchusers/' method='POST' target='_blank'>
					<input name='user_name' class='friends_search_text_box search_your_friends' value='{$userName}' autocomplete='off' readonly hidden>
					<input type='submit' class='searchMore' value='Поиск среди всех пользователей'>
				</form>
			</div>";
	}
	}
}

function showimgAction(){
	$user = $_SESSION['chat']['arUser']['id_user'];
	$idMsg = $_POST['message'];
	$message = getMsgById($idMsg);
	if($message['from_user'] == $user){
		$status = 'from_user';
	} else if($message['to_user'] == $user){
		$status = 'to_user';
	}
	$rs = addStatusImg($idMsg, $status, 0);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}

	echo json_encode($res);
}

function hideimgAction(){
	$user = $_SESSION['chat']['arUser']['id_user'];
	$idMsg = $_POST['message'];
	$message = getMsgById($idMsg);
	if($message['from_user'] == $user){
		$status = 'from_user';
	} else if($message['to_user'] == $user){
		$status = 'to_user';
	}
	$rs = addStatusImg($idMsg, $status, $user);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}

	echo json_encode($res);
}

function updateonlinefriendsAction(){
	if(!$_POST['arUser']){
		$chatArUser = $_SESSION['chat']['arUser'];
	} else {
		$_SESSION['chat']['arUser'] = $_POST['arUser'];
		$chatArUser = $_POST['arUser'];
	}
	
	$rsFriends = getFriendList($chatArUser['id_user']);
	
	if($rsFriends){
	    foreach ($rsFriends as $friend) {
	      if($friend['parent_user'] == $chatArUser['id_user']){
	        $user = getUserById($friend['child_user']);
	      } else {
	        $user = getUserById($friend['parent_user']);
	      }

	      $rsFriendsUsers[$friend['id_list']] = $user;
	    }
  	}


  	if($rsFriendsUsers){
    foreach ($rsFriendsUsers as $user) {
      $rsLevelAccept[$user['id_user']] = getLevel($user['user_level']);
      $rsPlusAccept = $user['user_level'] - $rsLevelAccept[$user['id_user']][0]['cnt_level'];
      $rsLevelPlusAccept[$user['id_user']] = getLevelPlus($rsPlusAccept);

      $rsHistory[$user['id_user']] = getlastpay($user['id_user']);
      if($rsHistory){
      	foreach ($rsHistory[$user['id_user']] as $history) {
	      	$cntUser[$user['id_user']]['cnt_games'] = $cntUser[$user['id_user']]['cnt_games'] + $history['order_games_cnt'];
	      	$cntUser[$user['id_user']]['id_user'] = $user['id_user'];
      	}
      }
    }
  }

  if($cntUser){
  	foreach ($cntUser as $user) {
	  	$badge = getBadge($user['cnt_games']);
	  	$rsGetBadge[$user['id_user']] = $badge[0];
  	}
  }

    $OnlineUsers = getOnlineUsers();
	foreach ($OnlineUsers as $user) {
		$rsOnlineUsers[$user['user_id']] = $user;
	}

	foreach ($rsFriendsUsers as $friend) {
		if ($rsOnlineUsers[$friend['id_user']]){
			$rsFriendsUsersOnline[] = $friend;
		} else {
			$rsFriendsUsersOffline[] = $friend;
		}
	}

	$cntOnline = count($rsFriendsUsersOnline);
	$cntOffline = count($rsFriendsUsersOffline);
	$res['cnt_online'] = $cntOnline;
	$res['cnt_offline'] = $cntOffline;
	

	/*$lastOnlineUser = $_POST['last_user'];
	if($lastOnlineUser != null){
		if($rsFriendsUsersOnline[0]['id_user'] == $lastOnlineUser){
			$res['isOnline'] = 0;
		} else {
			$res['isOnline'] = 1;
		}
	} else {
		if(!$rsFriendsUsersOnline){
			$res['isOnline'] = 'empty';
		} else {
			$res['isOnline'] = 1;
		}
	}*/

	$j = 0;
					if($rsFriendsUsersOnline){
						foreach ($rsFriendsUsersOnline as $friend) {
								$j++;
								
								if($j == 1){
									$res['online'] .= "<div class='friendCategoryContainer user_container' id='last_user' data-user='{$friend['id_user']}' data-aruser='{$chatArUser['id_user']}'>";
								} else {
									$res['online'] .= "<div class='friendCategoryContainer user_container' data-user='{$friend['id_user']}' data-aruser='{$chatArUser['id_user']}'>";
								}
							
                                 $res['online'] .= "<div class='friend online friendStatusHover isFriendMenu_{$friend['id_user']}' draggable='true'>
                                    <div class='steamavatar_avatarHolder_1G7LI avatarHolder no-drag Medium hoverPhoto' data-id='{$friend['id_user']}'>
                                       <div class='steamavatar_avatarStatus_1Pwr6 avatarStatus'></div>";
                                       if ($friend['user_have_photo'] == 1)
                                       	{
                                       	$res['online'] .= "<img class='steamavatar_avatar_f2laR avatar' src='".ADRES."/www/images/users/{$friend['id_user']}/main.jpg' draggable='false'>";
                                       	}
                                       else
                                       	{
                                       	$res['online'] .= "<img class='steamavatar_avatar_f2laR avatar' src='".ADRES."/www/images/users/default/default.png' draggable='false'>";
                                       	}
                                       	
                                    $res['online'] .= "</div>
                                    <div class='friendHover miniProfileHover hoverposition_HoverPosition_3gYNB hoverposition_ready_3d6MD hide' id='profile_card_{$friend['id_user']}' style='left: 45.34px;'>
                                       <div class='miniProfileHoverInner miniprofile_miniProfile_s5zcg'>
                                          <div class='miniprofile_miniProfileContent_25Sge miniprofile_notInOrWatchingGame_3AIC2'>
                                             <div class='miniprofile_miniProfileBackground_3gfFJ'>";
                                                if ($friend['user_have_photo'] == 1)
                                                {
                                                $res['online'] .= "<img class='miniprofile_miniProfileBackgroundBlur_G000o' src='".ADRES."/www/images/users/{$friend['id_user']}/main.jpg'>";
                                                }
                                                else
                                                {
                                                $res['online'] .= "<img class='miniprofile_miniProfileBackgroundBlur_G000o' src='".ADRES."/www/images/users/default/default.png'>";
                                                }
                                             $res['online'] .= "</div>
                                             <div class='miniprofile_miniProfileHeader_3oBIW'>
                                                <div class='miniprofile_miniProfilePlayer_3cN6K online online'>
                                                   <div class='steamavatar_avatarHolder_1G7LI avatarHolder no-drag X-Large miniprofile_playerAvatar_1dzWG'>
                                                      <div class='steamavatar_avatarStatus_1Pwr6 avatarStatus bottom'></div>";
                                                      if ($friend['user_have_photo'] == 1)
                                                      {
                                                      $res['online'] .= "<img class='steamavatar_avatar_f2laR avatar online-hover-card' src='".ADRES."/www/images/users/{$friend['id_user']}/main.jpg' draggable='false'>";
                                                      }
                                                      else
                                                      {
                                                      $res['online'] .= "<img class='steamavatar_avatar_f2laR avatar online-hover-card' src='".ADRES."/www/images/users/default/default.png' draggable='false'>";
                                                      }
                                                   $res['online'] .= "</div>
                                                   <div class='miniprofile_playerContent_PV11V'>
                                                      <div>
                                                         <div class='miniprofile_persona_1Z3Ey'>
                                                            <div class='miniprofile_personaName_W3QjS miniprofile_nickName_2E8Iz'>
                                                               <div class='miniprofile_personaNameLabel_390p4'>{$friend['user_name']}</div>
                                                            </div>
                                                            <div class='miniprofile_awayStatusLabel_2UzRy'>Не в сети</div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class='miniprofile_miniProfileBottom_3Agb6'>";
                                                if ($rsGetBadge[$friend['id_user']])
                                                {
                                                $res['online'] .= "<div class='miniprofile_miniProfileFeaturedContainer_3ljT4'>
	                                                   <div class='miniprofile_favoriteBadgeIcon_icnrU'><img src='".ADRES."/www/templates/default/assets/images/profiles/badges/{$rsGetBadge[$friend['id_user']]['cnt_games']}_80.png' class='miniprofile_badgeIcon_2TBf0'></div>
	                                                   <div class='miniprofile_featuredLabels_1dGw1'>
	                                                      <div class='miniprofile_featuredTitle_2_2RA'>{$rsGetBadge[$friend['id_user']]['name_badge']}</div>
	                                                      <div class='miniprofile_featuredSubTitle_2p8kJ'>За покупку {$cntUser[$friend['id_user']]['cnt_games']} игр</div>
	                                                   </div>
                                                	</div>";
                                            	}
                                                else
                                                {
                                                $res['online'] .= "<div class='miniprofile_miniProfileFeaturedContainer_3ljT4'>
	                                                   <div class='miniprofile_favoriteBadgeIcon_icnrU'><img src='".ADRES."/www/templates/default/assets/images/profiles/badges/ico_leaderboards.png' class='miniprofile_badgeIcon_2TBf0'></div>
	                                                   <div class='miniprofile_featuredLabels_1dGw1'>
	                                                      <div class='miniprofile_featuredTitle_2_2RA'>Pillar of Community</div>
	                                                      <div class='miniprofile_featuredSubTitle_2p8kJ'>За регистрацию</div>
	                                                   </div>
                                                	</div>";
                                                }
                                                
                                                $res['online'] .= "<div class='miniprofile_miniProfileFeaturedContainer_3ljT4'>
                                                   <div class='friendPlayerLevel lvl_";
                                                   if ($rsLevelAccept[$friend['id_user']][0]['cnt_level'] >= 5000)
                                                   	{
                                                   		$res['online'] .= "4900 ";
                                                   	}
                                                   	else
                                                   	{
                                                   		$res['online'] .= "{$rsLevelAccept[$friend['id_user']][0]['cnt_level']} ";
                                                   	}
                                                   	if ($rsLevelPlusAccept[$friend['id_user']]) 
                                                   	{
                                                   		$res['online'] .= "lvl_plus_{$rsLevelPlusAccept[$friend['id_user']][0]['cnt_lvl_plus']}";
                                                   	}
                                                   	$res['online'] .= "'><span class='miniprofile_friendPlayerLevelNum_2Ni_1'>{$friend['user_level']}</span></div>
                                                   <div class='miniprofile_featuredLabels_1dGw1'>
                                                      <div class='miniprofile_featuredTitle_2_2RA'>Уровень Steam </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class='miniprofile_mutualFriends_36Vl4'>
                                                <div></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>


                                    <div class='labelHolder online personanameandstatus_twoLine_2wZNn'>
                                       <div class='personanameandstatus_statusAndName_9U-hi'>
                                          <div class='personanameandstatus_playerName_1uxaf'>{$friend['user_name']}</div>
                                          <div class='ContextMenuButton' data-user='{$friend['id_user']}'><svg xmlns='http://www.w3.org/2000/svg' class='SVGIcon_Button SVGIcon_DownArrowContextMenu' data-name='Layer 1' viewBox='0 0 128 128' x='0px' y='0px'><polygon points='50 59.49 13.21 22.89 4.74 31.39 50 76.41 95.26 31.39 86.79 22.89 50 59.49'></polygon></svg></div>
                                       </div>
                                       <div class='personanameandstatus_richPresenceContainer_21cNf'>
                                          <div class='personanameandstatus_gameName_qvibF personanameandstatus_richPresenceLabel_3Q6g1 no-drag'>В сети</div>
                                       </div>
                                    </div>
                                    <div id='no_read_{$friend['id_user']}' class='hide'>
	                                    <div class='unreadFriend'>
	                                    	<div class='FriendMessageCount' id='cnt_read_{$friend['id_user']}'>1</div>
	                                    </div>
                                    </div>
                                 </div>
                                 <div class='contextMenu ContextMenuFocusContainer setup_menu_{$friend['id_user']}' tabindex='0' style='visibility: visible; left: 114px;'><div class='contextMenuContents friendsContextMenu'><div class='contextMenuItem' onclick='changeChat({$friend['id_user']}, {$chatArUser['id_user']});'>Отправить сообщение</div><div class='contextMenuItem'><a href='/user/profile/{$friend['id_user']}/' target='_blank'>Открыть профиль</a></div><div class='contextMenuItem'><a href='#' onclick='deletefromfriend({$friend['id_user']});'>Удалить из друзей</a></div></div></div>
                              </div>";
							}
						}
					$j = 0;
					if($rsFriendsUsersOffline){
						$res['isOffline'] = 1;
						foreach ($rsFriendsUsersOffline as $friend) {
								$j++;
								
								if($j == 1){
									$res['offline'] .= "<div class='friendCategoryContainer user_container' id='last_user' data-user='{$friend['id_user']}' data-aruser='{$chatArUser['id_user']}'>";
								} else {
									$res['offline'] .= "<div class='friendCategoryContainer user_container' data-user='{$friend['id_user']}' data-aruser='{$chatArUser['id_user']}'>";
								}
							
                                 $res['offline'] .= "<div class='friend offline friendStatusHover isFriendMenu_{$friend['id_user']}' draggable='true'>
                                    <div class='steamavatar_avatarHolder_1G7LI avatarHolder no-drag Medium hoverPhoto' data-id='{$friend['id_user']}'>
                                       <div class='steamavatar_avatarStatus_1Pwr6 avatarStatus'></div>";
                                       if ($friend['user_have_photo'] == 1)
                                       	{
                                       	$res['offline'] .= "<img class='steamavatar_avatar_f2laR avatar' src='".ADRES."/www/images/users/{$friend['id_user']}/main.jpg' draggable='false'>";
                                       	}
                                       else
                                       	{
                                       	$res['offline'] .= "<img class='steamavatar_avatar_f2laR avatar' src='".ADRES."/www/images/users/default/default.png' draggable='false'>";
                                       	}
                                       	
                                    $res['offline'] .= "</div>
                                    <div class='friendHover miniProfileHover hoverposition_HoverPosition_3gYNB hoverposition_ready_3d6MD hide' id='profile_card_{$friend['id_user']}' style='left: 45.34px;'>
                                       <div class='miniProfileHoverInner miniprofile_miniProfile_s5zcg'>
                                          <div class='miniprofile_miniProfileContent_25Sge miniprofile_notInOrWatchingGame_3AIC2'>
                                             <div class='miniprofile_miniProfileBackground_3gfFJ'>";
                                                if ($friend['user_have_photo'] == 1)
                                                {
                                                $res['offline'] .= "<img class='miniprofile_miniProfileBackgroundBlur_G000o' src='".ADRES."/www/images/users/{$friend['id_user']}/main.jpg'>";
                                                }
                                                else
                                                {
                                                $res['offline'] .= "<img class='miniprofile_miniProfileBackgroundBlur_G000o' src='".ADRES."/www/images/users/default/default.png'>";
                                                }
                                             $res['offline'] .= "</div>
                                             <div class='miniprofile_miniProfileHeader_3oBIW'>
                                                <div class='miniprofile_miniProfilePlayer_3cN6K offline offline'>
                                                   <div class='steamavatar_avatarHolder_1G7LI avatarHolder no-drag X-Large miniprofile_playerAvatar_1dzWG'>
                                                      <div class='steamavatar_avatarStatus_1Pwr6 avatarStatus bottom'></div>";
                                                      if ($friend['user_have_photo'] == 1)
                                                      {
                                                      $res['offline'] .= "<img class='steamavatar_avatar_f2laR avatar offline-hover-card' src='".ADRES."/www/images/users/{$friend['id_user']}/main.jpg' draggable='false'>";
                                                      }
                                                      else
                                                      {
                                                      $res['offline'] .= "<img class='steamavatar_avatar_f2laR avatar offline-hover-card' src='".ADRES."/www/images/users/default/default.png' draggable='false'>";
                                                      }
                                                   $res['offline'] .= "</div>
                                                   <div class='miniprofile_playerContent_PV11V'>
                                                      <div>
                                                         <div class='miniprofile_persona_1Z3Ey'>
                                                            <div class='miniprofile_personaName_W3QjS miniprofile_nickName_2E8Iz'>
                                                               <div class='miniprofile_personaNameLabel_390p4'>{$friend['user_name']}</div>
                                                            </div>
                                                            <div class='miniprofile_awayStatusLabel_2UzRy'>Не в сети</div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class='miniprofile_miniProfileBottom_3Agb6'>";
                                                if ($rsGetBadge[$friend['id_user']])
                                                {
                                                $res['offline'] .= "<div class='miniprofile_miniProfileFeaturedContainer_3ljT4'>
	                                                   <div class='miniprofile_favoriteBadgeIcon_icnrU'><img src='".ADRES."/www/templates/default/assets/images/profiles/badges/{$rsGetBadge[$friend['id_user']]['cnt_games']}_80.png' class='miniprofile_badgeIcon_2TBf0'></div>
	                                                   <div class='miniprofile_featuredLabels_1dGw1'>
	                                                      <div class='miniprofile_featuredTitle_2_2RA'>{$rsGetBadge[$friend['id_user']]['name_badge']}</div>
	                                                      <div class='miniprofile_featuredSubTitle_2p8kJ'>За покупку {$cntUser[$friend['id_user']]['cnt_games']} игр</div>
	                                                   </div>
                                                	</div>";
                                            	}
                                                else
                                                {
                                                $res['offline'] .= "<div class='miniprofile_miniProfileFeaturedContainer_3ljT4'>
	                                                   <div class='miniprofile_favoriteBadgeIcon_icnrU'><img src='".ADRES."/www/templates/default/assets/images/profiles/badges/ico_leaderboards.png' class='miniprofile_badgeIcon_2TBf0'></div>
	                                                   <div class='miniprofile_featuredLabels_1dGw1'>
	                                                      <div class='miniprofile_featuredTitle_2_2RA'>Pillar of Community</div>
	                                                      <div class='miniprofile_featuredSubTitle_2p8kJ'>За регистрацию</div>
	                                                   </div>
                                                	</div>";
                                                }
                                                
                                                $res['offline'] .= "<div class='miniprofile_miniProfileFeaturedContainer_3ljT4'>
                                                   <div class='friendPlayerLevel lvl_";
                                                   if ($rsLevelAccept[$friend['id_user']][0]['cnt_level'] >= 5000)
                                                   	{
                                                   		$res['offline'] .= "4900 ";
                                                   	}
                                                   	else
                                                   	{
                                                   		$res['offline'] .= "{$rsLevelAccept[$friend['id_user']][0]['cnt_level']} ";
                                                   	}
                                                   	if ($rsLevelPlusAccept[$friend['id_user']]) 
                                                   	{
                                                   		$res['offline'] .= "lvl_plus_{$rsLevelPlusAccept[$friend['id_user']][0]['cnt_lvl_plus']}";
                                                   	}
                                                   	$res['offline'] .= "'><span class='miniprofile_friendPlayerLevelNum_2Ni_1'>{$friend['user_level']}</span></div>
                                                   <div class='miniprofile_featuredLabels_1dGw1'>
                                                      <div class='miniprofile_featuredTitle_2_2RA'>Уровень Steam </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class='miniprofile_mutualFriends_36Vl4'>
                                                <div></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>


                                    <div class='labelHolder offline personanameandstatus_twoLine_2wZNn'>
                                       <div class='personanameandstatus_statusAndName_9U-hi'>
                                          <div class='personanameandstatus_playerName_1uxaf'>{$friend['user_name']}</div>
                                          <div class='ContextMenuButton' data-user='{$friend['id_user']}'><svg xmlns='http://www.w3.org/2000/svg' class='SVGIcon_Button SVGIcon_DownArrowContextMenu' data-name='Layer 1' viewBox='0 0 128 128' x='0px' y='0px'><polygon points='50 59.49 13.21 22.89 4.74 31.39 50 76.41 95.26 31.39 86.79 22.89 50 59.49'></polygon></svg></div>
                                       </div>
                                       <div class='personanameandstatus_richPresenceContainer_21cNf'>
                                          <div class='personanameandstatus_gameName_qvibF personanameandstatus_richPresenceLabel_3Q6g1 no-drag'>В сети</div>
                                       </div>
                                    </div>
                                    <div id='no_read_{$friend['id_user']}' class='hide'>
	                                    <div class='unreadFriend'>
	                                    	<div class='FriendMessageCount' id='cnt_read_{$friend['id_user']}'>1</div>
	                                    </div>
                                    </div>
                                 </div>
                                 <div class='contextMenu ContextMenuFocusContainer setup_menu_{$friend['id_user']}' tabindex='0' style='visibility: visible; left: 114px;'><div class='contextMenuContents friendsContextMenu'><div class='contextMenuItem' onclick='changeChat({$friend['id_user']}, {$chatArUser['id_user']});'>Отправить сообщение</div><div class='contextMenuItem'><a href='/user/profile/{$friend['id_user']}/' target='_blank'>Открыть профиль</a></div><div class='contextMenuItem'><a href='#' onclick='deletefromfriend({$friend['id_user']});'>Удалить из друзей</a></div></div></div>
                              </div>";
							}
					} else {
						$res['isOffline'] = 0;
					}

			echo json_encode($res);				
}