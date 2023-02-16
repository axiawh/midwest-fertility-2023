<?php if(have_rows('call_to_action_set', 'options')): ?>
    <div class="cta-icon-set-container"><ul>
<?php while(have_rows('call_to_action_set', 'options')): the_row(); 
        /* ## Variables
        --------------------------------------------- */
        $cta_link = get_sub_field('cta_link', 'options');
        ?>
		<li><?php if(get_sub_field('cta_link', 'options')): ?><a class="button" href="<?php echo $cta_link['url']; ?>" target="<?php echo $cta_link['target']; ?>"><i class="<?php the_sub_field('cta_icon', 'options'); ?>" aria-hidden="true"></i> <span><?php if($cta_link['title']): ?><?php echo $cta_link['title']; ?><?php else: ?>More Info<?php endif; ?></span></a><?php endif; ?></li>
<?php endwhile; ?>
		</ul>
		</div>
<?php endif; ?>