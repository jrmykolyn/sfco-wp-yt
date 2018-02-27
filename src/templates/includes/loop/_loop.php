<?php
if ( have_posts() ) {
	$index = 0;
	$max_featured_posts = get_max_featured_posts();

	while ( have_posts() ) { the_post();
		if ( $index < $max_featured_posts ) {
			get_template_part( 'includes/post-preview/_post-preview--large' );
		} else {
			get_template_part( 'includes/post-preview/_post-preview' );
		}

		$index++;
	}
} else {
?>
<h2>Whoops! Looks like you don't have any posts.</h2>
<?php
}
 ?>
