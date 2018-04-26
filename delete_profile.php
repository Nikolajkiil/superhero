

<!DOCTYPE html>
<html>
<head>
	<title>Add new</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">

</head>
<body>

<p class="notice success">Good job on removing a bad user!
<a href="index.php" class="notice">Go back to profiles!</a></p>
<?php
// Get all types from the database
	include('classes/database.php');
	$database = new Database;
	$database->connect();

	//DELETE FROM table_name
	//WHERE condition;


	// Select all types

    $heroName[]  = $_GET['id'];
    $sql = 'DELETE FROM `user`  WHERE user.name = "'.$heroName[0].'";';
    $types = $database->prepared($sql, $heroName);


?>

</body>
</html>