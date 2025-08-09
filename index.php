<?php

require __DIR__ . '/functions.php';

const SITE_BASE_URL = 'https://localhost';
const SITE_URL_SUBFOLDER = '_sandbox/bca-major-project';
define("SITE_URL", trim(SITE_BASE_URL . '/' . SITE_URL_SUBFOLDER, '/'));
const TEMPLATE_DIR = __DIR__ . '/templates/';
const ALLOWED_PAGES = ['home', 'services', 'contact'];

$page_slug = get_requested_page_slug();

if ($page_slug === '404') {
    header("HTTP/1.0 404 Not Found");
    $page = '404';
} else {
    require TEMPLATE_DIR . $page_slug . '.php';
}
