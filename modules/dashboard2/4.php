<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Page content 2 dashboard2</title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/daterangepicker.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/dashboard2/4.less', '../../css/dashboard2/4.css');
        ?>
        <link href="../../css/dashboard2/4.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/dashboard2/4/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/4/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/4/jquery.flot.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/4/jquery.flot.time.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/4/date.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/4/moment.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/4/daterangepicker.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/4/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/4/custom-script.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h2>
                                    Transaction Summary
                                    <small>Weekly progress</small>
                                </h2>
                                <div class="filter-time">
                                    <div id="reportrange">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                        <span>January 31, 2017 - March 1, 2017</span>
                                        <i class="fa fa-caret-down"></i>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="admin-content">
                                <div class="col-md-9">
                                    <div id="chart_plot_02" class="demo-placeholder"></div>
                                    <div class="total-chart">
                                        <div class="col-md-4">
                                            <span>Total Sessions</span>
                                            <h2>231,809</h2>
                                            <span class="sparkline11"></span>
                                        </div>
                                        <div class="col-md-4">
                                            <span>Total Revenue</span>
                                            <h2>231,809</h2>
                                            <span class="sparkline22"></span>
                                        </div>
                                        <div class="col-md-4">
                                            <span>Total Sessions</span>
                                            <h2>231,809</h2>
                                            <span class="sparkline11"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="admin-title">
                                        <h2>Top Profiles</h2>
                                        <ul class="profile-user">
                                            <li>
                                                <a class="collapse-link">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-wrench"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Settings 1</a></li>
                                                    <li><a href="#">Settings 2</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="close-link">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>

                                    </div>
                                    <ul class="profiles-user">
                                        <li>
                                            <a class="profile-thumb">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <div class="profile-comment">
                                                <a class="title" href="#">
                                                    Ms.Mary Jane
                                                </a>
                                                <p>
                                                    <strong>$2300. </strong>
                                                    <span>Agent Avarage Sales</span>
                                                </p>
                                                <p>
                                                    <small>12 Sales Today</small>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="profile-thumb">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <div class="profile-comment">
                                                <a class="title" href="#">
                                                    Ms.Mary Jane
                                                </a>
                                                <p>
                                                    <strong>$2300. </strong>
                                                    <span>Agent Avarage Sales</span>
                                                </p>
                                                <p>
                                                    <small>12 Sales Today</small>
                                                </p>
                                            </div>
                                        </li>

                                        <li>
                                            <a class="profile-thumb">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <div class="profile-comment">
                                                <a class="title" href="#">
                                                    Ms.Mary Jane
                                                </a>
                                                <p>
                                                    <strong>$2300. </strong>
                                                    <span>Agent Avarage Sales</span>
                                                </p>
                                                <p>
                                                    <small>12 Sales Today</small>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="profile-thumb">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <div class="profile-comment">
                                                <a class="title" href="#">
                                                    Ms.Mary Jane
                                                </a>
                                                <p>
                                                    <strong>$2300. </strong>
                                                    <span>Agent Avarage Sales</span>
                                                </p>
                                                <p>
                                                    <small>12 Sales Today</small>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="profile-thumb">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <div class="profile-comment">
                                                <a class="title" href="#">
                                                    Ms.Mary Jane
                                                </a>
                                                <p>
                                                    <strong>$2300. </strong>
                                                    <span>Agent Avarage Sales</span>
                                                </p>
                                                <p>
                                                    <small>12 Sales Today</small>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>