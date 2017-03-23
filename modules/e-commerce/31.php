<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Top navigation table1</title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../../css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/e-commerce/31.less', '../../css/e-commerce/31.css');
        ?>
        <link rel="stylesheet" href="../../css/e-commerce/31.css">
        <script src="../../js/e-commerce/31/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/e-commerce/31/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../js/e-commerce/31/custom-script.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-31">
            <div class="container-fluid">
                <div class="content">
                    <div class="content-left">
                        <h3>E-commerce :: Product Page</h3>
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
                    
                    <div class="col-md-12 col-sm-6 col-xs-12">
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
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="product-img">
                                            <a href="#"><img src="../../images/prod-1.jpg" alt="product"></a>
                                        </div>
                                        <div class="product-gallery">
                                            <a href="#"><img src="../../images/prod-2.jpg" alt=""/></a>
                                            <a href="#"><img src="../../images/prod-3.jpg" alt=""/></a>
                                            <a href="#"><img src="../../images/prod-4.jpg" alt=""/></a>
                                            <a href="#"><img src="../../images/prod-5.jpg" alt=""/></a>
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