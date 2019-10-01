function login(){
    var postData = getData('#login-form');
        $.ajax({
        type: 'POST',
        async: true,
        url: "/user/log/",
        data: postData,
        dataType: 'json',
        success: function(data) {
            if(data['success']) {
                if(data['message'] == 'null'){
                    location.reload();
                } else {
                    $('#login-form').addClass('hide');
                    $('#2fa-form').removeClass('hide');
                    $('#login_twofactorauth_message_entercode_accountname').html(data['message']);
                }
            }   else {
                $('#login-error').removeClass('hide');
                $('#login-error-msg').text(data['message']);
            }
        }
    });
}

function login2fa(){
    var code = $('#twofactorcode_entry').val();
    if($('#remember_login').prop('checked') == true){
        var remember_login = $('#remember_login').val();
    } else {
        var remember_login = null;
    }
    var postData = {code: code, remember_login: remember_login};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/user/login/",
        data: postData,
        dataType: 'json',
        success: function(data) {
            if(data['success']) {
                location.reload();
            }   else {
                $('#login_twofactorauth_message_incorrectcode').css('display', 'block');
            }
        }
    });
}

function refreshpwd(){
    var postData = getData($('#refreshPwd-form'));
    $.ajax({
        type: 'POST',
        async: true,
        url: "/user/refreshpwd/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#refresh-error').addClass('hide');
                $('#refresh-success').removeClass('hide');
                $('#refresh-success-msg').html('Ссылка на восстановление отправлена по указанному адресу');
            }
            else{
                $('#refresh-error').removeClass('hide');
                $('#refresh-error-msg').html(data['message']);
            }
        }
    });
}

function refresh2fa(){
    var postData = getData($('#refresh2FA-form'));
    $.ajax({
        type: 'POST',
        async: true,
        url: "/user/refreshauth/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#2fa-hide').addClass('hide');
                $('#refresh2fa-error').addClass('hide');
                $('#refresh2fa-success').removeClass('hide');
                $('#refresh2fa-success-msg').html('2FA защита была отключена');
                setTimeout(function(){
                    document.location.href = "/";
                },1500);
            }
            else{
                $('#refresh2fa-error').removeClass('hide');
                $('#refresh2fa-error-msg').html(data['message']);
            }
        }
    });
}

function showreg(){
    $('#login-form').addClass('hide');
    $('#reg-form').removeClass('hide');
}

function showlogin(){
    $('#login-form').removeClass('hide');
    $('#reg-form').addClass('hide');
}