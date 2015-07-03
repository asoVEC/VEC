<?php

require_once 'BaseModel.php';

class User extends BaseModel {

    private $userNo;
    private $userName;
    private $password;
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

    function setUserName($param) {
        $this->userName = $param;
    }

    function setMail($param) {
        $this->mail = $param;
    }
    function setPassword($param) {
        $this->password = $param;
    }

    function setAge($param) {
        $this->age = $param;
    }

    function setGender($param) {
        $this->gender = $param;
    }
    function setAddress($param) {
        $this->address = $param;
    }

    function setCredit($param) {
        $this->credit = $param;
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

    function login() {
        $where = 'mail_address = ' . '\'' . $this->mail . '\''; //←検索条件のとこ''忘れないようにね!
        $row = parent::query('user', $where)[0];
        if ($row['password'] === $this->password) {   //←==比較すると '0'=='000'が通るので注意!
            $this->userNo = $row['user_no'];
            $this->userName = $row['name'];
            return 1;
        } else {
            return 0;
        }
    }

    function signUp() {
        if($this->mail == '' || $this->userName == '' || $this->address == '' || $this->password == '' 
                ||$this->gender == '' ||$this->age == '' || $this->credit == ''){
            return 0;
        }
            
        $values = 'NULL, \'' . $this->mail . '\', \'' . $this->userName . '\', \'' . $this->password . '\',' . $this->age . ', ' . $this->gender . ', \'' . $this->address . '\', 0, ' . $this->credit . ', 0';
        parent::insert('user',$values);
    }

}
