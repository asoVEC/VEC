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
	}

	function index() {
		$this->view->assign('food1', 'url(/VEC/img/kimiya.jpg)');
		$this->view->assign('food2', 'url(/VEC/img/fdputitomato.jpg)');
		$this->view->assign('food3', 'url(/VEC/img/fdpapurika.jpg)');
		$this->view->assign('food4', 'url(/VEC/img/fd_kabotya.jpg)');
		$this->view->assign('food5', 'url(/VEC/img/fd_ninjin.jpg)');
		$this->view->assign('name1', '格安きみや');
		$this->view->assign('name2', '激安きみや');
		$this->view->assign('name3', '割高きみや');
		$this->view->assign('name4', '円安きみや');
		$this->view->assign('name5', '円高きみや');
		$this->view->assign('name1', 'ちょっと高いきみや');
		$product = new Product();
		$item = $product->getAll();
		$this->view->assign('item', $item);
		$item2 = $product->getDetails(19);
		$this->view->assign('item2', $item2);
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
		$cart->setNumber(51);
		$cart->add();
		//--------------------------------------------------------
//		echo Cart::getCarts($_SESSION['userNo'])[0]->getProduct()->getProductName();
//		echo Cart::getCarts($_SESSION['userNo'])[0]->getNumber();
		var_dump(Cart::getCarts($_SESSION['userNo']));
	}
	function akihiro2(){
		$order = new Order();
		$order->setUserNo(5);
		$order->setAddress('いさはや');
		$order->setUse_point(0);
		$order->setAquiredPoint(0);
		$order->setOrderDate('2015-07-23');
		$details[] = array(
		  'productNo'=>1,
		  'price' => 300,
		  'number'=> 3
		);
		$details[] = array(
		  'productNo'=>5,
		  'price' => 400,
		  'number'=> 67
		);
		
		$order->setDetails($details);
		$order->add();
		
	}
			function nagano() {
		$this->view->display('View/details.tpl');
	}

	function test() {
		$this->view->display('View/test.tpl');
	}

}
