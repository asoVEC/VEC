<?php /* Smarty version 3.1.24, created on 2015-06-28 22:33:23
         compiled from "/Applications/MAMP/htdocs/VEC/View/signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1280470555905a13b30601_77914176%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c76670c831a8f9a6396bd47226200abcef23fae4' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/signup.tpl',
      1 => 1435295365,
      2 => 'file',
    ),
    'fe23c48836857c70105e42ec7bf81752fd4db56f' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/layout.tpl',
      1 => 1435523587,
      2 => 'file',
    ),
    'bc677889cca9c6647b196d609aec7d9d9dcb3f95' => 
    array (
      0 => 'bc677889cca9c6647b196d609aec7d9d9dcb3f95',
      1 => 0,
      2 => 'string',
    ),
    '5d9eed55720b4e9accd6c0ad0c5f1854f903140a' => 
    array (
      0 => '5d9eed55720b4e9accd6c0ad0c5f1854f903140a',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1280470555905a13b30601_77914176',
  'variables' => 
  array (
    'amount_cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55905a13c73a71_25669943',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55905a13c73a71_25669943')) {
function content_55905a13c73a71_25669943 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1280470555905a13b30601_77914176';
?>
<html>
    <head>
        <meta charset="UTF-8">

        <title><?php
$_smarty_tpl->properties['nocache_hash'] = '1280470555905a13b30601_77914176';
?>
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
                        <div class="dropdown-toggle navbar-inverse　nav" ></a>
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
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">会員情報変更</a></li>
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
$_smarty_tpl->properties['nocache_hash'] = '1280470555905a13b30601_77914176';
?>


 <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px; width: 1200px;">
     <p class="text-warning"><font size="6" face="ＭＳ 明朝,平成明朝">会員登録</font> <br><br></p>
　　　　<font size="4" face="ＭＳ ゴシック">アカウントの作成に必要な情報を入力してください</font> <br>
　　　 
          
          
             <table width="600" border="0">
                 <form action="account.html" method="post">
                      <tr>
                          <th>名前:</th>
                          <td>
                              <input type="text" name="name" value="" size="24">
                          </td>
                      </tr>

                      <tr>
                          <th>フリガナ:</th>
                          <td>
                              <input type="text" name="furigana" value="" size="24">
                         </td>
                      </tr>

                      <tr>
                          <th>メールアドレス:</th>
                          <td>
                              <input type="text" name="mail1" value="" size="24">
                         </td>
                      </tr>

                      <tr>
                          <th>もう一度入力してください:</th>
                          <td>
                              <input type="text" name="mail2" value="" size="24">
                         </td>
                      </tr>

　　　　　　　　　　　<tr>
                          <th>電話番号:</th>
                          <td>
                              <input type="text" name="tell" value="" size="24"><br>
                         </td>
                      </tr> 
                 <br>
                      <tr><td>
                         <h4>パスワード:<br>
                         <p><u>※ここで入力したパスワードが利用パスワードになります<u><p><h4>   
                          </td>
		
                          <td>
                              <input type="password" name="pass" value="" size="24">
                         </td>
                       </tr>
                      
                      <tr>
                          <th>
                            　パスワードを<br>
                             もう一度入力してください:
                          </th>
                          <td>
                              <input type="password" name="pass2" value="" size="24">
                         </td>
                      </tr>

                      <tr>
                          <td colspan="2">
                              <button type="button" class="btn btn-warning">アカウントの作成</button>
                          </td>
                      </tr>
                  </form>
              </table>
         </div>
         <body style="background-image: url(./img/back22.gif);">
      

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