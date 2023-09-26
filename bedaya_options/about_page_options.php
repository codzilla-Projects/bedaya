<?php 
function about_page_area_callback(){
	$wp_editor_settings = array( 
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2
	);    
	if( isset( $_POST['bedaya_save'] ) && !empty( $_POST['bedaya_save']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['about_first_content','about_second_content','about_third_content','about_fourth_content','about_fivth_content','about_sixth_content','about_seventh_content','about_eighth_content','about_ninth_content'])){
				$value = stripcslashes($value);
			}				
			update_option( $key, $value);
		}
	}
?>
<div dir="rtl" class="container-fluid text-right padding-right-4">
	<div class="row">

		<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center bedaya-title"><span>إعدادات صفحة من نحن </span></h1>
			</header>
		</div>
			<br/>
		<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
			<form class="form-horizontal p-4" method="post" action="#">
          		<div class="row justify-content-center">	
					<div class="col-md-4">
						<div class="services">
							<div class="form-group">
								<label for="about_first_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="about_first_title" name="about_first_title" value="<?php echo get_option('about_first_title'); ?>">
								</div>
							</div>
							<div class="form-group text-left">
			                    <label for="about_first_content" class="col-sm-6 control-label text-white">المقال</label>
			                    <div class="col-sm-12">
			                        <?php wp_editor( get_option('about_first_content'), 'about_first_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_first_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_first_content','class'=>'form-control',) );  ?>
			                    </div>
			                </div>
							<div class="form-group">
                                <label for="about_first_img" class="col-sm-12 text-left  control-label text-white">الصورة </label>
                                <div class="col-sm-12 text-left ">
                                    <input class="about_first_img_url bedaya_half" type="text" name="about_first_img" size="60" value="<?php echo get_option('about_first_img'); ?>">
                                <a href="#" class="about_first_img_upload btn btn-info">اختر</a>
                                <img class="about_first_img" src="<?php echo get_option('about_first_img'); ?>" height="100" style="max-width:100%" />
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-md-4">
						<div class="services">
							<div class="form-group">
								<label for="about_second_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="about_second_title" name="about_second_title" value="<?php echo get_option('about_second_title'); ?>">
								</div>
							</div>
							<div class="form-group text-left">
			                    <label for="about_second_content" class="col-sm-6 control-label text-white">المقال</label>
			                    <div class="col-sm-12">
			                        <?php wp_editor( get_option('about_second_content'), 'about_second_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_second_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_second_content','class'=>'form-control',) );  ?>
			                    </div>
			                </div>
							<div class="form-group">
                                <label for="about_second_img" class="col-sm-12 text-left  control-label text-white">الصورة </label>
                                <div class="col-sm-12 text-left ">
                                    <input class="about_second_img_url bedaya_half" type="text" name="about_second_img" size="60" value="<?php echo get_option('about_second_img'); ?>">
                                <a href="#" class="about_second_img_upload btn btn-info">اختر</a>
                                <img class="about_second_img" src="<?php echo get_option('about_second_img'); ?>" height="100" style="max-width:100%" />
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-md-4">
						<div class="services">
							<div class="form-group">
								<label for="about_third_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="about_third_title" name="about_third_title" value="<?php echo get_option('about_third_title'); ?>">
								</div>
							</div>
							<div class="form-group text-left">
			                    <label for="about_third_content" class="col-sm-6 control-label text-white">المقال</label>
			                    <div class="col-sm-12">
			                        <?php wp_editor( get_option('about_third_content'), 'about_third_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_third_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_third_content','class'=>'form-control',) );  ?>
			                    </div>
			                </div>
							<div class="form-group">
                                <label for="about_third_img" class="col-sm-12 text-left  control-label text-white">الصورة </label>
                                <div class="col-sm-12 text-left ">
                                    <input class="about_third_img_url bedaya_half" type="text" name="about_third_img" size="60" value="<?php echo get_option('about_third_img'); ?>">
                                <a href="#" class="about_third_img_upload btn btn-info">اختر</a>
                                <img class="about_third_img" src="<?php echo get_option('about_third_img'); ?>" height="100" style="max-width:100%" />
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-md-4">
						<div class="services">
							<div class="form-group">
								<label for="about_fourth_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="about_fourth_title" name="about_fourth_title" value="<?php echo get_option('about_fourth_title'); ?>">
								</div>
							</div>
							<div class="form-group text-left">
			                    <label for="about_fourth_content" class="col-sm-6 control-label text-white">المقال</label>
			                    <div class="col-sm-12">
			                        <?php wp_editor( get_option('about_fourth_content'), 'about_fourth_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_fourth_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_fourth_content','class'=>'form-control',) );  ?>
			                    </div>
			                </div>
							<div class="form-group">
                                <label for="about_fourth_img" class="col-sm-12 text-left  control-label text-white">الصورة </label>
                                <div class="col-sm-12 text-left ">
                                    <input class="about_fourth_img_url bedaya_half" type="text" name="about_fourth_img" size="60" value="<?php echo get_option('about_fourth_img'); ?>">
                                <a href="#" class="about_fourth_img_upload btn btn-info">اختر</a>
                                <img class="about_fourth_img" src="<?php echo get_option('about_fourth_img'); ?>" height="100" style="max-width:100%" />
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-md-4">
						<div class="services">
							<div class="form-group">
								<label for="about_fivth_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="about_fivth_title" name="about_fivth_title" value="<?php echo get_option('about_fivth_title'); ?>">
								</div>
							</div>
							<div class="form-group text-left">
			                    <label for="about_fivth_content" class="col-sm-6 control-label text-white">المقال</label>
			                    <div class="col-sm-12">
			                        <?php wp_editor( get_option('about_fivth_content'), 'about_fivth_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_fivth_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_fivth_content','class'=>'form-control',) );  ?>
			                    </div>
			                </div>
							<div class="form-group">
                                <label for="about_fivth_img" class="col-sm-12 text-left  control-label text-white">الصورة </label>
                                <div class="col-sm-12 text-left ">
                                    <input class="about_fivth_img_url bedaya_half" type="text" name="about_fivth_img" size="60" value="<?php echo get_option('about_fivth_img'); ?>">
                                <a href="#" class="about_fivth_img_upload btn btn-info">اختر</a>
                                <img class="about_fivth_img" src="<?php echo get_option('about_fivth_img'); ?>" height="100" style="max-width:100%" />
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-md-4">
						<div class="services">
							<div class="form-group">
								<label for="about_sixth_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="about_sixth_title" name="about_sixth_title" value="<?php echo get_option('about_sixth_title'); ?>">
								</div>
							</div>
							<div class="form-group text-left">
			                    <label for="about_sixth_content" class="col-sm-6 control-label text-white">المقال</label>
			                    <div class="col-sm-12">
			                        <?php wp_editor( get_option('about_sixth_content'), 'about_sixth_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_sixth_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_sixth_content','class'=>'form-control',) );  ?>
			                    </div>
			                </div>
							<div class="form-group">
                                <label for="about_sixth_img" class="col-sm-12 text-left  control-label text-white">الصورة </label>
                                <div class="col-sm-12 text-left ">
                                    <input class="about_sixth_img_url bedaya_half" type="text" name="about_sixth_img" size="60" value="<?php echo get_option('about_sixth_img'); ?>">
                                <a href="#" class="about_sixth_img_upload btn btn-info">اختر</a>
                                <img class="about_sixth_img" src="<?php echo get_option('about_sixth_img'); ?>" height="100" style="max-width:100%" />
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-md-4">
						<div class="services">
							<div class="form-group">
								<label for="about_seventh_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="about_seventh_title" name="about_seventh_title" value="<?php echo get_option('about_seventh_title'); ?>">
								</div>
							</div>
							<div class="form-group text-left">
			                    <label for="about_seventh_content" class="col-sm-6 control-label text-white">المقال</label>
			                    <div class="col-sm-12">
			                        <?php wp_editor( get_option('about_seventh_content'), 'about_seventh_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_seventh_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_seventh_content','class'=>'form-control',) );  ?>
			                    </div>
			                </div>
							<div class="form-group">
                                <label for="about_seventh_img" class="col-sm-12 text-left  control-label text-white">الصورة </label>
                                <div class="col-sm-12 text-left ">
                                    <input class="about_seventh_img_url bedaya_half" type="text" name="about_seventh_img" size="60" value="<?php echo get_option('about_seventh_img'); ?>">
                                <a href="#" class="about_seventh_img_upload btn btn-info">اختر</a>
                                <img class="about_seventh_img" src="<?php echo get_option('about_seventh_img'); ?>" height="100" style="max-width:100%" />
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-md-4">
						<div class="services">
							<div class="form-group">
								<label for="about_eighth_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="about_eighth_title" name="about_eighth_title" value="<?php echo get_option('about_eighth_title'); ?>">
								</div>
							</div>
							<div class="form-group text-left">
			                    <label for="about_eighth_content" class="col-sm-6 control-label text-white">المقال</label>
			                    <div class="col-sm-12">
			                        <?php wp_editor( get_option('about_eighth_content'), 'about_eighth_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_eighth_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_eighth_content','class'=>'form-control',) );  ?>
			                    </div>
			                </div>
							<div class="form-group">
                                <label for="about_eighth_img" class="col-sm-12 text-left  control-label text-white">الصورة </label>
                                <div class="col-sm-12 text-left ">
                                    <input class="about_eighth_img_url bedaya_half" type="text" name="about_eighth_img" size="60" value="<?php echo get_option('about_eighth_img'); ?>">
                                <a href="#" class="about_eighth_img_upload btn btn-info">اختر</a>
                                <img class="about_eighth_img" src="<?php echo get_option('about_eighth_img'); ?>" height="100" style="max-width:100%" />
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-md-4">
						<div class="services">
							<div class="form-group">
								<label for="about_ninth_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="about_ninth_title" name="about_ninth_title" value="<?php echo get_option('about_ninth_title'); ?>">
								</div>
							</div>
							<div class="form-group text-left">
			                    <label for="about_ninth_content" class="col-sm-6 control-label text-white">المقال</label>
			                    <div class="col-sm-12">
			                        <?php wp_editor( get_option('about_ninth_content'), 'about_ninth_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_ninth_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_ninth_content','class'=>'form-control',) );  ?>
			                    </div>
			                </div>
							<div class="form-group">
                                <label for="about_ninth_img" class="col-sm-12 text-left  control-label text-white">الصورة </label>
                                <div class="col-sm-12 text-left ">
                                    <input class="about_ninth_img_url bedaya_half" type="text" name="about_ninth_img" size="60" value="<?php echo get_option('about_ninth_img'); ?>">
                                <a href="#" class="about_ninth_img_upload btn btn-info">اختر</a>
                                <img class="about_ninth_img" src="<?php echo get_option('about_ninth_img'); ?>" height="100" style="max-width:100%" />
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
			</form>
	    </div>
    </div>
</div><!-- /container -->

<?php

}