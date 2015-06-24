<?php /* Smarty version 3.1.24, created on 2015-06-23 16:57:57
         compiled from "/Applications/MAMP/htdocs/VEC/View/search-list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1323778128558911851b32d0_01251333%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be3f45da10dfa6ea30abc5ed6c9465233b7d9655' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/search-list.tpl',
      1 => 1435046275,
      2 => 'file',
    ),
    '42db65d542961d223c09d1da22900689ec241347' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/base.tpl',
      1 => 1435036018,
      2 => 'file',
    ),
    'fe23c48836857c70105e42ec7bf81752fd4db56f' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/layout.tpl',
      1 => 1434959735,
      2 => 'file',
    ),
    '23c2bc899ee6bb4f28730a13278cc5574a2b2aad' => 
    array (
      0 => '23c2bc899ee6bb4f28730a13278cc5574a2b2aad',
      1 => 0,
      2 => 'string',
    ),
    'f7db438481153f5463b8280b0dbd978ef99939f7' => 
    array (
      0 => 'f7db438481153f5463b8280b0dbd978ef99939f7',
      1 => 0,
      2 => 'string',
    ),
    '7fd8ab531a22c2072535778a3d9ed81cd25857cc' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/_paging.tpl',
      1 => 1435042790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1323778128558911851b32d0_01251333',
  'variables' => 
  array (
    'account_info' => 0,
    'amount_cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_558911853ab0e7_62719265',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558911853ab0e7_62719265')) {
function content_558911853ab0e7_62719265 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1323778128558911851b32d0_01251333';
?>
<html>
    <head>
        <meta charset="UTF-8">
        
            <title><?php
$_smarty_tpl->properties['nocache_hash'] = '1323778128558911851b32d0_01251333';
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
                                <?php if ('loginFlg' == false) {?>
                                    <a href="">ログインする</a>
                                <?php } else { ?>
                                    ようこそ、<?php echo $_smarty_tpl->tpl_vars['account_info']->value;?>
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
$_smarty_tpl->properties['nocache_hash'] = '1323778128558911851b32d0_01251333';
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
                
                




<?php /*  Call merged included template "View/_paging.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("View/_paging.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paging_data'=>$_smarty_tpl->tpl_vars['paging_data']->value,'pager_type'=>"a",'add_link_to_edge'=>"1"), 0, '501778457558911852f72f1_89143414', 'content_558911852f6152_28588700');
/*  End of included template "View/_paging.tpl" */?>




    



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
?><?php
/*%%SmartyHeaderCode:501778457558911852f72f1_89143414%%*/
if ($_valid && !is_callable('content_558911852f6152_28588700')) {
function content_558911852f6152_28588700 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '501778457558911852f72f1_89143414';
if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cnt'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['name'] = 'cnt';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['SA']->value['max_page']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cnt']['total']);
?>
	<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['cnt']['first'] && $_GET['page'] != 1) {?>
	<a href='?page=<?php echo $_GET['page']-1;?>
'>←前の<?php echo $_smarty_tpl->tpl_vars['SA']->value['pager'];?>
件へ</a>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['cnt']['iteration'] == $_GET['page']) {?>
	<em><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['cnt']['iteration'];?>
</em>
	<?php } else { ?>
	<a href="?page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['cnt']['iteration'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['cnt']['iteration'];?>
</a>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['cnt']['last'] && $_GET['page'] != $_smarty_tpl->getVariable('smarty')->value['section']['cnt']['iteration']) {?>
	<a href='?page=<?php echo $_GET['page']+1;?>
'>→次の<?php if ($_smarty_tpl->tpl_vars['SA']->value['pager']*$_GET['page']['page'] < $_smarty_tpl->tpl_vars['SA']->value['row']) {
echo $_smarty_tpl->tpl_vars['SA']->value['pager'];
} else {
echo $_smarty_tpl->tpl_vars['SA']->value['row']-$_smarty_tpl->tpl_vars['SA']->value['pager']*$_GET['page'];
}?>件へ</a>
	<?php }?>
<?php endfor; endif; ?><?php
/*/%%SmartyNocache:501778457558911852f72f1_89143414%%*/
}
}
?>