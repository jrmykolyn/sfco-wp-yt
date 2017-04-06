<div class="post-footer">
<?php
$tags = get_tags();
foreach( $tags as $tag ):
?>
    <a href="<?= get_tag_link( $tag->term_id ); ?>" class="post-tag"><?= $tag->name; ?></a>
<?php
endforeach;
?>
</div><!-- /.post-footer-->