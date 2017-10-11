<?php

// Load Smolenskaya styles
function smolenskaya_styles()
{
    wp_register_style('smolenskaya', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('smolenskaya'); 
}

// Add Actions
add_action('wp_enqueue_scripts', 'smolenskaya_styles'); // Add Theme Stylesheet