<?php 
class productController {
        public function __construct()
    {
        require_once('smarty/libs/Smarty.class.php');
        // ビュー
        $this->view = new Smarty;
//        $this->view->template_dir = '../View';
    }
        function searchlist(){
//        echo 'kimiya';
//         $this->view->assign('abc', 'url(/VEC/img/kimiya.jpg)');
//         $this->view->assign('name', '格安きみや');
//        // テンプレート表示
      
        $this->view->display('View/search-product-list.tpl');
//        header('location :http://localhost:8888/VEC/View/base.php');
//        exit;//←忘れずに！
        //
//        http_redirect("http://localhost:8888/VEC/View/base.php");  
    }
    }
