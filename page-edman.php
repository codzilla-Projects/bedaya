<?php  
	/**
	** Template Name: Edman Template
	**/
    get_header();
    get_template_part('page_title'); 
?>
    <?php if (get_option('first_edman_hidden') != '1')  :?>
    <!-- ===============  banner1-area end=============== -->
    <div id="nafsy" class="nafsy-area-two pt-60">
        <div class="container">
        <!-- =============== About-section start  =============== -->
            <div class="about1-section pt-60 pb-60">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="section-title2 primary1">
                                <div>
                                    <h3><?=get_option('first_edman_title')?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-6 order-lg-1 order-2">
                            <div class="about1-content wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <?=get_option('first_edman_content')?>
                            </div>                     
                        </div>
                        <div class="col-lg-6 order-lg-2 order-1">
                            <?php
                                global $post;
                                $post_id =  $post->ID;
                                $first_images =  get_post_meta($post_id,'thumbnail_ids');
                                if(!empty($first_images)):
                            ?>
                            <div class="banner-section2 banner-height">
                                <div class="swiper banner1">
                                    <div class="swiper-wrapper">
                                        <?php
                                            $i=0;
                                            foreach ($first_images as $first_image) : if($i==1) break;
                                            $slider_image = wp_get_attachment_image_src($first_image, 'large')[0];
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="slider-bg banner-height" style="background-image:url(<?=$slider_image?>)">
                                            </div>
                                        </div>
                                        <?php $i++; endforeach;?>
                                    </div>
                                </div>
                            </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif?>
    <?php if (get_option('second_edman_hidden') != '1')  :?>
    <!-- =============== portfolio-section start  =============== -->

    <div class="portfolio-section pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="section-title2 primary1">
                        <div>
                            <h3>
                               <?=get_option('second_edman_title')?>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                global $post;
                $post_id =  $post->ID;
                $second_images =  get_post_meta($post_id,'thumbnail_second_ids');
                if(!empty($second_images)):
            ?>
            <div class="row position-relative justify-content-center">
                <div class="portfolio-slider2 swiper-fix">
                    <div class="row">
                        <?php
                            $i=0;
                            $number            = .2;
                            $no = get_option('second_edman_number_show');
                            foreach ($second_images as $second_image) : if($i==$no) break;
                            $slider_image = wp_get_attachment_image_src($second_image, 'large')[0];
                        ?>
                        <div class="col-md-6 mb-4">
                            <div class="portfolio-item1 style-2 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="<?=$number?>s">
                                <div class="portfolio-img">
                                    <img alt="image" src="<?=$slider_image ?>">
                                </div>
                            </div>
                        </div>
                        <?php $number = $number + .2; $i++; endforeach;?>
                    </div>
                </div>
            </div>
            <?php endif ?>
        </div>
    </div>

    <!-- =============== portfolio-section end  =============== -->
    <?php endif?>
    <!-- =============== faq-section start  =============== -->

    <div class="faq-section pt-60 pb-60" id="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="section-title2 primary1">
                        <div>
                            <h3>
                                <?=get_option('third_edman_title')?>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-12">
                    <div id="accordionExample" class="accordion accordion-flush row faq-wrap wow fadeInRight"  data-wow-duration="1.5s" data-wow-delay=".2s">
                        <?php
                            $number       = 1;
                            $no           = get_option('third_edman_number_show');
                            $faq          = bedaya_get_faq_with_meta($no);
                            if($faq->have_posts()) : 
                            while($faq->have_posts()) : $faq->the_post(); $post_id = get_the_ID(); 
                        ?>
                        <div class="faq-item col-md-6 hover-btn"><span></span>
                            <h5 id="heading<?=$post_id?>" class="accordion-button style-2 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse<?=$post_id?>" aria-expanded="false" aria-controls="collapse<?=$post_id?>">
                                 <?php if ($number < 10) {echo "0";} ?><?= $number;?>. <?php the_title()?>
                            </h5>

                            <div id="collapse<?=$post_id?>" class="accordion-collapse collapse" aria-labelledby="heading<?=$post_id?>" data-bs-parent="#accordionExample<?=$post_id?>">
                                <div class="accordion-body faq-body style-2">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                        <?php $number++; endwhile; wp_reset_query(); endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== faq-section end  =============== -->
    <!-- =============== portfolio-section start  =============== -->
    <?php
        global $post;
        $post_id =  $post->ID;
        $third_images =  get_post_meta($post_id,'thumbnail_third_ids');
        if(!empty($third_images)):
    ?>
     <div class="portfolio-section pt-60 pb-60">
        <img src="<?=bedaya_URL?>assets/images/bg/section-bg1.webp" alt="image" class="img-fluid section-bg-top">
        <img src="<?=bedaya_URL?>assets/images/bg/section-bg-bttm.webp" alt="image" class="img-fluid section-bg-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="section-title2 primary1">
                        <div>
                            <h3>
                                <?=get_option('fourth_edman_title')?>
                            </h3>
                        </div>
                        <p>
                            <?=get_option('fourth_edman_content')?>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row position-relative justify-content-center">
                <div class="swiper portfolio-slider1 swiper-fix">
                    <div class="swiper-wrapper">
                        <?php
                            $i=0;
                            $number = .2;
                            $no = get_option('fourth_edman_number_show');
                            foreach ($third_images as $third_image) : if($i==$no) break;
                            $slider_image = wp_get_attachment_image_src($third_image, 'large')[0];
                        ?>
                        <div class="swiper-slide p15">
                            <div class="portfolio-item1 wow fadeInDown " data-wow-duration="1.5s" data-wow-delay="<?=$number?>s">
                                <div class="portfolio-img">
                                    <img alt="image" src="<?=$slider_image?>">
                                </div>
                            </div>
                        </div>
                        <?php $number = $number + .2; $i++; endforeach;?>
                    </div>
                </div>
                <div class="slider-bottom d-flex justify-content-between align-items-center">
                    <div class="swiper-pagination style-3 d-block"></div>
                </div>
            </div> 
        </div>
    </div>
    <?php endif?>
    <!-- =============== portfolio-section end  =============== -->
    <?php if (get_option('fourth_edman_hidden') != '1')  :?>
    <!-- =============== Service-section start  =============== -->
    <div class="blog-section pt-60 pb-60">
        <img src="<?=bedaya_URL?>assets/images/bg/water-mark1.webp" alt="image" class="img-fluid water-mark1">
        <img src="<?=bedaya_URL?>assets/images/bg/water-mark2.webp" alt="image" class="img-fluid water-mark2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 primary4">
                        <div>
                            <h3>موضوعات قد تهمك</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="blog-slider swiper-fix">
                <div class="row">
                    <?php
                        $number    = .2;
                        $no        = 3;
                        $news      = bedaya_get_news($no);
                        if($news->have_posts()) : 
                        while($news->have_posts()) : $news->the_post(); 
                    ?>
                    <div class="col-md-4">
                        <div class="sigle-blog-1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="<?=$number?>s">
                            <div class="blog-image">
                                <img src="<?php the_post_thumbnail_url()?>" class="img-fluid" alt="image">
                            </div>
                            <div class="blog-content hover-border1">
                                <h4>
                                    <a href="<?php the_permalink()?>" title="<?php the_title()?>">
                                        <?=wp_trim_words( get_the_title() ,5, ' ...' )?>
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <?php $number = $number + .2; endwhile; wp_reset_query(); endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== Service-section end  =============== -->
    <?php endif?>
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