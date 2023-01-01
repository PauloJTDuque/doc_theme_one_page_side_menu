<?php

function wpdoc_load_scripts(){
   
    // load font and css

    wp_enqueue_style('wpdoc_style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css' ), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap', array(), null);

    wp_enqueue_style('wpdoc_font', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), 1, 'all');
    wp_enqueue_style('wpdoc_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css.css', array(), 1, 'all');
    wp_enqueue_style('wpdoc_slick', get_template_directory_uri() . '/assets/css/slick.css.css', array(), 1, 'all');
    wp_enqueue_style('wpdoc_lightgallery', get_template_directory_uri() . '/assets/css/lightgallery.min.css', array(), 1, 'all');
    wp_enqueue_style('wpdoc_animate', get_template_directory_uri() . '/assets/css/animate.css', array(), 1, 'all');
    wp_enqueue_style('wpdoc_jqueryui', get_template_directory_uri() . '/assets/css/jQueryUi.min.css', array(), 1, 'all');
    wp_enqueue_style('wpdoc_textrotate', get_template_directory_uri() . '/assets/css/textRotate.css', array(), 1, 'all');
    wp_enqueue_style('wpdoc_select2', get_template_directory_uri() . '/assets/css/select2.min.css', array(), 1, 'all');
    wp_enqueue_style('wpdoc_flaticon', get_template_directory_uri() . '/assets/css/falticon.css', array(), 1, 'all');

    
    // load JS

    wp_enqueue_script( 'wpdoc_jqueryui_js', get_template_directory_uri() . '/assets/js/jQueryUi.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_vendor_js', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_vendorjqury_js', get_template_directory_uri() . '/assets/js/vendorjqury.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_jqueryui112_js', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_isotope_js', get_template_directory_uri() . '/assets/js/isotope.pkg.min.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_jquery_js', get_template_directory_uri() . '/assets/js/jquery.slick.min.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_slick_js', get_template_directory_uri() . '/assets/js/jquery.slick.min.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_mailchimp_js', get_template_directory_uri() . '/assets/js/mailchimp.min.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_counter_js', get_template_directory_uri() . '/assets/js/counter.min.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_lightgallery_js', get_template_directory_uri() . '/assets/js/jquery.lightgallery.min.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_jquerylightgallery_js', get_template_directory_uri() . '/assets/js/jquery.lightgallery.min.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_lightgallerymin_js', get_template_directory_uri() . '/assets/js/lightgallery.min.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_ripples_js', get_template_directory_uri() . '/assets/js/ripples.min.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_wow_js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_textRotate_js', get_template_directory_uri() . '/assets/js/textRotate.min.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_select2_js', get_template_directory_uri() . '/assets/js/select2.min.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_main_js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
    wp_enqueue_script( 'wpdoc_custom_js', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdoc_load_scripts' );




