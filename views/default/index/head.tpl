<!DOCTYPE html>   
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--<title>GoodGames | Сообщество и магазин игр</title>-->

    <title>{$pageTitle}</title>

    <link rel="icon" type="image/png" href="{$teplateWebPath}assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->
    
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{$teplateWebPath}assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <script defer src="{$teplateWebPath}assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="{$teplateWebPath}assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="{$teplateWebPath}assets/vendor/ionicons/css/ionicons.min.css">

    <!-- Flickity -->
    <link rel="stylesheet" href="{$teplateWebPath}assets/vendor/flickity/dist/flickity.min.css">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="{$teplateWebPath}assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="{$teplateWebPath}assets/vendor/photoswipe/dist/default-skin/default-skin.css">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="{$teplateWebPath}assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="{$teplateWebPath}assets/vendor/summernote/dist/summernote-bs4.css">

    <!-- GoodGames -->
    <link rel="stylesheet" href="{$teplateWebPath}assets/css/goodgames.css">

    <link rel="stylesheet" href="{$teplateWebPath}assets/css/game_purchase.css">
    <!-- Custom Styles -->
    
    {if !isset($arUser)}
        <link rel="stylesheet" href="{$teplateWebPath}assets/css/login.css">
    {/if}

    {if $controllerName == 'Gallery'}
        <link rel="stylesheet" href="{$teplateWebPath}assets/css/gallery.css">
    {/if}

    {if $controllerName == 'Reviews'}
        <link rel="stylesheet" href="{$teplateWebPath}assets/css/reviews.css">
    {/if}

    {if $actionName == 'Friends'}
        <link rel="stylesheet" href="{$teplateWebPath}assets/css/reviews.css">
    {/if}

    <link rel="stylesheet" href="{$teplateWebPath}assets/css/YouTubePopUp.css">
    <link rel="stylesheet" href="{$teplateWebPath}assets/css/tooltipster.bundle.css">
    <link rel="stylesheet" href="{$teplateWebPath}assets/css/custom.css">
    <!-- END: Styles --> 
<!-- jQuery -->
    <script src="{$teplateWebPath}assets/js/jquery-1.10.1.min.js"></script>
    <script src="{$teplateWebPath}assets/js/tooltipster.bundle.js"></script>

    
    <script>
        $(document).ready(function() {
            $('.tools').tooltipster({
                animation: 'fade',
                delay: 200,
                theme: 'tooltipster-punk',
                trigger: 'hover',
                maxWidth: 300,
                side: 'right'
            });
        });
    </script>


</head>

<body>