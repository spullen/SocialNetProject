<?php /* Smarty version 2.6.22, created on 2009-05-14 12:34:13
         compiled from friendStatusList.tpl */ ?>
<?php if (count ( $this->_tpl_vars['statuses'] ) > 0): ?>
<?php $_from = $this->_tpl_vars['statuses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['status']):
?>
    <div class="friend_status">
        <h4><a href="profile.php?uid=<?php echo $this->_tpl_vars['status']['userID']; ?>
"><?php echo $this->_tpl_vars['status']['name']; ?>
</a> at <i class="statusTime"><?php echo $this->_tpl_vars['status']['createdAt']; ?>
</i></h4>
        <div class="status_message">
            <?php echo $this->_tpl_vars['status']['message']; ?>

        </div>
    </div>
<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
    No friends have statuses posted.
<?php endif; ?>