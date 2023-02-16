<?php // -------------------------------> Accordion Box - Bootstrap 4 <-------------------------------- ?>
<?php 
	// Check the Current Row Layout
	if(get_row_layout() == 'accordion_box') :
	// Check to see if the nested Repeater Field has rows of data - NAME OF YOUR REPEATER
	if(have_rows('accordion_box_set')):
	$i=1;
?>
<?php while(have_rows('accordion_box_set')) : the_row(); ?>
<div class="card" id="accordion">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>"><div class="card-header">
      <h4 class="card-title"><i class="fas fa-plus-circle"></i> 
       <?php the_sub_field('title'); ?> 
      </h4>
    </div></a>
    <div id="collapse<?php echo $i; ?>" class="collapse">
      <div class="card-body">
     <?php the_sub_field('content'); ?>
      </div>
    </div>
</div>
<?php 
$i++;
endwhile; ?>
<?php endif; endif; ?>