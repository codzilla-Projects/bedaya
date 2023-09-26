<?php 
function section_page_area_callback(){
	$wp_editor_settings = array( 
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2
	);    
	if( isset( $_POST['bedaya_save'] ) && !empty( $_POST['bedaya_save']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['first_section_first_content','first_section_second_content','first_section_third_content','second_section_first_content','second_section_second_content'])){
				$value = stripcslashes($value);
			}				
			update_option( $key, $value);
		}
		if(!isset($_POST['first_section_hidden'])) {delete_option('first_section_hidden');}
		if(!isset($_POST['second_section_hidden'])) {delete_option('second_section_hidden');}
	}
?>
<div dir="rtl" class="container-fluid text-right padding-right-4">
	<div class="row">

		<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center bedaya-title"><span>إعدادات صفحة أقسام المركز الاسشاري للطب النفسي و علاج الإدمان </span></h1>
			</header>
		</div>
			<br/>
		<div class="d-flex align-items-start p-0 m-0">
			<div class="nav flex-column nav-pills col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<button class="nav-link active" id="v-pills-first-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-first-section" type="button" role="tab" aria-controls="v-pills-first-section" aria-selected="true">السكشن الثانى </button>
				<button class="nav-link" id="v-pills-second-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-second-section" type="button" role="tab" aria-controls="v-pills-second-section" aria-selected="false">السكشن الثالث</button>
			</div>
			<div class="tab-content col-sm-9 col-md-9" id="v-pills-tabContent">
				<form class="form-horizontal bg-dark p-4 mr-3 ml-3" method="post" action="#">
				    <div class="tab-content" id="v-pills-tabContent">
				        <div class="tab-pane fade show active" id="v-pills-first-section" role="tabpanel" aria-labelledby="v-pills-first-section-tab">
			          		<div class="row justify-content-center">	
								<div class="col-md-6">
									<div class="services">
										<div class="form-group">
											<label for="first_section_first_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
											<div class="col-sm-12 text-right ">
												<input type="text" class="form-control" id="first_section_first_title" name="first_section_first_title" value="<?php echo get_option('first_section_first_title'); ?>">
											</div>
										</div>
										<div class="form-group text-left">
						                    <label for="first_section_first_content" class="col-sm-6 control-label text-white">المقال</label>
						                    <div class="col-sm-12">
						                        <?php wp_editor( get_option('first_section_first_content'), 'first_section_first_content',  array('textarea_rows'=>5,'textarea_name'=> 'first_section_first_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_section_first_content','class'=>'form-control',) );  ?>
						                    </div>
						                </div>
										<div class="form-group">
	                                        <label for="first_section_first_img" class="col-sm-12 text-left  control-label text-white">الصورة </label>
	                                        <div class="col-sm-12 text-left ">
	                                            <input class="first_section_first_img_url bedaya_half" type="text" name="first_section_first_img" size="60" value="<?php echo get_option('first_section_first_img'); ?>">
	                                        <a href="#" class="first_section_first_img_upload btn btn-info">اختر</a>
	                                        <img class="first_section_first_img" src="<?php echo get_option('first_section_first_img'); ?>" height="100" style="max-width:100%" />
	                                        </div>
	                                    </div>
	                                </div>
								</div>
								<div class="col-md-6">
									<div class="services">
										<div class="form-group">
											<label for="first_section_second_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
											<div class="col-sm-12 text-right ">
												<input type="text" class="form-control" id="first_section_second_title" name="first_section_second_title" value="<?php echo get_option('first_section_second_title'); ?>">
											</div>
										</div>
										<div class="form-group text-left">
						                    <label for="first_section_second_content" class="col-sm-6 control-label text-white">المقال</label>
						                    <div class="col-sm-12">
						                        <?php wp_editor( get_option('first_section_second_content'), 'first_section_second_content',  array('textarea_rows'=>5,'textarea_name'=> 'first_section_second_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_section_second_content','class'=>'form-control',) );  ?>
						                    </div>
						                </div>
										<div class="form-group">
	                                        <label for="first_section_second_img" class="col-sm-12 text-left  control-label text-white">الصورة </label>
	                                        <div class="col-sm-12 text-left ">
	                                            <input class="first_section_second_img_url bedaya_half" type="text" name="first_section_second_img" size="60" value="<?php echo get_option('first_section_second_img'); ?>">
	                                        <a href="#" class="first_section_second_img_upload btn btn-info">اختر</a>
	                                        <img class="first_section_second_img" src="<?php echo get_option('first_section_second_img'); ?>" height="100" style="max-width:100%" />
	                                        </div>
	                                    </div>
	                                </div>
								</div>
								<div class="col-md-6">
									<div class="services">
										<div class="form-group">
											<label for="first_section_third_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
											<div class="col-sm-12 text-right ">
												<input type="text" class="form-control" id="first_section_third_title" name="first_section_third_title" value="<?php echo get_option('first_section_third_title'); ?>">
											</div>
										</div>
										<div class="form-group text-left">
						                    <label for="first_section_third_content" class="col-sm-6 control-label text-white">المقال</label>
						                    <div class="col-sm-12">
						                        <?php wp_editor( get_option('first_section_third_content'), 'first_section_third_content',  array('textarea_rows'=>5,'textarea_name'=> 'first_section_third_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_section_third_content','class'=>'form-control',) );  ?>
						                    </div>
						                </div>
										<div class="form-group">
	                                        <label for="first_section_third_img" class="col-sm-12 text-left  control-label text-white">الصورة </label>
	                                        <div class="col-sm-12 text-left ">
	                                            <input class="first_section_third_img_url bedaya_half" type="text" name="first_section_third_img" size="60" value="<?php echo get_option('first_section_third_img'); ?>">
	                                        <a href="#" class="first_section_third_img_upload btn btn-info">اختر</a>
	                                        <img class="first_section_third_img" src="<?php echo get_option('first_section_third_img'); ?>" height="100" style="max-width:100%" />
	                                        </div>
	                                    </div>
	                                </div>
								</div>
							</div>
				        </div>

				        <div class="tab-pane fade" id="v-pills-second-section" role="tabpanel" aria-labelledby="v-pills-second-section-tab">
                            <div class="row">	
								<div class="col-md-6">
									<div class="services">
										<div class="form-group">
											<label for="second_section_first_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
											<div class="col-sm-12 text-right ">
												<input type="text" class="form-control" id="second_section_first_title" name="second_section_first_title" value="<?php echo get_option('second_section_first_title'); ?>">
											</div>
										</div>
										<div class="form-group text-left">
						                    <label for="second_section_first_content" class="col-sm-6 control-label text-white">المقال</label>
						                    <div class="col-sm-12">
						                        <?php wp_editor( get_option('second_section_first_content'), 'second_section_first_content',  array('textarea_rows'=>5,'textarea_name'=> 'second_section_first_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_section_first_content','class'=>'form-control',) );  ?>
						                    </div>
						                </div>
										<div class="form-group">
	                                        <label for="second_section_first_img" class="col-sm-12 text-left  control-label text-white">الصورة </label>
	                                        <div class="col-sm-12 text-left ">
	                                            <input class="second_section_first_img_url bedaya_half" type="text" name="second_section_first_img" size="60" value="<?php echo get_option('second_section_first_img'); ?>">
	                                        <a href="#" class="second_section_first_img_upload btn btn-info">اختر</a>
	                                        <img class="second_section_first_img" src="<?php echo get_option('second_section_first_img'); ?>" height="100" style="max-width:100%" />
	                                        </div>
	                                    </div>
	                                </div>
								</div>
								<div class="col-md-6">
									<div class="services">
										<div class="form-group">
											<label for="second_section_second_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
											<div class="col-sm-12 text-right ">
												<input type="text" class="form-control" id="second_section_second_title" name="second_section_second_title" value="<?php echo get_option('second_section_second_title'); ?>">
											</div>
										</div>
										<div class="form-group text-left">
						                    <label for="second_section_second_content" class="col-sm-6 control-label text-white">المقال</label>
						                    <div class="col-sm-12">
						                        <?php wp_editor( get_option('second_section_second_content'), 'second_section_second_content',  array('textarea_rows'=>5,'textarea_name'=> 'second_section_second_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_section_second_content','class'=>'form-control',) );  ?>
						                    </div>
						                </div>
										<div class="form-group">
	                                        <label for="second_section_second_img" class="col-sm-12 text-left  control-label text-white">الصورة </label>
	                                        <div class="col-sm-12 text-left ">
	                                            <input class="second_section_second_img_url bedaya_half" type="text" name="second_section_second_img" size="60" value="<?php echo get_option('second_section_second_img'); ?>">
	                                        <a href="#" class="second_section_second_img_upload btn btn-info">اختر</a>
	                                        <img class="second_section_second_img" src="<?php echo get_option('second_section_second_img'); ?>" height="100" style="max-width:100%" />
	                                        </div>
	                                    </div>
	                                </div>
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