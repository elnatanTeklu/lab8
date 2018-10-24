<?php






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
    
    
    
    <h1>Sign up</h1>
    <form action="register.php" method="POST">
        
        <div>
        <label for="firstName">FirstName :</label>
        <input type="text" name="firstName" placeholder="John" required/>
        <br>
        </div>
        
        <div>
        <label for="lastName">LastName :</label>
        <input type="text" name="lastName" placeholder="Doe" required/>
        <br>
        </div>
        
        <div>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Johndoe@email.com" required/>
        <br>
        </div>
        
        <div>
        <label for="password1">Password :</label>
        <input type="password" name="password1" placeholder="@Password123" required/>
        <br>
        </div>
        
        <div>
        <label for="password2">Confirm password :</label>
        <input type="password" name="password1" placeholder="@Password123" required/>
        <br>
        </div>
        
        <br>
       <input type="submit" value="Submit"/> 
    </form>
</body>
</html>