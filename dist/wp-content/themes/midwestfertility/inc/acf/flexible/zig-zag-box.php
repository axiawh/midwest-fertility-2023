<?php // -------------------------------> ZIG ZAG BOX <-------------------------------- ?>
<?php if(get_row_layout() == 'zig_zag_ad_box'): // ---------> Zig Zag Ad Box ?>
    <div class="content-block">
    <section>
    <?php if(get_sub_field('zig_zag_main_title')): ?><h3><?php the_sub_field('zig_zag_main_title'); ?></h3><?php endif; ?>
		
		<?php /*?>------------> Zig Zag Ad Box Repeater <--------------<?php */?>
    <?php if(have_rows('zig_zag_ad_box_set')): ?>
    
		<div class="zig-zag-ad-box">	
    <?php while(have_rows('zig_zag_ad_box_set')): the_row(); ?>
			<section>
	<?php $image = wp_get_attachment_image_src(get_sub_field('ad_box_image'), 'xlarge'); ?>
    <aside <?php if(get_sub_field('ad_box_image')): ?>style="background-image: url('<?php echo $image[0]; ?>');"<?php endif; ?>>
    </aside>
    <aside>
    <div class="zig-zag-content">
		<?php if(get_sub_field('ad_box_mini_title')): ?> <p class="mini-title"><?php the_sub_field('ad_box_mini_title'); ?></p><?php endif; ?>
		<h2><?php the_sub_field('ad_box_title'); ?></h2>
	<p><?php the_sub_field('ad_box_description'); ?></p>  

		<?php /*?>------------> Ad Box Repeater <--------------<?php */?>
		<?php if(have_rows('ad_box_button_set')): ?>
        <div class="button-container">
	<?php while(have_rows('ad_box_button_set')): the_row(); $ad_button_link = get_sub_field('ad_button_link'); ?>
		<a class="button" href="<?php echo $ad_button_link['url']; ?>" target="<?php echo $ad_button_link['target']; ?>"><?php if($ad_button_link['title']): ?><?php echo $ad_button_link['title']; ?><?php else: ?>More Info<?php endif; ?></a>
	<?php endwhile; ?>
            </div>
<?php endif; ?>
		
		</div></aside>
</section>
    <?php endwhile; // END ZIG ZAG REPEARTER ?>
</div>
    <?php endif; ?>
  </section></div>
    <?php endif;  // END Zig Zag Ad Box ?>