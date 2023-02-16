<?php // -------------------------------> Headline Text <-------------------------------- ?>              
<?php if(get_row_layout() == 'number_feature'): ?>

<?php if(have_rows('number_set')): ?>
	<?php while(have_rows('number_set')): the_row(); ?>
	<aside class="number-feature col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<?php if(get_sub_field('featured_number')): ?><h3><?php the_sub_field('featured_number'); ?></h3><?php endif; ?>
		<?php if(get_sub_field('number_title')): ?><h4><?php the_sub_field('number_title'); ?></h4><?php endif; ?>
		<?php if(get_sub_field('number_description')): ?><p><?php the_sub_field('number_description'); ?></p><?php endif; ?>
		</aside>
	<?php endwhile; ?>
<?php endif; ?>

<?php endif; ?> 