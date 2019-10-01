(function($) {
    
    "use strict";
    
    
    //Hide Loading Box (Preloader)
    function handlePreloader() {
        if($('.preloader').length){
            $('.preloader').delay(200).fadeOut(500);
        }
    }
    
    
    //Update Header Style and Scroll to Top
    function headerStyle() {
        if($('.main-header').length){
            var windowpos = $(window).scrollTop();
            var siteHeader = $('.main-header');
            var scrollLink = $('.scroll-to-top');
            if (windowpos >= 200) {
                siteHeader.addClass('fixed-header');
                scrollLink.fadeIn(300);
            } else {
                siteHeader.removeClass('fixed-header');
                scrollLink.fadeOut(300);
            }
        }
    }
    
    headerStyle();

    //Masonary
    function enableMasonry() {
        if($('.masonry-items').length){
    
            var winDow = $(window);
            // Needed variables
            var $container=$('.masonry-items');
    
            $container.isotope({
                itemSelector: '.masonry-item',
                 masonry: {
                    columnWidth : '.masonry-item.col-lg-4'
                 },
                animationOptions:{
                    duration:500,
                    easing:'linear'
                }
            });
    
            winDow.bind('resize', function(){

                $container.isotope({ 
                    itemSelector: '.masonry-item',
                    animationOptions: {
                        duration: 500,
                        easing  : 'linear',
                        queue   : false
                    }
                });
            });
        }
    }
    
    enableMasonry();

/* ==========================================================================
   When document is loading, do
   ========================================================================== */
    
    $(window).on('load', function() {
        handlePreloader();
        enableMasonry();
    }); 

})(window.jQuery);


$(function(){
	$('input[name=review-rate]').click(function(){
		var value = $(this).val();
		$('#cnt_vote').val(value);
	});
});

function ShowEULA( elLink )
{
    var win = window.open( elLink.href,'eula','height=584,width=475,resize=yes,scrollbars=yes');
    win.focus();
}

/*
    получ данных с формы
*/
function getData(obj_form) {
    var hData = {};
    $('input, textarea, select', obj_form).each(function() {
        if(this.name && this.name != '') {
            if(this.type == 'checkbox'){
                if(this.checked == true){
                    hData[this.name] = this.value;
                } else {
                    hData[this.name] = null;
                }
            } else {
                hData[this.name] = this.value;
            }
        }
    });
    return hData;
};

/*
    очистка данных с формы
*/
function clearData(obj_form) {
    $('input, textarea, select', obj_form).each(function() {
        if(this.name && this.name!='') {
        this.value = '';
        }
    });
};

function sendsupportmessage(){
    $('button[type="submit"]').attr('disabled', 'disabled');
    var postData = getData('#support-form');
    $.ajax({
            type: 'POST',
            async: true,
            url: "/function/sendsupportmessage/",
            data: postData,
            dataType: 'json',
            success: function(data){
                if(data['success']){ 
                    clearData('#support-form');
                    $('.nk-form-response-success').css('display', 'block');
                    $('.nk-form-response-success').html(data['message']);
                    setTimeout(function(){
                        $('.nk-form-response-success').css('display', 'none');
                    },1000);
                }
                else{
                    $('.nk-form-response-error').css('display', 'block');
                    $('.nk-form-response-error').html(data['message']);
                    setTimeout(function(){
                        $('.nk-form-response-error').css('display', 'none');
                    },1000);
                }
            }
        });
}

/*$(document).ready(function(){
    checkmessage();
});

function checkmessage() {
        $.ajax({
        type: 'POST',
        async: true,
        url: "/chat/checknoreadmsg/",
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $.each(data.message, function() { 
                    if(this.cnt_msg != 0){
                        if(this.status == 1){
                            sendnotif(this.aRid_user);
                            alert(this.aRid_use);
                        }
                    }
                });
                setTimeout(function(){
                    checkmessage();
                },2000);
            }
        }
    });
}

function sendnotif(user){
    $.ajax({
        type: 'POST',
        async: true,
        url: "/user/sendnotif/",
        data: {'user': user},
        dataType: 'json',
        success: function(data){

        }
    });
}*/