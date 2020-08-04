<?php

/**
 * Plugin Name: Permalink Period
 * Description: Hide the permalink in the content to hopefully get backlinks from content thieves.
 * Version: 0.1.0
 * Plugin URI: https://github.com/Brugman
 * Author: Tim Brugman
 * Author URI: https://timbr.dev/
 */

if ( !defined( 'ABSPATH' ) )
    exit;

add_filter( 'the_content', function ( $content ) {

    $dot_pos = strpos( $content, '.' );

    if ( $dot_pos === false )
        return $content;

    $permalink_html = '<a href="'.get_permalink().'" style="font-weight: inherit; color: inherit; text-decoration: inherit;">.</a>';

    return substr_replace( $content, $permalink_html, $dot_pos, 1 );

}, 10, 1 );

