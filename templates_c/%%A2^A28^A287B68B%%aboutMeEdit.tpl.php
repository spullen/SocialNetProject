<?php /* Smarty version 2.6.22, created on 2009-05-14 14:25:32
         compiled from aboutMeEdit.tpl */ ?>
<form method="post" action="updateAboutMe.php" 
      onsubmit="updateAboutMe(this); return false;">
    <table>
        <tr>
            <td class="align_right bold"><label for="name">Name:</label></td>
            <td><input id="name" name="name" value="<?php echo $this->_tpl_vars['profile']->name; ?>
" /></td>
        </tr>
        <tr>
            <td class="align_right bold"><label for="currentLocation">Current Location:</label></td>
            <td><input id="currentLocation" name="currentLocation" value="<?php echo $this->_tpl_vars['profile']->currentLocation; ?>
" /></td>
        </tr>
    </table>
    <div class="form_item">
        <input type="hidden" name="uid" value="<?php echo $this->_tpl_vars['profile']->id; ?>
" />
        <input type="submit" value="Update About Me" />
        <a href="javascript: void(0);" onclick="cancelEdit('aboutMe', 'aboutMeEdit');"><img src="images/icons/cancel.png" border="0"> Cancel Edit</a>
    </div>
</form>