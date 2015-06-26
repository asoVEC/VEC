<?php
session_start();


require_once '../Model/User.php'; 

if (isset($_SESSION["counter"])) {  

  $_SESSION["counter"]++;  

  print($_SESSION["counter"]."回目の読み込みです。");  

} else {  

   $_SESSION["counter"] = 0;  

  print("はじめての読み込みです。");  

}  


$obj = new User();
echo('<br />name: ' . $obj->getUser()['name']);
echo('<br />address: ' . $obj->getUser()['address']);
echo ('<br />' . $obj->login('000@gmail.com', '000'));
echo session_id();

?> 
<html>
    <head>
        <title>
        </title>            
    </head>
    <body>

    </body>
</html>