<?php /* Smarty version 3.1.24, created on 2015-06-29 09:03:24
         compiled from "/Applications/MAMP/htdocs/VEC/View/base.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19154200475590edbca52d72_57672501%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42db65d542961d223c09d1da22900689ec241347' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/base.tpl',
      1 => 1435482791,
      2 => 'file',
    ),
    'fe23c48836857c70105e42ec7bf81752fd4db56f' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/layout.tpl',
      1 => 1435528300,
      2 => 'file',
    ),
    'c58562b535d9f1144c28345b4641674ab88b8645' => 
    array (
      0 => 'c58562b535d9f1144c28345b4641674ab88b8645',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '19154200475590edbca52d72_57672501',
  'variables' => 
  array (
    'amount_cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5590edbcbd0546_38435986',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5590edbcbd0546_38435986')) {
function content_5590edbcbd0546_38435986 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19154200475590edbca52d72_57672501';
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
$_smarty_tpl->properties['nocache_hash'] = '19154200475590edbca52d72_57672501';
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
<footer class="container-fluid ">
    <small><a href="/">Copyright (C) 2015-2015 vec.aso All Rights Reserved.</a></small>
</footer>
</body>
</html><?php }
}
?>