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
     function getMail() {
        return $this->mail;
    }
     function getAddress() {
        return $this->address;
    }
     function getGender() {
        return $this->gender;
    }
     function getAge() {
        return $this->age;
    }
     function getCredit() {
        return $this->credit;
    }
     function getMoney() {
        return $this->money;
    }
    
     function getPoint() {
        return $this->point;
    }
    
    //DBからユーザーを取得 引:検索条件(引数無しで全ユーザー取得) 戻:User配列
    //使い方例:getAllUser()[0]->getUserName,getUser('name = \'きみや\'')[1]->getAddress(); 
    public static function getUser($where = NULL) {//DBからユーザーを取得 戻:User配列
        $baseModel = new BaseModel();
        $rows = $baseModel->query('user', $where);
        $users;//ユーザーのインスタンスの入れ物
        foreach ($rows as $value){
            $user = new User;
            $user->userNo = ($value['user_no']);
            $user->userName = $value['name'];
            $user->userNo = $value['user_no'];
            $user->mail = $value['mail_address'];
            $user->address = $value['address'];
            $user->age = $value['age'];
            $user->gender = $value['gender'];
            $user->credit = $value['credit_no'];
            $user->money = $value['money'];
            $user->point = $value['point'];
            $users[] = $user;
        }
        return $users;
        
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
        if ($this->mail == '' || $this->userName == '' || $this->address == '' || $this->password == '' || $this->gender == '' || $this->age == '' || $this->credit == '') {
            return 0;
        }

        $values = 'NULL, \'' . $this->mail . '\', \'' . $this->userName . '\', \'' . $this->password . '\',' . $this->age . ', ' . $this->gender . ', \'' . $this->address . '\', 0, ' . $this->credit . ', 0';
        $result = parent::insert('user', $values);
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
    

}
