<?php
class response {
    public $success; 
    public $msg;
    public $val; 
    
    public function __construct($success, $msg, $val){
        $this->success = $success; 
        $this->msg = $msg; 
        $this->val = $val; 
        
    }
}

?>