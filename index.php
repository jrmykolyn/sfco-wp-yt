<?php
// DECLARE VARS.
$MAX_FEATURED_POSTS = 3;

get_header();
?>

<main class="main">
    <section class="layout-section">
        <div class="layout-section__inner">
            <?php
            if ( have_posts() ):
                $index = 0;

                while ( have_posts() ): the_post();
                    if ( $index < $MAX_FEATURED_POSTS ):
                        get_template_part( 'includes/post-preview/_post-preview--large' );
                    else:
                        get_template_part( 'includes/post-preview/_post-preview' );
                    endif;

                    $index++;
                endwhile;
            else:
            ?>
            <h2>Whoops! Looks like you don't have any posts.</h2>
            <?php
            endif;
            ?>
        </div><!-- /.layout-section__inner -->
    </section><!-- /.layout-section -->
    <section class="layout-section">
        <div class="layout-section__inner">
            <?php
            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text' => __( 'Previous page', 'sfco-wp-yt' ),
                'next_text' => __( 'Next page', 'sfco-wp-yt' )
            ) );
            ?>
        </div><!-- /.layout-section__inner -->
    </section><!-- /.layout-section -->
</main>
<?php
get_footer();
?>