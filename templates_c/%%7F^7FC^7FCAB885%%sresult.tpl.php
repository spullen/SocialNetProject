<?php /* Smarty version 2.6.22, created on 2009-05-14 15:09:45
         compiled from sresult.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('title' => 'Search Results')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="results">
<?php if ($this->_tpl_vars['users']): ?>
<table>
<tr><td width="100">Name</td><td width="100">Email</td></tr>
<?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
    <tr><td><a href="profile.php?uid=<?php echo $this->_tpl_vars['user']->id; ?>
"><?php echo $this->_tpl_vars['user']->name; ?>
</a></td>
        <td><a href="mailto:<?php echo $this->_tpl_vars['user']->email; ?>
"><?php echo $this->_tpl_vars['user']->email; ?>
</a></td></tr>
    </br>
<?php endforeach; endif; unset($_from); ?>
</table>
<br />
<?php echo $this->_tpl_vars['pages']; ?>

<?php else: ?>
Nobody found! :(
<?php endif; ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>