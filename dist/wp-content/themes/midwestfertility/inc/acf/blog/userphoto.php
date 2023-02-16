<?php // User Photo ACF
				$author_id = get_the_author_meta('ID');
				$user_photo = get_field('profile_photo', 'user_'.$author_id);
			?>

 <?php
				if($user_photo): ?>
                	<div class="author-profile-photo">
                    <img src="<?php echo $user_photo['url']; ?>" alt="<?php echo $user_photo['alt']; ?>" />
                    </div>
            <?php endif; ?>