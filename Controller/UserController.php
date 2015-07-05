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

    function setting() {
        $this->view->display('View/user-settings.tpl');
    }

    function login() {
        $mail = $_POST[mail];
        $pass = $_POST[password];

        if ($_SESSION['userName'] != NULL) {//ログイン済み
            header('Location: /VEC/');
            exit;
        } elseif ($mail == NULL || $pass == null) {//初回アクセス
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
        $mail = $_POST[mail];
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
            $this->view->display('View/signup.tpl');
        } elseif ($this->signupProcess() == 0) {//会員登録失敗
            $this->view->display('View/signup.tpl');
        } elseif ($this->signupProcess() == 1) {//会員登録成功
            header('Location: /VEC/');
            exit();
        }
    }

    private function signupProcess() {
        

        return 0;
    }

    function settings() {
        $this->view->display('View/settings.tpl');
    }

}
