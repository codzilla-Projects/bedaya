<?php 
function home_page_area_callback(){
	$wp_editor_settings = array( 
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2
	);    
	if( isset( $_POST['bedaya_save'] ) && !empty( $_POST['bedaya_save']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['hero_content','about_content','first_service_content','second_service_content','third_service_content','fourth_service_content','first_service_icon','second_service_icon','third_service_icon','fourth_service_icon','first_reserve_content','second_reserve_content','third_reserve_content','contact_content','contact_short_code'])){
				$value = stripcslashes($value);
			}				
			update_option( $key, $value);
		}
		if(!isset($_POST['hero_hidden'])) {delete_option('hero_hidden');}
        if(!isset($_POST['about_hidden'])) {delete_option('about_hidden');}
        if(!isset($_POST['services_hidden'])) {delete_option('services_hidden');}
        if(!isset($_POST['reserve_hidden'])) {delete_option('reserve_hidden');}
        if(!isset($_POST['faq_hidden'])) {delete_option('faq_hidden');}
        if(!isset($_POST['cleints_hidden'])) {delete_option('cleints_hidden');}
        if(!isset($_POST['events_hidden'])) {delete_option('events_hidden');}
        if(!isset($_POST['team_hidden'])) {delete_option('team_hidden');}
        if(!isset($_POST['why_bedaya_hidden'])) {delete_option('why_bedaya_hidden');}
        if(!isset($_POST['news_hidden'])) {delete_option('news_hidden');}
        if(!isset($_POST['contact_hidden'])) {delete_option('contact_hidden');}

	}
?>
<div dir="rtl" class="container-fluid text-right padding-right-4">
	<div class="row">

		<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center bedaya-title"><span>إعدادات الصفحة الرئيسية </span></h1>
			</header>
		</div>
			<br/>
		<div class="d-flex align-items-start p-0 m-0">
			<div class="nav flex-column nav-pills col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<button class="nav-link active" id="v-pills-first-rtl-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-first-rtl-section" type="button" role="tab" aria-controls="v-pills-first-rtl-section" aria-selected="true"> (الصورة)السكشن الاول </button>
				<button class="nav-link" id="v-pills-second-rtl-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-second-rtl-section" type="button" role="tab" aria-controls="v-pills-second-rtl-section" aria-selected="false">السكشن الثاني (قسم تعريف الجمعية) </button>
				<button class="nav-link" id="v-pills-third-rtl-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-third-rtl-section" type="button" role="tab" aria-controls="v-pills-third-rtl-section" aria-selected="false">السكشن الثالث (قسم الخدمات) </button>
				<button class="nav-link" id="v-pills-fourth-rtl-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourth-rtl-section" type="button" role="tab" aria-controls="v-pills-fourth-rtl-section" aria-selected="false">السكشن الرابع </button>
				<button class="nav-link" id="v-pills-fifth-rtl-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fifth-rtl-section" type="button" role="tab" aria-controls="v-pills-fifth-rtl-section" aria-selected="false">السكشن الخامس (الاسئلة الشائعة)</button>
				<button class="nav-link" id="v-pills-sixth-rtl-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixth-rtl-section" type="button" role="tab" aria-controls="v-pills-sixth-rtl-section" aria-selected="false">السكشن  السادس (اراء العملاء)</button>
				<button class="nav-link" id="v-pills-seventh-rtl-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-seventh-rtl-section" type="button" role="tab" aria-controls="v-pills-seventh-rtl-section" aria-selected="false">السكشن السابع (الاحداث)</button>
				<button class="nav-link" id="v-pills-eighth-rtl-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-eighth-rtl-section" type="button" role="tab" aria-controls="v-pills-eighth-rtl-section" aria-selected="false">السكشن الثامن (فريق العمل)</button>
				<button class="nav-link" id="v-pills-ninth-rtl-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ninth-rtl-section" type="button" role="tab" aria-controls="v-pills-ninth-rtl-section" aria-selected="false">السكشن التاسع (لماذا مركز بداية)</button>
                <button class="nav-link" id="v-pills-tenth-rtl-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tenth-rtl-section" type="button" role="tab" aria-controls="v-pills-tenth-rtl-section" aria-selected="false">السكشن العاشر (الاخبار)</button>
                <button class="nav-link" id="v-pills-eleventh-rtl-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-eleventh-rtl-section" type="button" role="tab" aria-controls="v-pills-eleventh-rtl-section" aria-selected="false">السكشن الحادى عشر (ابقى على تواصل)</button>
			</div>
			<div class="tab-content col-sm-9 col-md-9" id="v-pills-tabContent">
				<form class="form-horizontal bg-dark p-4 mr-3 ml-3" method="post" action="#">
				    <div class="tab-content" id="v-pills-tabContent">
				        <div class="tab-pane fade show active" id="v-pills-first-rtl-section" role="tabpanel" aria-labelledby="v-pills-first-rtl-section-tab">
				        	<div class="form-group text-right">                  
			                    <div class="inline-block">
			                        <input type="checkbox" id="hero_hidden" name="hero_hidden" value="1" <?php echo get_option('hero_hidden') == '1' ? 'checked' : ''; ?>>
			                    </div>
			                    <label for="hero_hidden" class="text-white">إخفاء السكشن</label>
			                </div>

			                <div class="form-group">
			                    <label for="hero_img" class="col-sm-12 text-left  control-label text-white">خلفيه السكشن الاول </label>
			                    <div class="col-sm-12 text-left ">
			                        <input class="hero_img_url bedaya_half" type="text" name="hero_img" size="60" value="<?php echo get_option('hero_img'); ?>">
			                    <a href="#" class="hero_img_upload btn btn-info">اختر</a>
			                    <img class="hero_img" src="<?php echo get_option('hero_img'); ?>" height="100" style="max-width:100%" />
			                    </div>
			                </div>
				        	<div class="form-group">
								<label for="hero_small_header" class="col-sm-12 text-right  control-label text-white">العنوان الفرعي</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="hero_small_header" name="hero_small_header" value="<?php echo get_option('hero_small_header'); ?>">
								</div>
							</div>

			                <div class="form-group">
								<label for="hero_big_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسيى</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="hero_big_title" name="hero_big_title" value="<?php echo get_option('hero_big_title'); ?>">
								</div>
							</div>

			                <div class="form-group text-left">
			                    <label for="hero_content" class="col-sm-6 control-label text-white">المقال</label>
			                    <div class="col-sm-12">
			                        <?php wp_editor( get_option('hero_content'), 'hero_content',  array('textarea_rows'=>5,'textarea_name'=> 'hero_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'hero_content','class'=>'form-control',) );  ?>
			                    </div>
			                </div>

			                <div class="form-group">
								<label for="hero_first_link_text" class="col-sm-12 text-right  control-label text-white">نص الرابط الاول </label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="hero_first_link_text" name="hero_first_link_text" value="<?php echo get_option('hero_first_link_text'); ?>">
								</div>
							</div>

			                <div class="form-group">
								<label for="hero_first_link_url" class="col-sm-12 text-right  control-label text-white">عنوان الرابط الاول </label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="hero_first_link_url" name="hero_first_link_url" value="<?php echo get_option('hero_first_link_url'); ?>">
								</div>
							</div>

			                <div class="form-group">
								<label for="hero_second_link_text" class="col-sm-12 text-right  control-label text-white">نص الرابط الثانى</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="hero_second_link_text" name="hero_second_link_text" value="<?php echo get_option('hero_second_link_text'); ?>">
								</div>
							</div>

			                <div class="form-group">
								<label for="hero_second_link_url" class="col-sm-12 text-right  control-label text-white">عنوان الرابط الثانى</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="hero_second_link_url" name="hero_second_link_url" value="<?php echo get_option('hero_second_link_url'); ?>">
								</div>
							</div>  
				        </div>

				        <div class="tab-pane fade" id="v-pills-second-rtl-section" role="tabpanel" aria-labelledby="v-pills-second-rtl-section-tab">
				        	<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="about_hidden" name="about_hidden" value="1" <?=get_option('about_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="about_hidden" class="text-white">إخفاء السكشن </label>
							</div>

                            <div class="form-group text-right">
							  	<label for="about_small_title" class="col-sm-12 control-label text-white">العنوان الفرعى</label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="about_small_title" size="60" value="<?=get_option('about_small_title'); ?>">
							  </div>
							</div>

				        	<div class="form-group text-right">
							  	<label for="about_title" class="col-sm-12 control-label text-white">العنوان </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="about_title" size="60" value="<?=get_option('about_title'); ?>">
							  </div>
							</div>

							<div class="form-group text-right">
							  	<label for="about_link_text" class="col-sm-12 control-label text-white">نص الرابط</label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="about_link_text" size="60" value="<?=get_option('about_link_text'); ?>">
							  </div>
							</div>

							<div class="form-group text-right">
							  	<label for="about_link_url" class="col-sm-12 control-label text-white">عنوان الرابط</label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="about_link_url" size="60" value="<?=get_option('about_link_url'); ?>">
							  </div>
							</div>

							<div class="form-group text-right">
								<label for="about_content" class="col-sm-6 control-label text-white">المحتوى </label>
								<div class="col-sm-12">
	                				<?php wp_editor( get_option('about_content'), 'about_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_content','class'=>'form-control',) );  ?>
								</div>
							</div>

                            <div class="form-group">
			                    <label for="about_img" class="col-sm-12 text-left  control-label text-white">خلفيه السكشن الاول </label>
			                    <div class="col-sm-12 text-left ">
			                        <input class="about_img_url bedaya_half" type="text" name="about_img" size="60" value="<?php echo get_option('about_img'); ?>">
			                    <a href="#" class="about_img_upload btn btn-info">اختر</a>
			                    <img class="about_img" src="<?php echo get_option('about_img'); ?>" height="100" style="max-width:100%" />
			                    </div>
			                </div>
						</div>
							
						<div class="tab-pane fade" id="v-pills-third-rtl-section" role="tabpanel" aria-labelledby="v-pills-third-rtl-section-tab">
							<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="services_hidden" name="services_hidden" value="1" <?=get_option('services_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="services_hidden" class="text-white">إخفاء السكشن </label>
							</div>

                            <div class="form-group text-right">
							  	<label for="services_small_title" class="col-sm-12 control-label text-white">العنوان الفرعى </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="services_small_title" size="60" value="<?=get_option('services_small_title'); ?>">
							  </div>
							</div>

							<div class="form-group text-right">
							  	<label for="services_title" class="col-sm-12 control-label text-white">العنوان </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="services_title" size="60" value="<?=get_option('services_title'); ?>">
							  </div>
							</div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="w-100 text-center text-white mt-3">خدمات الجمعية</h2>
                                </div>
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <label for="first_service_img" class="col-sm-12 text-left  control-label text-white">صورة الخدمة الاولي</label>
                                            <div class="col-sm-12 text-left ">
                                                <input class="first_service_img_url bedaya_half" type="text" name="first_service_img" size="60" value="<?php echo get_option('first_service_img'); ?>">
                                            <a href="#" class="first_service_img_upload btn btn-info">اختر</a>
                                            <img class="first_service_img" src="<?php echo get_option('first_service_img'); ?>" height="100" style="max-width:100%" />
                                            </div>
                                        </div>
                                        <div class="form-group text-right">
                                            <label for="first_service_icon" class="col-sm-12 control-label text-white">رمز الخدمة الاولى  </label>
                                            <div class="col-sm-12">
                                                <input class="bedaya_half_ar w-100" type="text" name="first_service_icon" size="60" value="<?=get_option('first_service_icon'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group text-right text-white mt-2 mb-2">
                                            <a target="_blank" class="text-white" href="https://boxicons.com/">اضغط هنا للحصول على الرمز</a> 
                                            <label for="first_service_icon" class="col-sm-12 control-label text-white">مع مراعاه كتابته كالاتى <div dir="ltr"></div><span><</span>i class='bx bx-buildings'><<span>/i></span></label>
                                        </div>
                                        <div class="form-group text-right">
                                            <label for="first_service_title" class="col-sm-12 control-label text-white">عنوان الخدمة الاولى  </label>
                                            <div class="col-sm-12">
                                                <input class="bedaya_half_ar w-100" type="text" name="first_service_title" size="60" value="<?=get_option('first_service_title'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group text-right">
                                            <label for="first_service_content" class="col-sm-6 control-label text-white">المحتوى </label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('first_service_content'), 'first_service_content',  array('textarea_rows'=>5,'textarea_name'=> 'first_service_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_service_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <label for="second_service_img" class="col-sm-12 text-left  control-label text-white">صورة الخدمة الثانية</label>
                                            <div class="col-sm-12 text-left ">
                                                <input class="second_service_img_url bedaya_half" type="text" name="second_service_img" size="60" value="<?php echo get_option('second_service_img'); ?>">
                                            <a href="#" class="second_service_img_upload btn btn-info">اختر</a>
                                            <img class="second_service_img" src="<?php echo get_option('second_service_img'); ?>" height="100" style="max-width:100%" />
                                            </div>
                                        </div>
                                        <div class="form-group text-right">
                                            <label for="second_service_icon" class="col-sm-12 control-label text-white">رمز الخدمة الثانية  </label>
                                            <div class="col-sm-12">
                                                <input class="bedaya_half_ar w-100" type="text" name="second_service_icon" size="60" value="<?=get_option('second_service_icon'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group text-right text-white mt-2 mb-2">
                                            <a target="_blank" class="text-white" href="https://boxicons.com/">اضغط هنا للحصول على الرمز</a> 
                                            <label for="first_service_icon" class="col-sm-12 control-label text-white">مع مراعاه كتابته كالاتى <div dir="ltr"></div><span><</span>i class='bx bx-buildings'><<span>/i></span></label>
                                        </div>
                                        <div class="form-group text-right">
                                            <label for="second_service_title" class="col-sm-12 control-label text-white">عنوان الخدمة الثانية  </label>
                                            <div class="col-sm-12">
                                                <input class="bedaya_half_ar w-100" type="text" name="second_service_title" size="60" value="<?=get_option('second_service_title'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group text-right">
                                            <label for="second_service_content" class="col-sm-6 control-label text-white">المحتوى </label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('second_service_content'), 'second_service_content',  array('textarea_rows'=>5,'textarea_name'=> 'second_service_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_service_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <label for="third_service_img" class="col-sm-12 text-left  control-label text-white">صورة الخدمة الثالثة</label>
                                            <div class="col-sm-12 text-left ">
                                                <input class="third_service_img_url bedaya_half" type="text" name="third_service_img" size="60" value="<?php echo get_option('third_service_img'); ?>">
                                            <a href="#" class="third_service_img_upload btn btn-info">اختر</a>
                                            <img class="third_service_img" src="<?php echo get_option('third_service_img'); ?>" height="100" style="max-width:100%" />
                                            </div>
                                        </div>
                                        <div class="form-group text-right">
                                            <label for="third_service_icon" class="col-sm-12 control-label text-white">رمز الخدمة الثالثة  </label>
                                            <div class="col-sm-12">
                                                <input class="bedaya_half_ar w-100" type="text" name="third_service_icon" size="60" value="<?=get_option('third_service_icon'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group text-right text-white mt-2 mb-2">
                                            <a target="_blank" class="text-white" href="https://boxicons.com/">اضغط هنا للحصول على الرمز</a> 
                                            <label for="first_service_icon" class="col-sm-12 control-label text-white">مع مراعاه كتابته كالاتى <div dir="ltr"></div><span><</span>i class='bx bx-buildings'><<span>/i></span></label>
                                        </div>
                                        <div class="form-group text-right">
                                            <label for="third_service_title" class="col-sm-12 control-label text-white">عنوان الخدمة الثالثة  </label>
                                            <div class="col-sm-12">
                                                <input class="bedaya_half_ar w-100" type="text" name="third_service_title" size="60" value="<?=get_option('third_service_title'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group text-right">
                                            <label for="third_service_content" class="col-sm-6 control-label text-white">المحتوى </label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('third_service_content'), 'third_service_content',  array('textarea_rows'=>5,'textarea_name'=> 'third_service_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_service_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="services">
                                        <div class="form-group">
                                            <label for="fourth_service_img" class="col-sm-12 text-left  control-label text-white">صورة الخدمة الرابعة</label>
                                            <div class="col-sm-12 text-left ">
                                                <input class="fourth_service_img_url bedaya_half" type="text" name="fourth_service_img" size="60" value="<?php echo get_option('fourth_service_img'); ?>">
                                            <a href="#" class="fourth_service_img_upload btn btn-info">اختر</a>
                                            <img class="fourth_service_img" src="<?php echo get_option('fourth_service_img'); ?>" height="100" style="max-width:100%" />
                                            </div>
                                        </div>
                                        <div class="form-group text-right">
                                            <label for="fourth_service_icon" class="col-sm-12 control-label text-white">رمز الخدمة الرابعة  </label>
                                            <div class="col-sm-12">
                                                <input class="bedaya_half_ar w-100" type="text" name="fourth_service_icon" size="60" value="<?=get_option('fourth_service_icon'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group text-right text-white mt-2 mb-2">
                                            <a target="_blank" class="text-white" href="https://boxicons.com/">اضغط هنا للحصول على الرمز</a> 
                                            <label for="first_service_icon" class="col-sm-12 control-label text-white">مع مراعاه كتابته كالاتى <div dir="ltr"></div><span><</span>i class='bx bx-buildings'><<span>/i></span></label>
                                        </div>
                                        <div class="form-group text-right">
                                            <label for="fourth_service_title" class="col-sm-12 control-label text-white">عنوان الخدمة الرابعة  </label>
                                            <div class="col-sm-12">
                                                <input class="bedaya_half_ar w-100" type="text" name="fourth_service_title" size="60" value="<?=get_option('fourth_service_title'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group text-right">
                                            <label for="fourth_service_content" class="col-sm-6 control-label text-white">المحتوى </label>
                                            <div class="col-sm-12">
                                                <?php wp_editor( get_option('fourth_service_content'), 'fourth_service_content',  array('textarea_rows'=>5,'textarea_name'=> 'fourth_service_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'fourth_service_content','class'=>'form-control',) );  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
						</div>
						<div class="tab-pane fade" id="v-pills-fourth-rtl-section" role="tabpanel" aria-labelledby="v-pills-fourth-rtl-section-tab">
				        	<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="reserve_hidden" name="reserve_hidden" value="1" <?=get_option('reserve_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="reserve_hidden" class="text-white">إخفاء السكشن </label>
							</div>
                            <div class="services">      
                                <div class="form-group text-right">
                                    <label for="first_reserve_title" class="col-sm-12 control-label text-white">العنوان </label>
                                    <div class="col-sm-12">
                                        <input class="bedaya_half_ar w-100" type="text" name="first_reserve_title" size="60" value="<?=get_option('first_reserve_title'); ?>">
                                </div>
                                </div>
                                <div class="form-group text-right">
                                    <label for="first_reserve_content" class="col-sm-6 control-label text-white">المحتوى </label>
                                    <div class="col-sm-12">
                                        <?php wp_editor( get_option('first_reserve_content'), 'first_reserve_content',  array('textarea_rows'=>5,'textarea_name'=> 'first_reserve_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_reserve_content','class'=>'form-control',) );  ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="first_reserve_img" class="col-sm-12 text-right  control-label text-white">الصورة الخلفية للقسم </label>
                                    <div class="col-sm-12 text-right ">
                                        <input class="first_reserve_img_url bedaya_half_ar" type="text" name="first_reserve_img" size="60" value="<?=get_option('first_reserve_img'); ?>">
                                        <a href="#" class="first_reserve_img_upload btn btn-info">اختر </a>
                                        <img class="first_reserve_img" src="<?=get_option('first_reserve_img'); ?>" height="100" style="max-width:100%" />
                                    </div>
                                </div>
                            </div>
                            <div class="services">      
                                <div class="form-group text-right">
                                    <label for="second_reserve_title" class="col-sm-12 control-label text-white">العنوان </label>
                                    <div class="col-sm-12">
                                        <input class="bedaya_half_ar w-100" type="text" name="second_reserve_title" size="60" value="<?=get_option('second_reserve_title'); ?>">
                                </div>
                                </div>
                                <div class="form-group text-right">
                                    <label for="second_reserve_content" class="col-sm-6 control-label text-white">المحتوى </label>
                                    <div class="col-sm-12">
                                        <?php wp_editor( get_option('second_reserve_content'), 'second_reserve_content',  array('textarea_rows'=>5,'textarea_name'=> 'second_reserve_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_reserve_content','class'=>'form-control',) );  ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="second_reserve_img" class="col-sm-12 text-right  control-label text-white">الصورة الخلفية للقسم </label>
                                    <div class="col-sm-12 text-right ">
                                        <input class="second_reserve_img_url bedaya_half_ar" type="text" name="second_reserve_img" size="60" value="<?=get_option('second_reserve_img'); ?>">
                                        <a href="#" class="second_reserve_img_upload btn btn-info">اختر </a>
                                        <img class="second_reserve_img" src="<?=get_option('second_reserve_img'); ?>" height="100" style="max-width:100%" />
                                    </div>
                                </div>
                            </div>
                            <div class="services">      
                                <div class="form-group text-right">
                                    <label for="third_reserve_title" class="col-sm-12 control-label text-white">العنوان </label>
                                    <div class="col-sm-12">
                                        <input class="bedaya_half_ar w-100" type="text" name="third_reserve_title" size="60" value="<?=get_option('third_reserve_title'); ?>">
                                </div>
                                </div>
                                <div class="form-group text-right">
                                    <label for="third_reserve_content" class="col-sm-6 control-label text-white">المحتوى </label>
                                    <div class="col-sm-12">
                                        <?php wp_editor( get_option('third_reserve_content'), 'third_reserve_content',  array('textarea_rows'=>5,'textarea_name'=> 'third_reserve_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'third_reserve_content','class'=>'form-control',) );  ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="third_reserve_img" class="col-sm-12 text-right  control-label text-white">الصورة الخلفية للقسم </label>
                                    <div class="col-sm-12 text-right ">
                                        <input class="third_reserve_img_url bedaya_half_ar" type="text" name="third_reserve_img" size="60" value="<?=get_option('third_reserve_img'); ?>">
                                        <a href="#" class="third_reserve_img_upload btn btn-info">اختر </a>
                                        <img class="third_reserve_img" src="<?=get_option('third_reserve_img'); ?>" height="100" style="max-width:100%" />
                                    </div>
                                </div>
                            </div>
					    </div>		      

						<div class="tab-pane fade" id="v-pills-fifth-rtl-section" role="tabpanel" aria-labelledby="v-pills-fifth-rtl-section-tab">
							<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="faq_hidden" name="faq_hidden" value="1" <?=get_option('faq_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="faq_hidden" class="text-white">إخفاء السكشن </label>
							</div>
				        	<div class="form-group text-right">
							  	<label for="faq_title" class="col-sm-12 control-label text-white">العنوان </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="faq_title" size="60" value="<?=get_option('faq_title'); ?>">
							  </div>
							</div>
							<div class="form-group text-right">
							  	<label for="faq_link_text" class="col-sm-12 control-label text-white">نص الرابط </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="faq_link_text" size="60" value="<?=get_option('faq_link_text'); ?>">
							  </div>
							</div>
							<div class="form-group text-right">
							  	<label for="faq_link_url" class="col-sm-12 control-label text-white">عنوان الرابط </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="faq_link_url" size="60" value="<?=get_option('faq_link_url'); ?>">
							  </div>
							</div>
                            <div class="form-group text-right">
							  	<label for="faq_number_show" class="col-sm-12 control-label text-white">عدد الاسئلة التى تود اظهارها فى الموقع   </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="number" name="faq_number_show" size="60" value="<?=get_option('faq_number_show'); ?>">
							  </div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-sixth-rtl-section" role="tabpanel" aria-labelledby="v-pills-sixth-rtl-section-tab"> 
							<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="cleints_hidden" name="cleints_hidden" value="1" <?=get_option('cleints_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="cleints_hidden" class="text-white">إخفاء السكشن </label>
							</div>
                            <div class="form-group text-right">
							  	<label for="cleints_small_title" class="col-sm-12 control-label text-white">العنوان الفرعي </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="cleints_small_title" size="60" value="<?=get_option('cleints_small_title'); ?>">
							  </div>
							</div>
							<div class="form-group text-right">
							  	<label for="cleints_title" class="col-sm-12 control-label text-white">العنوان </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="cleints_title" size="60" value="<?=get_option('cleints_title'); ?>">
							  </div>
							</div>
							<div class="form-group text-right">
                                    <label for="cleints_content" class="col-sm-6 control-label text-white">المحتوى </label>
                                    <div class="col-sm-12">
                                        <?php wp_editor( get_option('cleints_content'), 'cleints_content',  array('textarea_rows'=>5,'textarea_name'=> 'cleints_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'cleints_content','class'=>'form-control',) );  ?>
                                    </div>
                                </div>
                            <div class="form-group text-right">
							  	<label for="cleints_number_show" class="col-sm-12 control-label text-white">عدد اراء العملاء التى تود اظهارها فى الموقع  </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="number" name="cleints_number_show" size="60" value="<?=get_option('cleints_number_show'); ?>">
							  </div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-seventh-rtl-section" role="tabpanel" aria-labelledby="v-pills-seventh-rtl-section-tab"> 
							<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="events_hidden" name="events_hidden" value="1" <?=get_option('events_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="events_hidden" class="text-white">إخفاء السكشن </label>
							</div>
                            <div class="form-group text-right">
							  	<label for="events_small_title" class="col-sm-12 control-label text-white">العنوان الفرعي </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="events_small_title" size="60" value="<?=get_option('events_small_title'); ?>">
							  </div>
							</div>
							<div class="form-group text-right">
							  	<label for="events_title" class="col-sm-12 control-label text-white">العنوان </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="events_title" size="60" value="<?=get_option('events_title'); ?>">
							  </div>
							</div>
							<div class="form-group text-right">
                                    <label for="events_content" class="col-sm-6 control-label text-white">المحتوى </label>
                                    <div class="col-sm-12">
                                        <?php wp_editor( get_option('events_content'), 'events_content',  array('textarea_rows'=>5,'textarea_name'=> 'events_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'events_content','class'=>'form-control',) );  ?>
                                    </div>
                                </div>
                            <div class="form-group text-right">
							  	<label for="events_number_show" class="col-sm-12 control-label text-white">عدد الاحداث التى تود اظهارها فى الموقع  </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="number" name="events_number_show" size="60" value="<?=get_option('events_number_show'); ?>">
							  </div>
							</div>
						</div>

                        <div class="tab-pane fade" id="v-pills-eighth-rtl-section" role="tabpanel" aria-labelledby="v-pills-eighth-rtl-section-tab"> 
							<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="team_hidden" name="team_hidden" value="1" <?=get_option('team_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="team_hidden" class="text-white">إخفاء السكشن </label>
							</div>
                            <div class="form-group text-right">
							  	<label for="team_small_title" class="col-sm-12 control-label text-white">العنوان الفرعي </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="team_small_title" size="60" value="<?=get_option('team_small_title'); ?>">
							  </div>
							</div>
							<div class="form-group text-right">
							  	<label for="team_title" class="col-sm-12 control-label text-white">العنوان </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="team_title" size="60" value="<?=get_option('team_title'); ?>">
							  </div>
							</div>
							<div class="form-group text-right">
                                    <label for="team_content" class="col-sm-6 control-label text-white">المحتوى </label>
                                    <div class="col-sm-12">
                                        <?php wp_editor( get_option('team_content'), 'team_content',  array('textarea_rows'=>5,'textarea_name'=> 'team_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'team_content','class'=>'form-control',) );  ?>
                                    </div>
                                </div>
                            <div class="form-group text-right">
							  	<label for="team_number_show" class="col-sm-12 control-label text-white">عدد فريق العمل التى تود اظهارها فى الموقع  </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="number" name="team_number_show" size="60" value="<?=get_option('team_number_show'); ?>">
							  </div>
							</div>
                            <div class="form-group text-right">
							  	<label for="team_link_text" class="col-sm-12 control-label text-white">نص الرابط </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="team_link_text" size="60" value="<?=get_option('team_link_text'); ?>">
							  </div>
							</div>
							<div class="form-group text-right">
							  	<label for="team_link_url" class="col-sm-12 control-label text-white">عنوان الرابط </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="team_link_url" size="60" value="<?=get_option('team_link_url'); ?>">
							  </div>
							</div>
						</div>

						<div class="tab-pane fade" id="v-pills-ninth-rtl-section" role="tabpanel" aria-labelledby="v-pills-ninth-rtl-section-tab"> 
							<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="why_bedaya_hidden" name="why_bedaya_hidden" value="1" <?=get_option('why_bedaya_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="why_bedaya_hidden" class="text-white">إخفاء السكشن </label>
							</div>
							<div class="form-group text-right">
							  	<label for="why_bedaya_title" class="col-sm-12 control-label text-white">العنوان </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="why_bedaya_title" size="60" value="<?=get_option('why_bedaya_title'); ?>">
							  </div>
							</div>
							<div class="form-group text-right">
                                <label for="why_bedaya_content" class="col-sm-6 control-label text-white">المحتوى </label>
                                <div class="col-sm-12">
                                    <?php wp_editor( get_option('why_bedaya_content'), 'why_bedaya_content',  array('textarea_rows'=>5,'textarea_name'=> 'why_bedaya_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'why_bedaya_content','class'=>'form-control',) );  ?>
                                </div>
                            </div>
                           
                            <div class="form-group text-right">
							  	<label for="why_bedaya_link_text" class="col-sm-12 control-label text-white">نص الرابط </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="why_bedaya_link_text" size="60" value="<?=get_option('why_bedaya_link_text'); ?>">
							  </div>
							</div>
							<div class="form-group text-right">
							  	<label for="why_bedaya_link_url" class="col-sm-12 control-label text-white">عنوان الرابط </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="why_bedaya_link_url" size="60" value="<?=get_option('why_bedaya_link_url'); ?>">
							  </div>
							</div>
							<div class="form-group">
                                <label for="why_bedaya_img" class="col-sm-12 text-right  control-label text-white">الصورة الخلفية للقسم </label>
                                <div class="col-sm-12 text-right ">
                                    <input class="why_bedaya_img_url bedaya_half_ar" type="text" name="why_bedaya_img" size="60" value="<?=get_option('why_bedaya_img'); ?>">
                                    <a href="#" class="why_bedaya_img_upload btn btn-info">اختر </a>
                                    <img class="why_bedaya_img" src="<?=get_option('why_bedaya_img'); ?>" height="100" style="max-width:100%" />
                                </div>
                            </div>
						</div>

                        <div class="tab-pane fade" id="v-pills-tenth-rtl-section" role="tabpanel" aria-labelledby="v-pills-tenth-rtl-section-tab"> 
							<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="news_hidden" name="news_hidden" value="1" <?=get_option('news_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="news_hidden" class="text-white">إخفاء السكشن </label>
							</div>
                            <div class="form-group text-right">
							  	<label for="news_small_title" class="col-sm-12 control-label text-white">العنوان الفرعي </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="news_small_title" size="60" value="<?=get_option('news_small_title'); ?>">
							  </div>
							</div>
							<div class="form-group text-right">
							  	<label for="news_title" class="col-sm-12 control-label text-white">العنوان </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="news_title" size="60" value="<?=get_option('news_title'); ?>">
							  </div>
							</div>
							<div class="form-group text-right">
                                <label for="news_content" class="col-sm-6 control-label text-white">المحتوى </label>
                                <div class="col-sm-12">
                                    <?php wp_editor( get_option('news_content'), 'news_content',  array('textarea_rows'=>5,'textarea_name'=> 'news_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'news_content','class'=>'form-control',) );  ?>
                                </div>
                            </div>
                            <div class="form-group text-right">
							  	<label for="news_number_show" class="col-sm-12 control-label text-white">عدد الاخبار التى تود اظهارها فى الموقع  </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="number" name="news_number_show" size="60" value="<?=get_option('news_number_show'); ?>">
							  </div>
							</div>
						</div>
                        <div class="tab-pane fade" id="v-pills-eleventh-rtl-section" role="tabpanel" aria-labelledby="v-pills-eleventh-rtl-section-tab"> 
							<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="contact_hidden" name="contact_hidden" value="1" <?=get_option('contact_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="contact_hidden" class="text-white">إخفاء السكشن </label>
							</div>
                            <div class="form-group text-right">
							  	<label for="contact_small_title" class="col-sm-12 control-label text-white">العنوان الفرعي </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="contact_small_title" size="60" value="<?=get_option('contact_small_title'); ?>">
							  </div>
							</div>
							<div class="form-group text-right">
							  	<label for="contact_title" class="col-sm-12 control-label text-white">العنوان </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="contact_title" size="60" value="<?=get_option('contact_title'); ?>">
							  </div>
							</div>
							<div class="form-group text-right">
                                <label for="contact_content" class="col-sm-6 control-label text-white">المحتوى </label>
                                <div class="col-sm-12">
                                    <?php wp_editor( get_option('contact_content'), 'contact_content',  array('textarea_rows'=>5,'textarea_name'=> 'contact_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'contact_content','class'=>'form-control',) );  ?>
                                </div>
                            </div>
                            <div class="form-group text-right">
							  	<label for="contact_short_code" class="col-sm-12 control-label text-white">Contact Form 7 Short Code ID</label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="text" name="contact_short_code" size="60" value="<?=get_option('contact_short_code'); ?>">
							  </div>
							</div>
						</div>
                        <div class="form-group text-right">
                            <div class="col-sm-12">
                            <input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 bedaya_save_route" name="bedaya_save" value="حفظ الاعدادات">
                            </div>
                        </div>
                    </div>
				</form>
		    </div>
	    </div>
    </div>
</div><!-- /container -->

<?php

}