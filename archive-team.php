<?php  
	/**
	** Template Name: Our Team Template
	**/
    get_header();
    get_template_part('page_title'); 
?>
    <div class="team-section2 pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="section-title2 primary4">
                        <span>-<?=get_option('team_page_title')?>-</span>
                        <div>
                            <h3><?=get_option('team_page_sub_title')?></h3>
                        </div>
                        <p class="para">                      
                            <?=get_option('team_page_content')?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center g-4">
                <?php
                    $number    = .2;
                    $no        = -1;
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
        </div>
    </div>
<?php get_footer();?>