<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Page table dynamics</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/e-commerce/type-f-12.less', 'css/e-commerce/type-f-12.css');
        ?>
        <link rel="stylesheet" href="css/e-commerce/type-f-12.css">
        <script src="js/e-commerce/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/e-commerce/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/e-commerce/back-to-top.js" type="text/javascript"></script>
        <script src="js/e-commerce/sibarmenu-left.js" type="text/javascript"></script>
        <script src="js/e-commerce/flexible-menu.js" type="text/javascript"></script>
        <script src="js/e-commerce/thumbs-img.js" type="text/javascript"></script>
    </head>

    <body style="background-color: #2A3F54;">
        <div class="type-f-12">
            <div class="container-fluid">
                
                
            </div>
        </div>
    </body>
</html>
