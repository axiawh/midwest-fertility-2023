<?php /*?>--------------------------------> Success Stories CPT LOOP <----------------------------<?php */?>

<?php if (have_posts()) : ?>
<div class="success-story-lp-container">
		<?php while (have_posts()) : the_post(); ?>
        	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				        
   <?php $postthumbid = get_post_thumbnail_id();
		$postthumbidimg = wp_get_attachment_image_src($postthumbid,large,true); 
			$acfdefaultimg=wp_get_attachment_image_src(get_field('blog_default_image','options'), large);
			?>
  <?php if(has_post_thumbnail()): ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><div class="featured-post-image"<?php if(has_post_thumbnail()): ?> style="background-image: url(<?php echo $postthumbidimg[0]; ?>)"<?php elseif(get_field('blog_default_image','options')): ?>style="background-image: url(<?php echo $acfdefaultimg[0]; ?>"<?php else: ?><?php endif; ?>></div></a><!--Featured Image Ends--><?php endif; ?>
                    <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                   <?php /*?><?php the_excerpt(); ?><?php */?>
                   		  </article><!--Article Ends-->
                        <?php endwhile; ?></div><!--Container Ends-->
                    
                      <?php if(get_next_posts_link() || get_previous_posts_link()): ?>
<?php get_template_part('/inc/acf/blog/pagination','ACF - Pagination'); ?>

  <?php else: ?><?php endif; ?>

	<?php else : ?>

		<h2>No Success Stories Found</h2>
		<p>Please create one to display on this page.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>