<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-05 00:15:56
  from 'C:\xampp\htdocs\Kalkulator\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed9729c5ea096_89281543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fd3cf8b628a0794579ef62aae861ed2259c9604' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator\\app\\views\\templates\\main.tpl',
      1 => 1591308950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed9729c5ea096_89281543 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/default.css">	
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/fonts/fonts.css" rel="stylesheet" type="text/css" media="all" >
    
</head>
<body>
    
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
                    <div id="banner" class="container"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/CalcIcon.png" width="64" height="64" alt="" /></div>
			<h1><a href="#">Loan Calculator</a></h1>
		</div>
		<div id="menu">
			<ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcHome" class="pure-menu-heading pure-menu-link">Homepage</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcProcess" class="pure-menu-heading pure-menu-link">Calculator</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a></li>
			</ul>
		</div>
	</div>
</div>
    
<div class="wrapper">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9581409935ed9729c5e9867_62146783', 'content');
?>

</div>

	<div id="copyright">
	<p>&copy; Bartosz Zysk. All rights reserved. | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_9581409935ed9729c5e9867_62146783 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9581409935ed9729c5e9867_62146783',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}
