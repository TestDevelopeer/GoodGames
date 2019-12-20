<?php
/* Smarty version 3.1.30, created on 2019-10-15 23:24:55
  from "D:\GitHub\GoodGames\views\admin\mail\mail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5da62b178980d9_86058360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1e44a77bbd09e934783676046fa20adbb3521fe' => 
    array (
      0 => 'D:\\GitHub\\GoodGames\\views\\admin\\mail\\mail.tpl',
      1 => 1548583048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da62b178980d9_86058360 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mailbox-list">
      <div class="br-mailbox-list-header">
        <a href="" id="showMailBoxLeft" class="show-mailbox-left hidden-sm-up">
          <i class="fa fa-arrow-right"></i>
        </a>
        <h6 class="tx-white mg-b-0 tx-13 tx-uppercase">Входящие <span class="tx-roboto">(<?php echo $_smarty_tpl->tpl_vars['nonCheck']->value;?>
)</span></h6>
        <div class="btn-group" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-info disabled pd-x-25"><i class="fa fa-angle-left"></i></button>
          <button type="button" class="btn btn-info pd-x-25"><i class="fa fa-angle-right"></i></button>
        </div>
      </div><!-- br-mailbox-list-header -->
      <div class="br-mailbox-list-body">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['support']->value, 'supp', false, NULL, 'support', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['supp']->value) {
?>
        <div onclick="showsuppmessage(<?php echo $_smarty_tpl->tpl_vars['supp']->value['id_support'];?>
)" class="br-mailbox-list-item">
          <div class="d-flex justify-content-between mg-b-5">
            <div>
              <i id="star-<?php echo $_smarty_tpl->tpl_vars['supp']->value['id_support'];?>
" class="icon ion-ios-star <?php if ($_smarty_tpl->tpl_vars['supp']->value['support_checked'] == 0) {?>tx-warning<?php }?>"></i>
              <p class="tx-12 tx-gray-600 mg-b-5"><?php echo $_smarty_tpl->tpl_vars['supp']->value['support_user_email'];?>
</p>
            </div>
            <span class="tx-12"><?php echo $_smarty_tpl->tpl_vars['supp']->value['support_date'];?>
</span>
          </div><!-- d-flex -->
          <h6 class="tx-14 mg-b-10 tx-white"><?php echo $_smarty_tpl->tpl_vars['supp']->value['support_user_theme'];?>
</h6>
          <p class="tx-12 tx-gray-600 mg-b-5"><?php echo $_smarty_tpl->tpl_vars['supp']->value['support_user_text'];?>
</p>
        </div><!-- br-mailbox-list-item -->
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </div><!-- br-mailbox-list-body -->
    </div><!-- br-mailbox-list -->

    <div class="br-mailbox-body">
      <div id="show-mail">

      </div>
      
    </div><!-- br-mailbox-body -->
        <!-- ########## END: MAIN PANEL ########## -->

    <div id="modalCompose" class="modal fade">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-white tx-bold">Compose Message</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" action="" id="contact-form">
          <div class="modal-body pd-20">
            <div class="form-group">
              <div class="input-group wd-sm-400 wd-lg-600">
                <input id="supp-user-email" name="email" value="" type="email" required="" class="form-control" placeholder="Кому">
              </div><!-- input-group -->
            </div><!-- form-group -->
            <div class="form-group">
              <div class="input-group wd-sm-400 wd-lg-600">
                <input type="text" class="form-control" name="subject" required="" placeholder="Тема">
              </div><!-- input-group -->
            </div><!-- form-group -->
            <div class="form-group mg-b-0">
              <textarea class="form-control" rows="6" name="message" required="" placeholder="Сообщение"></textarea>
            </div><!-- form-group -->
          </div><!-- modal-body -->
          <div class="modal-footer">
            <button onclick="guestsend();" type="submit" class="btn btn-primary">Отправить</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
          </div>
        </form>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal --><?php }
}
