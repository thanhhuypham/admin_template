<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Footer table2 </title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/table2/28.less', '../../css/table2/28.css');
        ?>
        <link rel="stylesheet" href="../../css/table2/28.css">
    </head>

    <body>
        <div class="type-28">
            <div class="container-fluid"> 
                <footer>
                    Gentelella - Bootstrap Admin Template by
                    <a href="#"> Colorlib</a>
                </footer>
            </div>
        </div>

    </body>
</html>