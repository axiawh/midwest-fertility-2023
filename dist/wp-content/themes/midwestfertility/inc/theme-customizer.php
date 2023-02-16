<?php
//DEFINE MASTER FUNCTION
//We are hooking this function onto the customizer action so that it is called when the customizer action is
function catalyst_customize_register($wp_customize) {
    
    $wp_customize->selective_refresh->add_partial( 'blogname', array(
        'selector' => '.site-title a',
        'render_callback' => function() {
            bloginfo( 'name' );
        },
    ) );
	
	// ADD Section(s)
	$wp_customize->add_section('colors', array(
	'title' => __('Global Colors','catalyst'),
	'description' =>'Modify the Theme Colors',
	'priority'   => 1
	));
$wp_customize->add_section('background_image', array(
	'title' => __('Background Image','catalyst'),
	'description' =>'Add/Edit a Background Image',
	'priority'   => 2
	));
	$wp_customize->add_section('header', array(
	'title' => __('Header Colors','catalyst'),
	'description' =>'Edit Header Elements',
	'priority'   => 3
	));
	$wp_customize->add_section('nav', array(
	'title' => __('Navigation Colors','catalyst'),
	'description' =>'Edit Navigation Elements',
	'priority'   => 4
	));
		$wp_customize->add_section('catalyst_footer', array(
	'title' => __('Footer Colors','catalyst'),
	'description' =>'Edit Footer Elements',
	'priority'   => 5
	));
	$wp_customize->add_section('bootstrap', array(
	'title' => __('Bootstrap Colors','catalyst'),
	'description' =>'Change Bootstrap Elements',
	'priority'   => 6
	));
		$wp_customize->add_section('title_tagline', array(
	'title' => __('Site Title & Tagline','catalyst'),
	'description' =>'Edit the Site Title & Tagline',
	'priority'   => 7
	));
	$wp_customize->add_section('static_front_page', array(
	'title' => __('Static Front Page','catalyst'),
	'description' =>'Change the Static Front Page',
	'priority'   => 8
	));
	

	
	//Add Settings
	$wp_customize->add_setting('sidebar_setting', array(
	'default' => 'left',
	));
	$wp_customize->add_setting('content_text_color', array(
	'default' => '#000',
	));
	$wp_customize->add_setting('h1_text_color', array(
	'default' => '#15AABF',
	));
	$wp_customize->add_setting('h2_text_color', array(
	'default' => '#15AABF',
	));
	$wp_customize->add_setting('h3_text_color', array(
	'default' => '#15AABF',
	));
	$wp_customize->add_setting('h4_text_color', array(
	'default' => '#15AABF',
	));
	$wp_customize->add_setting('content_link_color', array(
	'default' => '#333',
	));
	$wp_customize->add_setting('content_link_ro_color', array(
	'default' => '#222',
	));
	$wp_customize->add_setting('header_bg_color', array(
	'default' => '#FFF',
	));
	$wp_customize->add_setting('nav_bg_bar_color', array(
	'default' => '#222',
	));
	$wp_customize->add_setting('nav_color', array(
	'default' => '#FFF',
	));
	$wp_customize->add_setting('nav_hover_color', array(
	'default' => '#333',
	));
	$wp_customize->add_setting('nav_highlight_color', array(
	'default' => '#333',
	));
	$wp_customize->add_setting('hamburger_color', array(
	'default' => '#000',
	));
	$wp_customize->add_setting('hamburger_hover_color', array(
	'default' => '#999',
	));
	$wp_customize->add_setting('body_content_bg_color', array(
	'default' => '#FFF',
	));
	$wp_customize->add_setting('footer_bg_color', array(
	'default' => '#222',
	));
	$wp_customize->add_setting('footer_text_color', array(
	'default' => '#FFF',
	));
	$wp_customize->add_setting('footer_link_color', array(
	'default' => '#15AABF',
	));
	$wp_customize->add_setting('footer_link_ro_color', array(
	'default' => '#FFF',
	));
	$wp_customize->add_setting('form_button_color', array(
	'default' => '#333',
	));
	$wp_customize->add_setting('form_button_ro_color', array(
	'default' => '#222',
	));
	$wp_customize->add_setting('back_to_top_bg_color', array(
	'default' => '#222',
	));
	$wp_customize->add_setting('back_to_top_arrow_color', array(
	'default' => '#FFF',
	));
	$wp_customize->add_setting('pace_loader', array(
	'default' => '#333',
	));
	$wp_customize->add_setting('toggle_active_tab_color', array(
	'default' => '#EEE',
	));
	$wp_customize->add_setting('toggle_active_tab_font_color', array(
	'default' => '#CCC',
	));
	$wp_customize->add_setting('toggle_tab_color', array(
	'default' => '#CCC',
	));
	$wp_customize->add_setting('toggle_tab_font_color', array(
	'default' => '#CCC',
	));
	$wp_customize->add_setting('toggle_tab_hover_color', array(
	'default' => '#CCC',
	));
	$wp_customize->add_setting('toggle_tab_hover_font_color', array(
	'default' => '#CCC',
	));
	$wp_customize->add_setting('toggle_tab_tab_content_background_color', array(
	'default' => '#CCC',
	));
	$wp_customize->add_setting('toggle_tab_tab_content_font_color', array(
	'default' => '#CCC',
	));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'content_text_color', array(
	'label' => __('Text Color', 'catalyst'),
	'section' => 'colors',
	'settings' => 'content_text_color',
	'priority'   => 1
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'content_link_color', array(
	'label' => __('Link Color', 'catalyst'),
	'section' => 'colors',
	'settings' => 'content_link_color',
	'priority'   => 2
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'content_link_ro_color', array(
	'label' => __('Link Rollover Color', 'catalyst'),
	'section' => 'colors',
	'settings' => 'content_link_ro_color',
	'priority'   => 3
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'h1_text_color', array(
	'label' => __('H1 Text Color', 'catalyst'),
	'section' => 'colors',
	'settings' => 'h1_text_color',
	'priority'   => 4
	)));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'h2_text_color', array(
	'label' => __('H2 Text Color', 'catalyst'),
	'section' => 'colors',
	'settings' => 'h2_text_color',
	'priority'   => 5
	)));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'h3_text_color', array(
	'label' => __('H3 Text Color', 'catalyst'),
	'section' => 'colors',
	'settings' => 'h3_text_color',
	'priority'   => 6
	)));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'h4_text_color', array(
	'label' => __('H4 Text Color', 'catalyst'),
	'section' => 'colors',
	'settings' => 'h4_text_color',
	'priority'   => 7
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'header_bg_color', array(
	'label' => __('Header Background Color', 'catalyst'),
	'section' => 'header',
	'settings' => 'header_bg_color',
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_bg_bar_color', array(
	'label' => __('Nav Background Color', 'catalyst'),
	'section' => 'nav',
	'settings' => 'nav_bg_bar_color',
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_color', array(
	'label' => __('Nav Tab Color', 'catalyst'),
	'section' => 'nav',
	'settings' => 'nav_color',
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_hover_color', array(
	'label' => __('Nav Tab Rollover Color', 'catalyst'),
	'section' => 'nav',
	'settings' => 'nav_hover_color',
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_highlight_color', array(
	'label' => __('Nav Tab Highlight Color', 'catalyst'),
	'section' => 'nav',
	'settings' => 'nav_highlight_color',
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_color', array(
	'label' => __('Mobile Nav Color', 'catalyst'),
	'section' => 'nav',
	'settings' => 'hamburger_color',
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_hover_color', array(
	'label' => __('Mobile Nav Hover Color', 'catalyst'),
	'section' => 'nav',
	'settings' => 'hamburger_hover_color',
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'body_content_bg_color', array(
	'label' => __('Body Content BG Color', 'catalyst'),
	'section' => 'colors',
	'settings' => 'body_content_bg_color',
	'priority'   => 8
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_bg_color', array(
	'label' => __('Footer Background Color', 'catalyst'),
	'section' => 'catalyst_footer',
	'settings' => 'footer_bg_color',
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_text_color', array(
	'label' => __('Footer Text Color', 'catalyst'),
	'section' => 'catalyst_footer',
	'settings' => 'footer_text_color',
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_link_color', array(
	'label' => __('Footer Link Color', 'catalyst'),
	'section' => 'catalyst_footer',
	'settings' => 'footer_link_color',
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_link_ro_color', array(
	'label' => __('Footer Link Hover Color', 'catalyst'),
	'section' => 'catalyst_footer',
	'settings' => 'footer_link_ro_color',
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'form_button_color', array(
	'label' => __('Form Button Color', 'catalyst'),
	'section' => 'colors',
	'settings' => 'form_button_color',
	'priority'   => 10
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'form_button_ro_color', array(
	'label' => __('Form Button Hover Color', 'catalyst'),
	'section' => 'colors',
	'settings' => 'form_button_ro_color',
	'priority'   => 11
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'back_to_top_bg_color', array(
	'label' => __('Back to Top Main Color', 'catalyst'),
	'section' => 'colors',
	'settings' => 'back_to_top_bg_color',
	'priority'   => 12
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'back_to_top_arrow_color', array(
	'label' => __('Back to Top Arrow Color', 'catalyst'),
	'section' => 'colors',
	'settings' => 'back_to_top_arrow_color',
	'priority'   => 13
	)));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'pace_loader', array(
	'label' => __('Page Loader Bar', 'catalyst'),
	'section' => 'colors',
	'settings' => 'pace_loader',
	'priority'   => 14
	)));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'toggle_active_tab_color', array(
	'label' => __('Active Tab Color', 'catalyst'),
	'section' => 'bootstrap',
	'settings' => 'toggle_active_tab_color',
	)));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'toggle_active_tab_font_color', array(
	'label' => __('Active Tab Font Color', 'catalyst'),
	'section' => 'bootstrap',
	'settings' => 'toggle_active_tab_font_color',
	)));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'toggle_tab_color', array(
	'label' => __('Tab Color', 'catalyst'),
	'section' => 'bootstrap',
	'settings' => 'toggle_tab_color',
	)));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'toggle_tab_font_color', array(
	'label' => __('Tab Font Color', 'catalyst'),
	'section' => 'bootstrap',
	'settings' => 'toggle_tab_font_color',
	)));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'toggle_tab_hover_color', array(
	'label' => __('Tab Hover Color', 'catalyst'),
	'section' => 'bootstrap',
	'settings' => 'toggle_tab_hover_color',
	)));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'toggle_tab_hover_font_color', array(
	'label' => __('Tab Hover Font Color', 'catalyst'),
	'section' => 'bootstrap',
	'settings' => 'toggle_tab_hover_font_color',
	)));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'toggle_tab_tab_content_background_color', array(
	'label' => __('Tab Content BG Color', 'catalyst'),
	'section' => 'bootstrap',
	'settings' => 'toggle_tab_tab_content_background_color',
	)));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'toggle_tab_tab_content_font_color', array(
	'label' => __('Tab Content Font Color', 'catalyst'),
	'section' => 'bootstrap',
	'settings' => 'toggle_tab_tab_content_font_color',
	)));
	
}//END FUNCTION

//Create the Function that will hook the Outputted CSS into the WP Head
function catalyst_css_customizer(){
?>
<style type="text/css">
<?php if (get_theme_mod( 'content_text_color')): ?>
body, p, li {
 color:<?php echo get_theme_mod('content_text_color'); ?>
}
<?php else: ?>
<?php endif; ?>
<?php if (get_theme_mod( 'content_link_color')): ?>
a, a:visited {
 color:<?php echo get_theme_mod('content_link_color'); ?>
}
<?php else: ?>
<?php endif; ?>
<?php if (get_theme_mod( 'content_link_ro_color')): ?>
a:hover {
 color:<?php echo get_theme_mod('content_link_ro_color'); ?>
}
<?php else: ?>
<?php endif; ?>

<?php if (get_theme_mod('h1_text_color')): ?>
h1{
	color:<?php echo get_theme_mod('h1_text_color'); ?>
}
<?php else: ?>
<?php endif; ?>

<?php if (get_theme_mod('h2_text_color')): ?>
h2{
	color:<?php echo get_theme_mod('h2_text_color'); ?>
}
<?php else: ?>
<?php endif; ?>

<?php if (get_theme_mod('h3_text_color')): ?>
h3{
	color:<?php echo get_theme_mod('h3_text_color'); ?>
}
<?php else: ?>
<?php endif; ?>

<?php if (get_theme_mod('h4_text_color')): ?>
h4{
	color:<?php echo get_theme_mod('h4_text_color'); ?>
}
<?php else: ?>
<?php endif; ?>


<?php if (get_theme_mod( 'header_bg_color')): ?>
/*NAV*/
header {
 background:<?php echo get_theme_mod('header_bg_color');
?>;
}
<?php else: ?>
<?php endif; ?>
<?php if (get_theme_mod( 'nav_bg_bar_color')): ?>
/*NAV*/
#nav {
 background:<?php echo get_theme_mod('nav_bg_bar_color');
?>;
}
<?php else: ?>
<?php endif; ?>
<?php if (get_theme_mod( 'nav_color')): ?>
#nav li a, #nav li a:visited {
 color:<?php echo get_theme_mod('nav_color'); ?>
}
<?php else: ?>
<?php endif; ?>
<?php if (get_theme_mod( 'nav_hover_color')): ?>
#nav li a:hover {
 color:<?php echo get_theme_mod('nav_hover_color'); ?>
}
<?php else: ?>
<?php endif; ?>
<?php if (get_theme_mod( 'nav_highlight_color')): ?>
#nav .current_page_item > a, #nav .current_page_ancestor > a {
 color:<?php echo get_theme_mod('nav_highlight_color'); ?> !important;
}
<?php else: ?>
<?php endif; ?>
<?php if (get_theme_mod( 'hamburger_color')): ?>
.navbar-toggle .fa-bars {
    color:<?php echo get_theme_mod('hamburger_color'); ?> !important;
}
<?php endif; ?>
<?php if (get_theme_mod( 'hamburger_hover_color')): ?>
.navbar-toggle:hover .fa-bars, .navbar-toggle:focus .fa-bars{
	color:<?php echo get_theme_mod('hamburger_hover_color'); ?> !important;
}
<?php endif; ?>
<?php if (get_theme_mod( 'body_content_bg_color')): ?>
/*BODY SECTION*/
main{
 background:<?php echo get_theme_mod('body_content_bg_color') ?>;
}
<?php else: ?>
<?php endif; ?>

<?php if (get_theme_mod( 'footer_bg_color')): ?>
/*FOOTER SECTION*/
footer{
 background-color:<?php echo get_theme_mod('footer_bg_color'); ?>
}
<?php else: ?>
<?php endif; ?>
<?php if (get_theme_mod( 'footer_text_color')): ?>
footer, footer p, footer h1, footer h2, footer h3, footer h4, footer h5{
 color:<?php echo get_theme_mod('footer_text_color'); ?>
}
<?php else: ?>
<?php endif; ?>
<?php if (get_theme_mod( 'footer_link_color')): ?>
/*FOOTER SECTION*/
footer a, footer a:visited {
 color:<?php echo get_theme_mod('footer_link_color'); ?>
}
<?php else: ?>
<?php endif; ?>
<?php if (get_theme_mod( 'footer_link_ro_color')): ?>
footer a:hover {
 color:<?php echo get_theme_mod('footer_link_ro_color'); ?>
}
<?php else: ?>
<?php endif; ?>
<?php if (get_theme_mod( 'form_button_color')): ?>
/****OTHER***/
input[type=submit] {
 background:<?php echo get_theme_mod('form_button_color'); ?>
}
<?php else: ?>
<?php endif; ?>
<?php if (get_theme_mod( 'form_button_ro_color')): ?>
input[type=submit]:hover {
 background:<?php echo get_theme_mod('form_button_ro_color'); ?>
}
<?php else: ?>
<?php endif; ?>

<?php if (get_theme_mod( 'back_to_top_bg_color')): ?>
#smoothup {
 background-color:<?php echo get_theme_mod('back_to_top_bg_color'); ?>
}
<?php else: ?>
<?php endif; ?>

<?php if (get_theme_mod( 'back_to_top_arrow_color')): ?>
#smoothup .fa {
color:<?php echo get_theme_mod('back_to_top_arrow_color'); ?>
}
<?php else: ?>
<?php endif; ?>

<?php if (get_theme_mod( 'pace_loader')): ?>
.pace .pace-progress {
background:<?php echo get_theme_mod('pace_loader'); ?>
}
<?php else: ?>
<?php endif; ?>

<?php /*?>+++++++++++++++++++++BOOTSTRAP+++++++++++++++++++++++++++++++++++++++<?php */?>
<?php if(get_theme_mod('toggle_active_tab_color') != ""): ?>
.nav-tabs > li.active > a{
	background:<?php echo get_theme_mod('toggle_active_tab_color'); ?>;
}
<?php else: ?>
<?php endif; ?>
<?php if(get_theme_mod('toggle_active_tab_font_color') != ""): ?>
.nav-tabs > li.active > a{
	color:<?php echo get_theme_mod('toggle_active_tab_font_color'); ?>;
}
<?php else: ?>
<?php endif; ?>
<?php if(get_theme_mod('toggle_tab_color') != ""): ?>
.nav-tabs > li > a{
	background:<?php echo get_theme_mod('toggle_tab_color'); ?>;
}
<?php else: ?>
<?php endif; ?>
<?php if(get_theme_mod('toggle_tab_font_color') != ""): ?>
.nav-tabs > li > a{
	color:<?php echo get_theme_mod('toggle_tab_font_color'); ?>;
}
<?php else: ?>
<?php endif; ?>
<?php if(get_theme_mod('toggle_tab_hover_color') != ""): ?>
.nav-tabs > li > a:hover{
	background:<?php echo get_theme_mod('toggle_tab_hover_color'); ?>;
}
<?php else: ?>
<?php endif; ?>
<?php if(get_theme_mod('toggle_tab_hover_font_color') != ""): ?>
.nav-tabs > li > a:hover{
	color:<?php echo get_theme_mod('toggle_tab_hover_font_color'); ?>;
}
<?php else: ?>
<?php endif; ?>
<?php if(get_theme_mod('toggle_tab_tab_content_background_color') != ""): ?>
.tab-content{
	background:<?php echo get_theme_mod('toggle_tab_tab_content_background_color'); ?>;
}
<?php else: ?>
<?php endif; ?>
<?php if(get_theme_mod('toggle_tab_tab_content_font_color') != ""): ?>
.tab-content{
	color:<?php echo get_theme_mod('toggle_tab_tab_content_font_color'); ?>;
}<?php else: ?><?php endif; ?></style>
<?php
}//END CSS CUSTOMIZER FUNCTION
add_action('wp_head','catalyst_css_customizer');
add_action('customize_register','catalyst_customize_register');
?>