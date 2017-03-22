


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
        <title>Mooby's Restaurants</title>
            
    </head>
    <body>
		<div class="container">
			<div class="row"><h1>
				<?php
				if(!($stmt = $mysqli->prepare("INSERT INTO mby_restaurant(address, city, state, zip) VALUES (?,?,?,?)"))){
					echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
				}
				if(!($stmt->bind_param("sssi",$_POST['address'],$_POST['city'],$_POST['state'],$_POST['zip']))){
					echo "Bind failed: "  . $stmt->errno . " " . $stmt->error;
				}
				if(!$stmt->execute()){
					echo "Execute failed: "  . $stmt->errno . " " . $stmt->error;
				} else {
					echo "The new <mark>" . $_POST['city'] . "</mark> location has been added to mby_restaurant.";
				}

				?>
			</h1></div>
			<div class="row">
				<a class="btn btn-primary col-md-4 col-md-offset-3" href="restaurants.php" role="button">Back to List</a>
			</div>
		</div>
		
	</body>
</html>
