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
<<<<<<< HEAD
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
=======
         $request = new post();
         $post = $request.get();
         
         $this->view->assign('abc', 'url(/VEC/img/kimiya.jpg)');
         $this->view->assign('abcd', 'url(/VEC/img/kimiya.jpg)');
         $this->view->assign('name', '格安きみや');
>>>>>>> origin/master
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
