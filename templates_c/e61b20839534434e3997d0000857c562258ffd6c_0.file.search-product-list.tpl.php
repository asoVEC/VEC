<?php /* Smarty version 3.1.24, created on 2015-06-17 12:58:18
         compiled from "/Applications/MAMP/htdocs/VEC/View/search-product-list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6541168485580f05a3b8856_73941109%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e61b20839534434e3997d0000857c562258ffd6c' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/search-product-list.tpl',
      1 => 1434513493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6541168485580f05a3b8856_73941109',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5580f05a4194f6_81100980',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5580f05a4194f6_81100980')) {
function content_5580f05a4194f6_81100980 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6541168485580f05a3b8856_73941109';
?>
<html>
<head>
        <meta charset="UTF-8">
        <title>ホームページ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/VEC/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/VEC/css/css.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <a href="#" rel="tooltip" data-toggle="tooltip" data-placement="bottom" title="this is tooltip">tooltip</a>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">

                <!--ブランド名 ロゴ名の表示-->
                <a class="navbar-brand" href="#">VEC</a>




                <!--                トグルボタンの設置
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="nav-content">
                                                    <span class="icon-bar">ユーザ</span>
                                                    <span class="icon-bar">買い物カゴ</span>
                                                    <span class="icon-bar">検索</span>
                                                </button>-->
            </div>
            <div id="nav-content" class="collapse navbar-collapse">

                <!--リンクのリスト メニューリスト-->                    
                <ul class="nav navbar-nav">
                    <li><a href="">長野さん、ようこそ</a></li>
                    <li><a href="">買い物カゴ <span class="badge">12</span></a></li>
                    <!--<li><a href="">Link3</a></li>-->
                </ul>
                <!--検索フォーム-->
                <form class="navbar-form navbar-static-top" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="商品検索">
                    </div>
                    <button type="submit" class="btn btn-default">検索</button>
                </form>
            </div>
        </nav>
        <header class="jumbotron col-lg-10 col-lg-offset-1"></header>

        <form class="navbar-form navbar-static-top hidden-lg hidden-md hidden-sm" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="商品検索">
            </div>
            <button type="submit" class="btn btn-default">検索</button>
        </form>

       
        <footer class="container-fluid">
            <small><a href="/">Copyright (C) 2013-2014 9ineBB All Rights Reserved.</a></small>
        </footer>
    </body>
</html>
<?php }
}
?>