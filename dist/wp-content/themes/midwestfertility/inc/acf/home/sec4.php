<div class="sec4">
	<section>
        <aside <?php if(get_field('section_4_featured_image')): $section_4_featured_image = wp_get_attachment_image_src(get_field('section_4_featured_image'), 'xxlarge'); ?> style="background-image:url(<?php echo $section_4_featured_image[0]; ?>);"<?php endif; ?>></aside>
       
			<?php if(have_rows('featured_testimonials_set')): ?>
		<aside>
			
  <?php while(have_rows('featured_testimonials_set')): the_row(); ?>
		 <div class="featured-testimonial-set">
			<?php if(get_sub_field('testimonial_headline')): ?><h2><?php the_sub_field('testimonial_headline'); ?></h2><?php endif; ?>
<?php if(get_sub_field('testimonial')): ?><p><?php the_sub_field('testimonial'); ?></p><?php endif; ?>
<?php if(get_sub_field('testimonial_author')): ?><cite>- <?php the_sub_field('testimonial_author'); ?></cite><?php endif; ?>
<hr />
			</div>
 <?php endwhile; ?>
			</aside>
<?php endif; ?>
		  </section>
</div>