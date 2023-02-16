	<?php if(have_rows('home_mast_ad_box_set')): ?>
	<div class="highlight-ad-box-container">
  <?php while(have_rows('home_mast_ad_box_set')): the_row(); 
		$home_mast_ad_box_background_image= wp_get_attachment_image_src(get_sub_field('home_mast_ad_box_background_image'), 'large');
		$home_mast_ad_box_link = get_sub_field('home_mast_ad_box_link');
		?>
 <?php if(get_sub_field('home_mast_ad_box_theme') == 'Link'): ?><a href="<?php echo $home_mast_ad_box_link['url']; ?>" target="<?php echo $home_mast_ad_box_link['target']; ?>"><?php else: ?><a href="<?php the_sub_field('home_mast_ad_box_video_link'); ?>?rel=0"><?php endif; ?>
		<aside <?php if(get_sub_field('home_mast_ad_box_background_image')): ?> style="background-image:url(<?php echo $home_mast_ad_box_background_image[0]; ?>);"<?php endif; ?>>
			<?php if(get_sub_field('home_mast_ad_box_theme') == 'Video'): ?><i class="fab fa-youtube fa-3x"></i><?php endif; ?>
		<?php if(get_sub_field('home_mast_ad_box_title')): ?><div class="highlight-ad-box-content"><?php the_sub_field('home_mast_ad_box_title'); ?></div><?php endif; ?>
		
			</aside>
		</a>
 <?php endwhile; ?>
		</div>
<?php endif; ?>