<?php if(get_row_layout() == 'event_set'): ?>
<?php if(have_rows('event_set')): ?>
	<div class="event-set-container row">
	<?php while(have_rows('event_set')): the_row(); ?>
	<aside class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-md-offset-1">
		<?php if(get_sub_field('event_title')): ?><h3><?php the_sub_field('event_title'); ?></h3><?php endif; ?>
		<?php if(get_sub_field('event_subtitle')): ?><h4><?php the_sub_field('event_subtitle'); ?></h4><?php endif; ?>
		<?php if(get_sub_field('date_of_event')): ?><h4><?php the_sub_field('date_of_event'); ?></h4><?php endif; ?>
		
		<ul>
		<?php if(get_sub_field('all_day_event')): ?><li>All Day Event</li><?php else: ?><?php if(get_sub_field('from_time')): ?><li>From: <?php the_sub_field('from_time'); ?></li> <?php if(get_sub_field('to_time')): ?><li>To: <?php the_sub_field('to_time'); ?></li><?php endif; ?><?php endif; ?><?php endif; ?>
		
		
		
		<?php if(get_sub_field('location') and get_sub_field('google_map_directions_url')): ?><li>Location: <a href="<?php the_sub_field('google_map_directions_url'); ?>" target="_blank"><?php the_sub_field('location'); ?></a></li><?php else: ?><li>Location: <?php the_sub_field('location'); ?></li><?php endif; ?>
		<?php if(get_sub_field('cost')): ?><li>Cost: $<?php the_sub_field('cost'); ?></li><?php endif; ?>
		</ul>
		
		<?php if(get_sub_field('signup_link')): ?><a class="btn btn-danger" href="<?php the_sub_field('signup_link'); ?>" <?php if(get_sub_field('open_link_in_a_new_window')): ?> target="_blank" <?php endif; ?>><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php the_sub_field('signup_label'); ?></a><?php endif; ?>
		
	</aside>
	<?php endwhile; ?>
		<div class="clear"></div>
</div>
<?php endif; ?>
<?php endif; ?>