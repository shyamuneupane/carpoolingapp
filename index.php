<?php 

session_start();
if(isset($_SESSION['username'])){
    header("Location:view/main.php");
}
else{
    
    header("Location:view/login.php");
}


?>

