<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-24 10:29:39
  from 'C:\xampp\htdocs\Kalkulator\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eca307375ef22_06969258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ff7635da9f98cbc21938e6950c6788a8d0dfce1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator\\app\\views\\CalcView.tpl',
      1 => 1590308977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eca307375ef22_06969258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18939244245eca3073751818_49499361', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_18939244245eca3073751818_49499361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18939244245eca3073751818_49499361',
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
	<h4>Errors occured: </h4>
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
	<h4>Info: </h4>
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
	<h4>Result</h4>
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
