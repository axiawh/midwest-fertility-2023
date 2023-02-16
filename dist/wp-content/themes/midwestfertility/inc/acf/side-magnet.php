<?php if(get_field('turn_on_side_magnet_contact_button', 'options')): ?><div class="side-magnet"><?php if(have_rows('side_magnet_cta_set','options')): ?>
  <?php while(have_rows('side_magnet_cta_set','options')): the_row(); ?>
    <?php if(get_sub_field('link_or_popup', 'options') == 'Link'): ?><?php $cta_link = get_sub_field('cta_link','options'); ?><a class="button" href="<?php echo $cta_link['url']; ?>" target="<?php echo $cta_link['target']; ?>" onclick="ga('send', 'event', 'Side Magnet', 'click', '/#ctasidemagnet', '0');"><?php else: ?><a data-fancybox="ctasidemagnetpopup" class="button" href="#ctasidemagnet" onclick="ga('send', 'event', 'Side Magnet', 'click', '/#ctasidemagnet', '0');"><?php endif; ?>
    <?php if(get_sub_field('cta_side_magnet_icon')): ?> <i class="fa <?php the_sub_field('cta_side_magnet_icon'); ?>"></i> <?php endif; ?><?php the_sub_field('cta_side_magnet_name', 'options'); ?></a></div>
<div id="ctasidemagnet" style="display: none;">
    <?php the_sub_field('cta_side_magnet_content', 'options'); ?></div><?php endwhile; ?>
<?php endif; ?><?php endif; ?>