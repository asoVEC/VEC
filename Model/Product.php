<?php
require_once 'BaseModel.php';
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

    function __construct() {
        parent::__construct();
    }

    function getProductName() {
        return $this->productName;
    }
    
    function setProductName($prodcutName){
        $this->productName = $prodcutName;
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