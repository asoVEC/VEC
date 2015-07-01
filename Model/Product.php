<?php

require_once 'BaseModel.php';
<<<<<<< HEAD
class Product extends BaseModel {
    private $productNo;
    private $productName;
    private $listSize;
//    private $mail;
//    private $age;
//    private $gender;
//    private $address;
//    private $point;
//    private $credit;
//    private $money;
=======

class Prodct extends BaseModel {

    private $productNo;
    private $productName;
>>>>>>> origin/master

    function __construct() {
        parent::__construct();
    }

    function __destruct() {
        parent::__destruct();
    }

    function getProductName() {
        return $this->productName;
    }
    
    function setProductName($prodcutName){
        $this->productName = $prodcutName;
    }

    //商品検索
<<<<<<< HEAD
    function searchProduct($searchName){
        $where = 'product_name =' .'\''.$searchName .'\'';
        
    }
    
    //カテゴリ別一覧
    function byCategory($category){
        $where = 'category_no='.'\''.$category.'\'';
        $row = parent::query('product', $where);
//        $a = $row['product_name'];
//        return $a;
        if ($row!= NULL){
            $this->setProductName($row['product_name']);
//            $this->listSize =
            return $this->getProductName();
        }else{
            die("指定されたカテゴリには商品は存在しません。");
        }
    }
}
=======
    //カテゴリ別一覧
    function byCategory($category) {
        $where = 'category_no=' . '\'' . $category . '\'';
    }

    function login($mailAddress, $password) {
        $where = 'mail_address = ' . '\'' . $mailAddress . '\''; //←検索条件のとこ''忘れないようにね!
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
>>>>>>> origin/master
