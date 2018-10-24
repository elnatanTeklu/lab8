<?php

session_start();
$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Successful login username =  <?php echo $username;  ?> </h1> 
    <button> <a href="logout.php"> logout </a> </button>
</body>
</html>