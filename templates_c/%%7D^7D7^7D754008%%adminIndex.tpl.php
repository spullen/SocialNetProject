<?php /* Smarty version 2.6.22, created on 2009-05-14 12:39:17
         compiled from adminIndex.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'adminIndex.tpl', 35, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('title' => 'Admin Home')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="statistics">
    <div class="userStats">
        <h2>User Statistics</h2>
        <table>
            <tr>
                <td class="align_right">Number of Users <img src="../images/icons/user_red.png" border="0" />:</td>
                <td><?php echo $this->_tpl_vars['userCount']; ?>
</td>
            </tr>
            <tr>
                <td class="align_right">Number of Friendships <img src="../images/icons/group_link.png" border="0" />:</td>
                <td><?php echo $this->_tpl_vars['numOfFriends']; ?>
</td>
            </tr>
            <tr>
                <td class="align_right">Number of male users <img src="../images/icons/male.png" border="0" />:</td>
                <td><?php echo $this->_tpl_vars['maleUserCount']; ?>
</td>
            </tr>
            <tr>
                <td class="align_right">Number of female users <img src="../images/icons/female.png" border="0" />:</td>
                <td><?php echo $this->_tpl_vars['femaleUserCount']; ?>
</td>
            </tr>
        </table>
    </div>
    <div class="userStatsGraph">
        <img src="http://chart.apis.google.com/chart?chs=800x375&chd=t:<?php echo $this->_tpl_vars['maleRatio']; ?>
,<?php echo $this->_tpl_vars['femaleRatio']; ?>
&cht=p3&chl=Male|Female&chco=0000FF" alt="Ratio of Male to Female Users" />
    </div>
    <div class="popularUsers">
        <h2>Top 10 Popular Users</h2>
        <table>
            <tr>
                <th>Email</th>
                <th>Number of Friends</th>
            </tr>
            <?php $_from = $this->_tpl_vars['popularUsers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['popularUser']):
?>
                <tr class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
                    <td><?php echo $this->_tpl_vars['popularUser']['email']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['popularUser']['FriendCount']; ?>
</td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
        </table>
    </div>
    <div class="administrativeLog">
        <h2>Administrative Log</h2>
        <table>
            <tr>
                <th>User</th>
                <th>Remote Addr</th>
                <th>Request URI</th>
                <th>Query String</th>
                <th>Request Method</th>
                <th>Referer</th>
                <th>Created At</th>
            </tr>
            <?php $_from = $this->_tpl_vars['adminLogs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adminLog']):
?>
            <tr class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
                <td><?php echo $this->_tpl_vars['adminLog']->userID; ?>
</td>
                <td><?php echo $this->_tpl_vars['adminLog']->remoteAddr; ?>
</td>
                <td><?php echo $this->_tpl_vars['adminLog']->requestURI; ?>
</td>
                <td><?php echo $this->_tpl_vars['adminLog']->queryString; ?>
</td>
                <td><?php echo $this->_tpl_vars['adminLog']->requestMethod; ?>
</td>
                <td><?php echo $this->_tpl_vars['adminLog']->referer; ?>
</td>
                <td><?php echo $this->_tpl_vars['adminLog']->createdAt; ?>
</td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
        </table>
    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>