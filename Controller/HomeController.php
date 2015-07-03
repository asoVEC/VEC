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

    function nagano() {
        $this->view->display('View/details.tpl');
    }

}
