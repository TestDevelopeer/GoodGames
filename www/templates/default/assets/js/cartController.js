function addorder(){
    var payment = $('#price-list').val();
    var postData = {payment: payment};
    $.ajax({
            type: 'POST',
            async: true,
            url: "/cart/addorder/",
            data: postData,
            dataType: 'json',
            success: function(data){
                if(data['success']){
                    document.location.href = "/order/";
                }
            }
        });
}