<?php
// Project base path
!defined('BASE_PATH') && define('BASE_PATH', dirname(__DIR__));

// Project application path
!defined('APP_PATH') && define('APP_PATH', BASE_PATH . '/app');

// Composer autoload
require_once BASE_PATH . '/vendor/autoload.php';