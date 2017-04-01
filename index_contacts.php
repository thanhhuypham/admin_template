<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Page Contacts</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/contacts/type-f-12.less', 'css/contacts/type-f-12.css');
        ?>
        <link rel="stylesheet" href="css/contacts/type-f-12.css">
        <script src="js/contacts/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/contacts/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/contacts/back-to-top.js" type="text/javascript"></script>
        <script src="js/contacts/sibarmenu-left.js" type="text/javascript"></script>
        <script src="js/contacts/flexible-menu.js" type="text/javascript"></script>
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
                                    <ul class="child-menu" id="child-home" style="display: none;">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li>
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
                                        <li style="margin-top: 6px;"><a href="index_table1.php">Tables</a></li>
                                        <li><a href="index_table2.php" style="margin-bottom: 8px;">Table Dynamic</a></li>
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
                                    <ul class="child-menu" id="child-additional" style="display: block;">
                                        <li style="margin-top: 2px;">
                                            <a href="index_e-commerce.php">E-commerce</a>
                                        </li>
                                        <li>
                                            <a href="index_projects.php">Projects</a>
                                        </li>
                                        <li>
                                            <a href="index_projects-detail.php">Project Detail</a>
                                        </li>
                                        <li class="current-page">
                                            <a href="index_contacts.php">Contacts</a>
                                        </li>
                                        <li style="margin-bottom: 8px;">
                                            <a href="index_profile.php">Profile</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="parent-menu" onclick="toggleMenuExtras()">
                                        <a href="#">
                                            <i class="fa fa-windows"></i>Extras<i class="fa fa-chevron-down"></i>
                                        </a>
                                    </div>
                                    <ul class="child-menu" id="child-extras" style="display: none;">
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
                                            <a href="index_login.php">Login Page</a>
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
                    <div class="content">
                        <div class="content-left">
                            <h3>Contact Design</h3>
                        </div>
                        <div class="content-right">
                            <div class="input-search">
                                <form method="get" action="#">
                                    <input type="text" class="form-search" placeholder="Search for...">

                                </form>
                                <span class="input-btn-search">
                                    <button class="btn-search" type="button">Go!</button>
                                </span>
                            </div>
                        </div>  

                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="admin-panel">
                                <div class="admin-title">
                                    <ul class="word">
                                        <li><a href="#">A</a></li>
                                        <li><a href="#">B</a></li>
                                        <li><a href="#">C</a></li>
                                        <li><a href="#">D</a></li>
                                        <li><a href="#">E</a></li>
                                        <li>...</li>
                                        <li><a href="#">W</a></li>
                                        <li><a href="#">X</a></li>
                                        <li><a href="#">Y</a></li>
                                        <li><a href="#">Z</a></li>
                                    </ul>
                                </div>
                                <div class="admin-content">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="contact-info-user">
                                                <div class="profile-view">
                                                    <div class="contact-info">
                                                        <h5><i>Digital Strategist</i></h5>
                                                        <div class="col-md-7 col-xs-7">
                                                            <div class="contact-user">
                                                                <h4>Nicole Pearson</h4>
                                                                <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                <i class="fa fa-building"></i>Address:<br>
                                                                <i class="fa fa-phone"></i>Phone#:
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 col-xs-5">
                                                            <img src="images/img.jpg" title="users">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="profile-evaluate">
                                                    <div class="col-md-6">
                                                        <p class="ratings">
                                                            <span>4.0</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="#" class="btn-contact">
                                                            <i class="fa fa-user"></i>
                                                            <i class="fa fa-comment-o"></i>
                                                        </a>
                                                        <a href="#" class="btn-view">
                                                            <i class="fa fa-user"></i>View Profile
                                                        </a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="contact-info-user">
                                                <div class="profile-view">
                                                    <div class="contact-info">
                                                        <h5><i>Digital Strategist</i></h5>
                                                        <div class="col-md-7 col-xs-7">
                                                            <div class="contact-user">
                                                                <h4>Nicole Pearson</h4>
                                                                <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                <i class="fa fa-building"></i>Address:<br>
                                                                <i class="fa fa-phone"></i>Phone#:
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 col-xs-5">
                                                            <img src="images/user.png" title="users">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="profile-evaluate">
                                                    <div class="col-md-6">
                                                        <p class="ratings">
                                                            <span>4.0</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="#" class="btn-contact">
                                                            <i class="fa fa-user"></i>
                                                            <i class="fa fa-comment-o"></i>
                                                        </a>
                                                        <a href="#" class="btn-view">
                                                            <i class="fa fa-user"></i>View Profile
                                                        </a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="contact-info-user">
                                                <div class="profile-view">
                                                    <div class="contact-info">
                                                        <h5><i>Digital Strategist</i></h5>
                                                        <div class="col-md-7 col-xs-7">
                                                            <div class="contact-user">
                                                                <h4>Nicole Pearson</h4>
                                                                <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                <i class="fa fa-building"></i>Address:<br>
                                                                <i class="fa fa-phone"></i>Phone#:
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 col-xs-5">
                                                            <img src="images/img.jpg" title="users">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="profile-evaluate">
                                                    <div class="col-md-6 col-sm-6">
                                                        <p class="ratings">
                                                            <span>4.0</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <a href="#" class="btn-contact">
                                                            <i class="fa fa-user"></i>
                                                            <i class="fa fa-comment-o"></i>
                                                        </a>
                                                        <a href="#" class="btn-view">
                                                            <i class="fa fa-user"></i>View Profile
                                                        </a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px;">
                                            <div class="contact-info-user">
                                                <div class="profile-view">
                                                    <div class="contact-info">
                                                        <h5><i>Digital Strategist</i></h5>
                                                        <div class="col-md-7 col-xs-7">
                                                            <div class="contact-user">
                                                                <h4>Nicole Pearson</h4>
                                                                <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                <i class="fa fa-building"></i>Address:<br>
                                                                <i class="fa fa-phone"></i>Phone#:
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 col-xs-5">
                                                            <img src="images/user.png" title="users">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="profile-evaluate">
                                                    <div class="col-md-6 col-sm-6">
                                                        <p class="ratings">
                                                            <span>4.0</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <a href="#" class="btn-contact">
                                                            <i class="fa fa-user"></i>
                                                            <i class="fa fa-comment-o"></i>
                                                        </a>
                                                        <a href="#" class="btn-view">
                                                            <i class="fa fa-user"></i>View Profile
                                                        </a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px;">
                                            <div class="contact-info-user">
                                                <div class="profile-view">
                                                    <div class="contact-info">
                                                        <h5><i>Digital Strategist</i></h5>
                                                        <div class="col-md-7 col-xs-7">
                                                            <div class="contact-user">
                                                                <h4>Nicole Pearson</h4>
                                                                <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                <i class="fa fa-building"></i>Address:<br>
                                                                <i class="fa fa-phone"></i>Phone#:
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 col-xs-5">
                                                            <img src="images/user.png" title="users">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="profile-evaluate">
                                                    <div class="col-md-6 col-sm-6">
                                                        <p class="ratings">
                                                            <span>4.0</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <a href="#" class="btn-contact">
                                                            <i class="fa fa-user"></i>
                                                            <i class="fa fa-comment-o"></i>
                                                        </a>
                                                        <a href="#" class="btn-view">
                                                            <i class="fa fa-user"></i>View Profile
                                                        </a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px;">
                                            <div class="contact-info-user">
                                                <div class="profile-view">
                                                    <div class="contact-info">
                                                        <h5><i>Digital Strategist</i></h5>
                                                        <div class="col-md-7 col-xs-7">
                                                            <div class="contact-user">
                                                                <h4>Nicole Pearson</h4>
                                                                <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                <i class="fa fa-building"></i>Address:<br>
                                                                <i class="fa fa-phone"></i>Phone#:
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 col-xs-5">
                                                            <img src="images/img.jpg" title="users">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="profile-evaluate">
                                                    <div class="col-md-6 col-sm-6">
                                                        <p class="ratings">
                                                            <span>4.0</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <a href="#" class="btn-contact">
                                                            <i class="fa fa-user"></i>
                                                            <i class="fa fa-comment-o"></i>
                                                        </a>
                                                        <a href="#" class="btn-view">
                                                            <i class="fa fa-user"></i>View Profile
                                                        </a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px; margin-bottom: 22px;">
                                            <div class="contact-info-user">
                                                <div class="profile-view">
                                                    <div class="contact-info">
                                                        <h5><i>Digital Strategist</i></h5>
                                                        <div class="col-md-7 col-xs-7">
                                                            <div class="contact-user">
                                                                <h4>Nicole Pearson</h4>
                                                                <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                <i class="fa fa-building"></i>Address:<br>
                                                                <i class="fa fa-phone"></i>Phone#:
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 col-xs-5">
                                                            <img src="images/user.png" title="users">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="profile-evaluate">
                                                    <div class="col-md-6 col-sm-6">
                                                        <p class="ratings">
                                                            <span>4.0</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <a href="#" class="btn-contact">
                                                            <i class="fa fa-user"></i>
                                                            <i class="fa fa-comment-o"></i>
                                                        </a>
                                                        <a href="#" class="btn-view">
                                                            <i class="fa fa-user"></i>View Profile
                                                        </a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px; margin-bottom: 22px;">
                                            <div class="contact-info-user">
                                                <div class="profile-view">
                                                    <div class="contact-info">
                                                        <h5><i>Digital Strategist</i></h5>
                                                        <div class="col-md-7 col-xs-7">
                                                            <div class="contact-user">
                                                                <h4>Nicole Pearson</h4>
                                                                <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                <i class="fa fa-building"></i>Address:<br>
                                                                <i class="fa fa-phone"></i>Phone#:
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 col-xs-5">
                                                            <img src="images/img.jpg" title="users">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="profile-evaluate">
                                                    <div class="col-md-6 col-sm-6">
                                                        <p class="ratings">
                                                            <span>4.0</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <a href="#" class="btn-contact">
                                                            <i class="fa fa-user"></i>
                                                            <i class="fa fa-comment-o"></i>
                                                        </a>
                                                        <a href="#" class="btn-view">
                                                            <i class="fa fa-user"></i>View Profile
                                                        </a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px; margin-bottom: 2px;">
                                            <div class="contact-info-user">
                                                <div class="profile-view">
                                                    <div class="contact-info">
                                                        <h5><i>Digital Strategist</i></h5>
                                                        <div class="col-md-7 col-xs-7">
                                                            <div class="contact-user">
                                                                <h4>Nicole Pearson</h4>
                                                                <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                <i class="fa fa-building"></i>Address:<br>
                                                                <i class="fa fa-phone"></i>Phone#:
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 col-xs-5">
                                                            <img src="images/img.jpg" title="users">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="profile-evaluate">
                                                    <div class="col-md-6 col-sm-6">
                                                        <p class="ratings">
                                                            <span>4.0</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <a href="#" class="btn-contact">
                                                            <i class="fa fa-user"></i>
                                                            <i class="fa fa-comment-o"></i>
                                                        </a>
                                                        <a href="#" class="btn-view">
                                                            <i class="fa fa-user"></i>View Profile
                                                        </a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
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
                    <div id="back-to-top"><i class="fa fa-chevron-up"></i></div>
                </div>
            </div>
        </div>
    </body>
</html>
