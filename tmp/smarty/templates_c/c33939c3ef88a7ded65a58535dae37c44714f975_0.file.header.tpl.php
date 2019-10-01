<?php
/* Smarty version 3.1.30, created on 2019-02-19 13:18:50
  from "D:\OSPanel\domains\games\views\admin\index\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c6bd80a55b697_21586989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c33939c3ef88a7ded65a58535dae37c44714f975' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\admin\\index\\header.tpl',
      1 => 1550571520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6bd80a55b697_21586989 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Preloader -->
    <div class="preloader"></div>
  
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="/admin/"><span>[</span>good <i>games</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a id="main-page" href="/admin/" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Главная</span>
          </a><!-- br-menu-link -->
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
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
            <span class="menu-item-label">Navigation</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="navigation.html" class="sub-link">Basic Nav</a></li>
            <li class="sub-item"><a href="navigation-layouts.html" class="sub-link">Nav Layouts</a></li>
            <li class="sub-item"><a href="navigation-effects.html" class="sub-link">Nav Effects</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Charts</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="chart-morris.html" class="sub-link">Morris Charts</a></li>
            <li class="sub-item"><a href="chart-flot.html" class="sub-link">Flot Charts</a></li>
            <li class="sub-item"><a href="chart-chartjs.html" class="sub-link">Chart JS</a></li>
            <li class="sub-item"><a href="chart-echarts.html" class="sub-link">ECharts</a></li>
            <li class="sub-item"><a href="chart-rickshaw.html" class="sub-link">Rickshaw</a></li>
            <li class="sub-item"><a href="chart-chartist.html" class="sub-link">Chartist</a></li>
            <li class="sub-item"><a href="chart-sparkline.html" class="sub-link">Sparkline</a></li>
            <li class="sub-item"><a href="chart-peity.html" class="sub-link">Peity</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Forms</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="form-elements.html" class="sub-link">Form Elements</a></li>
            <li class="sub-item"><a href="form-layouts.html" class="sub-link">Form Layouts</a></li>
            <li class="sub-item"><a href="form-validation.html" class="sub-link">Form Validation</a></li>
            <li class="sub-item"><a href="form-wizards.html" class="sub-link">Form Wizards</a></li>
            <li class="sub-item"><a href="form-editor-code.html" class="sub-link">Code Editor</a></li>
            <li class="sub-item"><a href="form-editor-text.html" class="sub-link">Text Editor</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Tables</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub nav flex-column">
            <li class="sub-item"><a href="table-basic.html" class="sub-link">Basic Table</a></li>
            <li class="sub-item"><a href="table-datatable.html" class="sub-link">Data Table</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
            <span class="menu-item-label">Maps</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="map-google.html" class="sub-link">Google Maps</a></li>
            <li class="sub-item"><a href="map-leaflet.html" class="sub-link">Leaflet Maps</a></li>
            <li class="sub-item"><a href="map-vector.html" class="sub-link">Vector Maps</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-color-filter-outline tx-24"></i>
            <span class="menu-item-label">Skins</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="skin-select2.html" class="sub-link">Select2</a></li>
            <li class="sub-item"><a href="skin-rangeslider.html" class="sub-link">Ion RangeSlider</a></li>
            <li class="sub-item"><a href="skin-input-form.html" class="sub-link">Textbox Form</a></li>
            <li class="sub-item"><a href="skin-file-browser.html" class="sub-link">File Browser</a></li>
            <li class="sub-item"><a href="skin-datepicker.html" class="sub-link">Datepicker</a></li>
            <li class="sub-item"><a href="skin-template.html" class="sub-link">Template</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
            <span class="menu-item-label">Utilities</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="background.html" class="sub-link">Background</a></li>
            <li class="sub-item"><a href="border.html" class="sub-link">Border</a></li>
            <li class="sub-item"><a href="height.html" class="sub-link">Height</a></li>
            <li class="sub-item"><a href="margin.html" class="sub-link">Margin</a></li>
            <li class="sub-item"><a href="padding.html" class="sub-link">Padding</a></li>
            <li class="sub-item"><a href="position.html" class="sub-link">Position</a></li>
            <li class="sub-item"><a href="typography-util.html" class="sub-link">Typography</a></li>
            <li class="sub-item"><a href="width.html" class="sub-link">Width</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="pages.html" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Apps &amp; Pages</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="layouts.html" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-book-outline tx-22"></i>
            <span class="menu-item-label">Layouts</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="sitemap.html" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-list-outline tx-22"></i>
            <span class="menu-item-label">Sitemap</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
      </ul><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>

      <div class="info-list">
        <div class="info-list-item">
          <div>
            <p class="info-list-label">Memory Usage</p>
            <h5 class="info-list-amount">32.3%</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">CPU Usage</p>
            <h5 class="info-list-amount">140.05</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#1C7973"], "height": 35, "width": 60 }'>4,3,5,7,12,10,4,5,11,7</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">Disk Usage</p>
            <h5 class="info-list-amount">82.02%</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#8E4246"], "height": 35, "width": 60 }'>1,2,1,3,2,10,4,12,7</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">Daily Traffic</p>
            <h5 class="info-list-amount">62,201</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
        </div><!-- info-list-item -->
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
              <?php if ($_smarty_tpl->tpl_vars['support']->value[0]['support_checked'] == 0) {?>
              <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
              <?php }?>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header" style="width: 350px;">
              <div class="dropdown-menu-label">
                <label>Messages</label>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['support']->value, 'supp', false, NULL, 'support', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['supp']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_support']->value['iteration']++;
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_support']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_support']->value['iteration'] : null) < 7) {?>
                <a href="/admin/mailbox/" class="media-list-link">
                  <div class="media">
                    <?php if ($_smarty_tpl->tpl_vars['supp']->value['supp_user_photo'] != 0) {?>
                      <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['supp']->value['support_user_id'];?>
/user-avatar.jpg" alt="User Photo">
                    <?php } else { ?>
                      <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.png" alt="User Photo">
                    <?php }?>
                    <div class="media-body">
                      <div>
                        <p><?php echo $_smarty_tpl->tpl_vars['supp']->value['support_user_email'];?>
</p>
                        <?php if ($_smarty_tpl->tpl_vars['supp']->value['support_checked'] == 0) {?><span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span></span><?php }?><span><?php echo $_smarty_tpl->tpl_vars['supp']->value['support_date'];?>
</span>
                      </div><!-- d-flex -->
                      <p><?php echo $_smarty_tpl->tpl_vars['supp']->value['support_user_text'];?>
</p>
                    </div>
                  </div><!-- media -->
                </a>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <div class="dropdown-footer">
                  <a href="/admin/mailbox/"><i class="fa fa-angle-down"></i> Show All Messages</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down">Katherine</span>
              <img src="https://via.placeholder.com/500" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-250">
              <div class="tx-center">
                <a href=""><img src="https://via.placeholder.com/500" class="wd-80 rounded-circle" alt=""></a>
                <h6 class="logged-fullname">Katherine P. Lumaad</h6>
                <p>youremail@domain.com</p>
              </div>
              <hr>
              <div class="tx-center">
                <span class="profile-earning-label">Earnings After Taxes</span>
                <h3 class="profile-earning-amount">$13,230 <i class="icon ion-ios-arrow-thin-up tx-success"></i></h3>
                <span class="profile-earning-text">Based on list price.</span>
              </div>
              <hr>
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
                <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-chatboxes-outline"></i>
            <!-- start: if statement -->
            <?php if ($_smarty_tpl->tpl_vars['online_users']->value != '') {?>
            <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
            <?php }?>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['online_users']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
            <a href="" class="contact-list-link new">
              <div class="d-flex">
                <div class="pos-relative">
                  <?php if ($_smarty_tpl->tpl_vars['contact']->value['user_have_photo'] != 0) {?>
                  <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['contact']->value['user_id'];?>
/user-avatar.jpg" alt="User Photo">
                  <?php } else { ?>
                  <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.png" alt="User Photo">
                  <?php }?>
                  <div class="contact-status-indicator bg-success bd-white"></div>
                </div>
                <div class="contact-person">
                  <p><?php echo $_smarty_tpl->tpl_vars['contact']->value['online_user_email'];?>
</p>
                  <span><?php echo $_smarty_tpl->tpl_vars['contact']->value['online_user_name'];?>
</span>
                  <span><?php echo $_smarty_tpl->tpl_vars['contact']->value['online_user_ip'];?>
</span>
                </div>
                <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span></span>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
    <!-- ########## END: RIGHT PANEL ########## ---><?php }
}