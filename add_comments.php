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


    //- - - Add new a message - - - 

    // First, prepare the SQL
    $sql = "INSERT INTO comments (
                            id, 
							name,
                            date, 
                            message 
                        ) 
            VALUES (?,?,?,?)";
    
    // Secondly, add values
    $values = array(
		$_POST['id'],
		$_POST['name'],
        $_POST['date'],
        $_POST['message']
    );

    // Call prepared function to execute the above
    $database->prepared($sql,$values);

?>
<p class="notice success">You just sent a message!
    <a href="index.php" class="notice">Back to profile</a>
</p>
</body>
</html>