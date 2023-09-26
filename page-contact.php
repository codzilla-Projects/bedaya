<?php  
	/**
	** Template Name: Contact Us Template
	**/
    get_header();
    get_template_part('page_title'); 
?>
        <!-- =============== address-section start  =============== -->

    <div class="address-section pt-60">
        <div class="container">
            <div class="row d-flex justify-content-center g-4">
                <div class="col-lg-3 col-md-6 col-sm-10">
                    <div class="address-card">
                        <div class="content">
                            <div class="header">
                                <div class="location">
                                    <svg width="18" height="22" viewBox="0 0 18 22" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 22C9 22 17.25 14.1818 17.25 8.25C17.25 6.06196 16.3808 3.96354 14.8336 2.41637C13.2865 0.869194 11.188 0 9 0C6.81196 0 4.71354 0.869194 3.16637 2.41637C1.61919 3.96354 0.75 6.06196 0.75 8.25C0.75 14.1818 9 22 9 22ZM9 12.375C7.90598 12.375 6.85677 11.9404 6.08318 11.1668C5.3096 10.3932 4.875 9.34402 4.875 8.25C4.875 7.15598 5.3096 6.10677 6.08318 5.33318C6.85677 4.5596 7.90598 4.125 9 4.125C10.094 4.125 11.1432 4.5596 11.9168 5.33318C12.6904 6.10677 13.125 7.15598 13.125 8.25C13.125 9.34402 12.6904 10.3932 11.9168 11.1668C11.1432 11.9404 10.094 12.375 9 12.375Z"/>
                                    </svg>
                                </div>
                                <h3><?php echo get_option('contact_first_branch'); ?></h3>
                            </div>
                            <ul class="address-list">
                                <li>
                                    <span>اسم المقر:</span>
                                    <?php echo get_option('contact_first_branch_name'); ?>
                                </li>
                                 <li>
                                    <span>العنوان: </span>
                                    <?php echo get_option('contact_first_branch_address'); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10">
                    <div class="address-card">
                        <div class="content">
                            <div class="header">
                                <div class="location">
                                    <svg width="18" height="22" viewBox="0 0 18 22" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 22C9 22 17.25 14.1818 17.25 8.25C17.25 6.06196 16.3808 3.96354 14.8336 2.41637C13.2865 0.869194 11.188 0 9 0C6.81196 0 4.71354 0.869194 3.16637 2.41637C1.61919 3.96354 0.75 6.06196 0.75 8.25C0.75 14.1818 9 22 9 22ZM9 12.375C7.90598 12.375 6.85677 11.9404 6.08318 11.1668C5.3096 10.3932 4.875 9.34402 4.875 8.25C4.875 7.15598 5.3096 6.10677 6.08318 5.33318C6.85677 4.5596 7.90598 4.125 9 4.125C10.094 4.125 11.1432 4.5596 11.9168 5.33318C12.6904 6.10677 13.125 7.15598 13.125 8.25C13.125 9.34402 12.6904 10.3932 11.9168 11.1668C11.1432 11.9404 10.094 12.375 9 12.375Z"/>
                                    </svg>
                                </div>
                                <h3><?php echo get_option('contact_second_branch'); ?></h3>
                            </div>
                            <ul class="address-list">
                                <li>
                                    <span>اسم المقر :</span>
                                    <?php echo get_option('contact_second_branch_name'); ?>
                                </li>
                                <li>
                                    <span>العنوان: </span>
                                    <?php echo get_option('contact_second_branch_address'); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10">
                    <div class="address-card">
                        <div class="content">
                            <div class="header">
                                <div class="location">
                                    <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.12018 0.574918C2.31702 0.378368 2.55339 0.225896 2.81362 0.127607C3.07385 0.0293176 3.352 -0.0125448 3.62963 0.00479393C3.90727 0.0221327 4.17805 0.0982766 4.42402 0.22818C4.67 0.358083 4.88557 0.538779 5.05643 0.758293L7.0758 3.35254C7.44593 3.82842 7.57643 4.44829 7.43018 5.03329L6.8148 7.49704C6.78299 7.62465 6.78471 7.75832 6.81979 7.88507C6.85488 8.01182 6.92214 8.12734 7.01505 8.22042L9.77918 10.9845C9.87237 11.0776 9.98808 11.145 10.115 11.1801C10.242 11.2152 10.3759 11.2168 10.5037 11.1848L12.9663 10.5694C13.255 10.4972 13.5563 10.4916 13.8475 10.553C14.1387 10.6144 14.4121 10.7412 14.6471 10.9238L17.2413 12.942C18.1739 13.6677 18.2594 15.0458 17.4247 15.8794L16.2614 17.0427C15.4289 17.8752 14.1847 18.2408 13.0248 17.8324C10.0561 16.7879 7.36073 15.0884 5.13855 12.8599C2.91025 10.6381 1.21074 7.94306 0.166053 4.97479C-0.241197 3.81604 0.124428 2.57067 0.956928 1.73817L2.12018 0.574918Z"></path>
                                    </svg>
                                </div>
                                <h3><?php echo get_option('contact_first_branch'); ?></h3>
                            </div>
                            <ul class="address-list">
                                <li><span>هاتف ارضى :</span>
                                    <a href="tel:<?php echo get_option('contact_first_branch_landline'); ?>"> <?php echo get_option('contact_first_branch_landline'); ?></a>
                                </li>
                                <li><span>رقم الهاتف:</span>
                                    <a href="tel:<?php echo get_option('contact_first_branch_mobile'); ?>"> <?php echo get_option('contact_first_branch_mobile'); ?></a>
                                </li>
                                <li><span>رقم اخر:</span>
                                    <a href="tel:<?php echo get_option('contact_first_branch_other'); ?>"> <?php echo get_option('contact_first_branch_other'); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10">
                    <div class="address-card">
                        <div class="content">
                            <div class="header">
                                <div class="location">
                                    <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.12018 0.574918C2.31702 0.378368 2.55339 0.225896 2.81362 0.127607C3.07385 0.0293176 3.352 -0.0125448 3.62963 0.00479393C3.90727 0.0221327 4.17805 0.0982766 4.42402 0.22818C4.67 0.358083 4.88557 0.538779 5.05643 0.758293L7.0758 3.35254C7.44593 3.82842 7.57643 4.44829 7.43018 5.03329L6.8148 7.49704C6.78299 7.62465 6.78471 7.75832 6.81979 7.88507C6.85488 8.01182 6.92214 8.12734 7.01505 8.22042L9.77918 10.9845C9.87237 11.0776 9.98808 11.145 10.115 11.1801C10.242 11.2152 10.3759 11.2168 10.5037 11.1848L12.9663 10.5694C13.255 10.4972 13.5563 10.4916 13.8475 10.553C14.1387 10.6144 14.4121 10.7412 14.6471 10.9238L17.2413 12.942C18.1739 13.6677 18.2594 15.0458 17.4247 15.8794L16.2614 17.0427C15.4289 17.8752 14.1847 18.2408 13.0248 17.8324C10.0561 16.7879 7.36073 15.0884 5.13855 12.8599C2.91025 10.6381 1.21074 7.94306 0.166053 4.97479C-0.241197 3.81604 0.124428 2.57067 0.956928 1.73817L2.12018 0.574918Z"></path>
                                    </svg>
                                </div>
                                <h3><?php echo get_option('contact_second_branch'); ?></h3>
                            </div>
                           <ul class="address-list">
                                <li><span>هاتف ارضى :</span>
                                    <a href="tel:<?php echo get_option('contact_second_branch_landline'); ?>"> <?php echo get_option('contact_second_branch_landline'); ?></a>
                                </li>
                                <li><span>رقم الهاتف:</span>
                                    <a href="tel:<?php echo get_option('contact_second_branch_mobile'); ?>"> <?php echo get_option('contact_second_branch_mobile'); ?></a>
                                </li>
                                <li><span>رقم اخر:</span>
                                    <a href="tel:<?php echo get_option('contact_second_branch_other'); ?>"> <?php echo get_option('contact_second_branch_other'); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- =============== address-section end  =============== -->


    <!-- =============== form-section start  =============== -->

    <div class="form-section pt-60 pb-60" id="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 primary4">
                        <span>-ابقى على تواصل-</span>
                        <div>
                            <h3>تواصل معنا</h3>
                        </div>
                        <p class="para">
                            احصل على استشارة مجانية عن طريق تسجيل بياناتك وسنقوم بتوجيهك لفريق العمل لمساعدتك في استشارتك
                        </p>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
               <div class="col-lg-8">
                <?= do_shortcode('[contact-form-7 id="'.get_option('contact_short_code').'" title="Contact form 1"]'); ?>
               </div>
            </div>
        </div>
    </div>
    <?php $map = get_option('bedaya_map');
    if(!empty($map)) :
    ?>
    <!-- =============== form-section end  =============== -->
    <div class="map-section pt-60" id="faq">
        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?=$map ?>" title="المركز الإستشاري للطب النفسي وعلاج الإدمان - بداية" aria-label="المركز الإستشاري للطب النفسي وعلاج الإدمان - بداية"></iframe>
    </div>
    <?php endif ?>
<?php get_footer();?>