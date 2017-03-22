<?php
require 'connect.php';

$mysqli = db_connect();

$mainMenu = array (
    array( "title" => "Home", "href" => "/", "sel" => false ),
    array( "title" => "About", "href" => "/link2", "sel" => false ),
    array( "title" => "Contacts", "href" => "/link3", "sel" => false )
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CS340 Project: Mooby's Food and Fun</title>

    <!-- Bootstrap core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Mooby's Database Admin</a>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#"><?php $mainMenu[0]["title"] ?></a></li>
                <li><a href="restaurants.php">Restaurants</a></li>
                <li><a href="employees.php">Employees</a></li>
                <li><a href="positions.php">Positions</a></li>
                <li><a href="menu.php">Menu Items</a></li>
                <li><a href="workSch.php">Work Schedules</a> </li>
            </ul>
            <ul class="nav nav-sidebar">
        </div>
    </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <?php
                    switch($page_id) {
                        case "home":
                            echo '<h1 class=\"page-header\">Home</h1>';
                            include 'menu.inc.php';
                            break;
                        case "menu":
                            echo '<h1 class=\"page-header\">Mooby\'s Menu Items</h1>';
                            include 'menu.inc.php';
                            break;
                    }
                ?>
        </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>