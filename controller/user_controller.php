<?php

require_once('../model/db_handler.php');
    
class UserController
{
    //constructor
    function UserController()
    {
        //constructor is empty
    }
    
    //create User in the db
    function create($username, $password, $email)
    {
         //insert to db, 
        if($this->insertNewUser($username, $password, $email))
        { 
           return true;
        }
        else
        {
            return false;
        }
        
    }
    
    //login authethication
    function login($userName, $password)
    {
        //checks against db, does login procedure
        if($this->authenticate($userName,$password))
        {
            session_start();
            
            //instantiate the userModel object
            $user = new UserModel($userName);
            //set the user object to the session
            $_SESSION['user'] = $user;
            
           return true;
        }
        else
        {
            return false;
        }
   }
    
    static function insertNewUser($u, $p, $e)
    {
        $inserted = false;
         
        
         //insert into db about new user information
        
        
        try {
                global $conn;
                $time = date("Y/m/d");
            $stmt = $conn->prepare("INSERT INTO users(username,password,email,created_date) VALUES(:field1,:field2,:field3,:field4)");
                 $stmt->execute(array(':field1' => $u,':field2' => $p, ':field3' => $e ,':field4' => $time));
                 $affected_rows = $stmt->rowCount();
               
                if($affected_rows == 1) {
                     $inserted = true;
                 
                } else {
                      $inserted = false;
            }
            } catch (PDOException $e) {
             
               echo "Connection failed: " . $e->getMessage();
            }

        return $inserted;
    }
            

    static function authenticate($u,$p)
    {
        
        $authentic = false;
    
        
        //check against db
        
        try {
                global $conn;
                $stmt = $conn->prepare("SELECT * FROM users WHERE username = :name AND password= :pass;");
                $stmt->execute(array(':name' => $u,':pass'=>$p));
                $row = $stmt->fetchAll();

                if($row) {
                    $_SESSION['uid'] = $row['user_id'];
                     $authentic = true;
                 
                } else {
                      $authentic = false;
            }
            } catch (PDOException $e) {
               
               echo "Connection failed: " . $e->getMessage();
            }

        return $authentic;
    }
    
    
    //does logout procedure
    function logout()
    {
        session_start();
        session_destroy();
    }

}
    
?>


