   <?php if(get_field('pagintation_type','options') == 'Numbered'): ?>
   <?php
   $paginationargs = array(
   	'type' => 'list',
	'prev_text' => '<i class="fas fa-arrow-left"></i> Previous Posts',
	'next_text' => 'Next Posts <i class="fas fa-arrow-right"></i>',
   );
    echo paginate_links( $paginationargs ); ?>
    <?php else: ?>
  <?php if(get_next_posts_link() || get_previous_posts_link()): ?><ul class="pagination justify-content-center">
    <li class="page-item"><?php next_posts_link('<i class="fas fa-arrow-left"></i> Previous Posts') ?></li>
			<li class="page-item"><?php previous_posts_link('Next Posts <i class="fas fa-arrow-right"></i>') ?></li>
            <div class="clear"></div> 
		</ul><?php else: ?><?php endif; ?>
        <?php endif; ?>