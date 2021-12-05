<?php
/**
 * Add automatic image sizes
 */
if ( function_exists( 'add_image_size' ) ) {
     add_image_size( 'Seymour-Image-Large', 'full' ); //!(cropped)
    add_image_size( 'Seymour-Image',900 ); //!(cropped)
    add_image_size( 'Seymour-Image-Medium',360,240, array( true, 'top' ) ); //(cropped)
    add_image_size( 'seymour-thumb', 150, 95, array( true, 'top' ) ); //(cropped)
}
function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        $text = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}
?>