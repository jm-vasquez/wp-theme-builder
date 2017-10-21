<?php
function register_menus() {
    register_nav_menus(array('main-menu' => __('Main Menu')));
}
add_action('init', 'register_menus');
add_theme_support('post-thumbnails');
require_once('wp_bootstrap_navwalker.php');
require_once('theme-options-page.php');