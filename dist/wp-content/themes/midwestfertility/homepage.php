<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Home
*/
get_header(); ?>
<?php get_template_part('/inc/acf/home/popup', 'ACF - Auto Load Lightbox'); ?>
<?php if(get_field('home_mast_slideshow_id')): ?><div id="mast">
    <?php $slider = get_field('home_mast_slideshow_id'); echo do_shortcode('[soliloquy id="'.$slider.'"]'); ?>
	
<?php get_template_part( '/inc/acf/home/mast-ad-box', 'Mast Ad Boxes'); ?>
		
	
</div><?php /*?>----------------------> Mast Ends <-----------------------<?php */?><?php endif; ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     <div class="content-loop" id="post-<?php the_ID(); ?>">
                    <div class="sec0"><section><?php the_content(); ?></section></div>
					<?php get_template_part( '/inc/acf/home/sec1', 'Section 1'); ?>
					<?php get_template_part( '/inc/acf/home/sec2', 'Section 2'); ?>  
                    <?php get_template_part( '/inc/acf/home/sec3', 'Section 3'); ?>  
                    <?php get_template_part( '/inc/acf/home/sec4', 'Section 4'); ?>  
                    <?php get_template_part( '/inc/acf/home/sec5', 'Section 5'); ?>
                    <?php get_template_part( '/inc/acf/flexible-content', 'ACF Flexible Content'); ?>  
                    
                     <?php edit_post_link('<button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit This Page</button>', '<p class="clear">', '</p>'); ?>
    		</div><!--End Loop-->
             <?php endwhile; endif; ?>
        
    
    <?php get_template_part( '/inc/acf/flexible-content-full', 'ACF Flexible Content'); ?>  
</main><?php /*?>-------> Body Content Ends <-------<?php */?>
<?php get_footer(); ?>