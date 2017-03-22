<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'Murphy4*');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'moobysdb');

// Make the connection:
function db_connect()
{
    $mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error());


// Set the encoding...
    mysqli_set_charset($mysqli, 'utf8');

    return $mysqli;
}