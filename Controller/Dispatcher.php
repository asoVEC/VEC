<?php
/*
*   date    :2015/06/08
*   time    :4:58
*   auther  :Akihiro
*   summary :リクエストの振り分けクラス (参考:http://goo.gl/gxBoz)
*/

class Dispatcher {

    private $sysRoot = 'localhost:8888/VEC';
    

    public function dispatch() {
                
        // パラメーター取得（末尾の / は削除）
        $param = ereg_replace('/?$', '', $_SERVER['REQUEST_URI']);
        echo 'はろー';
        echo $param;
        $params = array();
        if ('' != $param) {
            // パラメーターを / で分割
            $params = explode('/', $param);
        }
        echo $params[0];
//        // １番目のパラメーターをコントローラーとして取得
//        $controller = "index";
//        if (0 < count($params)) {
//            $controller = $params[0];
//        }
//        
//        // パラメータより取得したコントローラー名によりクラス振分け
//        $className = ucfirst(strtolower($controller)) . 'Controller';
//
//        // クラスファイル読込
//        require_once $this->sysRoot . '/Controller/' . $className . '.php';
//
//        // クラスインスタンス生成
//        $controllerInstance = new $className();
//        
//        // 2番目のパラメーターをコントローラーとして取得
//        $action = 'index';
//        if (1 < count($params)) {
//            $action = $params[1];
//        }
//
//        // アクションメソッドを実行
//        $actionMethod = $action;
//        $controllerInstance->$actionMethod();
    }

}

?>