<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hvac101_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hvac101' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hvac101' ),
		'before_widget' => '<section id="%1$s" class="widget card %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title card-header">',
		'after_title'   => '</h3>',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Top Bar Left', 'hvac101' ),
		'id'            => 'top-bar-left',
		'description'   => esc_html__( 'Add widgets here.', 'hvac101' ),
		'before_widget' => '<span id="%1$s" class="widget %2$s">',
		'after_widget'  => '</span>',
		'before_title'  => '<span class="widget-title">',
		'after_title'   => '</span>',
	) );



	register_sidebar( array(
		'name'          => esc_html__( 'Top Bar Right', 'hvac101' ),
		'id'            => 'top-bar-right',
		'description'   => esc_html__( 'Add widgets here.', 'hvac101' ),
		'before_widget' => '<span id="%1$s" class="widget %2$s">',
		'after_widget'  => '</span>',
		'before_title'  => '<span class="widget-title">',
		'after_title'   => '</span>',
	) );


}
add_action( 'widgets_init', 'hvac101_widgets_init' );

