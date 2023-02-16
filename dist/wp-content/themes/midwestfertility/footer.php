<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<?php if(is_page_template('page-landing-page.php')): ?><?php else:?>
<div class="map-container">
<aside <?php if(get_field('location_1_map_image','options')): $location_1_map_image = wp_get_attachment_image_src(get_field('location_1_map_image','options'), 'large'); ?> style="background-image:url(<?php echo $location_1_map_image[0]; ?>);"<?php endif; ?>>
	<div class="location-info">
	<?php if(get_field('location_1_name','options')): ?><h2><?php the_field('location_1_name','options'); ?></h2><?php endif; ?>

	<?php if(get_field('google_map', 'options')): ?><a href="<?php the_field('google_map', 'options'); ?>" target="_blank"><?php endif; ?><?php if(get_field('address', 'options')): ?><p><?php the_field('address', 'options'); ?></p><?php endif; ?><?php if(get_field('google_map', 'options')): ?></a><?php endif; ?>

		
	<?php if(get_field('phone_number', 'options')): ?><h2><a href="tel:<?php the_field('phone_number', 'options'); ?>"><?php the_field('phone_number', 'options'); ?></a></h2><?php endif; ?>

		</div>
	<div class="overlay"></div>
	</aside>
<aside <?php if(get_field('location_2_map_image','options')): $location_2_map_image = wp_get_attachment_image_src(get_field('location_2_map_image','options'), 'large'); ?> style="background-image:url(<?php echo $location_2_map_image[0]; ?>);"<?php endif; ?>>
	<div class="location-info">
	<?php if(get_field('location_2_name','options')): ?><h2><?php the_field('location_2_name','options'); ?></h2><?php endif; ?>
		<?php if(get_field('location_2_google_map_url', 'options')): ?><a href="<?php the_field('location_2_google_map_url', 'options'); ?>" target="_blank"><?php endif; ?><?php if(get_field('location_2_address', 'options')): ?><p><?php the_field('location_2_address', 'options'); ?></p><?php endif; ?><?php if(get_field('location_2_address', 'options')): ?></a><?php endif; ?>
	<?php if(get_field('location_2_phone_number', 'options')): ?><h2><a href="tel:<?php the_field('location_2_phone_number', 'options'); ?>"><?php the_field('location_2_phone_number', 'options'); ?></a></h2><?php endif; ?>
		</div>
	<div class="overlay"></div>
	</aside>
</div>


<?php if(have_rows('')): ?>
<div class="accredited-logo-container">
  <?php while(have_rows('footer_logo_set', 'options')): the_row(); ?>
	<aside>
<?php if(get_sub_field('logo_image', 'options')): $logo_image = get_sub_field('logo_image', 'options'); $size = 'mediumlarge'; echo wp_get_attachment_image( $logo_image, $size ); ?><?php endif; ?>

		</aside>
 <?php endwhile; ?>
	</div>
<?php endif; ?>

<footer>
  <section>
  <div id="footer-top">
	  <aside>
		  <a href="<?php echo home_url(); ?>"><?php if(get_field('footer_logo','options')): $footer_logo = get_field('footer_logo','options'); $size = 'mediumlarge'; echo wp_get_attachment_image( $footer_logo, $size ); ?><?php endif; ?>
</a>
		  </aside>
<aside>
      <?php if ( !function_exists('dynamic_sidebar')
  || !dynamic_sidebar('Footer 1') ) : 
 endif; 
   ?>
    </aside>
    <aside>
      <?php
  if ( !function_exists('dynamic_sidebar')
  || !dynamic_sidebar('Footer 2') ) : 
 endif; 
  ?>
    </aside>
    <aside>
   <?php
  if ( !function_exists('dynamic_sidebar')
  || !dynamic_sidebar('Footer 3') ) : 
 endif; 
  ?>
      </aside>
      </div>
      <?php /*?>----------------------> Footer Top Ends <-----------------------<?php */?>
     
    
    <div id="footer-mid"> <?php if(get_field('footer_mid_headline', 'options')): ?><h3><?php the_field('footer_mid_headline', 'options'); ?></h3><?php endif; ?>

    <?php if(get_field('disclaimer_area', 'options')): ?><?php the_field('disclaimer_area', 'options'); ?><?php endif; ?>
    </div> <?php /*?>----------------------> Footer Middle Ends <-----------------------<?php */?>
    
    
    <div id="footer-base">
      <aside> 
           
        <script language="JavaScript" type="text/javascript">
    copyright=new Date();
    update=copyright.getFullYear();
    document.write("&copy; " + update + " <?php if(get_field('copyright','options') != ""): ?> <?php the_field('copyright','options'); ?> <?php else: ?> <?php bloginfo('name'); ?>. All rights Reserved. <?php endif; ?>"); </script> 
      </aside>
      <aside> <?php if(get_field('created_by','options')): ?><?php the_field('created_by_prefix','options'); ?> <a href="<?php the_field('created_by_link','options'); ?>" target="_blank"><?php the_field('created_by','options'); ?></a><?php endif; ?> </aside>
    </div>
    <?php /*?>----------------------> Footer Base Ends <-----------------------<?php */?>
    
  </section>
 <?php /*?>----------------------> Footer Container Ends <-----------------------<?php */?>
</footer><?php endif; ?>
<?php /*?>----------------------> Footer Ends <-----------------------<?php */?>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<?php if(get_field('footer_scripts')): //Page Specific Footer Code ?><?php the_field('footer_scripts'); ?><?php endif; ?>
<?php if(get_field('footer_script_code', 'options')): //Global Footer Code ?><?php the_field('footer_script_code', 'options'); ?><?php endif; ?>
<script src="https://kit.fontawesome.com/109df75be4.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.typekit.net/apc3qfl.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">-->
<link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/bootstrap.css" rel="stylesheet" />
<?php get_template_part('/inc/acf/custom-css', 'CUSTOM CSS'); ?>
</body></html>