<?php
/* Smarty version 3.1.30, created on 2019-02-25 12:55:13
  from "D:\OSPanel\domains\gg.com\views\default\user\refreshpwd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c73bb81496ed3_29649892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c60650f96b6b507988f9a51e9961849a7f1f41d' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\user\\refreshpwd.tpl',
      1 => 1551088362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73bb81496ed3_29649892 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="nk-modal modal fade show" id="refreshPwd" tabindex="-1" role="dialog" style="display: block;">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>
                <h4 class="mb-0"><span class="text-main-1">Восстановление пароля</span></h4>
                <div class="nk-gap-1"></div>
                <form class="nk-form text-white" id="refreshPwd-form" method="POST" novalidate="novalidate">
                    <div class="row vertical-gap">
                        <div class="col-md-2"></div>
                        <div class="col-md-8" id="form-hide">
                            Введите новый пароль:
                            <div class="nk-gap"></div>
                            <input type="password" value="" name="pswd" id="pswd" class="required form-control valid" placeholder="Пароль" aria-invalid="false" autocomplete="false">
                            <input type="email" name="email" id="email" readonly="" hidden="" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
                            <div id="pswd_info">
                                <ul>
                                <li id="letter">Минимум <strong>одна буква</strong></li>
                                <li id="capital">Минимум <strong>одна заглавная буква</strong></li>
                                <li id="number">Минимум <strong>одна цифра</strong></li>
                                <li id="length">Быть не менее <strong>8 символов</strong></li>
                                </ul>
                            </div>
                            <div class="nk-gap"></div>
                            <div id="refresh-error" class="nk-info-box text-danger hide" style="padding: 0; border: none;">   
                                <i class="ion-close-round"></i>
                                <em id="refresh-error-msg"></em>
                            </div>
                            <input id="refreshpwd" type="button" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block valid" value="Сменить" aria-invalid="false">
                        </div>
                        <div class="col-md-8 hide" id="form-show">
                            Пароль успешно изменен, вы будете перенаправлены на главную страницу
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/js/check_pass.js"><?php echo '</script'; ?>
><?php }
}
