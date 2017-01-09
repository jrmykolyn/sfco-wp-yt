<?php
get_header();
?>
<section class="hero-wrap">

</section><!-- /.hero-wrap -->
<main class="main">
    <section class="layout-section">
        <div class="layout-section__inner">
        <?php while ( have_posts() ): the_post(); ?>
            <div class="post-header">
                <a href="#" class="post-tag--leading">Post Tag</a>
                <h1><?= the_title(); ?></h1>
                <p class="post-copy--leading"><?= get_field( 'dek' ); ?></p>
            </div><!-- /.post-header -->
            <div class="post-body">
            <?php the_content(); ?>
            </div><!-- /.post-body -->
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
        <?php endwhile; ?>
        </div><!-- /.layout-section__inner -->
    </section><!-- /.layout-section -->
</main>

<?php
get_footer();
?>