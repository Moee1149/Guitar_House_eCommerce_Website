<?php

/**
 * Router for PHP built-in development server
 * Usage: php -S localhost:3000 router.php
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Serve static files directly
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false; // Let the built-in server serve the file
}

// Set PATH_INFO for our routing system
$_SERVER['PATH_INFO'] = $uri;

// Route all other requests through index.php
include 'index.php';
