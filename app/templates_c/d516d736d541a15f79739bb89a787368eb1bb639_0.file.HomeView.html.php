<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-29 19:28:35
  from 'C:\xampp\htdocs\Kalkulator\app\Loans\HomeView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea9b943dcba34_10766673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd516d736d541a15f79739bb89a787368eb1bb639' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator\\app\\Loans\\HomeView.html',
      1 => 1588181312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea9b943dcba34_10766673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!doctype html>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19766134655ea9b943dcb175_94599553', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'content'} */
class Block_19766134655ea9b943dcb175_94599553 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19766134655ea9b943dcb175_94599553',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Loans</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 50px 5%; text-align: center;">
	<p>Are you looking for helpful information about taking a loan? You've come to the right place!</p>
</div>	
<div id = "Banner" class="container"> <img src="images/mon.jpg" width="1100" height="666" alt="" /></div>
	
<?php
}
}
/* {/block 'content'} */
}
