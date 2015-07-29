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
                
		if($_POST['purchased'] != NULL){
			$purchased = $_POST['purchased'];
		}
		$this->view->assign('products', $products);
		$this->view->assign('purchased', $purchased);
		$this->view->display('View/base.tpl');
                var_dump($_POST['purchased']);
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

	function akihiro() {
		$base = new BaseModel();
		$where = sprintf('user_no = %s and product_no = %s',5,18);
		$base->delete(cart, $where);
	}

	function required() {
		$product = new Product();
		$item = $product->getAll();
		$this->view->assign('item', $item);
		$carts = Cart::getCarts($_SESSION['userNo']);
		$amount_cart = count($carts);
		$this->view->assign('amount_cart', $amount_cart);
		$this->view->assign('carts', $carts);
	}

}
