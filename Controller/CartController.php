<?php
require_once ('Model/Product.php');
require_once ('smarty/libs/Smarty.class.php');

class homeController {

	private $view;

	public function __construct() {
		$this->view = new Smarty();
	}
}