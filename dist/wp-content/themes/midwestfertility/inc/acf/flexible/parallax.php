<?php // -------------------------------> PARALLAX BANNER <-------------------------------- ?>
<?php if(get_row_layout() == 'parallax_banner'): ?>
<?php $parallaxfeaturedimage = wp_get_attachment_image_src(get_sub_field('parallax_background_image'), 'xxlarge');?>
<div class="parallax-container" <?php if(get_sub_field('parallax_background_image')): ?> style="background-image:url(<?php echo $parallaxfeaturedimage[0]; ?>)"<?php elseif(get_sub_field('parallax_background_color')): ?>style="background-color:<?php the_sub_field('parallax_background_color'); ?>"<?php endif; ?>>
<section><h3 <?php if(get_sub_field('parallax_headline_color')): ?> style="color:<?php the_sub_field('parallax_headline_color'); ?>"<?php endif; ?>><?php the_sub_field('parallax_headline'); ?></h3>
<?php if(get_sub_field('parallax_sub_headline')): ?><p <?php if(get_sub_field('parallax_sub_headline_color')): ?> style="color:<?php the_sub_field('parallax_sub_headline_color'); ?>"<?php endif; ?>><?php the_sub_field('parallax_sub_headline'); ?></p><?php endif; ?>
	<?php if(get_sub_field('parallax_link')): $parallaxlink = get_sub_field('parallax_link'); ?><a target="<?php echo $parallaxlink['target']; ?>" href="<?php echo $parallaxlink['url']; ?>" class="button" /><?php echo $parallaxlink['title']; ?></a><?php endif; ?>
	</section>
<div class="fade-overlay"></div>
</div>
<?php endif; ?>