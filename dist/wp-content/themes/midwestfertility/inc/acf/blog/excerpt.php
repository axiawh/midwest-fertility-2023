<?php
 if(get_field('formatted_with_html', 'options')){
	
/*-----------------------------------------------> EXCERPTS <---------------------------------------------------*/
	function wpse_allowedtags() {
    // Add custom tags to this string
        return '<br>,<p>'; 
    }

if ( ! function_exists( 'wpse_custom_wp_trim_excerpt' ) ) : 

    function wpse_custom_wp_trim_excerpt($wpse_excerpt) {
    $raw_excerpt = $wpse_excerpt;
        if ( '' == $wpse_excerpt ) {

            $wpse_excerpt = get_the_content('');
            $wpse_excerpt = strip_shortcodes( $wpse_excerpt );
            $wpse_excerpt = apply_filters('the_content', $wpse_excerpt);
            $wpse_excerpt = str_replace(']]>', ']]&gt;', $wpse_excerpt);
            $wpse_excerpt = strip_tags($wpse_excerpt, wpse_allowedtags()); /*IF you need to allow just certain tags. Delete if all tags are allowed */

            //Set the excerpt word count and only break after sentence is complete.
                $excerpt_word_count = 75;
                $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 
                $tokens = array();
                $excerptOutput = '';
                $count = 0;

                // Divide the string into tokens; HTML tags, or words, followed by any whitespace
                preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $wpse_excerpt, $tokens);

                foreach ($tokens[0] as $token) { 

                    if ($count >= $excerpt_length && preg_match('/[\,\;\?\.\!]\s*$/uS', $token)) { 
                    // Limit reached, continue until , ; ? . or ! occur at the end
                        $excerptOutput .= trim($token);
                        break;
                    }

                    // Add words to complete sentence
                    $count++;

                    // Append what's left of the token
                    $excerptOutput .= $token;
                }

            $wpse_excerpt = trim(force_balance_tags($excerptOutput));

                $excerpt_end = ' <a href="'. esc_url( get_permalink() ) . '">' . '&nbsp;&raquo;&nbsp;' . sprintf(__( 'Read more about: %s &nbsp;&raquo;', 'wpse' ), get_the_title()) . '</a>'; 
                $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end); 

                //$pos = strrpos($wpse_excerpt, '</');
                //if ($pos !== false)
                // Inside last HTML tag
                //$wpse_excerpt = substr_replace($wpse_excerpt, $excerpt_end, $pos, 0); /* Add read more next to last word */
                //else
                // After the content
                $wpse_excerpt .= $excerpt_more; /*Add read more in new paragraph */

            return $wpse_excerpt;   

        }
        return apply_filters('wpse_custom_wp_trim_excerpt', $wpse_excerpt, $raw_excerpt);
    }

endif; 

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wpse_custom_wp_trim_excerpt'); 

 }



/*-----------------------------------------------> EXCERPTS <---------------------------------------------------*/
	/***THIS ONE Overwrites the [...] from showing up but instead whatever you delegate here ***/
function new_excerpt_more($post) {
	$excerpttextlinklabel = get_field('blog_excerpt_text_link_label','options');
	$blog_excerpt_button_color = get_field('blog_excerpt_button_color','options');
	$blog_excerpt_button_icon = get_field('blog_excerpt_button_icon','options');
	 if (get_field('blog_excerpt_button','options')){
		 return $output . '<span>...</span><a href="'. get_permalink($post->ID) . '">' . '<button type="button" class="btn btn-'.$blog_excerpt_button_color.'">'. $excerpttextlinklabel .' <i class="fa '. $blog_excerpt_button_icon .'"></i></button>' . '</a><br>';}
		 else
	return '<span>...</span> <p class="read-more"><a href="'. get_permalink($post->ID) . '">' . $excerpttextlinklabel .' ' . '</a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');

	/*-------------> Excerpt Length <---------------------*/
function new_excerpt_length($length) {
	$excerptnumbercharacter = get_field('excerpt_number_of_characters','options');
	if(get_field('excerpt_number_of_characters','options')){
return $excerptnumbercharacter;
	}
	else
	return 55;
}
add_filter('excerpt_length', 'new_excerpt_length');

?>