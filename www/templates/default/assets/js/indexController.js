function prevGames(){
    setTimeout(function(){
        $('#items1').addClass('slide-item');
        $('#items2').removeClass('slide-item');
        nextGames();
    },5000);
}

function nextGames(){
    setTimeout(function(){
        $('#items1').removeClass('slide-item');
        $('#items2').addClass('slide-item');
        prevGames();
    },5000);
}

function prevAdd(){
    setTimeout(function(){
        $('#add-1').addClass('slide-item');
        $('#add-1').addClass('hide');
        $('#add-img').addClass('slide-item');
        $('#add-img').addClass('hide');
        $('#add-2').removeClass('slide-item');
        $('#add-2').css('position', 'relative');
    },5000);
}

function prevAddWithoutVideo(){
    setTimeout(function(){
        $('#add-img').addClass('slide-item');
        $('#add-img').addClass('hide');
        $('#add-2').removeClass('slide-item');
        $('#add-2').css('position', 'relative');
    },5000);
}

$(document).ready(function() {
    prevGames();

    var test = $('video').is('#nvidia-video');
    
    if(test == true){
        $('#nvidia-video').on('ended', function() { 
            $('#nvidia-video').addClass('slide-item');
            $('#add-img').removeClass('slide-item');
            prevAdd();
        });
    } else {
        $('#add-1').addClass('hide');
        $('#add-img').removeClass('slide-item');
        $('#add-img').css('position', 'relative');
        prevAddWithoutVideo();
    }

    $('.custom-full-width').mouseover(function(){
        $('.custom-best-sell-back').addClass('custom-active-bg');
    });
    $('.custom-full-width').mouseout(function(){
        $('.custom-best-sell-back').removeClass('custom-active-bg');
    });

    $('.custom-full-width-v2').mouseover(function(){
        $('.custom-best-sell-back').addClass('custom-active-bg-v2');
    });
    $('.custom-full-width-v2').mouseout(function(){
        $('.custom-best-sell-back').removeClass('custom-active-bg-v2');
    });

    $('#coming-prev').click(function(){
        $('.custom-full-width-v2').removeClass('hide');
        $('.custom-full-width').addClass('hide');
    });
    $('#coming-next').click(function(){
        $('.custom-full-width-v2').removeClass('hide');
        $('.custom-full-width').addClass('hide');
    });

    $('#comingv2-prev').click(function(){
        $('.custom-full-width-v2').addClass('hide');
        $('.custom-full-width').removeClass('hide');
    });
    $('#comingv2-next').click(function(){
        $('.custom-full-width-v2').addClass('hide');
        $('.custom-full-width').removeClass('hide');
    });
    
});