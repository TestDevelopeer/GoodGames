function updateorder(id){
    var postData = {id: id}
    $.ajax({
            type: 'POST',
            async: true,
            url: "/cart/updateorder/",
            data: postData,
            dataType: 'json',
            success: function(data){
                if(data['success']){
                    $('#yad-form').submit();
                    $('#show-payment').addClass('hide');
                    $('#data-pay-order').addClass('hide');
                    $('#data-pay-order-h').addClass('hide');
                    $('#left-order-a').html('Заказ №'+id+' (<span class="yes-payment">Оплачено</span>)');
                    $('#success-buy-order').removeClass('hide');
                    
                } else {
                    $('#show-payment').addClass('hide');
                    $('#data-pay-order').addClass('hide');
                    $('#data-pay-order-h').addClass('hide');
                    $('#left-order-a').html('<span class="text-warning" style="">Действие данного заказа истекло</span>');
                    $('#left-time-order').removeClass('hide');
                }
            }
        });
}

function removeorder(id){
    var postData = {id: id}
    $.ajax({
            type: 'POST',
            async: true,
            url: "/cart/removeorder/",
            data: postData,
            dataType: 'json',
            success: function(data){
                if(data['success']){
                    $('#accordion-'+id).addClass('hide');
                    $('#accordion-'+id).html(' ');
                }
            }
        });
}