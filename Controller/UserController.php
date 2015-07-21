<?php

require_once ('Model/Cart.php');
require_once ('Model/Product.php');
require_once ('Model/User.php');

class userController {

	private $userNo;

	public function __construct() {
		require_once('smarty/libs/Smarty.class.php');
		$this->userNo = $_SESSION['userNo'];

// ビュー
		$this->view = new Smarty;
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
		  'address' => $user->getAddress(),
		  'credit_no' => $user->getCredit(),
		  'password' => $user->getPassword()
		);


		$user->getMail();

		$this->view->assign('userinfo', $userinfo);
		$this->view->display('View/settings.tpl');
//                var_dump($query);
	}

	function akihiro() {
		$user = new User(1);
		Cart::akihiro($user);
	}

	//非同期通信用 $table, $key, $value, $where
	function settingspost() {
		if ($_REQUEST["value"]) {
			$type = $_REQUEST['type'];
			$value = $_REQUEST['value'];
			$name = $_SESSION['userNo'];
			$user = new User();
			$user->update('user', $type, $value, 'user_no=' . $name);
			echo $value;
		}
	}

	function cart() {
		$cart = Cart::getCarts($this->userNo);
		$item = array(
		  array(
			'imgPath' => 'url(/VEC/img/fdputitomato.jpg)',
			'productName' =>$cart[0]->getProduct()->getProductName(),
			'price' => $cart[0]->getProduct()->getPrice(),
			'number'=> $cart[0]->getNumber()
		  )
		);
		$this->view->assign('item', $item);
		$this->view->display('View/cart.tpl');
	}

	//カートに商品追加 
	//POST['productNo']とPOST['number']が必須。呼び出し元でセットして下さい
	function addCart() {
		$productNo = filter_input(INPUT_POST, 'productNo');
		$number = filter_input(INPUT_POST, 'number');
		if ($productNo !== null || $number !== null) {
			$this->addCartProcess($productNo, $number);
		}
	}

	private function addCartProcess($productNo, $number) {
		$cart = new Cart($this->userNo);
		$cart->setProduct(new Product($productNo));
		$cart->setNumber($number);
		$cart->add();
	}

}
