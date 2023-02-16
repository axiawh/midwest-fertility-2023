<?php if(get_custom_logo()): $custom_logo_id = get_theme_mod( 'custom_logo' ); $logoimage = wp_get_attachment_image_src( $custom_logo_id , 'mediumlarge'); ?>
	<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo $logoimage[0]; ?>" <?php if(get_field('logo_image_alt_tag', 'options')): ?>alt="<?php the_field('logo_image_alt_tag', 'options'); ?>"<?php else: ?>alt="<?php bloginfo('name'); ?>"<?php endif; ?>></a>
    <?php elseif(get_field('site_title', 'options')): ?>
    <h2><a href="<?php echo home_url(); ?>" title="<?php the_field('site_title','options'); ?>"><?php the_field('site_title','options'); ?></a></h2>
    <?php else: ?><h2><a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><i class="fa fa-rocket"></i>  <?php bloginfo('name') ?></a></h2>
    <?php endif; ?>