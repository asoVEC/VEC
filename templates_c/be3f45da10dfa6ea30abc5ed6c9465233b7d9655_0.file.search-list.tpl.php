<?php /* Smarty version 3.1.24, created on 2015-06-24 13:52:23
         compiled from "/Applications/MAMP/htdocs/VEC/View/search-list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:256205780558a3787e4a250_80399878%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be3f45da10dfa6ea30abc5ed6c9465233b7d9655' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/search-list.tpl',
      1 => 1435121542,
      2 => 'file',
    ),
    '42db65d542961d223c09d1da22900689ec241347' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/base.tpl',
      1 => 1435115141,
      2 => 'file',
    ),
    'fe23c48836857c70105e42ec7bf81752fd4db56f' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/layout.tpl',
      1 => 1435117118,
      2 => 'file',
    ),
    '23c2bc899ee6bb4f28730a13278cc5574a2b2aad' => 
    array (
      0 => '23c2bc899ee6bb4f28730a13278cc5574a2b2aad',
      1 => 0,
      2 => 'string',
    ),
    '95ad3bdd0783ad5d323ecd46347f0fb0fb17afbb' => 
    array (
      0 => '95ad3bdd0783ad5d323ecd46347f0fb0fb17afbb',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '256205780558a3787e4a250_80399878',
  'variables' => 
  array (
    '_SESSION' => 0,
    'amount_cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_558a378802e8c3_29615587',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558a378802e8c3_29615587')) {
function content_558a378802e8c3_29615587 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '256205780558a3787e4a250_80399878';
?>
<html>
    <head>
        <meta charset="UTF-8">
        
            <title><?php
$_smarty_tpl->properties['nocache_hash'] = '256205780558a3787e4a250_80399878';
?>
検索結果</title>
        
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
$_smarty_tpl->properties['nocache_hash'] = '256205780558a3787e4a250_80399878';
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
                
                









現在のページは<?php echo $_smarty_tpl->tpl_vars['array']->value['current_page'];?>

<br />
<?php echo $_smarty_tpl->tpl_vars['array']->value['start']+1;?>
個目から<?php echo $_smarty_tpl->tpl_vars['array']->value['start']+$_smarty_tpl->tpl_vars['array']->value['display_quanity'];?>
個目のデータを表示しています。
<?php echo $_smarty_tpl->tpl_vars['array']->value['display_quanity'];?>











<?php
$_from = $_smarty_tpl->tpl_vars['array']->value['deta'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['deta'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['deta']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['deta']->value) {
$_smarty_tpl->tpl_vars['deta']->_loop = true;
$foreach_deta_Sav = $_smarty_tpl->tpl_vars['deta'];
?>
    <?php echo $_smarty_tpl->tpl_vars['deta']->value;?>

    <?php
$_smarty_tpl->tpl_vars['deta'] = $foreach_deta_Sav;
}
?>



<nav>
<ul class="pager">
<?php if ($_smarty_tpl->tpl_vars['array']->value['current_page'] != 1) {?>
    <li><a href="pageing.php?page='.($genzai_page-1).'"><< 前のページへ</a></li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['array']->value['current_page'] != $_smarty_tpl->tpl_vars['array']->value['max_page']) {?>
    <li><a href='?page=<?php echo $_GET['page']+1;?>
'>次のページへ >></a></li>
        <?php }?>
        </ul>
</nav>
    



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