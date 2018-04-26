

<!DOCTYPE html>
<html>
<head>
	<title>Add new</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">

</head>
<body>

<p class="notice success">Brilliant! You just gave a like!
<a href="index.php" class="notice">Go back to profiles!</a></p>
<?php
// Get all types from the database
	include('classes/database.php');
	$database = new Database;
	$database->connect();


	// Select all types

    $heroName[]  = $_GET['id'];
    $sql = 'UPDATE `profile` INNER JOIN `user` on profile.id=user.id SET profile.likes=profile.likes+1 WHERE user.name = "'.$heroName[0].'";';
    $types = $database->prepared($sql, $heroName);


?>

</body>
</html>