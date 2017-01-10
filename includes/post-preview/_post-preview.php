<article class="post-preview">
    <div class="post-preview__header">
        <a href="#" class="post-tag--preview">Test Tag 123</a>
    </div>
    <div class="post-preview__body">
        <a href="<?= get_permalink(); ?>">
            <h2><?= the_title(); ?></h2>
        </a>
        <p>
        <?php
        if ( get_field( 'dek' ) ):
            echo get_field( 'dek' );
        endif;
        ?>
        </p>
    </div>
    <div class="post-preview__footer">
        <p class="post-byline">
            <span><?= get_the_author(); ?></span>
            <span><?= get_the_date(); ?></span>
        </p>
    </div>
</article><!-- /.post-preview -->