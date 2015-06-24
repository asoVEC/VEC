<?php

class productController {

    private $view;

    public function __construct() {
        require_once('smarty/libs/Smarty.class.php');
        // ビュー
        $this->view = new Smarty;
//        $this->view->template_dir = '../View';
    }

    function searchlist() {

        
        
        
        
        $pageArray = array('row' => 1, 'max_page' => 3,'pager' => 4);
        
        $this->view->assign('SA',$pageArray);
        
        $this->view->display('View/search-list.tpl');
    }

}
