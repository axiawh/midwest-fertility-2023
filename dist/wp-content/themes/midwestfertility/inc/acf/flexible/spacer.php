  <?php // -------------------------------> Spacer Margin Spacing <-------------------------------- ?>              
<?php if(get_row_layout() == 'spacer'): ?>
	<?php if(get_sub_field('padding')): ?><div style="padding-top:<?php the_sub_field('padding'); ?>px; clear:both;"></div><?php endif; ?>
<?php endif; ?>  