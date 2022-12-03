<!DOCTYPE html> 
<html lang="en"> 
<style>
input[type=text], select {
  width: 15%;
  padding: 5px 5px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
body{
 background-image: url("12.jpg.webp");
 background-repeat:no-repeat;
 background-size:2200px 1200px;
 border-radius: 50%;




}
.one {
text-align:left;
width:50px;
margin:1%;
height:50px;

}
}
</style>
<?php
    $host = 'localhost';
    $dbname = 'evaulationpaaetsql';
    $username = 'root';
    $password = '';

    try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

            $sql_profeser = 'SELECT * 
                    FROM profeser
                    ORDER BY Subject_Name';
            $q_profeser = $pdo->query($sql_profeser);
            $q_profeser->setFetchMode(PDO::FETCH_ASSOC);
            $data_profeser = $q_profeser->fetchAll();

 $sql_profeser = 'SELECT * 
                    FROM profeser
                    ORDER BY Professor_id';
            $q_profeser = $pdo->query($sql_profeser);
            $q_profeser->setFetchMode(PDO::FETCH_ASSOC);
            $data_profeser = $q_profeser->fetchAll();

        } catch (PDOException $pe) {
            die("Could not connect to the database $dbname :" . $pe->getMessage());
        }


?>





<head>
<meta charset="UTF-8">
<title> Insert </title> 
</head> 
<div>
<body> 
<header><h3>Please fill Review infromation: </h3></header>
<form action="https://localhost/1/InsertS.php" target="_blank" method="post">
 
  
   Subject_Name:<br>
        <select name="Subject_Name">
            <?php foreach ($data_profeser as $row): ?>
                <option value=<?=$row["Subject_Name"]?>><?=$row["Subject_Name"]?></option>
            <?php endforeach ?>
        </select>
        <br>
        Professor_id:<br>
        <select name="Professor_id">
            <?php foreach ($data_profeser as $row): ?>
                <option value=<?=$row["Professor_id"]?>><?=$row["Professor_id"]?></option>
            <?php endforeach ?>
        </select>
  
  
  <br><br>
  Subject Rating: <br> 
<input type="text" name="Subject_Rating"> 
  <br><br>
			Professor rating: <br>
<input type="text" name="Professor_Rating"><br><br>
<br><br>
<br><br>

<input type="submit" value="Review"> 
<div>
 </form>
<br><br>

 

 </body> </html>
 