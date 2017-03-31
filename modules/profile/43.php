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
        <link href="../../css/daterangepicker.css" rel="stylesheet" type="text/css"/>

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
        <script src="../../js/profile/43/chart.min.js" type="text/javascript"></script>
        <script src="../../js/profile/43/moment.min.js" type="text/javascript"></script>
        <script src="../../js/profile/43/daterangepicker.js" type="text/javascript"></script>
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
                                    <div class="col-md-9">
                                        <div class="user-report">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4>User Activity Report</h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <div id="reportrange">
                                                        <i class="fa fa-calendar"></i> March 2, 2017 - March 31, 2017
                                                        <i class="fa fa-caret-down"></i>
                                                    </div>
                                                </div>
                                            </div>                                                  
                                        </div>
                                        <canvas id="mybarChart"></canvas>

                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#home">Recent Activity</a></li>
                                            <li><a data-toggle="tab" href="#menu1">Projects Worked on</a></li>
                                            <li><a data-toggle="tab" href="#menu2">Profile</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="home" class="tab-pane fade in active">
                                                <nav>
                                                    <ul class="comments">
                                                        <li>
                                                            <img src="../../images/img.jpg" alt="" class="img-user">
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
                                                            <img src="../../images/picture.jpg" alt="" class="img-user">
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
                                                            <img src="../../images/img.jpg" alt="" class="img-user">
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
                                                            <img src="../../images/picture.jpg" alt="" class="img-user">
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
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div id="menu1" class="tab-pane fade">                                                
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Project Name</th>
                                                            <th>Client Company</th>
                                                            <th>Hours Spent</th>
                                                            <th>Contribution</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>New Company Takeover Review</td>
                                                            <td>Deveint Inc</td>
                                                            <td>18</td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width: 35%">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Partners and Inverstors report</td>
                                                            <td>Deveint Inc</td>
                                                            <td>30</td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width: 55%">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>New Partner Contracts Consultanci</td>
                                                            <td>Deveint Inc</td>
                                                            <td>13</td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width: 15%; background-color: #d9534f;">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>New Company Takeover Review</td>
                                                            <td>Deveint Inc</td>
                                                            <td>18</td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width: 75%">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
        </div>
    </body>
</html>