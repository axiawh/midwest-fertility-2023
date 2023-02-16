<?php // -------------------------------> Staff Set <-------------------------------- ?>
<?php if(get_row_layout() == 'staff_set'): ?>

<?php // -------------------------------> GRID Staff Set <-------------------------------- ?>
<?php if(have_rows('grid_design_staff_set')): ?>
<div class="grid-staff-set">
  <?php while(have_rows('grid_design_staff_set')): the_row(); ?>
	<aside>
		<?php $link = get_sub_field('link'); ?>
<?php if(get_sub_field('link')): ?><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" title="<?php the_sub_field('name'); ?>"><?php endif; ?><?php if(get_sub_field('headshot')): $headshot = wp_get_attachment_image_src(get_sub_field('headshot'), 'large'); ?> <div class="headshot-featured-image" style="background-image:url(<?php echo $headshot[0]; ?>)";><section><?php if(get_sub_field('name')): ?><h3><?php the_sub_field('name'); ?></h3><?php if(get_sub_field('title')): ?><p><?php the_sub_field('title'); ?></p><?php endif; ?></section>
		<?php if(get_sub_field('special_announcement')): ?><div class="staff-announcement"><?php the_sub_field('special_announcement'); ?></div><?php endif; ?>
<?php endif; ?>
</div><?php endif; ?><?php if(get_sub_field('link')): ?></a><?php endif; ?>
</aside>
 <?php endwhile; ?>
	</div>
<?php endif; ?>

<?php // -------------------------------> NORMAL Staff Set <-------------------------------- ?>
<?php 
		if(have_rows('staff_team_set')):
		echo '<div id="staff-set">'; 
		while(have_rows('staff_team_set')): the_row();
			$staffheadshot = wp_get_attachment_image_src(get_sub_field('headshot'), 'mediumlarge');
		?>
         <section>
        <?php if(get_sub_field('headshot')): ?><aside>
        	 <?php if(get_sub_field('page_link')): $page_link = get_sub_field('page_link'); ?><a href="<?php echo $page_link['url']; ?>" target="<?php echo $page_link['target']; ?>"><?php endif; ?><img src="<?php echo $staffheadshot[0]; ?>" alt="<?php the_sub_field('name'); ?>"><?php if(get_sub_field('page_link')): ?></a></aside><?php endif; ?>
        
        
        <aside>
        <?php if(get_sub_field('page_link')): $page_link = get_sub_field('page_link'); ?><a href="<?php echo $page_link['url']; ?>" target="<?php echo $page_link['target']; ?>"><?php endif; ?><?php if(get_sub_field('name')): ?><h3><?php the_sub_field('name'); ?></h3><?php endif; ?><?php if(get_sub_field('page_link')): ?></a><?php endif; ?>
        <?php if(get_sub_field('title')): ?><p><b><?php the_sub_field('title'); ?></b></p><?php endif; ?>
        <?php if(get_sub_field('bio')): ?><p><?php the_sub_field('bio'); ?></p><?php endif; ?>
            
        <?php if(get_sub_field('page_link')): $page_link = get_sub_field('page_link'); ?><a class="btn btn-light" href="<?php echo $page_link['url']; ?>" target="<?php echo $page_link['target']; ?>"><?php if($page_link['title']): ?><?php echo $page_link['title']; ?><?php else: ?>Read More<?php endif; ?></a><?php endif; ?>
        </aside>
        <?php else: ?>
        <h3><?php the_sub_field('name'); ?></h3>
        <?php if(get_sub_field('title')): ?><p><?php the_sub_field('title'); ?></p><?php endif; ?>
        <p><?php the_sub_field('bio'); ?></p>
        <?php endif; // END HEADSHOT IF STATEMENT?>
        </section>
        <?php endwhile; ?> </div><?php
endif; ?> <?php endif; ?>