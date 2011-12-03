<?php /* Smarty version 2.6.22, created on 2009-05-14 12:41:33
         compiled from register.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('title' => 'Register')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h2>Register</h2>
<div class="form">
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
	<form method="post" action="register.php">
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
				<td><input type="password" name="password" id="password" /></td>
				<td><label for="password">Password</label></td>
			</tr>
			<tr>
				<td><input type="password" name="passwordConfirmation" id="passwordConfirmation" /></td>
				<td><label for="passwordConfirmation">Password Confirmation</label></td>
			</tr>
			<tr>
				<td><select name="gender" id="gender">
						<option value="">Select Gender:</option>
						<option value="0" <?php if ($this->_tpl_vars['gender'] == '0'): ?>selected="selected"<?php endif; ?>>Male</option>
						<option value="1" <?php if ($this->_tpl_vars['gender'] == '1'): ?>selected="selected"<?php endif; ?>>Female</option>
					</select></td>
				<td><label for="gender">Gender</label></td>
			</tr>
			<tr>
				<td><select name="birthdate_mo">
						<option value="">Month:</option>
						<option value="1" <?php if ($this->_tpl_vars['birthdate_mo'] == '1'): ?>selected="selected"<?php endif; ?>>Jan</option>
						<option value="2" <?php if ($this->_tpl_vars['birthdate_mo'] == '2'): ?>selected="selected"<?php endif; ?>>Feb</option>
						<option value="3" <?php if ($this->_tpl_vars['birthdate_mo'] == '3'): ?>selected="selected"<?php endif; ?>>Mar</option>
						<option value="4" <?php if ($this->_tpl_vars['birthdate_mo'] == '4'): ?>selected="selected"<?php endif; ?>>Apr</option>
						<option value="5" <?php if ($this->_tpl_vars['birthdate_mo'] == '5'): ?>selected="selected"<?php endif; ?>>May</option>
						<option value="6" <?php if ($this->_tpl_vars['birthdate_mo'] == '6'): ?>selected="selected"<?php endif; ?>>Jun</option>
						<option value="7" <?php if ($this->_tpl_vars['birthdate_mo'] == '7'): ?>selected="selected"<?php endif; ?>>Jul</option>
						<option value="8" <?php if ($this->_tpl_vars['birthdate_mo'] == '8'): ?>selected="selected"<?php endif; ?>>Aug</option>
						<option value="9" <?php if ($this->_tpl_vars['birthdate_mo'] == '9'): ?>selected="selected"<?php endif; ?>>Sep</option>
						<option value="10" <?php if ($this->_tpl_vars['birthdate_mo'] == '10'): ?>selected="selected"<?php endif; ?>>Oct</option>
						<option value="11" <?php if ($this->_tpl_vars['birthdate_mo'] == '11'): ?>selected="selected"<?php endif; ?>>Nov</option>
						<option value="12" <?php if ($this->_tpl_vars['birthdate_mo'] == '12'): ?>selected="selected"<?php endif; ?>>Dec</option>
					</select>
					<select name="birthdate_day">
						<option value="">Day:</option>
						<option value="1" <?php if ($this->_tpl_vars['birthdate_day'] == '1'): ?>selected="selected"<?php endif; ?>>1</option>
						<option value="2" <?php if ($this->_tpl_vars['birthdate_day'] == '2'): ?>selected="selected"<?php endif; ?>>2</option>
						<option value="3" <?php if ($this->_tpl_vars['birthdate_day'] == '3'): ?>selected="selected"<?php endif; ?>>3</option>
						<option value="4" <?php if ($this->_tpl_vars['birthdate_day'] == '4'): ?>selected="selected"<?php endif; ?>>4</option>
						<option value="5" <?php if ($this->_tpl_vars['birthdate_day'] == '5'): ?>selected="selected"<?php endif; ?>>5</option>
						<option value="6" <?php if ($this->_tpl_vars['birthdate_day'] == '6'): ?>selected="selected"<?php endif; ?>>6</option>
						<option value="7" <?php if ($this->_tpl_vars['birthdate_day'] == '7'): ?>selected="selected"<?php endif; ?>>7</option>
						<option value="8" <?php if ($this->_tpl_vars['birthdate_day'] == '8'): ?>selected="selected"<?php endif; ?>>8</option>
						<option value="9" <?php if ($this->_tpl_vars['birthdate_day'] == '9'): ?>selected="selected"<?php endif; ?>>9</option>
						<option value="10" <?php if ($this->_tpl_vars['birthdate_day'] == '10'): ?>selected="selected"<?php endif; ?>>10</option>
						<option value="11" <?php if ($this->_tpl_vars['birthdate_day'] == '11'): ?>selected="selected"<?php endif; ?>>11</option>
						<option value="12" <?php if ($this->_tpl_vars['birthdate_day'] == '12'): ?>selected="selected"<?php endif; ?>>12</option>
						<option value="13" <?php if ($this->_tpl_vars['birthdate_day'] == '13'): ?>selected="selected"<?php endif; ?>>13</option>
						<option value="14" <?php if ($this->_tpl_vars['birthdate_day'] == '14'): ?>selected="selected"<?php endif; ?>>14</option>
						<option value="15" <?php if ($this->_tpl_vars['birthdate_day'] == '15'): ?>selected="selected"<?php endif; ?>>15</option>
						<option value="16" <?php if ($this->_tpl_vars['birthdate_day'] == '16'): ?>selected="selected"<?php endif; ?>>16</option>
						<option value="17" <?php if ($this->_tpl_vars['birthdate_day'] == '17'): ?>selected="selected"<?php endif; ?>>17</option>
						<option value="18" <?php if ($this->_tpl_vars['birthdate_day'] == '18'): ?>selected="selected"<?php endif; ?>>18</option>
						<option value="19" <?php if ($this->_tpl_vars['birthdate_day'] == '19'): ?>selected="selected"<?php endif; ?>>19</option>
						<option value="20" <?php if ($this->_tpl_vars['birthdate_day'] == '20'): ?>selected="selected"<?php endif; ?>>20</option>
						<option value="21" <?php if ($this->_tpl_vars['birthdate_day'] == '21'): ?>selected="selected"<?php endif; ?>>21</option>
						<option value="22" <?php if ($this->_tpl_vars['birthdate_day'] == '22'): ?>selected="selected"<?php endif; ?>>22</option>
						<option value="23" <?php if ($this->_tpl_vars['birthdate_day'] == '23'): ?>selected="selected"<?php endif; ?>>23</option>
						<option value="24" <?php if ($this->_tpl_vars['birthdate_day'] == '24'): ?>selected="selected"<?php endif; ?>>24</option>
						<option value="25" <?php if ($this->_tpl_vars['birthdate_day'] == '25'): ?>selected="selected"<?php endif; ?>>25</option>
						<option value="26" <?php if ($this->_tpl_vars['birthdate_day'] == '26'): ?>selected="selected"<?php endif; ?>>26</option>
						<option value="27" <?php if ($this->_tpl_vars['birthdate_day'] == '27'): ?>selected="selected"<?php endif; ?>>27</option>
						<option value="28" <?php if ($this->_tpl_vars['birthdate_day'] == '28'): ?>selected="selected"<?php endif; ?>>28</option>
						<option value="29" <?php if ($this->_tpl_vars['birthdate_day'] == '29'): ?>selected="selected"<?php endif; ?>>29</option>
						<option value="30" <?php if ($this->_tpl_vars['birthdate_day'] == '30'): ?>selected="selected"<?php endif; ?>>30</option>
						<option value="31" <?php if ($this->_tpl_vars['birthdate_day'] == '31'): ?>selected="selected"<?php endif; ?>>31</option>
					</select>
					<select name="birthdate_yr">
						<option value="">Year:</option>
						<option value="2009" <?php if ($this->_tpl_vars['birthdate_yr'] == '2009'): ?>selected="selected"<?php endif; ?>>2009</option>
						<option value="2008" <?php if ($this->_tpl_vars['birthdate_yr'] == '2008'): ?>selected="selected"<?php endif; ?>>2008</option>
						<option value="2007" <?php if ($this->_tpl_vars['birthdate_yr'] == '2007'): ?>selected="selected"<?php endif; ?>>2007</option>
						<option value="2006" <?php if ($this->_tpl_vars['birthdate_yr'] == '2006'): ?>selected="selected"<?php endif; ?>>2006</option>
						<option value="2005" <?php if ($this->_tpl_vars['birthdate_yr'] == '2005'): ?>selected="selected"<?php endif; ?>>2005</option>
						<option value="2004" <?php if ($this->_tpl_vars['birthdate_yr'] == '2004'): ?>selected="selected"<?php endif; ?>>2004</option>
						<option value="2003" <?php if ($this->_tpl_vars['birthdate_yr'] == '2003'): ?>selected="selected"<?php endif; ?>>2003</option>
						<option value="2002" <?php if ($this->_tpl_vars['birthdate_yr'] == '2002'): ?>selected="selected"<?php endif; ?>>2002</option>
						<option value="2001" <?php if ($this->_tpl_vars['birthdate_yr'] == '2001'): ?>selected="selected"<?php endif; ?>>2001</option>
						<option value="2000" <?php if ($this->_tpl_vars['birthdate_yr'] == '2000'): ?>selected="selected"<?php endif; ?>>2000</option>
						<option value="1999" <?php if ($this->_tpl_vars['birthdate_yr'] == '1999'): ?>selected="selected"<?php endif; ?>>1999</option>
						<option value="1998" <?php if ($this->_tpl_vars['birthdate_yr'] == '1998'): ?>selected="selected"<?php endif; ?>>1998</option>
						<option value="1997" <?php if ($this->_tpl_vars['birthdate_yr'] == '1997'): ?>selected="selected"<?php endif; ?>>1997</option>
						<option value="1996" <?php if ($this->_tpl_vars['birthdate_yr'] == '1996'): ?>selected="selected"<?php endif; ?>>1996</option>
						<option value="1995" <?php if ($this->_tpl_vars['birthdate_yr'] == '1995'): ?>selected="selected"<?php endif; ?>>1995</option>
						<option value="1994" <?php if ($this->_tpl_vars['birthdate_yr'] == '1994'): ?>selected="selected"<?php endif; ?>>1994</option>
						<option value="1993" <?php if ($this->_tpl_vars['birthdate_yr'] == '1993'): ?>selected="selected"<?php endif; ?>>1993</option>
						<option value="1992" <?php if ($this->_tpl_vars['birthdate_yr'] == '1992'): ?>selected="selected"<?php endif; ?>>1992</option>
						<option value="1991" <?php if ($this->_tpl_vars['birthdate_yr'] == '1991'): ?>selected="selected"<?php endif; ?>>1991</option>
						<option value="1990" <?php if ($this->_tpl_vars['birthdate_yr'] == '1990'): ?>selected="selected"<?php endif; ?>>1990</option>
						<option value="1989" <?php if ($this->_tpl_vars['birthdate_yr'] == '1989'): ?>selected="selected"<?php endif; ?>>1989</option>
						<option value="1988" <?php if ($this->_tpl_vars['birthdate_yr'] == '1988'): ?>selected="selected"<?php endif; ?>>1988</option>
						<option value="1987" <?php if ($this->_tpl_vars['birthdate_yr'] == '1987'): ?>selected="selected"<?php endif; ?>>1987</option>
						<option value="1986" <?php if ($this->_tpl_vars['birthdate_yr'] == '1986'): ?>selected="selected"<?php endif; ?>>1986</option>
						<option value="1985" <?php if ($this->_tpl_vars['birthdate_yr'] == '1985'): ?>selected="selected"<?php endif; ?>>1985</option>
						<option value="1984" <?php if ($this->_tpl_vars['birthdate_yr'] == '1984'): ?>selected="selected"<?php endif; ?>>1984</option>
						<option value="1983" <?php if ($this->_tpl_vars['birthdate_yr'] == '1983'): ?>selected="selected"<?php endif; ?>>1983</option>
						<option value="1982" <?php if ($this->_tpl_vars['birthdate_yr'] == '1982'): ?>selected="selected"<?php endif; ?>>1982</option>
						<option value="1981" <?php if ($this->_tpl_vars['birthdate_yr'] == '1981'): ?>selected="selected"<?php endif; ?>>1981</option>
						<option value="1980" <?php if ($this->_tpl_vars['birthdate_yr'] == '1980'): ?>selected="selected"<?php endif; ?>>1980</option>
						<option value="1979" <?php if ($this->_tpl_vars['birthdate_yr'] == '1979'): ?>selected="selected"<?php endif; ?>>1979</option>
						<option value="1978" <?php if ($this->_tpl_vars['birthdate_yr'] == '1978'): ?>selected="selected"<?php endif; ?>>1978</option>
						<option value="1977" <?php if ($this->_tpl_vars['birthdate_yr'] == '1977'): ?>selected="selected"<?php endif; ?>>1977</option>
						<option value="1976" <?php if ($this->_tpl_vars['birthdate_yr'] == '1976'): ?>selected="selected"<?php endif; ?>>1976</option>
						<option value="1975" <?php if ($this->_tpl_vars['birthdate_yr'] == '1975'): ?>selected="selected"<?php endif; ?>>1975</option>
						<option value="1974" <?php if ($this->_tpl_vars['birthdate_yr'] == '1974'): ?>selected="selected"<?php endif; ?>>1974</option>
						<option value="1973" <?php if ($this->_tpl_vars['birthdate_yr'] == '1973'): ?>selected="selected"<?php endif; ?>>1973</option>
						<option value="1972" <?php if ($this->_tpl_vars['birthdate_yr'] == '1972'): ?>selected="selected"<?php endif; ?>>1972</option>
						<option value="1971" <?php if ($this->_tpl_vars['birthdate_yr'] == '1971'): ?>selected="selected"<?php endif; ?>>1971</option>
						<option value="1970" <?php if ($this->_tpl_vars['birthdate_yr'] == '1970'): ?>selected="selected"<?php endif; ?>>1970</option>
						<option value="1969" <?php if ($this->_tpl_vars['birthdate_yr'] == '1969'): ?>selected="selected"<?php endif; ?>>1969</option>
						<option value="1968" <?php if ($this->_tpl_vars['birthdate_yr'] == '1968'): ?>selected="selected"<?php endif; ?>>1968</option>
						<option value="1967" <?php if ($this->_tpl_vars['birthdate_yr'] == '1967'): ?>selected="selected"<?php endif; ?>>1967</option>
						<option value="1966" <?php if ($this->_tpl_vars['birthdate_yr'] == '1966'): ?>selected="selected"<?php endif; ?>>1966</option>
						<option value="1965" <?php if ($this->_tpl_vars['birthdate_yr'] == '1965'): ?>selected="selected"<?php endif; ?>>1965</option>
						<option value="1964" <?php if ($this->_tpl_vars['birthdate_yr'] == '1964'): ?>selected="selected"<?php endif; ?>>1964</option>
						<option value="1963" <?php if ($this->_tpl_vars['birthdate_yr'] == '1963'): ?>selected="selected"<?php endif; ?>>1963</option>
						<option value="1962" <?php if ($this->_tpl_vars['birthdate_yr'] == '1962'): ?>selected="selected"<?php endif; ?>>1962</option>
						<option value="1961" <?php if ($this->_tpl_vars['birthdate_yr'] == '1961'): ?>selected="selected"<?php endif; ?>>1961</option>
						<option value="1960" <?php if ($this->_tpl_vars['birthdate_yr'] == '1960'): ?>selected="selected"<?php endif; ?>>1960</option>
						<option value="1959" <?php if ($this->_tpl_vars['birthdate_yr'] == '1959'): ?>selected="selected"<?php endif; ?>>1959</option>
						<option value="1958" <?php if ($this->_tpl_vars['birthdate_yr'] == '1958'): ?>selected="selected"<?php endif; ?>>1958</option>
						<option value="1957" <?php if ($this->_tpl_vars['birthdate_yr'] == '1957'): ?>selected="selected"<?php endif; ?>>1957</option>
						<option value="1956" <?php if ($this->_tpl_vars['birthdate_yr'] == '1956'): ?>selected="selected"<?php endif; ?>>1956</option>
						<option value="1955" <?php if ($this->_tpl_vars['birthdate_yr'] == '1955'): ?>selected="selected"<?php endif; ?>>1955</option>
						<option value="1954" <?php if ($this->_tpl_vars['birthdate_yr'] == '1954'): ?>selected="selected"<?php endif; ?>>1954</option>
						<option value="1953" <?php if ($this->_tpl_vars['birthdate_yr'] == '1953'): ?>selected="selected"<?php endif; ?>>1953</option>
						<option value="1952" <?php if ($this->_tpl_vars['birthdate_yr'] == '1952'): ?>selected="selected"<?php endif; ?>>1952</option>
						<option value="1951" <?php if ($this->_tpl_vars['birthdate_yr'] == '1951'): ?>selected="selected"<?php endif; ?>>1951</option>
						<option value="1950" <?php if ($this->_tpl_vars['birthdate_yr'] == '1950'): ?>selected="selected"<?php endif; ?>>1950</option>
					</select>
				</td>
				<td>Birthdate</td>
			</tr>
			<tr>
				<td><input type="text" name="hometown" id="hometown" value="<?php echo $this->_tpl_vars['hometown']; ?>
" /></td>
				<td><label for="hometown">Hometown</label></td>
			</tr>
		</table>
		<div class="form_item">
			<input type="submit" value="Register" />
		</div>
	</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>