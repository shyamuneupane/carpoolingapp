
<?php  
 include '../controller/db-connection.php';
 session_start();

$name=  filter_input(INPUT_POST, "username");

$password= filter_input(INPUT_POST, "password");

$pass = password_hash($password,PASSWORD_DEFAULT);
$email= filter_input(INPUT_POST, "email");

    
//write to db
if(!$name || !$pass || !$email){
    
    
    header("Location: ../view/signup-form.php");
    $_SESSION['message']="Field can't be empty.";
    exit(0);
}


$stmt = $db->prepare("INSERT INTO users VALUES (NULL, :username, :password, :email, :date )");
$stmt->execute(array(':username'=>$name,':password'=>$pass,':email'=>$email, 'date'=>date('Y/m/d H:i:s')));
$userId = $db->lastInsertId();

if($stmt){
    $_SESSION["username"]=$name;
    $_SESSION['uid'] = $userId;
    header("Location:../view/main.php");
}else{
    header("Location:../view/login.php");
    $_SESSION["message"]="User can't be added to the database.";
}

?>



<?php include("bottom.html"); ?>
