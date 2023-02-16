<div id="left-body-col-container">
<?php if (have_posts()) : ?>
<div id="<?php if(get_field('blog_design_style','options') == 'Masonry'): ?>post-masonry-landing-page-container<?php else: ?>post-landing-page-container<?php endif; ?>"><?php if(get_field('blog_landing_page_content', 'options')): ?><?php the_field('blog_landing_page_content', 'options'); ?><?php endif; ?>
		<?php while (have_posts()) : the_post(); ?>
        
        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            
      <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<?php if(get_field('blog_date','options') and get_field('blog_author_byline','options') !=""): // NO TO BOTH DATE + AUTHOR ?>
				
				 <?php elseif(get_field('blog_date','options')): // NO BLOG DATE ONLY ?>
				<div id="author-box"><div id="left-author-box"> <?php get_template_part( '/inc/acf/blog/userphoto', 'Blog User Photo'); ?> by <?php the_author_posts_link() ?></div><div class="clear"></div>
				</div>
				
                <?php elseif(get_field('blog_author_byline','options')): // NO AUTHOR ONLY ?>
         	<div id="author-box"><div id="left-author-box"><i class="fa fa-calendar"></i> &nbsp;<?php the_time('F jS, Y') ?></div><div class="clear"></div></div>
                
				<?php else: ?>
                <div id="author-box"> <div id="left-author-box"><?php get_template_part( '/inc/acf/blog/userphoto', 'Blog User Photo'); ?> by <?php the_author_posts_link() ?> | <i class="fa fa-calendar"></i> &nbsp;<?php the_time('F jS, Y') ?></div><div class="clear"></div>
          </div>
            
        			<?php endif; ?>
          <section>      
            <aside><?php get_template_part('/inc/acf/blog/featured-image','ACF - Featured Image'); ?></aside>
                    
            <aside><?php the_excerpt(); ?></aside>
            </section>
                   
                   <p class="post-cat-tags"><small> <?php the_category(' ', '') ?></small></p>
                   <?php if(get_field('comment_indicator_on_landing_page','options')): ?><?php else: ?><small><i class="fa fa-comments"></i> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></small><?php endif; ?>
                    <div class="clear"></div>
                   		  <hr />
	</article><?php endwhile; ?><!--Article Loop Ends-->
                    </div><!--Post Container Ends-->
<?php get_template_part('/inc/acf/blog/pagination','ACF - Pagination'); ?>

	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
	    </div><!--End Left Column-->
        
        <div id="right-side-col-container">
       <?php get_template_part( '/inc/loops/sidebar-loop', 'sidebar'); ?>
    </div><!--End Right Sidebar Column-->
     <div class="clear"></div>