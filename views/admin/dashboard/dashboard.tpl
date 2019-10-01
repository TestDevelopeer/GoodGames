<input type="text" readonly="" hidden="" id="page" value="main-page">
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <a class="breadcrumb-item" href="">Cards &amp; Widgets</a>
          <span class="breadcrumb-item active">Dashboard</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <i class="icon icon ion-ios-photos-outline"></i>
        <div>
          <h4>Dashboard Cards</h4>
          <p class="mg-b-0">Dashboard cards are used in an overview or summary of a project, for crm or form cms.</p>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody pd-x-20 pd-sm-x-30">
        <div class="row no-gutters widget-1">
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Продажи за последние 10 дней</h6>
              </div><!-- card-header -->
              <div class="card-body">
                <span id="spark1">{foreach $lastTodayOrders as $order name = order}{if !$smarty.foreach.order.last}{$order}, {else}{$order}{/if}{/foreach}</span>
                <span>$1,850</span>
              </div><!-- card-body -->
              <div class="card-footer">
                <div>
                  <span class="tx-11">Gross Sales</span>
                  <h6 class="tx-white">$2,210</h6>
                </div>
                <div>
                  <span class="tx-11">No. of Items</span>
                  <h6 class="tx-white">68</h6>
                </div>
                <div>
                  <span class="tx-11">Tax Return</span>
                  <h6 class="tx-danger">$320</h6>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-3 mg-t-1 mg-sm-t-0">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">This Week's Sales</h6>
                <a href=""><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <span id="spark2">2,8,7,8,2,6,5,3,5,2</span>
                <span>$3,324</span>
              </div><!-- card-body -->
              <div class="card-footer">
                <div>
                  <span class="tx-11">Gross Sales</span>
                  <h6 class="tx-white">$5,471</h6>
                </div>
                <div>
                  <span class="tx-11">Purchase</span>
                  <h6 class="tx-white">211</h6>
                </div>
                <div>
                  <span class="tx-11">Tax Return</span>
                  <h6 class="tx-danger">$1,988</h6>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-3 mg-t-1 mg-lg-t-0">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">This Month's Sales</h6>
                <a href=""><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <span id="spark3">8,6,5,9,8,4,9,3,5,9</span>
                <span>$12,324</span>
              </div><!-- card-body -->
              <div class="card-footer">
                <div>
                  <span class="tx-11">Gross Sales</span>
                  <h6 class="tx-white">$18,433</h6>
                </div>
                <div>
                  <span class="tx-11">Purchase</span>
                  <h6 class="tx-white">654</h6>
                </div>
                <div>
                  <span class="tx-11">Tax Return</span>
                  <h6 class="tx-danger">$3,314</h6>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-3 mg-t-1 mg-lg-t-0">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title">Overall Sales</h6>
                <a href=""><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <span id="spark4">8,3,9,6,3,7,1,3,8,5</span>
                <span>$32,324</span>
              </div><!-- card-body -->
              <div class="card-footer">
                <div>
                  <span class="tx-11">Gross Sales</span>
                  <h6 class="tx-white">$56,433</h6>
                </div>
                <div>
                  <span class="tx-11">Purchases</span>
                  <h6 class="tx-white">1,654</h6>
                </div>
                <div>
                  <span class="tx-11">Tax Return</span>
                  <h6 class="tx-danger">$15,354</h6>
                </div>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="widget-2">
              <div class="card overflow-hidden">
                <div class="card-header">
                  <h6 class="card-title">Profile Statistics</h6>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="#" class="btn active">Today</a>
                    <a href="#" class="btn">This Week</a>
                    <a href="#" class="btn">This Month</a>
                  </div>
                </div><!-- card-header -->
                <div class="card-body pd-0 bd-color-gray-lighter">
                  <div class="row no-gutters tx-center">
                    <div class="col-12 col-sm-4 pd-y-20 tx-left">
                      <p class="pd-l-20 tx-12 lh-8 mg-b-0">Note: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula...</p>
                    </div><!-- col-4 -->
                    <div class="col-6 col-sm-2 pd-y-20">
                      <h5 class="tx-white tx-lato tx-bold mg-b-5">1,343</h5>
                      <p class="tx-12 mg-b-0">Views</p>
                    </div><!-- col-2 -->
                    <div class="col-6 col-sm-2 pd-y-20 bd-l bd-white-1">
                      <h5 class="tx-white tx-lato tx-bold mg-b-5">102</h5>
                      <p class="tx-12 mg-b-0">Likes</p>
                    </div><!-- col-2 -->
                    <div class="col-6 col-sm-2 pd-y-20 bd-l bd-white-1">
                      <h5 class="tx-white tx-lato tx-bold mg-b-5">343</h5>
                      <p class="tx-12 mg-b-0">Comments</p>
                    </div><!-- col-2 -->
                    <div class="col-6 col-sm-2 pd-y-20 bd-l bd-white-1">
                      <h5 class="tx-white tx-lato tx-bold mg-b-5">960</h5>
                      <p class="tx-12 mg-b-0">Shares</p>
                    </div><!-- col-2 -->
                  </div><!-- row -->
                </div><!-- card-body -->
                <div class="card-body pd-0">
                  <div id="rickshaw1" class="wd-100p ht-150 rounded-bottom"></div>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- widget-2 -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="widget-2">
              <div class="card overflow-hidden">
                <div class="card-header">
                  <h6 class="card-title">Profile Statistics</h6>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="#" class="btn active">Today</a>
                    <a href="#" class="btn">This Week</a>
                    <a href="#" class="btn">This Month</a>
                  </div>
                </div><!-- card-header -->
                <div class="card-body pd-0 bd-color-gray-lighter">
                  <div class="row no-gutters tx-center">
                    <div class="col-12 col-sm-4 pd-y-20 tx-left">
                      <p class="pd-l-20 tx-12 lh-8 mg-b-0">Note: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula...</p>
                    </div><!-- col-4 -->
                    <div class="col-6 col-sm-2 pd-y-20">
                      <h5 class="tx-white tx-lato tx-bold mg-b-5">1,343</h5>
                      <p class="tx-12 mg-b-0">Views</p>
                    </div><!-- col-2 -->
                    <div class="col-6 col-sm-2 pd-y-20 bd-l bd-white-1">
                      <h5 class="tx-white tx-lato tx-bold mg-b-5">102</h5>
                      <p class="tx-12 mg-b-0">Likes</p>
                    </div><!-- col-2 -->
                    <div class="col-6 col-sm-2 pd-y-20 bd-l bd-white-1">
                      <h5 class="tx-white tx-lato tx-bold mg-b-5">343</h5>
                      <p class="tx-12 mg-b-0">Comments</p>
                    </div><!-- col-2 -->
                    <div class="col-6 col-sm-2 pd-y-20 bd-l bd-white-1">
                      <h5 class="tx-white tx-lato tx-bold mg-b-5">960</h5>
                      <p class="tx-12 mg-b-0">Shares</p>
                    </div><!-- col-2 -->
                  </div><!-- row -->
                </div><!-- card-body -->
                <div class="card-body pd-0">
                  <div id="rickshaw2" class="wd-100p ht-150"></div>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- widget-2 -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <div class="card-header bg-transparent d-flex justify-content-between align-items-center bd-white-1">
                <h6 class="card-title tx-uppercase tx-12 tx-white mg-b-0">Unique Visits</h6>
                <span class="tx-12 tx-uppercase">June 20-27, 2017</span>
              </div><!-- card-header -->
              <div class="card-body d-xs-flex justify-content-between align-items-center">
                <h4 class="mg-b-0 tx-white tx-lato tx-bold">5,322,425</h4>
                <p class="mg-b-0 tx-sm"><span class="tx-success"><i class="fa fa-arrow-up"></i> 34.32%</span> from last week</p>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-4 -->
          <div class="col-sm-6 col-lg-4 mg-t-20 mg-sm-t-0">
            <div class="card">
              <div class="card-header bg-transparent d-flex justify-content-between align-items-center bd-white-1">
                <h6 class="card-title tx-uppercase tx-12 tx-white mg-b-0">Unique Impressions</h6>
                <span class="tx-12 tx-uppercase">June 20-27, 2017</span>
              </div><!-- card-header -->
              <div class="card-body d-xs-flex justify-content-between align-items-center">
                <h4 class="mg-b-0 tx-white tx-lato tx-bold">3,006,983</h4>
                <p class="mg-b-0 tx-sm"><span class="tx-danger"><i class="fa fa-arrow-down"></i> 0.92%</span> from last week</p>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-4 -->
          <div class="col-sm-6 col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="card">
              <div class="card-header bg-transparent d-flex justify-content-between align-items-center bd-white-1">
                <h6 class="card-title tx-uppercase tx-12 tx-white mg-b-0">Daily Impressions</h6>
                <span class="tx-12 tx-uppercase">June 20, 2017</span>
              </div><!-- card-header -->
              <div class="card-body d-xs-flex justify-content-between align-items-center">
                <h4 class="mg-b-0 tx-white tx-lato tx-bold">23,554</h4>
                <p class="mg-b-0 tx-sm"><span class="tx-success"><i class="fa fa-arrow-up"></i> 16.34%</span> from last week</p>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-4 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <div class="card-header bg-transparent d-flex justify-content-between align-items-center bd-white-1">
                <h6 class="card-title tx-uppercase tx-12 tx-white mg-b-0">Hardware Monitoring</h6>
                <span class="tx-12 tx-uppercase">February 2017</span>
              </div><!-- card-header -->
              <div class="card-body">
                <p class="tx-sm tx-white tx-medium mg-b-0">Hardware Monitoring</p>
                <p class="tx-12">Intel Dothraki G125H 2.5GHz</p>
                <div class="row align-items-center">
                  <div class="col-3 tx-12">CPU1</div><!-- col-3 -->
                  <div class="col-9">
                    <div class="progress bg-black-1 rounded-0 mg-b-0">
                      <div class="progress-bar bg-info wd-50p lh-3" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div><!-- progress -->
                  </div><!-- col-9 -->
                </div><!-- row -->
                <div class="row align-items-center mg-t-5">
                  <div class="col-3 tx-12">CPU2</div><!-- col-3 -->
                  <div class="col-9">
                    <div class="progress bg-black-1 rounded-0 mg-b-0">
                      <div class="progress-bar bg-pink wd-90p lh-3" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div><!-- progress -->
                  </div><!-- col-9 -->
                </div><!-- row -->
                <p class="tx-11 mg-b-0 mg-t-15">Notice: Lorem ipsum dolor sit amet.</p>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-4 -->
          <div class="col-sm-6 col-lg-4 mg-t-20 mg-sm-t-0">
            <div class="card">
              <div class="card-header bg-transparent d-flex justify-content-between align-items-center bd-white-1">
                <h6 class="card-title tx-uppercase tx-12 tx-white mg-b-0">Sales Monitoring</h6>
                <span class="tx-12 tx-uppercase">March 2017</span>
              </div><!-- card-header -->
              <div class="card-body">
                <p class="tx-sm tx-white tx-medium mg-b-0">Bracket Online Store</p>
                <p class="tx-12"><a href="">http://bracketstore.com</a></p>
                <div class="row align-items-center">
                  <div class="col-3 tx-12">Men</div><!-- col-3 -->
                  <div class="col-9">
                    <div class="progress bg-black-1 rounded-0 mg-b-0">
                      <div class="progress-bar bg-teal wd-50p lh-3" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
                    </div><!-- progress -->
                  </div><!-- col-9 -->
                </div><!-- row -->
                <div class="row align-items-center mg-t-5">
                  <div class="col-3 tx-12">Women</div><!-- col-3 -->
                  <div class="col-9">
                    <div class="progress bg-black-1 rounded-0 mg-b-0">
                      <div class="progress-bar bg-info wd-45p lh-3" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                    </div><!-- progress -->
                  </div><!-- col-9 -->
                </div><!-- row -->
                <p class="tx-11 mg-b-0 mg-t-15">Notice: Lorem ipsum dolor sit amet.</p>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-4 -->
          <div class="col-sm-6 col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="card">
              <div class="card-header bg-transparent d-flex justify-content-between align-items-center bd-white-1">
                <h6 class="card-title tx-uppercase tx-12 tx-white mg-b-0">Site Traffic Monitoring</h6>
                <span class="tx-12 tx-uppercase">April 2017</span>
              </div><!-- card-header -->
              <div class="card-body">
                <p class="tx-sm tx-white tx-medium mg-b-0">Bracket Online Store</p>
                <p class="tx-12"><a href="">http://bracketstore.com</a></p>
                <div class="row align-items-center">
                  <div class="col-4 tx-12">Visits</div>
                  <div class="col-8">
                    <div class="progress bg-black-1 rounded-0 mg-b-0">
                      <div class="progress-bar bg-pink wd-25p lh-3" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div><!-- progress -->
                  </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row align-items-center mg-t-5">
                  <div class="col-4 tx-12">Impressions</div>
                  <div class="col-8">
                    <div class="progress bg-black-1 rounded-0 mg-b-0">
                      <div class="progress-bar bg-indigo wd-45p lh-3" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                    </div><!-- progress -->
                  </div><!-- col-8 -->
                </div><!-- row -->
                <p class="tx-11 mg-b-0 mg-t-15">Notice: Lorem ipsum dolor sit amet.</p>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-4 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="card card-body pd-25">
              <div class="row">
                <div class="col-sm-6">
                  <h6 class="card-title tx-uppercase tx-white tx-12">Statistics Summary</h6>
                  <p class="display-4 tx-medium tx-white mg-b-5 tx-lato">25%</p>
                  <div class="progress bg-black-1 mg-b-10">
                    <div class="progress-bar bg-primary progress-bar-xs wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div><!-- progress -->
                  <p class="tx-12">Nulla consequat massa quis enim. Donec pede justo, fringilla vel...</p>
                  <p class="tx-11 lh-3 mg-b-0">You can also use other progress variant found in <a href="progress.html" target="blank">progress section</a>.</p>
                </div><!-- col-6 -->
                <div class="col-sm-6 mg-t-20 mg-sm-t-0 d-flex align-items-center justify-content-center">
                  <span class="peity-donut" data-peity='{ "fill": ["#0866C6", "#E9ECEF"],  "innerRadius": 60, "radius": 90 }'>30/100</span>
                </div><!-- col-6 -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-30 mg-lg-t-0">
            <div class="card card-body pd-25 bd-gray-400">
              <div class="row">
                <div class="col-sm-6">
                  <h6 class="card-title tx-uppercase tx-12 tx-white">Statistics Summary</h6>
                  <p class="display-4 tx-medium tx-white mg-b-5 tx-lato">45%</p>
                  <div class="progress bg-black-1 mg-b-10">
                    <div class="progress-bar bg-info progress-bar-xs wd-45p" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                  </div><!-- progress -->
                  <p class="tx-12">Nulla consequat massa quis enim. Donec pede justo, fringilla vel...</p>
                  <p class="tx-11 lh-3 mg-b-0">You can also use other progress variant found in <a href="progress.html" class="tx-info" target="blank">progress section</a>.</p>
                </div><!-- col-6 -->
                <div class="col-sm-6 mg-t-20 mg-sm-t-0 d-flex align-items-end justify-content-center">
                  <span class="peity-bar" data-peity='{ "fill": ["#17A2B8","#6F42C1","#1CAF9A","#0866C6"], "height": 150, "width": 250 }'>8,6,5,9,8,4,9,3,5,9</span>
                </div><!-- col-6 -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <div class="card bd-gray-400 mg-t-20">
          <div class="card-header bg-transparent pd-x-25 pd-y-15 bd-b-0 d-flex justify-content-between align-items-center">
            <h6 class="card-title tx-uppercase tx-12 tx-white mg-b-0">Storage Overview</h6>
            <a href="" class="tx-gray-500 hover-info lh-0"><i class="icon ion-android-more-horizontal tx-24 lh-0"></i></a>
          </div><!-- card-header -->
          <div class="card-body pd-x-25 pd-b-25 pd-t-0">
            <div class="row no-gutters">
              <div class="col-sm-6 col-lg-3">
                <div class="card card-body rounded-0">
                  <h6 class="tx-white tx-14 mg-b-5">Engineering Dept</h6>
                  <span class="tx-12">Path: /nas1/volume1</span>
                  <div class="tx-center mg-y-20">
                    <span class="peity-donut" data-peity='{ "fill": ["#17A2B8", "#E9ECEF"],  "innerRadius": 50, "radius": 80 }'>45/100</span>
                  </div>
                  <p class="tx-10 tx-uppercase tx-medium mg-b-0 tx-spacing-1">Storage Size</p>
                  <h2 class="tx-white tx-bold tx-lato">
                    <span>0.98TB</span>
                  </h2>
                  <div class="d-flex justify-content-between tx-12">
                    <div>
                      <span class="square-10 bg-info mg-r-5"></span> 396 GB used
                      <h5 class="mg-b-0 mg-t-5 tx-bold tx-white tx-lato">45%</h5>
                    </div>
                    <div>
                      <span class="square-10 bg-gray-300 mg-r-5"></span> 594 GB free
                      <h5 class="mg-b-0 mg-t-5 tx-bold tx-white tx-lato">65%</h5>
                    </div>
                  </div><!-- d-flex -->
                </div><!-- card -->
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t--1 mg-sm-t-0 mg-lg-l--1">
                <div class="card card-body rounded-0 bd-lg-l-0">
                  <h6 class="tx-white tx-14 mg-b-5">Sales Dept</h6>
                  <span class="tx-12">Path: /nas1/volume2</span>
                  <div class="tx-center mg-y-20">
                    <span class="peity-donut" data-peity='{ "fill": ["#6F42C1", "#E9ECEF"],  "innerRadius": 50, "radius": 80 }'>70/100</span>
                  </div>
                  <p class="tx-10 tx-uppercase tx-medium mg-b-0 tx-spacing-1">Storage Size</p>
                  <h2 class="tx-white tx-bold tx-lato">
                    <span>0.98TB</span>
                  </h2>
                  <div class="d-flex justify-content-between tx-12">
                    <div>
                      <span class="square-10 bg-purple mg-r-5"></span> 698 GB used
                      <h5 class="mg-b-0 mg-t-5 tx-white tx-lato tx-bold">69%</h5>
                    </div>
                    <div>
                      <span class="square-10 bg-gray-300 mg-r-5"></span> 291 GB free
                      <h5 class="mg-b-0 mg-t-5 tx-white tx-lato tx-bold">29%</h5>
                    </div>
                  </div><!-- d-flex -->
                </div><!-- card -->
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t--1 mg-lg-t-0 mg-lg-l--1">
                <div class="card card-body rounded-0">
                  <h6 class="tx-white tx-14 mg-b-5">Admin Dept</h6>
                  <span class="tx-12">Path: /nas1/volume3</span>
                  <div class="tx-center mg-y-20">
                    <span class="peity-donut" data-peity='{ "fill": ["#1CAF9A", "#E9ECEF"],  "innerRadius": 50, "radius": 80 }'>60/100</span>
                  </div>
                  <p class="tx-10 tx-uppercase tx-medium mg-b-0 tx-spacing-1">Storage Size</p>
                  <h2 class="tx-white tx-bold tx-lato">
                    <span>1.95TB</span>
                  </h2>
                  <div class="d-flex justify-content-between tx-12">
                    <div>
                      <span class="square-10 bg-teal mg-r-5"></span> 404 GB used
                      <h5 class="mg-b-0 mg-t-5 tx-white tx-bold tx-lato">21%</h5>
                    </div>
                    <div>
                      <span class="square-10 bg-gray-300 mg-r-5"></span> 1.59 GB free
                      <h5 class="mg-b-0 mg-t-5 tx-white tx-bold tx-lato">79%</h5>
                    </div>
                  </div><!-- d-flex -->
                </div><!-- card -->
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t--1 mg-lg-t-0 mg-lg-l--1">
                <div class="card card-body rounded-0">
                  <h6 class="tx-white tx-14 mg-b-5">Finance Dept</h6>
                  <span class="tx-12">Path: /nas1/volume4</span>
                  <div class="tx-center mg-y-20">
                    <span class="peity-donut" data-peity='{ "fill": ["#0866C6", "#E9ECEF"],  "innerRadius": 50, "radius": 80 }'>75/100</span>
                  </div>
                  <p class="tx-10 tx-uppercase tx-medium mg-b-0 tx-spacing-1">Storage Size</p>
                  <h2 class="tx-white tx-bold tx-lato">
                    <span>1.95TB</span>
                  </h2>
                  <div class="d-flex justify-content-between tx-12">
                    <div>
                      <span class="square-10 bg-primary mg-r-5"></span> 404 GB used
                      <h5 class="mg-b-0 mg-t-5 tx-white tx-bold tx-lato">21%</h5>
                    </div>
                    <div>
                      <span class="square-10 bg-gray-300 mg-r-5"></span> 1.59 GB free
                      <h5 class="mg-b-0 mg-t-5 tx-white tx-bold tx-lato">79%</h5>
                    </div>
                  </div><!-- d-flex -->
                </div><!-- card -->
              </div><!-- col-3 -->
            </div><!-- row -->
          </div><!-- card-body -->
        </div><!-- card -->

        <div class="row row-sm mg-t-20">
          <div class="col-sm-6 col-lg-4">
            <div class="card overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-earth tx-80 lh-0 tx-primary"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-2 tx-mont tx-semibold tx-uppercase mg-b-10">Today's Visits</p>
                  <p class="tx-32 tx-white tx-lato mg-b-0 lh-1">1,975,224</p>
                  <span class="tx-12 tx-roboto tx-gray-600">24% higher than yesterday</span>
                </div>
              </div>
              <div id="ch5" class="ht-60 tr-y-1"></div>
            </div>
          </div><!-- col-4 -->
          <div class="col-sm-6 col-lg-4 mg-t-20 mg-sm-t-0">
            <div class="card overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-bag tx-80 lh-0 tx-purple"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase mg-b-10">Today Sales</p>
                  <p class="tx-32 tx-lato tx-white mg-b-0 lh-1">$329,291</p>
                  <span class="tx-12 tx-roboto tx-gray-600">$390,212 before tax</span>
                </div>
              </div>
              <div id="ch6" class="ht-60 tr-y-1"></div>
            </div>
          </div><!-- col-4 -->
          <div class="col-sm-6 col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="card overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-monitor tx-80 lh-0 tx-teal"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase mg-b-10">% Unique Visits</p>
                  <p class="tx-32 tx-white tx-lato mg-b-0 lh-1">54.45%</p>
                  <span class="tx-12 tx-roboto tx-gray-600">23% average duration</span>
                </div>
              </div>
              <div id="ch7" class="ht-60 tr-y-1"></div>
            </div>
          </div><!-- col-4 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
          <div class="col-sm-6 col-lg-3">
            <div class="bg-info rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-earth tx-60 lh-0 tx-white-8"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Today's Visits</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">1,975,224</p>
                  <span class="tx-11 tx-roboto tx-white-8">24% higher yesterday</span>
                </div>
              </div>
              <div id="ch1" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-3 mg-t-20 mg-sm-t-0">
            <div class="bg-purple rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-bag tx-60 lh-0 tx-white-8"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Today Sales</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">$329,291</p>
                  <span class="tx-11 tx-roboto tx-white-8">$390,212 before tax</span>
                </div>
              </div>
              <div id="ch3" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-3 mg-t-20 mg-lg-t-0">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-monitor tx-60 lh-0 tx-white-8"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">% Unique Visits</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">54.45%</p>
                  <span class="tx-11 tx-roboto tx-white-8">23% average duration</span>
                </div>
              </div>
              <div id="ch2" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-lg-3 mg-t-20 mg-lg-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-clock tx-60 lh-0 tx-white-8"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Bounce Rate</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">32.16%</p>
                  <span class="tx-11 tx-roboto tx-white-8">65.45% on average time</span>
                </div>
              </div>
              <div id="ch4" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <div id="carousel1" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel1" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="ht-300 pos-relative overflow-hidden d-flex flex-column align-items-start rounded">
                      <div class="pos-absolute t-15 r-25">
                        <a href="" class="tx-gray-500 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                      </div>
                      <div class="pd-x-30 pd-t-30 mg-b-auto">
                        <p class="tx-info tx-uppercase tx-11 tx-semibold tx-mont mg-b-5">Product Item #1</p>
                        <h5 class="tx-white mg-b-20">Samsung Galaxy S8</h5>
                        <p class="tx-uppercase tx-11 tx-semibold tx-mont mg-b-0">Purchases</p>
                        <h2 class="tx-white tx-lato tx-bold mg-b-0">2366</h2>
                        <span>53.86 purchases/month</span>
                      </div>
                      <div id="ch8" class="ht-100 tr-y-1"></div>
                    </div><!-- d-flex -->
                  </div>
                  <div class="carousel-item">
                    <div class="ht-300 pos-relative overflow-hidden d-flex flex-column align-items-start rounded">
                      <div class="pos-absolute t-15 r-25">
                        <a href="" class="tx-gray-500 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                      </div>
                      <div class="pd-x-30 pd-t-30 mg-b-auto">
                        <p class="tx-info tx-uppercase tx-11 tx-semibold tx-mont mg-b-5">Product Item #2</p>
                        <h5 class="tx-white mg-b-20">Apple iPhone 8 Plus</h5>
                        <p class="tx-uppercase tx-11 tx-semibold tx-mont mg-b-0">Purchases</p>
                        <h2 class="tx-white tx-lato tx-bold mg-b-0">5632</h2>
                        <span>120.44 purchases/month</span>
                      </div>
                      <div id="ch9" class="ht-100 tr-y-1"></div>
                    </div><!-- d-flex -->
                  </div><!-- cardousel-item -->
                </div><!-- carousel-inner -->
              </div><!-- carousel -->
            </div><!-- card -->
          </div><!-- col-4 -->
          <div class="col-sm-6 col-lg-4 mg-t-20 mg-sm-t-0">
            <div class="card">
              <div id="carousel3" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel3" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel3" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="ht-300 pos-relative overflow-hidden d-flex flex-column align-items-start rounded">
                      <div class="pos-absolute t-15 r-25">
                        <a href="" class="tx-gray-500 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                      </div>
                      <div class="pd-x-30 pd-t-30 mg-b-auto">
                        <p class="tx-info tx-uppercase tx-11 tx-semibold tx-mont mg-b-5">Product Item #1</p>
                        <h5 class="tx-white mg-b-20">Samsung Galaxy S8</h5>
                        <p class="tx-uppercase tx-11 tx-semibold tx-mont mg-b-0">Purchases</p>
                        <h2 class="tx-white tx-lato tx-bold mg-b-0">2366</h2>
                        <span>53.86 purchases/month</span>
                      </div>
                      <div id="ch10" class="ht-100 tr-y-1"></div>
                    </div><!-- d-flex -->
                  </div>
                  <div class="carousel-item">
                    <div class="ht-300 pos-relative overflow-hidden d-flex flex-column align-items-start rounded">
                      <div class="pos-absolute t-15 r-25">
                        <a href="" class="tx-gray-500 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                      </div>
                      <div class="pd-x-30 pd-t-30 mg-b-auto">
                        <p class="tx-info tx-uppercase tx-11 tx-semibold tx-mont mg-b-5">Product Item #2</p>
                        <h5 class="tx-white mg-b-20">Apple iPhone 8 Plus</h5>
                        <p class="tx-uppercase tx-11 tx-semibold tx-mont mg-b-0">Purchases</p>
                        <h2 class="tx-white tx-lato tx-bold mg-b-0">5632</h2>
                        <span>120.44 purchases/month</span>
                      </div>
                      <div id="ch11" class="ht-100 tr-y-1"></div>
                    </div><!-- d-flex -->
                  </div><!-- cardousel-item -->
                </div><!-- carousel-inner -->
              </div><!-- carousel -->
            </div><!-- card -->
          </div><!-- col-4 -->
          <div class="col-sm-6 col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="card bd-0">
              <div id="carousel2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel2" data-slide-to="1"></li>
                  <li data-target="#carousel2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="bg-br-primary pd-30 ht-300 pos-relative d-flex align-items-center rounded">
                      <div class="pos-absolute t-15 r-25">
                        <a href="" class="tx-white-5 hover-info"><i class="icon ion-edit tx-16"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-stats-bars tx-20"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-gear-a tx-20"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                      </div>
                      <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-semibold tx-mont tx-spacing-2 tx-white-5">Recent Article</p>
                        <h5 class="lh-5 mg-b-20">20 Best Travel Tips After 5 Years Of Traveling The World</h5>
                        <nav class="nav flex-row tx-13">
                          <a href="" class="tx-white-8 hover-white pd-l-0 pd-r-5">12K+ Views</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">234 Shares</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">43 Comments</a>
                        </nav>
                      </div>
                    </div><!-- d-flex -->
                  </div>
                  <div class="carousel-item">
                    <div class="bg-info pd-30 ht-300 pos-relative d-flex align-items-center rounded">
                      <div class="pos-absolute t-15 r-25">
                        <a href="" class="tx-white-5 hover-info"><i class="icon ion-edit tx-16"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-stats-bars tx-20"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-gear-a tx-20"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                      </div>
                      <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-semibold tx-mont tx-spacing-2 tx-white-5">Recent Article</p>
                        <h5 class="lh-5 mg-b-20">How I Flew Around the World in Business Class for $1,340</h5>
                        <nav class="nav flex-row tx-13">
                          <a href="" class="tx-white-8 hover-white pd-l-0 pd-r-5">Edit</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Unpublish</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Delete</a>
                        </nav>
                      </div>
                    </div><!-- d-flex -->
                  </div>
                  <div class="carousel-item">
                    <div class="bg-purple pd-30 ht-300 d-flex pos-relative align-items-center rounded">
                      <div class="pos-absolute t-15 r-25">
                        <a href="" class="tx-white-5 hover-info"><i class="icon ion-edit tx-16"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-stats-bars tx-20"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-gear-a tx-20"></i></a>
                        <a href="" class="tx-white-5 hover-info mg-l-7"><i class="icon ion-more tx-20"></i></a>
                      </div>
                      <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-semibold tx-mont tx-spacing-2 tx-white-5">Recent Article</p>
                        <h5 class="lh-5 mg-b-20">10 Reasons Why Travel Makes You a Happier Person</h5>
                        <nav class="nav flex-row tx-13">
                          <a href="" class="tx-white-8 hover-white pd-l-0 pd-r-5">Edit</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Unpublish</a>
                          <a href="" class="tx-white-8 hover-white pd-x-5">Delete</a>
                        </nav>
                      </div>
                    </div><!-- d-flex -->
                  </div>
                </div><!-- carousel-inner -->
              </div><!-- carousel -->
            </div><!-- card -->
          </div><!-- col-4 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header bg-transparent pd-20 bd-white-1">
                <h6 class="card-title tx-uppercase tx-12 tx-white mg-b-0">User Transaction History</h6>
              </div><!-- card-header -->
              <table class="table table-responsive mg-b-0 tx-12">
                <thead>
                  <tr class="tx-10">
                    <th class="wd-10p pd-y-5">&nbsp;</th>
                    <th class="pd-y-5">User</th>
                    <th class="pd-y-5">Type</th>
                    <th class="pd-y-5">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pd-l-20">
                      <img src="https://via.placeholder.com/500" class="wd-36 rounded-circle" alt="Image">
                    </td>
                    <td>
                      <a href="" class="tx-white tx-14 tx-medium d-block">Mark K. Peters</a>
                      <span class="tx-11 d-block">TRANSID: 1234567890</span>
                    </td>
                    <td class="tx-12">
                      <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Email verified
                    </td>
                    <td>Just Now</td>
                  </tr>
                  <tr>
                    <td class="pd-l-20">
                      <img src="https://via.placeholder.com/500" class="wd-36 rounded-circle" alt="Image">
                    </td>
                    <td>
                      <a href="" class="tx-white tx-14 tx-medium d-block">Karmen F. Brown</a>
                      <span class="tx-11 d-block">TRANSID: 1234567890</span>
                    </td>
                    <td class="tx-12">
                      <span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Pending verification
                    </td>
                    <td>Apr 21, 2017 8:34am</td>
                  </tr>
                  <tr>
                    <td class="pd-l-20">
                      <img src="https://via.placeholder.com/500" class="wd-36 rounded-circle" alt="Image">
                    </td>
                    <td>
                      <a href="" class="tx-white tx-14 tx-medium d-block">Gorgonio Magalpok</a>
                      <span class="tx-11 d-block">TRANSID: 1234567890</span>
                    </td>
                    <td class="tx-12">
                      <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Purchased success
                    </td>
                    <td>Apr 10, 2017 4:40pm</td>
                  </tr>
                  <tr>
                    <td class="pd-l-20">
                      <img src="https://via.placeholder.com/500" class="wd-36 rounded-circle" alt="Image">
                    </td>
                    <td>
                      <a href="" class="tx-white tx-14 tx-medium d-block">Ariel T. Hall</a>
                      <span class="tx-11 d-block">TRANSID: 1234567890</span>
                    </td>
                    <td class="tx-12">
                      <span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Payment on hold
                    </td>
                    <td>Apr 02, 2017 6:45pm</td>
                  </tr>
                  <tr>
                    <td class="pd-l-20">
                      <img src="https://via.placeholder.com/500" class="wd-36 rounded-circle" alt="Image">
                    </td>
                    <td>
                      <a href="" class="tx-white tx-14 tx-medium d-block">John L. Goulette</a>
                      <span class="tx-11 d-block">TRANSID: 1234567890</span>
                    </td>
                    <td class="tx-12">
                      <span class="square-8 bg-pink mg-r-5 rounded-circle"></span> Account deactivated
                    </td>
                    <td>Mar 30, 2017 10:30am</td>
                  </tr>
                </tbody>
              </table>
              <div class="card-footer tx-12 pd-y-15 bg-transparent bd-white-1">
                <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Transaction History</a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="card bd-gray-400">
              <div class="card-header pd-20 bg-transparent bd-white-1">
                <h6 class="card-title tx-uppercase tx-12 tx-white mg-b-0">Product Purchases</h6>
              </div><!-- card-header -->
              <table class="table table-responsive mg-b-0 tx-12">
                <thead>
                  <tr class="tx-10">
                    <th class="wd-10p pd-y-5">&nbsp;</th>
                    <th class="pd-y-5">Item Details</th>
                    <th class="pd-y-5 tx-right">Sold</th>
                    <th class="pd-y-5">Gain</th>
                    <th class="pd-y-5 tx-center">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pd-l-20">
                      <img src="https://via.placeholder.com/800x533" class="wd-55" alt="Image">
                    </td>
                    <td>
                      <a href="" class="tx-white tx-14 tx-medium d-block">The Dothraki Shoes</a>
                      <span class="tx-11 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span> 20 remaining</span>
                    </td>
                    <td class="valign-middle tx-right">3,345</td>
                    <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>33.34%</span> from last week</td>
                    <td class="valign-middle tx-center">
                      <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td class="pd-l-20">
                      <img src="https://via.placeholder.com/800x533" class="wd-55" alt="Image">
                    </td>
                    <td>
                      <a href="" class="tx-white tx-14 tx-medium d-block">Westeros Sneaker</a>
                      <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                    </td>
                    <td class="valign-middle tx-right">720</td>
                    <td class="valign-middle"><span class="tx-danger"><i class="icon ion-android-arrow-down mg-r-5"></i>21.20%</span> from last week</td>
                    <td class="valign-middle tx-center">
                      <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td class="pd-l-20">
                      <img src="https://via.placeholder.com/800x533" class="wd-55" alt="Image">
                    </td>
                    <td>
                      <a href="" class="tx-white tx-14 tx-medium d-block">Selonian Hand Bag</a>
                      <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                    </td>
                    <td class="valign-middle tx-right">1,445</td>
                    <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>23.34%</span> from last week</td>
                    <td class="valign-middle tx-center">
                      <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td class="pd-l-20">
                      <img src="https://via.placeholder.com/800x533" class="wd-55" alt="Image">
                    </td>
                    <td>
                      <a href="" class="tx-white tx-14 tx-medium d-block">Kel Dor Sunglass</a>
                      <span class="tx-11 d-block"><span class="square-8 bg-warning mg-r-5 rounded-circle"></span> 45 remaining</span>
                    </td>
                    <td class="valign-middle tx-right">2,500</td>
                    <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>28.78%</span> from last week</td>
                    <td class="valign-middle tx-center">
                      <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td class="pd-l-20">
                      <img src="https://via.placeholder.com/800x533" class="wd-55" alt="Image">
                    </td>
                    <td>
                      <a href="" class="tx-white tx-14 tx-medium d-block">Kubaz Sunglass</a>
                      <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                    </td>
                    <td class="valign-middle tx-14 tx-right">223</td>
                    <td class="valign-middle"><span class="tx-danger"><i class="icon ion-android-arrow-down mg-r-5"></i>18.18%</span> from last week</td>
                    <td class="valign-middle tx-center">
                      <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="card-footer tx-12 pd-y-15 bg-transparent bd-white-1">
                <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Products</a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <div class="bg-br-primary ht-100 d-flex align-items-center justify-content-center mg-t-20">
          <h6 class="tx-uppercase mg-b-0 tx-roboto tx-normal tx-spacing-2">More Coming Soon...</h6>
        </div>
      </div><!-- br-pagebody -->