<form method="post" action="updateAboutMe.php" 
      onsubmit="updateAboutMe(this); return false;">
    <table>
        <tr>
            <td class="align_right bold"><label for="name">Name:</label></td>
            <td><input id="name" name="name" value="{$profile->name}" /></td>
        </tr>
        <tr>
            <td class="align_right bold"><label for="currentLocation">Current Location:</label></td>
            <td><input id="currentLocation" name="currentLocation" value="{$profile->currentLocation}" /></td>
        </tr>
    </table>
    <div class="form_item">
        <input type="hidden" name="uid" value="{$profile->id}" />
        <input type="submit" value="Update About Me" />
        <a href="javascript: void(0);" onclick="cancelEdit('aboutMe', 'aboutMeEdit');"><img src="images/icons/cancel.png" border="0"> Cancel Edit</a>
    </div>
</form>