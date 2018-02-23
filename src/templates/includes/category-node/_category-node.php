<?php
$category = get_first_post_category( get_the_ID() );

if ( $category ):
?>
	<a href="<?= get_category_link( $category->cat_ID ); ?>" class="category-node"><?= $category->name; ?></a>
<?php
endif;
?>
