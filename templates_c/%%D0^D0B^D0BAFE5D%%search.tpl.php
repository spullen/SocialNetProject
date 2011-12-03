<?php /* Smarty version 2.6.22, created on 2009-05-14 14:44:58
         compiled from search.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('title' => 'Search')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h2>Search</h2>
<div class="search">
	<form action="sresults.php" method="get">
       <table>
			<tr>
				<td><input type="text" name="name" id="name" value="<?php echo $this->_tpl_vars['name']; ?>
" /></td>
				<td><label for="name">Full Name</label></td>
			</tr>
			<tr>
				<td><input type="text" name="email" id="email" value="<?php echo $this->_tpl_vars['email']; ?>
" /></td>
				<td><label for="email">Email</label></td>
			</tr>
            <tr>
				<td><select name="gender" id="gender">
						<option value="">Select Gender:</option>
						<option value="0">Male</option>
						<option value="1">Female</option>
					</select></td>
				<td><label for="gender">Gender</label></td>
			</tr>
            <tr>
				<td><input type="text" name="hometown" id="hometown" /></td>
				<td><label for="hometown">Hometown</label></td>
			</tr>
            <tr>
                <td><input type="text" name="interests" id="interests" /></td>
                <td><label for="interests">Interests</label></td>
            </tr>
            <tr>
                <td><input type="text" name="music" id="music" /></td>
                <td><label for="music">Music</label></td>
            </tr>
            <tr>
                <td><input type="text" name="tv" id="tv" /></td>
                <td><label for="tv">TV</label></td>
            </tr>
            <tr>
                <td><input type="text" name="movies" id="movies" /></td>
                <td><label for="movies">Movies</label></td>
            </tr>
            <tr>
                <td><input type="text" name="books" id="books" /></td>
                <td><label for="books">Books</label></td>
            </tr>
		</table>
		<div class="form_item">
			<input type="submit" value="Search" />
		</div>
	</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>