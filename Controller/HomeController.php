<?php

require_once ('Model/User.php');
require_once ('smarty/libs/Smarty.class.php');

class homeController {

    private $view;

    public function __construct() {

        // ビュー
        $this->view = new Smarty;
    }

    function home() {
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
        $this->view->display('View/base.tpl');
    }

    function index() {
        $this->home();
    }

    
        function login($page = 0) { //←引数なしで呼ぶとデフォルト値:0が$pageに入るよ
        if ($page == 1){
            echo '1ページ目です';
            exit;
        } 
         if ($page == 2){
             echo '2ページ目です';
             exit;
        } 
         if ($page == 3){
             header('Location: http://google.com');
            exit;
        } 
//        echo 'きみや';
        $mail = $_POST[mail];
        $pass = $_POST[password];

        if ($_SESSION['userName'] != NULL) {//ログイン済み
            header('Location: /VEC/');
            exit;
        } elseif ($mail == NULL || $pass == null) {//初回アクセス
            $this->view->display('View/login.tpl');
        } else {
            //ログイン処理
            $loginFlg = $this->loginProcess($mail, $pass);
            switch ($loginFlg) {
                case 1: //ログイン成功
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

    function logout() {
        $_SESSION = array();
        session_destroy();
        header('Location: /VEC/');
        exit;
    }

    private function loginProcess($mail, $password) {
        //戻(loginFlg = 0:ログイン失敗、 = 1:成功)
        $loginFlg = 0;
        $user = new User();
        $loginFlg = $user->login($mail, $password);
        if ($loginFlg == 1) {
            $_SESSION['userNo'] = $user->getUserNo();
            $_SESSION['userName'] = $user->getUserName();
        }
        return $loginFlg;
    }

    function test2() {
        $this->view->display('View/test2.tpl');
    }

}