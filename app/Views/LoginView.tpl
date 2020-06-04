{extends file="main.tpl"}
{block name=content}

<div style="margin: 40px 45%">
<form action="{$conf->action_url}login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<legend>Please Login</legend>
	<fieldset>
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
			<label for="id_pass">password: </label>
			<input id="id_pass" type="password" name="pass" /><br />
	</fieldset>
        <input type="submit" value="login" class="pure-button pure-button-primary"/>
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