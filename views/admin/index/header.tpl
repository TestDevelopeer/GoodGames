
<!-- Preloader -->
    <div class="preloader"></div>
  
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="/admin/"><span>[</span>good <i>games</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label">Navigation</label>
      <ul class="br-sideleft-menu">
        <!--<li class="br-menu-item">
          <a id="main-page" href="/admin/" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Главная</span>
          </a>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a id="game-cat" href="/admin/categories/" class="br-menu-link">
            <i class="fas fa-edit tx-20"></i>
            <span class="menu-item-label">Категории</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a id="game-page" href="javascript:;" class="br-menu-link with-sub">
            <i class="fas fa-gamepad tx-20"></i>
            <span class="menu-item-label"> Игры</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="/admin/addgame/" class="sub-link"> Добавить игру</a></li>
            <li class="sub-item"><a href="/admin/addcontent/" class="sub-link"> Добавить доп. контент</a></li>
            <li class="sub-item"><a href="/admin/allgames/" class="sub-link"> Все игры</a></li>
          </ul>
        </li>
        <li class="br-menu-item">
          <a id="art-page" href="javascript:;" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Новости</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="/admin/addarticle/" class="sub-link">Добавить</a></li>
            <li class="sub-item"><a href="/admin/allarticles/" class="sub-link">Все статьи</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a id="art-updates" href="javascript:;" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Обновления игр</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="/admin/addupdate/" class="sub-link">Добавить</a></li>
            <li class="sub-item"><a href="/admin/allupdates/" class="sub-link">Все обновления</a></li>
          </ul>
        </li><!-- br-menu-item -->
        
      </ul><!-- br-sideleft-menu -->

      
      </div><!-- info-list -->

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-email-outline tx-24"></i>
              <!-- start: if statement -->
              {if $support[0]['support_checked'] == 0}
              <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
              {/if}
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header" style="width: 350px;">
              <div class="dropdown-menu-label">
                <label>Messages</label>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                {foreach $support as $supp name = support}
                {if $smarty.foreach.support.iteration < 7}
                <a href="/admin/mailbox/" class="media-list-link">
                  <div class="media">
                    {if $supp['supp_user_photo'] != 0}
                      <img src="{$teplateWebPath}users/{$supp['support_user_id']}/user-avatar.jpg" alt="User Photo">
                    {else}
                      <img src="{$teplateImgPath}users/default/default.png" alt="User Photo">
                    {/if}
                    <div class="media-body">
                      <div>
                        <p>{$supp['support_user_email']}</p>
                        {if $supp['support_checked'] == 0}<span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span></span>{/if}<span>{$supp['support_date']}</span>
                      </div><!-- d-flex -->
                      <p>{$supp['support_user_text']}</p>
                    </div>
                  </div><!-- media -->
                </a>
                {/if}
                {/foreach}
                <div class="dropdown-footer">
                  <a href="/admin/mailbox/"><i class="fa fa-angle-down"></i> Show All Messages</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-chatboxes-outline"></i>
            <!-- start: if statement -->
            {if $rsOnlineUsers != ""}
            <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
            {/if}
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="br-sideright">
      <ul class="nav nav-tabs sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i class="icon ion-ios-contact-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i class="icon ion-ios-folder-outline tx-22"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i class="icon ion-ios-calendar-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i class="icon ion-ios-gear-outline tx-24"></i></a>
        </li>
      </ul><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 contact-scrollbar active" id="contacts" role="tabpanel">
          <label class="sidebar-label pd-x-25 mg-t-25">Онлайн пользователи</label>
          <div class="contact-list pd-x-10">
            {foreach $rsOnlineUsers as $contact}
            <a href="" class="contact-list-link new">
              <div class="d-flex">
                <div class="pos-relative">
                  {if $contact['user_have_photo'] != 0}
                  <img src="{$teplateImgPath}users/{$contact['id_user']}/main.jpg" alt="User Photo">
                  {else}
                  <img src="{$teplateImgPath}users/default/default.png" alt="User Photo">
                  {/if}
                  <div class="contact-status-indicator bg-success bd-white"></div>
                </div>
                <div class="contact-person">
                  <p>{$contact['user_email']}</p>
                  <span>{$contact['user_name']}</span>
                </div>
                <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span></span>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            {/foreach}
          </div><!-- contact-list -->
        </div><!-- #contacts -->


        <div class="tab-pane pos-absolute a-0 mg-t-60 attachment-scrollbar" id="attachments" role="tabpanel">
          <label class="sidebar-label pd-x-25 mg-t-25">Recent Attachments</label>
          <div class="media-file-list">
            <div class="media">
              <div class="pd-10 bg-gray-500 bg-mojito wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="far fa-file-image tx-28 tx-white"></i>
              </div>
              <div class="media-body tx-gray-800 mg-l-10 mg-r-auto">
                <p class="mg-b-0 tx-13">IMG_43445</p>
                <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                <p class="mg-b-0 tx-12 op-5">1.2mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-gray-500 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="far fa-file-video tx-28 tx-white"></i>
              </div>
              <div class="media-body tx-gray-800 mg-l-10 mg-r-auto">
                <p class="mg-b-0 tx-13">VID_6543</p>
                <p class="mg-b-0 tx-12 op-5">MP4 Video</p>
                <p class="mg-b-0 tx-12 op-5">24.8mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-gray-500 bg-reef wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="far fa-file-word tx-28 tx-white"></i>
              </div>
              <div class="media-body tx-gray-800 mg-l-10 mg-r-auto">
                <p class="mg-b-0 tx-13">Tax_Form</p>
                <p class="mg-b-0 tx-12 op-5">Word Document</p>
                <p class="mg-b-0 tx-12 op-5">5.5mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-gray-500 bg-firewatch wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="far fa-file-pdf tx-28 tx-white"></i>
              </div>
              <div class="media-body tx-gray-800 mg-l-10 mg-r-auto">
                <p class="mg-b-0 tx-13">Getting_Started</p>
                <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                <p class="mg-b-0 tx-12 op-5">12.7mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-gray-500 bg-firewatch wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="far fa-file-pdf tx-28 tx-white"></i>
              </div>
              <div class="media-body tx-gray-800 mg-l-10 mg-r-auto">
                <p class="mg-b-0 tx-13">Introduction</p>
                <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                <p class="mg-b-0 tx-12 op-5">7.7mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-gray-500 bg-mojito wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="far fa-file-image tx-28 tx-white"></i>
              </div>
              <div class="media-body tx-gray-800 mg-l-10 mg-r-auto">
                <p class="mg-b-0 tx-13">IMG_43420</p>
                <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                <p class="mg-b-0 tx-12 op-5">2.2mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-gray-500 bg-mojito wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="far fa-file-image tx-28 tx-white"></i>
              </div>
              <div class="media-body tx-gray-800 mg-l-10 mg-r-auto">
                <p class="mg-b-0 tx-13">IMG_43447</p>
                <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                <p class="mg-b-0 tx-12 op-5">3.2mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-gray-500 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="far fa-file-video tx-28 tx-white"></i>
              </div>
              <div class="media-body tx-gray-800 mg-l-10 mg-r-auto">
                <p class="mg-b-0 tx-13">VID_6545</p>
                <p class="mg-b-0 tx-12 op-5">AVI Video</p>
                <p class="mg-b-0 tx-12 op-5">14.8mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
            <div class="media mg-t-20">
              <div class="pd-10 bg-gray-500 bg-reef wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                <i class="far fa-file-word tx-28 tx-white"></i>
              </div>
              <div class="media-body tx-gray-800 mg-l-10 mg-r-auto">
                <p class="mg-b-0 tx-13">Secret_Document</p>
                <p class="mg-b-0 tx-12 op-5">Word Document</p>
                <p class="mg-b-0 tx-12 op-5">4.5mb</p>
              </div><!-- media-body -->
              <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
            </div><!-- media -->
          </div><!-- media-list -->
        </div><!-- #history -->
        <div class="tab-pane pos-absolute a-0 mg-t-60 schedule-scrollbar" id="calendar" role="tabpanel">
          <label class="sidebar-label pd-x-25 mg-t-25">Time &amp; Date</label>
          <div class="pd-x-25">
            <h2 id="brTime" class="br-time"></h2>
            <h6 id="brDate" class="br-date"></h6>
          </div>

          <label class="sidebar-label pd-x-25 mg-t-25">Events Calendar</label>
          <div class="datepicker sidebar-datepicker"></div>


          <label class="sidebar-label pd-x-25 mg-t-25">Event Today</label>
          <div class="pd-x-25">
            <div class="list-group sidebar-event-list mg-b-20">
              <div class="list-group-item">
                <div>
                  <h6 class="tx-white tx-13 mg-b-5 tx-normal">Roven's 32th Birthday</h6>
                  <p class="mg-b-0 tx-gray-600 tx-12">2:30PM</p>
                </div>
                <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
              </div><!-- list-group-item -->
              <div class="list-group-item">
                <div>
                  <h6 class="tx-white tx-13 mg-b-5 tx-normal">Regular Workout Schedule</h6>
                  <p class="mg-b-0 tx-gray-600 tx-12">7:30PM</p>
                </div>
                <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
              </div><!-- list-group-item -->
            </div><!-- list-group -->

            <a href="" class="btn btn-block btn-primary tx-uppercase tx-10 tx-mont tx-semibold">+ Add Event</a>
            <br>
          </div>

        </div>
        <div class="tab-pane pos-absolute a-0 mg-t-60 settings-scrollbar" id="settings" role="tabpanel">
          <label class="sidebar-label pd-x-25 mg-t-25">Quick Settings</label>

          <div class="sidebar-settings-item">
            <h6 class="tx-13 tx-normal">Sound Notification</h6>
            <p class="op-5 tx-13">Play an alert sound everytime there is a new notification.</p>
            <div class="br-switchbutton checked">
              <input type="hidden" name="switch1" value="true">
              <span></span>
            </div><!-- br-switchbutton -->
          </div>
          <div class="sidebar-settings-item">
            <h6 class="tx-13 tx-normal">2 Steps Verification</h6>
            <p class="op-5 tx-13">Sign in using a two step verification by sending a verification code to your phone.</p>
            <div class="br-switchbutton">
              <input type="hidden" name="switch2" value="false">
              <span></span>
            </div><!-- br-switchbutton -->
          </div>
          <div class="sidebar-settings-item">
            <h6 class="tx-13 tx-normal">Location Services</h6>
            <p class="op-5 tx-13">Allowing us to access your location</p>
            <div class="br-switchbutton">
              <input type="hidden" name="switch3" value="false">
              <span></span>
            </div><!-- br-switchbutton -->
          </div>
          <div class="sidebar-settings-item">
            <h6 class="tx-13 tx-normal">Newsletter Subscription</h6>
            <p class="op-5 tx-13">Enables you to send us news and updates send straight to your email.</p>
            <div class="br-switchbutton checked">
              <input type="hidden" name="switch4" value="true">
              <span></span>
            </div><!-- br-switchbutton -->
          </div>
          <div class="sidebar-settings-item">
            <h6 class="tx-13 tx-normal">Your email</h6>
            <div class="pos-relative">
              <input type="email" name="email" class="form-control" value="janedoe@domain.com">
            </div>
          </div>

          <div class="pd-y-20 pd-x-25">
            <h6 class="tx-13 tx-normal tx-white mg-b-20">More Settings</h6>
            <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Account Settings</a>
            <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Privacy Settings</a>
          </div>
        </div>
      </div><!-- tab-content -->
    </div><!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->