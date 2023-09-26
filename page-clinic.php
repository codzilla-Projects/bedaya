<?php  
	/**
	** Template Name: Clinic Template
	**/
    get_header();
    get_template_part('page_title'); 
?>
    <!-- ===============  banner1-area end=============== -->
    <div class="portfolio-section pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center align-items-start g-4 position-relative">
                <img src="<?=bedaya_URL?>assets/images/bg/dot-squire.webp" alt="image" class="dot-squire img-fluid"> 
                <?php
                    $number    = .2;
                    $no        = -1;
                    $clinics      = bedaya_get_clinic($no);
                    if($clinics->have_posts()) : 
                    while($clinics->have_posts()) : $clinics->the_post(); 
                ?>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="portfolio-item3 wow fadeInUp"  data-wow-duration="1.5s" data-wow-delay="<?=$number?>s">
                        <img src="<?php the_post_thumbnail_url()?>" alt="image">
                        <h2 class="portfolio-title"><?php the_title()?></h2>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h4><?php the_content();?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $number = $number + .2; endwhile; wp_reset_query(); endif; ?>
            </div>
        </div>
    </div>

    <!-- =============== portfolio-section start  =============== -->

    <div class="form-section pt-60 pb-60" id="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-title2 primary4">
                        <div>
                            <h3><?=get_option('application_title')?></h3>
                        </div>
                        <p class="para">
                            <?=get_option('application_content')?>
                        </p>
                    </div>
                </div>
            </div>
            <div dir="rtl" class="row d-flex justify-content-center">
                <div class="col-md-8">  
                    <?= do_shortcode('[contact-form-7 id="'.get_option('application_short_code').'" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();?>