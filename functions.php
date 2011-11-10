<?php
function foundationtheme_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'foundationtheme' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'foundationtheme' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 2, located below the Primary Widget Area in the sidebar. Empty by default.
	register_sidebar( array(
		'name' => __( 'Secondary Widget Area', 'foundationtheme' ),
		'id' => 'secondary-widget-area',
		'description' => __( 'The secondary widget area', 'foundationtheme' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// Area 3, located below in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'foundationtheme' ),
		'id' => 'footer-widget-area',
		'description' => __( 'The footer widget area', 'foundationtheme' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => __( 'Second footer Widget Area', 'foundationtheme' ),
		'id' => 'secondary-footer-widget-area',
		'description' => __( 'The secondary footer widget area', 'foundationtheme' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
}
/** Register sidebars by running foundationtheme_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'foundationtheme_widgets_init' );

if ( function_exists( 'register_nav_menus' ) ) {
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'foundationtheme' )
	) );
}
	
?>