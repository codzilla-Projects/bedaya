<?php  
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID(); 
    $post_title = get_the_title();
get_template_part('page_title'); 
?>
    <!-- ===============  banner1-area end=============== -->

    <div class="blog-details pt-60 pb-60" id="blog-details">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-8">
                    <div class="blog-details-area">
                        <div class="blog-details-single">
                            <h3><?php the_title(); ?></h3>
                            <div class="image">
                                <img src="<?php the_post_thumbnail_url()?>" class="img-fluid" alt="image">
                            </div>
                            <div class="content">
                                <?php the_content()?>
                            </div>
                        </div>
                        <div class="row blog-details-share gap-3">
                            <div class="col-lg-6 text-lg-end text-center">
                                <h5>شارك معنا : </h5>
                            </div>
                            <div class="col-lg-6 text-lg-end text-center">
                                <?= do_shortcode('[maxsocial id="1"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="blog-widget-item">
                            <div class="recent-blog">
                                <h5 class="blog-widget-title">الأكثر قراءة</h5>
                                <div class="blog-widget-body">
                                    <ul class="recent-post-list">
                                        <?php
                                            $no        = get_option('news_number_show');
                                            $news      = bedaya_get_news_with_exclude($no);
                                            if($news->have_posts()) : 
                                            while($news->have_posts()) : $news->the_post(); 
                                        ?>
                                        <li>
                                            <a href="blog-details.html">
                                                <div class="recent-post-item">
                                                    <div class="recent-post-img">
                                                        <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>">
                                                    </div>
                                                    <div class="recent-post-content">
                                                        <h6><?php the_title()?></h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <?php endwhile; wp_reset_query(); endif; ?> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <nav class="nav-single">
                        <?php
                            $prev_post = get_previous_post(); 
                            $id = $prev_post->ID ;
                            $permalink = get_permalink( $id );
                        ?>
                        <?php 
                            $next_post = get_next_post();
                            $nid = $next_post->ID ;
                            $permalink = get_permalink($nid);
                        ?>
                           <span class="nav-previous text-lg-end"><?php previous_post_link( '%link', __( '<span class="meta-nav">&rarr;</span> السابق ', 'bedaya' ) ); ?> 
                                <a href="<?php echo $permalink; ?>"><?php echo $prev_post->post_title; ?></a>
                           </span>

                           <span class="nav-next text-lg-start"><?php next_post_link( '%link', __( 'التالي <span class="meta-nav">&larr;</span>', 'bedaya' ) ); ?>
                                <a href="<?php echo $permalink; ?>"><?php echo $next_post->post_title; ?></a>
                          </span>
                    </nav>
                </div>
                <div class="col-md-12">
                    <div class="blog-section pt-60 pb-60">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="section-title2 primary4">
                                    <div>
                                        <h3>موضوعات قد تهمك </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <?php
                                    $number    = .2;
                                    $news      = bedaya_get_news_with_exclude(3);
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
                                                    <?=wp_trim_words( get_the_title() ,4, ' ...' )?>
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
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="comment-respond">
                        <div class="comment-title">
                            <h3>اترك تعليقاً</h3>
                            <p>لن يتم نشر عنوان بريدك الإلكتروني. الحقول الإلزامية مشار إليها بـ *</p>
                        </div>
                        <div class="form-inner">
                            <div class="row">    
                                <?php 
                                    comment_form(array('title_reply' => '', 'comment_notes_before' => '')); // Get wp-comments.php template
                                ?>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; endif;?>
<?php get_footer();?>