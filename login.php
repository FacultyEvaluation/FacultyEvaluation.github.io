<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: home.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">

</head>
<body>
    
    <h1>Login</h1>
    
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    
    <form method="post">
        <label for="email">email</label>
        <input type="email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        
        <button>Log in</button>
    </form>
    
</body>
</html>
<style>
    h1 {
color: yellow;
    font-family:"Lucida Console", monospace;
       
           text-align: center;}


input {
    
     display: block;
    margin-left: auto;
    margin-right: auto;
  
width: 10%;
 
  color:black
  padding: 14px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
    }
input[type=submit] {
    
     display: block;
    margin-left: auto;
    margin-right: auto;
  
width: 10%;
  background-color: red;
  color: white;
  padding: 14px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
    
    }
    
    input[type=submit]:hover {
  background-color: #45a049;
}

h3:{position: relative; left: 50%; margin-left: -200px}
body{
 background-image: url("PAEET-F.png");
 border-radius: 50%;
 text-align: center;
    font-size: 20px;


color: yellow;
}
.one {
text-align:left;
width:50px;
margin:1%;
height:50px;

}








