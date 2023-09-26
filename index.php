<?php get_header();?>

    <?php if (get_option('hero_hidden') != '1')  :?>
   <!-- ========== banner1-area start============= -->
    <div class="banner-section2">
        <img src="<?=bedaya_URL?>assets/images/icons/banner2-spring.webp" class="banner2-spring1" alt="image">
        <img src="<?=bedaya_URL?>assets/images/icons/banner2-spring.webp" class="banner2-spring2" alt="image">
        <img src="<?=bedaya_URL?>assets/images/icons/banner2-circle.webp" class="banner2-circle1" alt="image">
        <img src="<?=bedaya_URL?>assets/images/icons/banner2-circle.webp" class="banner2-circle2" alt="image">
        <img src="<?=bedaya_URL?>assets/images/bg/banner2-vector.webp" class="banner2-vector" alt="image">
        <ul class="banner-social2 gap-5">
            <?php if(!empty(get_option('bedaya_fb'))): ?>
            <li><a href="<?=get_option('bedaya_fb')?>">Facebook</a></li>
            <?php endif?>
            <?php if(!empty(get_option('bedaya_twitter'))): ?>
            <li><a href="<?=get_option('bedaya_twitter')?>">Twitter</a></li>
            <?php endif?>
            <?php if(!empty(get_option('bedaya_insta'))): ?>
            <li><a href="<?=get_option('bedaya_insta')?>">Instagram</a></li>
            <?php endif?>
            <?php if(!empty(get_option('bedaya_youtube'))): ?>
            <li><a href="<?=get_option('bedaya_youtube')?>">Youtube</a></li>
            <?php endif?>
            <?php if(!empty(get_option('bedaya_linkedin'))): ?>
            <li><a href="<?=get_option('bedaya_linkedin')?>">LinkedIN</a></li>
            <?php endif?>
        </ul>
        <div class="swiper banner2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-bg" style="background-image:url(<?=get_option('hero_img'); ?>) ;">
                        <div class="container">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-xl-7 col-lg-10">
                                    <div class="banner2-content">
                                        <span><?=get_option('hero_small_header');?></span>
                                        <h1><?=get_option('hero_big_title');?></h1>
                                        <p>
                                            <?=get_option('hero_content');?>
                                        </p>
                                        <a href="<?=get_option('hero_first_link_url'); ?>" class="eg-btn btn--primary btn--lg">
                                            <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.12018 0.574918C2.31702 0.378368 2.55339 0.225896 2.81362 0.127607C3.07385 0.0293176 3.352 -0.0125448 3.62963 0.00479393C3.90727 0.0221327 4.17805 0.0982766 4.42402 0.22818C4.67 0.358083 4.88557 0.538779 5.05643 0.758293L7.0758 3.35254C7.44593 3.82842 7.57643 4.44829 7.43018 5.03329L6.8148 7.49704C6.78299 7.62465 6.78471 7.75832 6.81979 7.88507C6.85488 8.01182 6.92214 8.12734 7.01505 8.22042L9.77918 10.9845C9.87237 11.0776 9.98808 11.145 10.115 11.1801C10.242 11.2152 10.3759 11.2168 10.5037 11.1848L12.9663 10.5694C13.255 10.4972 13.5563 10.4916 13.8475 10.553C14.1387 10.6144 14.4121 10.7412 14.6471 10.9238L17.2413 12.942C18.1739 13.6677 18.2594 15.0458 17.4247 15.8794L16.2614 17.0427C15.4289 17.8752 14.1847 18.2408 13.0248 17.8324C10.0561 16.7879 7.36073 15.0884 5.13855 12.8599C2.91025 10.6381 1.21074 7.94306 0.166053 4.97479C-0.241197 3.81604 0.124428 2.57067 0.956928 1.73817L2.12018 0.574918Z"/>
                                        </svg>
                                           <?=get_option('hero_first_link_text'); ?>
                                        </a>
                                         <a href="<?=get_option('hero_second_link_url'); ?>" class="eg-btn btn--primary1 btn--lg"><?=get_option('hero_second_link_text'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner2-pagination d-flex justify-content-center flex-row align-items-center gap-2"></div>
    </div>
    <!-- ===============  banner1-area end=============== -->
    <?php endif; ?>
    <?php if (get_option('about_hidden') != '1')  :?>
    <!-- =============== About-section start  =============== -->

    <div class="about1-section pt-60 pb-60">
        <img src="<?=bedaya_URL?>assets/images/bg/section-bg1.webp" class="img-fluid section-bg1" alt="image">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="about1-content wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <span>-<?=get_option('about_small_title');?>-</span>
                        <h3><?=get_option('about_title');?></h3>
                        <?=get_option('about_content');?>
                        <a href="<?=get_option('about_link_url');?>" class="eg-btn btn--primary btn--lg"><?=get_option('about_link_text');?></a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="about-images wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="position-relative">
                            <img src="<?=get_option('about_img');?>" class="about13 img-fluid" alt="image">
                            <img src="<?=bedaya_URL?>assets/images/icons/sun-icon.webp" class="sun-icon" alt="image">
                            <img src="<?=bedaya_URL?>assets/images/icons/about-dot.webp" class="about-dot" alt="image">
                            <img src="<?=bedaya_URL?>assets/images/icons/about-triangle.webp" class="about-triangle" alt="image">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== About-section end  =============== -->
    <?php endif; ?>
    <?php if (get_option('services_hidden') != '1')  :?>
    <!-- =============== Service2-section start  =============== -->

    <div class="service2-section pt-60 pb-60">
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="section-title2 primary4">
                    <span>-<?=get_option('services_small_title'); ?>-</span>
                    <div>
                        <h3><?=get_option('services_title'); ?></h3>
                    </div>
                </div>
            </div>
        </div>
         <div class="row justify-content-center g-4">
             <div class="col-lg-6 col-md-6 col-sm-10">
                 <div class="service-item2 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <?php if(!empty(get_option('first_service_img'))): ?>
                        <img src="<?=get_option('first_service_img')?>" class="service21-icon" alt="image">
                    <?php else: ?>
                        <?=get_option('first_service_icon')?>
                    <?php endif ?>
                    <div class="service-content">
                        <span>01</span>
                        <h4><?=get_option('first_service_title')?></h4>
                        <p class="para">
                            <?=get_option('first_service_content')?>
                        </p>
                    </div>
                 </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-10">
                <div class="service-item2 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
                   <?php if(!empty(get_option('second_service_img'))): ?>
                        <img src="<?=get_option('second_service_img')?>" class="service21-icon" alt="image">
                    <?php else: ?>
                        <?=get_option('second_service_icon')?>
                    <?php endif ?>
                   <div class="service-content">
                       <span>02</span>
                       <h4><?=get_option('second_service_title')?></h4>
                       <p class="para">
                            <?=get_option('second_service_content')?>         
                       </p>
                   </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-10">
                <div class="service-item2 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
                   <?php if(!empty(get_option('third_service_img'))): ?>
                        <img src="<?=get_option('third_service_img')?>" class="service21-icon" alt="image">
                    <?php else: ?>
                        <?=get_option('third_service_icon')?>
                    <?php endif ?>
                   <div class="service-content">
                       <span>03</span>
                       <h4><?=get_option('third_service_title')?></h4>
                       <p class="para">
                            <?=get_option('third_service_content')?>         
                       </p>
                   </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-10">
                <div class="service-item2 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
                   <?php if(!empty(get_option('fourth_service_img'))): ?>
                        <img src="<?=get_option('fourth_service_img')?>" class="service21-icon" alt="image">
                    <?php else: ?>
                        <?=get_option('fourth_service_icon')?>
                    <?php endif ?>
                   <div class="service-content">
                       <span>04</span>
                       <h4><?=get_option('fourth_service_title')?></h4>
                       <p class="para">
                            <?=get_option('fourth_service_content')?>         
                       </p>
                   </div>
                </div>
            </div>
         </div>
     </div>
    </div>

    <!-- =============== Service2-section end  =============== -->
    <?php endif;?>
    <?php if (get_option('reserve_hidden') != '1')  :?>
    <!-- =============== Service-section start  =============== -->

    <div class="service-section5 pt-60 pb-60">
        <img src="<?=bedaya_URL?>assets/images/bg/water-mark4.webp" alt="image" class="service-watermark">
        <div class="container-fluid">
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="service-item5 wow fadeInDown" style="background: url(<?=get_option('first_reserve_img'); ?>);" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="service-title">
                            <h4><?=get_option('first_reserve_title'); ?></h4>
                        </div>
                        <p class="para mb-0">
                            <?=get_option('first_reserve_content'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="service-item5 wow fadeInDown" style="background: url(<?=get_option('second_reserve_img'); ?>);" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="service-title">
                            <h4><?=get_option('second_reserve_title'); ?></h4>
                        </div>
                        <p class="para mb-0">
                            <?=get_option('second_reserve_content'); ?>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="service-item5 wow fadeInDown" style="background: url(<?=get_option('third_reserve_img'); ?>);" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="service-title">
                            <h4><?=get_option('third_reserve_title'); ?></h4>
                        </div>
                        <p class="para mb-0">
                            <?=get_option('third_reserve_content'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== Service-section end  =============== -->
    <?php endif;?>
    <?php if (get_option('faq_hidden') != '1')  :?>
    <!-- =============== faq-section start  =============== -->

    <div class="faq-section pt-60 pb-60" id="faq">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4">
                    <div class="sidebar-card wow fadeInLeft"  data-wow-duration="1.5s" data-wow-delay=".2s">
                        <h2><?=get_option('faq_title'); ?></h2>
                        <a href="<?=get_option('faq_link_url'); ?>" class="eg-btn btn--primary btn--lg btn-x-lg"><?=get_option('faq_link_text'); ?></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="accordionExample" class="accordion faq-wrap wow fadeInRight"  data-wow-duration="1.5s" data-wow-delay=".2s">
                        <?php
                            $number       = 1;
                            $faq_expanded = true;
                            $no           = get_option('faq_number_show');
                            $faq          = bedaya_get_faq($no);
                            if($faq->have_posts()) : 
                            while($faq->have_posts()) : $faq->the_post(); $post_id = get_the_ID(); 
                        ?>
                        <div class="faq-item hover-btn"><span></span>
                            <h5  id="heading<?=$post_id?>" class="accordion-button style-2 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse<?=$post_id?>" aria-expanded="<?=$faq_expanded ? 'true' : 'false' ?>" aria-controls="collapse<?=$post_id?>">
                                <?php if ($number < 10) {echo "0";} ?><?= $number;?>. <?php the_title()?>
                            </h5>
                            <div id="collapse<?=$post_id?>" class="accordion-collapse collapse <?=$faq_expanded ? 'show' : '' ?>" aria-labelledby="heading<?=$post_id?>" data-bs-parent="#accordionExample">
                                <div class="faq-body style-2">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                        <?php $number++; $faq_expanded = false; ?>
                        <?php endwhile; wp_reset_query(); endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== faq-section end  =============== -->
    <?php endif?>
    <?php if (get_option('cleints_hidden') != '1')  :?>
    <!-- =============== Customer-Reviews-section start  =============== -->
    <div class="testimonial-section pb-60 pt-60">
        <img src="<?=bedaya_URL?>assets/images/bg/section-bg-bttm.webp" class="section-bg-bottom" alt="image">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 primary4">
                        <span>-<?=get_option('cleints_small_title');?>-</span>
                        <div>
                            <h3><?=get_option('cleints_title');?></h3>
                        </div>
                         <p>
                            <?=get_option('cleints_content');?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center position-relative">
                <div class="swiper testimonial-slider1 swiper-fix">
                    <div class="swiper-wrapper">
                        <?php
                            $number            = .2;
                            $no                = get_option('cleints_number_show');
                            $customer_reviews  = bedaya_get_customer_reviews($no);
                            if($customer_reviews->have_posts()) : 
                            while($customer_reviews->have_posts()) : $customer_reviews->the_post(); 
                        ?>
                        <div class="swiper-slide">
                            <div class="testimonial-single hover-border1 wow fadeInDown"  data-wow-duration="1.5s" data-wow-delay="<?=$number?>s">
                                <img alt="image" src="<?=bedaya_URL?>assets/images/icons/quote-icon.webp" class="quote-icon">
                                <div class="testi-img">
                                    <img alt="image" src="<?php the_post_thumbnail_url();?>" >
                                </div>
                                <div class="testi-content">
                                    <div class="testi-designation">
                                        <h5><?php the_title()?></h5>
                                    </div>
                                    <p>
                                        <?php the_content();?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php $number = $number + .2; endwhile; wp_reset_query(); endif; ?>
                    </div>
                </div>
                <div class="slider-arrows text-center d-xl-flex d-none  justify-content-between">
                    <div class="testi-prev1 swiper-prev-arrow" tabindex="0" role="button" aria-label="Previous slide"> 
                        <svg width="46" height="46" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="23" cy="23" r="22.25"  stroke-width="1.5"/>
                            <path d="M20 27.573V23V18.427C20 18.2574 19.8022 18.1648 19.672 18.2734L14 23L19.672 27.7266C19.8022 27.8352 20 27.7426 20 27.573Z"/>
                            <path d="M32 23.5C32.2761 23.5 32.5 23.2761 32.5 23C32.5 22.7239 32.2761 22.5 32 22.5V23.5ZM19.672 27.7266L19.9921 27.3425V27.3425L19.672 27.7266ZM14 23L13.6799 22.6159L13.219 23L13.6799 23.3841L14 23ZM19.672 18.2734L19.3519 17.8893L19.3519 17.8893L19.672 18.2734ZM32 22.5H20V23.5H32V22.5ZM19.5 23V27.573H20.5V23H19.5ZM19.9921 27.3425L14.3201 22.6159L13.6799 23.3841L19.3519 28.1107L19.9921 27.3425ZM14.3201 23.3841L19.9921 18.6575L19.3519 17.8893L13.6799 22.6159L14.3201 23.3841ZM19.5 18.427V23H20.5V18.427H19.5ZM19.9921 18.6575C19.7967 18.8203 19.5 18.6814 19.5 18.427H20.5C20.5 17.8335 19.8078 17.5093 19.3519 17.8893L19.9921 18.6575ZM19.5 27.573C19.5 27.3186 19.7967 27.1797 19.9921 27.3425L19.3519 28.1107C19.8078 28.4907 20.5 28.1665 20.5 27.573H19.5Z"/>
                        </svg>
                     </div>
                    <div class="testi-next1 swiper-next-arrow" tabindex="0" role="button" aria-label="Next slide"> 
                        <svg width="46" height="46" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="23" cy="23" r="23"/>
                            <path d="M26 18.427V23V27.573C26 27.7426 26.1978 27.8352 26.328 27.7266L32 23L26.328 18.2734C26.1978 18.1648 26 18.2574 26 18.427Z"/>
                            <path d="M14 22.5C13.7239 22.5 13.5 22.7239 13.5 23C13.5 23.2761 13.7239 23.5 14 23.5V22.5ZM26.328 18.2734L26.0079 18.6575V18.6575L26.328 18.2734ZM32 23L32.3201 23.3841L32.781 23L32.3201 22.6159L32 23ZM26.328 27.7266L26.6481 28.1107L26.6481 28.1107L26.328 27.7266ZM14 23.5H26V22.5H14V23.5ZM26.5 23V18.427H25.5V23H26.5ZM26.0079 18.6575L31.6799 23.3841L32.3201 22.6159L26.6481 17.8893L26.0079 18.6575ZM31.6799 22.6159L26.0079 27.3425L26.6481 28.1107L32.3201 23.3841L31.6799 22.6159ZM26.5 27.573V23H25.5V27.573H26.5ZM26.0079 27.3425C26.2033 27.1797 26.5 27.3186 26.5 27.573H25.5C25.5 28.1665 26.1922 28.4907 26.6481 28.1107L26.0079 27.3425ZM26.5 18.427C26.5 18.6814 26.2033 18.8203 26.0079 18.6575L26.6481 17.8893C26.1922 17.5093 25.5 17.8335 25.5 18.427H26.5Z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== Customer-Reviews-section end  =============== -->
    <?php endif?>
    <?php if (get_option('events_hidden') != '1')  :?>
    <!-- =============== Events-section start  =============== -->

    <div class="service3-section pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 primary4">
                        <span>-<?=get_option('events_small_title'); ?>-</span>
                        <div>
                            <h3><?=get_option('events_title'); ?></h3>
                        </div>
                        <p>
                           <?=get_option('events_content'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <?php
                    $number    = .2;
                    $no        = get_option('events_number_show');
                    $events    = bedaya_get_event($no);
                    if($events->have_posts()) : 
                    while($events->have_posts()) : $events->the_post(); 
                ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="service-item3 wow fadeInUp"  data-wow-duration="1.5s" data-wow-delay="<?=$number?>s">
                        <div class="icon">
                            <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>">
                        </div>
                        <div class="content">
                            <h4><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
                            <p class="para"> 
                                <?php the_content()?>
                            </p>
                        </div>
                        <a href="<?php the_permalink()?>" class="read-more-icon">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                </div>
                <?php $number = $number + .2; endwhile; wp_reset_query(); endif; ?>
            </div>
        </div>
    </div>
    <!-- =============== Events-section end  =============== -->
    <?php endif?>
    <?php if (get_option('team_hidden') != '1')  :?>
    <!-- =============== team-section start  =============== -->
    <div class="team-section2 pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 primary4">
                        <span>-<?=get_option('team_small_title')?>-</span>
                        <div>
                            <h3><?=get_option('team_title')?></h3>
                        </div>
                        <p class="para">                      
                            <?=get_option('team_content')?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center g-4">
                <?php
                    $number    = .2;
                    $no        = get_option('team_number_show');
                    $team      = bedaya_get_team($no);
                    if($team->have_posts()) : 
                    while($team->have_posts()) : $team->the_post(); 
                ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-team2 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="<?=$number?>s">
                        <div class="team-image">
                            <img src="<?php the_post_thumbnail_url()?>" alt="image">
                            <div class="social-area gap-3">
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="name"><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
                            <p class="designation">
                               <?php the_excerpt()?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php $number = $number + .2; endwhile; wp_reset_query(); endif; ?>
            </div>
            <div class="row d-flex justify-content-center g-4 pt-5">
                <div class="col-lg-12 d-flex justify-content-center">
                    <a href="<?=get_option('team_link_url')?>" class="eg-btn btn--primary btn--lg btn-x-lg"><?=get_option('team_link_text')?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== team-section end  =============== -->
    <?php endif?>
    <?php if (get_option('team_hidden') != '1')  :?>
    <!-- =============== offer-section start  =============== -->

    <div class="offer-section pt-80 pb-80">
        <img src="<?=bedaya_URL?>assets/images/bg/web-top.webp" class="img-fluid web-top" alt="image">
        <img src="<?=bedaya_URL?>assets/images/bg/web-bottom.webp" class="img-fluid web-bottom" alt="image">
        <img src="<?=bedaya_URL?>assets/images/icons/triangle-icon.webp" class="img-fluid triangle-icon" alt="image">
        <div class="container">
            <div class="row justify-content-center align-items-center gy-5">
                <div class="col-lg-7 order-lg-1 order-2">
                    <div class="offer-content wow fadeInLeft"  data-wow-duration="1.5s" data-wow-delay=".2s">
                        <img src="<?=bedaya_URL?>assets/images/events/event01.webp" alt="image">
                        <h3><?=get_option('why_bedaya_title')?></h3>
                        <p class="para"><?=get_option('why_bedaya_content')?></p>
                        <a href="<?=get_option('why_bedaya_link_url')?>" class="eg-btn btn--primary btn--lg btn-x-lg"><?=get_option('why_bedaya_link_text')?></a>
                    </div>
                </div>
                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="offer-image-area">
                        <img src="<?=get_option('why_bedaya_img')?>" class="img-fluid offer-bg" alt="image">
                        <img src="<?=bedaya_URL?>assets/images/icons/snake-arrow.webp" class="img-fluid snake-arrow" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== offer-section end  =============== -->
    <?php endif?>
    <?php if (get_option('news_hidden') != '1')  :?>
    <!-- =============== blog-section start  =============== -->

    <div class="blog-section pt-60 pb-60">
        <img src="<?=bedaya_URL?>assets/images/bg/water-mark1.webp" alt="image" class="img-fluid water-mark1">
        <img src="<?=bedaya_URL?>assets/images/bg/water-mark2.webp" alt="image" class="img-fluid water-mark2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 primary4">
                        <span>-<?=get_option('news_small_title');?>-</span>
                        <div>
                            <h3><?=get_option('news_title'); ?></h3>
                        </div>
                        <p class="para">
                            <?=get_option('news_content'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="swiper blog-slider swiper-fix">
                <div class="swiper-wrapper">
                    <?php
                        $number    = .2;
                        $no        = get_option('news_number_show');
                        $news      = bedaya_get_news($no);
                        if($news->have_posts()) : 
                        while($news->have_posts()) : $news->the_post(); 
                    ?>
                    <div class="swiper-slide">
                        <div class="sigle-blog-1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="<?=$number?>s">
                            <div class="blog-image">
                                <img src="<?php the_post_thumbnail_url()?>" class="img-fluid" alt="image">
                            </div>
                            <div class="blog-content hover-border1">
                                <div class="blog-meta">
                                    <div class="designation">
                                        <div class="date">
                                            <span>
                                                <i class="bi bi bi-person"></i>
                                                    <?php the_author();?>
                                            </span>
                                            <span>
                                                <i class="bi bi-calendar"></i>
                                                <strong dir="ltr"><?= get_the_date('d M, Y')?></strong>
                                            </span>
                                            <span>
                                                <i class="bi bi-chat-square-dots"></i>
                                               <?=get_comments_number()?> تعليق 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <h4>
                                    <a href="<?php the_permalink()?>" title="<?php the_title()?>">
                                        <?=wp_trim_words( get_the_title() ,5, ' ...' )?>
                                    </a>
                                </h4>
                                <p>
                                    <?=wp_trim_words( get_the_content() ,20, ' ...' )?>
                                </p>
                                <a href="<?php the_permalink()?>" class="eg-btn btn--primary1 btn--lg">اقرأ المزيد</a>
                            </div>
                        </div>
                    </div>
                    <?php $number = $number + .2; endwhile; wp_reset_query(); endif; ?>
                </div>
            </div>
            <div class="slider-bottom mt-50 d-xl-flex d-none justify-content-center align-items-center">
                <div class="swiper-pagination-blog text-center"></div>
            </div>

        </div>
    </div>

    <!-- =============== blog-section end  =============== -->
    <?php endif?>
    <?php if (get_option('contact_hidden') != '1')  :?>
    <!-- =============== form-section start  =============== -->

    <div class="form-section pt-60 pb-60" id="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 primary4">
                        <span>-<?=get_option('contact_small_title')?>-</span>
                        <div>
                            <h3><?=get_option('contact_title')?></h3>
                        </div>
                        <p class="para">
                            <?=get_option('contact_content')?>
                        </p>
                    </div>
                </div>
            </div>
            <div dir="rtl" class="row d-flex justify-content-center">
                <div class="col-md-8">  
                    <?= do_shortcode('[contact-form-7 id="'.get_option('contact_short_code').'" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== form-section end  =============== -->
    <?php endif?>
<?php get_footer();?>