<?php

/* ## Blog Block
--------------------------------------------- */
add_action('acf/init', 'blog_block');
function blog_block() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'blog_block',
            'title'             => __('Blog Feed'),
            'description'       => __('Add a Blog Feed.'),
            'render_template'   => '/inc/acf/blocks/blog-block.php', // IF YOU WANT TO PUT IN PHP FILE. IF NOT CALLBACK IT.
            'category'          => 'layout',
            // Specifying a dashicon for the block
           'icon' => 'rss',
        ));
    }
}

/* ## Toggle Tab Block
--------------------------------------------- */
add_action('acf/init', 'toggle_tab_block');
function toggle_tab_block() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'toggle_tab_block',
            'title'             => __('Toggle Tabs'),
            'description'       => __('Add a Toggle Tab Content Block.'),
            'render_template'   => '/inc/acf/blocks/toggle-tab-block.php', // IF YOU WANT TO PUT IN PHP FILE. IF NOT CALLBACK IT.
            'category'          => 'layout',
            // Specifying a dashicon for the block
           'icon' => 'grid-view',
        ));
    }
}


/* ## Staff Block
--------------------------------------------- */
add_action('acf/init', 'staff_block');
function staff_block() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'staff_block',
            'title'             => __('Staff'),
            'description'       => __('Add a Staff Content Block.'),
            'render_template'   => '/inc/acf/blocks/staff-block.php', // IF YOU WANT TO PUT IN PHP FILE. IF NOT CALLBACK IT.
            'category'          => 'layout',
            // Specifying a dashicon for the block
           'icon' => 'groups',
        ));
    }
}

?>