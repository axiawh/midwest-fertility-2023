<?php
/* ## Blog Feed Block
--------------------------------------------- */

/* ## Create class attribute allowing for custom "className" and "align" values.
--------------------------------------------- */
$className = 'blog_block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

/* ## Variables
--------------------------------------------- */
$blog_feed_block_articles = get_field('blog_feed_block_articles');
$the_query = new WP_Query(
 array(
  'posts_per_page' => $blog_feed_block_articles,
 )); 
?>
<?php 
/* ## The Query
--------------------------------------------- */
if($the_query->have_posts()): ?>
 <div class="blog-feed-container">
  <?php while($the_query->have_posts()): $the_query->the_post(); ?>
  <aside>
   <?php get_template_part('/inc/acf/blog/featured-image','ACF - Featured Image'); ?>
   <h3><?php the_title(); ?></h3>
   <?php if(get_field('turn_off_blog_block_excerpt')): ?><?php else: ?><p><?php the_excerpt(); ?></p><?php endif; ?>
  </aside>
  <?php endwhile; ?>
  <?php else: ?><h3>NO BLOG POSTS</h3>
  <?php endif; ?>
 <?php wp_reset_postdata(); ?>
</div>