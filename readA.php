<?php
           $host = 'localhost'; 
		   $dbname = 'evaulationpaaetsql';
		   $username = 'root';
		   $password ='';
   
try {
	$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); 
	$sql = 'SELECT *
	FROM review
	ORDER BY Review_Number'; 
	$q = $pdo->query($sql); 
	$q->setFetchMode(PDO::FETCH_ASSOC);
	
} 
catch (PDOException $pe) {
	die("Could not connect to the database $dbname:" . $pe->getMessage());
}
?> 

<!DOCTYPE html> 
<html> 
<style>
table {
  width: 100%;
}

tr {
  height: 70px;
}
body {
  background-color: white;
}
</style>
<head>
<title> read</title> 
</head> 
<body> 
<div id="container">
<h1>Review List</h1> 
<table border="1">
<thead> 
 <tr>
<th>Review Number</th> 
<th>Professor rating</th> 
<th>Subject rating</th> 
<th>Subject id</th>
<th>SubjectName</th>
<th>Student id</th> 
<th>Professor id</th>
<th>Admin id</th>
</tr> 
</thead>
<tbody>
<?php
while($row = $q->fetch()): ?> 
<tr>
<td><?php echo htmlspecialchars ($row ['Review_Number']); ?></td> 
<td><?php echo htmlspecialchars($row ['Professor_Rating']); ?></td> 
<td><?php echo htmlspecialchars ($row [ 'Subject_Rating']); ?></td>
<td><?php echo htmlspecialchars($row ['Subject_id']) ?></td> 
<td><?php echo htmlspecialchars ($row ['Subject_Name']); ?></td> 
<td><?php echo htmlspecialchars ($row ['Student_ID']); ?></td> 
<td><?php echo htmlspecialchars($row ['Professor_id']); ?></td> 
<td><?php echo htmlspecialchars ($row [ 'Admin_ID']); ?></td>
</td> </tr> 
<?php endwhile; ?>
</tbody> 
</table> 
</body> 

</div> 
</html>