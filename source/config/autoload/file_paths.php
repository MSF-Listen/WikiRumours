<?php

	$pathToImageMagick = ''; // e.g. /usr/bin/
	$pathToFFmpeg = ''; // e.g. /usr/local/dh/bin/

	define('SITE_ROOT_DIR', getenv('SITE_ROOT_DIR') ?: '/srv/');
	define('UPLOADS_ROOT', getenv('UPLOADS_ROOT') ?: (SITE_ROOT_DIR . 'uploads/'));

?>
