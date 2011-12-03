<?php /* Smarty version 2.6.22, created on 2009-05-14 12:35:21
         compiled from friendRecommendations.tpl */ ?>
<h2>Friend Recommendation</h2>
<?php if (count ( $this->_tpl_vars['recommendations'] ) > 0): ?>
<table class="friendRecommendationList">
    <tr>
        <th>Name</th>
        <th>Number of Mutual Friends</th>
    </tr>
    <?php $_from = $this->_tpl_vars['recommendations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['recommendation']):
?>
        <tr>
            <td><a href="profile.php?uid=<?php echo $this->_tpl_vars['recommendation']['id']; ?>
"><img src="images/icons/user.png" border="0" /> <?php echo $this->_tpl_vars['recommendation']['name']; ?>
</a></td>
            <td><?php echo $this->_tpl_vars['recommendation']['FriendedCount']; ?>
</td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>
</table>
<?php else: ?>
    No friend recommendations at this time
<?php endif; ?>