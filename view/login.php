<!DOCTYPE html>
<html>
<head>
<title>Login here</title> 
    
    <?php session_start(); ?>
    <meta charset="utf-8">
</head>
    <body>
    <form action="../controller/login-submit.php" method="post">
        <fieldset>
            <legend> User Login</legend>
            
    User Name: <input type="text" name="username" required placeholder="user name">
    Password: <input type="password" name="password" required placeholder="password">
        <input type="submit" value="Login" >
                
        </fieldset>
    </form>
        
        
    <form action="../controller/signup-submit.php" method="post" >
        
        <fieldset>
        <legend> User registration</legend>
            User Name: <input type="text" name="username" required placeholder="user name"><br>
            Password: <input type="password" name="pass" required placeholder="password" ><br>
            email: <input type="email" name="email" required placeholder="email address"><br>
            <input type="submit" value="Submit">
            
        </fieldset>
        
        </form>
    
    </body>


</html>