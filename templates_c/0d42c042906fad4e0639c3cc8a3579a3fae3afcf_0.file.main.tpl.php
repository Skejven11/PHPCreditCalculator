<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-24 21:53:04
  from 'C:\xampp\htdocs\Kalkulator\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea343a0ca6f97_02550762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d42c042906fad4e0639c3cc8a3579a3fae3afcf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator\\templates\\main.tpl',
      1 => 1587757983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea343a0ca6f97_02550762 (Smarty_Internal_Template $_smarty_tpl) {
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
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css">	

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
    
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
        	<div id="banner" class="container"><img src="images/CalcIcon.png" width="64" height="64" alt="" /></div>
			<h1><a href="#">Loan Calculator</a></h1>
		</div>
		<div id="menu">
			<ul>
                                <li><a href="<?php echo '<?php ';?>
print(_APP_ROOT); <?php echo '?>';?>
/app/loans_view.tpl" title="">Homepage</a></li>
								<li class="active">><a href="app/calc_view.tpl" title="">Calculator</a></li>
			</ul>
		</div>
	</div>
</div>
    
<div class="wrapper">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11332867265ea343a0ca6767_22917988', 'content');
?>

</div><!-- content -->

</div>
	<div id="copyright">
	<p>&copy; Bartosz Zysk. All rights reserved. | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_11332867265ea343a0ca6767_22917988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11332867265ea343a0ca6767_22917988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
