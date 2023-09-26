<?php  
	/**
	** Template Name: Nafsy Template
	**/
    get_header();
    get_template_part('page_title'); 
?>
    <!-- ===============  banner1-area end=============== -->
    <div id="nafsy" class="nafsy-area-two pt-60">
        <div class="container">
        <?php if (get_option('frist_nafsy_hidden') != '1')  :?>
        <!-- =============== About-section start  =============== -->
            <div class="about1-section pt-60 pb-60">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-6 order-lg-1 order-2">
                            <div class="about1-content wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <p class="para">
                                   <?=get_option('first_nafsy_content')?>
                                </p>
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
                                            $no = get_option('first_nafsy_number_show');
            								foreach ($first_images as $first_image) : if($i==$no) break;
               								$slider_image = wp_get_attachment_image_src($first_image, 'large')[0];
            							?>
                                        <div class="swiper-slide">
                                            <div class="slider-bg" style="background-image:url(<?=$slider_image?>)">
                                            </div>
                                        </div>
                                        <?php $i++; endforeach;?>
                                    </div>
                                </div>
                                <div class="banner-pagination d-flex justify-content-center flex-row align-items-center gap-2"></div>
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
                            <?php endif?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif?>
            <?php if (get_option('second_nafsy_hidden') != '1')  :?>
            <!-- =============== About-section end  =============== -->
            <?php
        	 	global $post;
				$post_id =  $post->ID;
			    $second_images =  get_post_meta($post_id,'thumbnail_second_ids');
			    if(!empty($second_images)):
			?>
            <div class="">
                <div class="banner-section2 banner2-height">
                    <div class="container">
                        <div class="swiper banner2">
                            <div class="swiper-wrapper">
                            	<?php
                                    $i=0;
                                    $no = get_option('second_nafsy_number_show');
    								foreach ($second_images as $second_image) : if($i==$no) break;
       								$slider_image = wp_get_attachment_image_src($second_image, 'large')[0];
    							?>
                                <div class="swiper-slide">
                                    <div class="slider-bg" style="background-image:url(<?=$slider_image?>)">
                                    </div>
                                </div>
                                <?php $i++; endforeach;?>
                            </div>
                        </div>
                    </div>
                    <div class="banner2-pagination d-flex justify-content-center flex-row align-items-center gap-2"></div>
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
        	<?php endif?>
            <?php endif?>
        </div>
    </div>
    <?php if (get_option('third_nafsy_hidden') != '1')  :?>
    <!-- =============== portfolio-section start  =============== -->
    <div class="portfolio-section pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-title2 primary1">
                        <div>
                            <h5>
                                <?=get_option('third_nafsy_title')?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row position-relative justify-content-center">
                <div class="portfolio-slider2 swiper-fix">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item1 style-2 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <div class="portfolio-img">
                                    <img alt="image" src="<?=get_option('third_nafsy_first_img')?>">
                                </div>
                                <div class="portfolio-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item1 style-2 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
                                <div class="portfolio-img">
                                    <img alt="image" src="<?=get_option('third_nafsy_second_img')?>">
                                </div>
                                <div class="portfolio-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- =============== portfolio-section end  =============== -->
    <?php endif?>
    <?php if (get_option('fourth_nafsy_hidden') != '1')  :?>
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
            <div class="row position-relative justify-content-center">
                <div class="swiper portfolio-slider1 swiper-fix">
                    <div class="swiper-wrapper">
                    	<?php
                    		$number = .2;
                            $i=0;
                            $no = get_option('fourth_nafsy_number_show');
							foreach ($third_images as $third_image) : if($i==$no) break;
							$slider_image = wp_get_attachment_image_src($third_image, 'large')[0];
						?>
                        <div class="swiper-slide p15">
                            <div class="portfolio-item1 wow fadeInDown " data-wow-duration="1.5s" data-wow-delay="<?php $number?>s">
                                <div class="portfolio-img">
                                    <img alt="image" src="<?=$slider_image?>">
                                </div>
                            </div>
                        </div>
                        <?php $i++; $number = $number + .2; endforeach;?>
                    </div>
                </div>
                <div class="slider-bottom d-flex justify-content-between align-items-center">
                    <div class="swiper-pagination style-3 d-block"></div>
                </div>
            </div>
            
        </div>
    </div>
	<?php endif ?>
    <!-- =============== portfolio-section end  =============== -->
    <?php endif?>
    <?php if (get_option('fivth_nafsy_hidden') != '1')  :?>
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