 <?php //-----------------------------------------> FULL WIDTH - TEMPLATE // ?>
  <?php if ( is_page_template('page-full.php') ) : ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="body-content-container">
        <div class="content-loop" id="post-<?php the_ID(); ?>">
            <?php get_template_part( 'inc/acf/int/popup', 'Popup' ); ?>
		        <?php get_template_part( 'inc/acf/int/top-page-content', 'Top Page Content' ); ?>
		<?php get_template_part( '/inc/acf/int/page-title', 'ACF - Page Title Options'); ?>
                <?php the_content(); ?>
            <?php get_template_part( '/inc/acf/flexible-content-full', 'ACF Flexible Content - FULL WIDTH'); ?>   
    		</div><!--Loop Ends-->
	</div>
            <?php edit_post_link('<button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit This Page</button>', '<p class="clear">', '</p>'); ?>
            <?php endwhile; endif; ?>
 
 <?php //-----------------------------------------> GLOBAL - 2 COL - RIGHT SIDEBAR// ?>
 <?php elseif(get_field('default_page_layout', 'options') == "twocolright"): ?>
<div id="body-content-container">
 <?php get_template_part( 'inc/acf/int/top-page-content', 'Top Page Content' ); ?>
  <div id="left-body-col-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="content-loop" id="post-<?php the_ID(); ?>">
            <?php get_template_part( 'inc/acf/int/popup', 'Popup' ); ?>
		<?php get_template_part( '/inc/acf/int/page-title', 'ACF - Page Title Options'); ?>
                <?php the_content(); ?>
           
    		</div><!--Loop Ends-->
            <?php endwhile; endif; ?>
            <?php edit_post_link('<button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit This Page</button>', '<p class="clear">', '</p>'); ?>
       <?php get_template_part( '/inc/acf/flexible-content', 'ACF Flexible Content'); ?>
        </div><!--Left Col Container Ends-->
       
        <div id="right-side-col-container">
         <?php get_template_part( '/inc/loops/sidebar-loop', 'sidebar'); ?>
        </div><!--Right Col Container Ends-->
	</div>
        
<?php get_template_part( '/inc/acf/flexible-content-full', 'ACF Flexible Content - FULL WIDTH'); ?>          
        
 <?php //-----------------------------------------> GLOBAL - 2 COL - LEFT SIDEBAR// ?>
 <?php elseif(get_field('default_page_layout', 'options') == "twocolleft"): ?>
<div id="body-content-container">
 <?php get_template_part( 'inc/acf/int/top-page-content', 'Top Page Content' ); ?>
 <div id="left-side-col-container">
   <?php get_template_part( '/inc/loops/sidebar-loop', 'sidebar'); ?>
        </div><!--Left Col Container Ends-->
       
        <div id="right-body-col-container">
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="content-loop" id="post-<?php the_ID(); ?>">
            <?php get_template_part( 'inc/acf/int/popup', 'Popup' ); ?>
		<?php get_template_part( '/inc/acf/int/page-title', 'ACF - Page Title Options'); ?>
                <?php the_content(); ?>
			<?php get_template_part( '/inc/acf/flexible-content', 'ACF Flexible Content'); ?>
    		</div><!--Loop Ends-->
            <?php endwhile; endif; ?>
         <?php edit_post_link('<button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit This Page</button>', '<p class="clear">', '</p>'); ?>
        </div><!--Right Col Container Ends-->
	</div>

<?php get_template_part( '/inc/acf/flexible-content-full', 'ACF Flexible Content - FULL WIDTH'); ?>         
        
        
<?php //-----------------------------------------> GLOBAL - FULL WIDTH// ?>
<?php elseif(get_field('default_page_layout', 'options') == "fullwidth"): ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="body-content-container">
 <div class="content-loop" id="post-<?php the_ID(); ?>">
     <?php get_template_part( 'inc/acf/int/popup', 'Popup' ); ?>
 <?php get_template_part( 'inc/acf/int/top-page-content', 'Top Page Content' ); ?>
 <?php get_template_part( '/inc/acf/int/page-title', 'ACF - Page Title Options'); ?>
                <?php the_content(); ?>
            <?php get_template_part( '/inc/acf/flexible-content-full', 'ACF Flexible Content - FULL WIDTH'); ?>   
    		</div><!--Loop Ends-->
            <?php edit_post_link('<button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit This Page</button>', '<p class="clear">', '</p>'); ?>
</div>
            <?php endwhile; endif; ?>
 
  <?php //--------------------> ALL ELSE FAILS ---> 2 COL - RIGHT SIDEBAR// ?>
 <?php else: ?>
<div id="body-content-container">
 <?php get_template_part( 'inc/acf/int/top-page-content', 'Top Page Content' ); ?>
   <div id="left-body-col-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="content-loop" id="post-<?php the_ID(); ?>">
            <?php get_template_part( 'inc/acf/int/popup', 'Popup' ); ?>
		<?php get_template_part( '/inc/acf/int/page-title', 'ACF - Page Title Options'); ?>
                <?php the_content(); ?>
			<?php get_template_part( '/inc/acf/flexible-content', 'ACF Flexible Content'); ?>
    		</div><!--Loop Ends-->
            <?php endwhile; endif; ?>
              <?php edit_post_link('<button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit This Page</button>', '<p class="clear">', '</p>'); ?>
        </div><!--Left Col Container Ends-->
       
        <div id="right-side-col-container">
         <?php get_template_part( '/inc/loops/sidebar-loop', 'sidebar'); ?>
        </div><!--Right Col Container Ends-->
	</div>
<?php get_template_part( '/inc/acf/flexible-content-full', 'ACF Flexible Content - FULL WIDTH'); ?>     
 <?php endif; ?>
  