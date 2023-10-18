<?php
function enqueue_parent_styles()
{
    // Replace 'parent-theme-folder-name' with the actual folder name of your parent theme
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');
?>