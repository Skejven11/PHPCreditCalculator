<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 23:49:37
  from 'C:\xampp\htdocs\Kalkulator\app\views\HomeView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec99a710b1ae1_85824078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd351724e7238a8f10db9f092990e0620667be796' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator\\app\\views\\HomeView.tpl',
      1 => 1588538408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec99a710b1ae1_85824078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!doctype html>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2859272515ec99a710b10f1_39277713', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/views/templates/main.tpl"));
}
/* {block 'content'} */
class Block_2859272515ec99a710b10f1_39277713 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2859272515ec99a710b10f1_39277713',
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
