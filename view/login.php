<?php include '../view/top.html';

?>




    
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
   <h1 class="text-center">Please sign in</h1>
</div>
    
    <div class="modal-body">
      <form class="col-md-12 center-block" action="../controller/login-submit.php" method="post">
     
        <label for="inputUsername">User Name</label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="User Name" required="" autofocus=""><br>
         
         
              <label for="inputPassword" >Password</label>
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required=""><br>
          
        
            <input type="checkbox" value="remember-me"> Remember me
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button><br>
      </form>
          
             
    <form action="../view/signup-form.php" method="get">
        <br>
        <input type="submit" value="Register User"  class="btn btn-lg btn-primary btn-block">
     
        
        </form>
        
        </div>
        </div>
    </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  


  
   
    
<?php include '../view/bottom.html' ?>

