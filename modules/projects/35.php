<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Content e-commerce</title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../../css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/projects/35.less', '../../css/projects/35.css');
        ?>
        <link rel="stylesheet" href="../../css/projects/35.css">
        <script src="../../js/projects/35/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/projects/35/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../js/projects/35/custom-script.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-35">
            <div class="container">
                <div class="content">
                    <div class="content-left">
                        <h3>Projects <small>Listing design</small></h3>
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
                                    Projects
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
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p>Simple table with project listing with progress and editing options</p>

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Project Name</th>
                                                    <th>Team Members</th>
                                                    <th>Project Progress</th>
                                                    <th>Status</th>
                                                    <th>#Edit</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#</td>
                                                    <td>
                                                        <a href="#" class="title-name">Pesamakini Backend UI</a>
                                                        <br>
                                                        <small>Created 01.01.2015</small>
                                                    </td>
                                                    <td>
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                    </td>
                                                    <td class="project-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar" style="width: 57%;"></div>
                                                        </div>
                                                        <small>57% Complete</small>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="status">
                                                            Success
                                                        </a> 
                                                    </td>
                                                    <td class="btn-function">
                                                        <a href="#" class="view">
                                                            <i class="fa fa-folder"></i>View
                                                        </a> 
                                                        <a href="#" class="edit">
                                                            <i class="fa fa-pencil"></i> Edit
                                                        </a> 
                                                        <a href="#" class="delete">
                                                            <i class="fa fa-trash"></i>Delete
                                                        </a> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>
                                                        <a href="#" class="title-name">Pesamakini Backend UI</a>
                                                        <br>
                                                        <small>Created 01.01.2015</small>
                                                    </td>
                                                    <td>
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                    </td>
                                                    <td class="project-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar" style="width: 47%;"></div>
                                                        </div>
                                                        <small>47% Complete</small>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="status">
                                                            Success
                                                        </a> 
                                                    </td>
                                                    <td class="btn-function">
                                                        <a href="#" class="view">
                                                            <i class="fa fa-folder"></i>View
                                                        </a> 
                                                        <a href="#" class="edit">
                                                            <i class="fa fa-pencil"></i> Edit
                                                        </a> 
                                                        <a href="#" class="delete">
                                                            <i class="fa fa-trash"></i>Delete
                                                        </a> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>
                                                        <a href="#" class="title-name">Pesamakini Backend UI</a>
                                                        <br>
                                                        <small>Created 01.01.2015</small>
                                                    </td>
                                                    <td>
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                    </td>
                                                    <td class="project-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar" style="width: 77%;"></div>
                                                        </div>
                                                        <small>77% Complete</small>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="status">
                                                            Success
                                                        </a> 
                                                    </td>
                                                    <td class="btn-function">
                                                        <a href="#" class="view">
                                                            <i class="fa fa-folder"></i>View
                                                        </a> 
                                                        <a href="#" class="edit">
                                                            <i class="fa fa-pencil"></i> Edit
                                                        </a> 
                                                        <a href="#" class="delete">
                                                            <i class="fa fa-trash"></i>Delete
                                                        </a> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>
                                                        <a href="#" class="title-name">Pesamakini Backend UI</a>
                                                        <br>
                                                        <small>Created 01.01.2015</small>
                                                    </td>
                                                    <td>
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                    </td>
                                                    <td class="project-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar" style="width: 60%;"></div>
                                                        </div>
                                                        <small>60% Complete</small>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="status">
                                                            Success
                                                        </a> 
                                                    </td>
                                                    <td class="btn-function">
                                                        <a href="#" class="view">
                                                            <i class="fa fa-folder"></i>View
                                                        </a> 
                                                        <a href="#" class="edit">
                                                            <i class="fa fa-pencil"></i> Edit
                                                        </a> 
                                                        <a href="#" class="delete">
                                                            <i class="fa fa-trash"></i>Delete
                                                        </a> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>
                                                        <a href="#" class="title-name">Pesamakini Backend UI</a>
                                                        <br>
                                                        <small>Created 01.01.2015</small>
                                                    </td>
                                                    <td>
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                    </td>
                                                    <td class="project-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar" style="width: 12%;"></div>
                                                        </div>
                                                        <small>12% Complete</small>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="status">
                                                            Success
                                                        </a> 
                                                    </td>
                                                    <td class="btn-function">
                                                        <a href="#" class="view">
                                                            <i class="fa fa-folder"></i>View
                                                        </a> 
                                                        <a href="#" class="edit">
                                                            <i class="fa fa-pencil"></i> Edit
                                                        </a> 
                                                        <a href="#" class="delete">
                                                            <i class="fa fa-trash"></i>Delete
                                                        </a> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>
                                                        <a href="#" class="title-name">Pesamakini Backend UI</a>
                                                        <br>
                                                        <small>Created 01.01.2015</small>
                                                    </td>
                                                    <td>
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                        <img src="../../images/user.png" alt="users" class="avartar">
                                                    </td>
                                                    <td class="project-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar" style="width: 95%;"></div>
                                                        </div>
                                                        <small>95% Complete</small>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="status">
                                                            Success
                                                        </a> 
                                                    </td>
                                                    <td class="btn-function">
                                                        <a href="#" class="view">
                                                            <i class="fa fa-folder"></i>View
                                                        </a> 
                                                        <a href="#" class="edit">
                                                            <i class="fa fa-pencil"></i> Edit
                                                        </a> 
                                                        <a href="#" class="delete">
                                                            <i class="fa fa-trash"></i>Delete
                                                        </a> 
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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