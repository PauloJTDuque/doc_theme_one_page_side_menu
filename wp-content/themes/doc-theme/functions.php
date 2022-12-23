<?php


function load_stylesheets() {
    // load font and css
    wp_register_style('font', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), 1, 'all');
    wp_enqueue_style('font');

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('slick', get_template_directory_uri() . '.assets/css/slick.css', array(), 1, 'all');
    wp_enqueue_style('slick');

    wp_register_style('lightgallery', get_template_directory_uri() . '/assets/css/lightgallery.min.css', array(), 1, 'all');
    wp_enqueue_style('lightgallery');

    wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), 1, 'all');
    wp_enqueue_style('animate');

    wp_register_style('jqueryui', get_template_directory_uri() . '/assets/css/jQueryUi.min.css', array(), 1, 'all');
    wp_enqueue_style('jqueryu');

    wp_register_style('textrotate', get_template_directory_uri() . '/assets/css/textRotate.css', array(), 1, 'all');
    wp_enqueue_style('textrotate');

    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
    wp_enqueue_style('style');
    
    wp_register_style('select2', get_template_directory_uri() . '/assets/css/select2.min.css', array(), 1, 'all');
    wp_enqueue_style('select2');

}

// load scripts
function addjs(){

    wp_register_script('jqueryui', get_template_directory_uri() . './assets/js/jQueryUi.js', array(), 1, 1, 1);
    wp_enqueue_script('jqueryui');

    wp_register_script('vendor', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array(), 1, 1, 1);
    wp_enqueue_script('vendor');
    
    wp_register_script('vendorjqury', get_template_directory_uri() . '/assets/js/vendorjqury.js', array(), 1, 1, 1);
    wp_enqueue_script('vendorjqury');

    wp_register_script('jqueryui', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jqueryui');

    wp_register_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkg.min.js', array(), 1, 1, 1);
    wp_enqueue_script('isotope');

    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.slick.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('slick', get_template_directory_uri() . '/assets/js/jquery.slick.min.js', array(), 1, 1, 1);
    wp_enqueue_script('slick');

    wp_register_script('mailchimp', get_template_directory_uri() . '/assets/js/mailchimp.min.js', array(), 1, 1, 1);
    wp_enqueue_script('mailchimp');

    wp_register_script('counter', get_template_directory_uri() . '/assets/js/counter.min.js', array(), 1, 1, 1);
    wp_enqueue_script('counter');

    wp_register_script('lightgallery', get_template_directory_uri() . '/assets/js/jquery.lightgallery.min.js', array(), 1, 1, 1);
    wp_enqueue_script('lightgallery');

    wp_register_script('jquerylightgallery', get_template_directory_uri() . '/assets/js/jquery.lightgallery.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquerylightgallery');

    wp_register_script('lightgallery', get_template_directory_uri() . '/assets/js/lightgallery.min.js', array(), 1, 1, 1);
    wp_enqueue_script('lightgallery');

    wp_register_script('ripples', get_template_directory_uri() . '/assets/js/ripples.min.js', array(), 1, 1, 1);
    wp_enqueue_script('ripples');

    wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), 1, 1, 1);
    wp_enqueue_script('wow');

    wp_register_script('textRotate', get_template_directory_uri() . '/assets/js/textRotate.min.js', array(), 1, 1, 1);
    wp_enqueue_script('textRotate');

    wp_register_script('select2', get_template_directory_uri() . '/assets/js/select2.min.js', array(), 1, 1, 1);
    wp_enqueue_script('select2');
    
    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), 1, 1, 1);
    wp_enqueue_script('main');

    wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');

}    

?>