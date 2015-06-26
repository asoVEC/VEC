<?php /* Smarty version 3.1.24, created on 2015-06-24 05:09:55
         compiled from "F:/xampp/htdocs/VEC/View/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18198558a1f836c8b19_30299247%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f896484a36b7fc8e8cf173dae00c1586ff9cd6de' => 
    array (
      0 => 'F:/xampp/htdocs/VEC/View/login.tpl',
      1 => 1435114256,
      2 => 'file',
    ),
    '2f0a818a8d5ff2b61e4579b8f616049636ef869c' => 
    array (
      0 => 'F:/xampp/htdocs/VEC/View/layout.tpl',
      1 => 1435114256,
      2 => 'file',
    ),
    'c1bab543f973ed4f3c4616ae6808ea25683f5dec' => 
    array (
      0 => 'c1bab543f973ed4f3c4616ae6808ea25683f5dec',
      1 => 0,
      2 => 'string',
    ),
    '1117ade6a94bc1bab27459fc56a69e1f422d6f04' => 
    array (
      0 => '1117ade6a94bc1bab27459fc56a69e1f422d6f04',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '18198558a1f836c8b19_30299247',
  'variables' => 
  array (
    '_SESSION' => 0,
    'amount_cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_558a1f8377f806_45039364',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558a1f8377f806_45039364')) {
function content_558a1f8377f806_45039364 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18198558a1f836c8b19_30299247';
?>
<html>
    <head>
        <meta charset="UTF-8">
        
            <title><?php
$_smarty_tpl->properties['nocache_hash'] = '18198558a1f836c8b19_30299247';
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
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <!-- ここが表示されるボタン <a>タグでもOK -->
                            <button class="dropdown-toggle navbar-inverse　nav badge" id="dropdownMenu1" data-toggle="dropdown" type="button"></a>
                                アカウントサービス
                                <span class="caret"></span>
                                <br />
                                
                                <!-- 安長がちょっと変更-->
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
$_smarty_tpl->properties['nocache_hash'] = '18198558a1f836c8b19_30299247';
?>

=======
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
                            <a href="" class="dropdown-toggle navbar-right navbar-collapse" id="dropdownMenu1" data-toggle="dropdown"></a>
                            アカウントサービス
                            <span class="caret"></span>
                            </button>
                            <!-- ボタンここまで -->

                            <!-- ここはボタンを押すと表示されるリスト -->
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                            </ul>
                            <!-- リストここまで -->
                        </li>
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

>>>>>>> Stashed changes
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
                                <form action="/VEC/Controller/home/login" class="form-horizontal" method="post">

                                    <div class="form-group">

                                        <label for="input-mail" class="col-sm-3 control-label">メールアドレス</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="mail" id="input-mail" placeholder="メールアドレス" required="required">
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
                                        <div class="col-sm-offset-7 col-sm-10">
                                            <button type="submit" class="btn btn-default ">ログイン</button>
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
    <small><a href="/">Copyright (C) 2015-2015 vec.aso All Rights Reserved.</a></small>
</footer>
</body>
</html><?php }
}
?>