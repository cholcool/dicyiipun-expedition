<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function expedition_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'expedition' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Top Header Section', 'expedition' ),
        'id'            => 'sidebar-header-top',
        'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Credit By', 'expedition' ),
        'id'            => 'credit-by',
        'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget_credit %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="widget-credit">',
        'after_title'   => '</div>',
    ) );

}
add_action( 'widgets_init', 'expedition_widgets_init' );


/**
 * Header section widget.
 */
require get_template_directory() . '/inc/widgets/header-top.php';