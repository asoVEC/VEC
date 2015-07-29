<?php

require_once ('Model/Cart.php');
require_once ('Model/Order.php');
require_once ('Model/Product.php');
require_once ('Model/User.php');
require_once ('Controller/HomeController.php');

class buyController {

	private $view;

	public function __construct() {
		$this->view = new Smarty();
	}

//購入処理
	function buy() {
//購入処理を3ステップに分ける 
//ステップ1:ユーザー情報入力画面出力、ログイン済みの場合フィールドをセット 		
//ユーザー情報取得
		$user = new User($_SESSION['userNo']);
		$this->view->assign('name', $user->getUserName());
		$this->view->assign('address1', $user->getAddress1());
		$this->view->assign('address2', $user->getAddress2());
		$this->view->assign('address3', $user->getAddress3());
//カート取得
//カート更新
//購入処理結果通知
	}

	function selectAddress() {//購入ステップ2
	}

	function confirmPurchas() {
		
	}

	function info() {
		$user = new User($_SESSION['userNo']);
		$this->view->assign('user', $user);
		$this->view->display('View/buy-infomation.tpl');
	}

	function conf() {
            echo $_POST['name'];
		$this->view->assign('name', $_POST['name']);
		$this->view->assign('address', $_POST['address1'].$_POST['address2'].$_POST['address3']);
		$this->view->assign('usePoint', $_POST['usePoint']);
		$this->view->assign('usePoint', $_POST['phone']);
		$carts = Cart::getCarts(5);
		foreach ($carts as $value) {
			$total += $value->getProduct()->getPrice() * $value->getQuantity();
		}
		$this->view->assign('total', $total);
		$this->view->assign('carts', $carts);
		$this->view->display('View/buy-confirmation.tpl');
	}

	function process() {
//ログインしてる
		if ($_SESSION['userNo'] != null){
		$carts = Cart::getCarts($_SESSION['userNo']);
		foreach ($carts as $value) {
			$productNo = (int) $value->getProduct()->getProductNo();
			$price = (int) $value->getProduct()->getPrice();
			$number = (int) $value->getQuantity();
			$details[] = array(
			  'productNo' => $productNo,
			  'price' => $price,
			  'number' => $number,
			);
			$acquiredPoint += (int) floor($value->getProduct()->getPrice() / 100);
		}
		$order = new Order();
		$order->setUserNo($_SESSION['userNo']);
		$order->setAddress($_POST['address1'].$_POST['address2'].$_POST['address3']);
		$order->setUsePoint($_POST['usePoint']);
		$order->setAcquiredPoint($acquiredPoint);
		$order->setOrderDate(gmdate("Y-m-d ", time()));
		$order->setDetails($details);
		$order->add();
		}
		//カートをからに
		$carts = Cart::getCarts($_SESSION['userNo']);
		foreach ($carts as $item){
			$item->deleteCart();
		}
		
		$_POST['purchased'] = '購入処理が完了しました';
//                die($_POST['purchased']);
                $home = new homeController();
                $home->index();
//		header('Location: /VEC/');
		exit;
	}
	
}
