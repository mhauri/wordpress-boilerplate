<?php
define( 'WP_USE_THEMES', true );

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__.'/');
}

require_once __DIR__ . '/wp-config.php';
require __DIR__ . '/wp-blog-header.php';