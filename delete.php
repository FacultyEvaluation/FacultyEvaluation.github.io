<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
</head>
<body>
		<?php

    	$host = 'localhost';
    	$dbname = 'evaulationpaaetsql';
    	$username = 'root';
    	$password = '';


    	$Review_Number = $_POST["Review_Number"];

    	$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    		
        $sql = 'DELETE FROM review
                  WHERE Review_Number = :Review_Number';
        	$q = $pdo->prepare($sql);
        	$q->execute([':Review_Number' => $Review_Number]);
          $count = $q->rowCount();
          
          if($count != '0')
            echo "The task has been deleted successfully!";
          else
            echo "Task not available in the database.";
        ?>
</body>
</html>