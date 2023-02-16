  <?php // -------------------------------> Ad Box <-------------------------------- ?>              
<?php if(get_row_layout() == 'ad_boxes'): ?>
	
<?php if(have_rows('ad_box_set')): ?>
<div class="ad-box-container">
    <section>
  <?php while(have_rows('ad_box_set')): the_row(); ?>
<aside> <?php if(get_sub_field('ad_box_link')): ?><?php $ad_box_link = get_sub_field('ad_box_link'); ?><a href="<?php echo $ad_box_link['url']; ?>" target="<?php echo $ad_box_link['target']; ?>"><?php endif; ?><?php $ad_box_featured_image = get_sub_field('ad_box_featured_image'); $size = 'medium'; echo wp_get_attachment_image( $ad_box_featured_image, $size ); ?><?php if(get_sub_field('ad_box_link')): ?></a><?php endif; ?>

    <?php if(get_sub_field('ad_box_title')): ?><h4><?php the_sub_field('ad_box_title'); ?></h4><?php endif; ?>
    <?php if(get_sub_field('ad_box_description')): ?><p><?php the_sub_field('ad_box_description'); ?></p><?php endif; ?>
	<?php if(get_sub_field('ad_box_link')): ?><center><a class="button" href="<?php echo $ad_box_link['url']; ?>" target="<?php echo $ad_box_link['target']; ?>"><?php if($ad_box_link['title']): ?><?php echo $ad_box_link['title']; ?><?php else: ?>More Info<?php endif; ?></a></center><?php endif; ?>

        </aside>
 <?php endwhile; ?>
    </section></div>
<?php endif; ?>


<?php endif; ?>  