<?php
class homeController {
    
    private $view;    
    public function __construct()
    {
        require_once('smarty/libs/Smarty.class.php');
        // ビュー
        $this->view = new Smarty;
//        $this->view->template_dir = '../View';
    }
    function login(){
//        echo 'kimiya';
         $this->view->assign('abc', 'url(/VEC/img/fdjyagaimo.jpg)');
//
//        // テンプレート表示
      
        $this->view->display('View/base.tpl');
//        header('location :http://localhost:8888/VEC/View/base.php');
//        exit;//←忘れずに！
        //
//        http_redirect("http://localhost:8888/VEC/View/base.php");
        
        
        
    }
    function index(){
        echo 'きみや';   
    }
}

?>
