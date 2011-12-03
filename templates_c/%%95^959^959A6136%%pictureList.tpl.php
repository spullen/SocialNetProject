<?php /* Smarty version 2.6.22, created on 2009-05-14 13:40:21
         compiled from pictureList.tpl */ ?>
<?php $_from = $this->_tpl_vars['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['picture']):
?>
    <div>
        <a href="javascript: void(0);" onclick="setPictureToCurrent(<?php echo $this->_tpl_vars['picture']->id; ?>
); return false;">
        <img class="<?php if ($this->_tpl_vars['picture']->isCurrent): ?>currentPicture<?php else: ?>picture<?php endif; ?>" src="images/profilePhotos/<?php echo $this->_tpl_vars['picture']->filename; ?>
" />
        </a>
    </div>
<?php endforeach; endif; unset($_from); ?>