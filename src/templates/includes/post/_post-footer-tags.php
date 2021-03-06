<!-- FOOTER TAGS -->
<?php
$tags = wp_get_post_tags( get_the_ID() );

if ( isset( $tags ) && count( $tags ) ) {
?>
<div class="post-footer__tags">
	<h2 class="post-footer-title"><?= __( 'Tags' ); ?></h2>
	<?php foreach( $tags as $tag ) { ?>
		<a href="<?= get_tag_link( $tag->term_id ); ?>" class="post-tag"><?= $tag->name; ?></a>
	<?php } ?>
</div><!-- /.post-footer__tags -->
<?php
}
?>
