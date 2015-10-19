<?php
include '../view/top.html'
    ?>


<!DOCTYPE html>
<html>
<head>
<title>Sign-Up here</title> 
    
    <?php session_start(); ?>
    <meta charset="utf-8">
    
    <style>
        
    </style>
</head>
    <body>
    <form action="../controller/login-submit.php" method="post">
        <fieldset>
            <legend>New User Sign-UP</legend>
            
    User Name: <input type="text" name="username" required placeholder="user name" class="form-control"><br/>
    Password: <input type="password" name="password" required placeholder="password" class="form-control"><br />
      
    Re-enter Password: <input type="password" name="password" required placeholder="re-enter password" class="form-control"><br />
            E-mail:<input type="text" name="email" required placeholder="email" class="form-control"><br />
              <input type="submit" value="Submit">  
        </fieldset>
    </form>
        
        
   <!--<form action="../controller/signup-submit.php" method="post" >-->
        
    
       <?php include '../view/bottom.html' ?>
            
            
    
    
    </body>


</html>