<?php

//add assets

function addAssets(){
    wp_enqueue_style( 'bootstrab', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrab', get_template_directory_uri().'/assets/js/bootstrap.min.js' ,['jquery']);
}
//add name of hooke and name of fun

add_action( "wp_enqueue_scripts","addAssets" );

?>