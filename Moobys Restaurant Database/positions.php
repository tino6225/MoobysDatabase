<?php
//Turn on error reporting
ini_set('display_errors', 'On');
//Connects to the database
$mysqli = new mysqli("oniddb.cws.oregonstate.edu","tarantim-db","qiYPC4AXJLon1UXc","tarantim-db");
if($mysqli->connect_errno){
	echo "Connection error " . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <title>Mooby's Positions</title>
            
    </head>
    <body>
		<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="btn btn-primary col-md-offset-1" href="moobyHome.php">Home</a>
		</div>	
		</nav>
		<div class="container">
			<div>
				<table class="table">
					<tr>
						<th>Mooby's Positions</th>
					</tr>
					<tr>
						<th>ID</th>
						<th>Title</th>					
					</tr>

					<?php

					if(!($stmt = $mysqli->prepare("SELECT P.id, P.title FROM mby_position P"))){
						echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
					}

					if(!$stmt->execute()){
						echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
					}
					if(!$stmt->bind_result($id, $title)){
						echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
					}
					while($stmt->fetch()){
					 echo "<tr>\n<td>\n" . $id . "\n</td>\n<td>\n" . $title . "\n</td>\n</tr>";
					}
					$stmt->close();

					?>					
				</table>
			</div>
			
			<div name="Form_addPos">
				<form method="POST" action="addPosition.php" class="form-horizontal">
					<fieldset>
						<legend>Enter New Position Details</legend>
						
						<div class="form-group">
							<label class="col-md-1">Title: </label>
							<input type="text" name="title" class="col-md-3">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Add New Location" class="btn btn-primary col-md-offset-1">
						</div>
					</fieldset>
				</form>
			
			</div>
		</div>
		
		
		<script src = ""></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    </body>
</html>