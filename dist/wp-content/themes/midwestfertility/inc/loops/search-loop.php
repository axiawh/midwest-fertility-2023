<div id="left-body-col-container">
	<?php if (have_posts()) : ?>
    <?php if ( have_posts() ) : ?>
     
                    
                    <?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>

    <?php } ?>          

 <div id="post-landing-page-container">
 <?php while ( have_posts() ) : the_post() ?>
     
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                   
                      
                        <h2><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
     
    <?php if ( $post->post_type == 'post' ) { ?>
                            <?php if(get_field('blog_date','options') and get_field('blog_author_byline','options') !=""): ?><?php else: ?><small><?php if(get_field('blog_author_byline','options') !=""): ?><?php else: ?>by <?php the_author_posts_link() ?> | <?php endif; ?><?php if(get_field('blog_date','options') !=""): ?><?php else: ?><i class="fa fa-calendar"></i> <?php the_time('F jS, Y') ?><?php endif; ?></small><?php endif; ?>
    <?php } ?>
 			<?php get_template_part('/inc/acf/blog/featured-image','ACF - Featured Image'); ?>
                    
    <?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme' )  ); ?>
    <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>

    <?php if ( $post->post_type == 'post' ) { ?>
                        
                      <div class="clear"></div>
                   <p class="post-cat-tags"><small> <?php the_category(' ', '') ?></small></p>
                    <?php if(get_field('comment_indicator_on_landing_page','options')): ?><?php else: ?><small><i class="fa fa-comments"></i> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></small><?php endif; ?>

    <?php } ?>
    <div class="clear"></div>
    <hr />
                    </article><!-- #post-<?php the_ID(); ?> -->
     
    <?php endwhile; ?>
	 </div><!--Post Container Ends-->
    
     <div class="clear"></div>
    <?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                     <?php get_template_part('/inc/acf/blog/pagination','ACF - Pagination'); ?>
       <div class="clear"></div>
                    
    <?php } ?>            
     
    <?php else : ?>
     
                    <div id="post-0" class="post no-results not-found">
                        <h2 class="entry-title"><?php _e( 'Nothing Found', 'your-theme' ) ?></h2>
                        <div class="entry-content">
                            <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'your-theme' ); ?></p>
        <?php get_search_form(); ?>
                        </div><!-- .entry-content -->
                    </div>
     
    <?php endif; ?>
    
        <?php else : ?>
    
            <h2>No posts found. Try a different search?</h2>
            <?php get_search_form(); ?>
    
        <?php endif; ?>
        <div class="clear"></div>
         </div>
    <!--Left Column Container Ends-->
    
    <div id="right-side-col-container">
     <?php get_template_part( '/inc/loops/sidebar-loop', 'sidebar'); ?>
      </div>
    <!--Right Column Ends-->