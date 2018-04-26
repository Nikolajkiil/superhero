<!DOCTYPE html>
<html>
<head>
	<title>SuperDating.com | meet your true power</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dropdown.css">

</head>
<body>
	<div class="headline">
<h1 class="headline__h1">Superdating.com</h1>
<a href="add_new.php" class="add_new notice">Create a new user, thanks!</a>
</div>

<?php
// ensure that php errors are displayed
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


	// Include and initiate the database class (you only have to do this once)
	include('classes/database.php');
	$database = new Database;
	$database->connect();



	// Get all titles from the database
	$users = $database->query('SELECT `name`, `image`, age, superpower, likes from `user` LEFT JOIN `profile` ON user.id = profile.id');
	//$like = $database->query('UPDATE `profile` SET likes=likes+1 WHERE id = 5');
	//var_dump($like);
	//Get all likes from an user with an INNER JOIN
	//$likes = $database->query('SELECT likes from profile INNER JOIN user ON user.id = profile.id');
	//var_dump($likes);
	// Loop through all titles
	foreach ($users as $user) {?>

		<article class="title">
		<img class="profile__image" src="<?php echo $user['image'] ;?>" alt="Superhero profile picture">
		<div class="beside">
		<a href="update_profile.php?id=<?php echo $user['name'] ?>" role="button">Edit</a>
			<a href="delete_profile.php?id=<?php echo $user['name'] ?>" role="button">Delete</a>
			<br><div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Add Comment</button>
  <div id="myDropdown" class="dropdown-content">
	 <p>

<?php
    // Select all types
    $sql = "SELECT * FROM user";
    $types = $database->query($sql);
?>

  <form action="add_comments.php" method="post">
    <input type='hidden' name='name' value='Superman'>
	<input type='hidden' name='date' value'".date('Y-m-d H:i:s')."'>    <textarea class='profile__textarea' name='message'></textarea>
      <input type="submit" name="submit" value="Add">
  </form>

<?php
// Get all comments from the database
    $comments = $database->query('SELECT * FROM comments');
    // var_dump($comments);

    // Loop through all comments
    foreach ($comments as $comments) {
        ?>
        <article class="title">
            <h2>User: <?php echo $comments['name'];?></h2>
            <h3>Date/Time: <?php echo $comments['date'];?></h3>
            <h3><?php echo $comments['message'];?></h3>
        </article>
        <?php
    }
?>  

	 </p>
    </div></div>
		</div>	
		
			<h1 class="profile__name"><?php echo $user['name'];?></h1>
			<h3 class="profile__likes">likes: <?php echo $user['likes'];?></h3>
			<a href="add_like.php?id=<?php echo $user['name'] ?>" role="button" class ="like">Give a like</a>
			<h3 class="profile__age"><?php echo $user['age'];?> years</h3>
			<div class="profile__superpower">
			<p>Superpower</p>
			<h2 class="power"><?php echo $user['superpower'];?></h2>
			</div>
		</article>
		<?php
	}
?>



<script src="js/dropdown.js"></script>
</body>
</html>