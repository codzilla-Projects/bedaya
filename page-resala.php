<?php  
	/**
	** Template Name: Resala Template
	**/
    get_header();
    get_template_part('page_title'); 
?>
    <!-- =============== Service-section start  =============== -->

    <div class="service-section4 pt-120 pb-120 position-relative overflow-hidden">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 col-sm-6 col-11">
                    <div class="service-item4 hover-border4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="row d-flex justify-content-center g-2 text-sm-end text-center">
                            <div class="col-lg-12 col-md-12 p-0">
                                <div class="service-content">
                                    <h4><?php echo get_option('first_resala_first_title'); ?></h4>
                                        <?php echo get_option('first_resala_first_content'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-11">
                    <div class="service-item4 hover-border4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="row d-flex justify-content-center g-2 text-sm-end text-center">
                            <div class="col-lg-12 p-0">
                                <div class="service-content">
                                    <h4><?php echo get_option('first_resala_second_title'); ?></h4>
                                        <?php echo get_option('first_resala_second_content'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-11">
                    <div class="service-item4 hover-border4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <div class="row d-flex justify-content-center g-2 text-sm-end text-center">
                            <div class="col-lg-12 p-0">
                                <div class="service-content">
                                    <h4><?php echo get_option('first_resala_third_title'); ?></h4>
                                        <?php echo get_option('first_resala_third_content'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();?>