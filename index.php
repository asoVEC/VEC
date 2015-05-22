<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php
$user = 'root';
$password = 'root';
$db = 'vec';
$host = 'localhost';
$port = 8889;

$link = mysql_connect(
   "$host:$port",
   $user,
   $password
);
if (!$link) {
    die('接続失敗です。'.mysql_error());
}
$db_selected = mysql_select_db($db, $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}
$result = mysql_query('SELECT * FROM user');
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}
$row = mysql_fetch_assoc($result);
print($row['user_no']);




 ?>