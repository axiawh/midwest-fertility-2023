<div class="sec3"<?php if(get_field('section_3_featured_image')): $section_3_featured_image = wp_get_attachment_image_src(get_field('section_3_featured_image'), 'xxlarge'); ?> style="background-image:url(<?php echo $section_3_featured_image[0]; ?>);"<?php endif; ?>>
	<section>
        <aside>
			<?php if(get_field('section_3_parallax_title')): ?><h2><?php the_field('section_3_parallax_title'); ?></h2><?php endif; ?>

		<?php if(get_field('section_3_description')): ?><p><?php the_field('section_3_description'); ?></p><?php endif; ?>

        <?php if(get_field('section_3_cta_link')): ?><?php $section_3_cta_link = get_field('section_3_cta_link'); ?><a class="button" href="<?php echo $section_3_cta_link['url']; ?>" target="<?php echo $section_3_cta_link['target']; ?>"><?php if($section_3_cta_link['title']): ?><?php echo $section_3_cta_link['title']; ?><?php else: ?>More Info<?php endif; ?></a><?php endif; ?>

            </aside>
  </section>
</div>