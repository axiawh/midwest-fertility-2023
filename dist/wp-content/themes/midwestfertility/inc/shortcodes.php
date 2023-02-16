<?php
// ========================= TEXT RELATED ===================================== //
	// ---------------------------> DROPCAPS <--------------------------------------
	function dropcap_letter($atts, $content=null){
		$a = shortcode_atts(
		array(
			'letter' => 'A',
		),
		 $atts);
		 return '<span class="drop-cap-text ">'.do_shortcode($content).'</span>';
	}
add_shortcode('dropcap','dropcap_letter');

// ========================= LAYOUT RELATED ===================================== //
	// ---------------------------> Individual Columns <--------------------------------------
function columns_shortcode( $atts , $content = null ) {
$a= shortcode_atts(
		array(
			'width' => '',
		),
		$atts);
	return '
	<li style="width:'. esc_attr($a['width']).';">'.do_shortcode($content).'</li>';
}
add_shortcode( 'column', 'columns_shortcode' );

	// ---------------------------> 2 Columns <--------------------------------------
function twocolumns_shortcode( $atts , $content = null ) {

	return '
	<div id="two-col-container"><ul>'.do_shortcode($content).'</ul></div>';
}
add_shortcode( 'twocolumns', 'twocolumns_shortcode' );

	// ---------------------------> 3 Columns <--------------------------------------
function threecolumns_shortcode( $atts , $content = null ) {

	return '
	<div id="three-col-container"><ul>'.do_shortcode($content).'</ul></div>';
}
add_shortcode( 'threecolumns', 'threecolumns_shortcode' );

	// ---------------------------> 4 Columns <--------------------------------------
function fourcolumns_shortcode( $atts , $content = null ) {

	return '
	<div id="four-col-container"><ul>'.do_shortcode($content).'</ul></div>';
}
add_shortcode( 'fourcolumns', 'fourcolumns_shortcode' );

	// ---------------------------> Right Float Box <--------------------------------------
function righttextbox_shortcode( $atts , $content = null ) {

	return '
	<div id="text-box-container" class="right-float-box">'.do_shortcode($content).'</div>';
}
add_shortcode( 'righttextbox', 'righttextbox_shortcode' );

	// ---------------------------> Left Float Box <--------------------------------------
function lefttextbox_shortcode( $atts , $content = null ) {

	return '
	<div id="text-box-container" class="left-float-box">'.do_shortcode($content).'</div>';
}
add_shortcode( 'lefttextbox', 'lefttextbox_shortcode' );

	// ---------------------------> Scroll Box <--------------------------------------
function scroll_box_shortcode( $atts , $content = null ) {
	$a= shortcode_atts(
		array(
			'scrollboxtitle' => 'SCROLL BOX TITLE GOES HERE',
		),
		$atts);
	return '<div class="scroll-box"><h3>'. esc_attr($a['scrollboxtitle']).'</h3> <section>'.do_shortcode($content).'</section></div>';
}
add_shortcode( 'scrollbox', 'scroll_box_shortcode' );

	// ---------------------------> CLEAR <--------------------------------------
function clear_shortcode( $atts , $content = null ) {

	return '
	<div class="clear">'.do_shortcode($content).'</div>';
}
add_shortcode( 'clear', 'clear_shortcode' );

// ========================= FONT AWESOME RELATED ===================================== //
	// ---------------------------> Font Awesome Icon <--------------------------------------
function fa_shortcode( $atts , $content = null ) {
	$a= shortcode_atts(
		array(
			'icon' => 'fas fa-cloud-download-alt',
			'size' => 'fa-lg',
		),
		$atts);
	return '
	<i class="'. esc_attr($a['icon']).' '. esc_attr($a['size']).'" aria-hidden="true"></i>';
}
add_shortcode( 'fa', 'fa_shortcode' );


// ========================= BOOTSTRAP RELATED ===================================== //
	// ---------------------------> Bootstrap Button <--------------------------------------
	function bs_button($atts, $content=null){
		$a = shortcode_atts(
		//Attributes Defined
		array(
			'size' => 'btn-default',
			'color' => 'btn-warning',
			'url' => 'http://',
			'target' => '_parent',
			'fa' => 'fas fa-envelope',
		), 
		$atts);
		//HTML Return - Use Concatenation esc_attr($a['NAME OF YOUR ATTRIBUTE'])
		return'<a href="'. esc_attr($a['url']).'" target="'. esc_attr($a['target']) .'"><button type="button" class="btn '. esc_attr($a['size']) .' '.esc_attr($a['color']).'"><i class="'. esc_attr($a['fa']) .'"></i> '.do_shortcode($content).'</button></a>';
	}
add_shortcode('bsbutton','bs_button');

	// ---------------------------> Bootstrap Download Button <--------------------------------------
	function bs_download_button($atts, $content=null){
		$a = shortcode_atts(
		//Attributes Defined
		array(
			'size' => 'btn-default',
			'color' => 'btn-warning',
			'url' => 'http://',
			'target' => '_parent',
			'fa' => 'fas fa-arrow-alt-circle-down',
			'download' => 'downloadpdf',
		), 
		$atts);
		//HTML Return - Use Concatenation esc_attr($a['NAME OF YOUR ATTRIBUTE'])
		return'<a href="'. esc_attr($a['url']).'" target="'. esc_attr($a['target']) .'" download="'. esc_attr($a['download']) .'"><button type="button" class="btn '. esc_attr($a['size']) .' '.esc_attr($a['color']).'"><i class="'. esc_attr($a['fa']) .'"></i> '.do_shortcode($content).'</button></a>';
	}
add_shortcode('bsdownloadbutton','bs_download_button');

	// ---------------------------> Highlight / Alert Box <--------------------------------------
function highlightbox_shortcode( $atts , $content = null ) {
	$a= shortcode_atts(
		array(
			'color' => 'alert-success',
		),
		$atts);
	return '
	<div class="alert '. esc_attr($a['color']).'" role="alert">'.do_shortcode($content).'<div class="clear"></div></div>';
}
add_shortcode( 'highlightbox', 'highlightbox_shortcode' );

	// ---------------------------> Bootstrap Collapse / Accordion <--------------------------------------
	function bscollapse($atts, $content=null){
		$a = shortcode_atts(
		//Attributes Defined
		array(
			'size' => 'btn-default',
			'color' => 'btn-warning',
			'buttonlabel' => 'Read More',
			'hash' => 'RENAMEME',
		), 
		$atts);
		//HTML Return - Use Concatenation esc_attr($a['NAME OF YOUR ATTRIBUTE'])
		return'<a class="btn collapseaccordion '. esc_attr($a['size']) .' '.esc_attr($a['color']).' role="button" data-toggle="collapse" href="#'. esc_attr($a['hash']).'" aria-expanded="true" aria-controls="collapseExample"><i class="fas fa-plus-circle" aria-hidden="true"></i> '.esc_attr($a['buttonlabel']).'</a><div class="collapse" id="'. esc_attr($a['hash']).'" aria-expanded="true"><div class="collapse-container">'.do_shortcode($content).'</div></div>';
	}
add_shortcode('collapse','bscollapse');

// ========================= MISC ========================================== //
	// ---------------------------> RSS FEED <--------------------------------------
include_once(ABSPATH.WPINC.'/rss.php');

function readRss($atts) {
    extract(shortcode_atts(array(
	"feed" => 'http://',
      "num" => '1',
    ), $atts));

    return wp_rss($feed, $num);
}
add_shortcode('rss', 'readRss');


	// ---------------------------> TOOLTIP <--------------------------------------
//	function tooltip_cloud($atts, $content=null){
//		$a= shortcode_atts(
//		array(
//			'size' => 'btn-default',
//			'color' => 'btn-success',
//			'buttonname' => 'Hello I am a ToolTip',
//			'tooltip' => 'I am a ToolTip Cloud!',
//			'fa' => 'fas fa-comments',
//			'placement' => 'auto',
//			'trigger' => 'hover'
//		),
//		$atts);
//		//HTML Return - Use Concatenation esc_attr($a['NAME OF YOUR ATTRIBUTE'])
//		return'<a class="btn '. esc_attr($a['size']).' '.esc_attr($a['color']).'" href="javascript:;" rel="tooltip" data-toggle="tooltip" data-placement="'. esc_attr($a['placement']).'" title="'. esc_attr($a['tooltip']).'" id="tooltip"  data-trigger="'. esc_attr($a['trigger']).'"><i class="'. esc_attr($a['fa']) .'"></i> '.do_shortcode($content).'</a>';
//	}
//add_shortcode('bstooltip','tooltip_cloud');

	// ---------------------------> POPOVER <--------------------------------------
//	function popover_cloud($atts, $content=null){
//		$a= shortcode_atts(
//		array(
//			'size' => 'btn-default',
//			'color' => 'btn-warning',
//			'popcontent' => 'Hello I am a PopOver',
//			'poptitle' => 'I am a Popover Cloud!',
//			'fa' => 'fas fa-comments',
//			'placement' => 'auto',
//			'trigger' => 'hover'
//		),
//		$atts);
//		//HTML Return - Use Concatenation esc_attr($a['NAME OF YOUR ATTRIBUTE'])
//		return'<a class="btn '. esc_attr($a['size']).' '.esc_attr($a['color']).'" href="javascript:;" rel="popover" data-toggle="popover" data-placement="'. esc_attr($a['placement']).'" data-content="'. esc_attr($a['popcontent']).'" data-original-title="'. esc_attr($a['poptitle']).'" id="popover"  data-trigger="'. esc_attr($a['trigger']).'"><i class="'. esc_attr($a['fa']) .'"></i> '.do_shortcode($content).'</button></a>';
//	}
//add_shortcode('popover','popover_cloud');




// ========================= Add TinyMCE Button to Editor ========================================== //
 add_action('init', 'add_button');
function add_button() {
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )
   {
     add_filter('mce_external_plugins', 'add_plugin');
     add_filter('mce_buttons_3', 'register_button');
   }
}
function register_button($buttons) {
   array_push($buttons, "lefttextbox", "righttextbox", "highlightbox", "dropcap",  "bsbutton", "bsdownloadbutton", "popover", "bstooltip", "collapse", "fa", "fourcolumns", "threecolumns","twocolumns", "scrollbox");
   return $buttons;
}
function add_plugin($plugin_array) {
   $plugin_array['righttextbox'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['lefttextbox'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['bsbutton'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['bsdownloadbutton'] = get_template_directory_uri().'/js/customcodes.js';
//   $plugin_array['bstooltip'] = get_template_directory_uri().'/js/customcodes.js';
//   $plugin_array['popover'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['dropcap'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['highlightbox'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['collapse'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['fa'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['fourcolumns'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['threecolumns'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['twocolumns'] = get_template_directory_uri().'/js/customcodes.js';
   $plugin_array['scrollbox'] = get_template_directory_uri().'/js/customcodes.js';
   return $plugin_array;
}
?>