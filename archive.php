<?php get_header(); ?>

    <section class="about__hero">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php the_archive_title('<h1 class="text-inverted">', '</h1>'); ?>
                    <?php the_archive_description('<p>', '</p>'); ?>
                </div>
            </div>
        </div>
    </section>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        	<?php get_template_part( 'template-parts/post-list', get_post_format() ); ?>

						<?php endwhile; endif; ?>

                    </div>
                </div>
            </div>

<?php get_footer(); ?>