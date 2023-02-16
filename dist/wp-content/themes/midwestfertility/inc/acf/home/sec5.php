<div class="sec5">
	<section>
        <aside>
		  <div class="sec5-header">
			  <?php if(get_field('section_5_title')): ?><h2 class="section-title"><?php the_field('section_5_title'); ?></h2><?php endif; ?>
			  <?php if(get_field('section_5_lead_link')): ?><?php $section_5_lead_link = get_field('section_5_lead_link'); ?><p><a href="<?php echo $section_5_lead_link['url']; ?>" target="<?php echo $section_5_lead_link['target']; ?>"><?php if($section_5_lead_link['title']): ?><?php echo $section_5_lead_link['title']; ?><?php else: ?>More Info<?php endif; ?></a></p><?php endif; ?>
            </div>
            <?php 
  $the_query = new WP_Query(
 array(
  'posts_per_page' => 2,
'paged'=> $paged,
 )); ?>
 <?php if($the_query->have_posts()): ?>
  <?php while($the_query->have_posts()): $the_query->the_post(); ?>

    <?php if(has_post_thumbnail()): 
$thumb = get_post_thumbnail_id();
$featuredimage = wp_get_attachment_image_src($thumb,'mediumlarge', true);
?><?php endif; ?>
      <?php $acfdefaultimg=wp_get_attachment_image_src(get_field('blog_default_image','options'), 'mediumlarge'); ?>
   <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><div class="home-blog-featured-image" style="background-image:url(<?php if(has_post_thumbnail()): ?><?php echo $featuredimage[0]; ?><?php else: ?><?php echo $acfdefaultimg[0]; ?><?php endif; ?>);">

   <h3><?php the_title(); ?></h3>
     <div class="fade-overlay"></div>  </div></a>

  <?php endwhile; ?>

  <?php else: ?><h3>NO BLOG POSTS</h3>
  <?php endif; ?>
 <?php wp_reset_postdata(); ?>
        
        </aside>
        <aside>
			
			<?php
			$featuredimage = wp_get_attachment_image_src(get_field('sec_5_video_thumbnail'), 'large');
		    $video_id = get_field('sec_5_featured_video_id'); ?>
			
			<a href="<?php the_field('sec_5_video_url'); ?>?rel=0"><div class="sec5-featured-video" style="background-image: url(<?php if(get_sub_field('video_thumbnail')): ?><?php echo $sec_5_video_thumbnail[0]; ?><?php else: ?>https://img.youtube.com/vi/<?php echo $video_id; ?>/maxresdefault.jpg<?php endif; ?>)"><i class="fab fa-youtube fa-5x"></i></div></a>
		<?php if(get_field('sec_5_video_title')): ?><h2><?php the_field('sec_5_video_title'); ?></h2><?php endif; ?>

		<?php if(get_field('sec_5_video_description')): ?><p><?php the_field('sec_5_video_description'); ?></p><?php endif; ?>

            </aside>
  </section>
</div>