<<<<<<< Updated upstream
<<<<<<< HEAD
<?php /* Smarty version 3.1.24, created on 2015-06-19 03:51:29
         compiled from "/Applications/MAMP/htdocs/VEC/View/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1070150516558375a16e33e8_87081115%%*/
=======
<?php /* Smarty version 3.1.24, created on 2015-06-19 10:40:17
         compiled from "/Applications/MAMP/htdocs/VEC/View/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:544641211558373010c8d91_89642151%%*/
>>>>>>> origin/master
=======
<?php /* Smarty version 3.1.24, created on 2015-06-19 10:57:32
         compiled from "/Applications/MAMP/htdocs/VEC/View/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8223301325583770cc472e0_66612807%%*/
>>>>>>> Stashed changes
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '621f4d9122508bb81a1fa9fbc3c3773608d92ad3' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/login.tpl',
<<<<<<< Updated upstream
<<<<<<< HEAD
      1 => 1434678685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1070150516558375a16e33e8_87081115',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_558375a175f654_00707740',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558375a175f654_00707740')) {
function content_558375a175f654_00707740 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1070150516558375a16e33e8_87081115';
=======
      1 => 1434678015,
=======
      1 => 1434679051,
>>>>>>> Stashed changes
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8223301325583770cc472e0_66612807',
  'variables' => 
  array (
    'user_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5583770ccc3211_12183818',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5583770ccc3211_12183818')) {
function content_5583770ccc3211_12183818 ($_smarty_tpl) {

<<<<<<< Updated upstream
$_smarty_tpl->properties['nocache_hash'] = '544641211558373010c8d91_89642151';
>>>>>>> origin/master
=======
$_smarty_tpl->properties['nocache_hash'] = '8223301325583770cc472e0_66612807';
>>>>>>> Stashed changes
echo '<?php

';
echo '?>';?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ホームページ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/VEC/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/VEC/css/css.css" rel="stylesheet" media="screen">
    </head>
    <body>
        
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">
                <!--ブランド名 ロゴ名の表示-->
                <a class="navbar-brand" href="#">VEC</a>
            </div>
            <div id="nav-content" class="collapse navbar-collapse">
                    <!--検索フォーム-->
                    <form class="navbar-form navbar-static-top" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="商品検索">
                        </div>
                        <button type="submit" class="btn btn-default">検索</button>
                    </form>
                <div class="navbar-right">
                    <!--リンクのリスト メニューリスト-->
                    <ul class="nav navbar-nav">
                        <li><a href=""><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
、ようこそ</a></li>
                        <li><a href="">買い物カゴ <span class="badge">12</span></a></li>
                        <!--<li><a href="">Link3</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
        <header class="jumbotron col-lg-10 col-lg-offset-1"></header>


        <div class="container main-content">
            <div class="row">
                <div class="panel panel-default col-sm-6  col-md-6">
                    <div class="panel-body">
                        <div class="container">
                            <div class="col-xs-12 col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-3 col-xs-8 h1">ログインしてください</div>
                            <div class="col-sm-12">　</div>
                            <div class="col-sm-12">　</div>
                            <div class="col-sm-12">　</div>
                            <div class="row">
<<<<<<< Updated upstream

<<<<<<< HEAD
                                            <form action="/VEC/Controller/home/login" class="form-horizontal" method="post">
                                                <div class="form-group">

                                                    <label for="input-mail" class="col-sm-3 control-label">メールアドレス</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="value" id="input-mail" placeholder="メールアドレス" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input-passward" class="col-sm-3 control-label">パスワード</label>
                                                    <div class="col-sm-6">
                                                        <input type="password" class="form-control" id="input-passward" placeholder="パスワード" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-7 col-sm-10">
                                                        <button type="submit" class="btn btn-default ">ログイン</button>
                                                    </div>
                                                </div>
                                            </form>
=======
=======
>>>>>>> Stashed changes
                                <form action="#" class="form-horizontal">
                                    <div class="form-group">

                                        <label for="input-mail" class="col-sm-3 control-label">メールアドレス</label>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control" id="input-mail" placeholder="メールアドレス" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-passward" class="col-sm-3 control-label">パスワード</label>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control" id="input-passward" placeholder="パスワード" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-7 col-sm-10">
                                            <button type="submit" class="btn btn-default ">ログイン</button>
>>>>>>> origin/master
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="container-fluid">
            <small><a href="/">Copyright (C) 2013-2014 9ineBB All Rights Reserved.</a></small>
        </footer>
    </body>
</html>
<?php }
}
?>