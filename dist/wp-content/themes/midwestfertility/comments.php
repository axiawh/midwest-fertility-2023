<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p>This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<a name="respond"></a><div id="comment-wrapper">
	<?php if ( have_comments() ) : ?>
	<h3><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

	<ol>
	<?php wp_list_comments(array('avatar_size' => 50)); ?>
	</ol>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p>Comments are closed.</p></div>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<h3><i class="fa fa-comments"></i> <?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>

        <p><small><?php cancel_comment_reply_link(); ?></small></p>

<!--Registration or Login Here-->
	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
    <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
    <?php else : ?>
    
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    
    <?php if ( is_user_logged_in() ) : ?>
    
    <p><small>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></small></p>
    
    <?php else : ?>
    
    <p><input type="text" name="author" class="form-control" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" placeholder="Enter your name" <?php if ($req) echo "aria-required='true'"; ?> />
    <label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>
    
    <p><input type="text" name="email" class="form-control" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" placeholder="Enter your email" <?php if ($req) echo "aria-required='true'"; ?> />
    <label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label></p>
    
    <p><input type="text" name="url" id="url" class="form-control" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" placeholder="Enter your website URL" />
    <label for="url"><small>Website</small></label></p>
    
    <?php endif; ?>
    
    <p><textarea name="comment" id="comment" rows="10" tabindex="4" class="form-control" placeholder="Got a comment? Please enter it here..."></textarea></p>
    
    <p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" class="btn btn-medium btn-warning" />
    <?php comment_id_fields(); ?>
    </p>
    <?php do_action('comment_form', $post->ID); ?>
    
    </form>
    
    <?php endif; // If registration required and not logged in ?>

</div><!--Comment Wrapper ENDS-->
<?php endif; // if you delete this the sky will fall on your head ?>