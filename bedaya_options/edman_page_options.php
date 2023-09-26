<?php 
function edman_page_area_callback(){
	$wp_editor_settings = array( 
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2
	);    
	if( isset( $_POST['bedaya_save'] ) && !empty( $_POST['bedaya_save']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['first_edman_content'])){
				$value = stripcslashes($value);
			}				
			update_option( $key, $value);
		}
		if(!isset($_POST['first_edman_hidden'])) {delete_option('first_edman_hidden');}
		if(!isset($_POST['second_edman_hidden'])) {delete_option('second_edman_hidden');}
		if(!isset($_POST['third_edman_hidden'])) {delete_option('third_edman_hidden');}
		if(!isset($_POST['fourth_edman_hidden'])) {delete_option('fourth_edman_hidden');}
	}
?>
<div dir="rtl" class="container-fluid text-right padding-right-4">
	<div class="row">

		<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center bedaya-title"><span>إعدادات صفحة علاج الادمان</span></h1>
			</header>
		</div>
			<br/>
		<div class="d-flex align-items-start p-0 m-0">
			<div class="nav flex-column nav-pills col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<button class="nav-link active" id="v-pills-first-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-first-section" type="button" role="tab" aria-controls="v-pills-first-section" aria-selected="true">السكشن الاول </button>
				<button class="nav-link" id="v-pills-second-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-second-section" type="button" role="tab" aria-controls="v-pills-second-section" aria-selected="false">السكشن الثانى </button>
				<button class="nav-link" id="v-pills-third-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-third-section" type="button" role="tab" aria-controls="v-pills-third-section" aria-selected="false">السكشن الثالث</button>
				<button class="nav-link" id="v-pills-fourth-section-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourth-section" type="button" role="tab" aria-controls="v-pills-fourth-section" aria-selected="false">السكشن الرابع</button>
			</div>
			<div class="tab-content col-sm-9 col-md-9" id="v-pills-tabContent">
				<form class="form-horizontal bg-dark p-4 mr-3 ml-3" method="post" action="#">
				    <div class="tab-content" id="v-pills-tabContent">
				        <div class="tab-pane fade show active" id="v-pills-first-section" role="tabpanel" aria-labelledby="v-pills-first-section-tab">
				        	<div class="form-group text-right">                  
			                    <div class="inline-block">
			                        <input type="checkbox" id="first_edman_hidden" name="first_edman_hidden" value="1" <?php echo get_option('first_edman_hidden') == '1' ? 'checked' : ''; ?>>
			                    </div>
			                    <label for="first_edman_hidden" class="text-white">إخفاء السكشن</label>
			                </div>
			                <div class="form-group">
								<label for="first_edman_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسيى</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="first_edman_title" name="first_edman_title" value="<?php echo get_option('first_edman_title'); ?>">
								</div>
							</div>
			                <div class="form-group text-left">
			                    <label for="first_edman_content" class="col-sm-6 control-label text-white">المقال</label>
			                    <div class="col-sm-12">
			                        <?php wp_editor( get_option('first_edman_content'), 'first_edman_content',  array('textarea_rows'=>5,'textarea_name'=> 'first_edman_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_edman_content','class'=>'form-control',) );  ?>
			                    </div>
			                </div>
				        </div>

				        <div class="tab-pane fade" id="v-pills-second-section" role="tabpanel" aria-labelledby="v-pills-second-section-tab">
				        	<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="second_edman_hidden" name="second_edman_hidden" value="1" <?=get_option('second_edman_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="second_edman_hidden" class="text-white">إخفاء السكشن </label>
							</div>

                            <div class="form-group">
								<label for="second_edman_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسيى</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="second_edman_title" name="second_edman_title" value="<?php echo get_option('second_edman_title'); ?>">
								</div>
							</div>
							<div class="form-group text-right">
							  	<label for="second_edman_number_show" class="col-sm-12 control-label text-white">عدد الاسئلة التى  تود اظهارها فى الصفحة</label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="number" name="second_edman_number_show" size="60" value="<?=get_option('second_edman_number_show'); ?>">
							  </div>
							</div>
						</div>

						<div class="tab-pane fade" id="v-pills-third-section" role="tabpanel" aria-labelledby="v-pills-third-section-tab">
				        	<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="third_edman_hidden" name="third_edman_hidden" value="1" <?=get_option('third_edman_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="third_edman_hidden" class="text-white">إخفاء السكشن </label>
							</div>

							<div class="form-group">
								<label for="third_edman_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسيى</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="third_edman_title" name="third_edman_title" value="<?php echo get_option('third_edman_title'); ?>">
								</div>
							</div>
							<div class="form-group text-right">
							  	<label for="third_edman_number_show" class="col-sm-12 control-label text-white">عدد الاسئلة التى  تود اظهارها فى الصفحة</label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="number" name="third_edman_number_show" size="60" value="<?=get_option('third_edman_number_show'); ?>">
							  </div>
							</div>
						</div>

						<div class="tab-pane fade" id="v-pills-fourth-section" role="tabpanel" aria-labelledby="v-pills-fourth-section-tab">
				        	<div class="form-group text-right">
							    <div class="inline-block">
							  	    <input type="checkbox" id="fourth_edman_hidden" name="fourth_edman_hidden" value="1" <?=get_option('fourth_edman_hidden') == '1' ? 'checked' : ''; ?>>
							    </div>
							    <label for="fourth_edman_hidden" class="text-white">إخفاء السكشن </label>
							</div>

							<div class="form-group">
								<label for="fourth_edman_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسيى</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="fourth_edman_title" name="fourth_edman_title" value="<?php echo get_option('fourth_edman_title'); ?>">
								</div>
							</div>
			                <div class="form-group text-left">
			                    <label for="fourth_edman_content" class="col-sm-6 control-label text-white">المقال</label>
			                    <div class="col-sm-12">
			                        <?php wp_editor( get_option('fourth_edman_content'), 'fourth_edman_content',  array('textarea_rows'=>5,'textarea_name'=> 'fourth_edman_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'fourth_edman_content','class'=>'form-control',) );  ?>
			                    </div>
			                </div>

			                <div class="form-group text-right">
							  	<label for="fourth_edman_number_show" class="col-sm-12 control-label text-white">الصور التى تود اظهارها فى الصفحة </label>
							  	<div class="col-sm-12">
							    	<input class="bedaya_half_ar w-100" type="number" name="fourth_edman_number_show" size="60" value="<?=get_option('fourth_edman_number_show'); ?>">
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