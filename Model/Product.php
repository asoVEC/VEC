<?php

require_once 'BaseModel.php';

class Product extends BaseModel {

	private $productNo;
	private $productName;
	private $price;
	private $imagePath;
	private $explanation; //説明

	function __construct($id = 0) {
		parent::__construct();
		if ($id != 0) {
			$value = $this->query('product', 'product_no = ' . $id)[0];
			$this->rowsToInstance($value);
		}
	}

	function __destruct() {
		parent::__destruct();
	}

	function getProductNo() {
		return $this->productNo;
	}

	function getProductName() {
		return $this->productName;
	}

	function getPrice() {
		return $this->price;
	}

	function getExplanation() {
		return $this->explanation;
	}
	function getImagePath() {
		return $this->imagePath;
	}

	function setProductName($prodcutName) {
		$this->productName = $prodcutName;
	}

	//商品検索
	function searchProduct($searchName) {
		$where = 'product_name LIKE' . '\'%' . $searchName . '%\'';
		$rows = parent::query(product, $where);
		if ($rows != NULL) {
			return $rows;
		} else {
                    die("失敗");
		}
	}
        
        function decisionProduct($searchName){
            $where = 'product_name LIKE' . '\'%' . $searchName . '%\'';
		$rows = parent::query(product, $where);
		if ($rows != NULL) {
			return TRUE;
		} else {
                        return FALSE;
		}
            
        }

	//カテゴリ別一覧
	function byCategory($categoryNo) {
		$where = 'category_no=' . '\'' . $categoryNo . '\'';
		$rows = $this->query('product', $where);
		if ($rows != NULL) {
			return $rows;
		} else {
			die("指定されたカテゴリには商品は存在しません。");
		}
	}

	//商品詳細取得
	function getDetails($id) {
		$where = 'product_no=' . '\'' . $id . '\'';
		$rows = parent::query('product', $where);
		if ($rows != NULL) {
			return $rows[0];
		} else {
			die("指定されたカテゴリには商品は存在しません。");
		}
	}

	function getAll() {
		$rows = parent::query('product');
		//かきかえる
		//配列用意
		$items = [];
		foreach ($rows as $value) {
			array_push($items, $value['product_name']);
		}

		return $items;
	}

	//--------------Akihiro------------------
	public static function getProducts($where = NULL) {
		$baseModel = new BaseModel(); //staticメソッドのためBaseModelをインスタンス化して使う
		$rows = $baseModel->query('product', $where);
		$products = array(); //プロダクトインスタンスの入れ物

		foreach ($rows as $value) {
			$product = new Product;
			$product->rowsToInstance($value);
			$products[] = $product;
		}
		return $products;
	}

	private function rowsToInstance($value) {
		$this->productNo = $value['product_no'];
		$this->productName = $value['product_name'];
		$this->explanation = $value['product_detail'];
		$this->price = $value['price'];
		$this->imagePath = $value['image'];
	}

}
