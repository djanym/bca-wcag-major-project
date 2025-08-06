<?php

function get_requested_page_slug() {
    // Get the request URI and remove leading/trailing slashes.
    $request = trim( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/' );

    // If no page specified, set to home.
    $page_slug = empty( $request ) ? 'home' : $request;

    // Sanitize page slug
    $page_slug = preg_replace( '/[^a-z0-9-]/', '', strtolower( $page_slug ) );

    // Validate page exists and is allowed.
    if ( ! in_array( $page_slug, ALLOWED_PAGES ) || ! file_exists( TEMPLATE_DIR . $page_slug . '.php' ) ) {
        return '404';
    }

    // Validate if template file exists.
    $template_file = realpath( TEMPLATE_DIR . $page_slug . '.php' );
    if ( $template_file === false || ! file_exists( $template_file ) ) {
        return '404';
    }

    return $page_slug;
}