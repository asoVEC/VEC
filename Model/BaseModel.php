
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
     private $where = ' where 1=1';
     
    //DB接続情報設定
    function __construct() {
        $link = mysql_connect(
                "$this->host:$this->port", $this->user, $this->password);
        if (!$link) {
                die('接続失敗です。'.mysql_error());
        }
        $db_selected = mysql_select_db($this->db, $link);
        if (!$db_selected) {
                die('データベース選択失敗です。'.mysql_error());
        }
        
    }
        //クエリー共通部分、 引:テーブル名、where条件(なしの場合 = 0) 戻:
	function query($table,$where) {
            if($where != 0){
                $this->where = ' where '.$where;
            }
            $result = mysql_query('SELECT * FROM '.$table.  $this->where);
            if (!$result) {
                    die('クエリーが失敗しました。'.mysql_error());
            }
            $row = mysql_fetch_assoc($result);
            return$row; 
        
	}
        
}