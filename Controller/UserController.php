<?php

require_once ('Model/Cart.php');
require_once ('Model/Product.php');
require_once ('Model/User.php');
require_once ('Controller/HomeController.php');
require_once ('smarty/libs/Smarty.class.php');

class userController {

	private $userNo;

	public function __construct() {

		$this->userNo = $_SESSION['userNo'];

		// ビュー
		$this->view = new Smarty;
		$this->required();
		//        $this->view->template_dir = '../View';
	}

	function login() {
		$this->userNo = filter_input(INPUT_POST, 'userNo');
		$mail = $_POST[mail];
		$pass = $_POST[password];

		if ($_SESSION['userName'] != NULL) {//ログイン済み
			header('Location: /VEC/');
			exit;
		} elseif ($mail === NULL || $pass === NULL) {//初回アクセス
			$this->view->display('View/login.tpl');
		} else {
			//ログイン処理
			$loginFlg = $this->loginProcess($mail, $pass);
			switch ($loginFlg) {
				case 1://ログイン成功
					header('Location: /VEC/');
					exit;
					break;
				case 0://ログイン失敗
					$this->view->assign('login_message', 'きみやさんはログインお断りです');
					$this->view->display('View/login.tpl');
					break;
			}
		}
	}

	// 戻:成功=1, 失敗=0
	private function loginProcess($mail, $pass) {
		$loginFlg = 0;
		$user = new User();
		$user->setMail($mail);
		$user->setPassword($pass);
		$loginFlg = $user->login();
		if ($loginFlg == 1) {
			$_SESSION['userNo'] = $user->getUserNo();
			$_SESSION['userName'] = $user->getUserName();
		}
		return $loginFlg;
	}

	function logout() {
		$_SESSION = array();
		session_destroy();
		header('Location: /VEC/');
		exit;
	}

	function signup() {
		if ($this->userNo != NULL) {//ログイン済み
			header('Location: /VEC/');
			exit();
		} elseif ($this->userNo == null) {//初回アクセス
			$this->view->assign('message', 'アカウント作成に必要な情報を入力して下さい。');
			$this->view->display('View/signup.tpl');
		} elseif ($this->signupProcess() == 1) {//会員登録成功
			header('Location: /VEC/');
			exit();
		} else {//会員登録失敗
			$this->view->assign('message', '情報を正しく入力して下さい');
			$this->view->display('View/signup.tpl');
		}
	}

	private function signupProcess() {
		$flg = 0;
		$pass = filter_input(INPUT_POST, 'password');
		$con_pass = filter_input(INPUT_POST, 'con_password');
		$mail = filter_input(INPUT_POST, 'mail');
		$user = new User;
		$user->setUserName(filter_input(INPUT_POST, 'name'));
		$user->setMail($mail);
		$user->setPhone(filter_input(INPUT_POST, 'phone'));
		//入力された2つのパスワードが一致したらパスワードをセットしサインアップ
		if ($pass === $con_pass) {
			$user->setPassword($pass);
			$flg = $user->signUp();
			if ($flg === 1) {
				$this->loginProcess($mail, $pass);
			}
		}
		return $flg;
	}

	function settings() {
		$user = new User($_SESSION['userNo']);
		$userinfo = array('mail' => $user->getMail(),
		  'name' => $user->getUserName(),
		  'address' => '〒' . $user->getAddress1() . '  ' . $user->getAddress2() . $user->getAddress3(),
		  'credit_no' => $user->getCredit(),
		  'password' => $user->getPassword()
		);
		$user->getMail();

		$this->view->assign('userinfo', $userinfo);
		$this->view->display('View/settings.tpl');
		//                var_dump($query);
	}

	//非同期通信用 $table, $key, $value, $where
	function settingspost() {
		if ($_REQUEST["value"]) {
			$type = $_REQUEST['type'];
			$value = $_REQUEST['value'];
			$userNo = $_SESSION['userNo'];
			User::update('user', $type, $value, 'user_no=' . $userNo);
			echo $value;
		}
	}

	function cart() {
		$cart = Cart::getCarts($this->userNo);
		$total;
		foreach ($cart as $value) {
			$item[] = array(
			  'product_no' =>$value->getProduct()->getProductNo(),
			  'image' => $value->getProduct()->getImage(),
			  'productName' => $value->getProduct()->getProductName(),
			  'price' => $value->getProduct()->getPrice(),
			  'number' => $value->getQuantity()
			);
			$total += $value->getProduct()->getPrice() * $value->getQuantity();
		}
		
		$this->view->assign('total', $total);
		$this->view->assign('item', $item);
		$this->view->display('View/cart.tpl');
//		var_dump($item);
	}

	//カートに商品追加
	//POST['productNo']とPOST['number']が必須。呼び出し元でセットして下さい
	function addCart() {
		$flg = 0;
		$productNo = filter_input(INPUT_POST, 'productNo');
		$quantity = filter_input(INPUT_POST, 'quantity');
		if ($productNo !== null || $quantity !== null) {
			$flg = $this->addCartProcess($productNo, $quantity);
		}
		if ($flg == 1) {
			header('Location: /VEC/user/cart');
			exit;
		}
		else{//カートに同商品がある場合、他の原因についてはとりあえず考えない
			$cart = new Cart($this->userNo);
			$cart->setProduct(new Product($productNo));
			$totalQuantity = $cart->getQuantity() + $quantity;
			$cart->modify($totalQuantity);
			header('Location: /VEC/user/cart');
			exit;
		}
			
	}

	private function addCartProcess($productNo, $quantity) {
		$cart = new Cart($this->userNo);
		$product = new Product($productNo);
		$cart->setProduct($product);
		$cart->setQuantity($quantity);
		$flg = $cart->add();
		return $flg;
	}

	function history() {//購入履歴表示
		$this->view->display('View/history.tpl');
	}

	function required() {
		$product = new Product();
		$item = $product->getAll();
		$this->view->assign('item', $item);
		$item2 = $product->getDetails(19);
		$this->view->assign('item2', $item2);
	}

	function point() {
		$user = new User($_SESSION['userNo']);
		$this->view->assign('point', $user->getPoint());
		$this->view->display('View/point.tpl');
	}
	function info() {
		$this->view->display('View/buy-infomation.tpl');
	}

}