
<?php
/**
 *@author 	Akihiro
 *@date 	2015/05/31
 **/

class BaseModel {	
    private  $user     = 'root';
    private $password = 'root';
    private $db       = 'vec';
    private $host     = 'localhost';
    private $port     = 8889;

	function __construct() {

		$link = mysql_connect(
			"$host:$port",
			$user,
			$password
		);
		if (!$link) {
			die('接続失敗です。'.mysql_error());
		}
		$db_selected = mysqfl_select_db($db, $link);
		if (!$db_selected) {
			die('データベース選択失敗です。'.mysql_error());
	}

	}
	function getName() {
			
		$result = mysql_query('SELECT * FROM user');
		if (!$result) {
			die('クエリーが失敗しました。'.mysql_error());
		}
		$row = mysql_fetch_assoc($result);
		print($row['name']);

	}
	
}
