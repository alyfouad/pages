@extends('layouts.app')
@section('content')
<div data-pages="parallax">
    <div class="container-fluid p-l-25 p-r-25 sm-p-l-0 sm-p-r-0">
      <div class="inner" style="transform: translateY(0px); opacity: 1;">
        <!-- START BREADCRUMB -->
        <ol class="breadcrumb sm-p-b-5">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div>
    <!-- END JUMBOTRON -->
    <!-- START CONTAINER FLUID -->
    <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10">
        <!-- START ROW -->
        <div class="row">
          <div class="col-lg-3 col-sm-6  d-flex flex-column">
            <!-- START WIDGET widget_map_sales-->
            <!-- START ITEM -->
            <div class="card social-card share  full-width m-b-10 no-border" data-social="item">
              <div class="card-header ">
                <h5 class="text-primary pull-left fs-12 d-flex align-items-center">Update <i class="pg-icon">circle_fill</i></h5>
                <div class="pull-right small hint-text d-flex align-items-center">
                  5,345 <i class="pg-icon m-l-5">comment</i>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="card-description">
                <h3>page dashboard Version 3.0 now release with limitless layout possibilities</h3>
              </div>
              <div class="card-footer clearfix">
                <div class="pull-left">via <span class="text-complete">Pages</span>
                </div>
                <div class="pull-right hint-text">
                  July 23
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <!-- END ITEM -->
            <!-- END WIDGET -->
            <!-- START WIDGET widget_weekly_sales_card-->
            <div class="card no-border widget-loader-bar m-b-10">
              <div class="container-xs-height full-height">
                <div class="row-xs-height">
                  <div class="col-xs-height col-top">
                    <div class="card-header  top-left top-right">
                      <div class="card-title">
                        <span class="font-montserrat all-caps d-flex align-items-center">Weekly Sales <i class="pg-icon">chevron_right</i>
                                    </span>
                      </div>
                      <div class="card-controls">
                        <ul>
                          <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row-xs-height">
                  <div class="col-xs-height col-top">
                    <div class="p-l-20 p-t-50 p-b-40 p-r-20">
                      <h3 class="no-margin p-b-5">$24,000</h3>
                      <span class="small hint-text pull-left">71% of total goal</span>
                      <span class="pull-right small text-primary">$23,000</span>
                    </div>
                  </div>
                </div>
                <div class="row-xs-height">
                  <div class="col-xs-height col-bottom">
                    <div class="progress progress-small m-b-0">
                      <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                      <div class="progress-bar progress-bar-primary" style="width:71%"></div>
                      <!-- END BOOTSTRAP PROGRESS -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END WIDGET -->
            <!-- START WIDGET widget_weekly_sales_card-->
            <div class="card no-border widget-loader-bar m-b-10">
              <div class="container-xs-height full-height">
                <div class="row-xs-height">
                  <div class="col-xs-height col-top">
                    <div class="card-header  top-left top-right">
                      <div class="card-title">
                        <span class="font-montserrat all-caps d-flex align-items-center">Page Visits <i class="pg-icon">chevron_right</i>
                                    </span>
                      </div>
                      <div class="card-controls">
                        <ul>
                          <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row-xs-height">
                  <div class="col-xs-height col-top">
                    <div class="p-l-20 p-t-50 p-b-40 p-r-20">
                      <h3 class="no-margin p-b-5">423</h3>
                      <span class="small hint-text pull-left">22% higher</span>
                      <span class="pull-right small text-danger">$23,000</span>
                    </div>
                  </div>
                </div>
                <div class="row-xs-height">
                  <div class="col-xs-height col-bottom">
                    <div class="progress progress-small m-b-0">
                      <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                      <div class="progress-bar progress-bar-danger" style="width:15%"></div>
                      <!-- END BOOTSTRAP PROGRESS -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END WIDGET -->
          </div>
          <div class="col-lg-3 col-sm-6  d-flex flex-column">
            <!-- START ITEM -->
            <div class="card social-card share  full-width m-b-10 no-border" data-social="item">
              <div class="card-header clearfix">
                <h5 class="text-success pull-left fs-12 d-flex align-items-center">Stock Market <i class="pg-icon">circle_fill</i></h5>
                <div class="pull-right small hint-text d-flex align-items-center">
                  5,345 <i class="pg-icon m-l-5">comment</i>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="card-description">
                <h5 class="no-margin">Apple Inc.</h5>
                <h5 class="small hint-text no-margin">NASDAQ: AAPL - Nov 13 8:37 AM ET</h5>
                <h3 class="m-b-0">111.25 <span class="text-success"><i class="pg-icon text-success">arrow_up</i> 0.15</span>
                        </h3>
              </div>
              <div class="card-footer clearfix">
                <div class="pull-left">by <span class="text-success">John Smith</span>
                </div>
                <div class="pull-right hint-text">
                  Apr 23
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <!-- END ITEM -->
            <!-- START ITEM -->
            <div class="card social-card share share-other full-width m-b-10 d-flex flex-1 full-height no-border sm-vh-75" data-social="item">
              <div class="circle" data-toggle="tooltip" title="" data-container="body" data-original-title="Label">
              </div>
              <div class="card-content flex-1" data-pages-bg-image="assets/img/social_new.jpg" style="background-image: url(&quot;assets/img/social_new.jpg&quot;);">
                <ul class="buttons ">
                  <li>
                    <a href="#"><i class="pg-icon">expand</i>
                                </a>
                  </li>
                  <li>
                    <a href="#"><i class="pg-icon">heart</i>
                                </a>
                  </li>
                </ul>
              <div class="bg-overlay" style="opacity: 0;"></div></div>
              <div class="card-description">
                <p><a href="#">#TBT</a> :D</p>
              </div>
              <div class="card-footer clearfix">
                <div class="time">few seconds ago</div>
                <ul class="reactions">
                  <li><a href="#" class="d-flex align-items-center">5,345 <i class="pg-icon m-l-5">comment</i></a>
                  </li>
                  <li><a href="#" class="d-flex align-items-center">23K <i class="pg-icon m-l-5">heart</i></a>
                  </li>
                </ul>
              </div>
              <div class="card-header clearfix">
                <div class="user-pic">
                  <img alt="Avatar" width="33" height="33" data-src-retina="assets/img/profiles/avatar_small2x.jpg" data-src="assets/img/profiles/avatar.jpg" src="assets/img/profiles/avatar.jpg">
                </div>
                <h5>David Nester</h5>
                <h6>Shared a link on your wall</h6>
              </div>
            </div>
            <!-- END ITEM -->
          </div>
          <div class="col-lg-6 m-b-10 d-flex">
            <!-- START WIDGET widget_tableWidget.tpl-->
            <div class="widget-11 widget-11-3 card no-border no-margin widget-loader-bar">
              <div class="card-header">
                <div class="card-title">Today's Table
                </div>
                <div class="card-controls">
                  <ul>
                    <li><a data-toggle="refresh" class="card-refresh" href="#"><i class="card-icon card-icon-refresh"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-l-20 p-r-20 p-b-10 p-t-5">
                <div class="pull-left">
                  <h3 class="text-primary no-margin">Pages</h3>
                </div>
                <h4 class="pull-right semi-bold no-margin"><sup>
                        <small class="semi-bold">$</small>
                    </sup> 102,967
                    </h4>
                <div class="clearfix"></div>
              </div>
              <div class="widget-11-3-table auto-overflow">
                <table class="table table-condensed table-hover">
                  <tbody>
                    <tr>
                      <td class=" fs-12">Purchase CODE #2345</td>
                      <td class="text-right">
                        <span class="hint-text small">dewdrops</span>
                      </td>
                      <td class="text-right b-r b-dashed b-grey">
                        <span class="hint-text small">Qty 1</span>
                      </td>
                      <td>
                        <span class="font-montserrat fs-18">$27</span>
                      </td>
                    </tr>
                    <tr>
                      <td class=" fs-12">Purchase CODE #2345</td>
                      <td class="text-right">
                        <span class="hint-text small">johnsmith</span>
                      </td>
                      <td class="text-right b-r b-dashed b-grey">
                        <span class="hint-text small">Qty 1</span>
                      </td>
                      <td>
                        <span class="font-montserrat fs-18 text-primary">$1000</span>
                      </td>
                    </tr>
                    <tr>
                      <td class=" fs-12">Purchase CODE #2345</td>
                      <td class="text-right">
                        <span class="hint-text small">janedrooler</span>
                      </td>
                      <td class="text-right b-r b-dashed b-grey">
                        <span class="hint-text small">Qty 1</span>
                      </td>
                      <td>
                        <span class="font-montserrat fs-18">$27</span>
                      </td>
                    </tr>
                    <tr>
                      <td class=" fs-12">Purchase CODE #2345</td>
                      <td class="text-right">
                        <span class="hint-text small">johnsmith</span>
                      </td>
                      <td class="text-right b-r b-dashed b-grey">
                        <span class="hint-text small">Qty 1</span>
                      </td>
                      <td>
                        <span class="font-montserrat fs-18 text-primary">$1000</span>
                      </td>
                    </tr>
                    <tr>
                      <td class=" fs-12">Purchase CODE #2345</td>
                      <td class="text-right">
                        <span class="hint-text small">dewdrops</span>
                      </td>
                      <td class="text-right b-r b-dashed b-grey">
                        <span class="hint-text small">Qty 1</span>
                      </td>
                      <td>
                        <span class="font-montserrat fs-18">$27</span>
                      </td>
                    </tr>
                    <tr>
                      <td class=" fs-12">Purchase CODE #2345</td>
                      <td class="text-right">
                        <span class="hint-text small">johnsmith</span>
                      </td>
                      <td class="text-right b-r b-dashed b-grey">
                        <span class="hint-text small">Qty 1</span>
                      </td>
                      <td>
                        <span class="font-montserrat fs-18 text-primary">$1000</span>
                      </td>
                    </tr>
                    <tr>
                      <td class=" fs-12">Purchase CODE #2345</td>
                      <td class="text-right">
                        <span class="hint-text small">dewdrops</span>
                      </td>
                      <td class="text-right b-r b-dashed b-grey">
                        <span class="hint-text small">Qty 1</span>
                      </td>
                      <td>
                        <span class="font-montserrat fs-18">$27</span>
                      </td>
                    </tr>
                    <tr>
                      <td class=" fs-12">Purchase CODE #2345</td>
                      <td class="text-right">
                        <span class="hint-text small">johnsmith</span>
                      </td>
                      <td class="text-right b-r b-dashed b-grey">
                        <span class="hint-text small">Qty 1</span>
                      </td>
                      <td>
                        <span class="font-montserrat fs-18 text-primary">$1000</span>
                      </td>
                    </tr>
                    <tr>
                      <td class=" fs-12">Purchase CODE #2345</td>
                      <td class="text-right">
                        <span class="hint-text small">dewdrops</span>
                      </td>
                      <td class="text-right b-r b-dashed b-grey">
                        <span class="hint-text small">Qty 1</span>
                      </td>
                      <td>
                        <span class="font-montserrat fs-18">$27</span>
                      </td>
                    </tr>
                    <tr>
                      <td class=" fs-12">Purchase CODE #2345</td>
                      <td class="text-right">
                        <span class="hint-text small">johnsmith</span>
                      </td>
                      <td class="text-right b-r b-dashed b-grey">
                        <span class="hint-text small">Qty 1</span>
                      </td>
                      <td>
                        <span class="font-montserrat fs-18 text-primary">$1000</span>
                      </td>
                    </tr>
                    
                    <tr>
                      <td class=" fs-12">Purchase CODE #2345</td>
                      <td class="text-right">
                        <span class="hint-text small">johnsmith</span>
                      </td>
                      <td class="text-right b-r b-dashed b-grey">
                        <span class="hint-text small">Qty 1</span>
                      </td>
                      <td>
                        <span class="font-montserrat fs-18 text-primary">$1000</span>
                      </td>
                    </tr>
                    <tr>
                      <td class=" fs-12">Purchase CODE #2345</td>
                      <td class="text-right">
                        <span class="hint-text small">dewdrops</span>
                      </td>
                      <td class="text-right b-r b-dashed b-grey">
                        <span class="hint-text small">Qty 1</span>
                      </td>
                      <td>
                        <span class="font-montserrat fs-18">$27</span>
                      </td>
                    </tr>
                    <tr>
                      <td class=" fs-12">Purchase CODE #2345</td>
                      <td class="text-right">
                        <span class="hint-text small">johnsmith</span>
                      </td>
                      <td class="text-right b-r b-dashed b-grey">
                        <span class="hint-text small">Qty 1</span>
                      </td>
                      <td>
                        <span class="font-montserrat fs-18 text-primary">$1000</span>
                      </td>
                    </tr>
                    <tr>
                      <td class=" fs-12">Purchase CODE #2345</td>
                      <td class="text-right">
                        <span class="hint-text small">dewdrops</span>
                      </td>
                      <td class="text-right b-r b-dashed b-grey">
                        <span class="hint-text small">Qty 1</span>
                      </td>
                      <td>
                        <span class="font-montserrat fs-18">$27</span>
                      </td>
                    </tr>
                    <tr>
                      <td class=" fs-12">Purchase CODE #2345</td>
                      <td class="text-right">
                        <span class="hint-text small">johnsmith</span>
                      </td>
                      <td class="text-right b-r b-dashed b-grey">
                        <span class="hint-text small">Qty 1</span>
                      </td>
                      <td>
                        <span class="font-montserrat fs-18 text-primary">$1000</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="p-t-15 p-b-15 p-l-20 p-r-20">
                <p class="small no-margin">
                  <a href="#" class="btn-circle-arrow b-grey"><i class="pg-icon">chevron_down</i></a>
                  <span class="hint-text ">Show more details of <a href="#"> Revox pvt ltd </a></span>
                </p>
              </div>
            </div>
            <!-- END WIDGET -->
          </div>
        </div>
        <!-- END ROW -->
        <!-- START ROW -->
        <div class="row">
          <div class="col-lg-4 sm-p-b-10">
            <!-- START WIDGET widget_pendingComments.tpl-->
            <div class=" card   no-margin widget-loader-circle todolist-widget pending-projects-widget">
              <div class="card-header ">
                <div class="card-title">
                  <span class="d-flex align-items-center font-montserrat all-caps">
              Recent projects <i class="pg-icon">chevron_right</i>
          </span>
                </div>
                <div class="card-controls">
                  <ul>
                    <li><a href="#" class="card-refresh text-black" data-toggle="refresh"><i class="card-icon card-icon-refresh"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <h5 class="">Ongoing projects at <span class="semi-bold">pages</span></h5>
                <ul class="nav nav-tabs nav-tabs-simple m-b-20" role="tablist" data-init-reponsive-tabs="collapse">
                  <li class="nav-item"><a href="#pending" class="active" data-toggle="tab" role="tab" aria-expanded="true">Pending</a>
                  </li>
                  <li class="nav-item"><a href="#completed" data-toggle="tab" role="tab" aria-expanded="false">Completed</a>
                  </li>
                </ul>
                <div class="tab-content no-padding">
                  <div class="tab-pane active" id="pending">
                    <div class="p-t-10">
                      <div class="d-flex">
                        <span class="icon-thumbnail bg-contrast-low pull-left">kp</span>
                        <div class="flex-1 full-width overflow-ellipsis">
                          <p class="hint-text all-caps font-montserrat fs-11 no-margin overflow-ellipsis ">Revox Ltd
                          </p>
                          <h5 class="no-margin overflow-ellipsis ">Kepler - wordpress builder</h5>
                        </div>
                      </div>
                      <div class="m-t-15">
                        <p class="hint-text small pull-left no-margin">71% completed from total</p>
                        <a href="#" class="pull-right "><i class="pg-icon">more_horizontal</i></a>
                        <div class="clearfix"></div>
                      </div>
                      <div class="progress progress-small m-b-15 m-t-10">
                        <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                        <div class="progress-bar progress-bar-info" style="width:71%"></div>
                        <!-- END BOOTSTRAP PROGRESS -->
                      </div>
                    </div>
                    <div class="p-t-15">
                      <div class="d-flex">
                        <span class="icon-thumbnail bg-warning-light pull-left ">cr</span>
                        <div class="flex-1 full-width overflow-ellipsis">
                          <p class="hint-text all-caps font-montserrat fs-11 no-margin overflow-ellipsis ">Nike Ltd
                          </p>
                          <h5 class="no-margin overflow-ellipsis ">Corporate rebranding</h5>
                        </div>
                      </div>
                      <div class="m-t-15">
                        <p class="hint-text small pull-left no-margin">20% completed from total</p>
                        <a href="#" class="pull-right "><i class="pg-icon">more_horizontal</i></a>
                        <div class="clearfix"></div>
                      </div>
                      <div class="progress progress-small m-b-15 m-t-10">
                        <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                        <div class="progress-bar progress-bar-warning" style="width:20%"></div>
                        <!-- END BOOTSTRAP PROGRESS -->
                      </div>
                    </div>
                    <a href="#" class="btn btn-block m-t-30">See all projects</a>
                  </div>
                  <div class="tab-pane" id="completed">
                    <div class="p-t-10">
                      <div class="d-flex">
                        <span class="icon-thumbnail bg-contrast-higher pull-left ">ws</span>
                        <div class="flex-1 full-width overflow-ellipsis">
                          <p class="hint-text all-caps font-montserrat fs-11 no-margin overflow-ellipsis ">Apple Corp
                          </p>
                          <h5 class="no-margin overflow-ellipsis ">Marketing Campaign for revox</h5>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-15">
                        <p class="hint-text  small pull-left no-margin">45% completed from total</p>
                        <a href="#" class="pull-right "><i class="pg-icon">more_horizontal</i></a>
                        <div class="clearfix"></div>
                      </div>
                      <div class="progress progress-small m-b-15 m-t-10">
                        <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                        <div class="progress-bar progress-bar-info" style="width:45%"></div>
                        <!-- END BOOTSTRAP PROGRESS -->
                      </div>
                    </div>
                    <div class="p-t-15">
                      <div class="d-flex">
                        <span class="icon-thumbnail bg-primary-light pull-left ">cr</span>
                        <div class="flex-1 full-width overflow-ellipsis">
                          <p class="hint-text all-caps font-montserrat fs-11 no-margin overflow-ellipsis ">Yahoo Inc
                          </p>
                          <h5 class="no-margin overflow-ellipsis ">Corporate rebranding</h5>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-15">
                        <p class="hint-text  small pull-left no-margin">20% completed from total</p>
                        <a href="#" class="pull-right "><i class="pg-icon">more_horizontal</i></a>
                        <div class="clearfix"></div>
                      </div>
                      <div class="progress progress-small m-b-15 m-t-10">
                        <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                        <div class="progress-bar progress-bar-warning" style="width:20%"></div>
                        <!-- END BOOTSTRAP PROGRESS -->
                      </div>
                    </div>
                    <a href="#" class="btn btn-block m-t-30">See all projects</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- END WIDGET -->
          </div>
          <div class="col-lg-8 sm-p-t-10">
            <!-- START WIDGET widget_mapWidget-->
            <div class="widget-13 card   no-margin widget-loader-circle">
              <div class="card-header  pull-up top-right ">
                <div class="card-controls">
                  <ul>
                    <li><a href="#" class="card-refresh text-black" data-toggle="refresh"><i class="card-icon card-icon-refresh"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="container-sm-height no-overflow">
                <div class="row row-sm-height">
                  <div class="col-sm-5 col-lg-4 col-xlg-3 col-sm-height col-top no-padding">
                    <div class="card-header  ">
                      <div class="card-title">Geolocation
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="nav nav-pills m-t-10 m-b-15" role="tablist">
                        <li class="active">
                          <a href="#tab1" data-toggle="tab" role="tab" class="b-a b-grey text-color">
                                        fb
                                    </a>
                        </li>
                        <li>
                          <a href="#tab2" data-toggle="tab" role="tab" class="b-a b-grey text-color">
                                        gl
                                    </a>
                        </li>
                        <li>
                          <a href="#tab3" data-toggle="tab" role="tab" class="b-a b-grey text-color">
                                        am
                                    </a>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                          <h3 class="m-t-5 m-b-20">Facebook</h3>
                          <p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
                          <p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
                          <br>
                          <p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
                          <p class="all-caps font-montserrat  no-margin text-warning ">24</p>
                          <br>
                          <p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
                          <p class="all-caps font-montserrat  no-margin text-success ">56</p>
                        </div>
                        <div class="tab-pane " id="tab2">
                          <h3 class="m-t-5 m-b-20">Google</h3>
                          <p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
                          <p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
                          <br>
                          <p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
                          <p class="all-caps font-montserrat  no-margin text-warning ">24</p>
                          <br>
                          <p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
                          <p class="all-caps font-montserrat  no-margin text-success ">56</p>
                        </div>
                        <div class="tab-pane" id="tab3">
                          <h3 class="m-t-5 m-b-20">Amazon</h3>
                          <p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
                          <p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
                          <br>
                          <p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
                          <p class="all-caps font-montserrat  no-margin text-warning ">24</p>
                          <br>
                          <p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
                          <p class="all-caps font-montserrat  no-margin text-success ">56</p>
                        </div>
                      </div>
                    </div>
                    <div class="p-l-20 p-r-20 p-t-10 p-b-10 pull-bottom full-width hidden-xs">
                      <p class="no-margin">
                        <a href="#" class="btn-circle-arrow b-grey"><i class="pg-icon">chevron_down</i></a>
                        <span class="hint-text">Super secret options</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-7 col-lg-8 col-xlg-9 col-sm-height col-top no-padding relative">
                    <div class="bg-success widget-13-map mapplic-element" style="height: 465px;">
                    <div class="mapplic-container" style="height: 100%;"><div class="mapplic-map mapplic-zoomable" style="left: -166.413px; top: -250.7px; width: 1918px; height: 1186px;"><div class="mapplic-layer" data-floor="states" style=""><img src="assets/img/maps/dashboard-map-dotted.png" class="mapplic-map-image"><a href="#" class="mapplic-pin pulse mapplic-active" data-location="usa" style="top: 45%; left: 22%;"></a><a href="#" class="mapplic-pin pulse" data-location="af" style="top: 60%; left: 55%;"></a><a href="#" class="mapplic-pin pulse" data-location="ru" style="top: 33.26%; left: 75%;"></a></div><div class="mapplic-tooltip" style="left: 22%; top: 45%; margin-top: -101px; margin-left: -60px; display: block;"><div class="mapplic-tooltip-triangle" style="left: 50%;"></div><a class="mapplic-tooltip-close" href="#"></a><img class="mapplic-thumbnail" style="display: none;"><h4 class="mapplic-tooltip-title">United Stats of America</h4><div class="mapplic-tooltip-content"><div class="mapplic-tooltip-description"><p>Northern America</p></div></div><a class="mapplic-popup-link" href="#" style="display: none;">More</a></div><div class="mapplic-tooltip mapplic-hovertip"><h4 class="mapplic-tooltip-title"></h4><div class="mapplic-tooltip-triangle"></div></div></div><div class="mapplic-minimap" style="opacity: 0; display: none;"><div class="mapplic-minimap-layer" data-floor="states" style=""><img class="mapplic-minimap-background"><div class="mapplic-minimap-overlay"></div><img class="mapplic-minimap-active" style="clip: rect(0px, 49px, 0px, 12px);"></div></div><a href="#" class="mapplic-button mapplic-clear-button" style="opacity: 1;"></a><div class="mapplic-zoom-buttons"><a href="#" class="mapplic-button mapplic-zoomin-button"></a><a href="#" class="mapplic-button mapplic-zoomout-button"></a></div></div><div class="mapplic-sidebar"><form class="mapplic-search-form"><input type="text" spellcheck="false" placeholder="Search" class="mapplic-search-input"><a href="#" class="mapplic-search-clear"></a></form><div class="mapplic-list-container"><ol class="mapplic-list"><li class="mapplic-list-location mapplic-list-shown" data-location="usa"><a href="#"><h4>United Stats of America</h4><span></span></a></li><li class="mapplic-list-location mapplic-list-shown" data-location="af"><a href="#"><h4>Africa</h4><span></span></a></li><li class="mapplic-list-location mapplic-list-shown" data-location="ru"><a href="#"><h4>Russia</h4><span></span></a></li></ol><p class="mapplic-not-found">Nothing found. Please try a different search.</p></div></div></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END WIDGET -->
          </div>
        </div>
        <!-- END ROW -->
      </div>
@endsection
