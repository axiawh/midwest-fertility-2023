<?php if(get_field('turn_off_mast_headline') ): ?>
<?php elseif(get_field('mast_headline')): ?>
<section> 
        <h2 <?php if(get_field('mast_headline_font_size')): ?>style="font-size:<?php the_field('mast_headline_font_size'); ?>"<?php else: ?><?php endif; ?>><?php the_field('mast_headline'); ?></h2>
        
         <?php elseif(is_post_type_archive('success_stories')): //----------------------------------> SUCCESS STORIES CPT MAST ?>
         <section><h2><?php the_field('success_stories_mast_title', 'options'); ?></h2>
             
             <?php elseif(is_singular('success_stories') and get_field('success_story_title')): //----------------------------------> SUCCESS STORIES CPT MAST ?>
         <section><h2><?php the_field('success_story_title'); ?></h2>
        
        <?php elseif(is_home()): //----------------------------------> BLOG MAST ?>
         <section><h2><?php the_field('blog_title', 'options'); ?></h2>
             
              <?php elseif(is_singular('post') and get_field('singular_blog_post_design_style','options')=="Medium"): //----------------------------------> Single Post MEDIUM Theme MAST ?>
         <section><h2><?php the_field('blog_title', 'options'); ?></h2>
             
             
             <?php elseif(is_singular('post') and get_field('singular_blog_post_design_style','options')=="Default"): //----------------------------------> BLOG Single DEFAULT Theme Post MAST ?>
         <section><h2><?php the_title(); ?></h2>
         
         <?php elseif(is_404()): //----------------------------------> 404 Page ?>
         <section><h2><?php the_field('404_mast_title', 'options'); ?></h2>
         
     <?php elseif(is_search()): //----------------------------------> SEARCH ?>
        <section><h2><?php _e( 'Search Results for: ', 'your-theme' ); ?><span><?php the_search_query(); ?></span></h2>
        
        <?php elseif(is_page()): //----------------------------------> NORMAL PAGE MAST ?>
         <section><h2 <?php if(get_field('mast_headline_font_size')): ?>style="font-size:<?php the_field('mast_headline_font_size'); ?>"<?php else: ?><?php endif; ?>><?php the_title(); ?></h2>
         
         <?php elseif(is_archive()): //----------------------------------> BLOG ARCHIVE MAST ?>
         <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<section><h2><?php single_cat_title(); ?></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<section><h2><?php single_tag_title(); ?></h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<section><h2>Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<section><h2>Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<section><h2>Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<section><h2>Posts Written by: <?php 
		$authordata = get_userdata($post->post_author);
		echo $authordata->display_name; ?></h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<section><h2>Blog Archives</h2>
 	  <?php } ?>
      
    <?php else: //ELSE Falls back to just a title ?>
     <section> <h2 <?php if(get_field('mast_headline_font_size')): ?>style="font-size:<?php the_field('mast_headline_font_size'); ?>"<?php else: ?><?php endif; ?>><?php the_title(); ?></h2>
    <?php endif; ?>
    
         <?php if(is_singular('success_stories') and get_field('success_story_sub_title')): //----------------------------------> SUCCESS STORIES CPT MAST ?>
         <h3><?php the_field('success_story_sub_title'); ?></h3><?php endif; ?>
         
         
         
  <?php if(get_field('mast_sub_headline')): ?>
      <h3><?php the_field('mast_sub_headline'); ?></h3><?php endif; ?>
      <?php if(have_rows('mast_cta_button')): ?>
				<?php while(have_rows('mast_cta_button')): the_row(); $mastctalink = get_sub_field('mast_button_link'); ?>
				<a class="btn btn-success" href="<?php echo $mastctalink['url']; ?>" target="<?php echo $mastctalink['target']; ?>"><i class="fa <?php the_sub_field('mast_button_icon'); ?>" aria-hidden="true"></i> <?php echo $mastctalink['title']; ?></a>
				<?php endwhile; ?>
			<?php endif; ?>
</section>
    
</div><!--Mast Ends-->