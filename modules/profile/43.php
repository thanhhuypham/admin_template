<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Content profile</title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../../css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/profile/43.less', '../../css/profile/43.css');
        ?>
        <link rel="stylesheet" href="../../css/profile/43.css">
        <script src="../../js/profile/43/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/profile/43/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../js/profile/43/custom-script.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-43">
            <div class="container">
                <div class="content">
                    <div class="content-left">
                        <h3>User Profile</h3>
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
                                    User Report <small> Activity report</small>
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
                                    <div class="col-md-3">
                                        <div class="avartar-profile">
                                            <img src="../../images/picture.jpg" title="avatar user">
                                            <h4 class="name-profile">Samuel Doe</h4>
                                            <div class="info-profile">
                                                <i class="fa fa-map-marker"></i> San Francisco, California, USA <br>
                                                <i class="fa fa-briefcase"></i> Software Engineer <br>
                                                <i class="fa fa-external-link"></i> www.kimlabs.com <br>
                                            </div>
                                            <div class="btn-edit">
                                                <a href="#"> <i class="fa fa-edit"> Edit Profile</i></a>
                                            </div>
                                            <div class="skills">
                                                <h4>Skills</h4>
                                                <p>Web Applications</p>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 50%;">
                                                    </div>
                                                </div>
                                                <p>Website Design</p>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 75%;">
                                                    </div>
                                                </div>
                                                <p>Automation & Testing</p>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 25%;">
                                                    </div>
                                                </div>
                                                <p>UI / UX</p>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 50%;">
                                                    </div>
                                                </div>
                                            </div>
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