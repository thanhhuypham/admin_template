<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Content pricing table</title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../../css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/pricing-tables/51.less', '../../css/pricing-tables/51.css');
        ?>
        <link rel="stylesheet" href="../../css/pricing-tables/51.css">
        <script src="../../js/pricing-tables/51/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/pricing-tables/51/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../js/pricing-tables/51/custom-script.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-51">
            <div class="container">
                <div class="content">
                    <div class="content-left">
                        <h3>Pricing Tables</h3>
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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h3>
                                    Pricing Tables Design
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
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="pricings-table">
                                            <div class="title-price">
                                                <h4>Tally Box Design</h4>
                                                <h3>free</h3>
                                            </div>
                                            <ul class="list-group-item">
                                                <li>
                                                    <i class="fa fa-remove"></i> 2 years access <b>to all storage locations</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-remove"></i> <b>Unlimited</b> storage
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> Limited <b>download quota</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> <b>Cash on Delivery</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> All time <b>updates</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-remove"></i> <b>Unlimited </b>access to all files
                                                </li>
                                                <li>
                                                    <i class="fa fa-remove"></i> <b>Allowed </b>to be exclusing per sale
                                                </li>
                                            </ul>
                                            <div class="price-footer">
                                                <a href="#" id="btn-download">Download now!</a>
                                                <a href="#" id="sign-up">Sign up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="pricings-table">
                                            <div class="sale-off">
                                                <div id="percent">
                                                    30% Off
                                                </div>
                                            </div>
                                            <div class="title-price">
                                                <h4>Tally Box Design</h4>
                                                <h3>$25</h3>
                                                <span>Monthly</span>
                                            </div>
                                            <ul class="list-group-item">
                                                <li>
                                                    <i class="fa fa-check"></i> 2 years access <b>to all storage locations</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> <b>Unlimited</b> storage
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> Limited <b>download quota</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> <b>Cash on Delivery</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> All time <b>updates</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-remove"></i> <b>Unlimited </b>access to all files
                                                </li>
                                                <li>
                                                    <i class="fa fa-remove"></i> <b>Allowed </b>to be exclusing per sale
                                                </li>
                                            </ul>
                                            <div class="price-footer">
                                                <a href="#" id="btn-download-saleoff">Download now!</a>
                                                <a href="#" id="sign-up">Sign up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="pricings-table">
                                            <div class="title-price">
                                                <h4>Tally Box Design</h4>
                                                <h3>$25</h3>
                                                <span>Monthly</span>
                                            </div>
                                            <ul class="list-group-item">
                                                <li>
                                                    <i class="fa fa-check"></i> 2 years access <b>to all storage locations</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> <b>Unlimited</b> storage
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> Limited <b>download quota</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> <b>Cash on Delivery</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> All time <b>updates</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-remove"></i> <b>Unlimited </b>access to all files
                                                </li>
                                                <li>
                                                    <i class="fa fa-remove"></i> <b>Allowed </b>to be exclusing per sale
                                                </li>
                                            </ul>
                                            <div class="price-footer">
                                                <a href="#" id="btn-download">Download now!</a>
                                                <a href="#" id="sign-up">Sign up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="pricings-table">
                                            <div class="title-price">
                                                <h4>Tally Box Design</h4>
                                                <h3>$25</h3>
                                                <span>Monthly</span>
                                            </div>
                                            <ul class="list-group-item">
                                                <li>
                                                    <i class="fa fa-check"></i> 2 years access <b>to all storage locations</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> <b>Unlimited</b> storage
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> Limited <b>download quota</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> <b>Cash on Delivery</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> All time <b>updates</b>
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> <b>Unlimited </b>access to all files
                                                </li>
                                                <li>
                                                    <i class="fa fa-check"></i> <b>Allowed </b>to be exclusing per sale
                                                </li>
                                            </ul>
                                            <div class="price-footer">
                                                <a href="#" id="btn-download">Download now!</a>
                                                <a href="#" id="sign-up">Sign up</a>
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