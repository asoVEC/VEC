<?php /* Smarty version 3.1.24, created on 2015-06-24 05:14:34
         compiled from "F:/xampp/htdocs/VEC/View/signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4717558a209a477c59_68172387%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3bba26892fc651adc4990d4f7d1ea7530eaccce' => 
    array (
      0 => 'F:/xampp/htdocs/VEC/View/signup.tpl',
      1 => 1435115670,
      2 => 'file',
    ),
    '2f0a818a8d5ff2b61e4579b8f616049636ef869c' => 
    array (
      0 => 'F:/xampp/htdocs/VEC/View/layout.tpl',
      1 => 1435114256,
      2 => 'file',
    ),
    '9a723f6400d45418bfabd2e3484886df344b75e9' => 
    array (
      0 => '9a723f6400d45418bfabd2e3484886df344b75e9',
      1 => 0,
      2 => 'string',
    ),
    '1eddaeafeea59151a662fe0a9fa7508284d90654' => 
    array (
      0 => '1eddaeafeea59151a662fe0a9fa7508284d90654',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '4717558a209a477c59_68172387',
  'variables' => 
  array (
    '_SESSION' => 0,
    'amount_cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_558a209a52e957_27095314',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558a209a52e957_27095314')) {
function content_558a209a52e957_27095314 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4717558a209a477c59_68172387';
?>
<html>
    <head>
        <meta charset="UTF-8">
        
            <title><?php
$_smarty_tpl->properties['nocache_hash'] = '4717558a209a477c59_68172387';
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
$_smarty_tpl->properties['nocache_hash'] = '4717558a209a477c59_68172387';
?>

 <center>
 <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px; width: 1200px;">
      <font size="6" face="�l�r ����,��������">����o�^</font> <br><br>
�@�@�@�@<font size="4" face="�l�r �S�V�b�N">�A�J�E���g�쐬�̂��߂ɕK�v�ȏ�����͂��Ă�������</font> <br>
�@�@�@ 
          
          
             <table width="600" border="0">
                 <form action="account.html" method="post">
                      <tr>
                          <th>���O:</th>
                          <td>
                              <input type="text" name="name" value="" size="24">
                          </td>
                      </tr>

                      <tr>
                          <th>�t���K�i:</th>
                          <td>
                              <input type="text" name="furigana" value="" size="24">
                         </td>
                      </tr>

                      <tr>
                          <th>���[���A�h���X:</th>
                          <td>
                              <input type="text" name="mail1" value="" size="24">
                         </td>
                      </tr>

                      <tr>
                          <th>������x���͂��Ă�������:</th>
                          <td>
                              <input type="text" name="mail2" value="" size="24">
                         </td>
                      </tr>

�@�@�@�@�@�@�@�@�@�@�@<tr>
                          <th>�d�b�ԍ�:</th>
                          <td>
                              <input type="text" name="tell" value="" size="24"><br>
                         </td>
                      </tr> 
                 <br>
                      <tr><td>
                         <h4>�p�X���[�h:<br>
                         <p><u>�������œ��͂����p�X���[�h�����p�p�X���[�h�ɂȂ�܂�<u><p><h4>
                              
                          </td>
		
                          <td>
                              <input type="password" name="pass" value="" size="24">
                         </td>
                       </tr>
                      
                      <tr>
                          <th>
                            �@�p�X���[�h��<br>
                             ������x���͂��Ă�������:
                          </th>
                          <td>
                              <input type="password" name="pass2" value="" size="24">
                         </td>
                      </tr>

                      <tr>
                          <td colspan="2">
                              <input type="submit" value="�A�J�E���g�̍쐬">
                          </td>
                      </tr>
                  </form>
              </table>
         </div>
         <body style="background-image: url(./img/back22.gif);">
      </center>

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