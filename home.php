<?php get_header(); ?>

    <section class="about__hero">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-inverted">Blog</h1>
                    <p>Ho voluto raccogliere in questo blog tutte le <strong>esperienze</strong> e gli <strong>insegnamenti</strong> che ricevo quotidianamente nel mio lavoro di <strong>web marketing specialist</strong>. Vorrei diventasse  un luogo in cui affrontare le tematiche e i problemi che si incontrano giorno dopo giorno svolgendo questa professione e spero anche possa essere utile per chi si affaccia per la prima volta in questo vasto mondo digitale. Buona lettura!</p>
                </div>
            </div>
        </div>
    </section>

            <div class="container" id="blog">
                <div class="row">
                    <div class="col-xs-12">
                     

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        	<?php get_template_part( 'template-parts/post-list', get_post_format() ); ?>

						<?php endwhile; endif; ?>

                        <hr>

                        <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
                        <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>


                    </div>
                </div>
            </div>

<?php get_footer(); ?>

