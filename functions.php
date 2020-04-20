<?php

//add assets

function addAssets(){
    wp_enqueue_style( 'bootstrab', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrab', get_template_directory_uri().'/assets/js/bootstrap.min.js' ,['jquery']);
    wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/main.css' );
}
//add name of hooke and name of fun

add_action( "wp_enqueue_scripts","addAssets" );

//add options
add_theme_support( "post-thumbnails" );

//add links to navbar
// add them saport of menu
add_theme_support( "menus" );
// add menu location
register_nav_menus(array(
    'top-nav'=>'Main Navigation',
    'footer-nav'=>'Footer Navigation',
));
//then render the manu on navbar on header

//Custom Post Type CPT

function addSkillsPostType(){
    register_post_type("skills" ,array(
        "label" => "Skills",
        "public" => true,
        "menu_position" => 4,
        "supports" => ["title"],
        'taxonomies' => ['category']
    ));

}

add_action("init" ,"addSkillsPostType")


?>