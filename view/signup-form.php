<?php
include '../view/top.html'
    ?>

<script src="signup.js" type="text/javascript" ></script>
    <br><br>

<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
   <h1 class="text-center">Please register for new user</h1>
</div>
    <div class="modal-body">
    
        
        <form action="../controller/signup-submit.php" method="post" id="form-signin">
        
     <label for="inputUsername" >User Name</label>
    <input type="text" name="username" required placeholder="user name" class="form-control"><br>
    <label for="inputUsername" >Password</label> <input type="password" name="password" required placeholder="password" class="form-control" id="password"><br>
    <label for="inputUsername" >Confirm Password</label><input type="password" name="confirmpassword" required placeholder="confirm password" class="form-control" id="confirmpassword"><br>
    <label for="inputUsername" >Email</label><input type="text" name="email" required placeholder="email" class="form-control"><br>
    <input type="submit" value="Register" class="btn btn-lg btn-primary btn-block" id="register">  
        
    </form>
    </div>   
    </div>
</div>
   <!--<form action="../controller/signup-submit.php" method="post" >-->
        
    
       <?php include '../view/bottom.html' ?>
            
            
    
