<?php
/*
Plugin Name: Movie Reviews
Plugin URI: http://wp.tutsplus.com/
Description: Declares a plugin that will create a custom post type displaying movie reviews.
Version: 1.0
Author: Soumitra Chakraborty
Author URI: http://wp.tutsplus.com/
License: GPLv2
*/

// Enable featured images 


add_theme_support('post-thumbnails');

// Custom sizes for images

function singolo_images_size() {
  add_image_size( 'slider', 1020, 600, true ); 
  add_image_size( 'project-thumb', 200, 190, true ); 
  add_image_size( 'medium', 300, 300, true ); 
  add_image_size( 'small', 60, 60, true ); 
}
add_action( 'after_setup_theme', 'singolo_images_size' );


add_action( 'init', 'create_social_media_list' );
add_action( 'init', 'create_portfolio_list' );
add_action( 'init', 'create_silder_list' );
add_action( 'init', 'my_custom_taxonomies' );
add_action( 'init', 'create_services_list' );
add_action( 'init', 'create_about_list' );
add_action("after_switch_theme", "create_form_database"); 



?>

<?php 
    

// function to create the DB 


function create_form_database() {
    
    $table_name = form_entries;

    

    $sql = 'CREATE TABLE '.$table_name.'(
        id INTEGER NOT NULL AUTO_INCREMENT,
        name VARCHAR(40),
        email VARCHAR(40),
        subject TEXT,
        projectdescription TEXT,
       PRIMARY KEY (id))';

    require_once(ABSPATH.'wp-admin/includes/upgrade.php');
   dbDelta($sql);

}

?>

     

 <?php


  //custom slider


 function create_silder_list() {
    register_post_type( 'slider-list',
        array(
                'labels' => array(
                'name' => 'Slider',
                'singular_name' => 'Slider',
                'add_new' => 'Add slider',
                'all_items' => 'All slides',
                'add_new_item' => 'Add slide',
                'edit_item' => 'Edit slide',
                'new_item' => 'New slide',
                'view_item' => 'View slide',
                'search_items' => 'Search slides',
                'not_found' => 'No slides found',
                'not_found_in_trash' => 'No slides found in trash'
                // 'parent' => 'Parent Movie Review'
            ),
 
            'public' => true,
            'supports' => array( 'title',
                                 'editor', 
                                 'comments', 
                                 'thumbnail'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-groups',
            'has_archive' => true
        )
    );
}


 //custom services list


 function create_services_list() {
    register_post_type( 'services-list',
        array(
            'labels' => array(
                'name' => 'Services',
                'singular_name' => 'Services',
                'add_new' => 'Add Service',
                'add_new_item' => 'Add New Service',
                'edit_item' => 'Edit Services',
                'new_item' => 'New Service',
                'view' => 'View',
                'view_item' => 'View Services',
                'search_items' => 'Search Services',
                'not_found' => 'Services found',
                'not_found_in_trash' => 'No Services found in Trash',
                // 'parent' => 'Parent Movie Review'
            ),
 
            'public' => true,
            'supports' => array( 'title',
            					 'editor', 
            					 'comments', 
            					 'thumbnail'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-groups',
            'has_archive' => true
        )
    );
}

//create portofolio list

function create_portfolio_list() {
    register_post_type( 'portfolio-list',
        array(
            'labels' => array(
                'name' => 'Portfolio',
                'singular_name' => 'Portfolio',
                'add_new' => 'Add project',
                'all_items' => 'All projects',
                'add_new_item' => 'Add project',
                'edit_item' => 'Edit project',
                'new_item' => 'New project',
                'view_item' => 'View projects',
                'search_items' => 'Search projects',
                'not_found' => 'No projects found',
                'not_found_in_trash' => 'No projects found in trash'
                // 'parent' => 'Parent Movie Review'
            ),
 
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'supports' => array( 'title',
                                 'editor', 
                                 'comments', 
                                 'thumbnail'
                                 ),
            'taxonomies' => array( 'projects_category' ),
            'menu_icon' => 'dashicons-groups',
            'has_archive' => true
        )
    );
}

 //custom about list

function create_about_list() {
    register_post_type( 'about-list',
        array(
            'labels' => array(
                'name' => 'Staff',
                'singular_name' => 'Services',
                'add_new' => 'Add Staff',
                'add_new_item' => 'Add New Staff',
                'edit_item' => 'Edit Staff',
                'new_item' => 'New Staff',
                'view' => 'View',
                'view_item' => 'View Staff',
                'search_items' => 'Search Staff',
                'not_found' => 'Staff found',
                'not_found_in_trash' => 'No Staff found in Trash',
                // 'parent' => 'Parent Movie Review'
            ),
 
            'public' => true,
            'supports' => array( 'title',
                                 'editor', 
                                 'comments', 
                                 'thumbnail',
                                 'custom-fields'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-groups',
            'has_archive' => true
        )
    );
}

//custom social media

function create_social_media_list() {
    register_post_type( 'social-media-list',
        array(
            'labels' => array(
                  'name' => 'Social Media',
                    'singular_name' => 'Network',
                    'add_new' => 'Add network',
                    'all_items' => 'All networks',
                    'add_new_item' => 'Add network',
                    'edit_item' => 'Edit network',
                    'new_item' => 'New network',
                    'view_item' => 'View network',
                    'search_items' => 'Search network',
                    'not_found' => 'No network found',
                    'not_found_in_trash' => 'No network found in trash'
                // 'parent' => 'Parent Movie Review'
            ),
 
            'public' => true,
            'supports' => array( 'title',
                                 'editor', 
                                 'comments', 
                                 'thumbnail'
                                 ),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-share',
            'has_archive' => true
        )
    );
}




// Custom Taxonomies
function my_custom_taxonomies() {
    $labels = array(
        'name'                       => 'Portfolio Categories',
        'singular_name'              => 'Category',
        'search_items'               => 'Search Categories',
        'popular_items'              => 'Popular Categories',
        'all_items'                  => 'All Projects Categories',      
        'edit_item'                  => 'Edit Projects Category',
        'update_item'                => 'Update Projects Category',
        'add_new_item'               => 'Add New Projects Category',
        'new_item_name'              => 'New Projects Category Name',       
        'add_or_remove_items'        => 'Add or remove Projects Categories',
        'choose_from_most_used'      => 'Choose from the most used Projects Categories',
        'not_found'                  => 'No Categories found.',
        'menu_name'                  => 'Portfolio Categories',
    );
    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,        
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'portfolio/category' ),
    );
    register_taxonomy( 'projects_category', 'portfolio-list', $args );
}
add_action( 'init', 'my_custom_taxonomies' );






?>

