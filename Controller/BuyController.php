<?php

require_once ('Model/Cart.php');
require_once ('Model/Product.php');
require_once ('Model/User.php');


class buyController {
	private $view;

	public function __construct() {
		$this->view = new Smarty();
	}
	
	//購入処理
	function buy(){
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
	
	
	function selectAddress(){//購入ステップ2
		
	}
	function confirmPurchas(){
		
	}
	function info() {
		$this->view->display('View/buy-infomation.tpl');
	}
	
	
	
}