<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Page content 3 table2</title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../../css/font-awesome.min.css">
        <link href="../../css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/table2/23.less', '../../css/table2/23.css');
        ?>
        <link rel="stylesheet" href="../../css/table2/23.css">
        <script src="../../js/table2/23/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/table2/23/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../js/table2/23/icheck.min.js" type="text/javascript"></script>
        <script src="../../js/table2/23/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="../../js/table2/23/dataTables.bootstrap.min.js" type="text/javascript"></script>
        <script src="../../js/table2/23/custom-script.js" type="text/javascript"></script>
        <script src="../../js/table2/23/check-all.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-23">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h3>
                                    Plus Table Design
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
                                <p>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:<code>$().DataTable();</code></p>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable-checkbox" class="table table-bordered">
                                            <thead>
                                                <tr role="row" class="">
                                                    <th style="width: 6px;">
                                                    </th>
                                                    <th style="width: 34px;">
                                                        <input type="checkbox" class="item" onclick="checkAll('item', this)">
                                                    </th>
                                                    <th style="width: 141px;">Name</th>
                                                    <th style="width: 233px;">Position</th>
                                                    <th style="width: 103px;">Office</th>
                                                    <th style="width: 50px;">Age</th>
                                                    <th style="width: 99px;">Start date</th>
                                                    <th style="width: 76px;">Salary</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                    </td>
                                                    <th>
                                                        <input type="checkbox" class="item">
                                                    </th>

                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>

                                                </tr>
                                                <tr >
                                                    <td>
                                                    </td>
                                                    <th>
                                                        <input type="checkbox" class="item">
                                                    </th>

                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    </td>
                                                    <th>
                                                        <input type="checkbox" class="item">
                                                    </th>

                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>

                                                </tr>
                                                <tr >
                                                    <td>
                                                    </td>
                                                    <th>
                                                        <input type="checkbox" class="item">
                                                    </th>

                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    </td>
                                                    <th>
                                                        <input type="checkbox" class="item">
                                                    </th>

                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>

                                                </tr>
                                                <tr >
                                                    <td>
                                                    </td>
                                                    <th>
                                                        <input type="checkbox" class="item">
                                                    </th>

                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    </td>
                                                    <th>
                                                        <input type="checkbox" class="item">
                                                    </th>

                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>

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