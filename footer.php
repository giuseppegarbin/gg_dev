

        <footer id="main__footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="main__footer--items">
                            <li class="main__footer--item"><a href="#">About</a></li>
                            <li class="main__footer--item"><a href="#">Contatti</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p class="main__footer--copy">&copy; 2018 Giuseppe Garbin<br/><a href="#">Termini di utilizzo</a>, <a href="#">Privacy & Cookies</a></p>    
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