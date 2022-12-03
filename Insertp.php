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
 $Professor_id =$_POST["Professor_id"];
$Subject_Name=$_POST["Subject_Name"];
	  


      $b = array('Professor_id' => $Professor_id, 'Subject_Name'=>$Subject_Name );

    	$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    	$sql = 'INSERT INTO profeser (
				  Professor_id,
		Subject_Name

		
  )
                  VALUES (
				  
            :Professor_id,
		:Subject_Name
		
                  );';
				  
        	$q = $pdo->prepare($sql);
        	$q->execute($b);
        	echo "Insert data correct  !"
        
        ?>
</body>
</html>
 