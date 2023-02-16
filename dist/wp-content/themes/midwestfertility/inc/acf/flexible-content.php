<?php
if( have_rows('customize_your_page') ): ?>
     <?php // -------------------------------> Flexible Content Start <--------------------------------
    while ( have_rows('customize_your_page') ) : the_row(); ?>
    
		<?php get_template_part( '/inc/acf/flexible/wysiwyg-rich-full-width', 'WYSIWYG Rich Text Editor Full Width Content'); ?> 
		<?php get_template_part( '/inc/acf/flexible/headline-text', 'Headline Text'); ?>   
		<?php get_template_part( '/inc/acf/flexible/two-col-layout', '2 Column Even Layout'); ?>  
		<?php get_template_part( '/inc/acf/flexible/two-col-left-heavy-layout', '2 Column Left Heavy Layout'); ?>
		<?php get_template_part( '/inc/acf/flexible/two-col-right-heavy-layout', '2 Column Right Heavy Layout'); ?>
		<?php get_template_part( '/inc/acf/flexible/three-col-layout', '3 Column Layout'); ?>
		<?php get_template_part( '/inc/acf/flexible/four-col-layout', '4 Column Layout'); ?>
		<?php get_template_part( '/inc/acf/flexible/accordion-box', 'Accordion Box'); ?>
		<?php get_template_part( '/inc/acf/flexible/staff', 'Staff Set'); ?>
		<?php get_template_part( '/inc/acf/flexible/product', 'Product Set'); ?>
		<?php get_template_part( '/inc/acf/flexible/video-gallery', 'Video Gallery'); ?>
		<?php get_template_part( '/inc/acf/flexible/events', 'Events'); ?>
		<?php get_template_part( '/inc/acf/flexible/text-slider', 'Text Slider'); ?>
		<?php get_template_part( '/inc/acf/flexible/parallax', 'Parallax'); ?>
		<?php get_template_part( '/inc/acf/flexible/zig-zag-box', 'Zig Zag Box'); ?>
		<?php get_template_part( '/inc/acf/flexible/toggle-tabs', 'Toggle Tab Section'); ?>
		<?php get_template_part( '/inc/acf/flexible/ad-box', 'Ad Boxes with Flex'); ?>
		<?php get_template_part( '/inc/acf/flexible/number-feature', 'Featured Number with Description'); ?>   
		<?php get_template_part( '/inc/acf/flexible/html-code', 'HTML Code'); ?>
		<?php get_template_part( '/inc/acf/flexible/blog-feed', 'Blog Feed'); ?>
		<?php get_template_part( '/inc/acf/flexible/table-build', 'Table Build'); ?>
        <?php get_template_part( '/inc/acf/flexible/spacer', 'Spacer / Padding Between Elements'); ?>        
       
    <?php endwhile; ?>
<?php else : ?>
    <?php // no layouts found ?>
<?php endif; ?>