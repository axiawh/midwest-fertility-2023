 <?php $postthumbid = get_post_thumbnail_id();
		$postthumbidimg = wp_get_attachment_image_src($postthumbid,'large',true); 
			$acfdefaultimg=wp_get_attachment_image_src(get_field('blog_default_image','options'), 'mediumlarge');
			?>
<?php if(has_post_thumbnail() || get_field('blog_default_image','options')): ?><a class="featured-post-image-link" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><div class="featured-post-image"<?php if(has_post_thumbnail()): ?> style="background-image: url(<?php echo $postthumbidimg[0]; ?>)"<?php elseif(get_field('blog_default_image','options')): ?>style="background-image: url(<?php echo $acfdefaultimg[0]; ?>"<?php else: ?><?php endif; ?>></div></a><!--Featured Image Ends--><?php endif; ?>