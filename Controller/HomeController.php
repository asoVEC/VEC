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
