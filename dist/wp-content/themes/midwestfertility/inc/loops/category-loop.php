	<div id="left-body-col-container">


<?php if (have_posts()) : ?>
<div id="<?php if(get_field('blog_design_style','options') == 'Masonry'): ?>post-masonry-landing-page-container<?php else: ?>post-landing-page-container<?php endif; ?>">
 <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class() ?>>
        
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                
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
                
             <?php get_template_part('/inc/acf/blog/featured-image','ACF - Featured Image'); ?>
                    
                   <?php the_excerpt(); ?>
                
				<div class="clear"></div>
                   <p class="post-cat-tags"><small> <?php the_category(' ', '') ?></small></p>
                    <?php if(get_field('comment_indicator_on_landing_page','options')): ?><?php else: ?><small><i class="fa fa-comments"></i> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></small><?php endif; ?>
             <hr />
           </article><!--Loop Ends-->
			  <?php endwhile; ?>
               </div><!--Post Container Ends-->
        <?php if(get_next_posts_link() || get_previous_posts_link()): ?>
        
  			<?php get_template_part('/inc/acf/blog/pagination','ACF - Pagination'); ?>
  
        </nav>
  <?php else: ?><?php endif; ?>
        <?php else :

		if ( is_category() ) { // If this is a category archive
			printf("
		<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("
		<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("
		<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("
		<h2>No posts found.</h2>");
		}
		get_search_form();
		//printf("");//CDS - Ends Post Container after Search Field
	endif;?>
	
     </div><!--Left Column Ends-->
      
    <div id="right-side-col-container">
    <?php get_template_part( '/inc/loops/sidebar-loop', 'sidebar'); ?>
    </div><!--End Right Sidebar Column-->