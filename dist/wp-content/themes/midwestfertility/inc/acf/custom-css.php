<?php if(get_field('turn_off_custom_font_sizing', 'options')): ?><?php else: ?><style type="text/css">
<?php if(get_field('h1_sizing','options') != ""): ?>
h1{
	font-size:<?php the_field('h1_sizing', 'options'); ?>;
}
<?php else: ?>
<?php endif; ?>
<?php if(get_field('h2_sizing','options') != ""): ?>
h2{
	font-size:<?php the_field('h2_sizing', 'options'); ?>;
}
<?php else: ?>
<?php endif; ?>
<?php if(get_field('h3_sizing','options') != ""): ?>
h3{
	font-size:<?php the_field('h3_sizing', 'options'); ?>;
}
<?php else: ?>
<?php endif; ?>
<?php if(get_field('h4_sizing','options') != ""): ?>
h4{
	font-size:<?php the_field('h4_sizing', 'options'); ?>;
}
<?php else: ?>
<?php endif; ?>
<?php if(get_field('h5_sizing','options') != ""): ?>
h5{
	font-size:<?php the_field('h5_sizing', 'options'); ?>;
}
<?php else: ?>
<?php endif; ?>
<?php if(get_field('p_sizing','options') != ""): ?>
p{
	font-size:<?php the_field('p_sizing', 'options'); ?>;
}
<?php else: ?>
<?php endif; ?>
<?php if(get_field('bullet_sizing','options') != ""): ?>
ul, ol{
	font-size:<?php the_field('bullet_sizing', 'options'); ?>;
}
<?php else: ?>
<?php endif; ?>
</style><?php endif; ?>