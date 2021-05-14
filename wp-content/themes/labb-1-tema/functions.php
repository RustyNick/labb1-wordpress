
<?php

//Addera menyer till admin
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');

//adderar utdrag till poster
function enable_page_excerpt(){
    add_post_type_support( 'page', array( 'excerpt' ));
}
add_action('init', 'enable_page_excerpt');

//lägger till möjlighet att byta föfattare
function add_author_support_to_posts(){
    add_post_type_support('your_custom_post_type', 'author');
}

add_action('init', 'add_author_support_to_posts');
// adding pagination
function pagination_bar(){
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}

//Meny i headern
register_nav_menus(
    array(
        'meny-header' => 'meny-header',
        'meny-footer' => 'Meny placed in footer',
        'side-menu' =>'side-menu'
        )
);


//widget för blogg
register_sidebar(
    [
        'name' => 'aside top',
        'description'=> 'aside-top',
        'id' => 'aside-top',
        'before_widget' => ''
    ]
);
register_sidebar(
    [
        'name' => 'aside middle',
        'description'=> 'aside-middle',
        'id' => 'aside-middle',
        'before_widget' => ''
    ]
);
register_sidebar(
    [
        'name' => 'aside bottom',
        'description'=> 'aside-bottom',
        'id' => 'aside-bottom',
        'before_widget' => ''
    ]
);


//widget för undersida
register_sidebar(
    [
        'name' => 'side-menu',
        'description'=> 'side-menu',
        'id' => 'side-menu',
        'before_widget' => ''
    ]
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