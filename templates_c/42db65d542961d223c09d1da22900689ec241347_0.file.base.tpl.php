<<<<<<< Updated upstream
<?php /* Smarty version 3.1.24, created on 2015-06-16 07:51:29
         compiled from "/Applications/MAMP/htdocs/VEC/View/base.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1100511816557fb961088fa6_03945991%%*/
=======
<?php /* Smarty version 3.1.24, created on 2015-06-15 17:00:50
         compiled from "/Applications/MAMP/htdocs/VEC/View/base.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2046901306557e8632d862e7_66994588%%*/
>>>>>>> Stashed changes
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42db65d542961d223c09d1da22900689ec241347' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/base.tpl',
<<<<<<< Updated upstream
      1 => 1434433887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1100511816557fb961088fa6_03945991',
=======
      1 => 1434351971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2046901306557e8632d862e7_66994588',
>>>>>>> Stashed changes
  'variables' => 
  array (
    'name' => 0,
    'abc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
<<<<<<< Updated upstream
  'unifunc' => 'content_557fb96111a538_89901937',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_557fb96111a538_89901937')) {
function content_557fb96111a538_89901937 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1100511816557fb961088fa6_03945991';
=======
  'unifunc' => 'content_557e8632e3da32_55064514',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_557e8632e3da32_55064514')) {
function content_557e8632e3da32_55064514 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2046901306557e8632d862e7_66994588';
>>>>>>> Stashed changes
echo '<?php
';?>/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
<?php echo '?>';?>
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

        

        <div class="container main-content">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#">カテゴリ一覧</a></li>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">肉 <b class="caret"></b></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><div class="frame" style="background: url(/VEC/img/fdjyagaimo.jpg) center center no-repeat;"></div></li>
                                <li><a href="#">松阪牛</a></li>
                                <li><a href="#">なんとか牛</a></li>
                                <li><a href="#">豚</a></li>
                            </ul>
                        </div>
                        <div id='cssmenu'>
                            <li class='has-sub'><a href='#'><span>肉・卵</span></a>
                                <ul>
                                    <li><div class="frame" style="background: url(/VEC/img/fd_ninjin.jpg) center center no-repeat;"></div></li>
                                    <li><div class="frame" style="background: url(/VEC/img/fdjyagaimo.jpg) center center no-repeat;"></div></li>
                                </ul>
                        </div>
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
                    <style type="text/css">
                        
                        
                    </style>
                    <div class="label"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
                    <div class="frame" style="background: <?php echo $_smarty_tpl->tpl_vars['abc']->value;?>
 center center no-repeat;"></div>
                    <div class="label"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
                    <div class="frame" style="background: url(/VEC/img/fdputitomato.jpg) center center no-repeat;"></div>
                    <div class="label"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
                    <div class="frame" style="background: url(/VEC/img/fdpapurika.jpg) center center no-repeat;"></div>
                    <div class="label"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
                    <div class="frame" style="background: url(/VEC/img/fd_kabotya.jpg) center center no-repeat;"></div>
                    <div class="label"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
                    <div class="frame" style="background: url(/VEC/img/fd_ninjin.jpg) center center no-repeat;"></div>
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