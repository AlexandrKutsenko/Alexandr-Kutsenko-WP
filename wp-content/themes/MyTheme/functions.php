<?php
/*
 * Hide Admin bar of wordpress
 */
function hide_admin_bar() {
    show_admin_bar(false);
}
add_action('init', 'hide_admin_bar');

remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','wp_generator');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function logo_widget_init() {
    register_sidebar( array(
        'name'          => 'Header Logo SVG',
        'id'            => 'logo',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'logo_widget_init' );
?>
