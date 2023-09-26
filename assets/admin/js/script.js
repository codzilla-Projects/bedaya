jQuery(document).ready(function($) {

    $('.header_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.header_img').attr('src', attachment.url);
            $('.header_img_url').val(attachment.url);
        })
        .open();
    });

    $('.sticky_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.sticky_img').attr('src', attachment.url);
            $('.sticky_img_url').val(attachment.url);
        })
        .open();
    });

    $('.favicon_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.favicon_img').attr('src', attachment.url);
            $('.favicon_img_url').val(attachment.url);
        })
        .open();
    });

    $('.footer_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.footer_img').attr('src', attachment.url);
            $('.footer_img_url').val(attachment.url);
        })
        .open();
    });

    $('.hero_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.hero_img').attr('src', attachment.url);
            $('.hero_img_url').val(attachment.url);
        })
        .open();
    });

    $('.about_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.about_img').attr('src', attachment.url);
            $('.about_img_url').val(attachment.url);
        })
        .open();
    });

    $('.first_service_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.first_service_img').attr('src', attachment.url);
            $('.first_service_img_url').val(attachment.url);
        })
        .open();
    }); 

    $('.second_service_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.second_service_img').attr('src', attachment.url);
            $('.second_service_img_url').val(attachment.url);
        })
        .open();
    }); 

    $('.third_service_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.third_service_img').attr('src', attachment.url);
            $('.third_service_img_url').val(attachment.url);
        })
        .open();
    }); 

    $('.fourth_service_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.fourth_service_img').attr('src', attachment.url);
            $('.fourth_service_img_url').val(attachment.url);
        })
        .open();
    }); 

    $('.first_reserve_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.first_reserve_img').attr('src', attachment.url);
            $('.first_reserve_img_url').val(attachment.url);
        })
        .open();
    });
    $('.second_reserve_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.second_reserve_img').attr('src', attachment.url);
            $('.second_reserve_img_url').val(attachment.url);
        })
        .open();
    });
    $('.third_reserve_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.third_reserve_img').attr('src', attachment.url);
            $('.third_reserve_img_url').val(attachment.url);
        })
        .open();
    });  

    $('.why_bedaya_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.why_bedaya_img').attr('src', attachment.url);
            $('.why_bedaya_img_url').val(attachment.url);
        })
        .open();
    });

    $('.third_nafsy_first_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.third_nafsy_first_img').attr('src', attachment.url);
            $('.third_nafsy_first_img_url').val(attachment.url);
        })
        .open();
    });

    $('.third_nafsy_second_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.third_nafsy_second_img').attr('src', attachment.url);
            $('.third_nafsy_second_img_url').val(attachment.url);
        })
        .open();
    });

    $('.first_section_first_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.first_section_first_img').attr('src', attachment.url);
            $('.first_section_first_img_url').val(attachment.url);
        })
        .open();
    });
    $('.first_section_second_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.first_section_second_img').attr('src', attachment.url);
            $('.first_section_second_img_url').val(attachment.url);
        })
        .open();
    });
    $('.first_section_third_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.first_section_third_img').attr('src', attachment.url);
            $('.first_section_third_img_url').val(attachment.url);
        })
        .open();
    });
    $('.second_section_first_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.second_section_first_img').attr('src', attachment.url);
            $('.second_section_first_img_url').val(attachment.url);
        })
        .open();
    });
    $('.second_section_second_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.second_section_second_img').attr('src', attachment.url);
            $('.second_section_second_img_url').val(attachment.url);
        })
        .open();
    });

    $('.about_first_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.about_first_img').attr('src', attachment.url);
            $('.about_first_img_url').val(attachment.url);
        })
        .open();
    });

    $('.about_second_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.about_second_img').attr('src', attachment.url);
            $('.about_second_img_url').val(attachment.url);
        })
        .open();
    });
    $('.about_third_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.about_third_img').attr('src', attachment.url);
            $('.about_third_img_url').val(attachment.url);
        })
        .open();
    });
    $('.about_fourth_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.about_fourth_img').attr('src', attachment.url);
            $('.about_fourth_img_url').val(attachment.url);
        })
        .open();
    });
    $('.about_fivth_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.about_fivth_img').attr('src', attachment.url);
            $('.about_fivth_img_url').val(attachment.url);
        })
        .open();
    });
    $('.about_sixth_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.about_sixth_img').attr('src', attachment.url);
            $('.about_sixth_img_url').val(attachment.url);
        })
        .open();
    });
    $('.about_seventh_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.about_seventh_img').attr('src', attachment.url);
            $('.about_seventh_img_url').val(attachment.url);
        })
        .open();
    });
    $('.about_eighth_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.about_eighth_img').attr('src', attachment.url);
            $('.about_eighth_img_url').val(attachment.url);
        })
        .open();
    });
    $('.about_ninth_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.about_ninth_img').attr('src', attachment.url);
            $('.about_ninth_img_url').val(attachment.url);
        })
        .open();
    });

});
   