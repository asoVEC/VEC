<?php
// 変数
$user = 'root';
$password = 'root';
$db = 'vec';
$host = 'localhost';
$port = 8889;

// db接続
function open_database_connection()
{
$link = mysql_connect("$host:$port", $user, $password);
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

$db_selected = mysql_select_db($db,$link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

return $link;
}
// db解除
function close_database_connection($link)
{
	mysql_close($link);
}
// 名前取得
function get_user_name()
{
	$link = open_database_connection();
	$result = mysql_query('SELECT name FROM user', $link);
	if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}
	$name = mysql_fetch_assoc($result);

    close_database_connection($link);
    return $name;
}
// メールアドレス取得
function get_user_mailaddress()
{
	$link = open_database_connection();
	$result = mysql_query('SELECT address FROM user', $link);
	$mailaddress = mysql_fetch_assoc($result);

    close_database_connection($link);

    return $mailaddress;
}
echo "aa";
$name = get_user_name();
print $name;

?>