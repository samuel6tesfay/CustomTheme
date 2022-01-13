<!-- File where there are some functions that add more functionality to themes, such as the logo, menus, color, thumbnails, scripts, and stylesheets;-->
<?php



// Add Menu Support
add_theme_support('menus');


// Register Nav Menu 
function wct_custom_new_menu() {
    register_nav_menus(
      array(
        'top-menu' => __( 'Top Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }


//   Add the hook to make the menu 
add_action( 'init', 'wct_custom_new_menu' );

// Adding sidebar 
function my_custom_theme_sidebar() {
  register_sidebar( array(
      'name' => __( 'Primary Sidebar', 'my-custom-theme' ),
      'id'   => 'sidebar-1',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="rounded">',
      'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'my_custom_theme_sidebar' );

// Adding Style 
function wct_loadStyle()
{
    wp_register_style( 'style1', get_template_directory_uri() . '/assets/css/style1.css',array(), false, 'all');
    wp_enqueue_style('style1');
}
add_action( 'wp_enqueue_scripts', 'wct_loadStyle' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/utils/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


		/**
		 * Enable support for site logo
		 */
		add_theme_support(
			'custom-logo',
			apply_filters(
				'ocean_custom_logo_args',
				array(
					'height'      => 45,
					'width'       => 164,
					'flex-height' => true,
					'flex-width'  => true,
				)
			)
		);

    	/**
		 * Enable support for header image
		 */
		add_theme_support(
			'custom-header',
			apply_filters(
				'ocean_custom_header_args',
				array(
					'width'       => 2000,
					'height'      => 1200,
					'flex-height' => true,
					'video'       => true,
				)
			)
		);

    // Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

    	// Enable support for Post Formats.
		add_theme_support( 'post-formats', array( 'video', 'gallery', 'audio', 'quote', 'link' ) );

		// Enable support for <title> tag.
		add_theme_support( 'title-tag' );
?>
