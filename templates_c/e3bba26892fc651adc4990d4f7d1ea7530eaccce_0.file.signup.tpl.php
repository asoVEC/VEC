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

                <!--„Éñ„É©„É≥„ÉâÂêç „É≠„Ç¥Âêç„ÅÆË°®Á§∫-->
                <a class="navbar-brand" href="#">VEC</a>
            </div>
            <div id="nav-content" class="collapse navbar-collapse">
                <!--                    „É™„É≥„ÇØ„ÅÆ„É™„Çπ„Éà „É°„Éã„É•„Éº„É™„Çπ„Éà-->
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <!-- „Åì„Åì„ÅåË°®Á§∫„Åï„Çå„Çã„Éú„Çø„É≥ <a>„Çø„Ç∞„Åß„ÇÇOK -->
                            <button class="dropdown-toggle navbar-inverse„ÄÄnav badge" id="dropdownMenu1" data-toggle="dropdown" type="button"></a>
                                „Ç¢„Ç´„Ç¶„É≥„Éà„Çµ„Éº„Éì„Çπ
                                <span class="caret"></span>
                                <br />
                                
                                <!-- ÂÆâÈï∑„Åå„Å°„Çá„Å£„Å®Â§âÊõ¥-->
                                <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['userName'] == null) {?>
                                    <a href="">„É≠„Ç∞„Ç§„É≥„Åô„Çã</a>
                                <?php } else { ?>
                                    
                                    „Çà„ÅÜ„Åì„Åù„ÄÅ<?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['userName'];?>
„Åï„Çì
                                <?php }?>
                            </button>
                            <!-- „Éú„Çø„É≥„Åì„Åì„Åæ„Åß -->
                            <!-- „Åì„Åì„ÅØ„Éú„Çø„É≥„ÇíÊäº„Åô„Å®Ë°®Á§∫„Åï„Çå„Çã„É™„Çπ„Éà -->
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                
                                <?php if ('loginFlg' == true) {?>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">‰ºöÂì°ÊÉÖÂ†±Â§âÊõ¥</a></li>
                                    <?php }?>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">‰ºöÂì°ÁôªÈå≤</a></li>
                            </ul>
                            <!-- „É™„Çπ„Éà„Åì„Åì„Åæ„Åß -->
                        </li>
                        <li><a href="">Ë≤∑„ÅÑÁâ©„Ç´„Ç¥ <span class="badge"><?php echo $_smarty_tpl->tpl_vars['amount_cart']->value;?>
</span></a></li>
                    </ul>
                </div>
                
                <!--Ê§úÁ¥¢„Éï„Ç©„Éº„É†-->
                <form class="navbar-form navbar-static-top" role="search">
                    <div class="form-group col-md-offset-1">
                        <input type="text" class="form-control" placeholder="ÂïÜÂìÅÊ§úÁ¥¢" size="60pix">
                    </div>
                    <button type="submit" class="btn btn-default">Ê§úÁ¥¢</button>
                </form>
            </div>
        </nav>
        <header class="jumbotron col-lg-10 col-lg-offset-1"></header>
            
        <form class="navbar-form navbar-static-top hidden-lg hidden-md hidden-sm" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="ÂïÜÂìÅÊ§úÁ¥¢">
            </div>
            <button type="submit" class="btn btn-default">Ê§úÁ¥¢</button>
        </form>
        <?php
$_smarty_tpl->properties['nocache_hash'] = '4717558a209a477c59_68172387';
?>

 <center>
 <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px; width: 1200px;">
      <font size="6" face="ÇlÇr ñæí©,ïΩê¨ñæí©">âÔàıìoò^</font> <br><br>
Å@Å@Å@Å@<font size="4" face="ÇlÇr ÉSÉVÉbÉN">ÉAÉJÉEÉìÉgçÏê¨ÇÃÇΩÇﬂÇ…ïKóvÇ»èÓïÒÇì¸óÕÇµÇƒÇ≠ÇæÇ≥Ç¢</font> <br>
Å@Å@Å@ 
          
          
             <table width="600" border="0">
                 <form action="account.html" method="post">
                      <tr>
                          <th>ñºëO:</th>
                          <td>
                              <input type="text" name="name" value="" size="24">
                          </td>
                      </tr>

                      <tr>
                          <th>ÉtÉäÉKÉi:</th>
                          <td>
                              <input type="text" name="furigana" value="" size="24">
                         </td>
                      </tr>

                      <tr>
                          <th>ÉÅÅ[ÉãÉAÉhÉåÉX:</th>
                          <td>
                              <input type="text" name="mail1" value="" size="24">
                         </td>
                      </tr>

                      <tr>
                          <th>Ç‡Ç§àÍìxì¸óÕÇµÇƒÇ≠ÇæÇ≥Ç¢:</th>
                          <td>
                              <input type="text" name="mail2" value="" size="24">
                         </td>
                      </tr>

Å@Å@Å@Å@Å@Å@Å@Å@Å@Å@Å@<tr>
                          <th>ìdòbî‘çÜ:</th>
                          <td>
                              <input type="text" name="tell" value="" size="24"><br>
                         </td>
                      </tr> 
                 <br>
                      <tr><td>
                         <h4>ÉpÉXÉèÅ[Éh:<br>
                         <p><u>Å¶Ç±Ç±Ç≈ì¸óÕÇµÇΩÉpÉXÉèÅ[ÉhÇ™óòópÉpÉXÉèÅ[ÉhÇ…Ç»ÇËÇ‹Ç∑<u><p><h4>
                              
                          </td>
		
                          <td>
                              <input type="password" name="pass" value="" size="24">
                         </td>
                       </tr>
                      
                      <tr>
                          <th>
                            Å@ÉpÉXÉèÅ[ÉhÇ<br>
                             Ç‡Ç§àÍìxì¸óÕÇµÇƒÇ≠ÇæÇ≥Ç¢:
                          </th>
                          <td>
                              <input type="password" name="pass2" value="" size="24">
                         </td>
                      </tr>

                      <tr>
                          <td colspan="2">
                              <input type="submit" value="ÉAÉJÉEÉìÉgÇÃçÏê¨">
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