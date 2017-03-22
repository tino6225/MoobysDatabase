<?php
ini_set('display_errors', 'On');

$page_id = "restaurant";

if(isset($_POST["id"])) {
    $id = $_POST["id"];
}

include('includes/template.php');

//close database connection
$mysqli->close();