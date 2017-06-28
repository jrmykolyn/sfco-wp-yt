<article class="post-preview">
    <a href="<?= get_permalink(); ?>"class="post-preview__inner">
        <div class="post-preview-main-content">
            <?php
            /// TODO[@jrmykolyn] - Update 'category' markup to include link.
            if ( get_first_post_category( get_the_ID() ) ):
                ?>
            <div class="post-preview-header">
                <span class="category-node">Test Tag 123</span>
            </div>
            <?php
            endif;
            ?>
            <div class="post-preview-body">
                <h2 class="post-preview-title"><?= the_title(); ?></h2>
                <p class="post-preview-dek">
                <?php
                if ( get_field( 'dek' ) ):
                    echo get_field( 'dek' );
                endif;
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
    </a><!-- /.post-preview__inner -->
</article><!-- /.post-preview -->
