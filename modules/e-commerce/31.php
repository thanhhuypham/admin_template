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
        <script src="../../js/e-commerce/31/thumbs-img.js" type="text/javascript"></script>
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

                </div>
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="admin-panel">
                        <div class="admin-title">
                            <h3>
                                E-commerce page design
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
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="product-img">
                                        <a href="#"><img src="../../images/prod-1.jpg" alt="product" id="main" height="500px"></a>
                                    </div>
                                    <div class="product-gallery">
                                        <a href="../../images/prod-1.jpg" onclick="swap(this); return false;"><img src="../../images/prod-1.jpg" alt="product"></a>
                                        <a href="../../images/prod-2.jpg" onclick="swap(this); return false;"><img src="../../images/prod-2.jpg" alt=""/></a>
                                        <a href="../../images/prod-3.jpg" onclick="swap(this); return false;"><img src="../../images/prod-3.jpg" alt=""/></a>
                                        <a href="../../images/prod-4.jpg" onclick="swap(this); return false;"><img src="../../images/prod-4.jpg" alt=""/></a>
                                        <a href="../../images/prod-5.jpg" onclick="swap(this); return false;"><img src="../../images/prod-5.jpg" alt=""/></a>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <div class="product-name">
                                        <h3>LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
                                    </div>
                                    <div class="product-info">
                                        <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                        <div class="product-color">
                                            <h4>Available Colors</h4>

                                            <ul class="color-name">
                                                <li>
                                                    <p>Green</p>
                                                    <div class="color green"></div>
                                                </li>
                                                <li>
                                                    <p>Blue</p>
                                                    <div class="color blue"></div>
                                                </li>
                                                <li>
                                                    <p>Red</p>
                                                    <div class="color red"></div>
                                                </li>
                                                <li>
                                                    <p>Orange</p>
                                                    <div class="color orange"></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="product-size">
                                            <h4>Size <small>Please select one</small></h4>

                                            <ul class="size-name">
                                                <li>
                                                    <a href="#" class="btn-size">Small</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-size">Medium</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-size">Large</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn-size">X-tra Large</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-price">
                                            <h1 class="price">Ksh80.00</h1>
                                            <span class="price-tax">Ex Tax: Ksh80.00</span>
                                        </div>
                                        <div class="product-btnadd">
                                            <a href="#" class="add-to-cart">Add to Cart</a>
                                            <a href="#" class="add-to-cart">Add to Wishlist</a>
                                        </div>
                                        <div class="product-social">
                                            <ul class="list-social">
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-envelope-square"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-rss-square"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                                        <li><a data-toggle="tab" href="#menu1">Profile 1</a></li>
                                        <li><a data-toggle="tab" href="#menu2">Profile 2</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                        </div>
                                        <div id="menu1" class="tab-pane fade">                                                
                                            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                                        </div>
                                        <div id="menu2" class="tab-pane fade">
                                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk</p>
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