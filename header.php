<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php wp_title('|','true','right') ?>
        <?php bloginfo('name'); ?>
	</title>
	<link rel="icon" href="<?php get_option('bedaya_favicon');?>" type="image/gif" sizes="20x20">
	<?php wp_head(); ?>
</head>
<body>
	<!-- preloader -->
    <div class="egns-preloader">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="circle-border">
                        <div class="moving-circle"></div>
                        <div class="moving-circle"></div>
                        <div class="moving-circle"></div>
                        <svg width="180px" height="150px" viewBox="0 0 187.3 93.7" preserveAspectRatio="xMidYMid meet"
                            style="left: 50%; top: 50%; position: absolute; transform: translate(-50%, -50%) matrix(1, 0, 0, 1, 0, 0);">
                            <path stroke="#D90A2C" id="outline" fill="none" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" />
                            <path id="outline-bg" opacity="0.05" fill="none" stroke="#959595" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== header============= -->

    <header class="header-area style-2">
        <div class="header-logo">
            <a class="logo" href="<?php bloginfo('url')?>"><img alt="image" src="<?=get_option('bedaya_logo_img');?>"></a>
            <a class="sticky-logo" href="<?php bloginfo('url')?>"><img alt="image" src="<?=get_option('sticky_logo_img');?>"></a>
        </div>
        <div class="main-nav">
            <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                <div class="mobile-logo-wrap ">
                    <a href="<?php bloginfo('url')?>"><img alt="image" src="<?=get_option('bedaya_logo_img');?>" ></a>
                </div>
                <div class="menu-close-btn">
                    <i class="bi bi-x-lg text-white"></i>
                </div>
            </div>
            <?php bedaya_menu() ?>
            <!-- mobile-search-area -->
        </div>
        <div class="nav-right d-flex align-items-center gap-5">
            <div class="mobile-menu-btn d-lg-none d-block">
                <h1 class="text-white mb-0"><i class="bi bi-list"></i></h1>
            </div>
        </div>
    </header>

    <!-- ========== header end============= -->