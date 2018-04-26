<!DOCTYPE html>
<html>
<head>
	<title>Add new</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">

</head>
<body>
<?php
// Get all types from the database
	include('classes/database.php');
	$database = new Database;
	$database->connect();

	// Select all types
	$sql = "SELECT image, name, age, superpower, likes FROM user INNER JOIN profile ON user.id = profile.id";
	$types = $database->query($sql);
?>
<article class="article__form">
  <form action="process.php" method="post">
  	<label for="image">How do I look? <br>(<em>e.g. www.hero.com/image/spiderman.jpg</em>)</label>
  	<input type="text" name="image" placeholder="e.g. a good image">
  	
  	<label for="name">Name</label>
  	<input type="text" name="name" placeholder="e.g. Wannabe Batman" required>

  	<label for="age">Age</label>
  	<input type="number" name="age" placeholder="Yes, your real age" required>

  	<label for="superpower">What's your superpower?</label>
  	<input type="text" name="superpower" placeholder="Fast AF boy" required>

<label for="Likes">Likes you have so far</label>
  <input type="number" name="likes" value="0" placeholder="You have 0 likes" readonly>
  	</select>

  	<input type="submit" class="add_new notice" name="submit" value="Create my profile">
  </form>
  <a href="index.php" class="add_new notice">Not today. <br> Just take me back</a>
  </article>
</body>
</html>