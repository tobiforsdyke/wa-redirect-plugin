<?php
/*
Plugin Name: WA Redirect Plugin
Plugin URI:  http://www.tobiforsdyke.co.uk/
Description: This plugin redirects to another URL if specified in the post.
Version:     1.0
Author:      Tobi Forsdyke
Author URI:  http://www.tobiforsdyke.co.uk/
License:     GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

function wa_custom_redirect () {
	global $post;
	if ( is_page() || is_object( $post ) ) {
  	if ( $redirect = get_post_meta($post->ID, 'redirect', true ) ) {
        wp_redirect( $redirect );
        exit;
      }
    }
}
add_action( 'get_header', 'wa_custom_redirect' );

?>
