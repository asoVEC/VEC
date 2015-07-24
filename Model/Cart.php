<?php

require_once 'Product.php';

class Cart extends BaseModel {

	private $product;
	private $userNo;
	private $quantity;

//	private $addDate;

	function __construct($userNo = NULL) {
		parent::__construct();
		$this->userNo = $userNo;
	}

	function setProduct(Product $product) {
		$this->product = $product;
	}

	function setQuantity($quantity) {
		$this->quantity = $quantity;
	}

	function getProduct() {
		return $this->product;
	}

	function getNumber() {
		return $this->quantity;
	}

	//カートに商品追加 戻:1 = 成功
	function add() {
		$flg = 0;
		if ($this->userNo !== NULL) {//ログイン済み
			//DBに追加
			$values = sprintf('%s,%s,%s,null', $this->userNo, $this->product->getProductNo(), $this->quantity);
			$flg = $this->insert('cart', $values);
		} else {//ログインしてない
			//SESSIONに追加
			$_SESSION = array(
			  "cart" => array(
				$this->product->getProductNo() => $this->quantity
			  )
			);
			$flg = 1;
		}
		return $flg;
	}

	function modify($quantity) {
		$this->quantity = $quantity;
		if ($this->userNo !== NULL) {//ログイン済み
			$this->update('cart', 'number', $this->quantity, sprintf('user_no = %s and product_no = %s', $this->userNo, $this->product->getProductNo()));
		} else {//ログインしてない
			echo sprintf('ログインしていないのでsessionを%sに更新します', $quantity);
			$_SESSION = array(
			  "cart" => array(
				$this->product->getProductNo() => $this->quantity
			  )
			);
		}
	}

	function delete() {
		if ($this->userNo !== NULL) {//ログイン済み
		} else {//ログインしてない
		}
	}

	public static function updateOnLogin() {
		
	}

	public static function updateOnPurchase() {
		
	}

	//指定したuserNoのカート一覧を取得
	//使い方例:echo Cart::getCarts(5)[0]->getProduct()->getProductName() ←NetBeansで補完でないけどProductクラスのメソッド使えます(ここでいうgetproductName())
	public static function getCarts($userNo) {
		$carts; //ユーザーのインスタンスの入れ物
		if ($userNo !== NULL) {//ログイン済み
			
			$baseModel = new BaseModel(); //staticメソッドのためBaseModelをインスタンス化して使う
			$rows = $baseModel->query('cart', sprintf('user_no = %s', $userNo));
			foreach ($rows as $value) {
				$cart = new Cart($userNo);
				$cart->rowsToInstance($value);
				$carts[] = $cart;
			}
		} else {//ログインしてない
			foreach ($_SESSION as $key => $value) {
				if ($key === 'cart') {
					foreach ($value as $key2 => $value2) {;
						$cart = new Cart();
						$cart->setProduct(new Product($value2));
						$cart->setNumber($value2);
						$carts[] = $cart;
					}
				}
			}
		}
		return $carts;
	}

	private function rowsToInstance($value) {
		$this->product = new Product($value['product_no']);
		$this->quantity = $value['number'];
	}

	function test() {
		if (!$this->userNo) {
			echo kimiya;
		}
	}

}
