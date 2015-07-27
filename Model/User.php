<?php

require_once 'BaseModel.php';

class User extends BaseModel {

	private $userNo = null;
	private $userName = null;
	private $password = null;
	private $mail = null;
	private $age = null;
	private $gender = 0;
	private $address1 = null;
	private $address2 = null;
	private $address3 = null;
	private $phone = null;
	private $point = 0;
	private $credit = null;
	private $money = null;

	//引:userNo インスタンス化時にユーザーNo指定でユーザー情報をDBから取得、フィールドにセット
	function __construct($id = 0) {
		parent::__construct();
		if ($id != 0) {
			$value = $this->query('user', 'user_no = ' . $id)[0];
			$this->rowsToInstance($value);
		}
	}

	function setUserName($param) {
		$this->userName = $param;
	}

	function setMail($param) {
		$this->mail = $param;
	}

	function setPhone($param) {
		$this->phone = $param;
	}

	function setPassword($param) {
		$this->password = $param;
	}

	function setAge($param) {
		$this->age = $param;
	}

	function setGender($param) {
		$this->gender = $param;
	}

	function setAddress1($param) {
		$this->address1 = $param;
	}
	function getAddress2() {
		return $this->address2;
	}

	function getAddress3() {
		return $this->address3;
	}

	function setAddress2($address2) {
		$this->address2 = $address2;
	}

	function setAddress3($address3) {
		$this->address3 = $address3;
	}

	
	function setCredit($param) {
		$this->credit = $param;
	}

	function getUserName() {
		return $this->userName;
	}

	function getUserNo() {
		return $this->userNo;
	}

	function getMail() {
		return $this->mail;
	}

	function getAddress1() {
		return $this->address1;
	}

	function getPhone() {
		return $this->phone;
	}
	function getPassword() {
		return $this->password;
	}

	function getGender() {
		return $this->gender;
	}

	function getAge() {
		return $this->age;
	}

	function getCredit() {
		return $this->credit;
	}

	function getMoney() {
		return $this->money;
	}

	function getPoint() {
		return $this->point;
	}

	//DBからユーザーを取得 引:検索条件(引数無しで全ユーザー取得) 戻:User配列
	//使い方例:getUser()[0]->getUserName,getUser('name = \'きみや\'')[1]->getAddress();
	public static function getUsers($where = NULL) {
		$baseModel = new BaseModel(); //staticメソッドのためBaseModelをインスタンス化して使う
		$rows = $baseModel->query('user', $where);
		$users; //ユーザーのインスタンスの入れ物
		foreach ($rows as $value) {
			$user = new User;
			$user->rowsToInstance($value);
			$users[] = $user;
		}
		return $users;
	}

	//ログイン処理 戻:成功=1, 失敗=0
	function login() {
		//フィールドチェック
		if ($this->mail == NULL || $this->password == NULL) {
			return 0;
		}
		$where = 'mail_address = ' . '\'' . $this->mail . '\''; //←検索条件のとこ''忘れないようにね!
		$row = $this->query('user', $where)[0];
		if ($row['password'] === $this->password) {//←==比較すると '0'=='000'が通るので注意!
			$this->rowsToInstance($row);
			return 1;
		} else {
			return 0;
		}
	}

	function signUp() {//ログイン処理 戻:成功=1, 失敗=0
		//フィールドチェック
		if ($this->mail == NULL || $this->userName == NULL || $this->password == NULL || $this->phone == NULL) {
			return 0;
		}
		$values = 'NULL, \'' . $this->mail . '\', \'' . $this->userName . '\', \'' . $this->password . '\', \'' . $this->age . '\', \'' . $this->gender . '\', \'' . $this->address1 . '\', 0, \'' . $this->credit . '\', 0, \'' . $this->phone . '\'';
		$result = $this->insert('user', $values);
		if ($result) {
			return 1;
		} else {
			return 0;
		}
	}

	private function rowsToInstance($value) {
		$this->userNo = ($value['user_no']);
		$this->userName = $value['name'];
		$this->password = $value['password'];
		$this->mail = $value['mail_address'];
		$this->address1 = $value['address1'];
		$this->address2 = $value['address2'];
		$this->address3 = $value['address3'];
		$this->phone = $value['phone'];
		$this->age = $value['age'];
		$this->gender = $value['gender'];
		$this->credit = $value['credit_no'];
		$this->money = $value['money'];
		$this->point = $value['point'];
	}
        
}