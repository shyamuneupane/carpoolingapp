
<!DOCTYPE html>
<html>
    <head>
    
    
<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
  
<script src="../js/signup.js" type="text/javascript" ></script>
    </head>
   <body>
    <?php
include '../view/top.html'
    ?>

<br><br>





<script src="signup.js" type="text/javascript" ></script>

    <br><br>


<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
   <h1 class="text-center">Please register for new user</h1>
</div>
    <div class="modal-body">

    <form action="../controller/signup-submit.php" method="post" class="form-signin">
            
   <label for="inputUsername" >User Name</label>
    <input type="text" name="username" required placeholder="user name" class="form-control"><br>
        
    <label for="password" >Password</label> <input type="password" name="password" required placeholder="password" class="form-control" id="password"><label id="password-change"></label><br>
        

     <label for="inputUsername" >User Name</label>
    <input type="text" name="username" required placeholder="user name" class="form-control"><br>
    <label for="inputUsername" >Password</label> <input type="password" name="password" required placeholder="password" class="form-control" id="password"><br>
    <label for="inputUsername" >Confirm Password</label><input type="password" name="confirmpassword" required placeholder="confirm password" class="form-control" id="confirmpassword"><br>
    <label for="inputUsername" >Email</label><input type="text" name="email" required placeholder="email" class="form-control"><br>
    <input type="submit" id ="register" value="Register" class="btn btn-lg btn-primary btn-block">  

        
   
    
        
  

        
    </form>
    </div>   
    </div>
</div>
   
        
    
       <?php include '../view/bottom.html' ?>
       </body>      
    </html>        
    
