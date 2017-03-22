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
        <title>Mooby's Positions</title>
            
    </head>
    <body>
    	<div>
			<table>
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
			<form method="POST" action="addPosition.php">
				<fieldset>
					<legend>Enter New Position Details</legend>
					<p>Title: <input type="text" name="title"></p>					
					<input type="submit" name="submit" value="Add New Location">
				</fieldset>
			</form>
		
		</div>
		
		
		<script src = ""></script>
    </body>
</html>