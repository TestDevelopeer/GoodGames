<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="{$teplateWebPath}assets/images/favicon.png">
    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>{$pageTitle}</title>

    <!-- vendor css -->
    <link href="{$teplateAdminPath}lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{$teplateAdminPath}lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{$teplateAdminPath}css/bracket.css">

    <link rel="stylesheet" href="{$teplateAdminPath}css/custom.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center ht-100v">
      <img src="{$teplateAdminPath}img/bg-fixed-3.jpg" class="wd-100p ht-100p object-fit-cover" alt="">
      <div class="overlay-body bg-black-6 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bd bd-white-2 bg-black-7">
          <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> good <span class="tx-info">games</span> <span class="tx-normal">]</span></div>
          <div class="tx-white-5 tx-center mg-b-60"></div>
          <div id="login-form">
          <div class="form-group">
            <input type="text" required="" class="form-control fc-outline-dark" name="login" placeholder="Ваш логин">
          </div><!-- form-group -->
          <div class="form-group">
            <input type="password" required="" class="form-control fc-outline-dark" name="password" placeholder="Пароль">
          </div><!-- form-group -->
          <div class="form-group">
            {$capchaImg}
          </div>
          <div id="alert-box" class="alert alert-danger hide" role="alert">
            
            <strong class="d-block d-sm-inline-block-force">Ошибка!</strong> <p id="alert-text"></p>
          </div>
          <button id="login-button" onclick="login();" type="button" class="btn btn-info btn-block">Войти</button>
          </div>
        </div><!-- login-wrapper -->
      </div><!-- overlay-body -->
    </div><!-- d-flex -->

    <script src="{$teplateAdminPath}lib/jquery/jquery.min.js"></script>
    <script src="{$teplateAdminPath}lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{$teplateAdminPath}lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{$teplateAdminPath}js/main.js"></script>

  </body>
</html>
