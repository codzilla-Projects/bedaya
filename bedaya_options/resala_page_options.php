<?php 
function resala_page_area_callback(){
    $wp_editor_settings = array( 
        'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
        'textarea_rows'=> 2
    );    
    if( isset( $_POST['bedaya_save'] ) && !empty( $_POST['bedaya_save']) ){
        foreach ($_POST as $key => $value) {
            if(in_array($key,['first_resala_first_content','first_resala_second_content','first_resala_third_content'])){
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
                <h1 class="text-center bedaya-title"><span>إعدادات صفحة الرؤية والرسالة لمركز بداية </span></h1>
            </header>
        </div>
            <br/>
        <div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
            <form class="form-horizontal p-4" method="post" action="#">
                <div class="row justify-content-center">    
                    <div class="col-md-6">
                        <div class="services">
                            <div class="form-group">
                                <label for="first_resala_first_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
                                <div class="col-sm-12 text-right ">
                                    <input type="text" class="form-control" id="first_resala_first_title" name="first_resala_first_title" value="<?php echo get_option('first_resala_first_title'); ?>">
                                </div>
                            </div>
                            <div class="form-group text-left">
                                <label for="first_resala_first_content" class="col-sm-6 control-label text-white">المقال</label>
                                <div class="col-sm-12">
                                    <?php wp_editor( get_option('first_resala_first_content'), 'first_resala_first_content',  array('textarea_rows'=>5,'textarea_name'=> 'first_resala_first_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_resala_first_content','class'=>'form-control',) );  ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="services">
                            <div class="form-group">
                                <label for="first_resala_second_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
                                <div class="col-sm-12 text-right ">
                                    <input type="text" class="form-control" id="first_resala_second_title" name="first_resala_second_title" value="<?php echo get_option('first_resala_second_title'); ?>">
                                </div>
                            </div>
                            <div class="form-group text-left">
                                <label for="first_resala_second_content" class="col-sm-6 control-label text-white">المقال</label>
                                <div class="col-sm-12">
                                    <?php wp_editor( get_option('first_resala_second_content'), 'first_resala_second_content',  array('textarea_rows'=>5,'textarea_name'=> 'first_resala_second_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_resala_second_content','class'=>'form-control',) );  ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="services">
                            <div class="form-group">
                                <label for="first_resala_third_title" class="col-sm-12 text-right  control-label text-white">العنوان </label>
                                <div class="col-sm-12 text-right ">
                                    <input type="text" class="form-control" id="first_resala_third_title" name="first_resala_third_title" value="<?php echo get_option('first_resala_third_title'); ?>">
                                </div>
                            </div>
                            <div class="form-group text-left">
                                <label for="first_resala_third_content" class="col-sm-6 control-label text-white">المقال</label>
                                <div class="col-sm-12">
                                    <?php wp_editor( get_option('first_resala_third_content'), 'first_resala_third_content',  array('textarea_rows'=>5,'textarea_name'=> 'first_resala_third_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'first_resala_third_content','class'=>'form-control',) );  ?>
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