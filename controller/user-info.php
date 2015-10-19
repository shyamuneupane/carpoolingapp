<?php

 include("./db-connection.php");

try{
    $stmt=$db->prepare("SELECT username, email FROM users
                    WHERE username = :name AND password= :pass;");
    $stmt->execute(array(':name' => $user_name,':pass'=>$pass));
    $row = $stmt->fetch();
    if($row){
        ?> <h1> Update User <?= $row['username']?></h1>
        <form>
            User Name: <input type="text" 

        </form>

<?php 
    }
}
catch (PDOException $e) {
    ?>
    <p>Sorry, a database error occurred. Please try again later.</p>
    <p>(Error details: <?= $e->getMessage() ?>)</p>
    <?php
}

?>
