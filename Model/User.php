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

    //引:userNo インスタンス化時にユーザーNo指定でユーザー情報をDBから取得、フィールドにセット
    function __construct($id = 0) {
        parent::__construct();
        if ($id != 0) {
            $value = $this->query('user', 'user_no = ' . $id)[0];
            $this->userNo = ($value['user_no']);
            $this->userName = $value['name'];
            $this->userNo = $value['user_no'];
            $this->mail = $value['mail_address'];
            $this->address = $value['address'];
            $this->age = $value['age'];
            $this->gender = $value['gender'];
            $this->credit = $value['credit_no'];
            $this->money = $value['money'];
            $this->point = $value['point'];
        }
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
    //使い方例:getUser()[0]->getUserName,getUser('name = \'きみや\'')[1]->getAddress();
    public static function getUsers($where = NULL) {
        $baseModel = new BaseModel(); //staticメソッドのためBaseModelをインスタンス化して使う
        $rows = $baseModel->query('user', $where);
        $users; //ユーザーのインスタンスの入れ物
        foreach ($rows as $value) {
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

    //ログイン処理 戻:成功=1, 失敗=0
    function login() {
        if ($this->mail == '' || $this->password == '') {

            return 0;
        }
        $where = 'mail_address = ' . '\'' . $this->mail . '\''; //←検索条件のとこ''忘れないようにね!
        $row = parent::query('user', $where)[0];
        if ($row['password'] === $this->password) {//←==比較すると '0'=='000'が通るので注意!
            $this->userNo = $row['user_no'];
            $this->userName = $row['name'];
            return 1;
        } else {
            return 0;
        }
    }

    function signUp() {//ログイン処理 戻:成功=1, 失敗=0
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
