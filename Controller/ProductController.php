<?php

require_once ('Model/Product.php');
require_once('smarty/libs/Smarty.class.php');

class productController {

	private $view;

	public function __construct() {
		// ビュー
		$this->view = new Smarty;
//        $this->view->template_dir = '../View';
	}

	function meetList($page = 1) {
		$this->productList(2, $page, 'meetlist');
	}

	function fishList($page = 1) {
		$this->productList(3, $page, 'fishlist');
	}

	function vegeList($page = 1) {
		$this->productList(4, $page, 'vegelist');
	}

	function fruitsList($page = 1) {
		$this->productList(5, $page, 'fruitslist');
	}

	function cerealList($page = 1) {
		$this->productList(6, $page, 'cereallist');
	}

	function spicesList($page = 1) {
		$this->productList(7, $page, 'spiceslist');
	}

	function processingList($page = 1) {
		$this->productList(8, $page, 'processinglist');
	}

	function pastryList($page = 1) {
		$this->productList(8, $page, 'pastrylist');
	}

	function productList($category, $page, $name) {
		if ($page == 1) {
			$current = $page;
			$_POST[page] = 1;
		} else {
			$current = $page;
			$_POST[page] = $page;
		}
		$product = new Product();
		$productName = $product->byCategory($category);
//        $cnt = count($hairetu); //レコード数をカウントしておきます
		$cnt = count($productName);
//テスト用、適当レコード作成ここまでÏ
		$display_quanity = 9;
		$start = 0 + $current * 9 - 9;
		$max_page = ceil($cnt / $display_quanity);
		$naiyou = array_slice($productName, $start, $display_quanity); //表示する数と内容

		$array = array('cnt' => $cnt,
		  'current_page' => $current,
		  'start' => $start,
		  'display_quanity' => $display_quanity,
		  'max_page' => $max_page, //ceilは切り上げ（$max_pageは表示最大ページ数）
		  'deta' => $naiyou,
		  'name' => $name
		);
		$this->view->assign('array', $array);
		$item = $product->getAll();
		$this->view->assign('item', $item);

		$this->view->display('View/search-list.tpl');
	}

	function searchlist($page = 1) {
		if ($page == 1) {
			$current = $page;
			$_POST[page] = 1;
		} else {
			$current = $page;
			$_POST[page] = $page;
		}
		$product = new Product();
		$productName = $product->searchProduct($_POST[search]);

		$cnt = count($productName); //レコード数をカウントしておきます

		$display_quanity = 10;
		$start = 0 + $current * 10 - 10;
		$max_page = ceil($cnt / $display_quanity);
		$naiyou = array_slice($productName, $start, $display_quanity); //表示する数と内容

		$array = array('cnt' => $cnt,
		  'current_page' => $current,
		  'start' => $start,
		  'display_quanity' => $display_quanity,
		  'max_page' => $max_page, //ceilは切り上げ（$max_pageは表示最大ページ数）
		  'deta' => $naiyou,
		  'test' => $productName,
		  'name' => 'searchlist'
		);
		$this->view->assign('array', $array);

		$this->view->display('View/search-list.tpl');
	}

	function productDetails($id = null) {
		$product = new Product();
		$item = $product->getDetails($id);

                $item['image']='fd_buta.jpg';
		$this->view->assign('item', $item);
		$this->view->display('View/details.tpl');
	}

}
