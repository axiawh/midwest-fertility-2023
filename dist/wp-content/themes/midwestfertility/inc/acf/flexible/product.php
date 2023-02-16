  <?php // -------------------------------> Product Set <-------------------------------- ?>
<?php if(get_row_layout() == 'product_set'): ?>
<?php if(have_rows('single_product_set')): ?>
<?php while(have_rows('single_product_set')): the_row(); 
	$productimage = wp_get_attachment_image_src(get_sub_field('featured_image'), 'mediumlarge');
	$productfullimage = wp_get_attachment_image_src(get_sub_field('featured_image'), 'full');
?>
<div class="product-set">
 <section>
<aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><a href="<?php echo $productfullimage[0]; ?>"><img src="<?php echo $productimage[0]; ?>" alt="<?php the_sub_field('product_title'); ?>"></a></aside>
<aside class="col-lg-9 col-md-9 col-sm-9 col-xs-12"><h3 style="margin-top:0;"><?php the_sub_field('product_title'); ?></h3><?php if(get_sub_field('product_price')): ?> <p><b>Price: <?php the_sub_field('product_price'); ?></b></p><?php endif; ?><p><?php the_sub_field('product_description'); ?></p>
<div class="clear"></div>

<?php if(get_sub_field('paypal_button_code')): ?> <?php the_sub_field('paypal_button_code'); ?><br /><?php endif; ?>
	<?php if(have_rows('product_purchase_button')): //-------------->  Product Button Repeater ?>
    <?php while(have_rows('product_purchase_button')): the_row(); ?>
    <a href="<?php the_sub_field('button_link'); ?>" target="_blank" /><button class="btn btn-info"><?php if(get_sub_field('button_icon')): ?> <i class="fa <?php the_sub_field('button_icon'); ?>"></i> <?php endif; ?><?php the_sub_field('button_label'); ?></button></a>&nbsp;
    <?php endwhile; ?>
<?php endif; ?>
</aside>
<div class="clear"></div>
<hr />
</section>
</div>
<?php endwhile; ?>
<?php endif; ?><?php endif; ?>