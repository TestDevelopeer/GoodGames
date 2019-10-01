$(document).ready(function($) {
    $('#select2-category').select2({
      placeholder: 'Категории'
    });

    $('#select2-platform').select2({
      placeholder: 'Платформы'
    });

    $('#select2-game').select2({
      placeholder: 'Игра'
    });
});


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

$(document).keypress(function(e) {
    if(e.which == 13) {
        $('#login-button').click();
    }
});


/*
    получ данных с формы
*/
function getData(obj_form) {
    var hData = {};
    $('input, textarea, select', obj_form).each(function() {
        if(this.name && this.name!='') {
            if(this.value != ''){
                hData[this.name] = this.value;
                console.log(hData);
            } else {
                hData = "";
            }
        }
    });
    return hData;
};

function login(){
	var postData = getData('#login-form');
    if(postData != ""){
    	$.ajax({
            type: 'POST',
            async: true,
            url: "/login/auth/",
            data: postData,
            dataType: 'json',
            success: function(data) {
                if(data['success']) {
                    $('#alert-box').addClass('hide');
                    document.location.href = "/admin/categories/";
                }   else {
                    $('#alert-text').text(data['message']);
                    $('#alert-box').removeClass('hide');
                }
            }
        });
    } else {
        $('#alert-text').text('Заполните все поля.');
        $('#alert-box').removeClass('hide');
    }
}

$(function(){
//Живой поиск
$('#selectedcat').bind("change keyup input click", function() {

    if(this.value != 0){
        var id_cat = this.value;
        var name_cat = $('#select_'+id_cat).text();
        $.ajax({
            type: 'post',
            async: true,
            url: "/function/searchgamescat/", //Путь к обработчику
            data: {'referal':this.value},
            response: 'text',
            success: function(data){
                $('#what_games').text('Игры категории '+name_cat);
                $("#search-clear").addClass('hide');
                $("#search-show").html(data).fadeIn(); //Выводим полученые данные в списке
           }
       });
    } else{
        $('#what_games').text('Все игры');
        $("#search-clear").removeClass('hide');
        $("#search-show").hide();
    }
});
});

function searchtag(tag){
//Живой поиск
        $.ajax({
            type: 'post',
            async: true,
            url: "/function/searchgamestag/", //Путь к обработчику
            data: {'referal':tag},
            response: 'text',
            success: function(data){
                $('#what_games').text('Игры с тэгом '+tag);
                $("#search-clear").addClass('hide');
                $("#search-show").html(data).fadeIn(); //Выводим полученые данные в списке
           }
       });
}

function allgames(){
    $('#what_games').text('Все игры');
    $("#search-clear").removeClass('hide');
    $("#search-show").hide();
}

function deleteimg(id, name, cnt){
    var postData = {id: id, name: name};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/deleteimg/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#'+cnt).addClass('hide');
            }
            else{
                alert('Ошибка');
            }
        }
    });
}

function savecategories(id){
    var value = $('#selected-cat').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/savecategories/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-cats').removeClass('btn-outline-primary');
                $('#button-cats').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-cats').addClass('btn-outline-primary');
                    $('#button-cats').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-cats').removeClass('btn-outline-primary');
                $('#button-cats').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-cats').addClass('btn-outline-primary');
                    $('#button-cats').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function saveparentgame(id){
    var value = $('#select2-game').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/saveparentgame/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-parent').removeClass('btn-outline-primary');
                $('#button-parent').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-parent').addClass('btn-outline-primary');
                    $('#button-parent').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-parent').removeClass('btn-outline-primary');
                $('#button-parent').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-parent').addClass('btn-outline-primary');
                    $('#button-parent').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function savetags(id){
    var value = $('#selected-tags').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/savetags/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-tags').removeClass('btn-outline-primary');
                $('#button-tags').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-tags').addClass('btn-outline-primary');
                    $('#button-tags').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-tags').removeClass('btn-outline-primary');
                $('#button-tags').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-tags').addClass('btn-outline-primary');
                    $('#button-tags').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function saveplatforms(id){
    var value = $('#selected-platforms').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/saveplatforms/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-platforms').removeClass('btn-outline-primary');
                $('#button-platforms').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-platforms').addClass('btn-outline-primary');
                    $('#button-platforms').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-platforms').removeClass('btn-outline-primary');
                $('#button-platforms').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-platforms').addClass('btn-outline-primary');
                    $('#button-platforms').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function saveuserscat(id){
    var value = $('#selected-userscat').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/saveuserscat/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-userscat').removeClass('btn-outline-primary');
                $('#button-userscat').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-userscat').addClass('btn-outline-primary');
                    $('#button-userscat').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-userscat').removeClass('btn-outline-primary');
                $('#button-userscat').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-userscat').addClass('btn-outline-primary');
                    $('#button-userscat').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function savegamelang(id, type){
    var value = $('#selected-'+type).val();
    var postData = {value: value, id: id, type: type};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/savegamelang/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-'+type).removeClass('btn-outline-primary');
                $('#button-'+type).addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-'+type).addClass('btn-outline-primary');
                    $('#button-'+type).removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-'+type).removeClass('btn-outline-primary');
                $('#button-'+type).addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-'+type).addClass('btn-outline-primary');
                    $('#button-'+type).removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function savename(id){
    var value = $('#selected-name').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/savename/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-name').removeClass('btn-outline-primary');
                $('#button-name').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-name').addClass('btn-outline-primary');
                    $('#button-name').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-name').removeClass('btn-outline-primary');
                $('#button-name').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-name').addClass('btn-outline-primary');
                    $('#button-name').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function saveprice(id){
    var price = $('#selected-price').val();
    var discount = $('#selected-discount').val();
    var postData = {price: price, discount: discount, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/saveprice/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-price').removeClass('btn-outline-primary');
                $('#button-price').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-price').addClass('btn-outline-primary');
                    $('#button-price').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-price').removeClass('btn-outline-primary');
                $('#button-price').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-price').addClass('btn-outline-primary');
                    $('#button-price').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function savedate(id){
    var value = $('#selected-date').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/savedate/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-date').removeClass('btn-outline-primary');
                $('#button-date').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-date').addClass('btn-outline-primary');
                    $('#button-date').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-date').removeClass('btn-outline-primary');
                $('#button-date').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-date').addClass('btn-outline-primary');
                    $('#button-date').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function savevideo(id, name){
    var value = $('#selected-video').val();
    var postData = {value: value, id: id, name: name};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/savevideo/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-video').removeClass('btn-outline-primary');
                $('#button-video').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-video').addClass('btn-outline-primary');
                    $('#button-video').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-video').removeClass('btn-outline-primary');
                $('#button-video').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-video').addClass('btn-outline-primary');
                    $('#button-video').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function savemaindesc(id){
    var value = $('#selected-main-desc').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/savemaindesc/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-main').removeClass('btn-outline-primary');
                $('#button-main').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-main').addClass('btn-outline-primary');
                    $('#button-main').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-main').removeClass('btn-outline-primary');
                $('#button-main').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-main').addClass('btn-outline-primary');
                    $('#button-main').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function saveseconddesc(id){
    var value = $('.note-editable').html();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/saveseconddesc/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-second').removeClass('btn-outline-primary');
                $('#button-second').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-second').addClass('btn-outline-primary');
                    $('#button-second').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-second').removeClass('btn-outline-primary');
                $('#button-second').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-second').addClass('btn-outline-primary');
                    $('#button-second').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function savedeveloper(id){
    var value = $('#selected-developer').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/savedeveloper/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-developer').removeClass('btn-outline-primary');
                $('#button-developer').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-developer').addClass('btn-outline-primary');
                    $('#button-developer').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-developer').removeClass('btn-outline-primary');
                $('#button-developer').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-developer').addClass('btn-outline-primary');
                    $('#button-developer').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function savepublisher(id){
    var value = $('#selected-publisher').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/savepublisher/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-publisher').removeClass('btn-outline-primary');
                $('#button-publisher').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-publisher').addClass('btn-outline-primary');
                    $('#button-publisher').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-publisher').removeClass('btn-outline-primary');
                $('#button-publisher').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-publisher').addClass('btn-outline-primary');
                    $('#button-publisher').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function savepegi(id){
    var value = $('#selected-pegi').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/savepegi/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-pegi').removeClass('btn-outline-primary');
                $('#button-pegi').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-pegi').addClass('btn-outline-primary');
                    $('#button-pegi').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-pegi').removeClass('btn-outline-primary');
                $('#button-pegi').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-pegi').addClass('btn-outline-primary');
                    $('#button-pegi').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function saverecrequired(){
    var postData = getData('#system-required');

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/saverecrequired/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-required').removeClass('btn-outline-primary');
                $('#button-required').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-required').addClass('btn-outline-primary');
                    $('#button-required').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-required').removeClass('btn-outline-primary');
                $('#button-required').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-required').addClass('btn-outline-primary');
                    $('#button-required').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function saveminrequired(){
    var postData = getData('#system-minrequired');

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/saveminrequired/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-minrequired').removeClass('btn-outline-primary');
                $('#button-minrequired').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-minrequired').addClass('btn-outline-primary');
                    $('#button-minrequired').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-minrequired').removeClass('btn-outline-primary');
                $('#button-minrequired').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-minrequired').addClass('btn-outline-primary');
                    $('#button-minrequired').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function savecntkeys(id){
    var keys = getData('#keys-numbs');
    var value = $('#selected-keys').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/savecntkeys/",
        data: {'value':value, id:id, keys},
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-keys').removeClass('btn-outline-primary');
                $('#button-keys').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-keys').addClass('btn-outline-primary');
                    $('#button-keys').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-keys').removeClass('btn-outline-primary');
                $('#button-keys').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-keys').addClass('btn-outline-primary');
                    $('#button-keys').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function deletegame(id){
    var postData = {id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/deletegame/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                document.location.href = "/admin/allgames/";
            }
            else{
                alert('Ошибка');
            }
        }
    });
}

function randomInteger(min, max) {
    var rand = min - 0.5 + Math.random() * (max - min + 1)
    rand = Math.round(rand);
    return rand;
  }

$(function(){
//Живой поиск
$('#selected-keys').bind("change keyup input click", function() {
        var cnt_keys = randomInteger(10, 30);
        $('#selected-keys').val(cnt_keys);
        var id = $('#game-id').val();
        var postData = {cnt_keys: cnt_keys, id: id};
        $.ajax({
            type: 'POST',
            async: true,
            url: "/function/addkeys/",
            data: postData,
            dataType: 'json',
            success: function(data){
                if(data['success']){
                    var i = 1;
                    var key = '<input class="form-control form-control-dark" name="key_1" placeholder="Ключ" value="'+data['message'][0]+'" type="text">';
                    while (i < cnt_keys) {
                      key = key+'<input class="form-control form-control-dark" name="key_'+(i+1)+'" placeholder="Ключ" value="'+data['message'][i]+'" type="text">';
                      i++;
                    }

                    $("#keys-numbs").html(key).fadeIn();
                }
                else{
                    alert('Ошибка');
                }
            }
        });
});
});

function addnewcat(){
    var catName = $('#new-cat-name').val();
    var postData = {catName: catName};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/addnewcat/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#alert-box').removeClass('hide');
                $('#alert-text').html(data['message']);
                setTimeout(function(){
                    $('#alert-box').addClass('hide');
                },1000);

            }
            else{
                alert('Ошибка');
            }
        }
    });
}

function addnewscat(){
    var catName = $('#news-cat-name').val();
    var postData = {catName: catName};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/addnewscat/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#alert-box-news').removeClass('hide');
                $('#alert-text-news').html(data['message']);
                setTimeout(function(){
                    $('#alert-box-news').addClass('hide');
                },1000);

            }
            else{
                alert('Ошибка');
            }
        }
    });
}

$(function(){
//Живой поиск
    $('#select-cat').bind("change keyup input click", function() {
        if(this.value != 0){
        $.ajax({
            type: 'POST',
            async: true,
            url: "/function/getcat/",
            data: {'id': this.value},
            dataType: 'json',
            success: function(data){
                if(data['success']){
                    $('#new-cat').addClass('hide');
                    $('#change-cat').removeClass('hide');
                    $('#change-cat-id').val(data['message']);
                }
                else{
                    alert('Ошибка');
                }
            }
        });
        } else {
            $('#new-cat').removeClass('hide');
            $('#change-cat').addClass('hide');
        }
    });


    $('#select-cat-news').bind("change keyup input click", function() {
        if(this.value != 0){
        $.ajax({
            type: 'POST',
            async: true,
            url: "/function/getnewscat/",
            data: {'id': this.value},
            dataType: 'json',
            success: function(data){
                if(data['success']){
                    $('#new-cat-news').addClass('hide');
                    $('#change-cat-news').removeClass('hide');
                    $('#change-news-id').val(data['message']);
                }
                else{
                    alert('Ошибка');
                }
            }
        });
        } else {
            $('#new-cat-news').removeClass('hide');
            $('#change-cat-news').addClass('hide');
        }
    });
});

function changecat(){
    var id = $('#select-cat').val();
    var name = $('#change-cat-id').val();
    if(name == ""){
        $('#change-cat-id').remove();
    }
    var postData = {id: id, name: name};
    $.ajax({
            type: 'POST',
            async: true,
            url: "/function/changecat/",
            data: postData,
            dataType: 'json',
            success: function(data){
                if(data['success']){
                    $('#alert-box').removeClass('hide');
                    $('#alert-text').html(data['message']);
                    setTimeout(function(){
                        $('#alert-box').addClass('hide');
                    },1000);
                }
                else{
                    alert('Ошибка');
                }
            }
        });
}

function changenewscat(){
    var id = $('#select-cat-news').val();
    var name = $('#change-news-id').val();
    if(name == ""){
        $('#change-news-id').remove();
    }
    var postData = {id: id, name: name};
    $.ajax({
            type: 'POST',
            async: true,
            url: "/function/changenewscat/",
            data: postData,
            dataType: 'json',
            success: function(data){
                if(data['success']){
                    $('#alert-box-news').removeClass('hide');
                    $('#alert-text-news').html(data['message']);
                    setTimeout(function(){
                        $('#alert-box-news').addClass('hide');
                    },1000);
                }
                else{
                    alert('Ошибка');
                }
            }
        });
}

$(function(){
//Живой поиск
$('#searchbox').bind("change keyup input click", function() {

    if(this.value.length >= 1){
        $.ajax({
            type: 'post',
            async: true,
            url: "/function/searchgame/", //Путь к обработчику
            data: {'referal':this.value},
            response: 'text',
            success: function(data){
                $('#what_games').text('');
                $("#search-clear").addClass('hide');
                $("#search-show").html(data).fadeIn(); //Выводим полученые данные в списке
           }
       });
    } else{
        $('#what_games').text('Все игры');
        $("#search-clear").removeClass('hide');
        $("#search-show").hide();
    }
});
});

function showsuppmessage(id){
   $.ajax({
            type: 'post',
            async: true,
            url: "/function/showsuppmessage/", //Путь к обработчику
            data: {'id':id},
            response: 'text',
            success: function(data){
                $('#star-'+id).removeClass('tx-warning');
                $("#show-mail").html(data).fadeIn(); //Выводим полученые данные в списке
           }
    });
}

function addSupUserMail(){
    var email = $('#support-user-email').html();

    $('#supp-user-email').val(email);
}

function guestsend(){ // вся мaгия пoслe зaгрузки стрaницы
    $("#contact-form").submit(function(){ // пeрeхвaтывaeм всe при сoбытии oтпрaвки
        var form = $(this); // зaпишeм фoрму, чтoбы пoтoм нe былo прoблeм с this
        var error = false; // прeдвaритeльнo oшибoк нeт
        form.find('input, textarea').each( function(){ // прoбeжим пo кaждoму пoлю в фoрмe
            if ($(this).val() == '') { // eсли нaхoдим пустoe
                alert('Зaпoлнитe пoлe "'+$(this).attr('placeholder')+'"!'); // гoвoрим зaпoлняй!
                error = true; // oшибкa
            }
        });
        if (!error) { // eсли oшибки нeт
            var data = form.serialize(); // пoдгoтaвливaeм дaнныe
            $.ajax({ // инициaлизируeм ajax зaпрoс
               type: 'POST', // oтпрaвляeм в POST фoрмaтe, мoжнo GET
               url: '/function/sendmail/', // путь дo oбрaбoтчикa, у нaс oн лeжит в тoй жe пaпкe
               dataType: 'json', // oтвeт ждeм в json фoрмaтe
               data: data, // дaнныe для oтпрaвки
               beforeSend: function(data) { // сoбытиe дo oтпрaвки
                    form.find('input[type="submit"]').attr('disabled', 'disabled'); // нaпримeр, oтключим кнoпку, чтoбы нe жaли пo 100 рaз
                  },
               success: function(data){ // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
                    if (data['error']) { // eсли oбрaбoтчик вeрнул oшибку
                        //alert(data['error']); // пoкaжeм eё тeкст
                    } else { // eсли всe прoшлo oк
                        location.reload();
                        //alert('Письмo oтврaвлeнo! Чeкaйтe пoчту! =)'); // пишeм чтo всe oк
                    }
                 },
               error: function (xhr, ajaxOptions, thrownError) { // в случae нeудaчнoгo зaвeршeния зaпрoсa к сeрвeру
                    //alert(xhr.status); // пoкaжeм oтвeт сeрвeрa
                    //alert(thrownError); // и тeкст oшибки
                 },
               complete: function(data) { // сoбытиe пoслe любoгo исхoдa
                    form.find('input[type="submit"]').prop('disabled', false); // в любoм случae включим кнoпку oбрaтнo
                 }

                 });
        }
        return false; // вырубaeм стaндaртную oтпрaвку фoрмы
    });
}

function addnewarticle(){
    var Cat = $('#select-cat').val();
    var Name = $('#art-name').val();
    var Author = $('#art-author').val();
    var Prewiew = $('#art-desc').val();
    var Text = $('.note-editable').html();
    var postData = {Cat: Cat, Author: Author, Name: Name, Prewiew: Prewiew, Text: Text};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/addnewarticle/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                document.location.href = "../?controller=editarticle&id="+data['message'];
            }
            else{
                alert('Ошибка');
            }
        }
    });
}

function addnewupdate(){
    var Cat = $('#select2-category').val();
    var Name = $('#art-name').val();
    var Author = $('#art-author').val();
    var Prewiew = $('#art-desc').val();
    var Text = $('.note-editable').html();
    var postData = {Cat: Cat, Author: Author, Name: Name, Prewiew: Prewiew, Text: Text};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/addnewupdate/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                document.location.href = "../?controller=editarticle&id="+data['message'];
            }
            else{
                alert('Ошибка');
            }
        }
    });
}

function saveartcat(id){
    var value = $('#selected-cat').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/saveartcat/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-cat').removeClass('btn-outline-primary');
                $('#button-cat').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-cat').addClass('btn-outline-primary');
                    $('#button-cat').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-cat').removeClass('btn-outline-primary');
                $('#button-cat').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-cat').addClass('btn-outline-primary');
                    $('#button-cat').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function saveupdatecat(id){
    var value = $('#select2-category').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/saveupdatecat/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-cat').removeClass('btn-outline-primary');
                $('#button-cat').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-cat').addClass('btn-outline-primary');
                    $('#button-cat').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-cat').removeClass('btn-outline-primary');
                $('#button-cat').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-cat').addClass('btn-outline-primary');
                    $('#button-cat').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function saveartname(id){
    var value = $('#selected-name').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/saveartname/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-name').removeClass('btn-outline-primary');
                $('#button-name').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-name').addClass('btn-outline-primary');
                    $('#button-name').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-name').removeClass('btn-outline-primary');
                $('#button-name').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-name').addClass('btn-outline-primary');
                    $('#button-name').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function saveartauthor(id){
    var value = $('#selected-author').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/saveartauthor/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-author').removeClass('btn-outline-primary');
                $('#button-author').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-author').addClass('btn-outline-primary');
                    $('#button-author').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-author').removeClass('btn-outline-primary');
                $('#button-author').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-author').addClass('btn-outline-primary');
                    $('#button-author').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function saveartdate(id){
    var value = $('#selected-date').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/saveartdate/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-date').removeClass('btn-outline-primary');
                $('#button-date').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-date').addClass('btn-outline-primary');
                    $('#button-date').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-date').removeClass('btn-outline-primary');
                $('#button-date').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-date').addClass('btn-outline-primary');
                    $('#button-date').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function deleteartimg(id, name, cnt){
    var postData = {id: id, name: name};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/deleteartimg/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#'+cnt).addClass('hide');
            }
            else{
                alert('Ошибка');
            }
        }
    });
}

function savearttext(id){
    var value = $('.note-editable').html();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/savearttext/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-text').removeClass('btn-outline-primary');
                $('#button-text').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-text').addClass('btn-outline-primary');
                    $('#button-text').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-text').removeClass('btn-outline-primary');
                $('#button-text').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-text').addClass('btn-outline-primary');
                    $('#button-text').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function saveartprewiew(id){
    var value = $('#art-desc').val();
    var postData = {value: value, id: id};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/saveartprewiew/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-pre').removeClass('btn-outline-primary');
                $('#button-pre').addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-pre').addClass('btn-outline-primary');
                    $('#button-pre').removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-pre').removeClass('btn-outline-primary');
                $('#button-pre').addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-pre').addClass('btn-outline-primary');
                    $('#button-pre').removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}

function savelinks(id, type){
    var value = $("input[name='game-link-"+type+"']").val();

    var postData = {value: value, id: id, type: type};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/function/savelinks/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#button-'+type).removeClass('btn-outline-primary');
                $('#button-'+type).addClass('btn-outline-success');
                setTimeout(function(){
                    $('#button-'+type).addClass('btn-outline-primary');
                    $('#button-'+type).removeClass('btn-outline-success');
                },1000);
            }
            else{
                $('#button-'+type).removeClass('btn-outline-primary');
                $('#button-'+type).addClass('btn-outline-danger');
                setTimeout(function(){
                    $('#button-'+type).addClass('btn-outline-primary');
                    $('#button-'+type).removeClass('btn-outline-danger');
                },1000);
            }
        }
    });
}
