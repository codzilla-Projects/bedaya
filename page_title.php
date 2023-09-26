    <!-- ========== banner1-area start============= -->
    <?php $page_image  = get_the_post_thumbnail_url();?>
    <div class="inner-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?=bedaya_URL?>assets/images/bg/inner-banner.webp');">
        <img src="<?=bedaya_URL?>assets/images/bg/inner-bannerdot.webp" class="inner-bannerdot" alt="image">
        <img src="<?=bedaya_URL?>assets/images/bg/inner-bannerwave.webp" class="inner-bannerwave" alt="image">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center text-center">
                <div class="col-md-10">
                    <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <?php
                            global $page, $paged, $post;
                            if (is_tax()) {
                                $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
                                $term_title = $term->name;
                                echo "$term_title ";
                            } 
                            elseif ( is_404() ) 
                            { 
                              echo __('الصفحة غير موجودة ','bedaya');
                            }
                            else 
                            {
                                wp_title( '', true, 'right' );
                            }
                        ?>
                    </h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb gap-3">
                            <li class="breadcrumb-item"><a href="<?php bloginfo('url')?>">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                              <?php
                                    global $page, $paged, $post;
                                    if (is_tax()) {
                                        $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
                                        $term_title = $term->name;
                                        echo "$term_title ";
                                    } 
                                    elseif ( is_404() ) 
                                    { 
                                      echo __('الصفحة غير موجودة ','bedaya');
                                    }
                                    else 
                                    {
                                        wp_title( '', true, 'right' );
                                    }
                                ?>
                           </li>
                        </ol>
                      </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  banner1-area end=============== -->