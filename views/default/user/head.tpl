<!DOCTYPE html>   
<html lang="en" class=" responsive touch">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--<title>GoodGames | Сообщество и магазин игр</title>-->

    <title>{$pageTitle}</title>

    <link rel="icon" type="image/png" href="{$teplateWebPath}assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->
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
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{$teplateWebPath}assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <script defer src="{$teplateWebPath}assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="{$teplateWebPath}assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="{$teplateWebPath}assets/vendor/summernote/dist/summernote-bs4.css">

    <!-- GoodGames -->
    <link rel="stylesheet" href="{$teplateWebPath}assets/css/goodgames.css">
    <link rel="stylesheet" href="{$teplateWebPath}assets/css/custom.css">

<link href="{$teplateWebPath}assets/css/users/motiva_sans.css" rel="stylesheet" type="text/css" >
<link href="{$teplateWebPath}assets/css/users/buttons.css" rel="stylesheet" type="text/css" >
<link href="{$teplateWebPath}assets/css/users/shared_global.css" rel="stylesheet" type="text/css" >
<link href="{$teplateWebPath}assets/css/users/globalv2.css" rel="stylesheet" type="text/css" >
<link href="{$teplateWebPath}assets/css/users/modalContent.css" rel="stylesheet" type="text/css" >
<link href="{$teplateWebPath}assets/css/users/profilev2.css" rel="stylesheet" type="text/css" >
<link href="{$teplateWebPath}assets/css/users/stickers.css" rel="stylesheet" type="text/css" >
<link href="{$teplateWebPath}assets/css/users/shared_responsive.css" rel="stylesheet" type="text/css" >
<link href="{$teplateWebPath}assets/css/users/header.css" rel="stylesheet" type="text/css" >

<link href="{$teplateWebPath}assets/css/users/groupv2.css" rel="stylesheet" type="text/css" >
<link href="{$teplateWebPath}assets/css/users/groupadmin.css" rel="stylesheet" type="text/css" >
<link href="{$teplateWebPath}assets/css/users/profile_editv2.css" rel="stylesheet" type="text/css" >

<script src="{$teplateWebPath}assets/js/jquery-1.10.1.min.js"></script>

{if $actionName == 'friends'}
    <link rel="stylesheet" href="{$teplateWebPath}assets/css/users/friendsv2.css">
{/if}
{if $actionName == 'searchusers'}
    <link rel="stylesheet" href="{$teplateWebPath}assets/css/users/search.css">
{/if}

    <link rel="stylesheet" href="{$teplateWebPath}assets/css/customProfile.css">
    
</head>

<body>