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

      $Subject_id = $_POST["Subject_id"];
      $Subject_Name = $_POST["Subject_Name"];
      $Professor_id = $_POST["Professor_id"];
      $Admin_ID = $_POST["Admin_ID"];
$Subject_Rating = $_POST["Subject_Rating"];
$Student_ID=$_POST["Student_ID"];
 $Professor_Rating= $_POST["Professor_Rating"];

      $a = array('Subject_id' => $Subject_id,
            'Subject_Name' => $Subject_Name,
            'Professor_id' => $Professor_id,'Admin_ID' => $Admin_ID,'Subject_Rating' =>$Subject_Rating,'Student_ID' =>$Student_ID,'Professor_Rating' =>$Professor_Rating);
           
try{
    	$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    	$sql = 'INSERT INTO review (
                      Subject_id,
            Subject_Name,
            Professor_id,
			Admin_ID,
          Subject_Rating,
		  Student_ID,
		  Professor_Rating
                  )
                  VALUES (
                      :Subject_id,
            :Subject_Name,
            :Professor_id,
			:Admin_ID,
           :Subject_Rating,
		   :Student_ID,
		   :Professor_Rating
		  
		  
                  );';
				  
	
        	$q = $pdo->prepare($sql);
        	$q->execute($a);
        	echo "Insert data correct  !";
  } catch (PDOException $pe) {
            die("Could not connect to the database $dbname :" . $pe->getMessage());
        }
        ?>
</body>
</html>