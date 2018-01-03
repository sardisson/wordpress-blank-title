/*
 * Simple function to replace the post title if blank - just add it to functions.php
 *
 * 'title_save_pre' runs against the post title before the post is saved 
 */


function filter_title_save_pre( $title ) { 
    date_default_timezone_set(get_option('timezone_string'));
    if ( $title == "" ) {
      return date( 'd/m/Y, H:i' ); 
    } else {
      return $title;
    }
} 
         
add_filter( 'title_save_pre', 'filter_title_save_pre', 10, 1 ); 
