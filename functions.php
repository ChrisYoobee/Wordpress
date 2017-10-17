<?php  

function customThemeEnqueues(){
	 wp_enqueue_style( 'bootstrapcustomStyle', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
	 wp_enqueue_style( 'customStyle', get_template_directory_uri() . '/css/CustomThemeStyle.css', array(), '1.0.0', 'all' );

	 wp_enqueue_script( 'jquery' );
	 wp_enqueue_script( 'customScript', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', 'all', true);
	 wp_enqueue_script( 'customScript', get_template_directory_uri() . '/js/CustomThemeScript.js', array(), '1.0.0', 'all', true);
}

add_action( 'wp_enqueue_scripts', 'customThemeEnqueues' );

function customThemeSetUp(){
	add_theme_support('menus');
	register_nav_menu('primary', 'This is the main navigation, positioned at the top of the page');
}


add_action('init', 'customThemeSetUp');

add_theme_support('custom-background');
$customHeaderSettings = array(
	'default-image' => '',
	'width' => 100,
	'height' => 50,
	'flex-height' => true,
	'flex-width' => true,
	'default-text' => true,
	'uploads' => true,
	'video' => false
	);
add_theme_support('custom-header', $customHeaderSettings);
add_theme_support('post-thumbnails');
add_theme_support( 'post-formats' , array('aside','image','video'));

add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

function customTheme_sidebar_setup(){
	register_sidebar(array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'custom',
			'description' => 'this is our main sidebar on the right',
			'before_widget' => '<aside id="%$s" class="widget 2%$s" >',
			'after_widget' => '</aside>',
			'before_title' => '<h2 class ="widgettitle">',
			'after_title' => '</h2>'
					));
}

add_action('widgets_init', 'customTheme_sidebar_setup');
