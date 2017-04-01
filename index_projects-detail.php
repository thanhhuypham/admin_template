<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Page project detail</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/project-detail/type-f-12.less', 'css/project-detail/type-f-12.css');
        ?>
        <link rel="stylesheet" href="css/project-detail/type-f-12.css">
        <script src="js/project-detail/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/project-detail/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/project-detail/echarts.min.js" type="text/javascript"></script>
        <script src="js/project-detail/custom-script.js" type="text/javascript"></script>
        <script src="js/project-detail/back-to-top.js" type="text/javascript"></script>
        <script src="js/project-detail/sibarmenu-left.js" type="text/javascript"></script>
        <script src="js/project-detail/flexible-menu.js" type="text/javascript"></script>
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
                                        <li class="current-page">
                                            <a href="index_projects-detail.php">Project Detail</a>
                                        </li>
                                        <li>
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
                            <h3>Project Detail <small>design</small></h3>
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
                                    <h3>
                                        New Partner Contracts Consultancy
                                    </h3>
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
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <ul class="detail-overview">
                                                <li>
                                                    <p>
                                                        Estimated budget <br><b>2300</b>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        Total amount spent <br><b>2000</b>
                                                    </p>
                                                </li>
                                                <li class="border-none">
                                                    <p>
                                                        Estimated project duration <br><b>20</b>
                                                    </p>
                                                </li>
                                            </ul><br><br>
                                            <div id="graph-bussiness"></div>
                                            <h5>Recent Activity</h5>
                                            <ul class="recent-activity">
                                                <li>
                                                    <img src="images/img.jpg" alt="" class="img-user">
                                                    <div class="date-comment">
                                                        <h3>24</h3>
                                                        <p>May</p>
                                                    </div>
                                                    <div class="comment-content">
                                                        <h4>Desmond Davison</h4>
                                                        <p class="content">
                                                            Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.
                                                        </p><br>
                                                        <a href="#" class="link-file">
                                                            <i class="fa fa-paperclip"></i> User Acceptance Test.doc
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="images/picture.jpg" alt="" class="img-user">
                                                    <div class="date-comment">
                                                        <h3>21</h3>
                                                        <p>May</p>
                                                    </div>
                                                    <div class="comment-content">
                                                        <h4>Brian Michaels</h4>
                                                        <p class="content">
                                                            Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.
                                                        </p><br>
                                                        <a href="#" class="link-file">
                                                            <i class="fa fa-paperclip"></i> Download
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="images/img.jpg" alt="" class="img-user">
                                                    <div class="date-comment">
                                                        <h3>24</h3>
                                                        <p>May</p>
                                                    </div>
                                                    <div class="comment-content">
                                                        <h4>Desmond Davison</h4>
                                                        <p class="content">
                                                            Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.
                                                        </p><br>
                                                        <a href="#" class="link-file">
                                                            <i class="fa fa-paperclip"></i> User Acceptance Test.doc
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <h4 class="title-des">Project Description</h4>
                                            <div class="project-description">
                                                <h3><i class="fa fa-paint-brush"> Gentelella</i></h3>
                                                <p>
                                                    Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.
                                                </p>
                                                <div class="location-company">
                                                    <b>Client Company</b>Deveint Inc
                                                    <b>Project Leader</b>Tony Chicken
                                                </div>
                                                <div class="project-files">
                                                    <b>Project files</b>
                                                    <br>
                                                    <a href="#" class="files"><i class="fa fa-file-word-o"></i> Functional-requirements.docx</a>
                                                    <a href="#" class="files"><i class="fa fa-file-pdf-o"></i> UAT.pdf</a>
                                                    <a href="#" class="files"><i class="fa fa-mail-forward"></i> Email-from-flatbal.mln</a>
                                                    <a href="#" class="files"><i class="fa fa-picture-o"></i> Logo.png</a>
                                                    <a href="#" class="files"><i class="fa fa-file-word-o"></i> Contract-10_12_2014.docx</a>
                                                </div>     
                                                <div class="button-function">
                                                    <a href="#" class="btn-add">Add files</a>
                                                    <a href="#" class="btn-report">Report contact</a>
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
