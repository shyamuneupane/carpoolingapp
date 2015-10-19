<?php

 include("./db-connection.php");

try{
    $stmt=$db->prepare("SELECT username, email FROM users
                    WHERE username = :name AND password= :pass;");
    $stmt->execute(array(':name' => $user_name,':pass'=>$pass));
    $row = $stmt->fetch();
    
}