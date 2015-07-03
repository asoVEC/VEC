<?php
require_once 'BaseModel.php';
class User extends BaseModel {
    private $userNo;
    private $userName;
    private $mail;
    private $age;
    private $gender;
    private $address;
    private $point;
    private $credit;
    private $money;

    function __construct() {
        parent::__construct();
    }

    function getUserName() {
        return $this->userName;
    }

    function getUserNo() {
        return $this->userNo;
    }

    public static function getAllUser() {
        $baseModel = new BaseModel();
        $rows = $baseModel->query('user', 0);
    }
    
    function login($mailAddress, $password) {
        $where = 'mail_address = ' . '\''.$mailAddress.'\''; //←検索条件のとこ''忘れないようにね!
        $row = parent::query('user', $where)[0];
        if ($row['password'] === $password) {   //←==比較すると '0'=='000'が通るので注意!
            $this->userNo = $row['user_no'];
            $this->userName = $row['name'];
            return 1;
        } else {
            return 0;
        }
    }

    function signUp() {   
    }
}