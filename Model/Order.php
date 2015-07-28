<?php

require_once 'BaseModel.php';

class Order extends BaseModel {

	private $orderNo;
	private $userNo;
	private $orderDate;
	private $usePoint;
	private $acquiredPoint;
	private $address;
	private $details;

	function __construct() {
		parent::__construct();
	}

	function getOrderNo() {
		return $this->orderNo;
	}

	function setOrderNo($orderNo) {
		$this->orderNo = $orderNo;
	}

	function getUserNo() {
		return $this->userNo;
	}

	function getOrderDate() {
		return $this->orderDate;
	}

	function getUsePoint() {
		return $this->usePoint;
	}

	function getAcquiredPoint() {
		return $this->acquiredPoint;
	}

	function getAddress() {
		return $this->address;
	}

	function getDetails() {
		return $this->details;
	}

	function setUserNo($userNo) {
		$this->userNo = $userNo;
	}

	function setOrderDate($orderDate) {
		$this->orderDate = $orderDate;
	}

	function setUsePoint($use_point) {
		$this->usePoint = $use_point;
	}

	function setAcquiredPoint($acquiredPoint) {
		$this->acquiredPoint = $acquiredPoint;
	}

	function setAddress($address) {
		$this->address = $address;
	}

	function setDetails($details) {
		$this->details = $details;
	}

	function add() {
//order表に追加
		echo 'order表に追加するよ';
		$values = sprintf('null,%s,\'%s\',%s,%s,\'%s\'', $this->userNo, $this->orderDate, $this->usePoint, $this->acquiredPoint, $this->address);
		$this->insert('`vec`.`order`', $values);
		$this->orderNo = mysql_insert_id(); //order表にオートインクリメントで作成したidを取得
//order_detail表に作成
		foreach ($this->details as $value) {
			echo order_detail表に追加するよ;
			$values2 = sprintf('%s,%s,%s,%s', $this->orderNo, $value['productNo'], $value['price'], $value['number']);
			$this->insert('`order_detail`', $values2);
		}
//user表のポイント更新
		$user = new User($this->userNo);
		$point = $user->getPoint() - $this->usePoint + $this->acquiredPoint;
		$this->update('user', 'point', $point, sprintf('user_no = \'%s\'', $this->userNo));
	}

	static function getHistory($userNo) {
		$orders;
		if ($userNo === null) {
			return;
		}
		$baseModel = new BaseModel();
		$rows = $baseModel->query('`order`', sprintf('user_no = %s', $userNo));
		foreach ($rows as $value) {
			$order = new Order();
			$order->rowsToInstances($value);
			$baseModel = NULL;
			$baseModel = new BaseModel();
			$rows2 = $baseModel->query('`vec`.`order_detail`', sprintf('order_no = %s', $order->getOrderNo()));
			$details = null;
			foreach ($rows2 as $value2) {
				$product = new Product($value2['product_no']);
				$details[] = array(
				  'productNo' => $value2['product_no'],
				  'productName' => $product->getProductName(),
				  'image' => $product->getImage(),
				  'price' => $value2['price'],
				  'number' => $value2['number'],
				);
			}
			$order->setDetails($details);
			$orders[] = $order;
		}
		return $orders;
	}

	private function rowsToInstances($row) {
		$order = new Order();
		$this->orderNo = $row['order_no'];
		$this->userNo = $row['user_no'];
		$this->usePoint = $row['use_point'];
		$this->acquiredPoint = $row['acquired_point'];
		$this->orderDate = $row['order_date'];
		$this->address = $row['shipping_addres'];
		return $order;
	}

}
