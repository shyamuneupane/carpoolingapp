<?php include '../view/top.html';

?>








      <form class="form-signin" action="../controller/login-submit.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">User Name</label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="User Name" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
             
    <form action="../view/signup-form.php" method="get" >
        <br>
        <input type="submit" value="Register User"  class="btn btn-lg btn-primary btn-block">
     
        
        </form>



    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  


  
   
    
<?php include '../view/bottom.html' ?>

