<?php
	define('ROOT', '/var/www/cs445/');
	define('CORE', ROOT . 'core/');
	define('MODELS', ROOT . 'models/');
	define('IMAGES', ROOT . 'images/');
	define('USER_PICS', IMAGES . 'profilePhotos/');
	define('PUBLIC', ROOT . 'public/');
	define('CONFIG_DIR', ROOT . 'config/');
	define('CONFIG', CONFIG_DIR . 'config.php');
	define('TEMPLATES', ROOT . 'templates/');
	define('TEMPLATES_C', ROOT . 'templates_c/');
	define('DATABASE', CORE . 'database.php');
	define('SESSION', CORE . 'session.php');
	define('VIEWS', CORE . 'views.php');
  define('FUNCS', CORE . 'functions.php');

  // other defines that should be global
  define('MAX_PIC_WIDTH', '300');
  define('MAX_PIC_HEIGHT', '600');

  define('MAX_THUMB_WIDTH', '50');
?>