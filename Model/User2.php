<?php
class User2 extends BaseModel{
    function __construct() {
        parent::__construct();
    }
    
    
    function getUser() {
    $kimiya = parent::query('user','1 = 1');
    return $kimiya;
    }

}
?>

