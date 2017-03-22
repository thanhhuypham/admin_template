<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Page content 4 dashboard3</title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/daterangepicker.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/dashboard3/13.less', '../../css/dashboard3/13.css');
        ?>
        <link href="../../css/dashboard3/13.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/dashboard3/13/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/13/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/13/chart.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/13/gauge.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/13/skycons.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/13/bootstrap-progressbar.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/13/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/13/custom-script.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-13">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h2>
                                    User Uptake
                                </h2>
                                <ul class="items">
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

                                
                                <div class="col-md-12 info-progress">
                                    <div class="row">
                                        <div>
                                            <span class="left">Escudor Wireless 1.0</span>
                                            <span class="right">This sis</span>
                                        </div>
                                        <div class="col-xs-2">
                                            <span>SSD</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" data-transitiongoal="89" aria-valuenow="88"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <span>89%</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div>
                                            <span class="left">Mobile Access</span>
                                            <span class="right">Smart Phone</span>
                                        </div>
                                        <div class="col-xs-2">
                                            <span>App</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="progress">
                                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="89" aria-valuenow="88" style="width: 79%;"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <span>79%</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div>
                                            <span class="left">WAN access users</span>
                                            <span class="right">Total 69%</span>
                                        </div>
                                        <div class="col-xs-2">
                                            <span>Usr</span>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="progress">
                                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="89" aria-valuenow="88" style="width: 69%;"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <span>69%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h2>
                                    Today's Weather <small>Sessions</small>
                                </h2>
                                <ul class="items">
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
                            <div class="admin-content" style="color: #73879C;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class=""><b>Monday</b>, 07:30 AM
                                            <span>F</span>
                                            <span><b>C</b></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                                    </div>
                                    <div class="col-sm-8">
                                        <div>
                                            <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h3>23</h3>
                                </div>


                                <div class="clearfix"></div>

                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <div>
                                            <h2 class="day">Mon</h2>
                                            <h3>25</h3>
                                            <canvas id="clear-day" width="32" height="32"></canvas>
                                            <h5>15 <i>km/h</i></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <div>
                                            <h2 class="day">Tue</h2>
                                            <h3>25</h3>
                                            <canvas height="32" width="32" id="rain"></canvas>
                                            <h5>12 <i>km/h</i></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <div>
                                            <h2 class="day">Wed</h2>
                                            <h3>27</h3>
                                            <canvas height="32" width="32" id="snow"></canvas>
                                            <h5>14 <i>km/h</i></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <div>
                                            <h2 class="day">Thu</h2>
                                            <h3>28</h3>
                                            <canvas height="32" width="32" id="sleet"></canvas>
                                            <h5>15 <i>km/h</i></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <div>
                                            <h2 class="day">Fri</h2>
                                            <h3>28</h3>
                                            <canvas height="32" width="32" id="wind"></canvas>
                                            <h5>11 <i>km/h</i></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <div>
                                            <h2 class="day">Sat</h2>
                                            <h3>26</h3>
                                            <canvas height="32" width="32" id="cloudy"></canvas>
                                            <h5>10 <i>km/h</i></h5>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h2>
                                    Incomes 
                                    <small>Sessions</small>
                                </h2>
                                <ul class="items">
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
                                <ul class="quick-list">
                                    <li><i class="fa fa-bars"></i><a href="#">Subscription</a></li>
                                    <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a></li>
                                    <li><i class="fa fa-support"></i><a href="#">Help Desk</a></li>
                                    <li><i class="fa fa-heart"></i><a href="#">Donations</a></li>
                                </ul>

                                <div class="sidebar-widget">
                                    <h4>Goal</h4>
                                    <canvas width="150" height="80" id="chart_gauge_01"></canvas>
                                    <div class="goal-wrapper">
                                        <span id="gauge-text" class="gauge-value pull-left">2,400</span>
                                        <span class="gauge-value pull-left">%</span>
                                        <span id="goal-text" class="goal-value pull-right">$5,000</span>
                                    </div>
                                </div
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>