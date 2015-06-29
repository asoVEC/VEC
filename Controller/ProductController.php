<?php

class productController {

    private $view;

    public function __construct() {
        require_once('smarty/libs/Smarty.class.php');
        // ビュー
        $this->view = new Smarty;
//        $this->view->template_dir = '../View';
    }

    function searchlist($page = 1) {
        
        if($page ==1){
            $current = $page;
            $_POST[page] = 1;
        }else{
            $current = $page;
            $_POST[page] = $page;
        }        
        //適当にレコードを作る（テストだからなんでもよい）
        $i = 1;
        while ($i <= 200) {
            $mojiretu .= $i . ' '; //数字に半角スペースをつけて繰り返して文字列を作成している
            $i++;
        }
        $mojiretu = trim($mojiretu); //最後についた半角スペース除去
        $kakunou = explode(' ', $mojiretu); //半角スペースで区切って$kakunouに１個づつ格納した
//配列に格納したものに個目のレコードとつけるユーザー関数を作成

        function kome($str) {
            return 'PHPでページング処理　' . $str . '個目のデータ';
        }

        $hairetu = array_map("kome", $kakunou);
//↑先ほど作成したユーザー関数をarray_map()関数で配列全体に処理を施す
        $cnt = count($hairetu); //レコード数をカウントしておきます
//テスト用、適当レコード作成ここまでÏ
        $display_quanity = 10;
        $start = 0 + $current*10 -10;
        $max_page = ceil($cnt / $display_quanity);
        $naiyou = array_slice($hairetu,$start,$display_quanity);//表示する数と内容
        
        console.log($display_quanity);  
        $array = array('cnt' => $cnt,
            'current_page' => $current,
            'start' => $start,
            'display_quanity' => $display_quanity,
            'max_page' => $max_page,//ceilは切り上げ（$max_pageは表示最大ページ数）
            'deta' => $naiyou
        );
        $this->view->assign('array', $array);

        $this->view->display('View/search-list.tpl');
    }

}
