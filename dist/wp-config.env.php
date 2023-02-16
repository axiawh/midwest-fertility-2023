<?php

$hostname = !empty($_SERVER['X_FORWARDED_HOST']) ? $_SERVER['X_FORWARDED_HOST'] : $_SERVER['HTTP_HOST'];
$protocol = "";
switch ($hostname) {
  case '_INSERT_PROD_DOMAIN_NAME':
    define('WP_ENV', 'prod');
    define('WP_DEBUG', false);
    define('DB_NAME', getenv('DBNAMEPROD'));
    define('DB_USER', getenv('DBUSERPROD'));
    define('DB_PASSWORD', getenv('DBPASSPROD'));
    define('DB_HOST', getenv('DBHOSTPROD'));
    $protocol = "_INSERT_PROD_DOMAIN_PROTOCOL_";
    break;

  case '_INSERT_DEV_DOMAIN_NAME_':
    define('WP_ENV', 'dev');
    define('WP_DEBUG', true);
    define('DB_NAME', getenv('DBNAMEDEV'));
    define('DB_USER', getenv('DBUSERDEV'));
    define('DB_PASSWORD', getenv('DBPASSDEV'));
    define('DB_HOST', getenv('DBHOSTDEV'));
    $protocol = "_INSERT_DEV_DOMAIN_PROTOCOL_";
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