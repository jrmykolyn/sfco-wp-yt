<div class="post-header">
	<?php get_template_part( 'includes/category-node/_category-node' ); ?>
	<h1><?= the_title(); ?></h1>
	<p class="post-copy--leading"><?= get_the_excerpt(); ?></p>
	<div class="post-byline-wrap">
		<?= get_avatar( $post->post_author ); ?>
		<p class="post-byline">
			<span><?= get_the_author(); ?></span>
			<span><?= get_the_date(); ?></span>
		</p>
	</div><!-- /.post-byline -->
</div><!-- /.post-header -->
