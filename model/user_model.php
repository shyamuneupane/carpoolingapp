<?php

class UserModel
{
    private $userName;
    
    function UserModel($userName)
    {
        $this->userName = $userName;
    }
    
    function get_userName()
    {
        return $this->userName;
    }
    
    function set_userName($userName)
    {
        $this->userName = $userName;
    }
}

?>