
<?php  
 include '../controller/db-connection.php';
 session_start();

$name=  filter_input(INPUT_POST, "username");

$password= filter_input(INPUT_POST, "pass");
$pass = password_hash($password,PASSWORD_DEFAULT);
$email= filter_input(INPUT_POST, "email");

    
//write to db
if(!$name || !$pass || !$email){
    
    
    header("Location: ../view/login.php");
    $_SESSION['message']="Field can't be empty.";
    exit(0);
}
echo $name;

$stmt = $db->prepare("INSERT INTO users VALUES (NULL, :username, :password, :email, CURRENT_DATE )");
$stmt->execute(array(':username'=>$name,':password'=>$pass,':email'=>$email));
$userId = $db->lastInsertId();
echo $userId;
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
