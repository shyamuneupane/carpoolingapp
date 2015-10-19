<?php 

include '../view/top.html';
session_start();
if(!isset($_SESSION['username'])){
    header("Location: ../view/login.php");
}

?>

<a href="../controller/logout.php" id="signout">signout  (<?= $_SESSION['username'] ?>)</a>

<hr class="header-devider" >
<div class="carpoolmain">
    <form method="post" action="">
    
    <textarea placeholder="please share you ride here" required rows="3" cols="150" class="comment"></textarea>
    <input type="submit" value="Share your ride" class="btn btn-primary" class="comment">     
    <input type="hidden" name="username" value="<?=$_SESSION['username'] ?>">
        <input type="hidden" name="uid" value="<?=$_SESSION['uid'] ?>">
    
    </form>
    
</div>
<?php 

include '../view/bottom.html';

?>