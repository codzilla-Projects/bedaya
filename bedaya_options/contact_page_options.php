<?php 
function contact_page_area_callback(){
    $wp_editor_settings = array( 
        'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
        'textarea_rows'=> 2
    );    
    if( isset( $_POST['bedaya_save'] ) && !empty( $_POST['bedaya_save']) ){
        foreach ($_POST as $key => $value) {
            if(in_array($key,['contact_page_content'])){
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
                <h1 class="text-center bedaya-title"><span>إعدادات صفحة  تواصل معنا </span></h1>
            </header>
        </div>
        <br/>
        <div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
            <form class="form-horizontal p-4" method="post" action="#">
                <div class="row">
                    <div class="col-md-6">
                        <div class="services">
                            <div class="form-group">
                                <h2 class="text-white">بيانات الفرع الاول </h2>
                            </div>
                            <div class="form-group">
                                <label for="contact_first_branch" class="col-sm-12 text-right  control-label text-white">اسم الفرع الاول </label>
                                <div class="col-sm-12 text-right ">
                                    <input type="text" class="form-control" id="contact_first_branch" name="contact_first_branch" value="<?php echo get_option('contact_first_branch'); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="contact_first_branch_name" class="col-sm-12 text-right  control-label text-white">اسم المقر </label>
                                <div class="col-sm-12 text-right ">
                                    <input type="text" class="form-control" id="contact_first_branch_name" name="contact_first_branch_name" value="<?php echo get_option('contact_first_branch_name'); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="contact_first_branch_address" class="col-sm-12 text-right  control-label text-white">عنوان المقر </label>
                                <div class="col-sm-12 text-right ">
                                    <input type="text" class="form-control" id="contact_first_branch_address" name="contact_first_branch_address" value="<?php echo get_option('contact_first_branch_address'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact_first_branch_landline" class="col-sm-12 text-right  control-label text-white">رقم الهاتف الارضي </label>
                                <div class="col-sm-12 text-right ">
                                    <input type="text" class="form-control mobile-dir" id="contact_first_branch_landline" name="contact_first_branch_landline" value="<?php echo get_option('contact_first_branch_landline'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact_first_branch_mobile" class="col-sm-12 text-right  control-label text-white">رقم الهاتف </label>
                                <div class="col-sm-12 text-right ">
                                    <input type="text" class="form-control mobile-dir" id="contact_first_branch_mobile" name="contact_first_branch_mobile" value="<?php echo get_option('contact_first_branch_mobile'); ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="contact_first_branch_other" class="col-sm-12 text-right  control-label text-white">رقم هاتف اخر </label>
                                <div class="col-sm-12 text-right ">
                                    <input type="text" class="form-control mobile-dir" id="contact_first_branch_other" name="contact_first_branch_other" value="<?php echo get_option('contact_first_branch_other'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="services">
                            <div class="form-group">
                                <h2 class="text-white">بيانات الفرع الثانى </h2>
                            </div>
                            <div class="form-group">
                                <label for="contact_second_branch" class="col-sm-12 text-right  control-label text-white">اسم الفرع الاول </label>
                                <div class="col-sm-12 text-right ">
                                    <input type="text" class="form-control" id="contact_second_branch" name="contact_second_branch" value="<?php echo get_option('contact_second_branch'); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="contact_second_branch_name" class="col-sm-12 text-right  control-label text-white">اسم المقر </label>
                                <div class="col-sm-12 text-right ">
                                    <input type="text" class="form-control" id="contact_second_branch_name" name="contact_second_branch_name" value="<?php echo get_option('contact_second_branch_name'); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="contact_second_branch_address" class="col-sm-12 text-right  control-label text-white">عنوان المقر </label>
                                <div class="col-sm-12 text-right ">
                                    <input type="text" class="form-control" id="contact_second_branch_address" name="contact_second_branch_address" value="<?php echo get_option('contact_second_branch_address'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact_second_branch_landline" class="col-sm-12 text-right  control-label text-white">رقم الهاتف الارضي </label>
                                <div class="col-sm-12 text-right ">
                                    <input type="text" class="form-control mobile-dir" id="contact_second_branch_landline" name="contact_second_branch_landline" value="<?php echo get_option('contact_second_branch_landline'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact_second_branch_mobile" class="col-sm-12 text-right  control-label text-white">رقم الهاتف </label>
                                <div class="col-sm-12 text-right ">
                                    <input type="text" class="form-control mobile-dir" id="contact_second_branch_mobile" name="contact_second_branch_mobile" value="<?php echo get_option('contact_second_branch_mobile'); ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="contact_second_branch_other" class="col-sm-12 text-right  control-label text-white">رقم هاتف اخر </label>
                                <div class="col-sm-12 text-right ">
                                    <input type="text" class="form-control mobile-dir" id="contact_second_branch_other" name="contact_second_branch_other" value="<?php echo get_option('contact_second_branch_other'); ?>">
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