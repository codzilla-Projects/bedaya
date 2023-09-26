<?php
function bedaya_admin_scripts_styles($hook) {
	wp_enqueue_style( 'bedaya-main', bedaya_URL . 'assets/admin/css/main-style.css');
    //var_dump($hook);
	$bedaya_pages = ['toplevel_page_content-area','%d8%a5%d8%b9%d8%af%d8%a7%d8%af%d8%aa-%d8%b9%d8%a7%d9%85%d8%a9_page_home-page-content','%d8%a5%d8%b9%d8%af%d8%a7%d8%af%d8%aa-%d8%b9%d8%a7%d9%85%d8%a9_page_nafsy-page-content','%d8%a5%d8%b9%d8%af%d8%a7%d8%af%d8%aa-%d8%b9%d8%a7%d9%85%d8%a9_page_edman-page-content','%d8%a5%d8%b9%d8%af%d8%a7%d8%af%d8%aa-%d8%b9%d8%a7%d9%85%d8%a9_page_trainning-page-content','%d8%a5%d8%b9%d8%af%d8%a7%d8%af%d8%aa-%d8%b9%d8%a7%d9%85%d8%a9_page_section-page-content','%d8%a5%d8%b9%d8%af%d8%a7%d8%af%d8%aa-%d8%b9%d8%a7%d9%85%d8%a9_page_resala-page-content','%d8%a5%d8%b9%d8%af%d8%a7%d8%af%d8%aa-%d8%b9%d8%a7%d9%85%d8%a9_page_team-page-content','%d8%a5%d8%b9%d8%af%d8%a7%d8%af%d8%aa-%d8%b9%d8%a7%d9%85%d8%a9_page_contact-page-content','%d8%a5%d8%b9%d8%af%d8%a7%d8%af%d8%aa-%d8%b9%d8%a7%d9%85%d8%a9_page_application-page-content','%d8%a5%d8%b9%d8%af%d8%a7%d8%af%d8%aa-%d8%b9%d8%a7%d9%85%d8%a9_page_about-page-content','post.php','post-new.php'];
	if( in_array($hook, $bedaya_pages) ) {

        wp_enqueue_style( 'bedaya-bootsrtap', bedaya_URL . 'assets/admin/css/bootstrap.min.css');
        wp_enqueue_style( 'bedaya-style', bedaya_URL . 'assets/admin/css/style.css');
            /*wp_enqueue_style( 'bedaya-bootsrtap', bedaya_URL . 'assets/admin/css/bootstrap.rtl.min.css');
            wp_enqueue_style( 'bedaya-style', bedaya_URL . 'assets/admin/css/style.css');
            wp_enqueue_style( 'bedaya-style-rtl', bedaya_URL . 'assets/admin/css/style.rtl.css');*/
        wp_enqueue_script( 'bedaya-popper', bedaya_URL .'assets/admin/js/popper.min.js', array() ,false, true );
        wp_enqueue_script( 'bedaya-bootsrtap',bedaya_URL .'assets/admin/js/bootstrap.bundle.min.js', array() ,false, true );
		wp_enqueue_script( 'bedaya-script', bedaya_URL .'assets/admin/js/script.js', array() ,false, true );
		if(function_exists( 'wp_enqueue_media' )){
			wp_enqueue_media();
		}else{
			wp_enqueue_style('thickbox');
			wp_enqueue_script('media-upload');
			wp_enqueue_script('thickbox');
		}
	}
}
 
add_action('admin_enqueue_scripts', 'bedaya_admin_scripts_styles');


function bedaya_scripts_styles() {


    wp_enqueue_style( 'bedaya-animate-css', bedaya_URL . 'assets/css/animate.css' );

    wp_enqueue_style( 'bedaya-all-css', bedaya_URL . 'assets/css/all.css">' );

    wp_enqueue_style( 'bedaya-bootstrap-css', bedaya_URL . 'assets/css/bootstrap.min.css' );

    wp_enqueue_style( 'bedaya-bootstrap-icons-css', bedaya_URL . 'assets/css/bootstrap-icons.css');

    wp_enqueue_style( 'bedaya-boxicons-css', bedaya_URL .  'assets/css/boxicons.min.css'); 

    wp_enqueue_style( 'bedaya-swiper-css', bedaya_URL . 'assets/css/swiper-bundle.css' );

    wp_enqueue_style('header-footer-css', bedaya_URL . 'assets/css/header-footer.css');

    if (is_page(112) || is_page(142)) {
        wp_enqueue_style( 'bedaya-nafsy-style-css', bedaya_URL . 'assets/css/nafsy-style.css' );
    }elseif (is_page(199) || is_page(223)){
        wp_enqueue_style( 'bedaya-about-css', bedaya_URL . 'assets/css/about.css');
    }elseif (is_page(202)){
        wp_enqueue_style( 'bedaya-trainning-style-css', bedaya_URL . 'assets/css/trainning-style.css' );
    }elseif (is_page(210)){
        wp_enqueue_style( 'bedaya-blog-style-css', bedaya_URL . 'assets/css/blog-style.css' );
    }elseif (is_page(229)){
        wp_enqueue_style( 'bedaya-center-style-css', bedaya_URL . 'assets/css/center-style.css' );
    }elseif (is_page(244)){
        wp_enqueue_style( 'bedaya-resala-style-css', bedaya_URL . 'assets/css/resala.css' );
    }elseif (is_page(251)){
        wp_enqueue_style( 'bedaya-teams-style-css', bedaya_URL . 'assets/css/teams-style.css' );
    }elseif (is_page(255)){
        wp_enqueue_style( 'bedaya-contact-style-css', bedaya_URL . 'assets/css/contact-style.css' );
    }elseif (is_page(272)){
        wp_enqueue_style( 'bedaya-fancybox-style-css', bedaya_URL . 'assets/css/jquery.fancybox.min.css' );
        wp_enqueue_style( 'bedaya-gallery-style-css', bedaya_URL . 'assets/css/gallery-style.css' );
    }elseif (is_single()){
        wp_enqueue_style( 'bedaya-single-style-css', bedaya_URL . 'assets/css/single-blog-style.css' );
    }else{
        wp_enqueue_style( 'bedaya-style-css', bedaya_URL . 'assets/css/new-style.css' );
    }

    //wp_enqueue_style( 'bedaya-responsive-css', bedaya_URL . 'assets/css/responsive.css' );
    

    wp_enqueue_script( 'bedaya-jquery-js',  bedaya_URL . 'assets/js/jquery-3.6.0.min.js', array() ,false, true );

    wp_enqueue_script( 'bedaya-jquery-ui-js', bedaya_URL . 'assets/js/jquery-ui.js">' , array() ,false, true );

    wp_enqueue_script( 'bedaya-bootsrtap-js',  bedaya_URL . 'assets/js/bootstrap.bundle.min.js' , array() ,false, true );

    wp_enqueue_script( 'bedaya-wow-js',  bedaya_URL . 'assets/js/wow.min.js' , array() ,false, true );

    wp_enqueue_script( 'bedaya-swiper-js',  bedaya_URL . 'assets/js/swiper-bundle.min.js' , array() ,false, true );

    if (is_page(112) || is_page(142)) {
        wp_enqueue_script('bedaya-nafsy-js', bedaya_URL . 'assets/js/nafsy.js' , array() ,false, true);
    }elseif (is_page(199) || is_page(223) || is_page(244)){
        wp_enqueue_script('bedaya-eiada-js', bedaya_URL . 'assets/js/eiada.js' , array() ,false, true);
    }elseif (is_page(202)){
        wp_enqueue_script('bedaya-trainning-js', bedaya_URL . 'assets/js/trainning.js' , array() ,false, true);
    }elseif (is_page(210)){
        wp_enqueue_script('bedaya-blog-js', bedaya_URL . 'assets/js/blog.js' , array() ,false, true);
    }elseif (is_page(229)){
        wp_enqueue_script('bedaya-center-js', bedaya_URL . 'assets/js/center.js' , array() ,false, true);
    }elseif (is_page(251)){
        wp_enqueue_script('bedaya-teams-js', bedaya_URL . 'assets/js/teams.js' , array() ,false, true);
    }elseif (is_page(255)){
        wp_enqueue_script('bedaya-contact-js', bedaya_URL . 'assets/js/contact.js' , array() ,false, true);
    }elseif (is_page(272)){
        wp_enqueue_script('bedaya-fancybox-js', bedaya_URL . 'assets/js/jquery.fancybox.min.js' , array() ,false, true);
        wp_enqueue_script('bedaya-gallery-js', bedaya_URL . 'assets/js/gallery.js' , array() ,false, true);
    }else{
        wp_enqueue_script( 'bedaya-main-js',  bedaya_URL . 'assets/js/main.js' , array() ,false, true );
    }
}
add_action( 'wp_enqueue_scripts', 'bedaya_scripts_styles' );

