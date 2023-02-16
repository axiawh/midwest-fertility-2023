<?php if(have_rows('sec_1_ad_box_set')): ?>
<div class="sec1">
	<section>
  <?php while(have_rows('sec_1_ad_box_set')): the_row(); ?>
		<aside>
			<div class="ad-box-photo-bg-container"<?php if(get_sub_field('ad_box_featured_image')): $ad_box_featured_image = wp_get_attachment_image_src(get_sub_field('ad_box_featured_image'), 'mediumlarge'); ?> style="background-image:url(<?php echo $ad_box_featured_image[0]; ?>);"<?php endif; ?>></div>
			
			<div class="ad-box-photo-content-container">
				<?php if(get_sub_field('ad_box_title')): ?><h3><?php the_sub_field('ad_box_title'); ?></h3><?php endif; ?>

 <?php if(get_sub_field('ad_box_description')): ?><p><?php the_sub_field('ad_box_description'); ?></p><?php endif; ?>
			
			<?php if(get_sub_field('ad_box_link')): ?><?php $ad_box_link = get_sub_field('ad_box_link'); ?><a class="button" href="<?php echo $ad_box_link['url']; ?>" target="<?php echo $ad_box_link['target']; ?>"><?php if($ad_box_link['title']): ?><?php echo $ad_box_link['title']; ?><?php else: ?>More Info<?php endif; ?></a><?php endif; ?>
</div>
		</aside>
 <?php endwhile; ?>  
	</section>
</div>
<?php endif; ?>
