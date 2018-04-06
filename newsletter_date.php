<?php /*
	Template Name: Date Range Test
*/ ?>
<?php
		if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2 class="hide"><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif;  //END PAGE CONTENT ?>

		<?php 

			function filter_where($where = '') {
				$where .= " AND post_date >= '" . date('Y-m-d') . "'";
				return $where;
			}
			add_filter('posts_where', 'filter_where');
			query_posts($query_string . 'cat=1&showposts=5&order=ASC');

			if (have_posts()) : while (have_posts()) : the_post();  // THE LOOP
				the_excerpt();
			endwhile; endif;	

			wp_reset_query(); //Should reset the query so it doesn't effect the one below, but it does not work.

			query_posts('cat=3&showposts=1'); //Should not be effected by original query since it should have been reset

			if (have_posts()) : while (have_posts()) : the_post();
				echo '<div style="background:#ccc;">';
				the_excerpt();
				echo '</div>';
			endwhile; endif;
		?>