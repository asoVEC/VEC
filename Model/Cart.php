<?php

require_once 'Product.php';

class Cart extends BaseModel {

	private $product;
	private $userNo;
	private $number;
	private $addDate;

	function __construct($userNo) {
		parent::__construct();
	}

	function add() {
		
	}

	function modify() {
		
	}

	function delete() {
		
	}

	function get() {
		
	}

	public static function updateOnLogin() {
		
	}

	public static function updateOnPurchase() {
		
	}

}
