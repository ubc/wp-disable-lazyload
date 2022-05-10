<?php
/**
 * UBC Disable WP Lazyload
 *
 * @package           ubc-disable-wp-lazyload
 * @author            Kelvin Xu
 * @copyright         2022 UBC CTLT
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       UBC Disable WP Lazyload
 * Plugin URI:        https://ctlt.ubc.ca
 * Description:       Since WordPress 5.7, iframes will be lazy-loaded in WordPress by default by adding load="lazy" attribute to the iframe tag. The plugin will disable this feature.
 * Version:           0.0.1
 * Requires at least: 5.8
 * Requires PHP:      7.2
 * Author:            Kelvin Xu
 * Author URI:        https://example.com
 * Text Domain:       ubc-disable-wp-lazyload
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

function disable_post_content_iframe_lazy_loading( $default, $tag_name, $context ) {
    if ( 'iframe' === $tag_name ) {
        return false;
    }
    
    return $default;
}

add_filter(
    'wp_lazy_loading_enabled',
    'disable_post_content_iframe_lazy_loading',
    10,
    3
);