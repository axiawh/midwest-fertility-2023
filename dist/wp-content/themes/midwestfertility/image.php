<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
<?php get_template_part( 'inc/acf/mast', 'mast' ); ?>

<main>
    <div id="body-content-container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="content-loop" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
			
				<p><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
				<p><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></p>

				<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>

				<div class="navigation">
					<div class="alignleft"><?php previous_image_link(false, 'Previous Image') ?></div>
					<div class="alignright"><?php next_image_link(false, 'Next Image') ?></div>
                    <div class="clear"></div>
				</div>
                 <div class="clear"></div>
                <?php edit_post_link('<button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit This Image</button>', '<p class="clear">', '</p>'); ?>
		</div>

	<?php endwhile; else: ?>

		<p>Sorry, no attachments matched your criteria.</p>

<?php endif; ?>
	</div><?php /*?>-------> Body Content Container Ends <-------<?php */?>
</main><?php /*?>-------> Body Content Ends <-------<?php */?>
<?php get_footer(); ?>