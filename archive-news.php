<?php  
	/**
	** Template Name: news Template
	**/
    get_header();
    get_template_part('page_title'); 
?>
    <!-- =============== blog-section start  =============== -->

    <div class="blog-section pt-60 pb-60">
        <img src="<?=bedaya_URL?>assets/images/bg/water-mark1.webp" alt="image" class="img-fluid water-mark1">
        <img src="<?=bedaya_URL?>assets/images/bg/water-mark2.webp" alt="image" class="img-fluid water-mark2">
        <div class="container">
            <div class="blog-slider swiper-fix">
                <div class="row">
                    <?php
                        $number    = .2;
                        $no        = 3;
                        $news      = bedaya_get_news($no);
                        if($news->have_posts()) : 
                        while($news->have_posts()) : $news->the_post(); 
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
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
                <div class="row">
                    <nav class="page-pagination">
                        <?php    
                            $args = array(
                               'format'             => '?paged=%#%',
                               'current'            => max( 1, get_query_var('paged') ),
                               'total'              => $news->max_num_pages,
                               'show_all'           => false,
                               'end_size'           => 1,
                               'mid_size'           => 2,
                               'prev_next'          => true,
                               'next_text'          => '<i class="bx bx-chevron-left"></i>',
                               'prev_text'          => '<i class="bx bx-chevron-right"></i>',
                               'type'               => 'list',
                              );
                        ?>
                        <?php echo paginate_links($args); ?>       
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <!-- =============== blog-section end  =============== -->
<?php get_footer();?>