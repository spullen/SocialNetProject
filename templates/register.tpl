{include file="header.tpl" title="Register"}
<h2>Register</h2>
<div class="form">
	<div class="errors" id="errors">
		<ul>
		{foreach from=$errors item=error}
			<li>{$error}</li>
		{/foreach}
		</ul>
	</div>
	<form method="post" action="register.php">
		<table>
			<tr>
				<td><input type="text" name="name" id="name" value="{$name}" /></td>
				<td><label for="name">Full Name</label></td>
			</tr>
			<tr>
				<td><input type="text" name="email" id="email" value="{$email}" /></td>
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
						<option value="0" {if $gender == "0"}selected="selected"{/if}>Male</option>
						<option value="1" {if $gender == "1"}selected="selected"{/if}>Female</option>
					</select></td>
				<td><label for="gender">Gender</label></td>
			</tr>
			<tr>
				<td><select name="birthdate_mo">
						<option value="">Month:</option>
						<option value="1" {if $birthdate_mo == "1"}selected="selected"{/if}>Jan</option>
						<option value="2" {if $birthdate_mo == "2"}selected="selected"{/if}>Feb</option>
						<option value="3" {if $birthdate_mo == "3"}selected="selected"{/if}>Mar</option>
						<option value="4" {if $birthdate_mo == "4"}selected="selected"{/if}>Apr</option>
						<option value="5" {if $birthdate_mo == "5"}selected="selected"{/if}>May</option>
						<option value="6" {if $birthdate_mo == "6"}selected="selected"{/if}>Jun</option>
						<option value="7" {if $birthdate_mo == "7"}selected="selected"{/if}>Jul</option>
						<option value="8" {if $birthdate_mo == "8"}selected="selected"{/if}>Aug</option>
						<option value="9" {if $birthdate_mo == "9"}selected="selected"{/if}>Sep</option>
						<option value="10" {if $birthdate_mo == "10"}selected="selected"{/if}>Oct</option>
						<option value="11" {if $birthdate_mo == "11"}selected="selected"{/if}>Nov</option>
						<option value="12" {if $birthdate_mo == "12"}selected="selected"{/if}>Dec</option>
					</select>
					<select name="birthdate_day">
						<option value="">Day:</option>
						<option value="1" {if $birthdate_day == "1"}selected="selected"{/if}>1</option>
						<option value="2" {if $birthdate_day == "2"}selected="selected"{/if}>2</option>
						<option value="3" {if $birthdate_day == "3"}selected="selected"{/if}>3</option>
						<option value="4" {if $birthdate_day == "4"}selected="selected"{/if}>4</option>
						<option value="5" {if $birthdate_day == "5"}selected="selected"{/if}>5</option>
						<option value="6" {if $birthdate_day == "6"}selected="selected"{/if}>6</option>
						<option value="7" {if $birthdate_day == "7"}selected="selected"{/if}>7</option>
						<option value="8" {if $birthdate_day == "8"}selected="selected"{/if}>8</option>
						<option value="9" {if $birthdate_day == "9"}selected="selected"{/if}>9</option>
						<option value="10" {if $birthdate_day == "10"}selected="selected"{/if}>10</option>
						<option value="11" {if $birthdate_day == "11"}selected="selected"{/if}>11</option>
						<option value="12" {if $birthdate_day == "12"}selected="selected"{/if}>12</option>
						<option value="13" {if $birthdate_day == "13"}selected="selected"{/if}>13</option>
						<option value="14" {if $birthdate_day == "14"}selected="selected"{/if}>14</option>
						<option value="15" {if $birthdate_day == "15"}selected="selected"{/if}>15</option>
						<option value="16" {if $birthdate_day == "16"}selected="selected"{/if}>16</option>
						<option value="17" {if $birthdate_day == "17"}selected="selected"{/if}>17</option>
						<option value="18" {if $birthdate_day == "18"}selected="selected"{/if}>18</option>
						<option value="19" {if $birthdate_day == "19"}selected="selected"{/if}>19</option>
						<option value="20" {if $birthdate_day == "20"}selected="selected"{/if}>20</option>
						<option value="21" {if $birthdate_day == "21"}selected="selected"{/if}>21</option>
						<option value="22" {if $birthdate_day == "22"}selected="selected"{/if}>22</option>
						<option value="23" {if $birthdate_day == "23"}selected="selected"{/if}>23</option>
						<option value="24" {if $birthdate_day == "24"}selected="selected"{/if}>24</option>
						<option value="25" {if $birthdate_day == "25"}selected="selected"{/if}>25</option>
						<option value="26" {if $birthdate_day == "26"}selected="selected"{/if}>26</option>
						<option value="27" {if $birthdate_day == "27"}selected="selected"{/if}>27</option>
						<option value="28" {if $birthdate_day == "28"}selected="selected"{/if}>28</option>
						<option value="29" {if $birthdate_day == "29"}selected="selected"{/if}>29</option>
						<option value="30" {if $birthdate_day == "30"}selected="selected"{/if}>30</option>
						<option value="31" {if $birthdate_day == "31"}selected="selected"{/if}>31</option>
					</select>
					<select name="birthdate_yr">
						<option value="">Year:</option>
						<option value="2009" {if $birthdate_yr == "2009"}selected="selected"{/if}>2009</option>
						<option value="2008" {if $birthdate_yr == "2008"}selected="selected"{/if}>2008</option>
						<option value="2007" {if $birthdate_yr == "2007"}selected="selected"{/if}>2007</option>
						<option value="2006" {if $birthdate_yr == "2006"}selected="selected"{/if}>2006</option>
						<option value="2005" {if $birthdate_yr == "2005"}selected="selected"{/if}>2005</option>
						<option value="2004" {if $birthdate_yr == "2004"}selected="selected"{/if}>2004</option>
						<option value="2003" {if $birthdate_yr == "2003"}selected="selected"{/if}>2003</option>
						<option value="2002" {if $birthdate_yr == "2002"}selected="selected"{/if}>2002</option>
						<option value="2001" {if $birthdate_yr == "2001"}selected="selected"{/if}>2001</option>
						<option value="2000" {if $birthdate_yr == "2000"}selected="selected"{/if}>2000</option>
						<option value="1999" {if $birthdate_yr == "1999"}selected="selected"{/if}>1999</option>
						<option value="1998" {if $birthdate_yr == "1998"}selected="selected"{/if}>1998</option>
						<option value="1997" {if $birthdate_yr == "1997"}selected="selected"{/if}>1997</option>
						<option value="1996" {if $birthdate_yr == "1996"}selected="selected"{/if}>1996</option>
						<option value="1995" {if $birthdate_yr == "1995"}selected="selected"{/if}>1995</option>
						<option value="1994" {if $birthdate_yr == "1994"}selected="selected"{/if}>1994</option>
						<option value="1993" {if $birthdate_yr == "1993"}selected="selected"{/if}>1993</option>
						<option value="1992" {if $birthdate_yr == "1992"}selected="selected"{/if}>1992</option>
						<option value="1991" {if $birthdate_yr == "1991"}selected="selected"{/if}>1991</option>
						<option value="1990" {if $birthdate_yr == "1990"}selected="selected"{/if}>1990</option>
						<option value="1989" {if $birthdate_yr == "1989"}selected="selected"{/if}>1989</option>
						<option value="1988" {if $birthdate_yr == "1988"}selected="selected"{/if}>1988</option>
						<option value="1987" {if $birthdate_yr == "1987"}selected="selected"{/if}>1987</option>
						<option value="1986" {if $birthdate_yr == "1986"}selected="selected"{/if}>1986</option>
						<option value="1985" {if $birthdate_yr == "1985"}selected="selected"{/if}>1985</option>
						<option value="1984" {if $birthdate_yr == "1984"}selected="selected"{/if}>1984</option>
						<option value="1983" {if $birthdate_yr == "1983"}selected="selected"{/if}>1983</option>
						<option value="1982" {if $birthdate_yr == "1982"}selected="selected"{/if}>1982</option>
						<option value="1981" {if $birthdate_yr == "1981"}selected="selected"{/if}>1981</option>
						<option value="1980" {if $birthdate_yr == "1980"}selected="selected"{/if}>1980</option>
						<option value="1979" {if $birthdate_yr == "1979"}selected="selected"{/if}>1979</option>
						<option value="1978" {if $birthdate_yr == "1978"}selected="selected"{/if}>1978</option>
						<option value="1977" {if $birthdate_yr == "1977"}selected="selected"{/if}>1977</option>
						<option value="1976" {if $birthdate_yr == "1976"}selected="selected"{/if}>1976</option>
						<option value="1975" {if $birthdate_yr == "1975"}selected="selected"{/if}>1975</option>
						<option value="1974" {if $birthdate_yr == "1974"}selected="selected"{/if}>1974</option>
						<option value="1973" {if $birthdate_yr == "1973"}selected="selected"{/if}>1973</option>
						<option value="1972" {if $birthdate_yr == "1972"}selected="selected"{/if}>1972</option>
						<option value="1971" {if $birthdate_yr == "1971"}selected="selected"{/if}>1971</option>
						<option value="1970" {if $birthdate_yr == "1970"}selected="selected"{/if}>1970</option>
						<option value="1969" {if $birthdate_yr == "1969"}selected="selected"{/if}>1969</option>
						<option value="1968" {if $birthdate_yr == "1968"}selected="selected"{/if}>1968</option>
						<option value="1967" {if $birthdate_yr == "1967"}selected="selected"{/if}>1967</option>
						<option value="1966" {if $birthdate_yr == "1966"}selected="selected"{/if}>1966</option>
						<option value="1965" {if $birthdate_yr == "1965"}selected="selected"{/if}>1965</option>
						<option value="1964" {if $birthdate_yr == "1964"}selected="selected"{/if}>1964</option>
						<option value="1963" {if $birthdate_yr == "1963"}selected="selected"{/if}>1963</option>
						<option value="1962" {if $birthdate_yr == "1962"}selected="selected"{/if}>1962</option>
						<option value="1961" {if $birthdate_yr == "1961"}selected="selected"{/if}>1961</option>
						<option value="1960" {if $birthdate_yr == "1960"}selected="selected"{/if}>1960</option>
						<option value="1959" {if $birthdate_yr == "1959"}selected="selected"{/if}>1959</option>
						<option value="1958" {if $birthdate_yr == "1958"}selected="selected"{/if}>1958</option>
						<option value="1957" {if $birthdate_yr == "1957"}selected="selected"{/if}>1957</option>
						<option value="1956" {if $birthdate_yr == "1956"}selected="selected"{/if}>1956</option>
						<option value="1955" {if $birthdate_yr == "1955"}selected="selected"{/if}>1955</option>
						<option value="1954" {if $birthdate_yr == "1954"}selected="selected"{/if}>1954</option>
						<option value="1953" {if $birthdate_yr == "1953"}selected="selected"{/if}>1953</option>
						<option value="1952" {if $birthdate_yr == "1952"}selected="selected"{/if}>1952</option>
						<option value="1951" {if $birthdate_yr == "1951"}selected="selected"{/if}>1951</option>
						<option value="1950" {if $birthdate_yr == "1950"}selected="selected"{/if}>1950</option>
					</select>
				</td>
				<td>Birthdate</td>
			</tr>
			<tr>
				<td><input type="text" name="hometown" id="hometown" value="{$hometown}" /></td>
				<td><label for="hometown">Hometown</label></td>
			</tr>
		</table>
		<div class="form_item">
			<input type="submit" value="Register" />
		</div>
	</form>
</div>
{include file="footer.tpl"}