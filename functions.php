<?php

// Support Woocommerce
function new_theme_add_woocommerce_support() {
  add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'new_theme_add_woocommerce_support');

// Add style.css
function new_theme_css() {
  wp_register_style('new-theme-style', get_template_directory_uri() . '/style.css', [], '1.0.0', false);
  wp_enqueue_style('new-theme-style');
}
add_action('wp_enqueue_scripts', 'new_theme_css');





?>