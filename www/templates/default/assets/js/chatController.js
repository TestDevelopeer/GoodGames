(function($) {
    
    "use strict"; 

})(window.jQuery)

function OpenChat( elLink )
{
    var win = window.open( elLink.href,'eula','height=684,width=875,resize=yes,scrollbars=yes');
    win.focus();
}

function OpenFriendChat(elLink, arUser, rsUser){
    var postData = {arUser: arUser, rsUser: rsUser};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/chat/initusers/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                var win = window.open(elLink.href,'eula','height=684,width=875,resize=yes,scrollbars=yes');
                win.focus();
            }
            else{
                alert('error');
            }
        }
    });
}

function changeChat(idUser, arUser){
        $.ajax({
            type: 'post',
            async: true,
            url: "/chat/changechat/", //Путь к обработчику
            data: {'referal': idUser, 'arUser': arUser},
            response: 'text',
            success: function(data){
                $('#no_read_'+idUser).addClass('hide');
                $("#chat_section").html(data).fadeIn(); //Выводим полученые данные в списке
                showChatMessages();
                setTimeout(function(){
                        $(".chatHistoryScroll").scrollTop($(".chatHistoryScroll")[0].scrollHeight);
                    },100);
                $('#textMsg').focus();
                changeTitle(idUser);
                if($(window).width() < 767){
                   hideFriendList(); 
                }
                $('.friendStatusHover').removeClass('Friend_ContextMenuActive');
                $(".ContextMenuFocusContainer").removeClass('visible');
            }
       });
}

function changeTitle(idUser){
    $.ajax({
        type: 'POST',
        async: true,
        url: "/chat/changetitle/",
        data: {'user': idUser},
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('title').text(data['message']);
            }
        }
    });
}

function showChatMessages(){
    var last_msg = $('#last_msg').data('last');

    $.ajax({
        type: 'post',
        async: true,
        url: "/chat/showchatmessages/", //Путь к обработчику
        data: {'last_msg': last_msg},
        dataType: 'json',
        success: function(data){
            if(data['success'] == 1){
                if(data['isLastMsg'] == false){
                    $("#chatHistory").html(data['msg']).fadeIn(); //Выводим полученые данные в списке
                }
                if(data['isFriend'] == ''){
                    setTimeout(function(){
                    showChatMessages();
                    },500);
                }  
            } else {
                $("#chatHistory").html('').fadeIn(); //Выводим полученые данные в списке
            }
            if(data['isFriend'] && data['isFriend'] != ''){
                
                $("#chatHistory").html(data['msg'] + data['isFriend']).fadeIn(); //Выводим полученые данные в списке
                $('#textMsg').prop('disabled', true);
                $('#sendMsg').prop('disabled', true);
            } 
        }
    });
}

function closechat(){
    $.ajax({
        type: 'POST',
        async: true,
        url: "/chat/closechat/",
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $("#chat_section").html('').fadeIn();
                $("#chatHistory").html('').fadeIn();
                $('title').text('Чат');
                showFriendList();
            }
            else{
                alert('error');
            }
        }
    });
}

function sendchatmsg(){
    var text = $('#textMsg').val();
    if($.trim(text).length === 0){
        $('#textMsg').val('');
    }
        else {
        var postData = {text: text};
        $.ajax({
            type: 'POST',
            async: true,
            url: "/chat/sendchatmsg/",
            data: postData,
            dataType: 'json',
            success: function(data){
                if(data['success']){
                    sendnotif(data['rsUser'], data['arName'], data['message'],);
                    $('#textMsg').val('');
                    setTimeout(function(){
                        $(".chatHistoryScroll").scrollTop($(".chatHistoryScroll")[0].scrollHeight);
                    },500);
                }
            }
        });
    }
}

function sendnotif(user, name, message){
    $.ajax({
        type: 'POST',
        async: true,
        url: "/user/sendnotif/",
        data: {'user': user, 'name': name, 'message': message},
        dataType: 'json',
        success: function(data){
            alert('+++');
        }
    });
}

function soundClick() {
  var audio = new Audio(); // Создаём новый элемент Audio
  audio.src = '../www/templates/default/assets/sounds/message.wav'; // Указываем путь к звуку "клика"
  audio.autoplay = true; // Автоматически запускаем
}

function updateCntMsg(){
    $.ajax({
        type: 'POST',
        async: true,
        url: "/chat/checknoreadmsg/",
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $.each(data.message, function() { 
                    if(this.cnt_msg != 0){
                        $('#no_read_'+this.id_user).removeClass('hide');
                        $('#cnt_read_'+this.id_user).html(this.cnt_msg);
                        $('title').text('Новое сообщение');
                        if(this.status == 1){
                            soundClick();
                        }
                    } else {
                        $('#no_read_'+this.id_user).addClass('hide');
                    }
                });
                setTimeout(function(){
                    updateCntMsg();
                },2000);
            }
        }
    });
}

function updateOnlineFriends(){
    var last_user = $('#last_user').data('user');
    var offline = $('.offline_cnt').data('offline');
    var online = $('.online_cnt').data('online');
    $.ajax({
        type: 'POST',
        async: true,
        url: "/chat/updateonlinefriends/",
        data: {'last_user': last_user},
        dataType: 'json',
        success: function(data){

                if(data['cnt_online'] != online){
                    $('.online_cnt').data('online', data['cnt_online']);
                    $('.online_cnt').text('('+data['cnt_online']+')');
                      $('#list-online-friends').html(data['online']).fadeIn();
                } else {
                    $('.online_cnt').attr('data-online', data['cnt_online']);
                    $('.online_cnt').text('('+data['cnt_online']+')');
                }
                if(data['cnt_online'] == 0){
                     $('#list-online-friends').html('').fadeIn();
                }
                
                if(data['cnt_offline'] != offline){
                    $('.offline_cnt').data('offline', data['cnt_offline']);
                    $('.offline_cnt').text('('+data['cnt_offline']+')');
                      $('#offlineFriends').html(data['offline']).fadeIn();

                }

                $('.hoverPhoto').bind('mouseover', function(){
                    var userId = $(this).data('id');
                    $('#profile_card_'+userId).removeClass('hide');
                });
                $('.hoverPhoto').bind('mouseout', function(){
                    var userId = $(this).data('id');
                    $('#profile_card_'+userId).addClass('hide');
                });

                $('.user_container').dblclick(function(){
                    var idUser = $(this).data('user');
                    var arUser = $(this).data('aruser');
                    changeChat(idUser, arUser);
                });

                $('.ContextMenuButton').click(function(){
                    var user = $(this).data('user');
                    showSetupMenu(user);
                });

                setTimeout(function(){
                    updateOnlineFriends();
                },3000);
        }
    });
}

function hideFriendList(){
    $('.chatTabOpenFriendsList').removeClass('hide');
    $('.friendsListContainer').addClass('friend-list-hide');
    $('.friendlist').addClass('collapsed');
}

function showFriendList(){
    $('.chatTabOpenFriendsList').addClass('hide');
   $('.friendsListContainer').removeClass('friend-list-hide');
    $('.friendlist').removeClass('collapsed'); 
}

$(document).ready(function(){
    $('#showOfflineFriends').click(function(){
        if($('#showOfflineFriends').hasClass('Collapsed')){
            $('#showOfflineFriends').removeClass('Collapsed')
            $('#offlineFriends').removeClass('hide');
        } else {
            $('#showOfflineFriends').addClass('Collapsed')
            $('#offlineFriends').addClass('hide');
        }
    });

    $('.searchIconButton').click(function(){
        $('.activeTab').addClass('TabSearchActive');
        $('#searchFriends').removeClass('hide');
        $('.tabLabel').css('width', '1px');
        $('#friendSearchInputID').focus();
    });

    $('.friendSearchClear').click(function(){
        $('#friendSearchInputID').val('');
        $('#friendSearchInputID').blur();
        setTimeout(function(){
            $('#friends_container').removeClass('hide');
            $('#search_friends_container').addClass('hide');
            $("#search_friends_list").html('').fadeIn(); //Выводим полученые данные в списке
            $('.activeTab').removeClass('TabSearchActive');
            $('#searchFriends').addClass('hide');
            $('.tabLabel').css('width', '58px');
        },100);
    });

    $('#EmbedButton').click(function(){
        $('#sendImg').click();
    });
    
    
});

function showImg(id){
    $.ajax({
        type: 'POST',
        async: true,
        url: "/chat/showimg/",
        data: {'message': id},
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#img-msg_'+id).removeClass('Minimized');
            }
        }
    });
}

function hideImg(id){
    $.ajax({
        type: 'POST',
        async: true,
        url: "/chat/hideimg/",
        data: {'message': id},
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#img-msg_'+id).addClass('Minimized');
            }
        }
    });
}

$(function(){

    $('#sendImg').bind('change', function(){
        $('#submit').click();
    });

  
  $('#my_form').on('submit', function(e){
    
    $('.chatFileUploadProgressContainer').removeClass('hide');

    e.preventDefault();
    var $that = $(this),
        formData = new FormData($that.get(0));
    $.ajax({
      url: $that.attr('action'),
      type: $that.attr('method'),
      contentType: false,
      processData: false,
      data: formData,
      dataType: 'json',
      xhr: function(){
        var xhr = $.ajaxSettings.xhr(); // получаем объект XMLHttpRequest
        xhr.upload.addEventListener('progress', function(evt){ // добавляем обработчик события progress (onprogress)
          if(evt.lengthComputable) { // если известно количество байт
            // высчитываем процент загруженного
            var percentComplete = Math.ceil(evt.loaded / evt.total * 100);
            // устанавливаем значение в атрибут value тега <progress>
            // и это же значение альтернативным текстом для браузеров, не поддерживающих <progress>
            $('.DialogProgressBar_Value').css('width', percentComplete+'%');
            if(percentComplete >= 100){
                setTimeout(function(){
                    $('.chatFileUploadProgressContainer').addClass('hide');
                },1000);

                $(".chatHistoryScroll").scrollTop($(".chatHistoryScroll")[0].scrollHeight);
                
            }
          }
        }, false);
        return xhr;
      },
      success: function(json){
        
      }
    });
  });

});


function showSetupMenu(user){
    $('.isFriendMenu_'+user).addClass('Friend_ContextMenuActive');
    $('.setup_menu_'+user).addClass('visible'); 
}

$(document).mouseup(function (e) {
    var container = $(".ContextMenuFocusContainer");
    if (container.has(e.target).length === 0){
        $('.friendStatusHover').removeClass('Friend_ContextMenuActive');
        container.removeClass('visible');
    }
});

$(function(){
//Живой поиск
$('#friendSearchInputID').bind("change keyup input click", function() {
    if(this.value.length >= 1){
        $.ajax({
            type: 'post',
            async: true,
            url: "/chat/searchfriends/", //Путь к обработчику
            data: {'userName': this.value},
            response: 'text',
            success: function(data){
                $('#friends_container').addClass('hide');
                $('#search_friends_container').removeClass('hide');
                $("#search_friends_list").html(data).fadeIn(); //Выводим полученые данные в списке
            }
       });
    } else {
        $('#friends_container').removeClass('hide');
        $('#search_friends_container').addClass('hide');
        $("#search_friends_list").html('').fadeIn(); //Выводим полученые данные в списке
    }
});

});