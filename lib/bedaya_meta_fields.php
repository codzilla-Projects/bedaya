<?php 
function bedaya_add_meta_faq() {
    add_meta_box( "edman_page", "عرض السؤال فى صفحة علاج الادمان ", "faq_edman_page", array("faq"), "side", "high" );
}
add_action( 'add_meta_boxes', 'bedaya_add_meta_faq' );
/* Display the post meta box. */
    function faq_edman_page( $object, $box ) { 
    $edman_faq_show = esc_attr( get_post_meta( $object->ID, 'edman_faq_show', true ) );
    $is_checked = $edman_faq_show === '1' ? 'checked' : '';
?>
<div class="form-group row mt-3">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <input type="checkbox" name="edman_faq_show" id="edman_faq_show" class="edman_faq_show" value="1" <?=$is_checked ?>/>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10">
                <label for="edman_faq_show"><?php _e('عرض فى صفحة  علاج الادمان ','bedaya'); ?></label>
            </div>
        </div>
    </div>
</div>
<?php
}

function bedaya_add_meta_clinic() {
    add_meta_box( "about_page", "عرض فى صفحة من نحن ", "clinic_about_page", array("clinic"), "side", "high" );
}
add_action( 'add_meta_boxes', 'bedaya_add_meta_clinic' );
/* Display the post meta box. */
    function clinic_about_page( $object, $box ) { 
    $about_clinic_show = esc_attr( get_post_meta( $object->ID, 'about_clinic_show', true ) );
    $is_checked = $about_clinic_show === '1' ? 'checked' : '';
?>
<div class="form-group row mt-3">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <input type="checkbox" name="about_clinic_show" id="about_clinic_show" class="about_clinic_show" value="1" <?=$is_checked ?>/>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10">
                <label for="about_clinic_show"><?php _e('اضغط لعدم اظهارها فى صفحة من نحن ','bedaya'); ?></label>
            </div>
        </div>
    </div>
</div>
<?php
}
add_action( 'save_post', 'bedaya_save_custom_meta', 10, 2 );
function bedaya_save_custom_meta($post_id){
    if( isset($_POST['edman_faq_show']) ){
        update_post_meta($post_id, 'edman_faq_show', $_POST['edman_faq_show']);
    }
    else
        delete_post_meta($post_id,'edman_faq_show');

    if( isset($_POST['about_clinic_show']) ){
        update_post_meta($post_id, 'about_clinic_show', $_POST['about_clinic_show']);
    }
    else
        delete_post_meta($post_id,'about_clinic_show');
}