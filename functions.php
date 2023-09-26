<?php  
define('bedaya_ROOT', get_stylesheet_directory().'/');
define('bedaya_URL', get_stylesheet_directory_uri() .'/');
define('bedaya_ADMIN', admin_url());
define('bedaya_BlogUrl', get_bloginfo('url'));


require_once( bedaya_ROOT . '/lib/bedaya_enqueue_scripts.php' );

require_once( bedaya_ROOT . '/lib/bedaya_theme_init.php' );

require_once( bedaya_ROOT . '/lib/bedaya_functions.php');

require_once( bedaya_ROOT . '/lib/bedaya_meta_fields.php');

//require_once(bedaya_ROOT  . '/lib/wp_bootstrap_navwalker.php');

register_nav_menus();

function bedaya_menu() {
wp_nav_menu( array(
    'menu'              => 'Main Menu',
    'container'         => '',
    'theme_location'    => 'main-nav',
    'menu_class'        => 'menu-list',
    'depth'             => 3
    )
 );
}

function bedaya_mime_types( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}

add_filter( 'upload_mimes', 'bedaya_mime_types' );
/*Remove Title TO Anchor Tag Menu*/
function my_menu_notitle( $menu ){
  	return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );
}
add_filter( 'wp_nav_menu', 'my_menu_notitle' );
add_filter( 'wp_page_menu', 'my_menu_notitle' );
add_filter( 'wp_list_categories', 'my_menu_notitle' );

/*Add Footer Widget*/
function bedaya_widgets_init() {

  register_sidebar( array(
    'name'          => 'First Sidebar Column',
    'id'            => 'first_sidebar',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
  ));
}
add_action( 'widgets_init', 'bedaya_widgets_init' );

function bedaya_second_widgets_init() {

  register_sidebar( array(
    'name'          => 'Second Sidebar Column',
    'id'            => 'second_sidebar',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
  ));
}
add_action( 'widgets_init', 'bedaya_second_widgets_init' );

add_filter( 'the_content', 'wti_remove_autop_for_image', 0 );
function wti_remove_autop_for_image( $content )
{
    global $post;
    // Check for single page and image post type and remove
    if ( is_single() && $post->post_type == 'image' )
        remove_filter('the_content', 'wpautop');
    return $content;
}
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function change_footer_admin() {
  echo '<span id="footer-thankyou">Powered by <a href="https://codzilla.net/" target="_blank">Codezilla</a></span>';
}
add_filter('admin_footer_text', 'change_footer_admin');

/*Comment Earia*/

function gb_comment_form_tweaks ($fields) {
    $fields['author'] = '<div class="row"><div class="col-md-4"><input id="author" name="author" value="" placeholder="اسمك بالكامل  *" size="30" maxlength="245" required="required" type="text"></div>';
$fields['email'] = '<div class="col-md-4"><input id="email" name="email" type="email" value="" placeholder="البريد الالكترونى  *" size="30" maxlength="100" aria-describedby="email-notes" required="required"></div>';
$fields['url'] = '<div class="col-md-4"><input id="url" name="url" type="url" value="" placeholder="موقعك الالكترونى " size="30" maxlength="100" aria-describedby="email-notes" required="required"></div></div>';
$fields['comment'] = '<div class="row"><div class="col-md-12"><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" placeholder="اكتب تعليقك هنا ..." required="required"></textarea></div></div>';
    return $fields;
}

add_filter('comment_form_fields', 'gb_comment_form_tweaks');

function wpsites_change_comment_form_submit_label($arg) {
$arg['label_submit'] = 'انشر تعليقا ';
return $arg;
}
add_filter('comment_form_defaults', 'wpsites_change_comment_form_submit_label');

add_filter( 'comment_form_default_fields', 'tu_filter_comment_fields', 20 );
function tu_filter_comment_fields( $fields ) {
    $commenter = wp_get_current_commenter();

    $consent   = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

    $fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' . '<label for="wp-comment-cookies-consent"> احفظ اسمي، بريدي الإلكتروني، والموقع الإلكتروني في هذا المتصفح لاستخدامها المرة المقبلة في تعليقي.</label></p>';

    return $fields;
}

add_filter('comment_form_logged_in', function( $logged_in_as, $commenter, $user_identity) {
  return sprintf(
            '<p class="logged-in-as">%s</p>',
            sprintf(
                /* translators: 1: Edit user link, 2: Accessibility text, 3: User name, 4: Logout URL. */
                __( 'مرحبا بك  <a href="%1$s" aria-label="%2$s">%3$s</a>. <a class="log-out-link" href="%4$s">تسجيل خروج ؟</a>' ),
                get_edit_user_link(),
                /* translators: %s: User name. */
                esc_attr( sprintf( __( 'مرحبا بك  %s. تحديث حسابك .' ), $user_identity ) ),
                $user_identity,
                /** This filter is documented in wp-includes/link-template.php */
                wp_logout_url( apply_filters( 'the_permalink', get_permalink( get_the_ID() ), get_the_ID() ) )
            )
        );
}, 10, 3 );