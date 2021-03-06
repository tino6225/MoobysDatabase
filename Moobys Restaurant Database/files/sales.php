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
        <title>Mooby's Sales</title>
            
    </head>
    <body>
	
		<div name="Form_addSale">
			<form method="POST" action="addSale.php">
				<fieldset>
					<legend>Add A New Sale</legend>
				
					<p>Date: <input type="date" name="date"></p>
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
					<p>Employee:
						<select name="emplId">
						<?php
						if(!($stmt = $mysqli->prepare("SELECT E.id, E.fname, E.lname FROM mby_employee E"))){
							echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
						}

						if(!$stmt->execute()){
							echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
						}
						if(!$stmt->bind_result($id, $fname, $lname)){
							echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
						}
						while($stmt->fetch()){
						 echo '<option value=" '. $id . ' "> ' . $fname . " " . $lname . '</option>\n';
						}
						$stmt->close();
						?>	
						</select>
					</p>
					<p>Item: 
						<select name="itemId">
						<?php
						if(!($stmt = $mysqli->prepare("SELECT M.id, M.name FROM mby_menu_items M"))){
							echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
						}

						if(!$stmt->execute()){
							echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
						}
						if(!$stmt->bind_result($id, $name)){
							echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
						}
						while($stmt->fetch()){
						 echo '<option value=" '. $id . ' "> ' . $name . '</option>\n';
						}
						$stmt->close();
						?>					
						</select>	
					</p>
					
					<p>Quantity Sold: <input type="number" min="1" name="quantity"></p>
				</fieldset>
				<input type="submit" name="submit" value="Add Sale">			

			</form>
		
		</div>
	
    	<div>
			<table>
				<tr>
					<th>Mooby's Sales</th>
				</tr>
				<tr>
					<th>Date</th>
					<th>Item Code</th>
					<th>Item Name</th>
					<th>Quantity Sold</th>
					<th>Price</th>
					<th>Location</th>
					<th>Emp Name</th>
					<th></th>
				</tr>

			<?php

			if(!($stmt = $mysqli->prepare("SELECT SA.date, M.id, M.name, SA.item_quantity, M.price, R.city, E.fname, E.lname
			FROM mby_sales SA INNER JOIN mby_menu_items M ON SA.item_id = M.id
			INNER JOIN mby_restaurant R ON SA.restaurant_id = R.id
			INNER JOIN mby_employee E ON SA.employee_id = E.id
			ORDER BY SA.date DESC, M.name ASC, R.city ASC"))){
				echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
			}

			if(!$stmt->execute()){
				echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
			}
			if(!$stmt->bind_result($date, $mId, $mName, $quantity, $price, $location, $fname, $lname)){
				echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
			}
			while($stmt->fetch()){
			 echo "<tr>\n<td>\n" . $date . "\n</td>\n<td>\n" . $mId . "\n</td>\n<td>\n" . $mName . 
					"\n</td>\n<td>\n". $quantity . "\n</td>\n<td>\n" . $price . "\n</td>\n<td>\n" . 
					$location . "\n</td>\n<td>\n" . $fname . "\n</td>\n<td>\n" . $lname . "</td>\n</tr>";
			}
			$stmt->close();

			?>

				
				
			</table>
		</div>
		
		
		
		
		<script src = ""></script>
    </body>
</html>