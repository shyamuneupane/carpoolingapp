<?php
include 'db-connection.php';
session_start();

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
            
        case 'addTrip' : addTrip($db); break;
        case 'deleteTrip' : deleteTrip($db); break;
        case 'addComment': addComment($db); break;
        case 'updateTrip':updateTrip($db); break;
        case 'trip_post':tripPost($db);break;
        case 'addFavTrip':addFavTrip($db); break;
        case 'deleteFavTrip':deleteFavTrip($db); break;
        
    }
    
}



    
    function addTrip($db){
    if(isset($_POST['trip_text']) && !empty($_POST['trip_text'])) {
        $trip_text = $_POST['trip_text'];
    }
    
        $uid=$_SESSION['uid'];
       
        $stmt = $db->prepare("INSERT INTO trips VALUES (NULL, :trip_text,:user_id,:created_date )");
        $stmt->execute(array(':trip_text'=>$trip_text,':user_id'=>$uid,':created_date'=>date('Y/m/d H:i:s')));
        $tripId = $db->lastInsertId();

        if($stmt){
            echo $tripId;
        }else{
            $_SESSION["error-message"]="Something went wrong with database.";
    }
}
    
    
    
    
    
    function deleteTrip($db){
    if(isset($_POST['trip_id']) && !empty($_POST['trip_id'])) {
        $trip_id = $_POST['trip_id'];
    }
    
    $tripid = $_POST['trip_id'];
    
    $stmt = $db->prepare("SELECT * FROM comments WHERE trip_id = :tripid;");
    $stmt->execute(array(':tripid' => $tripid));
    echo $tripid;
    $row = $stmt->fetchAll();
        
    if($row)
    {
        $stmt1 = $db->prepare("DELETE FROM comments WHERE trip_id=:trip_id");
        $stmt1->execute(array(':trip_id'=>$row['trip_id']));
    }


    $stmt = $db->prepare("DELETE FROM trips WHERE trip_id=:tripid");
    $stmt->execute(array(':tripid'=>$tripid));

    if($stmt){
        echo "1";
    } else {
        $_SESSION["error-message"]="Something went wrong with database.";
    }
}
    
    
    
   
    
    
    function updateTrip($db){
    if(isset($_POST['tripid']) && !empty($_POST['tripid'])) {
        $trip_id = $_POST['tripid'];
    }

    if(isset($_POST['text']) && !empty($_POST['text'])) {
        $text = $_POST['triptext'];
    }

    $stmt = $db->prepare("UPDATE trips SET trip_text= :trip_text WHERE triip_id= :trip_id");
    $stmt->execute(array(':item_text'=>$text,':item_id'=>$trip_id));

    if($stmt){
        echo "1";
    }else{
        $_SESSION["task-update-message"]="Something went wrong with database.";
    }

}
    
    
    function addComment($db){
    if(isset($_POST['trip_id']) && !empty($_POST['trip_id'])) {
        $item_id = $_POST['itemid'];
    }

    if(isset($_POST['comment']) && !empty($_POST['comment'])) {
        $comment = $_POST['text'];
    }

    if(isset($_POST['userid']) && !empty($_POST['userid'])) {
        $user_id = $_POST['userid'];
    }

    $stmt = $db->prepare("INSERT INTO comments VALUES (NULL,:comment_text,:user_id,:trip_id,:created_date )");
    $stmt->execute(array(':comment_text'=>$comment, ':user_id'=>$user_id, ':item_id'=>$item_id,':created_date'=>date('Y/m/d H:i:s')));
    $commentId = $db->lastInsertId();

    if($stmt){
        echo $commentId;
    }else{
        $_SESSION["todo-add-message"]="Something went wrong with database.";
    }
}

function tripPost($db){
    $uid=$_SESSION['uid'];
    
    try{
	$stmt = $db->prepare("select * from trips where trip_id in 
	(select trip_id from favorites where user_id=:uid)");
	$stmt->execute(array(':uid'=>$uid));
	$trip = $stmt->fetchall();
	
	$stmt2 = $db->prepare("select * from trips where trip_id not in
	(select trip_id from favorites where user_id=:uid)");
	$stmt2->execute(array(':uid'=>$uid));
	$trip2 = $stmt2->fetchall();
	
	$result = array_merge($trip, $trip2);
    header('Content-Type: application/json');
	echo json_encode($result);
}
catch (PDOException $e){
	echo "Connection failed: " . $e->getMessage ();
}
    
}

function addFavTrip($db){
    
    $uid=$_SESSION['uid'];
    
    if(isset($_POST['trip_id']) && !empty($_POST['trip_id'])) {
        $trip_id = $_POST['trip_id'];
    }
    
    
     $tripid=$_POST['trip_id'];
   
    
     
    $stmt = $db->prepare("INSERT INTO favorites VALUES (NULL, :user_id,:tripid )");
    $stmt->execute(array(':user_id'=>$uid,':tripid'=>$tripid));
    
    echo "success";


}


function deleteFavTrip($db){
    echo "hello world";
    $uid=$_SESSION['uid'];
    
    if(isset($_POST['trip_id']) && !empty($_POST['trip_id'])) {
        $trip_id = $_POST['trip_id'];
    }
    
    $tripid = $_POST['trip_id'];
    echo $tripid+" "+$uid;
    $stmt = $db->prepare("DELETE FROM favorites WHERE trip_id=:tripid and user_id=:uid");
    $stmt->execute(array(':tripid'=>$tripid,':uid'=>$uid));
    
   


}



?>
