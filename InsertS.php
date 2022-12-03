<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert data</title>
</head>
<body>
		<?php
    	$host = 'localhost';
    	$dbname = 'evaulationpaaetsql';
    	$username = 'root';
    	$password = '';

$Subject_Name=$_POST["Subject_Name"];
      $Professor_Rating = $_POST["Professor_Rating"];
	   $Professor_id = $_POST["Professor_id"];
$Subject_Rating = $_POST["Subject_Rating"];


      $b = array('Professor_Rating' => $Professor_Rating,'Professor_id' => $Professor_id,'Subject_Rating' =>$Subject_Rating, 'Subject_Name'=>$Subject_Name);

    	$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    	$sql = 'INSERT INTO review (
		Subject_Name,
		  Professor_id,
		  Subject_Rating,
           Professor_Rating
		  
  )
                  VALUES (
			:Subject_Name,
		 :Professor_id,
		  :Subject_Rating,
           :Professor_Rating
		

                  );';
        	$q = $pdo->prepare($sql);
        	$q->execute($b);
        	echo "Insert data correct  !"
        
        ?>
</body>
</html>