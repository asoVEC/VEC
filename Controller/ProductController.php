<?php

class productController {

    public function __construct() {
        require_once('smarty/libs/Smarty.class.php');
        // ビュー
        $this->view = new Smarty;
//        $this->view->template_dir = '../View';
    }

    function searchlist() {

        $this->view->display('View/search-list.tpl');
    }

}
