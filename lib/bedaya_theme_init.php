<?php
add_theme_support('post-thumbnails');
add_action( 'init', 'codzilla_custom_post_types' );
/**********************
** create CPT Types
**********************/
function codzilla_custom_post_types() {
	
 $cpts = [

    array(
        'single'   => 'FAQ',
        'plural'   => 'FAQ',
        'cptname'  => 'faq',
        'icon'     => 'dashicons-editor-ol',
        'supports' => ["title","editor"],
        'show_in_menu'=> true,
        'position' => 5
        ),
     array(
        'single'   => 'Customer Reviews',
        'plural'   => 'Customer Reviews',
        'cptname'  => 'customer-reviews',
        'icon'     => 'dashicons-format-quote',
        'supports' => ["title","editor","thumbnail"],
        'show_in_menu'=> true,
        'position' => 6
        ),
    array(
        'single'   => 'Event',
        'plural'   => 'Events',
        'cptname'  => 'event',
        'icon'     => 'dashicons-performance',
        'supports' => ["title","editor","thumbnail","excerpt"],
        'show_in_menu'=> true,
        'position' => 7
        ),
    array(
        'single'   => 'Team Member',
        'plural'   => 'Team Members',
        'cptname'  => 'team',
        'icon'     => 'dashicons-groups',
        'supports' => ["title","editor","thumbnail","excerpt"],
        'show_in_menu'=> true,
        'position' => 8
        ),
    array(
        'single'   => 'Clinics',
        'plural'   => 'Clinics',
        'cptname'  => 'clinic',
        'icon'     => 'dashicons-buddicons-buddypress-logo',
        'supports' => ["title","editor","thumbnail"],
        'show_in_menu'=> true,
        'position' => 9
        ),
 ];
 foreach ($cpts as $cpt) {

     $labels = array(
        'name'                  => _x( $cpt['single'], 'Post Type General Name', 'codzilla' ),
        'singular_name'         => _x( $cpt['single'], 'Post Type Singular Name', 'codzilla' ),
        'menu_name'             => __( $cpt['plural'], 'codzilla' ),
        'all_items'             => __( 'All '.$cpt['plural'], 'codzilla' ),
        'add_new_item'          => __( 'Add New '.$cpt['single'] , 'codzilla' ),
        'add_new'               => __( 'Add New', 'codzilla' ),
        'new_item'              => __( 'New '.$cpt['single'], 'codzilla' ),
        'edit_item'             => __( 'Edit '.$cpt['single'], 'codzilla' ),
        'update_item'           => __( 'Update '.$cpt['single'], 'codzilla' ),
        'view_item'             => __( 'View '.$cpt['single'], 'codzilla' ),
        'search_items'          => __( 'Search '.$cpt['plural'], 'codzilla' ),
        'not_found'             => __( 'Not found', 'codzilla' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'codzilla' ),
        'featured_image'        => __( 'Featured Image', 'codzilla' ),
        'set_featured_image'    => __( 'Set featured image', 'codzilla' ),
        'remove_featured_image' => __( 'Remove featured image', 'codzilla' ),
        'use_featured_image'    => __( 'Use as featured image', 'codzilla' ),
      );
      $args = array(
        'label'                 => __( $cpt['plural'], 'codzilla' ),
        'description'           => __( $cpt['plural'].' Description', 'codzilla' ),
        'labels'                => $labels,
        'supports'              => $cpt['supports'],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          =>$cpt['show_in_menu'],
        'menu_position'         => $cpt['position'],
        'menu_icon'             => $cpt['icon'],
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,    
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        
      );
    
    // Register Custom Post Type>
	register_post_type( $cpt['cptname'], $args );

    }   

}

add_filter( 'rwmb_meta_boxes', 'bedaya_gallery' );
function bedaya_gallery( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'First Gallery Image', 'bedaya' ),
        'context'    => 'side',
        'priority'   => 'low',
        'post_types' => array('page'),
        'fields'     => array(
            array(
                'name' => esc_html__( 'Upload Images'),
                'id'   => "thumbnail_ids",
                'type' => 'image_advanced',
            ),
        ),
    );

    return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'bedaya_second_gallery' );
function bedaya_second_gallery( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Second Gallery Image', 'bedaya' ),
        'context'    => 'side',
        'priority'   => 'low',
        'post_types' => array('page'),
        'fields'     => array(
            array(
                'name' => esc_html__( 'Upload Images'),
                'id'   => "thumbnail_second_ids",
                'type' => 'image_advanced',
            ),
        ),
    );

    return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'bedaya_third_gallery' );
function bedaya_third_gallery( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Third Gallery Image', 'bedaya' ),
        'context'    => 'side',
        'priority'   => 'low',
        'post_types' => array('page'),
        'fields'     => array(
            array(
                'name' => esc_html__( 'Upload Images'),
                'id'   => "thumbnail_third_ids",
                'type' => 'image_advanced',
            ),
        ),
    );

    return $meta_boxes;
}

/* create my custom menu pages */

function bedaya_register_custom_menu_pages() {

    add_menu_page(

        'website options',

        'إعدادت عامة ',

        'manage_options',

        'content-area',

        'main_content_area_callback',

        get_option('bedaya_favicon'),

        2

    ); 
        add_submenu_page(

        'content-area',

        'إعدادات الصفحة الرئيسية',

        'إعدادات الصفحة الرئيسية',

        'manage_options',

        'home-page-content',

        'home_page_area_callback'

    );
    add_submenu_page(

        'content-area',

        'إعدادات صفحة  علاج المرضى النفسي ',

        'إعدادات صفحة  علاج المرضى النفسي ',

        'manage_options',

        'nafsy-page-content',

        'nafsy_page_area_callback'

    );   
    add_submenu_page(

        'content-area',

        'إعدادات صفحة علاج الادمان',

        'إعدادات صفحة علاج الادمان',

        'manage_options',

        'edman-page-content',

        'edman_page_area_callback'

    ); 
    add_submenu_page(

        'content-area',

        'إعدادات صفحة التدريب',

        'إعدادات صفحة التدريب',

        'manage_options',

        'trainning-page-content',

        'trainning_page_area_callback'

    ); 
    add_submenu_page(

        'content-area',

        'إعدادات صفحة من نحن ',

        'إعدادات صفحة من نحن ',

        'manage_options',

        'about-page-content',

        'about_page_area_callback'

    );  
    add_submenu_page(

        'content-area',

        'إعدادات صفحة اقسام المركز',

        'إعدادات صفحة اقسام المركز',

        'manage_options',

        'section-page-content',

        'section_page_area_callback'

    );  
    add_submenu_page(

        'content-area',

        'إعدادات صفحة الرؤية والرسالة',

        'إعدادات صفحة الرؤية والرسالة',

        'manage_options',

        'resala-page-content',

        'resala_page_area_callback'

    );
    add_submenu_page(

        'content-area',

        'إعدادات صفحة فريق العمل ',

        'إعدادات صفحة فريق العمل ',

        'manage_options',

        'team-page-content',

        'team_page_area_callback'

    ); 
    add_submenu_page(

        'content-area',

        'إعدادات صفحة تواصل معنا ',

        'إعدادات صفحة تواصل معنا ',

        'manage_options',

        'contact-page-content',

        'contact_page_area_callback'

    );
    add_submenu_page(

        'content-area',

        'إعدادات نموذج التسجيل ',

        'إعدادات نموذج التسجيل ',

        'manage_options',

        'application-page-content',

        'application_page_area_callback'

    );   
}

add_action( 'admin_menu', 'bedaya_register_custom_menu_pages' );

require_once ( bedaya_ROOT . 'bedaya_options/bedaya_options.php');
require_once ( bedaya_ROOT . 'bedaya_options/home_page_options.php');
require_once ( bedaya_ROOT . 'bedaya_options/nafsy_page_options.php');
require_once ( bedaya_ROOT . 'bedaya_options/edman_page_options.php');
require_once ( bedaya_ROOT . 'bedaya_options/trainning_page_options.php');
require_once ( bedaya_ROOT . 'bedaya_options/section_page_options.php');
require_once ( bedaya_ROOT . 'bedaya_options/resala_page_options.php');
require_once ( bedaya_ROOT . 'bedaya_options/team_page_options.php');
require_once ( bedaya_ROOT . 'bedaya_options/contact_page_options.php');
require_once ( bedaya_ROOT . 'bedaya_options/application_form.php');

add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo() { ?>
    <style type="text/css">
        body{
            background:#c5c5d8!important; 
        }
        #login h1 a, .login h1 a {
            background-image: url(<?= get_option('bedaya_logo_img'); ?>);
            width: 100%;
            height: 100px;
            background-size: contain;
            margin: 0 auto;
        }
        .login form{
            background: rgba(3, 3, 4, .9)!important;
            border-radius: .5rem;
        }
        .login label{
            font-weight: 600!important;
            color: #fff!important;
        }
        .wp-core-ui p .button {
            background: rgba(3, 3, 4, .9)!important;
            border-color: rgba(3, 3, 4, .9)!important;
        }
        .wp-core-ui p .button:hover{
            background-color: #005b52 !important;
            border-color: #005b52 !important;
            color: #fff;
        }
        #reg_passmail{color:#fff;}
    </style>
<?php }
