<!DOCTYPE html>
<html>
<head>
	<title>processing</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	
	// check what is received through POST
	// var_dump($_POST); die();
	include('classes/database.php');
	$database = new Database;
	$database->connect();


	//- - - Add new movie - - - 

	// First, prepare the SQL
	$sql = "UPDATE user SET (`name`, `age`, `superpower`)
			VALUES (?,?,?)";
	
	// Secondly, add values
	$values = array(
		$_POST['name'],
		$_POST['age'],
		$_POST['superpower']
	);

	// Call prepared function to execute the above
	$database->prepared($sql,$values);

?>
<p class="notice success">Your user has been updated
	<a href="index.php" class="notice">Back</a>
</p>
</body>
</html>