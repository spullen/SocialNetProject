<?php /* Smarty version 2.6.22, created on 2009-05-14 12:41:18
         compiled from personalInfo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'personalInfo.tpl', 4, false),)), $this); ?>
<div>
    <div>
        <h4>Interests:</h4>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['profile']->personalInfo->interests)) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

    </div>
    <div>
        <h4>Music:</h4>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['profile']->personalInfo->music)) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

    </div>
    <div>
        <h4>Television Shows:</h4>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['profile']->personalInfo->shows)) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

    </div>
    <div>
        <h4>Movies:</h4>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['profile']->personalInfo->movies)) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

    </div>
    <div>
        <h4>Books:</h4>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['profile']->personalInfo->books)) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

    </div>
</div>
<div class="actions">
<?php if ($this->_tpl_vars['user']->id == $this->_tpl_vars['profile']->id): ?>
    <a href="javascript: void(0);" onclick="showPersonalInfoEdit(<?php echo $this->_tpl_vars['profile']->id; ?>
);"><img src="images/icons/pencil.png" border="0" /> Edit Personal Information</a>
<?php endif; ?>
</div>