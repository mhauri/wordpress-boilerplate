<?php
require_once(__DIR__.'/../vendor/autoload.php');
(new \Dotenv\Dotenv(__DIR__.'/../'))->load();

$table_prefix = 'wp_';

define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST'));
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY', getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', getenv('LOGGED_IN_KEY'));
define('NONCE_KEY', getenv('NONCE_KEY'));
define('AUTH_SALT', getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT', getenv('LOGGED_IN_SALT'));
define('NONCE_SALT', getenv('NONCE_SALT'));

define('WP_DEBUG', getenv('WP_DEBUG'));
define('DISALLOW_FILE_EDIT', getenv('DISALLOW_FILE_EDIT'));
define('DISALLOW_FILE_MODS', getenv('DISALLOW_FILE_MODS'));
define('DISABLE_WP_CRON', getenv('DISABLE_WP_CRON'));

define('FORCE_SSL_ADMIN', getenv('FORCE_SSL_ADMIN'));

define('WP_HOME', getenv('BASE_URL').'/');
define('WP_SITEURL', getenv('BASE_URL').'/');
define('WP_CONTENT_URL', getenv('BASE_URL').'/wp-content');
define('WP_CONTENT_DIR', dirname(__FILE__).'/wp-content');

/** In case you do some SSL termination */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
    $_SERVER['SERVER_PORT'] = 443;
}

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__.'/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH.'wp-settings.php';