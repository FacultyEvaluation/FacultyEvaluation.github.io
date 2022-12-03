<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
 
 
</head>
<body>
    
    <h1>Home</h1>
    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="loginadmin.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>
    
</body>
</html>
    
    <!DOCTYPE html> 
<html lang="en"> 
<style>
  body{
 background-image: url("PAEET-F.png");

}


input {
    
     display: block;
    margin-left: auto;
    margin-right: auto;
  
width: 30%;
  background-color: red;
  color: white;
  padding: 14px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
    font-size: 30px;
    }

    input:hover {
  background-color: #45a049;
}.one {
text-align:left;
width:50px;
margin:1%;
height:50px;

}

    
    
    </style>
	<div class="one" ><a href="EvaulationPaaet.html" ><img src="image-removebg-preview (4).png"> </a></div>
<head>
<meta charset="UTF-8">
<title> Start </title> 
</head> 
<body> 

<form action="InsertS1.php" target="_self" method="post">
<input type="submit" value="Insert"> </form>
<br><br>

<form action="readS.php" target="_self" method="post">
<input type="submit" value="read"></form>
<br><br>

</body> </html> 
    
    
    
    
    
    
    
    
    