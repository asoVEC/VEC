<?php
require_once ('smarty/libs/Smarty.class.php');
require_once 'Model/User.php';
class homeController {
    
    private $view;    
    public function __construct(){
        
//        require_once 'post.php';
        // ビュー
        $this->view = new Smarty;
//        $this->view->template_dir = '../View';
    }
    function home(){
//        echo 'kimiya';

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
         $value = $_POST["value"];
         $this->view->assign('name1', $value);
         
//         $request = new post();
//         $post = $request.get();
//
//        // テンプレート表示
      
        $this->view->display('View/base.tpl');  
    }
    function index(){
        $this->view->assign('amount_cart', '9');
        $this->view->assign('food1', 'url(/VEC/img/kimiya.jpg)');
        $this->view->assign('food2', 'url(/VEC/img/fdputitomato.jpg)');
        $this->view->assign('food3', 'url(/VEC/img/fdpapurika.jpg)');
        $this->view->assign('food4', 'url(/VEC/img/fd_kabotya.jpg)');
        $this->view->assign('food5', 'url(/VEC/img/fd_ninjin.jpg)');
        $this->view->assign('name1', '格安きみや');
        $this->view->assign('name2', '激安きみや');
        $this->view->assign('name3', '割高きみや');
        $this->view->assign('name4', '円安きみや');        
//        $kimiya = new User();
//        $name = $kimiya->getUser()['address'];
//        $this->view->assign('name5', $name);
        $this->view->display('View/base.tpl');        
    }
    function login(){
//        echo 'きみや';
        
//      //ログイン済み
        if($_SESSION['userName'] == NULL){
            $this->home();
        }
        else{
        //ログイン処理
        $loginFlg = $this->loginProcess();
        if($loginFlg == 1){
        //ログイン成功 
            $this->home();
        }elseif ($loginFlg == 0) {
        //ログイン失敗
            $this->view->assign('login_message', 'ユーザーネームまたはパスワードが公也です');
            $this->view->display('View/login.tpl');            
        }
    }
            
        
              
    }
    
    private function loginProcess(){
        //戻(loginFlg = 0:ログイン失敗、 = 1:成功)
        $loginFlg = 0;
        $user = new User();
        
        
        return $loginFlg;
    }
    
    function test2(){
        $this->view->display('View/test2.tpl'); 
    }
    
    
}

?>
