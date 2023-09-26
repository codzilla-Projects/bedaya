<?php 
function nafsy_page_area_callback(){
	$wp_editor_settings = array( 
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2
	);    
	if( isset( $_POST['bedaya_save'] ) && !empty( $_POST['bedaya_save']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['first_nafsy_content'])){
				$value = stripcslashes($value);
			}				
			update_option( $key, $value);
		}
		if(!isset($_POST['first_nafsy_hidden'])) {delete_option('first_nafsy_hidden');}
		if(!isset($_POST['second_nafsy_hidden'])) {delete_option('second_nafsy_hidden');}
		if(!isset($_POST['third_nafsy_hidden'])) {delete_option('third_nafsy_hidden');}
		if(!isset($_POST['fourth_nafsy_hidden'])) {delete_option('fourth_nafsy_hidden');}
		if(!isset($_POST['fivth_nafsy_hidden'])) {delete_option('fivth_nafsy_hidden');}

	}
?>
<div dir="rtl" class="container-fluid text-right padding-right-4">
	<div class="row">

		<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center bedaya-title"><span>إعدادات صفحة  علاج المرضى النفسي </span></h1>
			</header>
		</div>
			<br/>
		<div class="d-flex align-items-start p-0 m-0">
			<div class="nav flex-column nav-pills col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<button class="nav-link active" id="v-pills-first-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-first-section" type="button" role="tab" aria-controls="v-pills-first-section" aria-selected="true">السكشن الاول </button>
				<button class="nav-link" id="v-pills-second-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-second-section" type="button" role="tab" aria-controls="v-pills-second-section" aria-selected="false">السكشن الثانى </button>
				<button class="nav-link" id="v-pills-third-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-third-section" type="button" role="tab" aria-controls="v-pills-third-section" aria-selected="false">السكشن الثالث</button>
				<button class="nav-link" id="v-pills-fourth-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourth-section" type="button" role="tab" aria-controls="v-pills-fourth-section" aria-selected="false">السكشن الرابع</button>
				<button class="nav-link" id="v-pills-fivth-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fivth-section" type="button" role="tab" aria-controls="v-pills-fivth-section" aria-selected="false">السكشن الخامس</button>
			</div>
			<div class="tab-content col-sm-9 col-md-9" id="v-pills-tabContent">
				<form class="form-horizontal bg-dark p-4 mr-3 ml-3" method="post" action="#">
				    <div class="tab-content" id="v-pills-tabContent">
				        <div class="tab-pane fade show active" id="v-pills-first-section" role="tabpanel" aria-labelledby="v-pills-first-section-tab">
				        	<div class="form-group text-right">                  
			                    <div class="inline-block">
			                        <input type="checkbox" id="first_nafsy_hidden" name="first_nafsy_hidden" value="1" <?php echo get_option('first_nafsy_hidden') == '1' ? 'checked' : ''; ?>>
			                    </div>
			                    <label for="first_nafsy_hidden" class="text-white">إخفاء السكشن</label>
			                </div>

			                <div class="form-group text-left">
			                    <label for="first_nafsy_content" class="col-sm-6 control-label text-white">المقال</label>
			                    <div class="col-sm-12">
			                        <?php wp_editor( get_option('first_nafsy_content'), 'first_nafsy_content',  array('textarea_rows'=>5,'textarea_name'=> 'first_nafsy_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_nafsy_content','class'=>'form-control',) );  ?>
			                    </div>
			                </div>

			                <div class="form-group">
								<label for="first_nafsy_number_show" class="col-sm-12 text-right  control-label text-white">عدد الصور التى تود اظهارها فى الصفحة</label>
								<div class="col-sm-12 text-right ">
									<input type="number" class="form-control" id="first_nafsy_number_show" name="first_nafsy_number_show" value="<?php echo get_option('first_nafsy_number_show'); ?>">
								</div>
							</div>
 
				        </div>

				        <div class="tab-pane fade" id="v-pills-second-section" role="tabpanel" aria-labelledby="v-pills-second-section-tab">
				        	<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="second_nafsy_hidden" name="second_nafsy_hidden" value="1" <?=get_option('second_nafsy_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="second_nafsy_hidden" class="text-white">إخفاء السكشن </label>
							</div>

                            <div class="form-group text-right">
							  	<label for="second_nafsy_number_show" class="col-sm-12 control-label text-white">الصور التى تود اظهارها فى الصفحة </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="number" name="second_nafsy_number_show" size="60" value="<?=get_option('second_nafsy_number_show'); ?>">
							  </div>
							</div>
						</div>

						<div class="tab-pane fade" id="v-pills-third-section" role="tabpanel" aria-labelledby="v-pills-third-section-tab">
				        	<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="third_nafsy_hidden" name="third_nafsy_hidden" value="1" <?=get_option('third_nafsy_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="third_nafsy_hidden" class="text-white">إخفاء السكشن </label>
							</div>

							<div class="form-group">
								<label for="third_nafsy_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسيى</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="third_nafsy_title" name="third_nafsy_title" value="<?php echo get_option('third_nafsy_title'); ?>">
								</div>
							</div>
							<div class="row">	
								<div class="col-md-6">
									<div class="services">
										<div class="form-group">
	                                        <label for="third_nafsy_first_img" class="col-sm-12 text-left  control-label text-white">صورة الاضطرابات الشخصية </label>
	                                        <div class="col-sm-12 text-left ">
	                                            <input class="third_nafsy_first_img_url bedaya_half" type="text" name="third_nafsy_first_img" size="60" value="<?php echo get_option('third_nafsy_first_img'); ?>">
	                                        <a href="#" class="third_nafsy_first_img_upload btn btn-info">اختر</a>
	                                        <img class="third_nafsy_first_img" src="<?php echo get_option('third_nafsy_first_img'); ?>" height="100" style="max-width:100%" />
	                                        </div>
	                                    </div>
	                                </div>
								</div>
								<div class="col-md-6">
									<div class="services">
										<div class="form-group">
	                                        <label for="third_nafsy_second_img" class="col-sm-12 text-left  control-label text-white">صورة الاضطرابات النفسية </label>
	                                        <div class="col-sm-12 text-left ">
	                                            <input class="third_nafsy_second_img_url bedaya_half" type="text" name="third_nafsy_second_img" size="60" value="<?php echo get_option('third_nafsy_second_img'); ?>">
	                                        <a href="#" class="third_nafsy_second_img_upload btn btn-info">اختر</a>
	                                        <img class="third_nafsy_second_img" src="<?php echo get_option('third_nafsy_second_img'); ?>" height="100" style="max-width:100%" />
	                                        </div>
	                                    </div>
	                                </div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="v-pills-fourth-section" role="tabpanel" aria-labelledby="v-pills-fourth-section-tab">
				        	<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="fourth_nafsy_hidden" name="fourth_nafsy_hidden" value="1" <?=get_option('fourth_nafsy_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="fourth_nafsy_hidden" class="text-white">إخفاء السكشن </label>
							</div>

                            <div class="form-group text-right">
							  	<label for="fourth_nafsy_number_show" class="col-sm-12 control-label text-white">الصور التى تود اظهارها فى الصفحة </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="number" name="fourth_nafsy_number_show" size="60" value="<?=get_option('fourth_nafsy_number_show'); ?>">
							  </div>
							</div>
						</div>

						<div class="tab-pane fade" id="v-pills-fivth-section" role="tabpanel" aria-labelledby="v-pills-fivth-section-tab">
				        	<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="fivth_nafsy_hidden" name="fivth_nafsy_hidden" value="1" <?=get_option('fivth_nafsy_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="fivth_nafsy_hidden" class="text-white">إخفاء السكشن </label>
							</div>

                            <div class="form-group text-right">
							  	<label for="fivth_nafsy_number_show" class="col-sm-12 control-label text-white">الصور التى تود اظهارها فى الصفحة </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="number" name="fivth_nafsy_number_show" size="60" value="<?=get_option('fivth_nafsy_number_show'); ?>">
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