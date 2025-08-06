<?php
require __DIR__ . '/functions.php';

const SITE_URL      = 'https://localhost/_sandbox/bca-major-project/';
const TEMPLATE_DIR  = __DIR__ . '/templates/';
const ALLOWED_PAGES = [ 'home', 'services', 'contact' ];

$page_slug = get_requested_page_slug();

if ( $page_slug === '404' ) {
    header( "HTTP/1.0 404 Not Found" );
    $page = '404';
} else {
    require TEMPLATE_DIR . $page_slug . '.php';
}
