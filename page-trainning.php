<?php  
	/**
	** Template Name: Trainning Template
	**/
    get_header();
    get_template_part('page_title'); 
?>
    <!-- =============== Service2-section start  =============== -->

    <div class="service2-section pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 primary4">
                        <div>
                            <h3><?=get_option('first_trainning_title')?></h3>
                        </div>
                    </div>
                </div>
            </div>
             <div class="row justify-content-center g-4">
                 <div class="col-lg-6 col-md-6 col-sm-10">
                     <div class="service-item2 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <?=get_option('first_block_trainning_icon')?>
                        <div class="service-content">
                            <span>01</span>
                            <h4><?=get_option('first_block_trainning_title')?></h4>
                            <p class="para">
                                <?=get_option('first_block_trainning_content')?>
                            </p>
                        </div>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="service-item2 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
                       <?=get_option('second_block_trainning_icon')?>
                       <div class="service-content">
                           <span>02</span>
                           <h4><?=get_option('second_block_trainning_title')?></h4>
                           <p class="para">
                                <?=get_option('second_block_trainning_content')?>                
                           </p>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== Service2-section end  =============== -->
        <!-- =============== Events-section start  =============== -->

    <div class="service3-section pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 primary4">
                        <div>
                            <h3><?=get_option('events_title'); ?></h3>
                        </div>
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
                    </div>
                </div>
                <?php $number = $number + .2; endwhile; wp_reset_query(); endif; ?>
            </div>
        </div>
    </div>
    <!-- =============== Events-section end  =============== -->
<?php get_footer();?>