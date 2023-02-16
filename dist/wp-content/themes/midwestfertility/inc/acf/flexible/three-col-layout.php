<?php // -------------------------------> 3 Column Even Layout <-------------------------------- ?>
       <?php if( get_row_layout() == 'three_column_container' ): ?>
       <div id="three-col-container">
       <ul>
		<li><?php the_sub_field('left_trio_column'); ?></li>
        <li><?php the_sub_field('middle_trio_column'); ?></li>
        <li><?php the_sub_field('right_trio_column'); ?></li>
        <div class="clear"></div>
        </ul>
        </div>
       <?php endif; ?>