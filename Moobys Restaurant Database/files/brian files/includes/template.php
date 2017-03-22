<?php
require 'connect.php';

$mysqli = db_connect();
$stmt = '';

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
                <li class=<?php $class_value = ($page_id == "home") ? "\"active\"" : "\"\""; echo $class_value; ?>><a href="index.php">Overview</a></li>
                <li class=<?php $class_value = ($page_id == "restaurant") ? "\"active\"" : "\"\""; echo $class_value; ?>><a href="restaurants.php">Restaurants</a></li>
                <li class=<?php $class_value = ($page_id == "employees") ? "\"active\"" : "\"\""; echo $class_value; ?>><a href="employees.php">Employees</a></li>
                <li class=<?php $class_value = ($page_id == "positions") ? "\"active\"" : "\"\""; echo $class_value; ?>><a href="positions.php">Positions</a></li>
                <li class=<?php $class_value = ($page_id == "menu") ? "\"active\"" : "\"\""; echo $class_value; ?>><a href="menu.php">Menu Items</a></li>
                <li class=<?php $class_value = ($page_id == "schedule") ? "\"active\"" : "\"\""; echo $class_value; ?>><a href="schedules.php">Work Schedules</a> </li>
                <li class=<?php $class_value = ($page_id == "sales") ? "\"active\"" : "\"\""; echo $class_value; ?>><a href="sales.php">Sales</a> </li>
            </ul>
            <ul class="nav nav-sidebar">
        </div>
    </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <?php
                    switch($page_id) {
                        case "home":
                            echo '<h1 class="page-header">Home</h1>';
                            include 'menu.inc.php';
                            break;
                        case "restaurant":
                            echo '<h1 class="page-header">Mooby\'s Restaurant Locations</h1>';
                            include 'restaurants.inc.php';
                            break;
                        case "employees":
                            echo '<h1 class="page-header">Mooby\'s Employees</h1>';
                            include 'employees.inc.php';
                            break;
                        case "positions":
                            echo '<h1 class="page-header">Mooby\'s Positions</h1>';
                            echo '<div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default">Add Position</button>
                                    <button type="button" class="btn btn-default">Update Position</button>
                                    <button type="button" class="btn btn-default">Delete Position</button>
                                    </div><hr/>';
                            include 'positions.inc.php';
                            break;
                        case "menu":
                            echo '<h1 class="page-header">Mooby\'s Menu Items</h1>';
                            include 'menu.inc.php';
                            break;
                        case "schedule":
                            echo '<h1 class="page-header">Mooby\'s Employees\' Schedules</h1>';
                            include 'schedule.inc.php';
                            break;
                        case "sales":
                            echo '<h1 class="page-header">Mooby\'s Sales</h1>';
                            include 'sales.inc.php';
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

<script>
    $(document).ready(function(){
        var queryString = window.location.search;
        queryString = queryString.substring(1);
        var params = parseQueryString(queryString);

        if (params["mode"] === "edit")
        {
            var filename = getFileName();

            console.log(params);
            console.log(filename);
            $('#myModal').modal('show');
        }

    });

    function parseQueryString( queryString ) {
        var params = {}, queries, temp, i, l;

        // Split into key/value pairs
        queries = queryString.split("&");

        // Convert the array of strings into an object
        for ( i = 0, l = queries.length; i < l; i++ ) {
            temp = queries[i].split('=');
            params[temp[0]] = temp[1];
        }

        return params;
    };

    function getFileName() {
        //this gets the full url
        var url = document.location.href;
        //this removes the anchor at the end, if there is one
        url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
        //this removes the query after the file name, if there is one
        url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
        //this removes everything before the last slash in the path
        url = url.substring(url.lastIndexOf("/") + 1, url.length);
        return url;
    }
</script>

</body>
</html>