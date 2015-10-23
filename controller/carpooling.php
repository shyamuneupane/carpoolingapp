<?php
include 'db-connection.php';
session_start();

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
            
        case 'addTrip' : addTrip($db); break;
        case 'deleteTrip' : deleteTrip($db); break;
        case 'addComment': addComment($db); break;
        case 'deleteComment': deleteComment($db); break;
        case 'updateTrip':updateTrip($db); break;
        case 'trip_post':tripPost($db);break;
        
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
    if(isset($_POST['trip_id']) && !empty($_POST['tripid'])) {
        $item_id = $_POST['itemid'];
    }

    $stmt = $db->prepare("SELECT * FROM comments WHERE trip_id = :trip_id;");
    $stmt->execute(array(':trip_id' => $trip_id));
    $row = $stmt->fetchAll();
    if($row)
    {
        $stmt1 = $db->prepare("DELETE FROM comments WHERE trip_id=:trip_id");
        $stmt1->execute(array(':item_id'=>$item_id));
    }


    $stmt = $db->prepare("DELETE FROM trips WHERE trip_id=:trip_id");
    $stmt->execute(array(':trip_id'=>$trip_id));

    if($stmt){
        echo "1";
    } else {
        $_SESSION["error-message"]="Something went wrong with database.";
    }
}
    
    
    
    function deleteComment($db){
    if(isset($_POST['commentid']) && !empty($_POST['commentid'])) {
        $comment_id = $_POST['commentid'];
    }

    $stmt = $db->prepare("DELETE FROM comments WHERE comment_id=:comment_id");
    $stmt->execute(array(':comment_id'=>$comment_id));

    if($stmt){
        echo "1";
    }else{
        $_SESSION["comment-delete-message"]="Something went wrong with database.";
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
    
    
    
}


?>
