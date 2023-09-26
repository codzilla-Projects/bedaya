<?php  
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID(); 
    $post_title = get_the_title();
get_template_part('page_title'); 
?>
    <div class="blog-details pt-60 pb-60" id="blog-details">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-12">
                    <div class="blog-details-area">
                        <div class="blog-details-single">
                            <h3><?php the_title()?></h3>
                            <div class="image">
                                <img src="<?php the_post_thumbnail_url()?>" class="img-fluid" alt="<?php the_title()?>">
                            </div>
                            <div class="content">
                                <?php the_content()?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif;?>
<?php get_footer();?>