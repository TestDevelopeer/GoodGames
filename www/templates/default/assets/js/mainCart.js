function addtocart(id){
    var postData = {id: id};
    var cnt = $("#cart-items").html();
    $.ajax({
            type: 'POST',
            async: true,
            url: "/cart/addtocart/",
            data: postData,
            response: 'text',
            success: function(data){
                    if(cnt == 0){
                        $('#cart-dropdown-block').removeClass('cart-non-active');
                        $('#cart-dropdown-block').addClass('nk-cart-dropdown');
                    }
                    cnt++;
                    $("#cart-items").html(cnt).fadeIn();
                    $("#cart-dropdown-block").html(data).fadeIn();
                    $('#addtocart_'+id).addClass('hide');
                    $('#removefromcart_'+id).removeClass('hide');
                
            }
        });
}

function removefromcart(id){
    var postData = {id: id};
    var cnt = $("#cart-items").html();
    $.ajax({
            type: 'POST',
            async: true,
            url: "/cart/removefromcart/",
            data: postData,
            response: 'text',
            success: function(data){
                    cnt--;
                    if(cnt == 0){
                        $('#cart-block-purchase').addClass('hide');
                        $('#cart-dropdown-block').addClass('cart-non-active');
                        $('#cart-dropdown-block').removeClass('nk-cart-dropdown');
                    } else {
                        $("#cart-dropdown-block").html(data).fadeIn();
                    }
                    $("#cart-items").html(cnt).fadeIn();
                    $('#addtocart_'+id).removeClass('hide');
                    $('#removefromcart_'+id).addClass('hide');
                    $('.flag-'+id).addClass('hide');
                    $('.in-cat-'+id).removeClass('img-game-in-cat');
            }
        });
}

function clearcart(){
    var cnt = 0;
    $.ajax({
            type: 'POST',
            async: true,
            url: "/cart/clearcart/",
            dataType: 'json',
            success: function(data){
                if(data['success']){
                    $('#cart-block-purchase').addClass('hide');
                    $('#cart-notify').removeClass('hide');
                    $('#cart-dropdown-block').addClass('cart-non-active');
                    $('#cart-dropdown-block').removeClass('nk-cart-dropdown');
                    $("#cart-items").html(cnt).fadeIn();
                    $("#cart-dropdown-block").html('').fadeIn();
                    $('.addtocart').removeClass('hide');
                    $('.removefromcart').addClass('hide');
                    $('.game-in-cat').addClass('hide');
                    $('.img-game-in-cat').removeClass('img-game-in-cat');
                }
            }
        });
}