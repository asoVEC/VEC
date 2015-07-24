<?php

class Order extends BaseModel {

	private $orderNo;
	private $userNo;
	private $orderDate;
	private $use_point;
	private $aquiredPoint;
	private $address;
	private $details;

	function getUserNo() {
		return $this->userNo;
	}

	function getOrderDate() {
		return $this->orderDate;
	}

	function getUse_point() {
		return $this->use_point;
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

	function setUse_point($use_point) {
		$this->use_point = $use_point;
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
		$values = sprintf('null,%s,\'%s\',%s,%s,\'%s\'', $this->userNo, $this->orderDate, $this->use_point, $this->aquiredPoint, $this->address);
		$this->insert('`vec`.`order`', $values);
		$this->orderNo = mysql_insert_id(); //order表にオートインクリメントで作成したidを取得
		//order_detail表に作成
		foreach ($this->details as $value) {
			$values2 = sprintf('%s,%s,%s,%s', $this->orderNo, $value['productNo'], $value['price'], $value['number']);
		$this->insert('`order_detail`', $values2);
		}
	}

	function getHistory() {
		
	}
}
