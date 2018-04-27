

        <footer id="main__footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <?php 
                            wp_nav_menu( array(
                                'container' => 'nav', 
                                'container_class' => '',
                                'container_id' => '',
                                'menu_class' => 'main__footer--items',
                                'menu_id' => '',
                                'depth' => 1,
                                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                                'theme_location' => 'footer-menu'
                            ) ); 
                        ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p class="main__footer--copy">&copy; <?php echo date("Y", time()); ?> Giuseppe Garbin</p>    
                    </div>
                </div>
            </div>
        </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos.js"></script>
    <script>
        AOS.init({
            disable: 'mobile',
            duration: 250,
            offset: 50,
            once: true
        });
    </script>
    <script>
    $(document).ready(function () {
        $('#nav__icon').click(function () {
            $(this).toggleClass('open');
            $('#nav__toggle').slideToggle();
            $('#nav').toggleClass('nav__bar--opened');
        });
    });
    </script>

    <?php wp_footer(); ?> 
    
</body>
</html>