
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mailbox-list">
      <div class="br-mailbox-list-header">
        <a href="" id="showMailBoxLeft" class="show-mailbox-left hidden-sm-up">
          <i class="fa fa-arrow-right"></i>
        </a>
        <h6 class="tx-white mg-b-0 tx-13 tx-uppercase">Входящие <span class="tx-roboto">({$nonCheck})</span></h6>
        <div class="btn-group" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-info disabled pd-x-25"><i class="fa fa-angle-left"></i></button>
          <button type="button" class="btn btn-info pd-x-25"><i class="fa fa-angle-right"></i></button>
        </div>
      </div><!-- br-mailbox-list-header -->
      <div class="br-mailbox-list-body">
        {foreach $support as $supp name = support}
        <div onclick="showsuppmessage({$supp['id_support']})" class="br-mailbox-list-item">
          <div class="d-flex justify-content-between mg-b-5">
            <div>
              <i id="star-{$supp['id_support']}" class="icon ion-ios-star {if $supp['support_checked'] == 0}tx-warning{/if}"></i>
              <p class="tx-12 tx-gray-600 mg-b-5">{$supp['support_user_email']}</p>
            </div>
            <span class="tx-12">{$supp['support_date']}</span>
          </div><!-- d-flex -->
          <h6 class="tx-14 mg-b-10 tx-white">{$supp['support_user_theme']}</h6>
          <p class="tx-12 tx-gray-600 mg-b-5">{$supp['support_user_text']}</p>
        </div><!-- br-mailbox-list-item -->
        {/foreach}
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
    </div><!-- modal -->