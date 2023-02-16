<?php if(get_field('blog_date','options') and get_field('blog_author_byline','options') !=""): // NO TO BOTH DATE + AUTHOR ?>
		 <?php elseif(get_field('blog_date','options')): // NO BLOG DATE ONLY?>
<div class="singular-blog-meta-info">         		
	<div id="author-box">by <?php the_author_posts_link() ?></div>
</div>
         <?php elseif(get_field('blog_author_byline','options')): // NO AUTHOR ONLY?>
         	<div class="singular-blog-meta-info">   
<div id="author-box"><i class="fa fa-calendar"></i> &nbsp;<?php the_time('F jS, Y') ?></div>
</div>
         <?php else: // Nothing is turned off ?>
<div class="singular-blog-meta-info">   
         <div id="author-box">by <?php the_author_posts_link() ?> | <i class="fa fa-calendar"></i> &nbsp;<?php the_time('F jS, Y') ?></div>
</div>
		 <?php endif; ?>