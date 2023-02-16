<?php if(get_field('blog_author_box','options') !=""): ?><?php else: ?><!--About Author-->        
    <div id="about-author-box"><h3>About <?php the_author_posts_link() ?></h3>
   <?php // User Photo ACF
		$author_id = get_the_author_meta('ID');
		$user_photo = get_field('profile_photo', 'user_'.$author_id); ?>
		<div class="row"><?php if($user_photo): ?><div class="col-lg-1 col-xs-12"><img src="<?php echo $user_photo['url']; ?>" alt="<?php echo $user_photo['alt']; ?>" /></div><?php endif; ?>
   <div class="col-lg-11 col-xs-12"><p><?php the_author_meta('description'); ?><br />
<a href="<?php the_author_meta('user_url'); ?>" target="_blank"><?php the_author_meta('user_url'); ?></a></p></div></div>
    <div class="clear"></div>
    </div><!--Author Box Ends--><?php endif; ?>