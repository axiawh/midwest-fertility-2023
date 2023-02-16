<?php // -------------------------------> Video Gallery <-------------------------------- ?>
<?php if(get_row_layout() == 'video_gallery'): ?>
<div class="video-set-container">
 <?php if(get_sub_field('video_section_title')): ?><h3><?php the_sub_field('video_section_title'); ?></h3><?php endif; ?>
 <?php if(get_sub_field('video_section_sub_title')): ?><p><?php the_sub_field('video_section_sub_title'); ?></p><?php endif; ?>
	<?php if(have_rows('video_set')): ?>
    
<ul>
	<?php while(have_rows('video_set')): the_row(); 
		$featuredimage = wp_get_attachment_image_src(get_sub_field('video_thumbnail'), 'mediumlarge');
		$video_id = get_sub_field('video_id'); ?>
   <li><a data-fancybox title="<?php the_sub_field('video_title'); ?>" href="<?php the_sub_field('video_url'); ?>"><div class="video-thumb" style="background-image: url(<?php if(get_sub_field('video_thumbnail')): ?><?php echo $featuredimage[0]; ?><?php else: ?>https://img.youtube.com/vi/<?php echo $video_id; ?>/maxresdefault.jpg<?php endif; ?>);"><i class="fab fa-youtube fa-5x"></i></div></a>
	<p><?php the_sub_field('video_title'); ?></p>
	</li>
    <?php endwhile; ?>
    </ul>

    <?php endif; ?>
	</div>
<?php endif; ?>