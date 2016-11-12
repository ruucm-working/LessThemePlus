<?php

// Define the version as a constant so we can easily replace it throughout the theme
define( 'LESS_VERSION', 1.1 );

/*-----------------------------------------------------------------------------------*/
/* Add Rss to Head
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );


/*-----------------------------------------------------------------------------------*/
/* register main menu
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'less' ),
	)
);

/*-----------------------------------------------------------------------------------*/
/* Enque Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function load_scripts()  {
	global $post;
	wp_deregister_script('jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', false, '2.2.4', false );

	// theme styles
	wp_enqueue_style( 'less-style', get_template_directory_uri() . '/css/style.css', '10000', 'all' );
	// add fitvid
	wp_enqueue_script( 'less-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), LESS_VERSION, true );
	// add theme scripts
	wp_enqueue_script( 'less', get_template_directory_uri() . '/js/theme.min.js', array(), LESS_VERSION, true );

	//Social Buttons
	wp_enqueue_script( 'social-share', get_template_directory_uri() . '/js/social_share.js', false, '1.0.0', true );
	wp_localize_script( 'social-share', 'blog_infos',
		array(
			'siteTitle'		=> get_bloginfo('name'),
			'siteInfo'		=> get_bloginfo('description'),
			'siteUrl'		=> get_bloginfo('url'),
			'postTitle'		=> $post->post_title,
			'postExcerpt'	=> $post->post_excerpt,
			'url'			=> get_permalink()
		) );
	wp_enqueue_script( 'twitter-wigets', 'https://platform.twitter.com/widgets.js', false, '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );