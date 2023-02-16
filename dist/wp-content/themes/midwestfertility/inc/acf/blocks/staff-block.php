<?php 
/* ## Staff Block - Grid Format
--------------------------------------------- */

/* ## Create class attribute allowing for custom "className" and "align" values.
--------------------------------------------- */
$className = 'staff_block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

/* ## Repeater
--------------------------------------------- */
?>
<?php if(have_rows('staff_set_block')): ?>
<div class="grid-staff-set <?php echo esc_attr($className); ?>">
  <?php while(have_rows('staff_set_block')): the_row(); ?>
	<aside>
    <?php 
        /* ## Variables
--------------------------------------------- */
        $link = get_sub_field('link'); 
        $headshot = wp_get_attachment_image_src(get_sub_field('headshot'), 'large');
        ?>
        
<?php if(get_sub_field('link')): ?><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" title="<?php the_sub_field('name'); ?>"><?php endif; ?><?php if(get_sub_field('headshot')): ?> <div class="headshot-featured-image" style="background-image:url(<?php echo $headshot[0]; ?>)";><section><?php if(get_sub_field('name')): ?><h3><?php the_sub_field('name'); ?></h3><?php if(get_sub_field('title')): ?><p><?php the_sub_field('title'); ?></p><?php endif; ?></section>
		<?php if(get_sub_field('special_announcement')): ?><div class="staff-announcement"><?php the_sub_field('special_announcement'); ?></div><?php endif; ?>
<?php endif; ?>
</div><?php endif; ?><?php if(get_sub_field('link')): ?></a><?php endif; ?>
</aside>
 <?php endwhile; ?>
	</div>
<?php endif; ?>