<?php
include'inc/admin.php';
include'inc/bootstrap-walker.php';
include'inc/acf/blocks.php';
include'inc/acf/blog/excerpt.php';
//include'inc/forms.php';
include'inc/google-fonts.php';
include'inc/scripts.php';
include'inc/shortcodes.php';
include'inc/cpt/success-stories.php';
include'inc/theme-customizer.php';
include'inc/widgets.php';
//include'inc/acf/widgets.php';


/*-----------------------------------------------> ACF <---------------------------------------------------*/
if(function_exists('acf_add_options_page')) {  acf_add_options_page();
	acf_add_options_sub_page('Global Settings');
	acf_add_options_sub_page('Global Design');
	acf_add_options_sub_page('Global Header');
	acf_add_options_sub_page('Global Footer');
	acf_add_options_sub_page('Global Interior');
	acf_add_options_sub_page('Global Blog');
}
/*-----------------------------------------------> Customizer <---------------------------------------------------*/
add_theme_support('custom-background');
$widthoflogo = get_field('customizer_logo_crop_width','options');
$heightoflogo = get_field('customizer_logo_crop_height','options');
add_theme_support( 'custom-logo', array(
 'height'      => $heightoflogo,
 'width'       => $widthoflogo,
 'flex-height' => true,
 'flex-width'  => true,
 //'header-text' => array( 'site-title', 'site-description' ),
) );

    //------------------> Add Selective Refresh for Widgets so its easily editable for Customizer <--------------//
add_theme_support( 'customize-selective-refresh-widgets' );

/*-----------------------------------------------> Users <---------------------------------------------------*/
if(get_field('upgrade_editor_role', 'options')){
    /*-----------------------------------------------> User Role - Editor - Show Apperance <---------------------------------------------------*/
    // get the the role object
    $role_object = get_role( 'editor' );

    // add $cap capability to this role object
    $role_object->add_cap( 'edit_theme_options' );
}

/*------------------------------------> Gutenberg / Block Editor <------------------------------------*/
// Adds support for editor color palette.
add_theme_support( 'editor-color-palette', array(
  array(
  'name'  => __( 'Blue', 'midwest-blue' ),
  'slug'  => 'midwest-blue',
  'color' => '#557A95',
 ),
 array(
  'name'  => __( 'Teal', 'midwest-teal' ),
  'slug'  => 'midwest-teal',
  'color' => '#7CC9D2',
 ),
  array(
  'name'  => __( 'Dark Gray', 'midwest-gray' ),
  'slug'  => 'midwest-gray',
  'color' => '#5D5C61',
 ),
    
  array(
  'name'  => __( 'Gray Blue', 'midwest-gray-blue' ),
  'slug'  => 'midwest-gray-blue',
  'color' => '#7395AE',
 ),
   
  array(
  'name'  => __( 'Medium Gray', 'midwest-medium-gray' ),
  'slug'  => 'midwest-medium-gray',
  'color' => '#666',
 ),
    
    array(
  'name'  => __( 'White', 'white' ),
  'slug'  => 'white',
  'color' => '#FFFFFF',
 ),
    
        array(
  'name'  => __( 'Black', 'black' ),
  'slug'  => 'black',
  'color' => '#000000',
 ),
 
) );

/*------------------------------------> TINY MCE Stylesheet Activation <------------------------------------*/
add_editor_style('editor-style.css');

/* ## Gutenberg Backend Styling
--------------------------------------------- */
add_theme_support( 'editor-styles'); 
add_editor_style( 'style-editor.css' );

/*------------------------------------> Thumbnail / Featured Image Activation <------------------------------------*/
if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

		// Adding Custom Image Sizes
add_image_size('megalarge', 1920, 1920, false);
add_image_size('xxxlarge', 1600, 1600, false);
add_image_size('xxlarge', 1366, 1366, false);
add_image_size('xlarge', 1280, 1280, false);
add_image_size('mediumlarge', 600, 600, false);


add_filter( 'image_size_names_choose', 'dropdown_custom_add_image_size_names' );
function dropdown_custom_add_image_size_names( $sizes ) {
  return array_merge( $sizes, array(
    'mediumlarge' => __( 'Medium Large' ),
    'xlarge' => __( 'XLarge' ),
    'xxlarge' => __( 'XXLarge' ),
    'xxxlarge' => __( 'XXXLarge' ),
    'megalarge' => __( 'Mega Large' ),
  ) );
}

/*------------------------------------> Login Screen <------------------------------------*/
			/*-----------------> Change Login Logo to Company Logo <---------------------*/
function my_custom_login_logo()
{
	echo '<style  type="text/css"> h1 a {  background-image:url('.get_template_directory_uri().'/images/logos/admin-logo-login.png)  !important;} .login h1 a { width:274px !important; height: 63px !important; background-size: 274px 63px !important;} </style>';
}
add_action('login_head',  'my_custom_login_logo');

			/*-----------------> Change Login Logo to Company URL instead of wordpress.org <---------------------*/
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

/*------------------------------------> Navigation / Menus <------------------------------------*/
add_action( 'init', 'register_my_menu' );

function register_my_menu() {
	register_nav_menu( 'primary-menu', __( 'Main Navigation' ) );
	register_nav_menu( 'footer-menu', __( 'Footer Navigation' ) );
}
/*------------------------------------> Page Categories <------------------------------------*/
 function pagecat(){
 register_taxonomy(
 'pagecategory',
 'page',
 array(
 'hierarchical' => 'true',
 'label' => 'Page Category',
 'query_var' => true,
 'rewrite' => array('slug' => 'page-cat'),
	 'show_in_rest' => 'true', // Enable to show in Document in Gutenberg
 )
 );
 
 }// END FUNCTION
add_action('init','pagecat');


// This will auto-save posts to the default Page Category when nothing is selected.
function set_default_object_terms( $post_id, $post ) {
        if ( 'publish' === $post->post_status && $post->post_type === 'page' ) {
            $defaults = array(
                'pagecategory' => array( 'default' )
                );
            $taxonomies = get_object_taxonomies( $post->post_type );
            foreach ( (array) $taxonomies as $taxonomy ) {
                $terms = wp_get_post_terms( $post_id, $taxonomy );
                if ( empty( $terms ) && array_key_exists( $taxonomy, $defaults ) ) {
                    wp_set_object_terms( $post_id, $defaults[$taxonomy], $taxonomy );
                }
            }
        }
    }
    add_action( 'save_post', 'set_default_object_terms', 0, 2 );

    // ------------------------------------------>Adding Body Class to Interior Pages <---------------
add_filter( 'body_class','interior_page_body_classes' );
function interior_page_body_classes( $classes ) {
 if(!is_front_page()){
    $classes[] = 'interior-page';
      }
    return $classes;
} 


/*------------------------------------> Enable RSS Images <------------------------------------*/
function imageRSS($content) {
global $post;
if ( has_post_thumbnail( $post->ID ) ){
$content = '' . get_the_post_thumbnail( $post->ID, 'thumbnail', 'align=left', array() ) . '' . $content . '<br clear="left">';
}
return $content;
}

add_filter('the_excerpt_rss', 'imageRSS');

/*------------------------------------> Enable RSS Feed Links <------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*------------------------------------> HTML 5 Support (This feature allows the use of HTML5 markup for the search forms, comment forms, comment lists, gallery, and caption.) <------------------------------------*/
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );


/*------------------------------------> CDS Admin Credit <------------------------------------*/
add_filter( 'admin_footer_text', 'my_admin_footer_text' );
function my_admin_footer_text( $default_text ) {
	$designco = get_field('created_by','options');
	$designcolink = get_field('created_by_link','options');
     return '<span id="footer-thankyou">Website managed by <a href="'.$designcolink.'" target="_blank">'.$designco.'</a><span> | Powered by <a href="http://www.wordpress.org" target="_blank">WordPress</a>';
}
?>