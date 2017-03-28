<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Page content 1 dashboard3 </title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/dashboard3/10.less', '../../css/dashboard3/10.css');
        ?>
        <link href="../../css/dashboard3/10.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/dashboard3/10/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/10/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/10/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/10/custom-script.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="total-chart">
                            <span>Total Sessions</span>
                            <h3>231,809</h3>
                            <span class="sparkline11" style="height: 60px;"></span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="total-chart">
                            <span>Total Sessions</span>
                            <h3>231,809</h3>
                            <span class="sparkline11" style="height: 60px;"></span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="total-chart">
                            <span>Total Sessions</span>
                            <h3>231,809</h3>
                            <span class="sparkline_three" style="height: 60px;"></span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="total-chart">
                            <span>Total Sessions</span>
                            <h3>231,809</h3>
                            <span class="sparkline11" style="height: 60px;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>