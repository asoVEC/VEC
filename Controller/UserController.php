<?php
class userController {
    
    public function __construct()
    {
        require_once('smarty/libs/Smarty.class.php');
//        require_once 'post.php';
        // ビュー
        $this->view = new Smarty;
//        $this->view->template_dir = '../View';
    }
    
    
    function setting(){
        $this->view->display('View/user-settings.tpl'); 
    }
    function signup(){
        $this->view->display('View/signup.tpl'); 
    }
    
    function settings(){
           $this->view->display('View/settings.tpl'); 
    }
    
}
