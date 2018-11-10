<?php
/*
Plugin Name: ACF Flexible Content Title
Plugin URI: https://github.com/mmirus/acf-flexible-content-title
Description: Display the content of a field in the title bar of your Advanced Custom Fields flexible content sections.
Author: Matt Mirus
Author URI: https://github.com/mmirus
Version: 1.0.0
GitHub Plugin URI: https://github.com/mmirus/acf-flexible-content-title
 */

add_filter('acf/fields/flexible_content/layout_title', function ($title, $field, $layout, $i) {
    $title_field = apply_filters('acf_flexible_content_title_field', 'section_title', $field, $layout);
    $title_value = get_sub_field($title_field);

    return $title_value ? "<strong>$title_value</strong> - <small>$title</small>" : "<small>$title</small>";
}, 10, 4);
