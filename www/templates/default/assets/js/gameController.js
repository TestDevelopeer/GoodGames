$('.game_page_autocollapse_readmore').click(function(){
        $('.game_page_autocollapse').css('max-height', 'none');
        $(this).html('СВЕРНУТЬ');
        if($(this).hasClass('game_page_autocollapse_readless')){
            $('.game_page_autocollapse').css('max-height', '550px');
            $(this).html('ЧИТАТЬ ДАЛЕЕ');
            $(this).removeClass('game_page_autocollapse_readless');
        } else {
            $(this).addClass('game_page_autocollapse_readless');
        }
});

function UserReviewVoteUp(id, review, user){
    var postData = {id: id, review: review, user: user};
    $.ajax({
            type: 'POST',
            async: true,
            url: "/user/userreview/",
            data: postData,
            dataType: 'json',
            success: function(data){
                if(data['success']){
                    var htmlBlock = "<span class='text'>Был ли этот обзор полезен? Вы ответили</span>";
                    if (review == 1) {
                        htmlBlock = htmlBlock + "<a href='javascript:;' class='btnv6_grey_black btn_small_thin ico_hover '><span><i class='ico16 thumb_upv6'></i> Да</span></a>";
                    } else {
                        htmlBlock = htmlBlock + "<a href='javascript:;' class='btnv6_grey_black btn_small_thin ico_hover '><span><i class='ico16 funny'></i> Забавный</span></a>";
                    }
                    $('#control_block_'+id).html(htmlBlock);
                } else {
                    alert('Ошибка');
                }
            }
        });
}

function deletewishlist(game, user){
    var postData = {game: game, user: user};
    $.ajax({
            type: 'POST',
            async: true,
            url: "/game/deletewishlist/",
            data: postData,
            dataType: 'json',
            success: function(data){
                if(data['success']){
                    $('#add_to_wishlist_area').removeClass('hide');
                    $('#add_to_wishlist_area_success').addClass('hide');
                    $('#wish_game_'+game).addClass('hide');
                } else {
                    $('#add_to_wishlist_area_fail').css('display', 'block');
                }
            }
    });
}

function addwishlist(game, user){
    var postData = {game: game, user: user};
    $.ajax({
            type: 'POST',
            async: true,
            url: "/game/addwishlist/",
            data: postData,
            dataType: 'json',
            success: function(data){
                if(data['success']){
                    $('#add_to_wishlist_area').addClass('hide');
                    $('#add_to_wishlist_area_success').removeClass('hide');
                } else {
                    $('#add_to_wishlist_area_fail').css('display', 'block');
                }
            }
    });
}

function getgamedesc(id){
    $.ajax({
            type: 'POST',
            async: true,
            url: "/game/getgamedesc/",
            data: {'id': id},
            dataType: 'json',
            success: function(data){
                if(data['success']){
                    $("#game_area_description").html(data['message']).fadeIn();
                }
            }
        });
}

function addreviewlike(){
    $('#cnt_vote').val('like');
}

function addreviewdislike(){
    $('#cnt_vote').val('dislike'); 
}

function addreview(){
    var postData = getData('#review-form');
        $.ajax({
        type: 'POST',
        async: true,
        url: "/user/addreview/",
        data: postData,
        dataType: 'json',
        success: function(data) {
            if(data['success']) {
                clearData('#review-form');
                $('#review-box').addClass('hide');
                $('#success-box').removeClass('hide');
            }   else {
                alert('Ошибка');
            }
        }
    });
}