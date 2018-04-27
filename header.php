<!DOCTYPE html>
<html lang="it-IT">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Viewoport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Page Title -->
    <title><?php echo bloginfo( 'name' ) ?></title>

    <!-- Style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


    <?php wp_head(); ?>

</head>
<body>
    
    <header id="nav" class="nav__bar">
        <div class="container-fluid clearfix">
            <div id="nav__logo">
                <a href="<?php echo get_bloginfo( 'wpurl' );?>">
                    <svg version="1.1" id="Livello_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 180 180" style="enable-background:new 0 0 180 180;" xml:space="preserve">
                    <style type="text/css">
                        .nav__logo-svg{fill:#FF324A;}
                    </style>
                    <g>
                        <path class="nav__logo-svg" d="M0,91C0,57.8,11.5,0.2,53.5,0.2c7.8,0,14.1,5,17.3,11.3L72.9,0h31.4L77.9,139.2C71.4,173.5,52.8,180,38.5,180
                            C25.3,180,13,169.7,13,154.1c0-21.8,16-25.4,36.1-29.8l2.6-13c-6.5,5.8-14.9,10.1-24.9,10.1C6.1,121.4,0,105.1,0,91z M33.5,158.6
                            c4.5,0,10-4.6,12.8-18.7l1.5-7.9c-13.6,2.6-22.9,5.8-22.9,18.7C24.9,154.1,28.8,158.6,33.5,158.6z M26.6,86.4
                            c0,11.5,6.3,15.1,15.8,15.1c4.1,0,8.4-3.4,12.6-7.9L68.4,24c-3.5-7.2-8.9-10.3-12.6-10.3C34.8,13.7,26.6,65.8,26.6,86.4z"/>
                        <path class="nav__logo-svg" d="M180,89c0,33.1-11.5,90.7-53.5,90.7c-7.8,0-14.1-5-17.3-11.3l-2.2,11.5H75.7l26.4-139.2
                            C108.6,6.5,127.2,0,141.5,0C154.7,0,167,10.3,167,25.9c0,21.8-16,25.4-36.1,29.8l-2.6,13c6.5-5.8,14.9-10.1,24.9-10.1
                            C173.9,58.6,180,74.9,180,89z M153.4,93.6c0-11.5-6.3-15.1-15.8-15.1c-4.1,0-8.4,3.4-12.6,7.9L111.6,156
                            c3.5,7.2,8.9,10.3,12.6,10.3C145.2,166.3,153.4,114.2,153.4,93.6z M146.5,21.4c-4.5,0-10,4.6-12.8,18.7l-1.5,7.9
                            c13.6-2.6,22.9-5.8,22.9-18.7C155.1,25.9,151.2,21.4,146.5,21.4z"/>
                    </g>
                    </svg>
                </a>
            </div>
            <div id="nav__icon--box">
                <div id="nav__icon">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div id="nav__toggle">
                <?php 
                    wp_nav_menu( array(
                        'container' => 'nav', 
                        'container_class' => 'nav__box',
                        'container_id' => '',
                        'menu_class' => 'nav__box--items',
                        'menu_id' => '',
                        'depth' => 1,
                        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                        'theme_location' => 'main-menu'
                    ) ); 
                ?>
            </div>
        </div>
    </header>