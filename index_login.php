<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Page login</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/login/type-f-12.less', 'css/login/type-f-12.css');
        ?>
        <link rel="stylesheet" href="css/login/type-f-12.css">
        <script src="js/login/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/login/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body style="background-color: #F7F7F7;">
        <div class="type-f-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-login">
                            <div class="row">
                                <div class="col-md-4">
                                    <hr align="left"/> 
                                </div>
                                <div class="col-md-4">
                                    <h2>Login Form</h2>
                                </div>
                                <div class="col-md-4">
                                    <hr align="left"/> 
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12">
                                    <div class="login-form">
                                        <form method="post" action="#">
                                            <input type="text" name="username" class="form-control" placeholder="Username">
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </form>
                                        <div class="functions">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="#" id="btn-login">Login</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#" id="link-lostpass">Lost your password?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="border-top: 1px solid #eee;">
                                        <div class="login-footer">
                                            <p>New to site? <a href="#">Create Account</a></p>
                                            <h3>
                                                <a href="index_dashboard2.php" class="logo">
                                                    <i class="fa fa-paw"></i> Gentelella Alela!
                                                </a>
                                            </h3>
                                            <p class="footer">©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
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
