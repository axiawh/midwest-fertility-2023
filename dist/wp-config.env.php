<?php

$hostname = !empty($_SERVER['X_FORWARDED_HOST']) ? $_SERVER['X_FORWARDED_HOST'] : $_SERVER['HTTP_HOST'];
$protocol = "";
switch ($hostname) {
  case 'midwest-fertility-website-1485838472.us-east-1.elb.amazonaws.com':
    define('WP_ENV', 'prod');
    define('WP_DEBUG', false);
    define('DB_NAME', getenv('DBNAMEPROD'));
    define('DB_USER', getenv('DBUSERPROD'));
    define('DB_PASSWORD', getenv('DBPASSPROD'));
    define('DB_HOST', getenv('DBHOSTPROD'));
    $protocol = "http://";
    break;

  case 'localhost':
  default:
    define('WP_ENV', 'local');
    define('WP_DEBUG', true);
    define('DB_NAME', 'midwest');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
    $protocol = "http://";
    break;
}

define('WP_SITEURL', $protocol . $hostname);
define('WP_HOME', $protocol . $hostname);

unset($hostname, $protocol);