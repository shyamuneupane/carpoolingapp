<?php

 include("../controller/db-connection.php");
 session_start();
$req_name=filter_input(INPUT_POST,"username");
$password=  filter_input(INPUT_POST, "password");


if(!$req_name || !$password){
    header("Location: ../view/login.php");
    $_SESSION['message']="Fields can't be empty.";
    
    exit(0);
}

try {
    
    $stmt = $db->prepare("SELECT * FROM users
                    WHERE username = :name ");
    $stmt->execute(array(':name' => $req_name));
    $row = $stmt->fetch();
    
    
  if($row){
        if(password_verify($password, $row["password"])) {
            $_SESSION["username"]=$req_name;
             $_SESSION['uid'] = $row["user_id"];
        
            header("Location: ../view/main.php");
        } else {
            header("Location: ../view/login.php");
            $_SESSION['message']="Invalid username or password";
    
        header("Location: ../view/login.php");
            exit();
            }    
      }
    else{
    
    header("Location: ../view/login.php");
    
    }
    
    
  
} catch (PDOException $e) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $e->getMessage() ?>)</p>
    <?php
}



?>
