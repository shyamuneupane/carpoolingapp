<?php

include_once ('db-connection.php');
include("response.php");

session_start();
//if(!isset($_SESSION['username'])){
//			$_SESSION['errorlogin']="Your Session has expired"; 
//			header("Location:../view/login.php");
//			exit();
//		}
//if(!isset($_SESSION['user_id'])){
//			$_SESSION['errorlogin']="No user Id found for the comment"; 
//			header("Location:../view/main.php");
//			exit();
//		}
//$id=$_SESSION['user_id'];
//$name=$_SESSION['username'];


$data = json_decode(file_get_contents('php://input'), true);
//$comment_text = $data["comment_text"];
$user_id = $data["user_id"];
$trip_id = $data["trip_id"];
//$create_date = $data["created_date"];

//   $comment_text = filter_input(INPUT_POST, "text_comment");
//    $user_id=$id;
//    $trip_id= $tpid;
  //  $created_date=date("Y-m-d H:m:s");

    $insert = $db->prepare("INSERT INTO comments (user_id, trip_id) VALUES(:user_id,:trip_id)");
//    $parameter = array(':comment_text'=>$comment_text,
//                       ':user_id'=>$user_id,
//                       ':trip_id'=>$trip_id,
//                       ':createdDate'=>$created_date
//                      );
//$insert->bindParam('comment_text', $comment_text); 
$insert->bindParam('user_id', $user_id); 
$insert->bindParam('trip_id', $trip_id); 
//$insert->bindParam('created_date', $created_date); 
$insert->execute();
    //$id=$db->lastInsertId();

   

    $res = new response(true, "Inserted" , null); 
    header("Content-Type:application/json");
    echo json_encode($res);

//    
//}
     ?>

