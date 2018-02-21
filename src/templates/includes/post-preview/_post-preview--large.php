<?php
$thumb = get_the_post_thumbnail();
$cat = get_first_post_category( get_the_ID() );
?>

<article class="post-preview--large">
    <a href="<?= get_permalink(); ?>"class="post-preview--large__inner">
        <div class="post-preview-supporting-content--large">
            <?php
            if ( $thumb ):
                echo $thumb;
            else:
                echo '<img src="https://placeholdit.imgix.net/~text?txtsize=48&txt=PLACEHOLDER&w=800&h=450" alt="Placeholder Image" />';
            endif;
            ?>
        </div><!-- /.post-preview-supporting-content--large -->
        <div class="post-preview-main-content--large">
            <?php
            /// TODO[@jrmykolyn] - Update 'category' markup to include link.
            if ( $cat ):
            ?>
            <div class="post-preview-header--large">
                <span class="category-node"><?= $cat->name; ?></span>
            </div>
            <?php
            endif;
            ?>
            <div class="post-preview-body--large">
                <h1 class="post-preview-title"><?= the_title(); ?></h1>
                <p class="post-preview-dek">
                <?php
                if ( get_field( 'dek' ) ):
                    echo get_field( 'dek' );
                endif;
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
    </a><!-- /.post-preview__inner -->
</article><!-- /.post-preview -->
