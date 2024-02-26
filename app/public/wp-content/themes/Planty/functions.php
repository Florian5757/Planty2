<?php


function theme_enqueue_styles()

{
    wp_enqueue_style('parent-style', get_template_directory_uri() .'/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', 
    filemtime(get_stylesheet_directory() . '/css/theme.css'));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


function filtrer_menu_par_role($items, $args) {
    foreach ($items as $key => $item) {
        if ($item->title == 'Admin' && !current_user_can('administrator')) {
            unset($items[$key]);
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'filtrer_menu_par_role', 10, 2);