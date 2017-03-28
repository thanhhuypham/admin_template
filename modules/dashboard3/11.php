<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Page content 2 dashboard3</title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/daterangepicker.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/dashboard3/11.less', '../../css/dashboard3/11.css');
        ?>
        <link href="../../css/dashboard3/11.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/dashboard3/11/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/11/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/11/jquery.flot.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/11/jquery.flot.time.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/11/date.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/11/jquery.sparkline.min.js" type="text/javascript"></script>
        <script  src="../../js/dashboard3/11/moment.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/11/daterangepicker.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/11/custom-script.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-11">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h2>
                                    Network Activities 
                                    <small>Graph title sub-title</small>
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
                                <div id="chart_plot_03" class="demo-placeholder" style="width: 1110px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>