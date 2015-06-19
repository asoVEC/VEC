<?php /* Smarty version 3.1.24, created on 2015-06-19 03:25:34
         compiled from "/Applications/MAMP/htdocs/VEC/View/base.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:80439360855836f8e629426_01811193%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42db65d542961d223c09d1da22900689ec241347' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/base.tpl',
      1 => 1434677109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80439360855836f8e629426_01811193',
  'variables' => 
  array (
    'user_name' => 0,
    'name1' => 0,
    'food1' => 0,
    'name2' => 0,
    'food2' => 0,
    'name3' => 0,
    'food3' => 0,
    'name4' => 0,
    'food4' => 0,
    'name5' => 0,
    'food5' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55836f8e6d7139_19872892',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55836f8e6d7139_19872892')) {
function content_55836f8e6d7139_19872892 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '80439360855836f8e629426_01811193';
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
                    <li><a href=""><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
、ようこそ</a></li>
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
                    <div class="label"><?php echo $_smarty_tpl->tpl_vars['name1']->value;?>
</div>
                    <div class="frame" style="background: <?php echo $_smarty_tpl->tpl_vars['food1']->value;?>
 center center no-repeat;"></div>
                    <div class="label"><?php echo $_smarty_tpl->tpl_vars['name2']->value;?>
</div>
                    <div class="frame" style="background: <?php echo $_smarty_tpl->tpl_vars['food2']->value;?>
 center center no-repeat;"></div>
                    <div class="label"><?php echo $_smarty_tpl->tpl_vars['name3']->value;?>
</div>
                    <div class="frame" style="background: <?php echo $_smarty_tpl->tpl_vars['food3']->value;?>
 center center no-repeat;"></div>
                    <div class="label"><?php echo $_smarty_tpl->tpl_vars['name4']->value;?>
</div>
                    <div class="frame" style="background: <?php echo $_smarty_tpl->tpl_vars['food4']->value;?>
 center center no-repeat;"></div>
                    <div class="label"><?php echo $_smarty_tpl->tpl_vars['name5']->value;?>
</div>
                    <div class="frame" style="background: <?php echo $_smarty_tpl->tpl_vars['food5']->value;?>
 center center no-repeat;"></div>
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