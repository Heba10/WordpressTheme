<?php

//add assets

function addAssets(){
    wp_enqueue_style( 'bootstrab', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/main.css' );
    wp_enqueue_script( 'bootstrab', get_template_directory_uri().'/assets/js/bootstrap.min.js' ,['jquery']);
   
}
//add name of hooke and name of fun

add_action( "wp_enqueue_scripts","addAssets" );

//add options
add_theme_support( "post-thumbnails" );

//add links to navbar
// add them saport of menu
add_theme_support("menus");

register_nav_menus( array(
    "main-menu" => "Main Menu",
    "footer-menu" => "Footer Menu"
) );
//then render the manu on navbar on header

//Custom Post Type CPT

function addSkillsPostType(){
    register_post_type("skills" ,array(
        "label" => "Skills",
        "public" => true,
        "menu_position" => 4,
        "supports" => ["title"],
        'taxonomies' => ['category'],
        "show_in_rest" =>true,
    ));

}

add_action("init" ,"addSkillsPostType")


?>