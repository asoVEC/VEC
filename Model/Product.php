<?php

require_once 'BaseModel.php';

class Prodct extends BaseModel {

    private $productNo;
    private $productName;

    function __construct() {
        parent::__construct();
    }

    function __destruct() {
        parent::__destruct();
    }

    function getProductName() {
        return $this->productName;
    }

    //商品検索
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
