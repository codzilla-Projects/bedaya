<?php  
	/**
	** Template Name: Gallery Template
	**/
    get_header();
    get_template_part('page_title'); 
?>
<?php
    global $post;
    $post_id =  $post->ID;
    $first_images =  get_post_meta($post_id,'thumbnail_ids');
    if(!empty($first_images)):
?>
    <div id="gallery" class="gallery-area-two pt-60 pb-60">
        <div class="container">
            <div class="row gallery-photo pt-45 justify-content-center">
                <?php
                    $i=.2;
                    foreach ($first_images as $first_image) :
                    $slider_image = wp_get_attachment_image_src($first_image, 'large')[0];
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-photo-item wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="<?=$i?>s">
                        <img src="<?=$slider_image?>" alt="Images">
                        <div class="photo-button">
                            <a href="<?=$slider_image?>" class="photo-icon" title="Full Width">
                                <i class="bx bx-fullscreen"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php $i = $i + .2 ; endforeach;?>
            </div>
        </div>
    </div>
    <?php endif?>
<?php get_footer();?>