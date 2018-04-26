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
	$sql = "INSERT INTO user (
							id,
							image,
							name,
							age,
							superpower
						) 
			VALUES (?,?,?,?,?)";
	
	// Secondly, add values
	$values = array(
		$_POST['id'],
		$_POST['image'],
		$_POST['name'],
		$_POST['age'],
		$_POST['superpower']
	);

	// Call prepared function to execute the above
	$database->prepared($sql,$values);

?>
<p class="notice success">Brilliant! This was added to the database
	<a href="index.php" class="notice">Back</a>
</p>
</body>
</html>