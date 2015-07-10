<?php

class userController {

    public function __construct() {
        require_once('smarty/libs/Smarty.class.php');
        require_once ('Model/User.php');
//        require_once 'post.php';
        // ビュー
        $this->view = new Smarty;
//        $this->view->template_dir = '../View';
    }


    function login() {
        $mail = $_POST[mail];
        $pass = $_POST[password];

        if ($_SESSION['userName'] != NULL) {//ログイン済み
            header('Location: /VEC/');
            exit;
        } elseif ($mail === NULL || $pass === NULL) {//初回アクセス
            $this->view->display('View/login.tpl');
        } else {
            //ログイン処理
            $loginFlg = $this->loginProcess();
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
    private function loginProcess() {
        $mail = filter_input(INPUT_POST, 'mail'); //怒られるからフィルター関数使ってみたよ
        $pass = $_POST[password];
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
        $name = $_POST['name'];
        if ($_SESSION['userName'] != NULL) {//ログイン済み
            header('Location: /VEC/');
            exit();
        } elseif ($name == null) {//初回アクセス
            $this->view->assign('message', 'アカウント作成に必要な情報を入力して下さい。');
            $this->view->display('View/signup.tpl');
        } elseif ($this->signupProcess() == 0) {//会員登録失敗
            $this->view->assign('message', '情報を正しく入力して下さい');
            $this->view->display('View/signup.tpl');
        } elseif ($this->signupProcess() == 1) {//会員登録成功
            header('Location: /VEC/');
            exit();
        }
    }

    private function signupProcess() {
        $flg = 0;
		$user = new User;
        $user->setUserName(filter_input(INPUT_POST, 'name'));
        $user->setMail(filter_input(INPUT_POST, 'mail'));
        $user->set = filter_input(INPUT_POST, 'phone');
		$password = filter_input(INPUT_POST, 'password');
		$con_password = filter_input(INPUT_POST, 'con_password');
		
        

        return $flg;
    }

    function settings() {
        $test = $_POST[name];
        $this->view->assign('test',$test);
        
        $this->view->display('View/settings.tpl');
    }

}
