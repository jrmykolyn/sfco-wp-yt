<?php
get_header();
while ( have_posts() ): the_post();
    get_template_part( 'includes/post/_post-hero' );
?>
<main class="main post"><!-- /// TEMP - Move `post` class to new element; rebuild template. -->
    <section class="layout-section">
        <div class="layout-section__inner--narrow">
        <?php
        get_template_part( 'includes/post/_post-header' );
        get_template_part( 'includes/post/_post-body' );
        get_template_part( 'includes/post/_post-footer' );
        ?>
        </div><!-- /.layout-section__inner--narrow -->
    </section><!-- /.layout-section -->
</main>

<?php
endwhile;
get_footer();
?>