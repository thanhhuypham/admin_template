<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Page content 3 dashboard2</title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/dashboard2/5.less', '../../css/dashboard2/5.css');
        ?>
        <link href="../../css/dashboard2/5.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/dashboard2/5/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/5/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/5/chart.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/5/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/5/custom-script.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-5">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="admin-panel">
                        <div class="admin-title">
                            <h2>
                                Weekly Summary
                                <small>Activity shares</small>
                            </h2>
                            <ul class="sales">
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
                        <div class="admin-content">
                            <div class="row">
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <!-- Weekly chart -->
                                    <span class="sparkline_one"></span>
                                    <!-- -->
                                    <h4>Weekly sales progress</h4>
                                </div>
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <canvas class="canvasDoughnut" height="110" width="110"></canvas>
                                            <h4 class="rates">Bounce Rates</h4>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <canvas class="canvasDoughnut" height="110" width="110"></canvas>
                                            <h4 class="rates">New Traffic</h4>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <canvas class="canvasDoughnut" height="110" width="110"></canvas>
                                            <h4 class="rates">Device Share</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>