<?php
 include('includes/handlers/login-handler.php');



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Logged In!</h1>
    
   
   
    <form action="login.php" method="POST">
        <div>
        <label for="logUsername">Username :</label>    
        <input id="logUsername" type="text" name="logUsername" placeholder="username" required/>
        <br>
        <label for="logPassword">Password :</label>
        <input id="logPassword" type="password" name="logPassword" required/>
        
        <div>
           <input type="checkbox" name="rememberMe"/>
           <span> Remember Me </span>
        </div>
       
        <input type="submit" value="Submit" name="logSubmit"/>
        </div>
        
        
    </form>
    
    
    <!--<p>  You are now logged in </p> 
    <!--<div> <a href="logout.php"> logout </a> </div>-->
    
</body>
</html>
<?php

    if(isset($_COOKIE['username'])){
        $username = $_COOKIE['username'];
      
        echo "
        <script>
        document.getElementById('logUsername').value = '$username';
        </script> ";

    }




?>
