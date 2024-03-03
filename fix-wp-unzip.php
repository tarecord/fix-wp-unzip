<?php
/**
 * Plugin Name:       Fix Zip Uploads
 * Description:       A simple utility plugin that fixes the zip unarchive issue introduced in WordPress 6.4
 * Version:           1.0.0
 * Requires PHP:      7.2
 * Author:            Tanner Record
 * Author URI:        https://www.tannerrecord.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        fix-wp-unzip
 */

// @see https://core.trac.wordpress.org/ticket/60398#trac-change-10-1706712301303331
add_filter('unzip_file_use_ziparchive', '__return_false');
