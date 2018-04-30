<?php get_header(); ?>

            <div class="container" id="blog">
                <div class="row">
                    <div class="col-xs-12">
                     
                    <?php while ( have_posts() ) : the_post(); ?>

                        <article class="post" id="post-<?php the_ID(); ?>">
                            <ul class="post--categories">
                                <?php 
                                    $categories = get_the_category();
                                    foreach ($categories as $category) {
                                        echo '<li><a href="'. esc_url(get_category_link($category->term_id)) .'">' .esc_html($category->name). '</a></li>';
                                    }
                                ?>
                            </ul>
                            <h1 class="post--title"><?php the_title(); ?></h1>
                            <p class="post--details"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a> / <?php echo get_the_date('j F Y'); ?></p>
                            <main class="post--content">
                                <?php the_content(); ?>
                            </main>

                        </article>

                        <?php get_template_part( 'inc/share-buttons', get_post_format() ); ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        ?>

                    <?php endwhile; ?>



                    </div>
                </div>
            </div>

<?php get_footer(); ?>
