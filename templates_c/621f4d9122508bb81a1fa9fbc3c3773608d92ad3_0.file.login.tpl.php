<?php /* Smarty version 3.1.24, created on 2015-06-29 09:03:28
         compiled from "/Applications/MAMP/htdocs/VEC/View/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4237138515590edc07f6140_20708107%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '621f4d9122508bb81a1fa9fbc3c3773608d92ad3' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/login.tpl',
      1 => 1435529509,
      2 => 'file',
    ),
    'fe23c48836857c70105e42ec7bf81752fd4db56f' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/layout.tpl',
      1 => 1435528300,
      2 => 'file',
    ),
    'acd82172d4d389c99906eae038e47fc54b06e373' => 
    array (
      0 => 'acd82172d4d389c99906eae038e47fc54b06e373',
      1 => 0,
      2 => 'string',
    ),
    '15ae0a65978b5141bbc4691f7a045d37ac537969' => 
    array (
      0 => '15ae0a65978b5141bbc4691f7a045d37ac537969',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '4237138515590edc07f6140_20708107',
  'variables' => 
  array (
    'amount_cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5590edc0bdfb29_50789638',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5590edc0bdfb29_50789638')) {
function content_5590edc0bdfb29_50789638 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4237138515590edc07f6140_20708107';
?>
<html>
    <head>
        <meta charset="UTF-8">

        <title><?php
$_smarty_tpl->properties['nocache_hash'] = '4237138515590edc07f6140_20708107';
?>

    ログイン
    </title>

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

                <ul class="navbar-right nav navbar-nav">
                    <li class="dropdown">
                        <!-- ここが表示されるボタン <a>タグでもOK -->
                        <div class="dropdown-toggle" ></a>
                            アカウントサービス<span class="caret"></span>
                            <br />
                            <?php if ($_SESSION['userName'] == null) {?>
                                <a href="/VEC/Controller/home/login">ログインする</a>
                            <?php } else { ?>
                                ようこそ、<?php echo $_SESSION['userName'];?>
さん
                            <?php }?>
                        </div>
                        <!-- ボタンここまで -->
                        <!-- ここはボタンを押すと表示されるリスト -->
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <?php if ($_SESSION['userName'] != null) {?>
                                <li  role="presenetation"><a role="menuitem" tabindex="-1" href="#">会員情報変更</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="/VEC/Controller/home/logout">ログアウト</a></li>
                            <?php } else { ?> 
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="/VEC/Controller/user/signup">会員登録</a></li>
                            <?php }?>
                        </ul>
                            <!-- リストここまで -->
                    </li>
                        <li class="divider"><a href="">買い物カゴ <span class="badge"><?php echo $_smarty_tpl->tpl_vars['amount_cart']->value;?>
</span></a></li>
                    </ul>
                    
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
$_smarty_tpl->properties['nocache_hash'] = '4237138515590edc07f6140_20708107';
?>

        <div class="container main-content">
            <div class="row">
                <div class="panel panel-default col-sm-6 col-sm-offset-3 col-md-6">
                    <div class="panel-body">
                        <div class="container">
                            <div class="col-xs-12 col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-3 col-xs-8 h1">ログインしてください</div>

                            <div class="row">
                                <form action="/VEC/Controller/home/login" class="form-horizontal" method="post">

                                    <div class="form-group">

                                        <label for="input-mail" class="col-sm-3 control-label">メールアドレス</label>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control" name="mail" id="input-mail" placeholder="メールアドレス" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-passward" class="col-sm-3 control-label">パスワード</label>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control" name="password" id="input-passward" placeholder="パスワード" required="required">
                                        </div>
                                    </div>
                                    <span style='color:red'><?php echo $_smarty_tpl->tpl_vars['login_message']->value;?>
</span>
                                    <div class="form-group">
                                        <div class="col-sm-offset-7">
                                            <button type="submit" class="btn btn-default ">ログイン</button>
                                        </div>
                                    </div>
                                     <div class="col-sm-offset-6">会員登録は
                                        <span style='color:blue'><a href="/VEC/Controller/user/signup">こちら</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    
        </div>
    </div>
</div>
</div>
<footer class="container-fluid ">
    <small><a href="/">Copyright (C) 2015-2015 vec.aso All Rights Reserved.</a></small>
</footer>
</body>
</html><?php }
}
?>