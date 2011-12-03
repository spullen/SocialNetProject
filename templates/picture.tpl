{include file="header.tpl" title="Profile Picture"}
<div>
	<div id="errors">
		<ul>
		{foreach from=$errors item=error}
			<li>{$error}</li>
		{/foreach}
		</ul>
	</div>
	<form action="uploadPicture.php" method="post" enctype="multipart/form-data">
		<div>
			<input type="file" name="picture" id="picture" />&nbsp;<input type="submit" value="Upload Image" />
			<div class="tip">* Image must be jpeg</div>
		</div>
	</form>
</div>
<div id="pictures">
	{include file="pictureList.tpl"}
</div>
{include file="footer.tpl"}