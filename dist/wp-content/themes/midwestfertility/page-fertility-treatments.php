<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Fertility Treatments
*/
get_header(); ?>
<?php get_template_part( 'inc/acf/mast', 'mast' ); ?>

<main>
    
   <?php get_template_part( '/inc/loops/page-loop', 'page'); ?>
               
</main><?php /*?>-------> Body Content Ends <-------<?php */?>
<?php get_footer(); ?>