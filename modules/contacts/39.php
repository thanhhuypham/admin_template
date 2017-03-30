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
        $less->compileFile('../../less/contacts/39.less', '../../css/contacts/39.css');
        ?>
        <link rel="stylesheet" href="../../css/contacts/39.css">
        <script src="../../js/contacts/39/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/contacts/39/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-39">
            <div class="container">
                <div class="content">
                    <div class="content-left">
                        <h3>Contacts Design</h3>
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
                                                        <img src="../../images/img.jpg" title="users">
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
                                                        <img src="../../images/user.png" title="users">
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
                                                        <img src="../../images/img.jpg" title="users">
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
                                                        <img src="../../images/user.png" title="users">
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
                                                        <img src="../../images/user.png" title="users">
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
                                                        <img src="../../images/img.jpg" title="users">
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
                                                        <img src="../../images/user.png" title="users">
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
                                                        <img src="../../images/img.jpg" title="users">
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
                                                        <img src="../../images/img.jpg" title="users">
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

            </div>
        </div>
    </body>
</html>