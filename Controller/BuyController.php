<?php

require_once ('Model/Cart.php');
require_once ('Model/Product.php');
require_once ('Model/User.php');

class buyController {
	//購入処理
	function buy(){
		$user = new User($_SESSION['userNo']);
		//カート取得
		$carts = Cart::getCarts($user->getUserNo());
		//ユーザー情報取得
		if(!$user->getUserName()){//ログイン済み
			var_dump($carts);
		}
		//カート更新
		//購入処理結果通知
	}
	
	function confirmPurchas(){
		
	}
	
	
}