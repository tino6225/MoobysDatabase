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
        <title>Mooby's Employees</title>
            
    </head>
    <body>
    	<div>
			<table>
				<tr>
					<th>Mooby's Employees</th>
				</tr>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th></th>
					<th>Position</th>
					<th>Location</th>
					<th>Hr Rate</th>
					<th>Ph Num.</th>
				</tr>


			<?php

			if(!($stmt = $mysqli->prepare("SELECT E.id, E.fname, E.lname, P.title, R.city, E.hourly_rate, E.phone
			FROM mby_employee E INNER JOIN mby_position P
			ON E.position_id = P.id INNER JOIN mby_restaurant R
			ON E.restaurant_id = R.id
			Order by E.id ASC"))){
				echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
			}

			if(!$stmt->execute()){
				echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
			}
			if(!$stmt->bind_result($id, $fname, $lname, $position, $location, $hourly, $phone)){
				echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
			}
			while($stmt->fetch()){
			 echo "<tr>\n<td>\n" . $id . "\n</td>\n<td>\n" . $fname . "\n</td>\n<td>\n" . $lname . 
					"\n</td>\n<td>\n". $position . "\n</td>\n<td>\n" . $location . "\n</td>\n<td>\n" . 
					$hourly . "\n</td>\n<td>\n" . $phone . "\n</td>\n</tr>";
			}
			$stmt->close();

			?>

				
				
		</table>
		</div>
		
		<div name="Form_addEmp">
			<form method="POST" action="addEmployee.php">
				<fieldset>
					<legend>Add A New Employee</legend>
					<fieldset>
						<legend>Enter Personal Information</legend>
						<p>First Name: <input type="text" name="fName"></p>
						<p>Last Name: <input type="text" name="lName"></p>
						<p>Phone Number: <input type="text" name="phNum"></p>
					</fieldset>
					<fieldset>
						<legend>Enter HR information</legend>
						<p>Hourly Rate: <input type="number" step = ".01" min = "0" name="hrRate"></p>
						<p>Location: 
							<select name="restId">
							<?php
							if(!($stmt = $mysqli->prepare("SELECT R.id, R.city FROM mby_restaurant R"))){
								echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
							}

							if(!$stmt->execute()){
								echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
							}
							if(!$stmt->bind_result($id, $city)){
								echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
							}
							while($stmt->fetch()){
							 echo '<option value=" '. $id . ' "> ' . $id . " " . $city . '</option>\n';
							}
							$stmt->close();
							?>					
							</select>	
						</p>
						<p>Position:
							<select name="posId">
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
							 echo '<option value=" '. $id . ' "> ' . $title . '</option>\n';
							}
							$stmt->close();
							?>	
							</select>
					</fieldset>					
					<input type="submit" name="submit" value="Add New Employee">			
				</fieldset>
			</form>
		
		</div>
		<script src = ""></script>
    </body>
</html>