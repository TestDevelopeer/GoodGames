function searchwthcat(id, cat){
        $.ajax({
            type: 'post',
            async: true,
            url: "/catalog/searchwthcat/", //Путь к обработчику
            data: {'referal': id, 'cat': 'category_id'},
            response: 'text',
            success: function(data){
                $('#search-game-box').attr('data-cnt_games', 12);
                $('#search-game-box').attr('data-cat', id);
                //$('#breadcumb-text').html('');
                $("#search-game-box").html(data).fadeIn(); //Выводим полученые данные в списке
                $('#catalog-breadcumb').html('<li><a href="/">Главная</a></li><li><span class="fa fa-angle-right"></span></li><li><a href="/catalog/">Категории</a></li><li><span class="fa fa-angle-right"></span></li><li><span>'+cat+'</span></li>');
           }
       });
}

function searchwthplatform(id, cat){
        $.ajax({
            type: 'post',
            async: true,
            url: "/catalog/searchwthcat/", //Путь к обработчику
            data: {'referal': id, 'cat': 'platform_id'},
            response: 'text',
            success: function(data){
                //$('#breadcumb-text').html('');
                $("#search-game-box").html(data).fadeIn(); //Выводим полученые данные в списке
                $('#catalog-breadcumb').html('<li><a href="/">Главная</a></li><li><span class="fa fa-angle-right"></span></li><li><a href="/catalog/">Категории</a></li><li><span class="fa fa-angle-right"></span></li><li><span>'+cat+'</span></li>');
           }
       });
}

$(document).on('click', '#show_more_games', function(){
    var cntGames = $('#search-game-box').attr('data-cnt_games');
    var catGames = $('#search-game-box').attr('data-cat');
            $('#search-game-box').attr('data-cnt_games', parseInt(cntGames) + parseInt(12));
            var cuurrentCntGames = $('#search-game-box').attr('data-cnt_games');

            $.ajax({
                type: 'POST',
                async: true,
                url: "/catalog/showmoregames/",
                data: {'cuurrentCntGames': cuurrentCntGames, 'catGames': catGames},
                response: 'text',
                success: function(data){
                    
                    $("#search-game-box").html(data).fadeIn();
                    
                }
            });
});

$(function(){
//Живой поиск
$('#search-input').bind("change keyup input", function() {

    if(this.value.length >= 1){
        $.ajax({
            type: 'post',
            async: true,
            url: "/catalog/searchwthcat/", //Путь к обработчику
            data: {'referal':this.value, 'cat': 'name_game'},
            response: 'text',
            success: function(data){
                $("#search-game-box").html(data).fadeIn(); //Выводим полученые данные в списке
                $('#catalog-breadcumb').html('<li><a href="/">Главная</a></li><li><span class="fa fa-angle-right"></span></li><li><a href="/catalog/">Категории</a></li><li><span class="fa fa-angle-right"></span></li><li><span>Поиск</span></li>');
           }
       });
    } else{
        $.ajax({
            type: 'post',
            async: true,
            url: "/catalog/searchwthcat/", //Путь к обработчику
            data: {'referal':'all'},
            response: 'text',
            success: function(data){
                $("#search-game-box").html(data).fadeIn(); //Выводим полученые данные в списке
                $('#catalog-breadcumb').html('<li><a href="/">Главная</a></li><li><span class="fa fa-angle-right"></span></li><li><a href="/catalog/">Категории</a></li><li><span class="fa fa-angle-right"></span></li><li><span>Поиск</span></li>');
           }
       });
    }
});

});

function searchwthprice(){
    var price = $('#slider-price').val();
    $.ajax({
            type: 'post',
            async: true,
            url: "/catalog/searchwthprice/", //Путь к обработчику
            data: {'referal':price},
            response: 'text',
            success: function(data){
                $("#search-game-box").html(data).fadeIn(); //Выводим полученые данные в списке
                $('#catalog-breadcumb').html('<li><a href="/">Главная</a></li><li><span class="fa fa-angle-right"></span></li><li><a href="/catalog/">Категории</a></li><li><span class="fa fa-angle-right"></span></li><li><span>По цене</span></li>');
           }
       });
}