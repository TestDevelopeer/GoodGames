function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

function searchpagination(text, index){
    var cat = getUrlParameter('name');
    if(cat == undefined) cat = null;
    $.ajax({
            type: 'POST',
            async: true,
            url: "/news/searcharticle/",
            data: {'text': text, 'pagination': index, 'cat': cat},
            dataType: 'json',
            success: function(data){
                if(text == 'all'){
                    var top = $('#top-articles').offset().top;
                    $('body,html').animate({scrollTop: 0}, 500);
                    $('#clear-search').addClass('hide');
                } else {
                    $('body,html').animate({scrollTop: 0}, 500);
                    $('#clear-search').addClass('hide');
                }
                if(index == 0){
                    $('#clear-search').removeClass('hide');
                }
                $("#show-search").html(data['article']).fadeIn(); //Выводим полученые данные в списке
                
            }
    });
}

$(function(){
    $('#search-btn, #search-phone-btn').bind("click", function() {
        var data = $(this).data('input');
        var input = $('#'+data);
    if(input.val().length >= 3){
        $.ajax({
            type: 'POST',
            async: true,
            url: "/news/searcharticle/",
            data: {'text': input.val()},
            dataType: 'json',
            success: function(data){
                
                    $('#clear-search').addClass('hide');
                    $("#show-search").html(data['article']).fadeIn(); //Выводим полученые данные в списке
               
            }
        });

    } else if(input.val().length == 0){
        $.ajax({
            type: 'POST',
            async: true,
            url: "/news/searcharticle/",
            data: {'text': 'all'},
            dataType: 'json',
            success: function(data){
                
                    $('#clear-search').removeClass('hide');
                    $("#show-search").html(data['article']).fadeIn(); //Выводим полученые данные в списке
                
            }
        });
    }
});
});

$(document).keypress(function(e) {
    if(e.which == 13) {
        var button1 = $('#search-btn');
        var data1 = button1.data('input');
        var input1 = $('#'+data1).val();
        if(input1.length > 0){
            button1.click();
            $('#search-article').blur();
        } else {
            $('#search-phone-btn').click();
            $('#search-phone').blur();
        }
        var top = $('.col-lg-8').offset().top;
        $('body,html').animate({scrollTop: top}, 500);
    }
});

function paginationNext(){
    var curPag = $('.nk-pagination-current').data('id');
    curPag += 1;
    var text = $('.nk-pagination-current').data('text');
    
    searchpagination(text, curPag);
}

function paginationPrev(){
    var curPag = $('.nk-pagination-current').data('id');
    curPag -= 1;
    var text = $('.nk-pagination-current').data('text');
    
    searchpagination(text, curPag);
}