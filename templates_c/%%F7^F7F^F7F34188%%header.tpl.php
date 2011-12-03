<?php /* Smarty version 2.6.22, created on 2009-05-14 12:33:55
         compiled from header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>CyberStalker | <?php echo $this->_tpl_vars['title']; ?>
</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['pathAppend']; ?>
public/default.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['pathAppend']; ?>
public/lightbox.css" />
    <script src="<?php echo $this->_tpl_vars['pathAppend']; ?>
public/prototype.js"></script>
    <script src="<?php echo $this->_tpl_vars['pathAppend']; ?>
public/scriptaculous.js"></script>
    <script src="<?php echo $this->_tpl_vars['pathAppend']; ?>
public/lightbox.js"></script>
    <script src="<?php echo $this->_tpl_vars['pathAppend']; ?>
public/application.js"></script>
  </head>
  <body>
  	<div id="contentContainer">
  		<div id="header">
  			<div id="banner">
  				<h1>CyberStalker</h1>
  			</div>
  			<div id="navcontainer">
  				<ul id="navlist">
  					<li><a href="<?php echo $this->_tpl_vars['pathAppend']; ?>
index.php">Home</a></li>
  					<?php if ($this->_tpl_vars['user'] != null): ?>
  						<li><a href="<?php echo $this->_tpl_vars['pathAppend']; ?>
profile.php?uid=<?php echo $this->_tpl_vars['user']->id; ?>
">Profile</a></li>
  						<li><a href="<?php echo $this->_tpl_vars['pathAppend']; ?>
search.php">Search</a></li>
  						<?php if ($this->_tpl_vars['user']->isAdmin): ?>
  							<li><a href="<?php echo $this->_tpl_vars['pathAppend']; ?>
admin/index.php">Admin Section</a></li>
  						<?php endif; ?>
  						<li><a href="<?php echo $this->_tpl_vars['pathAppend']; ?>
accounts/logout.php">Logout</a></li>
  					<?php else: ?>
  						<li><a href="<?php echo $this->_tpl_vars['pathAppend']; ?>
accounts/register.php">Register</a></li>
  						<li><a href="<?php echo $this->_tpl_vars['pathAppend']; ?>
accounts/login.php">Login</a></li>
  					<?php endif; ?>
  				</ul>
  			</div>
  		</div>
  		<div id="content">
            <div id="ajax-indicator" style="display:none;"><span>loading...</span></div>
  			<div id="message">
  				<?php if (isset ( $this->_tpl_vars['message'] )): ?>
  					<?php echo $this->_tpl_vars['message']; ?>

  				<?php endif; ?>
  			</div>
  		