<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
<?php get_template_part( 'inc/acf/mast', 'mast' ); ?>

<main>
    <div id="body-content-container">
             
    <?php get_template_part( '/inc/loops/category-loop','Category - Blog Post - Loop'); ?>

	<div class="clear"></div>
    	</div><?php /*?>-------> Body Content Container Ends <-------<?php */?>
</main><?php /*?>-------> Body Content Ends <-------<?php */?>
<?php get_footer(); ?>