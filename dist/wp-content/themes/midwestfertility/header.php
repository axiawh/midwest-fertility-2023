<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> </title>
<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, print" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<?php the_field('head_region','options'); // Global Header Code (ie: FB Pixel) ?>
<?php if(get_field('head_scripts')): // Page Specific Header Code ?><?php the_field('head_scripts'); ?><?php endif; ?>
<?php the_field('google_analytics_code','options'); ?>
</head>
<body <?php body_class(); ?>>
   <?php get_template_part('/inc/acf/full-screen-nav', 'ACF - Full Screen Navigation'); ?>
<?php the_field('body_region','options'); ?>
 <?php get_template_part('/inc/acf/alertbox', 'Alert Box'); ?>
	<?php get_template_part('/inc/acf/side-magnet', 'Side Magnet CTA'); ?>
	<?php get_template_part('/inc/acf/utility', 'Utility'); ?>
<div id="scrolltotop"></div><a href="#top" id="smoothup" title="Back to top"><i class="fa fa-arrow-up"></i></a>
<?php if(is_page_template('page-landing-page.php')): ?><?php else:?><header class="header-main">
    <section>
    <aside>
    <?php get_template_part('/inc/acf/logo', 'ACF - Logo'); ?></aside>

    <?php if(get_field('mobile_navigation_choice', 'options') == "Traditional"): ?><div class="hamburger-menu-wrapper col-xs-2">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
		</div><?php else: ?> <div id="full-screen-hamburger-nav-container">
   <i class="fa fa-bars fa-2x" style="cursor: pointer;" onclick="openfullscreennav()"></i>
</div><?php endif; ?>
            <?php /*?>----------------------> Hamburger Menu Ends <-----------------------<?php */?>

    </section>
    <?php /*?>----------------------> Header Container Ends <-----------------------<?php */?>
  <hr />
    <div class="navbar navbar-default" role="navigation">
	   	<div class="navbar-collapse collapse show regularnav" id="nav">
	   	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'before' => '<img src="/wp-content/uploads/2019/12/ro-nav-tab.png">', 'container_id' => 'nav-container', 'theme_location' => 'primary-menu', 'items_wrap' => '<ul id="menu" class="nav navbar-nav">%3$s</ul><div class="clear"></div>'  ) ); ?>
		</div>

        </div><?php /*?>----------------------> JS Rules Depending on Nav Selection <-----------------------<?php */?>
	<?php if(get_field('mobile_navigation_choice', 'options') == "Full Screen"): ?>
		<script type="text/javascript">
if(jQuery(window).width() < 767){
    jQuery('.regularnav').css('display', 'none');
}
		</script><?php else: ?><script type="text/javascript">
if(jQuery(window).width() < 767){
    jQuery('.regularnav').removeClass('show');
}
		</script><?php endif; ?>
	        <?php /*?>----------------------> Navigation Ends <-----------------------<?php */?>
	</header><?php endif; ?>
        <?php /*?>----------------------> Header Ends <-----------------------<?php */?>