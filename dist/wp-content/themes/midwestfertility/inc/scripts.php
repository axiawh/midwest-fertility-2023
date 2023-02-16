<?php

// ------------------------------------------> Defer / Async <------------------------------------------
function my_async_scripts( $tag, $handle, $src ) {
  switch( $handle ) {
    case 'flex':
    case 'pace':
  case 'anti-spam-script':
      $tag = str_replace( '<script', '<script async defer', $tag );
      break;
  }

  return $tag;
}
add_filter( 'script_loader_tag', 'my_async_scripts', 10, 3 );


// -------------> Scripts + Bootstrap ( Togglable tabs, PopOvers, Accordion, ToolTips, Fixed Nav) Back to Top <---------------
function my_scripts_method() {
	wp_enqueue_script( 'scripts', 
	get_template_directory_uri() . '/js/scripts.js',
	 array( 'jquery' ), '',  true );
	
	wp_enqueue_script(
		'bootstrap',
		get_template_directory_uri() . '/js/bootstrap.min.js',
		array( 'jquery' ), '',  true );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

// ------------------------------------------> Flexslider <------------------------------------------
function flexslider_ignition(){
	wp_enqueue_script( 'flex', get_template_directory_uri() . '/js/jquery.flexslider-min.js',
	 array( 'jquery' ),'', true );
}
add_action('wp_enqueue_scripts','flexslider_ignition');

// ------------------------------------------> PACE Loader <------------------------------------------
function paceloader(){
	wp_enqueue_script('pace', get_template_directory_uri() . '/js/pace.min.js',
	array('jquery'), '', true);
	}
add_action('wp_enqueue_scripts','paceloader');


// ------------------------------------------> ENQUEUE GOOGLE FONT <------------------------------------------
add_action( 'wp_enqueue_scripts', 'child_load_google_fonts' );
/**
 * Enqueue Google Fonts using a function
 */
function child_load_google_fonts() {
  	
  	// Setup font arguments
	$googleacffontofchoice = get_field('google_font_choice', 'options');
	$query_args = array(
		
		'family' => $googleacffontofchoice // Change this font to whatever font you'd like
	);
 
 	// A safe way to register a CSS style file for later use
	wp_register_style( 'google-fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
	
	// A safe way to add/enqueue a CSS style file to a WordPress generated page
	wp_enqueue_style( 'google-fonts' );
}

// ----------------> Remove query string from static files <----------------------
function remove_cssjs_ver( $src ) {
 if( strpos( $src, '?ver=' ) )
 $src = remove_query_arg( 'ver', $src );
 return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

// ----------------> Comments - Reply Enqueue <----------------------
if ( is_singular() ) wp_enqueue_script( "comment-reply" );
?>