<?php /* Smarty version 2.6.22, created on 2009-05-14 12:34:06
         compiled from login.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('title' => 'Login')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="form">
	<h2>Login</h2>
	<div class="errors" id="errors">
		<ul>
		<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>
			<li><?php echo $this->_tpl_vars['error']; ?>
</li>
		<?php endforeach; endif; unset($_from); ?>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>