<?php if(get_field('turn_on_sub_page_popup')): ?>
    <?php if(have_rows('sub_page_popup_set')): ?>
    <div id="autopopup" style="display:none;">
		<a data-fancybox="autopopup" data-src="#autopopup" href="javascript:;" style="display:none;"></a>
      <?php while(have_rows('sub_page_popup_set')): the_row(); ?>
        <?php $popupdelay = get_sub_field('popup_delay'); ?>
        <script type="text/javascript">
            setTimeout(function(){
               jQuery('[data-fancybox="autopopup"]').eq(0).trigger('click');
            }, <?php echo $popupdelay; ?>);

             $("#autopopup").fancybox({
                });
        </script>   
        <?php $popup_featured_image = wp_get_attachment_image_src(get_sub_field('popup_featured_image'), 'mediumlarge'); $popup_featured_image_link = get_sub_field('popup_featured_image_link'); ?><a href="<?php echo $popup_featured_image_link['url']; ?>" target="<?php echo $popup_featured_image_link['target']; ?>"><img src="<?php echo $popup_featured_image[0]; ?>" alt="<?php echo $popup_featured_image_link['title']; ?>" /></a>
        <?php if(get_sub_field('popup_content')): ?> <?php the_sub_field('popup_content'); ?><?php endif; ?>
        
     <?php endwhile; ?>
    </div>
    <?php endif; ?>
<?php endif; ?>