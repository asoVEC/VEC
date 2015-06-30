<?php
require_once 'BaseModel.php';
class User extends BaseModel {
    private $productNo;
    private $productName;
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

    function getProductName() {
        return $this->productName;
    }

//    function getUserNo() {
//        return $this->userNo;
//    }
//
//    function getUser() {
//        $Row = parent::query('user', 0);
//        return $Row;
//    }
    
    //商品検索
    
    //カテゴリ別一覧
    function byCategory($category){
        $where = 'category_no='.'\''.$category.'\'';
    }
    
    
    function login($mailAddress, $password) {
        $where = 'mail_address = ' . '\''.$mailAddress.'\''; //←検索条件のとこ''忘れないようにね!
        $row = parent::query('user', $where);
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