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
	function getProduct() {
		return $this->product;
	}

	function getNumber() {
		return $this->number;
	}

	function add() {
		$flg;
		if ($_SESSION['userNo'] !== NULL) {//ログイン済み
			//DBに追加
			$values = sprintf('%s,%s,%s,null', $this->userNo, $this->product->getProductNo(), $this->number);
			$flg = $this->insert('cart', $values);
		} elseif ($_SESSION['userNo'] === NULL) {//ログインしてない
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

	function modify($number) {
		$this->number = $number;
		if ($_SESSION['userNo'] !== NULL) {//ログイン済み
			$this->update('cart', 'number', $this->number, sprintf('user_no = %s and product_no = %s', $this->userNo, $this->product->getProductNo()));
		} elseif ($_SESSION['userNo'] === NULL) {//ログインしてない
			echo sprintf('ログインしていないのでsessionを%sに更新します', $number);
			$_SESSION = array(
			  "cart" => array(
				$this->userNo => array(
				  $this->product->getProductNo() => $this->number
				)
			  )
			);
		}
	}

	function delete() {
		if ($_SESSION['userNo'] !== NULL) {//ログイン済み
		} elseif ($_SESSION['userNo'] === NULL) {//ログインしてない
		}
	}

	public static function updateOnLogin() {
		
	}

	public static function updateOnPurchase() {
		
	}

	public static function getCarts($userNo) {
		if ($_SESSION['userNo'] !== NULL) {//ログイン済み
			$baseModel = new BaseModel(); //staticメソッドのためBaseModelをインスタンス化して使う
			$rows = $baseModel->query('cart', sprintf('user_no = %s', $userNo));
			$carts; //ユーザーのインスタンスの入れ物
			foreach ($rows as $value) {
				$cart = new Cart($userNo);
				$cart->rowsToInstance($value);
				$carts[] = $cart;
			}
			return $carts;
		} elseif ($_SESSION['userNo'] === NULL) {//ログインしてない
		}
	}

	private function rowsToInstance($value) {
		$this->product = new Product($value['product_no']);
		$this->number = $value['number'];
	}

}
