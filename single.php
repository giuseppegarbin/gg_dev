<?php get_header(); ?>

            <div class="container" id="blog">
                <div class="row">
                    <div class="col-xs-12">
                     
                    <?php while ( have_posts() ) : the_post(); ?>

                        <article class="post" id="post-<?php the_ID(); ?>">

                            <!-- POST CATEGORIES -->
                            <ul class="post--categories">
                                <?php 
                                    $categories = get_the_category();
                                    foreach ($categories as $category) {
                                        echo '<li><a href="'. esc_url(get_category_link($category->term_id)) .'">' .esc_html($category->name). '</a></li>';
                                    }
                                ?>
                            </ul>

                            <!-- POST TITLE -->
                            <h1 class="post--title"><?php the_title(); ?></h1>

                            <!-- POST FEATURED IMAGE -->
                            <?php if ( '' !== get_the_post_thumbnail() ) : ?>
                                <div class="post--featured-image">
                                    <?php the_post_thumbnail( 'gg-theme-featured-image' ); ?>
                                </div>
                            <?php endif; ?>

                            <!-- POST AUTHOR & DATE -->
                            <p class="post--details"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a> / <?php echo get_the_date('j F Y'); ?></p>

                            <!-- POST CONTENT -->
                            <main class="post--content">
                                <?php the_content(); ?>
                            </main>

                        </article>
                        
                        <!-- POST TAGS -->
                        <?php if(has_tag()) { ?>
                            <h4>Topics</h4>
                            <ul class="post--tags">
                                <?php
                                $tags = get_the_tags();
                                foreach ($tags as $tag) {
                                     echo '<li><a href="'. esc_url(get_tag_link($tag->term_id)) .'">' .esc_html($tag->name). '</a></li>';
                                }
                                ?>
                            </ul>
                        <?php } ?>

                        <!-- POST SHARE BUTTONS -->
                        <?php get_template_part( 'inc/share-buttons', get_post_format() ); ?>

                        <!-- POST COMMENTS -->
                        <?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>

                    <?php endwhile; ?>



                    </div>
                </div>
            </div>

<?php get_footer(); ?>
