<?php /* Smarty version 3.1.24, created on 2015-06-10 06:23:32
         compiled from "/Applications/MAMP/htdocs/VEC/View/test.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15436373965577bbc4300d86_93131632%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f45db74986662a2d4b5e2e04711c18726cbe2781' => 
    array (
      0 => '/Applications/MAMP/htdocs/VEC/View/test.tpl',
      1 => 1433910210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15436373965577bbc4300d86_93131632',
  'variables' => 
  array (
    'abc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5577bbc43963a5_14318327',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5577bbc43963a5_14318327')) {
function content_5577bbc43963a5_14318327 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15436373965577bbc4300d86_93131632';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Smartyサンプル</title>
</head>
<body>

<p>Hello! <?php echo $_smarty_tpl->tpl_vars['abc']->value;?>
</p>

</body>
</html><?php }
}
?>