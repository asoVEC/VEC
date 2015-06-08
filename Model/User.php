<?php
class User extends BaseModel{
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

}
?>

