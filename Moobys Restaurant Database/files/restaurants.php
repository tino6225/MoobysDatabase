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
        <title>Mooby's Restaurants</title>
            
    </head>
    <body>
    	<div name="restList">
			<table>
				<tr>
					<th>Mooby's Restaurants</th>
				</tr>
				<tr>
					<th>ID</th>
					<th>Address</th>
					<th>City</th>
					<th>State</th>
				</tr>
			<<!--PHP code for generating table rows from Mooby database-->
			<?php

			if(!($stmt = $mysqli->prepare("SELECT id, address, city, state FROM mby_restaurant"))){
				echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
			}

			if(!$stmt->execute()){
				echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
			}
			if(!$stmt->bind_result($id, $address, $city, $state)){
				echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
			}
			while($stmt->fetch()){
			 echo "<tr>\n<td>\n" . $id . "\n</td>\n<td>\n" . $address . "\n</td>\n<td>\n" . $city . "\n</td>\n<td>\n" . $state . "\n</td>\n</tr>";
			}
			$stmt->close();

			?>			
				
			</table>
		</div>
		
		<div name="Form_addRest">
			<form method="POST" action="addRestaurant.php">
				<fieldset>
					<legend>Enter New Location Address</legend>
					<p>Address: <input type="text" name="address"></p>
					<p>City: <input type="text" name="city"></p>
					<p>State: <input type="text" name="state"></p>
					<p>Zip: <input type="number" name="zip"></p>
					<input type="submit" name="submit" value="Add New Location">
				</fieldset>
			</form>
		
		</div>
		
		
		
		
		
		
		<script src = ""></script>
    </body>
</html>