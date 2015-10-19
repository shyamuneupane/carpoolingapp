<?php
include '../view/top.html'
    ?>


    <br><br>
    <form action="../controller/signup-submit.php" method="post" class="form-signin">
        
        <h2 class="form-signin-heading">Please register for new user</h2>
            
   <label for="inputUsername" class="sr-only">User Name</label>
    <input type="text" name="username" required placeholder="user name" class="form-control"><br>
    <label for="inputUsername" class="sr-only">Password</label> <input type="password" name="password" required placeholder="password" class="form-control"><br>
    <label for="inputUsername" class="sr-only">Re-Password</label><input type="password" name="repassword" required placeholder="re-enter password" class="form-control"><br>
    <label for="inputUsername" class="sr-only">Email</label><input type="text" name="email" required placeholder="email" class="form-control"><br>
    <input type="submit" value="Register" class="btn btn-lg btn-primary btn-block">  
        
    </form>
        
        
   <!--<form action="../controller/signup-submit.php" method="post" >-->
        
    
       <?php include '../view/bottom.html' ?>
            
            
    
