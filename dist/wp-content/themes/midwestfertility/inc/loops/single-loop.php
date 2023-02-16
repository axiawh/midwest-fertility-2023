<?php if(get_field('singular_blog_post_design_style','options') == 'Default'): ?><div id="left-body-col-container"><?php endif; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="single-post-container"<?php if(get_field('singular_blog_post_design_style','options') == 'Medium'): ?> class="medium-blog-theme-container"<?php endif; ?>>
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<?php if(get_field('singular_blog_post_design_style','options')=="Medium"): ?><h1 class="entry-title"><?php the_title(); ?></h1><?php endif; ?>
		<?php get_template_part( '/inc/acf/blog/meta-info', 'Meta Info - Author + Date'); ?>
		<?php if(get_field('single_post_page_featured_image','options')): ?><?php else: ?><div class="featuredimage"><?php the_post_thumbnail(xlarge); ?></div><?php endif; ?>
		<div class="single-post-content">
			<?php the_content(); ?>
			<p><?php get_template_part( '/inc/social-share', 'Social Share Icons'); ?></p>
		</div>
	</article>
</div>
	
<?php /*?>------------------------------> Author Profile Box + Comments + Pagination <------------------------<?php */?>
	<?php get_template_part( '/inc/acf/blog/author-profile-box', 'Author Profile Box'); ?>
<?php if(get_field('comment_box','options')): ?><?php else: ?><?php comments_template(); ?><?php endif; ?>

  <ul class="pagination justify-content-center">
    <li class="page-item previous"><?php previous_post_link('%link') ?></li>
			<li class="page-item next"><?php next_post_link('%link') ?></li>
		</ul>

<?php if(get_field('singular_blog_post_design_style','options') == 'Default'): ?></div><?php endif; ?>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php if(get_field('singular_blog_post_design_style','options') == 'Default'): ?>
<div id="right-side-col-container">
         <?php get_template_part( '/inc/loops/sidebar-loop', 'sidebar'); ?>
        </div>
<?php endif; ?>