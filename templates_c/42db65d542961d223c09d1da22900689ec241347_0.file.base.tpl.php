<<<<<<< HEAD
<?php /* Smarty version 3.1.24, created on 2015-06-24 12:11:04
         compiled from "/Applications/MAMP/htdocs/VEC/View/base.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1869158310558a1fc85755b5_08093045%%*/
=======
<?php /* Smarty version 3.1.24, created on 2015-06-24 05:08:38
         compiled from "/Applications/MAMP/htdocs/VEC/View/base.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:532147668558a1f36b05cf4_65916644%%*/
>>>>>>> origin/master
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42db65d542961d223c09d1da22900689ec241347' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/base.tpl',
<<<<<<< HEAD
      1 => 1435115141,
=======
      1 => 1435115152,
>>>>>>> origin/master
      2 => 'file',
    ),
    'fe23c48836857c70105e42ec7bf81752fd4db56f' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/layout.tpl',
<<<<<<< HEAD
      1 => 1435114297,
=======
      1 => 1435115152,
>>>>>>> origin/master
      2 => 'file',
    ),
    'c58562b535d9f1144c28345b4641674ab88b8645' => 
    array (
      0 => 'c58562b535d9f1144c28345b4641674ab88b8645',
      1 => 0,
      2 => 'string',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '1869158310558a1fc85755b5_08093045',
=======
  'nocache_hash' => '532147668558a1f36b05cf4_65916644',
>>>>>>> origin/master
  'variables' => 
  array (
    '_SESSION' => 0,
    'amount_cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
<<<<<<< HEAD
  'unifunc' => 'content_558a1fc86a0df5_61580468',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558a1fc86a0df5_61580468')) {
function content_558a1fc86a0df5_61580468 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1869158310558a1fc85755b5_08093045';
=======
  'unifunc' => 'content_558a1f36c73bc8_55951521',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558a1f36c73bc8_55951521')) {
function content_558a1f36c73bc8_55951521 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '532147668558a1f36b05cf4_65916644';
>>>>>>> origin/master
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
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">

                <!--ブランド名 ロゴ名の表示-->
                <a class="navbar-brand" href="#">VEC</a>
            </div>
            <div id="nav-content" class="collapse navbar-collapse">
                <!--                    リンクのリスト メニューリスト-->
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <!-- ここが表示されるボタン <a>タグでもOK -->
                            <button class="dropdown-toggle navbar-inverse　nav badge" id="dropdownMenu1" data-toggle="dropdown" type="button"></a>
                                アカウントサービス
                                <span class="caret"></span>
                                <br />
                                <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['userName'] == null) {?>
                                    <a href="">ログインする</a>
                                <?php } else { ?>
                                    ようこそ、<?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['userName'];?>
さん
                                <?php }?>
                            </button>
                            <!-- ボタンここまで -->
                            <!-- ここはボタンを押すと表示されるリスト -->
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                
                                <?php if ('loginFlg' == true) {?>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">会員情報変更</a></li>
                                    <?php }?>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">会員登録</a></li>
                            </ul>
                            <!-- リストここまで -->
                        </li>
                        <li><a href="">買い物カゴ <span class="badge"><?php echo $_smarty_tpl->tpl_vars['amount_cart']->value;?>
</span></a></li>
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
        <?php
<<<<<<< HEAD
$_smarty_tpl->properties['nocache_hash'] = '1869158310558a1fc85755b5_08093045';
=======
$_smarty_tpl->properties['nocache_hash'] = '532147668558a1f36b05cf4_65916644';
>>>>>>> origin/master
?>


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
                    

    </div>
</div>
</div>
</div>
<footer class="container-fluid">
    <small><a href="/">Copyright (C) 2015-2015 vec.aso All Rights Reserved.</a></small>
</footer>
</body>
</html><?php }
}
?>