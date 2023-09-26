<?php 

function main_content_area_callback(){

	$wp_editor_settings = array( 

		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue

		'textarea_rows'=> 2

	);    

	if( isset( $_POST['bedaya_save'] ) && !empty( $_POST['bedaya_save']) ){

		foreach ($_POST as $key => $value) {

			if(in_array($key,['footer_content'])){

				$value = stripcslashes($value);

			}				

			update_option( $key, $value);

		}

	}

?>
	<div dir="rtl" class="container-fluid text-left padding-right-4">
	<div class="row">

		<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center bedaya-title"><span>الاعدادات العامة </span></h1>
			</header>
		</div>
			<br/>
		<div class="d-flex align-items-start p-0 m-0">
			<div class="nav flex-column nav-pills col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">الشعارات </button>
				<button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">معلومات التواصل </button>
				<button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">التواصل الاجتماعى </button>
				<button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">تذليل الصفحة </button>
			</div>
			<div class="tab-content col-sm-9 col-md-9" id="v-pills-tabContent">
				<form class="form-horizontal bg-dark p-4 mr-3 ml-3" method="post" action="#">

				    <div class="tab-content" id="v-pills-tabContent">

				        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

							<div class="form-group">
							  	<label for="bedaya_website_logo" class="col-sm-12 text-left  control-label text-white"> الشعار الرئيسي </label>
							  	<div class="col-sm-12 text-left ">
							    	<input class="header_img_url bedaya_half" type="text" name="bedaya_logo_img" size="60" value="<?php echo get_option('bedaya_logo_img'); ?>">
							    	<a href="#" class="header_img_upload btn btn-info">اختر </a>
							    	<img class="header_img" src="<?php echo get_option('bedaya_logo_img'); ?>" height="100" style="max-width:100%" />
							  	</div>
							</div>

							<div class="form-group">
							  	<label for="bedaya_sticky_logo" class="col-sm-12 text-left  control-label text-white"> الشعار المتحرك </label>
							  	<div class="col-sm-12 text-left ">
							    	<input class="sticky_img_url bedaya_half" type="text" name="sticky_logo_img" size="60" value="<?php echo get_option('sticky_logo_img'); ?>">
							    	<a href="#" class="sticky_img_upload btn btn-info">اختر </a>
							    	<img class="sticky_img" src="<?php echo get_option('sticky_logo_img'); ?>" height="100" style="max-width:100%" />
							  	</div>
							</div>

							<div class="form-group">
							  	<label for="bedaya_favicon" class="col-sm-12 text-left  control-label text-white"> رمز الموقع  </label>
							  	<div class="col-sm-12 text-left ">
							    	<input class="favicon_img_url bedaya_half" type="text" name="bedaya_favicon" size="60" value="<?php echo get_option('bedaya_favicon'); ?>">
							    	<a href="#" class="favicon_img_upload btn btn-info">اختر </a>
							    	<img class="favicon_img" src="<?php echo get_option('bedaya_favicon'); ?>" height="100" style="max-width:100%" />
							  	</div>
							</div>
				        </div>

				        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

							<div class="form-group">
								<label for="bedaya_phone" class="col-sm-12 text-left  control-label text-white">رقم  الهاتف </label>
								<div class="col-sm-12 text-left ">
									<input type="text" class="form-control" id="bedaya_phone" name="bedaya_phone" value="<?php echo get_option('bedaya_phone'); ?>">
								</div>
							</div>	

							<div class="form-group">
								<label for="bedaya_email" class="col-sm-12 text-left  control-label text-white">البريد الاتلكترونى </label>
								<div class="col-sm-12 text-left ">
									<input type="email" class="form-control text-left" id="bedaya_email" name="bedaya_email" value="<?php echo get_option('bedaya_email'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="bedaya_location" class="col-sm-12 text-left  control-label text-white">العنوان الاول</label>
								<div class="col-sm-12 text-left ">
									<input type="text" class="form-control text-left" id="bedaya_location" name="bedaya_location" value="<?php echo get_option('bedaya_location'); ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="bedaya_second_location" class="col-sm-12 text-left  control-label text-white">العنوان الثانى </label>
								<div class="col-sm-12 text-left ">
									<input type="text" class="form-control text-left" id="bedaya_second_location" name="bedaya_second_location" value="<?php echo get_option('bedaya_second_location'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="bedaya_map" class="col-sm-12 text-left  control-label text-white">رابط خريطة الاموقع </label>
								<div class="col-sm-12 text-left ">
									<input type="text" class="form-control text-left" id="bedaya_map" name="bedaya_map" value="<?php echo get_option('bedaya_map'); ?>">
								</div>
							</div>

					    </div>	      

						<div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

							<div class="form-group">

								<label for="bedaya_fb" class="col-sm-12 text-left  control-label text-white">فيسبوك</label>

								<div class="col-sm-12 text-left ">

									<input type="text" class="form-control" id="bedaya_fb" name="bedaya_fb" value="<?php echo get_option('bedaya_fb'); ?>">

								</div>

							</div>

							<div class="form-group">

								<label for="bedaya_twitter" class="col-sm-12 text-left  control-label text-white">تويتر </label>

								<div class="col-sm-12 text-left ">

									<input type="text" class="form-control" id="bedaya_twitter" name="bedaya_twitter" value="<?php echo get_option('bedaya_twitter'); ?>">

								</div>

							</div>

							<div class="form-group">

								<label for="bedaya_youtube" class="col-sm-12 text-left  control-label text-white">يوتيوب</label>

								<div class="col-sm-12 text-left ">

									<input type="text" class="form-control" id="bedaya_youtube" name="bedaya_youtube" value="<?php echo get_option('bedaya_youtube'); ?>">

								</div>

							</div>

							<div class="form-group">

								<label for="bedaya_insta" class="col-sm-12 text-left  control-label text-white">انستجرام</label>

								<div class="col-sm-12 text-left ">

									<input type="text" class="form-control" id="bedaya_insta" name="bedaya_insta" value="<?php echo get_option('bedaya_insta'); ?>">

								</div>

							</div>

							<div class="form-group">

								<label for="bedaya_linkedin" class="col-sm-12 text-left  control-label text-white">لينكدان</label>

								<div class="col-sm-12 text-left ">

									<input type="text" class="form-control" id="bedaya_linkedin" name="bedaya_linkedin" value="<?php echo get_option('bedaya_linkedin'); ?>">

								</div>

							</div>

							<div class="form-group">

								<label for="bedaya_whatsapp" class="col-sm-12 text-left  control-label text-white">واتس اب </label>

								<div class="col-sm-12 text-left ">

									<input type="text" class="form-control" id="bedaya_whatsapp" name="bedaya_whatsapp" value="<?php echo get_option('bedaya_whatsapp'); ?>">

								</div>

							</div>

						</div>

						<div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

							<div class="form-group">
							  	<label for="bedaya_footer_logo" class="col-sm-12 text-left  control-label text-white"> شعار التذليل </label>
							  	<div class="col-sm-12 text-left ">
							    	<input class="footer_img_url bedaya_half" type="text" name="bedaya_footer_logo_img" size="60" value="<?php echo get_option('bedaya_footer_logo_img'); ?>">
							    	<a href="#" class="footer_img_upload btn btn-info">اختر </a>
							    	<img class="footer_img" src="<?php echo get_option('bedaya_footer_logo_img'); ?>" height="100" style="max-width:100%" />
							  	</div>
							</div>
						    <div class="form-group text-left">
								<label for="footer_content" class="col-sm-6 control-label text-white">تعريف الشركة فى التذليل </label>
								<div class="col-sm-12">
	                				<?php wp_editor( get_option('footer_content'), 'footer_content',  array('textarea_rows'=>5,'textarea_name'=> 'footer_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'footer_content','class'=>'form-control',) );  ?>
								</div>
							</div>
							
				        </div>

				    </div>

					<div class="form-group">

						<div class="col-sm-12">

						<input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 bedaya_save_route" name="bedaya_save" value="حفظ الاعدادات">

						</div>

					</div>

				</form>
			</div>
		</div>
	</div>

</div><!-- /container -->
<?php

}