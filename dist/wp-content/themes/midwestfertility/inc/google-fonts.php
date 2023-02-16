<?php
// This Loads the Google Font in the <head> in your theme + editor-style.css
function twentythirteen_get_fonts_url() {
    $fonts_url = '';
    $googlefont = _x( 'on', 'googlefont font: on or off', 'twentythirteen' );

    if ( 'off' !== $googlefont ) {
        $font_families = array();

        if ( 'off' !== $googlefont )
            $googleacffontofchoice = get_field('google_font_choice', 'options');
            $font_families[] = $googleacffontofchoice;

        $protocol = is_ssl() ? 'https' : 'http';
        $query_args = array(
            'family' => implode( '|', $font_families ),
            'subset' => 'latin,latin-ext',
        );
        $fonts_url = add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" );
    }
    return apply_filters( 'twentythirteen_get_fonts_url', $fonts_url );
}
function twentythirteen_mce_css( $mce_css ) { 
    $fonts_url = twentythirteen_get_fonts_url(); 

    if ( empty( $fonts_url ) ) 
        return $mce_css; 

    if ( ! empty( $mce_css ) ) 
        $mce_css .= ','; 

    $mce_css .= esc_url_raw( str_replace( ',', '%2C', $fonts_url ) ); 
    return $mce_css; 
} 
add_filter( 'mce_css', 'twentythirteen_mce_css' );
?>