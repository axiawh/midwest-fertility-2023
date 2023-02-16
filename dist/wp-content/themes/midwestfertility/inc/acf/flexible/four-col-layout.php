<?php // -------------------------------> 4 Column Even Layout <-------------------------------- ?>
       <?php if( get_row_layout() == 'four_column_container' ): ?>
       <div id="four-col-container">
       <ul>
		<li><?php the_sub_field('first_column'); ?></li>
        <li><?php the_sub_field('second_column'); ?></li>
        <li><?php the_sub_field('third_column'); ?></li>
        <li><?php the_sub_field('fourth_column'); ?></li>
        <div class="clear"></div>
        </ul>
        </div>
       <?php endif; ?>