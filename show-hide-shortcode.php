<?php
/*
Plugin Name: Show/Hide Shortcode
Plugin URI: https://github.com/larsborn/show-hide-shortcode
description: Adds Shortcodes to WordPress to Show/Hide content via JavaScript
Version: 1.0.1
Author: Lars Wallenborn
Author URI: https://www.wallenborn.net/
License: GPL2
*/

function showhideshortcode_resources()
{
    wp_register_script('showhideshortcode-script', plugins_url('script.js', __FILE__), ['jquery'], '1.0', false);
}

add_action('init', 'showhideshortcode_resources');

function showhideshortcode_showhide($atts = [], $content = null)
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('showhideshortcode-script', ['jquery'], '1.0.0', true);
    $showCaption = isset($atts['show_caption']) ? esc_attr($atts['show_caption']) : 'Show more...';
    $hideCaption = isset($atts['hide_caption']) ? esc_attr($atts['hide_caption']) : 'Show less...';
    $a = '<a href="#" data-show-caption="' . $showCaption . '" data-hide-caption="' . $hideCaption . '">' . $showCaption . '</a>';
    $p = '<p>' . $a . '</p>';
    $contentDiv = '<div style="display: none;">' . $content . '</div>';
    return '<div class="showhideshortcode-content">' . $p . $contentDiv . '</div>';
}

add_shortcode('showhide', 'showhideshortcode_showhide');
