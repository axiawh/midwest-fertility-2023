<?php if( get_row_layout() == 'row_oriented_table_build' ): ?>
<?php if(get_sub_field('table_headline')): ?><h3><?php the_sub_field('table_headline'); ?></h3><?php endif; ?>

<?php if(have_rows('table_row_set')): ?>
<table class="table table-striped table-hover">
  <?php while(have_rows('table_row_set')): the_row(); ?>
    <tr><?php if(get_sub_field('row_title')): ?><th scope="row"><?php the_sub_field('row_title'); ?></th><?php endif; ?>
    <?php if(have_rows('cell_content_set')): ?>
  <?php while(have_rows('cell_content_set')): the_row(); ?>
        <?php if(get_sub_field('cell_content')): ?><td><?php the_sub_field('cell_content'); ?></td><?php endif; ?>
 <?php endwhile; ?>
<?php endif; ?>
    
    </tr>
 <?php endwhile; ?>
<?php endif; ?>
</table>
<?php endif; ?>