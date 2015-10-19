<?php include '../view/top.html'?>

    <form action="../controller/login-submit.php" method="post" class="form-signin">
        <fieldset>
            <h2 class="form-signin-heading">Please sign in</h2>
            
    <label for="inputEmail" class="sr-only">Email address</label> 
    <input type="text" name="username" required placeholder="user name" class="form-control"><br>
    <label for="inputEmail" class="sr-only">Password</label><input type="password" name="password" required placeholder="password" class="form-control" autofocus> <br>
    <input type="submit" value="Login"  class="btn btn-lg btn-primary btn-block">
                
    </fieldset>
    </form>
        
        
    <form action="../view/signup-form.php" method="get" >
        <br>
        <input type="submit" value="Register User"  class="btn btn-lg btn-primary btn-block">
     
        
        </form>
    <br><br><br><hr>
    </body>
<?php include '../view/bottom.html'?>

</html>