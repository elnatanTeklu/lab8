<?php

$setUsername = "username";
$setPassword = "pass";


if(isset($_POST['logSubmit'])){
    
    $logUsername = $_POST['logUsername'];
    $logPassword = $_POST['logPassword'];
    
    
    if( $setUsername == $logUsername and $setPassword == $logPassword){
         if(isset($_POST['remember'])){
            $remember = $_POST['remember'];
            setcookie('username', $logUsername, time() + (86400 * 30));
         }
        session_start();
        $_SESSION['username'] = $logUsername;
        // when the button is pressed move to this page
        header("Location: loginSuccessful.php");
    
    } else {
         echo "username = username and password = pass";
        
    } 
    
} 


?>