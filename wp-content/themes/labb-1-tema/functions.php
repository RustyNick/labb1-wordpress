<?php
//Addera menyer till admin
add_theme_support('post-thumbnail');
add_theme_support('menus');
add_theme_support('widgets');

add_action('after_setup_theme', 'register_menu');


//Meny i headern
register_nav_menus(
    array(
        'menu-header' => 'Header meny'
        )
);
?>