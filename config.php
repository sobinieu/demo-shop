<?php
// HTTP
define('HTTP_SERVER', 'https://demo-shop.io2b.eu/');

// HTTPS
define('HTTPS_SERVER', 'https://demo-shop.io2b.eu/');

// DIR
define('DIR_APPLICATION', '/home/forge/demo-shop.io2b.eu/catalog/');
define('DIR_SYSTEM', '/home/forge/demo-shop.io2b.eu/system/');
define('DIR_IMAGE', '/home/forge/demo-shop.io2b.eu/image/');
define('DIR_STORAGE', '/home/forge/demo-shop.io2b.eu/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost:3306');
define('DB_USERNAME', 'demo_shop');
define('DB_PASSWORD', 'demoshopdemoshop');
define('DB_DATABASE', 'demo_shop');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');