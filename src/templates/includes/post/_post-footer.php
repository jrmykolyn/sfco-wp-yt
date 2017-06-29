<div class="post-footer">
    <!-- FOOTER TAGS -->
    <?php
    $tags = wp_get_post_tags( get_the_ID() );

    if ( isset( $tags ) && count( $tags ) ):
    ?>
    <div class="post-footer__tags">
        <h2 class="post-footer-title"><?= __( 'Tags' ); ?></h2>
    <?php foreach( $tags as $tag ): ?>
        <a href="<?= get_tag_link( $tag->term_id ); ?>" class="post-tag"><?= $tag->name; ?></a>
    <?php endforeach; ?>
    </div><!-- /.post-footer__tags -->
    <?php
    endif;
    ?>
    <!-- FOOTER POST PREVIEWS -->
    <?php
    /// TODO[@jrmykolyn] - Move logic into additional partial or function.
    $category = get_first_post_category( get_the_ID() );
    $args = ( $category && $category->cat_ID ) ? array( 'category' => $category->cat_ID, 'posts_per_page' => 3, 'ignore_sticky_posts' => 1 ) : null;
    $query = new WP_Query( $args );

    if ( $query->have_posts() ):
    ?>
    <div class="post-footer__more">
        <h2 class="post-footer-title"><?= __( 'Recent Posts' ); ?></h2>
        <?php
        while ( $query->have_posts() ): $query->the_post();
            get_template_part( 'includes/post-preview/_post-preview--min' );
        endwhile;
        ?>
    </div>
    <?php
    endif;
    ?>
</div><!-- /.post-footer-->
