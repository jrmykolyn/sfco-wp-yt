<!-- FOOTER POST PREVIEWS -->
<?php
$category = get_first_post_category( get_the_ID() );
$args = ( $category && $category->cat_ID ) ? array( 'category' => $category->cat_ID, 'posts_per_page' => 3, 'ignore_sticky_posts' => 1 ) : null;
$query = new WP_Query( $args );

if ( $query->have_posts() ) {
?>
<div class="post-footer__more">
	<h2 class="post-footer-title"><?= __( 'Recent Posts' ); ?></h2>
	<?php
	while ( $query->have_posts() ) { $query->the_post();
		get_template_part( 'includes/post-preview/_post-preview--min' );
	}
	?>
</div>
<?php
}
?>
