<<<<<<< HEAD
<?php /* Smarty version 3.1.24, created on 2015-06-19 11:11:22
         compiled from "/Applications/MAMP/htdocs/VEC/View/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:136763779155837a4a5c5627_85584042%%*/
=======
<?php /* Smarty version 3.1.24, created on 2015-06-19 04:00:51
         compiled from "/Applications/MAMP/htdocs/VEC/View/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2111028466558377d35e3c27_20390359%%*/
>>>>>>> origin/master
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '621f4d9122508bb81a1fa9fbc3c3773608d92ad3' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/login.tpl',
<<<<<<< HEAD
      1 => 1434679841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136763779155837a4a5c5627_85584042',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55837a4a623cd7_17583794',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55837a4a623cd7_17583794')) {
function content_55837a4a623cd7_17583794 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '136763779155837a4a5c5627_85584042';
echo '<?php

';
echo '?>';?>
=======
      1 => 1434679174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2111028466558377d35e3c27_20390359',
  'variables' => 
  array (
    'user_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_558377d3664817_13615752',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558377d3664817_13615752')) {
function content_558377d3664817_13615752 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2111028466558377d35e3c27_20390359';
?>
>>>>>>> origin/master
<html>
    <head>
        <meta charset="UTF-8">
        <title>ホームページ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/VEC/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/VEC/css/css.css" rel="stylesheet" media="screen">
    </head>
    <body>
<<<<<<< HEAD

=======
        <a href="#" rel="tooltip" data-toggle="tooltip" data-placement="bottom" title="this is tooltip">tooltip</a>
>>>>>>> origin/master
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">

                <!--ブランド名 ロゴ名の表示-->
                <a class="navbar-brand" href="#">VEC</a>
            </div>
            <div id="nav-content" class="collapse navbar-collapse">
<<<<<<< HEAD
                <!--                    リンクのリスト メニューリスト-->
                <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="">長野さん、ようこそ</a></li>
                    <li><a href="">買い物カゴ <span class="badge">12</span></a></li>
                </ul>
            </div>
                <!--検索フォーム-->
                <form class="navbar-form navbar-static-top" role="search">
                    <div class="form-group col-md-offset-1">
                        <input type="text" class="form-control" placeholder="商品検索" size="60pix">
                    </div>
                    <button type="submit" class="btn btn-default">検索</button>
                </form>
            </div>
        </nav>
        <header class="jumbotron col-lg-10 col-lg-offset-1"></header>
            
=======
                <div class="navbar-right">
                    <!-- リンクのリスト メニューリスト-->                    
                    <ul class="nav navbar-nav">


                        <--リンクのリスト メニューリスト -->                    
                        <ul class="nav navbar-nav">
                            <li><a href=""><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
、ようこそ</a></li>
                            <li><a href="">買い物カゴ <span class="badge">12</span></a></li>
                            <!--<li><a href="">Link3</a></li>-->
                        </ul>

                        <!--検索フォーム-->
                        <form class="navbar-form navbar-static-top" role="search">
                            <div class="form-group  col-md-offset-1">
                                <input type="text" class="form-control" placeholder="商品検索" size="70pix">
                            </div>
                            <button type="submit" class="btn btn-default">検索</button>
                        </form>
                </div>
        </nav>
        <header class="jumbotron col-lg-10 col-lg-offset-1"></header>

>>>>>>> origin/master
        <form class="navbar-form navbar-static-top hidden-lg hidden-md hidden-sm" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="商品検索">
            </div>
            <button type="submit" class="btn btn-default">検索</button>
        </form>
<<<<<<< HEAD

=======
>>>>>>> origin/master
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
<<<<<<< HEAD
                                <form action="/VEC/Controller/home/login" class="form-horizontal" method="post">
=======


                                <form action="/VEC/Controller/home/login" class="form-horizontal" method="post">

>>>>>>> origin/master
                                    <div class="form-group">

                                        <label for="input-mail" class="col-sm-3 control-label">メールアドレス</label>
                                        <div class="col-sm-6">
<<<<<<< HEAD
                                            <input type="text" class="form-control" name="value" id="input-mail" placeholder="メールアドレス" required="required">
=======
                                            <input type="email" class="form-control" id="input-mail" placeholder="メールアドレス" required="required">
>>>>>>> origin/master
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-passward" class="col-sm-3 control-label">パスワード</label>
                                        <div class="col-sm-6">
<<<<<<< HEAD
                                            <input type="password" class="form-control" id="input-passward" placeholder="パスワード" required="required">
=======
                                            <input type="email" class="form-control" id="input-passward" placeholder="パスワード" required="required">
>>>>>>> origin/master
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-7 col-sm-10">
                                            <button type="submit" class="btn btn-default ">ログイン</button>
<<<<<<< HEAD
=======

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