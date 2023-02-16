<?php /*?>--------------------------------> CPT SINGLE Success Stories LOOP <----------------------------<?php */?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="single-success-story-container">
         <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <?php the_content(); ?>
     
				<p><small><?php edit_post_link('<button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit This Success Story</button>', '<p class="clear">', '</p>'); ?></small></p>
             </div>

        </article>
        
		 <ul class="pagination justify-content-center">
    <li class="page-item previous"><?php previous_post_link('%link') ?></li>
			<li class="page-item next"><?php next_post_link('%link') ?></li>
		</ul>
        
	<?php endwhile; else: ?>
 	<p>Sorry, no Success Stories matched your criteria.</p>
	<?php endif; ?>