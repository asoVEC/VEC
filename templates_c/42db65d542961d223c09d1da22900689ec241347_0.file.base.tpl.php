<<<<<<< Updated upstream
<?php /* Smarty version 3.1.24, created on 2015-06-19 11:16:44
         compiled from "/Applications/MAMP/htdocs/VEC/View/base.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:189357494155837b8c67cf82_11083952%%*/
=======
<?php /* Smarty version 3.1.24, created on 2015-06-19 04:00:41
         compiled from "/Applications/MAMP/htdocs/VEC/View/base.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1722490960558377c9297214_09264847%%*/
>>>>>>> Stashed changes
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42db65d542961d223c09d1da22900689ec241347' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/base.tpl',
<<<<<<< Updated upstream
      1 => 1434680201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189357494155837b8c67cf82_11083952',
=======
      1 => 1434678859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1722490960558377c9297214_09264847',
>>>>>>> Stashed changes
  'variables' => 
  array (
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
<<<<<<< Updated upstream
  'unifunc' => 'content_55837b8c6ef7c0_17999273',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55837b8c6ef7c0_17999273')) {
function content_55837b8c6ef7c0_17999273 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '189357494155837b8c67cf82_11083952';
=======
  'unifunc' => 'content_558377c94e86e3_53748180',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558377c94e86e3_53748180')) {
function content_558377c94e86e3_53748180 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1722490960558377c9297214_09264847';
>>>>>>> Stashed changes
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