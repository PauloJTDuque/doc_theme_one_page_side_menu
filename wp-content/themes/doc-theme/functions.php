<?php

function wpdoc_load_scripts(){
   
    // load font and css

    wp_enqueue_style('wpdoc_style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css' ), 'all');
    
    wp_enqueue_style('wpdoc_font', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), 1, 'all');

    wp_enqueue_style('wpdoc_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css.css', array(), 1, 'all');

    wp_enqueue_style('wpdoc_slick', get_template_directory_uri() . '/assets/css/slick.css.css', array(), 1, 'all');

    wp_enqueue_style('wpdoc_lightgallery', get_template_directory_uri() . '/assets/css/lightgallery.min.css', array(), 1, 'all');

    wp_enqueue_style('wpdoc_animate', get_template_directory_uri() . '/assets/css/animate.css', array(), 1, 'all');
    
    wp_enqueue_style('wpdoc_jqueryui', get_template_directory_uri() . '/assets/css/jQueryUi.min.css', array(), 1, 'all');
    
    wp_enqueue_style('wpdoc_textrotate', get_template_directory_uri() . '/assets/css/textRotate.css', array(), 1, 'all');

    wp_enqueue_style('wpdoc_select2', get_template_directory_uri() . '/assets/css/select2.min.css', array(), 1, 'all');

    wp_enqueue_style('wpdoc_flaticon', get_template_directory_uri() . '/assets/css/falticon.css', array(), 1, 'all');

}
add_action( 'wp_enqueue_scripts', 'wpdoc_load_scripts' );




// function wpdoc_load_stylesheets() {

// }

// // load scripts
// function wpdoc_addjs(){

//     wp_register_script('jqueryui', get_template_directory_uri() . './assets/js/jQueryUi.js', array(), 1, 1, 1);
//     wp_enqueue_script('jqueryui');

//     wp_register_script('vendor', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array(), 1, 1, 1);
//     wp_enqueue_script('vendor');
    
//     wp_register_script('vendorjqury', get_template_directory_uri() . '/assets/js/vendorjqury.js', array(), 1, 1, 1);
//     wp_enqueue_script('vendorjqury');

//     wp_register_script('jqueryui', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array(), 1, 1, 1);
//     wp_enqueue_script('jqueryui');

//     wp_register_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkg.min.js', array(), 1, 1, 1);
//     wp_enqueue_script('isotope');

//     wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.slick.min.js', array(), 1, 1, 1);
//     wp_enqueue_script('jquery');

//     wp_register_script('slick', get_template_directory_uri() . '/assets/js/jquery.slick.min.js', array(), 1, 1, 1);
//     wp_enqueue_script('slick');

//     wp_register_script('mailchimp', get_template_directory_uri() . '/assets/js/mailchimp.min.js', array(), 1, 1, 1);
//     wp_enqueue_script('mailchimp');

//     wp_register_script('counter', get_template_directory_uri() . '/assets/js/counter.min.js', array(), 1, 1, 1);
//     wp_enqueue_script('counter');

//     wp_register_script('lightgallery', get_template_directory_uri() . '/assets/js/jquery.lightgallery.min.js', array(), 1, 1, 1);
//     wp_enqueue_script('lightgallery');

//     wp_register_script('jquerylightgallery', get_template_directory_uri() . '/assets/js/jquery.lightgallery.min.js', array(), 1, 1, 1);
//     wp_enqueue_script('jquerylightgallery');

//     wp_register_script('lightgallery', get_template_directory_uri() . '/assets/js/lightgallery.min.js', array(), 1, 1, 1);
//     wp_enqueue_script('lightgallery');

//     wp_register_script('ripples', get_template_directory_uri() . '/assets/js/ripples.min.js', array(), 1, 1, 1);
//     wp_enqueue_script('ripples');

//     wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), 1, 1, 1);
//     wp_enqueue_script('wow');

//     wp_register_script('textRotate', get_template_directory_uri() . '/assets/js/textRotate.min.js', array(), 1, 1, 1);
//     wp_enqueue_script('textRotate');

//     wp_register_script('select2', get_template_directory_uri() . '/assets/js/select2.min.js', array(), 1, 1, 1);
//     wp_enqueue_script('select2');
    
//     wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), 1, 1, 1);
//     wp_enqueue_script('main');

//     wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), 1, 1, 1);
//     wp_enqueue_script('custom');

// }    

