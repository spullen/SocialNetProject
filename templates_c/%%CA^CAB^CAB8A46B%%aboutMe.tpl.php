<?php /* Smarty version 2.6.22, created on 2009-05-14 12:41:18
         compiled from aboutMe.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'aboutMe.tpl', 30, false),)), $this); ?>
<table>
    <tr>
      <td class="align_right bold">Name:</td>
      <td><?php echo $this->_tpl_vars['profile']->name; ?>
</td>
    </tr>
    <tr>
      <td class="align_right bold">Email:</td>
      <td><?php echo $this->_tpl_vars['profile']->email; ?>
</td>
    </tr>
    <tr>
      <td class="align_right bold">Hometown:</td>
      <td><?php echo $this->_tpl_vars['profile']->hometown; ?>
</td>
    </tr>
    <tr>
        <td class="align_right bold">Current Location:</td>
        <td><?php echo $this->_tpl_vars['profile']->currentLocation; ?>
</td>
    </tr>
    <tr>
      <td class="align_right bold">Gender:</td>
      <td>
        <?php if ($this->_tpl_vars['profile']->gender == 0): ?>
          Male
        <?php else: ?>
          Female
        <?php endif; ?>
      </td>
    </tr>
    <tr>
      <td class="align_right bold">Birthdate:</td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['profile']->birthdate)) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
    </tr>
</table>
<div class="actions">
<?php if ($this->_tpl_vars['user']->id == $this->_tpl_vars['profile']->id): ?>
<a href="javascript: void(0);" onclick="showAboutMeEdit(<?php echo $this->_tpl_vars['profile']->id; ?>
);"><img src="images/icons/pencil.png" border="0" /> Edit Basic Information</a>
<?php endif; ?>
</div>