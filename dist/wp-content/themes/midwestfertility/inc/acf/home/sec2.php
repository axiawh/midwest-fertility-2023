<?php if(have_rows('sec_2_physician_set')): ?>
<div class="sec2">
	<section>
		<?php if(get_field('section_2_section_title')): ?><h2 class="section-title"><?php the_field('section_2_section_title'); ?></h2><?php endif; ?>
		
  <?php while(have_rows('sec_2_physician_set')): the_row(); ?>
		 <aside>
		<?php if(get_sub_field('physician_link')): ?><?php $physician_link = get_sub_field('physician_link'); ?><a href="<?php echo $physician_link['url']; ?>" target="<?php echo $physician_link['target']; ?>"><?php endif; ?>
 <div class="physician-photo-container"<?php if(get_sub_field('physician_headshot')): $physician_headshot= wp_get_attachment_image_src(get_sub_field('physician_headshot'), 'mediumlarge'); ?> style="background-image:url(<?php echo $physician_headshot[0]; ?>);"<?php endif; ?>></div><?php if(get_sub_field('physician_link')): ?></a><?php endif; ?>
		<?php if(get_sub_field('physician_name')): ?><h4><?php the_sub_field('physician_name'); ?></h4><?php endif; ?>

 <?php if(get_sub_field('physician_secondary_line')): ?><p><?php the_sub_field('physician_secondary_line'); ?></p><?php endif; ?>
			 </aside>
 <?php endwhile; ?>
		  </section>
</div>
<?php endif; ?>