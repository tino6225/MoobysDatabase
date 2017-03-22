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
        <title>Mooby's Menu Items</title>
            
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
				<form method="POST" action="addMenuItems.php" class="form-horizontal">
					<fieldset>
						<div class="form-group">
							<legend>Enter New Menu Item</legend>
						</div>
						<div class="form-group">
							<label class="col-md-1">Name: </label>
							<input type="text" name="itemName" class="col-md-3">
						</div>
						<div class="form-group">
							<label class="col-md-1">Price: </label>
							<input type="number" step=".01" min="0" name="price" class="col-md-3">
						</div>
						<div class="form-group">
							<label class="col-md-1">Description: </label>
							<input type="text" name="description" class="col-md-3">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Add New Menu Item" class=" btn btn-primary col-md-offset-1">
						</div>
					</fieldset>
				</form>
			
			</div
		</div>
		<script src = ""></script>
    </body>
</html>