<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-03 22:31:17
  from 'C:\xampp\htdocs\Kalkulator\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eaf2a15ec6265_82298143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fd3cf8b628a0794579ef62aae861ed2259c9604' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator\\app\\views\\templates\\main.tpl',
      1 => 1588149061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eaf2a15ec6265_82298143 (Smarty_Internal_Template $_smarty_tpl) {
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
                                <li><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcHome" method="post" class="pure-form pure-form-stacked">
                                        <a>Homepage</a>
                                        <input type="submit" value="Calculate" class="pure-button pure-button-primary" />
                                </form></li>
				<li class="active">><a href="#" title="">Calculator</a></li>
			</ul>
		</div>
	</div>
</div>
    
<div class="wrapper">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11614742245eaf2a15ec5be8_82082210', 'content');
?>

</div><!-- content -->

	<div id="copyright">
	<p>&copy; Bartosz Zysk. All rights reserved. | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_11614742245eaf2a15ec5be8_82082210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11614742245eaf2a15ec5be8_82082210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
