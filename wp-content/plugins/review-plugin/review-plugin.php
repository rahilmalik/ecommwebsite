<?php
/*
Plugin Name: review-plugin
Plugin URI:  http://localhost/wp_computerStore/review-plugin/
Description: Will Ask For Reviews of Different Products
Version:     1.0
Author:      Rahil Malik
Author URI:  http://localhost/wp_computerStore/
License:     
License URI: http://localhost/wp_computerStore/
*/
add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for reading!</p>';
}

?>