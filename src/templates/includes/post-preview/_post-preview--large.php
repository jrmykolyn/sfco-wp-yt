<?php
$thumb = get_the_post_thumbnail();
$cat = get_first_post_category( get_the_ID() );
?>

<article class="post-preview--large">
	<div class="post-preview--large__inner">
		<div class="post-preview-supporting-content--large">
			<a href="<?= get_permalink(); ?>" tabindex="-1">
			<?php
			if ( $thumb ) {
				echo $thumb;
			} else {
			?>
					<img src="<?= get_template_directory_uri() . '/img/placeholder/post-preview-image.png' ?>" alt="Placeholder Image" />
			<?php
			}
			?>
			</a>
		</div><!-- /.post-preview-supporting-content--large -->
		<div class="post-preview-main-content--large">
			<?php
			if ( $cat ) {
			?>
			<div class="post-preview-header--large">
				<a href="<?= get_category_link( $cat->term_id ); ?>"class="category-node"><?= $cat->name; ?></a>
			</div>
			<?php
			}
			?>
			<div class="post-preview-body--large">
				<h2 class="post-preview-title">
					<a href="<?= get_permalink(); ?>"><?= the_title(); ?></a>
				</h2>
				<p class="post-preview-dek">
				<?php
				if ( has_excerpt() ) {
					echo get_the_excerpt();
				}
				?>
				</p>
			</div>
			<div class="post-preview-footer--large">
				<p class="post-byline">
					<span><?= get_the_author(); ?></span>
					<span><?= get_the_date(); ?></span>
				</p>
			</div>
		</div><!-- /.post-preview-main-content--large -->
	</div><!-- /.post-preview__inner -->
</article><!-- /.post-preview -->
