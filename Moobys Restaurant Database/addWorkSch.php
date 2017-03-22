<?php
//Turn on error reporting
ini_set('display_errors', 'On');
//Connects to the database
$mysqli = new mysqli("oniddb.cws.oregonstate.edu","tarantim-db","qiYPC4AXJLon1UXc","tarantim-db");
if($mysqli->connect_errno){
	echo "Connection error " . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}

if(!($stmt = $mysqli->prepare("INSERT INTO mby_schedule(employee_id, date, start_time, end_time) 
		VALUES (?,?,?,?)"))){
	echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
}
//formatting for date to be compatible with SQL
$start = $_POST['date'] . " " . $_POST['start'] . ":00";
$end = $_POST['date'] . " " . $_POST['end'] . ":00";


if(!($stmt->bind_param("isss",$_POST['emplId'],$_POST['date'],$start, $end))){
	echo "Bind failed: "  . $stmt->errno . " " . $stmt->error;
}
if(!$stmt->execute()){
	echo "Execute failed: "  . $stmt->errno . " " . $stmt->error;
} else {
	echo "Added " . $stmt->affected_rows . " rows to mby_schedule.";
}

?>
