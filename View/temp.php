<!DOCTYPE html>
<html>
<head>
<title>
</title>            
</head>
<body>

</body>
</html>
<?php
require_once '../Model/User.php';



$obj = new User();
echo('<br />name: '.$obj->getUser()['name']);
echo('<br />address: '.$obj->getUser()['address']);
echo ('<br />'.$obj->login('000@gmail.com', '001'));
?> 