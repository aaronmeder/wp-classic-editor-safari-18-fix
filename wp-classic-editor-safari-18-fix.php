<?php
/*
Plugin Name: Safari 18 Classic Editor Fix
Plugin URI:  https://telltec.ch/projects/safari-18-wordpress-classic-editor-fix/
Description: This minimal plugin fixes the column overlap issue in the WordPress Classic Editor on Safari 18.
Version:     1.0
Author:      Aaron Meder
Author URI:  https://telltec.ch
License:     GPL2
*/

/**
 * Add the needed CSS to admin head
 */
function add_fix_css_to_admin_area() {
    echo '
    <style>
        /* Temporary Fix for classic editor bug in Safari 18 - Addded by Safari 18 Classic Editor Fix plugin  */
        #postbox-container-2 { clear: left; }
        .index-php #postbox-container-2 { clear: none; }
    </style>
    ';
}

add_action('admin_head', 'add_fix_css_to_admin_area');