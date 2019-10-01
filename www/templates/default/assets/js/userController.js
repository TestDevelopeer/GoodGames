function saveuserinfo(){
    var postData = getData($('#user_profile_info'));
    $.ajax({
            type: 'POST',
            async: true,
            url: "/user/saveprofile/",
            data: postData,
            dataType: 'json',
            success: function(data){
                if(data['success']){
                    location.reload();
                } else {
                    $('#errorText').removeClass('hide');
                    $('#error-msg').html(data['message']);
                   window.scrollTo(0, 0);
                }
            }
    });
}

function deleteuserbg(id){
    var postData = {id: id};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/user/deleteuserbg/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
               location.reload();
            }
            else{
                alert('Ошибка');
            }
        }
    });
}

function showprivatesettings(){
    $('#user_profile_info').addClass('hide');
    $('#prvt_profile_info').removeClass('hide');
    $('#main_set_btn').removeClass('selected');
    $('#prvt_set_btn').addClass('selected');
}

function showmainsettings(){
    $('#user_profile_info').removeClass('hide');
    $('#prvt_profile_info').addClass('hide');
    $('#main_set_btn').addClass('selected');
    $('#prvt_set_btn').removeClass('selected');
}

function enable2fa(){
    var code = $('#2fa-code').val();
    var postData = {code: code};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/user/enableauth/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
               location.reload();
            }
            else{
                alert('Ошибка');
            }
        }
    });
}

function disable2fa(){
    var code = $('#2fa-code').val();
    var postData = {code: code};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/user/disableauth/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
               location.reload();
            }
            else{
                alert('Ошибка');
            }
        }
    });
}

function sendUserComment(user){
    var text = $('#commentthread_Profile_'+user+'_textarea').val();
    var postData = {text: text, user: user};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/user/sendusercomment/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                location.reload();
            }
            else{
                alert('error');
            }
        }
    });
}


function addtofriend(user){
    var postData = {user: user};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/user/addtofriend/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                location.reload();
            }
            else{
                alert('error');
            }
        }
    });
}

function deletefromfriend(user){
    var postData = {user: user};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/user/deletefromfriend/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                location.reload();
            }
            else{
                alert('error');
            }
        }
    });
}

function showPendingFriends(){
    $('#friends_list').addClass('hide');
    $('#friends_pending').removeClass('hide');
    $('#pending').addClass('active');
    $('#friends').removeClass('active');
}

function showFriends(){
    $('#friends_list').removeClass('hide');
    $('#friends_pending').addClass('hide');
    $('#pending').removeClass('active');
    $('#friends').addClass('active');
}

function acceptfriend(user){
    var postData = {user: user};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/user/acceptfriend/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                location.reload();
            }
            else{
                alert('error');
            }
        }
    });
}

function IgnoreAllInvites(){
    $.ajax({
        type: 'POST',
        async: true,
        url: "/user/ignoreallinvites/",
        dataType: 'json',
        success: function(data){
            if(data['success']){
                location.reload();
            }
            else{
                alert('error');
            }
        }
    });
}