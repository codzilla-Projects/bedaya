<?php 
function trainning_page_area_callback(){
	$wp_editor_settings = array( 
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2
	);    
	if( isset( $_POST['bedaya_save'] ) && !empty( $_POST['bedaya_save']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['first_block_trainning_content','second_block_trainning_content','first_block_trainning_icon','second_block_trainning_icon'])){
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
				<h1 class="text-center bedaya-title"><span>إعدادات صفحة التدريب </span></h1>
			</header>
		</div>
			<br/>
		<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
			<form class="form-horizontal p-4" method="post" action="#">
	        	<div class="form-group text-right">                  
	                <div class="inline-block">
	                    <input type="checkbox" id="first_trainning_hidden" name="first_trainning_hidden" value="1" <?php echo get_option('first_trainning_hidden') == '1' ? 'checked' : ''; ?>>
	                </div>
	                <label for="first_trainning_hidden" class="text-white">إخفاء السكشن</label>
	            </div>
	            <div class="form-group">
					<label for="first_trainning_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسيى</label>
					<div class="col-sm-12 text-right ">
						<input type="text" class="form-control" id="first_trainning_title" name="first_trainning_title" value="<?php echo get_option('first_trainning_title'); ?>">
					</div>
				</div>
	            <div class="row">
	            	<div class="col-md-6">
	            		<div class="services">
	            			<div class="form-group">
								<label for="first_block_trainning_icon" class="col-sm-12 text-right  control-label text-white">الرمز</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="first_block_trainning_icon" name="first_block_trainning_icon" value="<?php echo get_option('first_block_trainning_icon'); ?>">
								</div>
							</div>
							<div class="form-group text-right text-white mt-2 mb-2">
                                <a target="_blank" class="text-white" href="https://boxicons.com/">اضغط هنا للحصول على الرمز</a> 
                                <label for="first_service_icon" class="col-sm-12 control-label text-white">مع مراعاه كتابته كالاتى <div dir="ltr"></div><span><</span>i class='bx bx-buildings'><<span>/i></span></label>
                            </div>
	            			<div class="form-group">
								<label for="first_block_trainning_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسيى</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="first_block_trainning_title" name="first_block_trainning_title" value="<?php echo get_option('first_block_trainning_title'); ?>">
								</div>
							</div>
			                <div class="form-group text-left">
			                    <label for="first_trainning_content" class="col-sm-6 control-label text-white">المقال</label>
			                    <div class="col-sm-12">
			                        <?php wp_editor( get_option('first_block_trainning_content'), 'first_block_trainning_content',  array('textarea_rows'=>5,'textarea_name'=> 'first_block_trainning_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_block_trainning_content','class'=>'form-control',) );  ?>
			                    </div>
			                </div>
	            		</div>
	            	</div>

	            	<div class="col-md-6">
	            		<div class="services">
	            			<div class="form-group">
								<label for="second_block_trainning_icon" class="col-sm-12 text-right  control-label text-white">الرمز</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="second_block_trainning_icon" name="second_block_trainning_icon" value="<?php echo get_option('second_block_trainning_icon'); ?>">
								</div>
							</div>
							<div class="form-group text-right text-white mt-2 mb-2">
                                <a target="_blank" class="text-white" href="https://boxicons.com/">اضغط هنا للحصول على الرمز</a> 
                                <label for="first_service_icon" class="col-sm-12 control-label text-white">مع مراعاه كتابته كالاتى <div dir="ltr"></div><span><</span>i class='bx bx-buildings'><<span>/i></span></label>
                            </div>
	            			<div class="form-group">
								<label for="second_block_trainning_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسيى</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="second_block_trainning_title" name="second_block_trainning_title" value="<?php echo get_option('second_block_trainning_title'); ?>">
								</div>
							</div>
			                <div class="form-group text-left">
			                    <label for="second_block_trainning_content" class="col-sm-6 control-label text-white">المقال</label>
			                    <div class="col-sm-12">
			                        <?php wp_editor( get_option('second_block_trainning_content'), 'second_block_trainning_content',  array('textarea_rows'=>5,'textarea_name'=> 'second_block_trainning_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'second_block_trainning_content','class'=>'form-control',) );  ?>
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
</div><!-- /container -->

<?php

}