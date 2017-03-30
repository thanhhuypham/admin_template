<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Page tables</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/table1/type-f-12.less', 'css/table1/type-f-12.css');
        ?>
        <link rel="stylesheet" href="css/table1/type-f-12.css">
        <script src="js/table1/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/table1/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/table1/custom-script.js" type="text/javascript"></script>
        <script src="js/table1/check-all.js" type="text/javascript"></script>
        <script src="js/table1/back-to-top.js" type="text/javascript"></script>
        <script src="js/table1/sibarmenu-left.js" type="text/javascript"></script>
        <script src="js/table1/flexible-menu.js" type="text/javascript"></script>
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
                                        <li  style="margin-bottom: 8px;"><a href="#">Calendar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="parent-menu" onclick="toggleMenuTables()">
                                        <a href="#">
                                            <i class="fa fa-table"></i>Tables<i class="fa fa-chevron-down"></i>
                                        </a>
                                    </div>
                                    <ul class="child-menu" id="child-tables" style="display: block;">
                                        <li class="current-page"><a href="index_table1.php">Tables</a></li>
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
                                            <a href="#">Project Detail</a>
                                        </li>
                                        <li>
                                            <a href="index_contacts.php">Contacts</a>
                                        </li>
                                        <li  style="margin-bottom: 8px;">
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
                        <div class="content">
                            <div class="content-left">
                                <h3>Tables <small>Some examples to get you started</small></h3>
                            </div>
                            <div class="content-right">
                                <div class="input-search">
                                    <input type="text" class="form-search" placeholder="Search for...">
                                    <span class="input-btn-search">
                                        <button class="btn-search" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="admin-panel">
                                    <div class="admin-title">
                                        <h3>
                                            Basic Tables 
                                            <small>basic table subtitle</small>
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
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="admin-panel">
                                    <div class="admin-title">
                                        <h3>
                                            Stripped table 
                                            <small>Stripped table subtitle</small>
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
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="admin-panel">
                                    <div class="admin-title">
                                        <h3>
                                            Hover rows
                                            <small>Try hovering over the rows</small>
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
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="admin-panel">
                                    <div class="admin-title">
                                        <h3>
                                            Boardered table
                                            <small>Bordered table subtitle</small>
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
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="admin-panel table-full">
                                    <div class="admin-title">
                                        <h3>
                                            Table design
                                            <small>Custom design</small>
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
                                        <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>
                                        <div class="info-table">
                                            <table class="table data-table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <input type="checkbox" class="checkbox" onclick="checkAll('item', this)">
                                                        </th>
                                                        <th>Invoice </th>
                                                        <th>Invoice Date </th>
                                                        <th>Order </th>
                                                        <th>Bill to Name </th>
                                                        <th>Status </th>
                                                        <th>Amount </th>
                                                        <th class="last"><span>Action</span>
                                                        </th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="item" name="id[]">
                                                        </td>
                                                        <td>121000040</td>
                                                        <td>May 23, 2014 11:47:56 PM </td>
                                                        <td>121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                                        <td>John Blank L</td>
                                                        <td>Paid</td>
                                                        <td>$7.45</td>
                                                        <td class="last"><a href="#">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="item" name="id[]">
                                                        </td>
                                                        <td>121000037</td>
                                                        <td>May 26, 2014 10:52:44 PM</td>
                                                        <td>121000204</td>
                                                        <td>Mike Smith</td>
                                                        <td>Paid</td>
                                                        <td>$333.21</td>
                                                        <td class="last"><a href="#">View</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="item" name="id[]">
                                                        </td>
                                                        <td>121000040</td>
                                                        <td>May 27, 2014 11:47:56 PM </td>
                                                        <td>121000210</td>
                                                        <td>John Blank L</td>
                                                        <td>Paid</td>
                                                        <td>$7.45</td>
                                                        <td class="last"><a href="#">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="item" name="id[]">
                                                        </td>
                                                        <td>121000039</td>
                                                        <td>May 28, 2014 11:30:12 PM</td>
                                                        <td>121000208</td>
                                                        <td>John Blank L</td>
                                                        <td>Paid</td>
                                                        <td>$741.20</td>
                                                        <td class="last"><a href="#">View</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
        </div>
    </body>
</html>
