<?php

require_once('../controller/user_controller.php');
require_once('../model/user_model.php');

$loginOperation = $_REQUEST['loginSubmit'];

$user_controller = new UserController();

switch($loginOperation)
{
    case 'Login':
        
     $username = htmlspecialchars($_POST['enterUserName']);
     $password = htmlspecialchars($_POST['enterPassword']);
             
        if($user_controller->login($username, $password))
        {
            header("Location:dashboard.php");
          
        }
        else
        {
            header("Location:login.php?err=1"); 
        }
    
    break;
        
    case 'logout':
        $user_controller->logout();
        header("Location:login.php");
    break;
        
    case 'Register':
                        
           $username = htmlspecialchars($_POST['newUserInputUserName']);
           $password = htmlspecialchars($_POST['newUserInputPassword']);
           $email = htmlspecialchars($_POST['newUserInputEmail']);
        
           
           
           if ($user_controller->create($username, $password, $email))
           {
               header("Location:login.php?succ=1");
           }
           else
           {
               header("Location:login.php?err=2");
           }
        break;
}

?>
        