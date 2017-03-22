<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Page dashboard 2 </title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/daterangepicker.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/dashboard2/type-f-12.less', 'css/dashboard2/type-f-12.css');
        ?>
        <link rel="stylesheet" href="css/dashboard2/type-f-12.css">
        <script src="js/dashboard2/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/dashboard2/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/dashboard2/chart.min.js" type="text/javascript"></script>
        <script src="js/dashboard2/jquery.flot.js" type="text/javascript"></script>
        <script src="js/dashboard2/jquery.flot.time.js" type="text/javascript"></script>
        <script src="js/dashboard2/date.js" type="text/javascript"></script>
        <script src="js/dashboard2/moment.min.js" type="text/javascript"></script>
        <script src="js/dashboard2/daterangepicker.js" type="text/javascript"></script>
        <script src="js/dashboard2/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="js/dashboard2/custom-script.js" type="text/javascript"></script>
        <script src="js/dashboard2/back-to-top.js" type="text/javascript"></script>
        <script src="js/dashboard2/sibarmenu-left.js" type="text/javascript"></script>
        <script src="js/dashboard2/flexible-menu.js" type="text/javascript"></script>
    </head>

    <body style="background-color: #2A3F54;">
        <div class="type-f-12">
            <!-- Sidebar -->
            <div class="container-fluid">
                <div class="row">
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
                                            <li class="current-page">
                                                <a href="index_dashboard2.php">Dashboard2</a>
                                            </li>
                                            <li style="margin-bottom: 8px;">
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
                                            <li style="margin-bottom: 8px;"><a href="#">Calendar</a></li>
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
                                            <li><a href="index_dashboard3.php" style="margin-bottom: 8px;">Table Dynamic</a></li>
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
                                            <li style="margin-bottom: 8px;"><a href="#">Other Charts</a></li>
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
                                            <li style="margin-bottom: 8px;"><a href="#">Fixed Footer</a></li>
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
                                                <a href="#">E-commerce</a>
                                            </li>
                                            <li>
                                                <a href="#">Projects</a>
                                            </li>
                                            <li>
                                                <a href="#">Project Detail</a>
                                            </li>
                                            <li>
                                                <a href="#">Contacts</a>
                                            </li>
                                            <li style="margin-bottom: 8px;">
                                                <a href="#">Profile</a>
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
                                            <li style="margin-bottom: 8px;">
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
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="new-sign-up">
                                        <div class="icon">
                                            <i class="fa fa-caret-square-o-right"></i>
                                        </div>
                                        <div class="count">179
                                        </div>
                                        <h3>New Sign ups</h3>
                                        <p>Lorem ipsum psdea itgum rixt.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="new-sign-up">
                                        <div class="icon">
                                            <i class="fa fa-comments-o"></i>
                                        </div>
                                        <div class="count">179
                                        </div>
                                        <h3>New Sign ups</h3>
                                        <p>Lorem ipsum psdea itgum rixt.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="new-sign-up">
                                        <div class="icon">
                                            <i class="fa fa-sort-amount-desc"></i>
                                        </div>
                                        <div class="count">179
                                        </div>
                                        <h3>New Sign ups</h3>
                                        <p>Lorem ipsum psdea itgum rixt.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="new-sign-up" style="margin-right: 15px;">
                                        <div class="icon">
                                            <i class="fa fa-check-square-o"></i>
                                        </div>
                                        <div class="count">179
                                        </div>
                                        <h3>New Sign ups</h3>
                                        <p>Lorem ipsum psdea itgum rixt.</p>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="admin-panel admin1">
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
                                    <div class="admin-panel admin2">
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
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <canvas class="canvasDoughnut" height="110" width="110"></canvas>
                                                            <h4 class="rates">Bounce Rates</h4>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <canvas class="canvasDoughnut" height="110" width="110"></canvas>
                                                            <h4 class="rates">New Traffic</h4>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <canvas class="canvasDoughnut" height="110" width="110"></canvas>
                                                            <h4 class="rates">Device Share</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="admin-panel admin3">
                                        <div class="admin-title">
                                            <h2>
                                                Top Profiles
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
                                            <div class="list-items">
                                                <a class="date">
                                                    <p class="month">
                                                        April
                                                    </p>
                                                    <p class="day">
                                                        23
                                                    </p>
                                                </a>
                                                <div class="items-info">
                                                    <a class="title" href="#">Item One Title</a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="list-items">
                                                <a class="date">
                                                    <p class="month">
                                                        April
                                                    </p>
                                                    <p class="day">
                                                        23
                                                    </p>
                                                </a>
                                                <div class="items-info">
                                                    <a class="title" href="#">Item One Title</a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="list-items">
                                                <a class="date">
                                                    <p class="month">
                                                        April
                                                    </p>
                                                    <p class="day">
                                                        23
                                                    </p>
                                                </a>
                                                <div class="items-info">
                                                    <a class="title" href="#">Item One Title</a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="list-items">
                                                <a class="date">
                                                    <p class="month">
                                                        April
                                                    </p>
                                                    <p class="day">
                                                        23
                                                    </p>
                                                </a>
                                                <div class="items-info">
                                                    <a class="title" href="#">Item One Title</a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="list-items">
                                                <a class="date">
                                                    <p class="month">
                                                        April
                                                    </p>
                                                    <p class="day">
                                                        23
                                                    </p>
                                                </a>
                                                <div class="items-info">
                                                    <a class="title" href="#">Item One Title</a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="admin-panel admin3">
                                        <div class="admin-title">
                                            <h2>
                                                Top Profiles
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
                                            <div class="list-items">
                                                <a class="date">
                                                    <p class="month">
                                                        April
                                                    </p>
                                                    <p class="day">
                                                        23
                                                    </p>
                                                </a>
                                                <div class="items-info">
                                                    <a class="title" href="#">Item One Title</a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="list-items">
                                                <a class="date">
                                                    <p class="month">
                                                        April
                                                    </p>
                                                    <p class="day">
                                                        23
                                                    </p>
                                                </a>
                                                <div class="items-info">
                                                    <a class="title" href="#">Item One Title</a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="list-items">
                                                <a class="date">
                                                    <p class="month">
                                                        April
                                                    </p>
                                                    <p class="day">
                                                        23
                                                    </p>
                                                </a>
                                                <div class="items-info">
                                                    <a class="title" href="#">Item One Title</a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="list-items">
                                                <a class="date">
                                                    <p class="month">
                                                        April
                                                    </p>
                                                    <p class="day">
                                                        23
                                                    </p>
                                                </a>
                                                <div class="items-info">
                                                    <a class="title" href="#">Item One Title</a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="list-items">
                                                <a class="date">
                                                    <p class="month">
                                                        April
                                                    </p>
                                                    <p class="day">
                                                        23
                                                    </p>
                                                </a>
                                                <div class="items-info">
                                                    <a class="title" href="#">Item One Title</a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="admin-panel admin3">
                                        <div class="admin-title">
                                            <h2>
                                                Top Profiles
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
                                            <div class="list-items">
                                                <a class="date">
                                                    <p class="month">
                                                        April
                                                    </p>
                                                    <p class="day">
                                                        23
                                                    </p>
                                                </a>
                                                <div class="items-info">
                                                    <a class="title" href="#">Item One Title</a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="list-items">
                                                <a class="date">
                                                    <p class="month">
                                                        April
                                                    </p>
                                                    <p class="day">
                                                        23
                                                    </p>
                                                </a>
                                                <div class="items-info">
                                                    <a class="title" href="#">Item One Title</a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="list-items">
                                                <a class="date">
                                                    <p class="month">
                                                        April
                                                    </p>
                                                    <p class="day">
                                                        23
                                                    </p>
                                                </a>
                                                <div class="items-info">
                                                    <a class="title" href="#">Item One Title</a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="list-items">
                                                <a class="date">
                                                    <p class="month">
                                                        April
                                                    </p>
                                                    <p class="day">
                                                        23
                                                    </p>
                                                </a>
                                                <div class="items-info">
                                                    <a class="title" href="#">Item One Title</a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="list-items">
                                                <a class="date">
                                                    <p class="month">
                                                        April
                                                    </p>
                                                    <p class="day">
                                                        23
                                                    </p>
                                                </a>
                                                <div class="items-info">
                                                    <a class="title" href="#">Item One Title</a>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <footer>
                            Gentelella - Bootstrap Admin Template by
                            <a href="#"> Colorlib</a>
                        </footer>
                    </div>  
                </div>


                <div id="back-to-top"><i class="fa fa-chevron-up"></i>
                </div>
            </div>
    </body>
</html>
