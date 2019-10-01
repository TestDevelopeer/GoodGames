<?php
/* Smarty version 3.1.30, created on 2019-01-24 16:58:26
  from "D:\OSPanel\domains\games\views\admin\auth\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c49c482981253_78136715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '146fb60ad4d0e2c3acd706f5026494bba5fecab1' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\admin\\auth\\login.tpl',
      1 => 1548338304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c49c482981253_78136715 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/favicon.png">
    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

    <!-- vendor css -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
css/bracket.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
css/custom.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center ht-100v">
      <img src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
img/bg-fixed-3.jpg" class="wd-100p ht-100p object-fit-cover" alt="">
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
            <?php echo $_smarty_tpl->tpl_vars['capchaImg']->value;?>

          </div>
          <div id="alert-box" class="alert alert-danger hide" role="alert">
            
            <strong class="d-block d-sm-inline-block-force">Ошибка!</strong> <p id="alert-text"></p>
          </div>
          <button id="login-button" onclick="login();" type="button" class="btn btn-info btn-block">Войти</button>
          </div>
        </div><!-- login-wrapper -->
      </div><!-- overlay-body -->
    </div><!-- d-flex -->

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/jquery-ui/ui/widgets/datepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
lib/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateAdminPath']->value;?>
js/main.js"><?php echo '</script'; ?>
>

  </body>
</html>
<?php }
}
