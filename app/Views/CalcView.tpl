{extends file="main.tpl"}
{block name=content}

<div style="margin: 40px 45%">
<form action="{$conf->action_root}calcProcess" method="post" class="pure-form pure-form-stacked">
	<fieldset>
		<label for="id_val">Value: </label>
                <input id="id_val" type="text" placeholder="Value" name="val" value="{$form->val}" />
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
                <input id="id_ye" type="text" placeholder="years" name="ye" value="{$form->ye}" />
	</fieldset>	
	<input type="submit" value="Calculate" class="pure-button pure-button-primary" />
</form>	
<div class="messages">
{if $msgs->isError()}
	<h4>Errors occured: </h4>
	<ol id="err">
	{foreach  $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if $msgs->isInfo()}
	<h4>Info: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Result</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>
</div>
{/block}