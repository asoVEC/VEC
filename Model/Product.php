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
    function searchProduct($searchName){
        $where = 'product_name LIKE' .'\'%'.$searchName .'%\'';
        $rows = parent::query(product, $where);
        if ($rows!= NULL){
//            $this->listSize =
            return $rows;
        }else{
            die("指定された商品は存在しません。");
        }
        
    }
    
    //カテゴリ別一覧
    function byCategory($category){
        $where = 'category_no='.'\''.$category.'\'';
        $rows = parent::query('product', $where);
        if ($rows!= NULL){
            return $rows;
        }else{
            die("指定されたカテゴリには商品は存在しません。");
        }
    }
}