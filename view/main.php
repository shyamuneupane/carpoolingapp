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
    
    <div class="input-group">
    
       
</div>
  
     <textarea placeholder="please share you ride here" required rows="3" cols="150"  class="comment" style="resize:none" id="commenttext"></textarea>
   
        <button class="btn btn-primary" id="share">                            
            <span>Share you ride</span>
        </button>
        <input type="hidden" id="uid" value="<?=$_SESSION['uid'] ?>"
    
    <br><br>
    
    
    <hr class="header-devider">
    <div id="trip_head" ></div>
    
</div>
<?php 

include '../view/bottom.html';

?>