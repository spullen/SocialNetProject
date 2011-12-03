<?php /* Smarty version 2.6.22, created on 2009-05-14 14:25:44
         compiled from personalInfoEdit.tpl */ ?>
<form method="post" action="updatePersonalInfo.php" onsubmit="updatePersonalInfo(this); return false;">
    <div>
        <div>
            <h4><label for="interests">Interests:</label></h4>
            <textarea id="interests" name="interests"><?php echo $this->_tpl_vars['profile']->personalInfo->interests; ?>
</textarea>
        </div>
        <div>
            <h4><label for="music">Music:</label></h4>
            <textarea id="music" name="music"><?php echo $this->_tpl_vars['profile']->personalInfo->music; ?>
</textarea>
        </div>
        <div>
            <h4><label for="shows">Television Shows:</label></h4>
            <textarea id="shows" name="shows"><?php echo $this->_tpl_vars['profile']->personalInfo->shows; ?>
</textarea>
        </div>
        <div>
            <h4><label for="movies">Movies:</label></h4>
            <textarea id="movies" name="movies"><?php echo $this->_tpl_vars['profile']->personalInfo->movies; ?>
</textarea>
        </div>
        <div>
            <h4><label for="books">Books:</label></h4>
            <textarea id="books" name="books"><?php echo $this->_tpl_vars['profile']->personalInfo->books; ?>
</textarea>
        </div>
    </div>
    <div class="form_item">
        <input type="hidden" name="uid" value="<?php echo $this->_tpl_vars['profile']->id; ?>
" />
        <input type="submit" value="Update Personal Information" />
        <a href="javascript: void(0);" onclick="cancelEdit('personalInfo', 'personalInfoEdit');"><img src="images/icons/cancel.png" border="0"> Cancel Edit</a>
    </div>
</form>