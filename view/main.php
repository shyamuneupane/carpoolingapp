<?php 

include '../view/top.html';
session_start();
if(!isset($_SESSION['username'])){
    header("Location: ../view/login.php");
}

?>
 
<a href="../controller/logout.php" id="signout">signout  (<?= $_SESSION['username'] ?>)</a>

<hr class="header-devider" >
<div class="container">
  <div class="input-group">
   <input class="form-control input-lg" placeholder="Search" type="text">
   <span class="input-group-btn">
      <button class="btn btn-primary input-lg" type="button"><span class="glyphicon glyphicon-search"></span></button>
   </span>
  </div><!-- /input-group -->
</div>

<br><br>

  
<div class="carpoolmain">
    
    <div class="input-group">
    
       
</div>
  
     <textarea placeholder="please share you ride here" required rows="3" cols="150"  class="trippost" style="resize:none" id="triptext"></textarea>
   
        <button class="btn btn-primary" id="share">                            
            <span>Share you ride</span>
        </button>
        <input type="hidden" id="uid" value="<?=$_SESSION['uid'] ?>" />
        <input type="hidden" id="username" value="<?=$_SESSION['username'] ?>" />
    
    <br><br>
    
    
    <hr class="header-devider">
    
    <div class="bs-example">
        <h1><small>Shared Trips</small></h1></div>
    <hr class="divider" />
    <div id="trip_head" ></div>
    
</div>
<?php 

include '../view/bottom.html';

?>