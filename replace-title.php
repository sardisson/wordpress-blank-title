/*
 * Simple function to replace the post title if blank
 *
 * 'title_save_pre' runs against the post title before the post is saved 
 */


function filter_title_save_pre( $title ) { 
    if ( $title == "" ) {
      return date( 'd/m/Y, H:m' ); 
    } else {
      return $title;
    }
} 
         
add_filter( 'title_save_pre', 'filter_title_save_pre', 10, 1 ); 