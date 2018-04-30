<div id="post-<?php the_ID(); ?>" class="post__list" data-aos="fade-up" data-aos-easing="ease-out">
	<ul class="post__list--categories">
		<?php 
			$categories = get_the_category();
			foreach ($categories as $category) {
				echo '<li><a href="'. esc_url(get_category_link($category->term_id)) .'">' .esc_html($category->name). '</a></li>';
			}
		?>
	</ul> 
	<h2 class="post__list--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="post__list--intro"><?php the_excerpt(); ?></p>
	<p class="post__list--date"><?php echo get_the_date('j F Y'); ?><?php comments_number( '', ' / Un commento', ' / % commenti' ); ?></p>
</div>		