<?php
$cat = get_first_post_category( get_the_ID() );
?>

<article class="post-preview">
	<div class="post-preview__inner">
		<div class="post-preview-main-content">
			<?php
			if ( $cat ) {
			?>
			<div class="post-preview-header">
				<a href="<?= get_category_link( $cat->term_id ); ?>"class="category-node"><?= $cat->name; ?></a>
			</div>
			<?php
			}
			?>
			<div class="post-preview-body">
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
			<div class="post-preview-footer">
				<p class="post-byline">
					<span><?= get_the_author(); ?></span>
					<span><?= get_the_date(); ?></span>
				</p>
			</div>
		</div><!-- /.post-preview-main-content -->
	</div><!-- /.post-preview__inner -->
</article><!-- /.post-preview -->
