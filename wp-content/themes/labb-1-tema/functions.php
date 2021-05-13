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


//widget för footer
register_sidebar(
    [
        'name' => 'Footer left',
        'description'=> 'vänster info',
        'id' => 'footerleft',
        'before_widget' => ''
    ]
);

register_sidebar(
    [
        'name' => 'Footer middle',
        'description'=> 'centrerad info',
        'id' => 'footercenter',
        'before_widget' => ''
    ]
);

register_sidebar(
    [
        'name' => 'Footer right',
        'description'=> 'höger info',
        'id' => 'footerright',
        'before_widget' => ''
    ]
);
register_sidebar(
    [
        'name' => 'Footer bottom',
        'description'=> 'bottom footer',
        'id' => 'footerbottom',
        'before_widget' => ''
    ]
);

?>