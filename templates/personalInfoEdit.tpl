<form method="post" action="updatePersonalInfo.php" onsubmit="updatePersonalInfo(this); return false;">
    <div>
        <div>
            <h4><label for="interests">Interests:</label></h4>
            <textarea id="interests" name="interests">{$profile->personalInfo->interests}</textarea>
        </div>
        <div>
            <h4><label for="music">Music:</label></h4>
            <textarea id="music" name="music">{$profile->personalInfo->music}</textarea>
        </div>
        <div>
            <h4><label for="shows">Television Shows:</label></h4>
            <textarea id="shows" name="shows">{$profile->personalInfo->shows}</textarea>
        </div>
        <div>
            <h4><label for="movies">Movies:</label></h4>
            <textarea id="movies" name="movies">{$profile->personalInfo->movies}</textarea>
        </div>
        <div>
            <h4><label for="books">Books:</label></h4>
            <textarea id="books" name="books">{$profile->personalInfo->books}</textarea>
        </div>
    </div>
    <div class="form_item">
        <input type="hidden" name="uid" value="{$profile->id}" />
        <input type="submit" value="Update Personal Information" />
        <a href="javascript: void(0);" onclick="cancelEdit('personalInfo', 'personalInfoEdit');"><img src="images/icons/cancel.png" border="0"> Cancel Edit</a>
    </div>
</form>