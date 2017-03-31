<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Page dashboard 3</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/daterangepicker.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/dashboard3/type-f-12.less', 'css/dashboard3/type-f-12.css');
        ?>
        <link rel="stylesheet" href="css/dashboard3/type-f-12.css">
        <script src="js/dashboard3/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/dashboard3/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/dashboard3/chart.min.js" type="text/javascript"></script>
        <script src="js/dashboard3/skycons.js" type="text/javascript"></script>
        <script src="js/dashboard3/gauge.min.js" type="text/javascript"></script>
        <script src="js/dashboard3/jquery.flot.js" type="text/javascript"></script>
        <script src="js/dashboard3/jquery.flot.time.js" type="text/javascript"></script>
        <script src="js/dashboard3/date.js" type="text/javascript"></script>
        <script src="js/dashboard3/moment.min.js" type="text/javascript"></script>
        <script src="js/dashboard3/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="js/dashboard3/daterangepicker.js" type="text/javascript"></script>
        <script src="js/dashboard3/custom-script.js" type="text/javascript"></script>
        <script src="js/dashboard3/back-to-top.js" type="text/javascript"></script>
        <script src="js/dashboard3/sibarmenu-left.js" type="text/javascript"></script>
        <script src="js/dashboard3/flexible-menu.js" type="text/javascript"></script>
    </head>

    <body style="background-color: #2A3F54;">
        <div class="type-f-12">
            <div class="container-fluid">
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="sidebar-left"> 
                        <div class="logo">
                            <a href="#">
                                <i class="fa fa-paw"></i>
                                <span>Gentelella Alela!</span>
                            </a>
                        </div>
                        <div class="img-user">
                            <img src="images/img.jpg" alt="men">
                            <div class="welcome-name">
                                <span>Welcome,</span>
                                <p>John Due</p>
                            </div>
                        </div>
                        <div class="menu-vertical">
                            <h4>General</h4>
                            <ul class="item-menu">
                                <li>
                                    <div class="parent-menu" onclick="toggleMenuHome()">
                                        <a href="#">
                                            <i class="fa fa-home"></i>Home<i class="fa fa-chevron-down"></i>
                                        </a>
                                    </div>
                                    <ul class="child-menu" id="child-home">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="index_dashboard2.php">Dashboard2</a>
                                        </li>
                                        <li class="current-page" style="margin-bottom: 8px;">
                                            <a href="index_dashboard3.php">Dashboard3</a>
                                        </li>
                                    </ul>
                                </li> 
                                <li>
                                    <div class="parent-menu" onclick="toggleMenuForms()">
                                        <a href="#">
                                            <i class="fa fa-edit"></i>Forms<i class="fa fa-chevron-down"></i>
                                        </a>
                                    </div>
                                    <ul class="child-menu" id="child-forms" style="display: none;">
                                        <li><a href="#">General Form</a></li>
                                        <li><a href="#">Advanced</a></li>
                                        <li><a href="#">Form Validation</a></li>
                                        <li><a href="#">Form Wizard</a></li>
                                        <li><a href="#">Form Upload</a></li>
                                        <li style="margin-bottom: 8px;"><a href="#">Form Buttons</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="parent-menu" onclick="toggleMenuElements()">
                                        <a href="#">
                                            <i class="fa fa-desktop"></i>UI Elements<i class="fa fa-chevron-down"></i>
                                        </a>
                                    </div>
                                    <ul class="child-menu" id="child-elements" style="display: none;">
                                        <li><a href="#">General</a></li>
                                        <li><a href="#">Media Gallery</a></li>
                                        <li><a href="#">Typography</a></li>
                                        <li><a href="#">Icons</a></li>
                                        <li><a href="#">Glyphicons</a></li>
                                        <li><a href="#">Widgets</a></li>
                                        <li><a href="#">Invoice</a></li>
                                        <li><a href="#">Inbox</a></li>
                                        <li  style="margin-bottom: 8px;"><a href="#">Calendar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="parent-menu" onclick="toggleMenuTables()">
                                        <a href="#">
                                            <i class="fa fa-table"></i>Tables<i class="fa fa-chevron-down"></i>
                                        </a>
                                    </div>
                                    <ul class="child-menu" id="child-tables" style="display: none;">
                                        <li><a href="index_table1.php">Tables</a></li>
                                        <li><a href="index_table2.php">Table Dynamic</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="parent-menu" onclick="toggleMenuDataPresentation()">
                                        <a href="#">
                                            <i class="fa fa-bar-chart-o"></i>Data Presentation<i class="fa fa-chevron-down"></i>
                                        </a>
                                    </div>
                                    <ul class="child-menu" id="child-data" style="display: none;">
                                        <li><a href="#">Chart JS</a></li>
                                        <li><a href="#">Chart JS2</a></li>
                                        <li><a href="#">Moris JS</a></li>
                                        <li><a href="#">ECharts</a></li>
                                        <li  style="margin-bottom: 8px;"><a href="#">Other Charts</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="parent-menu" onclick="toggleMenuLayouts()">
                                        <a href="#">
                                            <i class="fa fa-clone"></i>Layouts<i class="fa fa-chevron-down"></i>
                                        </a>
                                    </div>
                                    <ul class="child-menu" id="child-layout" style="display: none;">
                                        <li><a href="#">Fixed Sidebar</a></li>
                                        <li  style="margin-bottom: 8px;"><a href="#">Fixed Footer</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Live on</h4>
                            <ul class="item-menu">
                                <li>
                                    <div class="parent-menu" onclick="toggleMenuAdditional()">
                                        <a href="#">
                                            <i class="fa fa-bug"></i>Additional Pages<i class="fa fa-chevron-down"></i>
                                        </a>
                                    </div>
                                    <ul class="child-menu" id="child-additional" style="display: none;">
                                        <li>
                                            <a href="index_e-commerce.php">E-commerce</a>
                                        </li>
                                        <li>
                                            <a href="index_projects.php">Projects</a>
                                        </li>
                                        <li>
                                            <a href="index_projects-detail.php">Project Detail</a>
                                        </li>
                                        <li>
                                            <a href="index_contacts.php">Contacts</a>
                                        </li>
                                        <li  style="margin-bottom: 8px;">
                                            <a href="index_profile.php">Profile</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="parent-menu">
                                        <a href="#">
                                            <i class="fa fa-windows"></i>Extras<i class="fa fa-chevron-down"></i>
                                        </a>
                                    </div>
                                    <ul class="child-menu" style="display: none;">
                                        <li>
                                            <a href="#">403 Error</a>
                                        </li>
                                        <li>
                                            <a href="#">404 Error</a>
                                        </li>
                                        <li>
                                            <a href="#">500 Error</a>
                                        </li>
                                        <li>
                                            <a href="#">Plain Page</a>
                                        </li>
                                        <li>
                                            <a href="#">Login Page</a>
                                        </li>
                                        <li  style="margin-bottom: 8px;">
                                            <a href="#">Pricing Tables</a>
                                        </li>
                                    </ul>
                                </li> 
                                <li>
                                    <div class="parent-menu">
                                        <a href="#">
                                            <i class="fa fa-sitemap"></i>Multilevel Menu<i class="fa fa-chevron-down"></i>
                                        </a>
                                    </div>
                                    <ul class="child-menu" style="display: none;">
                                        <li>
                                            <a href="#">Level One</a>
                                        </li>
                                        <li>
                                            <a href="#">Level One</a>
                                        </li>
                                        <li style="margin-bottom: 8px;">
                                            <a href="#">Level One</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="parent-menu">
                                        <a href="#">
                                            <i class="fa fa-laptop"></i>Landing Page
                                            <span class="comming-soon">Coming Soon</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <div class="sidebar-footer">
                                <a href="#" title="Settings"><i class="glyphicon glyphicon-cog"></i></a>
                                <a href="#" title="Full screen"><i class="glyphicon glyphicon-fullscreen"></i></a>
                                <a href="#" title="Close"><i class="glyphicon glyphicon-eye-close"></i></a>
                                <a href="#" title="Off"><i class="glyphicon glyphicon-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 page-content-wrraper">
                    <div class="container-fluid">
                        <div class="top-nav">
                            <div class="nav_menu">
                                <nav>
                                    <a href="#menu-toggle" id="menu-toggle" class="btn btn-default toggled"><i class="fa fa-bars"></i></a>
                                    <ul class="nav navbar-right">
                                        <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <img src="images/img.jpg" alt="">John Doe
                                                <i class="fa fa-angle-down"></i>
                                            </a>


                                            <ul class="dropdown-menu user-profile">
                                                <li>
                                                    <a href="#">Profile</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="badge">50%</span>
                                                        <span>Settings</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">Help</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-sign-out"></i>Logout
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle info-number" data-toggle="dropdown">
                                                <i class="fa fa-envelope-o"></i>
                                                <span class="badge">6</span>
                                            </a>

                                            <ul class="dropdown-menu msg_list">
                                                <li>
                                                    <a>
                                                        <span class="image">
                                                            <img src="images/img.jpg" alt="Profile image">
                                                        </span>
                                                        <span>
                                                            <span class="name">John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="msg">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        <span class="image">
                                                            <img src="images/img.jpg" alt="Profile image">
                                                        </span>
                                                        <span>
                                                            <span class="name">John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="msg">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        <span class="image">
                                                            <img src="images/img.jpg" alt="Profile image">
                                                        </span>
                                                        <span>
                                                            <span class="name">John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="msg">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="text-center">
                                                        <a href="#">
                                                            <strong>See All Alerts</strong>
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
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
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="admin-panel admin1">
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
                                        <div id="chart_plot_03" class="demo-placeholder" style="width: 1050px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="admin-panel admin2">
                                    <div class="admin-title">
                                        <h2>
                                            App Devices 
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
                                        <h4>App Versions</h4>
                                        <div class="widget_summary">
                                            <div class="w_left">
                                                <span>1.5.2</span>
                                            </div>
                                            <div class="w_center">
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w_right">
                                                <span>123k</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="widget_summary">
                                            <div class="w_left">
                                                <span>1.5.3</span>
                                            </div>
                                            <div class="w_center">
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w_right">
                                                <span>53k</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget_summary">
                                            <div class="w_left">
                                                <span>1.5.4</span>
                                            </div>
                                            <div class="w_center">
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w_right">
                                                <span>23k</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget_summary">
                                            <div class="w_left">
                                                <span>1.5.5</span>
                                            </div>
                                            <div class="w_center">
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w_right">
                                                <span>3k</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget_summary">
                                            <div class="w_left">
                                                <span>0.1.5.6</span>
                                            </div>
                                            <div class="w_center">
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w_right">
                                                <span>1k</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="admin-panel admin2">
                                    <div class="admin-title">
                                        <h2>
                                            Daily users
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
                                        <table class="" style="width:100%">
                                            <tbody><tr>
                                                    <th style="width:37%;">
                                                        <p>Top 5</p>
                                                    </th>
                                                    <th>
                                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            <p class="">Device</p>
                                                        </div>
                                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                            <p class="">Progress</p>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <canvas class="canvasDoughnut" height="110" width="110"></canvas>
                                                    </td>
                                                    <td>
                                                        <table class="tile_info">
                                                            <tbody><tr>
                                                                    <td>
                                                                        <p><i class="fa fa-square blue"></i>IOS </p>
                                                                    </td>
                                                                    <td>30%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p><i class="fa fa-square green"></i>Android </p>
                                                                    </td>
                                                                    <td>10%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p><i class="fa fa-square purple"></i>Blackberry </p>
                                                                    </td>
                                                                    <td>20%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p><i class="fa fa-square aero"></i>Symbian </p>
                                                                    </td>
                                                                    <td>15%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p><i class="fa fa-square red"></i>Others </p>
                                                                    </td>
                                                                    <td>30%</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="admin-panel admin2" style="margin-right: -15px;">
                                    <div class="admin-title">
                                        <h2>
                                            Profile Setting
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
                                            <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a></li>
                                            <li><i class="fa fa-thumbs-up"></i><a href="#">Favorites</a></li>
                                            <li><i class="fa fa-calendar-o"></i><a href="#">Activities</a></li>
                                            <li><i class="fa fa-cog"></i><a href="#">Settings</a></li>
                                            <li><i class="fa fa-question"></i><a href="#">Faqs</a></li>
                                            <li><i class="fa fa-adjust"></i><a href="#">Helps</a></li>
                                            <li><i class="fa fa-star-half"></i><a href="#">Abouts</a></li>
                                            <li><i class="fa fa-area-chart"></i><a href="#">Logout</a></li>
                                        </ul>

                                        <div class="sidebar-widget">
                                            <h4>Profile Completion</h4>
                                            <canvas width="150" height="80" id="chart_gauge_01"></canvas>
                                            <div class="goal-wrapper">
                                                <span id="gauge-text" class="pull-left">3,200</span>
                                                <span class="gauge-value pull-left">%</span>
                                                <span id="goal-text" class="goal-value pull-right">100%</span>
                                            </div>
                                        </div
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="admin-panel admin3">
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
                                                    <div class="progress-bar" style="width: 89%;"></div>
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
                                                    <div class="progress-bar" style="width: 79%;"></div>
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
                                                    <div class="progress-bar" style="width: 69%;"></div>
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
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="admin-panel admin3">
                                <div class="admin-title">
                                    <h2>
                                        Weather <small>Sessions</small>
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
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="admin-panel admin3">
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
                <footer>
                    Gentelella - Bootstrap Admin Template by
                    <a href="#"> Colorlib</a>
                </footer>
                <div id="back-to-top"><i class="fa fa-chevron-up"></i></div>
            </div>  
        </div>
    </body>
</html>
