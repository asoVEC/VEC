<?php
class homeController {
    
    private $view;    
    public function __construct()
    {
        require_once('smarty/libs/Smarty.class.php');
        require_once 'post.php';
        // ビュー
        $this->view = new Smarty;
//        $this->view->template_dir = '../View';
    }
    function login(){
//        echo 'kimiya';
         $request = new post();
         $post = $request.get();
         
         $this->view->assign('abc', 'url(/VEC/img/kimiya.jpg)');
         $this->view->assign('abcd', 'url(/VEC/img/kimiya.jpg)');
         $this->view->assign('name', '格安きみや');
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
