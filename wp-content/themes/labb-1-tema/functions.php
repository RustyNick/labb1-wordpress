<?php
//Addera menyer till admin
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');

//Meny i headern
register_nav_menus(
    array(
        'meny-header' => 'meny-header',
        'meny-footer' => 'Meny placed in footer'
        )
);

?>