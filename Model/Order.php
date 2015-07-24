<?php
require_once 'BaseModel.php';

class Order extends BaseModel {

	private $orderNo;
	private $userNo;
	private $orderDate;
	private $usePoint;
	private $aquiredPoint;
	private $address;
	private $details;

	function __construct() {
		parent::__construct();
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

	function getAquiredPoint() {
		return $this->aquiredPoint;
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

	function setAquiredPoint($aquiredPoint) {
		$this->aquiredPoint = $aquiredPoint;
	}

	function setAddress($address) {
		$this->address = $address;
	}

	function setDetails($details) {
		$this->details = $details;
	}

	function add() {
//order表に追加
		$values = sprintf('null,%s,\'%s\',%s,%s,\'%s\'', $this->userNo, $this->orderDate, $this->usePoint, $this->aquiredPoint, $this->address);
		$this->insert('`vec`.`order`', $values);
		$this->orderNo = mysql_insert_id(); //order表にオートインクリメントで作成したidを取得
//order_detail表に作成
		foreach ($this->details as $value) {
			$values2 = sprintf('%s,%s,%s,%s', $this->orderNo, $value['productNo'], $value['price'], $value['number']);
			$this->insert('`order_detail`', $values2);
		}
	}

	static function getHistory($userNo) {
		$rows = BaseModel::query('`vec`.`order`', sprintf('user_no = \'%s\'', $userNo));
		$orders = $this->rowsToInstances($rows);
		echo $orders[0]->getUserNo();
	}

	private function rowsToInstances($rows) {
		$orders;
		foreach ($rows as $value) {
			$order = new Order();
			$this->orderNo = $value['order_no'];
			$this->usePoint = $value['use_point'];
			$this->aquiredPoint = $value['aquired_point'];
			$this->address = $value['shipping_addres'];
			$orders[] = $order;
		}
		return $orders;
	}

}
