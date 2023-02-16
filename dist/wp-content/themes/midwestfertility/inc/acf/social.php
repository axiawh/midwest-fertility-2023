<div class="social-icons"><?php if(get_field('facebook_url','options') != ""): ?>
      <a href="<?php the_field('facebook_url','options'); ?>" target="_blank" title="Become a Fan on Facebook"><i class="fab fa-facebook-f fa-3x"></i></a>
	<?php endif; ?>

      <?php if(get_field('twitter_url','options') != ""): ?>
      <a href="<?php the_field('twitter_url','options'); ?>" target="_blank" title="Follow Us on Twitter"><i class="fab fa-twitter fa-3x"></i></a>
	<?php endif; ?>

      <?php if(get_field('youtube_url','options') != ""): ?>
      <a href="<?php the_field('youtube_url','options'); ?>" target="_blank" title="Subscribe to our YouTube Channel"><i class="fab fa-youtube fa-3x"></i></a>
	<?php endif; ?>
	
	      <?php if(get_field('instagram_url','options') != ""): ?>
      <a href="<?php the_field('instagram_url','options'); ?>" target="_blank" title="Follow Us on Instagram"><i class="fab fa-instagram fa-3x"></i></a>
	<?php endif; ?>

        <?php if(get_field('google_review_place_id','options') != ""): ?>
      <a href="https://search.google.com/local/writereview?placeid=<?php the_field('google_review_place_id','options'); ?>" target="_blank" title="Review Us on Google"><i class="fab fa-google fa-3x"></i></a>
	<?php endif; ?>

      <?php if(get_field('linkedin_url','options') != ""): ?>
      <a href="<?php the_field('linkedin_url','options'); ?>" target="_blank" title="Follow Us on LinkedIn"><i class="fab fa-linkedin fa-3x"></i></a>
	<?php endif; ?>

      <?php if(get_field('pinterest_url','options') != ""): ?>
      <a href="<?php the_field('pinterest_url','options'); ?>" target="_blank" title="Pin Us on Pinterest"><i class="fab fa-pinterest fa-3x"></i></a>
	<?php endif; ?>

	  <?php if(get_field('add_a_blog_icon', 'options')=='yes' and get_field('blog_url', 'options') !=""): ?>
      <a href="<?php the_field('blog_url','options'); ?>" title="View Blog"><i class="fas fa-rss fa-3x"></i></a>
	<?php endif; ?>
    
		<?php if(have_rows('image_icon_set', 'options')): //----------------> Add Image Icon ACF Repeater ?>
    <?php while(have_rows('image_icon_set', 'options')): the_row(); $imageicon = wp_get_attachment_image_src(get_sub_field('image_icon', 'options'), 'medium'); ?>
    	<a href="<?php the_sub_field('image_link', 'options'); ?>" <?php if(get_sub_field('open_image_link_in_a_new_window', 'options')): ?>target="blank"<?php endif; ?> /><img src="<?php echo $imageicon[0]; ?>" alt="<?php the_sub_field('image_alt_tag', 'options'); ?>" /></a>
    <?php endwhile; ?>
    <?php endif; ?>
	
	  </div>