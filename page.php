<?php get_header(); ?>

    <section class="about__hero">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-inverted"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>

            <div class="container" id="blog">
                <div class="row">
                    <div class="col-xs-12">
                     
                        <?php the_content(); ?>   

                    </div>
                </div>
            </div>

<?php get_footer(); ?>

