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
        <title>Mooby's Menu Items</title>
            
    </head>
    <body>
    	<div>
			<table>
				<tr>
					<th>Mooby's Menu Items</th>
				</tr>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Price</th>
					<th>Description</th>					
				</tr>

			<?php

			if(!($stmt = $mysqli->prepare("SELECT M.id, M.name, M.price, M.description FROM mby_menu_items M"))){
				echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
			}

			if(!$stmt->execute()){
				echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
			}
			if(!$stmt->bind_result($id, $name, $price, $description)){
				echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
			}
			while($stmt->fetch()){
			 echo "<tr>\n<td>\n" . $id . "\n</td>\n<td>\n" . $name . "\n</td>\n<td>\n" . $price . 
					"\n</td>\n<td>\n". $description . "\n</td>\n</tr>";
			}
			$stmt->close();

			?>

				
				
			</table>
		</div>
		
		
		
		<div name="Form_addItem">
			<form method="POST" action="addMenuItems.php">
				<fieldset>
					<legend>Enter New Menu Item</legend>
					<p>Name: <input type="text" name="itemName"></p>
					<p>Price: <input type="number" step=".01" min="0" name="price"></p>
					<p>Description: <input type="text" name="description"></p>
					<input type="submit" name="submit" value="Add New Menu Item">
				</fieldset>
			</form>
		
		</div>
		<script src = ""></script>
    </body>
</html>