<?php /* Smarty version 2.6.22, created on 2009-05-14 12:33:55
         compiled from index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('title' => 'Home')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['user'] != null): ?>
<div class="landingLeft">
    <div>
        <h1>Hello, <?php echo $this->_tpl_vars['user']->name; ?>
</h1>
        <a href="recommendations.php" rel="height=450" class="lbOn" onclick="return false;"><img src="images/icons/group_go.png" border="0" /> Friend Recommendations</a>
    </div>
    <div id="whatsGoingOn" class="friendStatuses">
        <h2>Friend Statuses</h2>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "friendStatusList.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
    <div class="clear"></div>
</div>
<?php else: ?>
    <div>
        <h2>Welcome</h2>
        <div>
            Welcome to CyberStalker. <br />
            If you already have an account <a href="accounts/login.php">login</a><br />
            or you can create a new account by going <a href="accounts/register.php">here</a>
        </div>
    </div>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>