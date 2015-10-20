<?php

include_once ('db-connection.php');
include("response.php");

session_start();
if(!isset($_SESSION['username'])){
			$_SESSION['errorlogin']="Your Session has expired"; 
			header("Location:../view/login.php");
			exit();
}

$uid=$_SESSION['uid'];
$name=$_SESSION['username'];



$trip_text=$_POST["trip_text"];


$stmt = $db->prepare("INSERT INTO trips VALUES (NULL, :trip_text,:user_id,:created_date )");
$stmt->execute(array(':trip_text'=>$trip_text,':user_id'=>$uid,':created_date'=>date('Y/m/d H:i:s')));
$userId = $db->lastInsertId();
    
     ?>

