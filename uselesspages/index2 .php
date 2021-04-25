
<!-- include header file -->
<?php
    require_once'include/header.php';
?>
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
           <h1>
        صفحه اصلی          
            <small>پنل مدیریت</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> خانه</a></li>
            <li class="active">صفحه اصلی</li>
        </ol>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-clock-o"></i> میانگین زمان</span>
            <div class="count">123.50</div>
            <span class="count_bottom"><i class="green"><i
                    class="fa fa-sort-asc"></i>3% </i> از هفته گذشته</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> مجموع مردان</span>
            <div class="count green">2,500</div>
            <span class="count_bottom"><i class="green"><i
                    class="fa fa-sort-asc"></i>34% </i> از هفته گذشته</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> مجموع زنان</span>
            <div class="count">4,567</div>
            <span class="count_bottom"><i class="red"><i
                    class="fa fa-sort-desc"></i>12% </i> از هفته گذشته</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> مجموعه کلی</span>
            <div class="count">2,315</div>
            <span class="count_bottom"><i class="green"><i
                    class="fa fa-sort-asc"></i>34% </i> از هفته گذشته</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> مجموع اتصالات</span>
            <div class="count">7,325</div>
            <span class="count_bottom"><i class="green"><i
                    class="fa fa-sort-asc"></i>34% </i> از هفته گذشته</span>
        </div>
    </div>
    <!-- /top tiles -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">

                <div class="row x_title">
                    <div class="col-md-6">
                        <h3>فعالیت های شبکه
                            <small>عنوان نمودار زیر عنوان</small>
                        </h3>
                    </div>
                    <div class="col-md-6">
                        <div id="reportrange" class="pull-left"
                             style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span>اسفند 29, 1394 - فروردین 28, 1395</span> <b class="caret"></b>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
                    <div style="width: 100%;">
                        <div id="chart_plot_01" class="demo-placeholder" style="width: 100%; height:270px;"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                    <div class="x_title">
                        <h2>بالاترین عملکرد در کمپین</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-6">
                        <div>
                            <p>کمپین فیسبوک</p>
                            <div class="">
                                <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar bg-green" role="progressbar"
                                         data-transitiongoal="80"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>کمپین تویتتر</p>
                            <div class="">
                                <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar bg-green" role="progressbar"
                                         data-transitiongoal="60"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-6">
                        <div>
                            <p>رسانه های متعارف</p>
                            <div class="">
                                <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar bg-green" role="progressbar"
                                         data-transitiongoal="40"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>بیلبوردهای تبلیغاتی</p>
                            <div class="">
                                <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar bg-green" role="progressbar"
                                         data-transitiongoal="50"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <br/>

    


    
</div>
<!-- /page content -->
<!-- include footer file-->
<?php
    include_once'include/footer.php';
?> 
