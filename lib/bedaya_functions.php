<?php 
function bedaya_get_faq($no){
    $args = array(
        'post_type'       => 'faq',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function bedaya_get_faq_with_meta($no){
    $args = array(
        'post_type'       => 'faq',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'meta_key'        => 'edman_faq_show',
        'meta_value'      => '1',
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function bedaya_get_customer_reviews($no){
    $args = array(
        'post_type'       => 'customer-reviews',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function bedaya_get_event($no){
    $args = array(
        'post_type'       => 'event',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function bedaya_get_team($no){
    $args = array(
        'post_type'       => 'team',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function bedaya_get_news($no){
    $args = array(
        'post_type'       => 'post',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}
function bedaya_get_news_with_exclude($no){
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
        'post_type'       => 'post',
        'post_status'     => 'publish',
        'exclude'         => array(get_the_ID()),
        'post__not_in'    => array(get_the_ID()),
        'posts_per_page'  =>  $no,
        'paged'           =>  $paged,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function bedaya_get_clinic($no){
    $args = array(
        'post_type'       => 'clinic',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function bedaya_get_clinic_with_meta($no){
    $args = array(
        'post_type'       => 'clinic',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'meta_key'        => 'about_clinic_show',
        'meta_value'      => '1',
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}