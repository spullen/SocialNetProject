<?php /* Smarty version 2.6.22, created on 2009-05-14 12:41:18
         compiled from friendList.tpl */ ?>
<div id="friendList">
    <ul>
    <?php $_from = $this->_tpl_vars['friends']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['friend']):
?>
        <li><a href="profile.php?uid=<?php echo $this->_tpl_vars['friend']['id']; ?>
"><img src="images/icons/user.png" border="0" /> <?php echo $this->_tpl_vars['friend']['name']; ?>
</a>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
</div>