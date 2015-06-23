<?php
require_once 'BaseModel.php';
class User extends BaseModel{
//    private $userNo;
//    private $userName;
//    private $mail;
//    private $age;
//    private $gender;
//    private $address;
//    private $point;
//    private $credit;
//    private $money;
    
    function __construct() {
        parent::__construct();
        
    }
    
    
    function getUser() {
        $Row = parent::query('user',0);
        return $Row;
    }
    function login($mailAddress,$password){
        $where = 'mail_address = '.$mailAddress;
        $row = parent::query('user', $where);
        if ($row['password'] == $password){            
            return 1;
        }  else {
            return 0;  
        }
    }
    
    function signUp(){
        
    }

}
?>

