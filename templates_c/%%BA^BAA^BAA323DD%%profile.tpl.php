<?php /* Smarty version 2.6.22, created on 2009-05-14 15:11:50
         compiled from profile.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('title' => 'Profile')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="profile">
  <div class="profileHeading"><span class="profileName"><?php echo $this->_tpl_vars['profile']->name; ?>
</span> <span id="statusMessage"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "status.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></span></div>
  <?php if ($this->_tpl_vars['profile']->id == $this->_tpl_vars['user']->id): ?>
  <div class="whatUp">
  <form action="updateStatus.php" onsubmit="updateStatusMessage(this); $('statusInput').value = ''; return false;">
  <div style="display:none; padding: 0; margin: 0;"><input type="hidden" name="uid" value="<?php echo $this->_tpl_vars['profile']->id; ?>
" /></div>
  <table><tr><td><input type="text" id="statusInput" name="message" class="statusInput" /></td><td><input type="submit" value="Update Status" /></td></tr></table>
  </form>
  </div>
  <?php endif; ?>
  <div id="profileSide">
    <div id="profilePhoto">
      <img src="images/profilePhotos/<?php echo $this->_tpl_vars['profile']->profilePicture->filename; ?>
" />
      <?php if ($this->_tpl_vars['user']->id == $this->_tpl_vars['profile']->id): ?>
      <div><a href="picture.php?uid=<?php echo $this->_tpl_vars['profile']->id; ?>
"><img src="images/icons/picture_edit.png" border="0" /> Change Profile Photo</a></div>
      <?php endif; ?>
    </div>
    <div id="friends">
        <div class="sectionHeader">
          <h3>Friends</h3>
          <div id="friendLink">
          <?php if ($this->_tpl_vars['canFriend']): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addFriendLink.tpl", 'smarty_include_vars' => array('uid' => $this->_tpl_vars['user']->id,'fid' => $this->_tpl_vars['profile']->id)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php else: ?>
            <?php if ($this->_tpl_vars['user']->id != $this->_tpl_vars['profile']->id): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "removeFriendLink.tpl", 'smarty_include_vars' => array('uid' => $this->_tpl_vars['user']->id,'fid' => $this->_tpl_vars['profile']->id)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
          <?php endif; ?>
          </div>
        </div>
        <div class="spacer"></div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "friendList.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="spacer"></div>
        <div>
        <a href="browseFriends.php?uid=<?php echo $this->_tpl_vars['profile']->id; ?>
&init=1" rel="height=500" class="lbOn" onclick="return false;"><img src="images/icons/group_link.png" border="0" /> Browse Friends</a>
        </div>
        <?php if ($this->_tpl_vars['user']->id == $this->_tpl_vars['profile']->id): ?>
        <div class="spacer"></div>
        <div>
        <a href="recommendations.php" rel="height=450" class="lbOn" onclick="return false;"><img src="images/icons/group_go.png" border="0" /> Friend Recommendations</a>
        </div>
        <?php endif; ?>
    </div>
  </div>
  <div id="profileInformation">
    <div id="profileNav">
        <ul>
            <li id="info_0_link" class="selected"><a href="javascript: void(0);" onclick="tabSwap('info', 0, 2);">Info</a></li>
            <li id="info_1_link"><a href="javascript: void(0);" onclick="tabSwap('info', 1, 2);">Wall</a></li>
        </ul>
    </div>
    <div id="profileTabContent">
        <div id="info_0">
            <div class="section">
                <div class="sectionHeader">
                    <h3>About Me</h3>
                </div>
                <div id="aboutMe">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "aboutMe.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
                <div id="aboutMeEdit"></div>
            </div>
            <div class="section">
                <div class="sectionHeader">
                    <h3>Personal Information</h3>
                </div>
                <div id="personalInfo">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "personalInfo.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
                <div id="personalInfoEdit"></div>
            </div>
        </div>
        <div id="info_1" style="display: none;">
            Wall posts will go here (placeholder for now)
        </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>