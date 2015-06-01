
<?php
/**
 *@author 	Akihiro
 *@date 	2015/05/31
 **/

class BaseModel {

	private $user     = 'root';
	private $password = 'root';
	private $db       = 'vec';
	private $host     = 'localhost';
	private $port     = 8889;

	public function __construct() {
		//データベース接続
		try {
			$pdo = new PDO('mysql:host=$host;port=3306;dbname=$db;charset=utf8', '$user', '$password',
				array(PDO::ATTR_EMULATE_PREPARES => false));
		} catch (PDOException $e) {
			die('データベース接続失敗。'.$e->getMessage());
		}

	}

	function getName() {
		$stmt = $pdo->query("SELECT * FROM user");
		// while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
		// print($row['name']);

	}
}
?>