<?php  
	/**
	** Template Name: About Us Template
	**/
    get_header();
    get_template_part('page_title'); 
?>
    <!-- ===============  banner1-area end=============== -->
    <div class="portfolio-section pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center align-items-start g-4 position-relative">
                <img src="<?=bedaya_URL?>assets/images/bg/dot-squire.webp" alt="image" class="dot-squire img-fluid"> 
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="portfolio-item3 wow fadeInUp"  data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <img src="<?php echo get_option('about_first_img'); ?>" alt="image">
                        <h2 class="portfolio-title"><?php echo get_option('about_first_title'); ?></h2>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h4><?php echo get_option('about_first_content'); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="portfolio-item3 wow fadeInUp"  data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <img src="<?php echo get_option('about_second_img'); ?>" alt="image">
                        <h2 class="portfolio-title"><?php echo get_option('about_second_title'); ?></h2>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h4><?php echo get_option('about_second_content'); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="portfolio-item3 wow fadeInUp"  data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <img src="<?php echo get_option('about_third_img'); ?>" alt="image">
                        <h2 class="portfolio-title"><?php echo get_option('about_third_title'); ?></h2>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h4><?php echo get_option('about_third_content'); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="portfolio-item3 wow fadeInUp"  data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <img src="<?php echo get_option('about_fourth_img'); ?>" alt="image">
                        <h2 class="portfolio-title"><?php echo get_option('about_fourth_title'); ?></h2>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h4><?php echo get_option('about_fourth_content'); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="portfolio-item3 wow fadeInUp"  data-wow-duration="1.5s" data-wow-delay="1.0s">
                        <img src="<?php echo get_option('about_fivth_img'); ?>" alt="image">
                        <h2 class="portfolio-title"><?php echo get_option('about_fivth_title'); ?></h2>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h4><?php echo get_option('about_fivth_content'); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="portfolio-item3 wow fadeInUp"  data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <img src="<?php echo get_option('about_sixth_img'); ?>" alt="image">
                        <h2 class="portfolio-title"><?php echo get_option('about_sixth_title'); ?></h2>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h4><?php echo get_option('about_sixth_content'); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="portfolio-item3 wow fadeInUp"  data-wow-duration="1.5s" data-wow-delay="1.4s">
                        <img src="<?php echo get_option('about_seventh_img'); ?>" alt="image">
                        <h2 class="portfolio-title"><?php echo get_option('about_seventh_title'); ?></h2>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h4><?php echo get_option('about_seventh_content'); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="portfolio-item3 wow fadeInUp"  data-wow-duration="1.5s" data-wow-delay="1.6s">
                        <img src="<?php echo get_option('about_eighth_img'); ?>" alt="image">
                        <h2 class="portfolio-title"><?php echo get_option('about_eighth_title'); ?></h2>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h4><?php echo get_option('about_eighth_content'); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="portfolio-item3 wow fadeInUp"  data-wow-duration="1.5s" data-wow-delay="1.8s">
                        <img src="<?php echo get_option('about_ninth_img'); ?>" alt="image">
                        <h2 class="portfolio-title"><?php echo get_option('about_ninth_title'); ?></h2>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h4><?php echo get_option('about_ninth_content'); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== portfolio-section start  =============== -->
<?php get_footer();?>