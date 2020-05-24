<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-03 22:32:37
  from 'C:\xampp\htdocs\Kalkulator\app\views\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eaf2a651b61c5_87473028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0194292ca663a972a61b23293a0d44de86cb723' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator\\app\\views\\CalcView.html',
      1 => 1588537872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eaf2a651b61c5_87473028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!doctype html>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14144367715eaf2a651a5f05_91448806', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/views/templates/main.tpl"));
}
/* {block 'content'} */
class Block_14144367715eaf2a651a5f05_91448806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14144367715eaf2a651a5f05_91448806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div style="margin: 40px 45%">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcProcess" method="post" class="pure-form pure-form-stacked">
	<fieldset>
		<label for="id_val">Value: </label>
                <input id="id_val" type="text" placeholder="Value" name="val" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->val;?>
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
                <input id="id_ye" type="text" placeholder="years" name="ye" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ye;?>
" />
	</fieldset>	
	<input type="submit" value="Calculate" class="pure-button pure-button-primary" />
</form>	
<div class="messages">
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol id="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>
</div>
<?php
}
}
/* {/block 'content'} */
}
