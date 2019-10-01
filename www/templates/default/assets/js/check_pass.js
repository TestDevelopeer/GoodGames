$(document).ready(function() {

	var error;
	var length;
	var	letter;
	var	capital;
	var	number;
	var email;
	var name;
	var login;

	$('#pswd').keyup(function() {
		// set password variable
	var pswd = $(this).val();
	//validate the length
	if ( pswd.length < 8 ) {
		$('#length').removeClass('valid').addClass('invalid');
		$('#pswd_info').removeClass('valid-border').addClass('invalid-border');
		length = true;
	} else {
		$('#length').removeClass('invalid').addClass('valid');
		length = false;
	}
	//validate letter
	if ( pswd.match(/[A-z]/) ) {
		$('#letter').removeClass('invalid').addClass('valid');
		letter = false;
	} else {
		$('#letter').removeClass('valid').addClass('invalid');
		$('#pswd_info').removeClass('valid-border').addClass('invalid-border');
		letter = true;
	}

	//validate capital letter
	if ( pswd.match(/[A-Z]/) ) {
		$('#capital').removeClass('invalid').addClass('valid');
		capital = false;
	} else {
		$('#capital').removeClass('valid').addClass('invalid');
		$('#pswd_info').removeClass('valid-border').addClass('invalid-border');
		capital = true;
	}

	//validate number
	if ( pswd.match(/[0-9]/) ) {
		$('#number').removeClass('invalid').addClass('valid');
		number = false;
	} else {
		$('#number').removeClass('valid').addClass('invalid');
		$('#pswd_info').removeClass('valid-border').addClass('invalid-border');
		number = true;
	}

	if(length == false && letter == false && capital == false && number == false){
		$('#pswd_info').removeClass('invalid-border').addClass('valid-border');
		$('#pswd').removeClass('invalid-border').addClass('valid-border');
	}

}).focus(function() {
	$('#pswd_info').show();
}).blur(function() {
	$('#pswd_info').hide();
});

	$('#reg-email').keyup(function() {
		if(validateEmail(this.value)){
			this.classList.remove('invalid-border');
	        this.classList.add('valid-border');
	        email = false;
		} else {
			this.classList.remove('valid-border');
	        this.classList.add('invalid-border');
	        email = true;
		}
	});

	$('#reg-login').keyup(function() {
		if(validateLogin(this.value) && this.value.length > 5){
			this.classList.remove('invalid-border');
	        this.classList.add('valid-border');
	        login = false;
		} else {
			this.classList.remove('valid-border');
	        this.classList.add('invalid-border');
	        login = true;
		}
	});

	$('#reg-name').keyup(function() {
		if(this.value.length > 3){
			this.classList.remove('invalid-border');
	        this.classList.add('valid-border');
	        name = false;
		} else {
			this.classList.remove('valid-border');
	        this.classList.add('invalid-border');
	        name = true;
		}
	});

	$('#reg-btn').click(function() {
		if(length == false && letter == false && capital == false && number == false && email == false && login == false && name == false){
			error = false;
		} else {
			error = true;
		}
		if(error == false){
			var postData = getData($('#reg-form'));
			$.ajax({
		        type: 'POST',
		        async: true,
		        url: "/user/registration/",
		        data: postData,
		        dataType: 'json',
		        success: function(data) {
		            if(data['success']) {
		                location.reload();
		            }   else {
		                alert('Ошибка');
		            }
		        }
		    });
		}
	});

	$('#changepswds').click(function(){
		if(length == false && letter == false && capital == false && number == false){
			error = false;
		} else {
			error = true;
		}
		if(error == false){
			var newpwd = $('#newPwd').val();
		    var curpwd = $('#curPwd').val();
		    var postData = {newpwd: newpwd, curpwd: curpwd};
		    $.ajax({
		        type: 'POST',
		        async: true,
		        url: "/user/changepwds/",
		        data: postData,
		        dataType: 'json',
		        success: function(data){
		            if(data['success']){
		               location.reload();
		            }
		            else{
		                $('#errorTextPwd').removeClass('hide');
                    	$('#error-msgPwd').html(data['message']);
		            }
		        }
		    });
		}
	});

	$('#refreshpwd').click(function(){
		if(length == false && letter == false && capital == false && number == false){
			error = false;
		} else {
			error = true;
		}
		if(error == false){
			var newpwd = $('#pswd').val();
			var email = $('#email').val();
		    var postData = {newpwd: newpwd, email: email};
		    $.ajax({
		        type: 'POST',
		        async: true,
		        url: "/user/refreshnewpwd/",
		        data: postData,
		        dataType: 'json',
		        success: function(data){
		            if(data['success']){
		               $('#form-hide').addClass('hide');
		                $('#form-show').removeClass('hide');
		                setTimeout(function(){
		                    document.location.href = "/";
		                },2500);
		            }
		            else{
		                $('#refresh-error').removeClass('hide');
                		$('#refresh-error-msg').html(data['message']);
		            }
		        }
		    });
		}
	});

});

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function validateLogin(login){
	var re = /^[-a-zA-Z0-9]+$/;
	return re.test(String(login));
}