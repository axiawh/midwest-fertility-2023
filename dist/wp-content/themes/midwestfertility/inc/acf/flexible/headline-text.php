<?php // -------------------------------> Headline Text <-------------------------------- ?>              
<?php if(get_row_layout() == 'headline_text'): ?>
<div class="headline-text-flexible-container">
	<?php if(get_sub_field('headline_text_size') == 'h1' and get_sub_field('headline_text')): ?><h1 style="text-align: <?php the_sub_field('headline_text_alignment'); ?>;"><?php the_sub_field('headline_text'); ?></h1><?php endif; ?>
	<?php if(get_sub_field('headline_text_size') == 'h2' and get_sub_field('headline_text')): ?><h2 style="text-align: <?php the_sub_field('headline_text_alignment'); ?>;"><?php the_sub_field('headline_text'); ?></h2><?php endif; ?>
	<?php if(get_sub_field('headline_text_size') == 'h3' and get_sub_field('headline_text')): ?><h3 style="text-align: <?php the_sub_field('headline_text_alignment'); ?>;"><?php the_sub_field('headline_text'); ?></h3><?php endif; ?>
	<?php if(get_sub_field('headline_text_size') == 'h4' and get_sub_field('headline_text')): ?><h4 style="text-align: <?php the_sub_field('headline_text_alignment'); ?>;"><?php the_sub_field('headline_text'); ?></h4><?php endif; ?>
	<?php if(get_sub_field('headline_text_size') == 'h5' and get_sub_field('headline_text')): ?><h5 style="text-align: <?php the_sub_field('headline_text_alignment'); ?>;"><?php the_sub_field('headline_text'); ?></h5><?php endif; ?>
</div>
<?php endif; ?> 