<head>
    <!-- Meta Tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="author" content=""> -->
    <!-- Page Title -->
    <!-- <title>Nischinto - Medical landing page HTML template</title> -->

    <!-- Favicon Icon -->
    <link rel="icon" href="/assets/img/favicon.png" />

    <?php wp_head(); ?>
</head>

<header>
    <section class="side_bar">
        <div class="container_sidebar">
            <div class="logo">
            <?php 
                if( has_custom_logo() ){
                    the_custom_logo();
                }else{
                   ?>
                        <a href="<?php echo home_url( '/' ); ?>"><span><?php bloginfo( 'name' ); ?></span></a>
                    <?php
                }
            ?>                    
    
            </div>


        </div>



    </section>


</header>