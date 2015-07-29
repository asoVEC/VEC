<?php

/**
 * @author 	Akihiro
 * @date 	2015/05/31
 * */
class BaseModel {

	private $user     = 'root';
	private $password = 'root';
	private $db       = 'vec';
	private $host     = 'localhost';
	private $port     = 8889;
	private $where    = ' where 1=1';
	private $link     = null;

	//DB接続情報設定
	function __construct() {

		$this->link = mysql_connect(
			"$this->host:$this->port", $this->user, $this->password);
		if (!$this->link) {
			die('接続失敗です。'.mysql_error());
		}
		$db_selected = mysql_select_db($this->db, $this->link);
		mysql_query('SET NAMES utf8', $this->link);
		if (!$db_selected) {
			die('データベース選択失敗です。'.mysql_error());
		}
	}

	//インスタンス破棄時にDBのリンクを閉じる
	function __destruct() {
		if ($this->link != null) {
			mysql_close($this->link);
		}
	}

	//クエリー共通部分、 引:テーブル名、where条件(第2引数は無くてもいい) 戻:検索結果の行配列
	//使用例: query('user')[0]['name'],query('user','name = \'ますやま\'')[0]['name']
	function query($table, $where = NULL) {
		if ($where != NULL) {
			$this->where = ' where '.$where;
		}
		$result = mysql_query('SELECT * FROM '.$table.$this->where);
		//        echo '検索条件は'.'SELECT * FROM ' . $table . $this->where;
		if (!$result) {
			die('クエリーが失敗しました。'.mysql_error());
		}
		$rows = array();
		while ($row = mysql_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}

	//DBにデータ挿入 引:テーブル名、挿入するデータ 戻:true = 成功、false = 失敗
	function insert($table, $values) {
		$sql = 'INSERT INTO '.$table.' VALUES ('.$values.')';
		return mysql_query($sql);
	}

	//DBのでーた更新引:テーブル名、属性名、セットする新しい値、where条件
	function update($table, $key, $value, $where) {
		$sql = sprintf('update %s set %s = \'%s\' where %s ', $table, $key, $value, $where);

		return mysql_query($sql);
	}
	function delete($table,$where){
		$sql = sprintf('DELETE FROM %s where %s ', $table,$where);
//		die($sql);
		return mysql_query($sql);
	}
			function count($table) {
		$result = mysql_query('SELECT count(*) FROM '.$table);
		return (mysql_fetch_assoc($result)['count(*)']);
	}

}
