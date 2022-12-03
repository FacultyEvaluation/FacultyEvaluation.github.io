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
    <html>
</body>
 <!DOCTYPE html> 
<html lang="en"> 
<style>



body{
 background-image: url("PAEET-F.png");

}


input[type=submit] {
    
     display: block;

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

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
h1 {
color: yellow;
    font-family:"Lucida Console", monospace;
       
           text-align: left;}


.one {
text-align:left;
width:50px;
margin:1%;
height:50px;
}

    
</style>
<head>
<meta charset="UTF-8">


<title> Evaulation paaet </title> 
</head> 
<br><br>
<br><br>
<br><br>


    


    
    

</body> </html>

    
    
    
    
    
    