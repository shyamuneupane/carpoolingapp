<?php 

include("./db-connection.php");
 session_start();
if(!isset($_SESSION["username"])){
    header("Location: ../view/login.php");
}



?>