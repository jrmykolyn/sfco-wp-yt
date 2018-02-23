<article class="post-preview--min">
	<a href="<?= get_permalink(); ?>"class="post-preview--min__inner">
		<div class="post-preview-main-content--min">
			<div class="post-preview-body--min">
				<h2 class="post-preview-title--min"><?= the_title(); ?></h2>
			</div>
			<div class="post-preview-footer--min">
				<p class="post-byline">
					<span><?= get_the_author(); ?></span>
					<span><?= get_the_date(); ?></span>
				</p>
			</div>
		</div><!-- /.post-preview-main-content -->
	</a><!-- /.post-preview--min__inner -->
</article><!-- /.post-preview--min -->
