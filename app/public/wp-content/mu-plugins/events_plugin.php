<?php
//Implmenetation of Events Blog, event is slug
function university_post_types(){
    register_post_type('event', array(
        'public' => true,  //allow to be seen
        'supports' => array('title', 'excerpt','editor'), //supprting libs
        'rewrite' => array('slug' => 'events'), //change slug to display on screens
        'has_archive' => true, //allows event archive
        'labels' => array( 
            'name' => 'Events',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'   //change wp-icon
        
    ));
}
add_action('init', 'university_post_types');

?>

