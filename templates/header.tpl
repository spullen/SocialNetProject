<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>CyberStalker | {$title}</title>
    <link rel="stylesheet" type="text/css" href="{$pathAppend}public/default.css" />
    <link rel="stylesheet" type="text/css" href="{$pathAppend}public/lightbox.css" />
    <script src="{$pathAppend}public/prototype.js"></script>
    <script src="{$pathAppend}public/scriptaculous.js"></script>
    <script src="{$pathAppend}public/lightbox.js"></script>
    <script src="{$pathAppend}public/application.js"></script>
  </head>
  <body>
  	<div id="contentContainer">
  		<div id="header">
  			<div id="banner">
  				<h1>CyberStalker</h1>
  			</div>
  			<div id="navcontainer">
  				<ul id="navlist">
  					<li><a href="{$pathAppend}index.php">Home</a></li>
  					{if $user != null}
  						<li><a href="{$pathAppend}profile.php?uid={$user->id}">Profile</a></li>
  						<li><a href="{$pathAppend}search.php">Search</a></li>
  						{if $user->isAdmin}
  							<li><a href="{$pathAppend}admin/index.php">Admin Section</a></li>
  						{/if}
  						<li><a href="{$pathAppend}accounts/logout.php">Logout</a></li>
  					{else}
  						<li><a href="{$pathAppend}accounts/register.php">Register</a></li>
  						<li><a href="{$pathAppend}accounts/login.php">Login</a></li>
  					{/if}
  				</ul>
  			</div>
  		</div>
  		<div id="content">
            <div id="ajax-indicator" style="display:none;"><span>loading...</span></div>
  			<div id="message">
  				{if isset($message) }
  					{$message}
  				{/if}
  			</div>
  		