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
            ?>
                <img src="<?= get_template_directory_uri() . '/img/placeholder/post-preview-image.png' ?>" alt="Placeholder Image" />
            <?php
            endif;
            ?>
        </div><!-- /.post-preview-supporting-content--large -->
        <div class="post-preview-main-content--large">
            <?php
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
