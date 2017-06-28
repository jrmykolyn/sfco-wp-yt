<div class="post-header">
    <?php get_template_part( 'includes/category-node/_category-node' ); ?>
    <h1><?= the_title(); ?></h1>
    <p class="post-copy--leading"><?= get_field( 'dek' ); ?></p>
    <div class="post-byline-wrap">
        <img src="https://placeholdit.imgix.net/~text?txtsize=12&txt=IMG&w=50&h=50" alt="#">
        <p class="post-byline">
            <span><?= get_the_author(); ?></span>
            <span><?= get_the_date(); ?></span>
        </p>
    </div><!-- /.post-byline -->
</div><!-- /.post-header -->
