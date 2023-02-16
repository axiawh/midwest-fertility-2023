<?php

// ---------------> Page Template Search Filter in Admin <---------------------*/
function add_page_template_filter_to_pages_admin()
{
    global $post_type;
    if($post_type == 'page')
    {?>
        <select name='page-template' id='filter-by-page-templates' class='postform'>
            <option value='all' <?php echo !isset($_GET['page-template']) ? ' selected="selected"' : ''; ?>>All Page Templates</option>
            <option value='page.php' <?php echo $_GET['page-template'] == 'page.php' ? ' selected="selected"' : ''; ?>>Default Template</option>
<?php
        $templates = get_page_templates();
        foreach($templates as $template_name => $template_filename)
        {?>
            <option value="<?php echo $template_filename; ?>" <?php echo $_GET['page-template'] == $template_filename ? ' selected="selected"' : ''; ?>><?php echo $template_name; ?></option>
<?php   }?>
        </select>
<?php
    }
}
add_action('restrict_manage_posts','add_page_template_filter_to_pages_admin');

function filter_pages_by_page_template_for_pages_admin($query)
{
    global $post_type, $pagenow;
    if($pagenow == 'edit.php' && $post_type == 'page')
    {
        if(isset($_GET['page-template']) && $_GET['page-template'] != 'all')
        {
            remove_action( 'pre_get_posts', __FUNCTION__ );
            $page_template= sanitize_text_field($_GET['page-template']);

            // Fixes issue with the get_posts returning all posts when searching for the meta_value of page.php.
            if($page_template == 'page.php')
            {
                $page_template= "Default";
            }

            $args = [
                        'post_type' => 'page',
                        'fields' => 'ids',
                        'nopaging' => true,
                        'meta_key' => '_wp_page_template',
                        'meta_value' => $page_template
                    ];
            $pageIDs= get_posts($args);
            $query->set('post__in', $pageIDs);
        }
    }   
}
add_action('pre_get_posts','filter_pages_by_page_template_for_pages_admin');
// *********** end ADD PAGE TEMPLATE FILTER TO PAGES IN ADMIN *************
?>