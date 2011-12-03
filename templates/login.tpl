{include file="header.tpl" title="Login"}
<div class="form">
	<h2>Login</h2>
	<div class="errors" id="errors">
		<ul>
		{foreach from=$errors item=error}
			<li>{$error}</li>
		{/foreach}
		</ul>
	</div>
	<form method="post" action="login.php">
		<table>
			<tr>
				<td><input type="text" name="email" id="email" /></td>
				<td><label for="email">Email</label></td>
			</tr>
			<tr>
				<td><input type="password" name="password" id="password" /></td>
				<td><label for="password">Password</label></td>
			</tr>
		</table>
		<div class="form_item">
			<input type="submit" value="Login" />
		</div>
	</form>
</div>
{include file="footer.tpl"}