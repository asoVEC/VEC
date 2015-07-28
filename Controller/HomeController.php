<?php

require_once ('Model/User.php');
require_once ('Model/Cart.php');
require_once ('Model/Product.php');
require_once ('Model/Order.php');
	require_once ('Model/BaseModel.php');
require_once ('smarty/libs/Smarty.class.php');

class homeController {

	private $view;

	public function __construct() {
		$this->view = new Smarty();
		$this->required();
	}

	function index() {
		$products;
		$baseModel = new BaseModel();
		for ($i = 0; $i < 5; $i++) {
			$max = $baseModel->count('product') - 1; //プロダクト表の行数取得,productNoは0から始めるため補正
			$product = new Product(mt_rand(0, $max));
			$products[] = $product;
		}
		$this->view->assign('products', $products);
		$this->view->display('View/base.tpl');
	}

	function logout() {
		$_SESSION = array();
		session_destroy();
		header('Location: /VEC/');
		exit;
	}

	function test2() {
		$this->view->display('View/test2.tpl');
	}

	function akihiro() {
		//----------ログインにしていないユーザーがカートに商品を追加するテスト
		$cart = new Cart($_SESSION['userNo']);
		$cart->setProduct(new Product(99));
		$cart->setQuantity(51);
		$cart->add();
		//--------------------------------------------------------
		//		echo Cart::getCarts($_SESSION['userNo'])[0]->getProduct()->getProductName();
		//		echo Cart::getCarts($_SESSION['userNo'])[0]->getNumber();
		var_dump(Cart::getCarts($_SESSION['userNo']));
	}

	function akihiro2() {
//		--------------購入処理テスト
		$order = new Order();
		$order->setUserNo(5);
		$order->setAddress('いさはや');
		$order->setUsePoint(0);
		$order->setAcquiredPoint(0);
		$order->setOrderDate('2015-07-23');
		$details[] = array(
		  'productNo' => 4,
		  'price' => 300,
		  'number' => 3,
		);
		$details[] = array(
		  'productNo' => 18,
		  'price' => 400,
		  'number' => 17,
		);
		$order->setDetails($details);
		var_dump($order);
//		$order->add();
	}
function akihiro3() {
	$carts = Cart::getCarts(5);
	foreach ($carts as $value) {
			$productNo = (int)$value->getProduct()->getProductNo();
			$price = (int)$value->getProduct()->getPrice();
			$number = (int)$value->getQuantity();
			$details[] = array(
			  'productNo' => $productNo,
			  'price' => $price,
			  'number' => $number,
			);
//			$acquiredPoint += (int)floor($value->getProduct()->getPrice()/100);
		}
	$order = new Order();
		$order->setUserNo(5);
		$order->setAddress('いさはや');
		$order->setUsePoint(0);
		$order->setAcquiredPoint(0);
		$order->setOrderDate('2015-07-23');
		$order->setDetails($details);
		var_dump($order);
		$order->add();
}
	function akihiro4() {
		var_dump( Order::getHistory(5));
	}

	function nagano() {
		$this->view->display('View/details.tpl');
	}

	function test() {
		$this->view->display('View/test.tpl');
	}

	function required() {
		$product = new Product();
		$item = $product->getAll();
		$this->view->assign('item', $item);
		$item2 = $product->getDetails(19);
		$this->view->assign('item2', $item2);
	}

}
