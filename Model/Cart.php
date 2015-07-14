<?php

require_once 'Product.php';

class Cart extends BaseModel {

	private $product;
	private $userNo;
	private $number;

//	private $addDate;

	function __construct($userNo) {
		parent::__construct();
		$this->userNo = $userNo;
	}

	function setProduct(Product $product) {
		$this->product = $product;
	}

	function setNumber($number) {
		$this->number = $number;
	}

	function add() {
		$flg;
		if ($_SESSION['userNo'] !== NULL) {//ログイン済み
			//DBに追加
			$values = sprintf('%s,%s,%s,null', $this->userNo, $this->product->getProductNo(), $this->number);
			$flg = $this->insert('cart', $values);
		} elseif ($_SESSION['userNo'] === NULL) {
			//SESSIONに追加
			echo 'ログインしていないのでsessionに追加します';
			$_SESSION = array(
			  "cart" => array(
				$this->userNo => array(
				  $this->product->getProductNo() => 3
				)
			  )
			);
		}
		return flg;
	}

	function modify() {
		
	}

	function delete() {
		
	}

	public static function updateOnLogin() {
		
	}

	public static function updateOnPurchase() {
		
	}

	public static function getCarts() {
		
	}

}
