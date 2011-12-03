<?php /* Smarty version 2.6.22, created on 2009-05-14 13:26:39
         compiled from browseFriends.tpl */ ?>
<h2>Browse Friends</h2>
<div id="indicator" style="display: none;"><img src="images/ajax-indicator.gif" border="0" /></div>
<div id="browseFriendList">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "friendList.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<div class="spacer"></div>
<div class="pagination_links">
<?php $_from = $this->_tpl_vars['pageNumbers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pageNumber']):
?>
    <a href="javascript: void(0);" onclick="updateFriendList('browseFriendList', 'browseFriends.php', <?php echo $this->_tpl_vars['uid']; ?>
, <?php echo $this->_tpl_vars['pageNumber']; ?>
); return false;" id="browseFriendList_<?php echo $this->_tpl_vars['pageNumber']; ?>
" <?php if ($this->_tpl_vars['pageNumber'] == 1): ?>class="current"<?php endif; ?>><?php echo $this->_tpl_vars['pageNumber']; ?>
</a> &nbsp;
<?php endforeach; endif; unset($_from); ?>
<div id="currentPage" style="display: none; margin: 0; padding: 0;" class="1"></div>
</div>