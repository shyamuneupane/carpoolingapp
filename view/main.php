<?php 

include '../view/top.html';
session_start();
if(!isset($_SESSION['username'])){
    header("Location: ../view/login.php");
}

?>

<a href="../controller/logout.php">signout</a>(<?= $_SESSION['username'] ?>)


<div class="main-content">


</div>
    
    

    
    
    
<?php 

include '../view/bottom.html';

?>