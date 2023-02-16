<?php // -------------------------------> Blog Feed <-------------------------------- ?>
<?php 
	// Check the Current Row Layout
	if(get_row_layout() == 'blog_feed') : ?>
<?php 
$blog_feed_articles = get_sub_field('blog_feed_articles');
  $the_query = new WP_Query(
 array(
  'posts_per_page' => $blog_feed_articles,
 )); ?>
 <?php if($the_query->have_posts()): ?>
<?php if(get_sub_field('blog_feed_main_title')): ?> <h2 class="blog-feed-title"><?php the_sub_field('blog_feed_main_title'); ?></h2><?php endif; ?>
 <div class="blog-feed-container">
  <?php while($the_query->have_posts()): $the_query->the_post(); ?>
  <aside>
   <?php get_template_part('/inc/acf/blog/featured-image','ACF - Featured Image'); ?>
   <h3><?php the_title(); ?></h3>
   <?php if(get_sub_field('turn_off_blog_excerpt')): ?><?php else: ?><p><?php the_excerpt(); ?></p><?php endif; ?>
  </aside>
  <?php endwhile; ?>
  <?php else: ?><h3>NO BLOG POSTS</h3>
  <?php endif; ?>
 <?php wp_reset_postdata(); ?>
</div>
<?php endif; ?>