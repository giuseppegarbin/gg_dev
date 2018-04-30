<?php get_header(); ?>

    <section class="about__hero">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h4>Ciao!</h4>
                    <h1 class="text-inverted">Mi chiamo Giuseppe Garbin e sono un <span>web marketing specialist</span> di Milano</h1>
                    <p>Benvenuto sul mio sito! Dai un'occhiata al <a href="<?php echo site_url( '/blog' ); ?>">blog</a>, scopri qualcosa in più <a href="<?php echo site_url( '/about' ); ?>">su di me</a> o <a href="<?php echo site_url( '/contatti' ); ?>">contattami</a>.</p>
                </div>
            </div>
        </div>
    </section>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                     
                        <?php $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 5 ) ); ?>

                        <?php if ( $latest_blog_posts->have_posts() ) : ?>

                            <?php while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>
                                
                                <?php get_template_part( 'template-parts/post-list', get_post_format() ); ?>
                                
                            <?php endwhile; ?>
                        
                        <?php else : ?>
                            
                            <p class="text-alert">Oops... Non è stato trovato nessun post.</p>

                        <?php endif; ?>


                    </div>
                </div>
            </div>

<?php get_footer(); ?>

