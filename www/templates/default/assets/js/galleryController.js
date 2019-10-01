function deletefromgallery(idPhoto){
    $.ajax({
        type: 'POST',
        async: true,
        url: "/gallery/deletefromgallery/",
        data: {'idPhoto': idPhoto},
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#photo_'+idPhoto).addClass('hide');
            }
        }
    });
}

function PublishedFileVote(picId, review){
    var postData = {picId: picId, review: review};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/gallery/vote/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                if(review == 'like'){
                    $('#vote_down_'+picId).removeClass('btn_active');
                    $('#vote_up_'+picId).addClass('btn_active');
                } else {
                    $('#vote_down_'+picId).addClass('btn_active');
                    $('#vote_up_'+picId).removeClass('btn_active');
                }
            }
            else{
                alert('error');
            }
        }
    });
}