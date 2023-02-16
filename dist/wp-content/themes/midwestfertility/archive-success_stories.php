<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<?php get_template_part( 'inc/acf/mast', 'interior mast' ); ?>

<main>
    <div id="body-content-container">
    <?php get_template_part( '/inc/loops/cpt/cpt-success-stories', 'CPT - Success Stories Archive Loop'); ?>
   
	</div><!--Body Content Container Ends-->
</main><!--Body Content Ends-->
<?php get_footer(); ?>