<?php /* Smarty version 3.1.24, created on 2015-06-23 07:39:35
         compiled from "F:/xampp/htdocs/VEC/View/search-product-list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:227795588f1178523e5_33901009%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14292366d209f1b187904e5bbff18c9d54f2a781' => 
    array (
      0 => 'F:/xampp/htdocs/VEC/View/search-product-list.tpl',
      1 => 1434682750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227795588f1178523e5_33901009',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5588f1178e6b14_43968093',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5588f1178e6b14_43968093')) {
function content_5588f1178e6b14_43968093 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '227795588f1178523e5_33901009';
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
            </div>
            <div id="nav-content" class="collapse navbar-collapse">
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

        <form class="navbar-form navbar-static-top hidden-lg hidden-md hidden-sm" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="商品検索">
            </div>
            <button type="submit" class="btn btn-default">検索</button>
        </form>

        <div class="container main-content">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#">カテゴリ一覧</a></li>
                        <li><a href="#">肉・卵</a></li>
                        <li><a href="#">魚介</a></li>
                        <li><a href="#">野菜</a></li>
                        <li><a href="#">果物</a></li>
                        <li><a href="#">穀物</a></li>
                        <li><a href="#">調味料</a></li>
                        <li><a href="#">加工食品</a></li>
                        <li><a href="#">菓子</a></li>
                    </ul>
                </div>
                <div class="col-md-9 content-area">
                    <div class="container col-md-9">
                        <table class="table table-striped" border="1">
                            <thead>
                                <tr><th>#</th><th>title</th><th>action</th></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="frame" style="background: url(/VEC/img/fdjyagaimo.jpg) center center no-repeat;"></div></td>
                                </tr>
                                <tr>
                                    <td>2</td><td>sample2</td><td><button type="submit" class="btn btn-primary">Submit</button></td>
                                </tr>
                            </tbody>
                        </table>
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