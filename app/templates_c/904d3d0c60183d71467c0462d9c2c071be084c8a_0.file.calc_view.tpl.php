<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-24 22:10:43
  from 'C:\xampp\htdocs\Kalkulator\app\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea347c3873ff9_72146355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '904d3d0c60183d71467c0462d9c2c071be084c8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator\\app\\calc_view.tpl',
      1 => 1587758183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea347c3873ff9_72146355 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!doctype html>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14283842335ea347c38669e8_99824438', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'content'} */
class Block_14283842335ea347c38669e8_99824438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14283842335ea347c38669e8_99824438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Calculator</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="margin: 50px 45%">
<form action="/Kalkulator/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<fieldset>
		<label for="id_val">Value: </label>
		<input id="id_val" type="text" placeholder="Value" name="val" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" />
		<label for="id_in">Interest: </label>
		<select name="in">
			<option value="0.01">1%</option>
			<option value="0.02">2%</option>
			<option value="0.03">3%</option>
			<option value="0.04">4%</option>
			<option value="0.05">5%</option>
			<option value="0.06">6%</option>
			<option value="0.07">7%</option>
			<option value="0.08">8%</option>
			<option value="0.09">9%</option>
			<option value="0.1">10%</option>
		</select>
		<label for="id_ye">Years: </label>
		<input id="id_ye" type="text" name="ye" value="<?php echo $_smarty_tpl->tpl_vars['ye']->value;?>
" /><br />
	</fieldset>	
	<input type="submit" value="Calculate" class="pure-button pure-button-primary" />
</form>	
</div>
<?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
