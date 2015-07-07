<?php

require_once ('smarty/libs/Smarty.class.php');
/*
 *   date    :2015/06/08
 *   time    :4:58
 *   auther  :Akihiro
 *   summary :リクエストの振り分けクラス (参考:http://goo.gl/gxBoz)
 */

class Dispatcher {

  private $view;

  public function dispatch() {

	// パラメーター取得（末尾の / は削除）
	$param = ereg_replace('/?$', '', $_SERVER['REQUEST_URI']);
	$params = array();
	if ('' != $param) {
	  // パラメーターを / で分割
	  $params = explode('/', $param);
	}

	// １番目のパラメーターをコントローラーとして取得
	$controller = "home";
	if (2 < count($params)) {
	  $controller = $params[2];
	}
	// パラメータより取得したコントローラー名によりクラス振分け
	$className = ucfirst(strtolower($controller)) . 'Controller';
	// クラスファイル読込
	require_once $className . '.php';
	// クラスインスタンス生成
	$controllerInstance = new $className();

	// 2番目のパラメーターをメソッド名として取得
	$action = 'index';
	if (3 < count($params)) {
	  $action = $params[3];
	}
	//3番目のパラメータが存在する場合取得,メソッドの引数として渡す
	$page = 0;
	if (4 < count($params)) {
	  $page = $params[4];
	  // アクションメソッドを実行
	}
	$controllerInstance->$action($page);
  }

}
