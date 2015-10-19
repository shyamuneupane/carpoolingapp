<?php
include '../view/top.html'
    ?>


    <br><br>

<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
   <h1 class="text-center">Please register for new user</h1>
</div>
    <div class="modal-body">
    <form action="../controller/signup-submit.php" method="post" class="form-signin">
        
       
            
   <label for="inputUsername" class="sr-only">User Name</label>
    <input type="text" name="username" required placeholder="user name" class="form-control"><br>
    <label for="inputUsername" class="sr-only">Password</label> <input type="password" name="password" required placeholder="password" class="form-control"><br>
    <label for="inputUsername" class="sr-only">Re-Password</label><input type="password" name="repassword" required placeholder="re-enter password" class="form-control"><br>
    <label for="inputUsername" class="sr-only">Email</label><input type="text" name="email" required placeholder="email" class="form-control"><br>
    <input type="submit" value="Register" class="btn btn-lg btn-primary btn-block">  
        
    </form>
    </div>   
    </div>
</div>
   <!--<form action="../controller/signup-submit.php" method="post" >-->
        
    
       <?php include '../view/bottom.html' ?>
            
            
    
