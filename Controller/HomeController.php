<?php

require_once ('Model/User.php');
require_once ('Model/Product.php');
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
		$item    = $product->getAll();
		$this->view->assign('item', $item);
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
		$user = new User;
		$user->setUserName('かっこいいきみや');
		$user->setPassword(kimikimikimiya);
		$user->setMail('111@gmail.com');
		$user->setAge(20);
		$user->setAddress('ながさき');
		$user->setGender(1);
		$user->setCredit('1234567234');
		echo $user->signUp($values);
	}

	function akihiro2() {

	}

	function nagano() {
		$this->view->display('View/details.tpl');
	}

	function test() {
		$this->view->display('View/test.tpl');
	}

}
