<?php // -------------------------------> TOGGABLE TAB - Bootstrap v4 <-------------------------------- ?>

<?php if(get_row_layout()== 'togglable_tab_section'): ?>

	<?php if(have_rows('toggle_tab_set')): 
		$i =1; // Toggle Tab Nav Tab Unique id=""
		$ii =1; // Toggle Tab Content Unique Hash
$count = 0; // 1st Instance of Repeater given class of active

?>
	<div class="toggle-tabs-container"><ul class="nav nav-tabs" role="tablist" id="myTab">
	<?php while(have_rows('toggle_tab_set')): the_row(); ?>
        
         <li class="nav-item"><a class="nav-link <?php if(!$count): ?> active<?php endif; ?>" id="home-tab" data-toggle="tab" href="#tab<?php echo $i++; ?>" role="tab" aria-controls="home" aria-selected="true"><?php the_sub_field('name_of_tab'); ?></a></li>
	<?php $count++; endwhile; ?>
		</ul>
	<?php endif; ?>
	
	<?php if(have_rows('toggle_tab_set')):
$count = 0; // 1st Instance of Repeater given class of active
?>
	<div class="tab-content" id="myTabContent">
	<?php while(have_rows('toggle_tab_set')): the_row(); ?>
		<div id="tab<?php echo $ii++; ?>" class="tab-pane fade in toggle-tab-content<?php if(!$count): ?> active<?php endif; ?>" role="tabpanel" aria-labelledby="<?php echo $tabid++; ?>"><?php the_sub_field('tab_content'); ?></div>
	<?php $count++; endwhile; ?>

	</div><?php endif; //----------> End toggle_tab_set Repeater ?>

</div>
	<?php endif; //----------> End Row Layout ?>