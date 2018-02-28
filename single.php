<?php
$thumb = get_the_post_thumbnail();

get_header();
while ( have_posts() ): the_post();
	if ( $thumb ):
		get_template_part( 'includes/post/_post-hero' );
	endif;
?>
<main class="main">
	<section class="layout-section">
		<div class="layout-section__inner">
			<?php
			get_template_part( 'includes/post/_post-header' );
			get_template_part( 'includes/post/_post-body' );
			get_template_part( 'includes/post/_post-footer' );
			?>
		</div>
	</section>
</main>
<?php
endwhile;
get_footer();
?>
