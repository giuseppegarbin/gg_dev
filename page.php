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
    
    <section class="page--content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                     
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php the_content(); ?>

                    <?php endwhile; endif; ?> 

                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>

