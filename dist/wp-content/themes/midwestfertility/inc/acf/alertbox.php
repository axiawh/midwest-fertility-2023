<?php if(get_field('turn_on_alert_box', 'options')): ?>
	<?php if(get_field('alert_box', 'options')): ?>
	<div id="alert-box" class="alert alert-danger alert-dismissible in" role="alert" <?php if(get_field('alert_box_color','options')): ?>style="background-color:<?php the_field('alert_box_color','options'); ?>"<?php endif; ?>> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
	<?php if(get_field('alert_link', 'options')): ?><a href="<?php the_field('alert_link','options'); ?>" class="alert-link"><?php the_field('alert_box', 'options'); ?></a><?php else: ?><?php the_field('alert_box', 'options'); ?><?php endif; ?></div><?php endif; ?>
<?php endif; ?>